<?php

require_once('../../../../config.php');
require_once($CFG->dirroot . '/local/plan/lib.php');
require_once($CFG->dirroot . '/local/js/lib/setup.php');


///
/// Load parameters
///
$id = required_param('id', PARAM_INT); // plan id
$submitted = optional_param('submitbutton', null, PARAM_TEXT); // form submitted
$action = optional_param('action', null, PARAM_ALPHANUM); // other actions
$delete = optional_param('d', 0, PARAM_INT); // objective assignment id to delete
$confirm = optional_param('confirm', 0, PARAM_INT); // confirm delete

///
/// Permissions check
///
require_capability('local/plan:accessplan', get_system_context());


///
/// Load data
///
$plan = new development_plan($id);
$componentname = 'objective';
$component = $plan->get_component($componentname);
$currenturl = $CFG->wwwroot . '/local/plan/components/objective/index.php?id='.$id;
$plancompleted = $plan->status == DP_PLAN_STATUS_COMPLETE;
$cansetduedate = ($component->get_setting('setduedate') == DP_PERMISSION_ALLOW);
$cansetpriority = ($component->get_setting('setpriority') == DP_PERMISSION_ALLOW);

if($submitted && confirm_sesskey()) {
    $component->process_objective_settings_update();
} elseif ($action && confirm_sesskey()) {
    $component->process_action($action);
}

if($delete && $confirm) {
    if(!confirm_sesskey()) {
        totara_set_notification(get_string('confirmsesskeybad', 'error'), $currenturl);
    }
    if($component->remove_objective_assignment($delete)) {
        $plan->set_status_unapproved_if_declined();
        totara_set_notification(get_string('canremoveitem','local_plan'), $currenturl, array('style' => 'notifysuccess'));
    } else {
        totara_set_notification(get_string('cannotremoveitem', 'local_plan'), $currenturl);
    }
}

$fullname = $plan->name;
$pagetitle = format_string(get_string('developmentplan','local_plan').': '.$fullname);
$navlinks = array();
$plan->get_plan_base_navlinks($navlinks);
$navlinks[] = array('name' => $fullname, 'link'=> $CFG->wwwroot . '/local/plan/view.php?id='.$id, 'type'=>'title');
$navlinks[] = array('name' => $component->get_setting('name'), 'link' => '', 'type' => 'title');

$navigation = build_navigation($navlinks);

if($delete) {
    print_header_simple($pagetitle, '', $navigation, '', null, true, '');
    notice_yesno(get_string('confirmitemdelete','local_plan'), $currenturl.'&amp;d='.$delete.'&amp;confirm=1&amp;sesskey='.sesskey(), $currenturl);
    print_footer();
    die();
}


///
/// Javascript stuff
///

// If we are showing dialog
if ($component->can_update_items()) {
    // Setup lightbox
    local_js(array(
        TOTARA_JS_DIALOG,
        TOTARA_JS_TREEVIEW
    ));

    // Get course picker
    require_js(array(
        $CFG->wwwroot.'/local/plan/components/objective/find.js.php'
    ));
}

// Load datepicker JS
local_js(array(TOTARA_JS_DATEPICKER));


///
/// Display page
///
print_header_simple($pagetitle, '', $navigation, '', null, true, '');

print $plan->display_plan_message_box();

print_heading($fullname);
print $plan->display_tabs($componentname);

$objective_instructions = '<div class="objective_instructions">';
if($plan->role == 'manager') {
    $objective_instructions .= get_string('objective_instructions_manager', 'local_plan');
} else {
    $objective_instructions .= get_string('objective_instructions_learner', 'local_plan');
}

$objective_instructions .= get_string('objective_instructions_detail', 'local_plan');

if ($component->get_setting('updateobjective') >= DP_PERMISSION_REQUEST) {
    $objective_instructions .= get_string('objective_instructions_add', 'local_plan');
}

$objective_instructions .= '</div>';

print $objective_instructions;

print $component->display_picker();

print '<form id="dp-component-update" action="' . $currenturl . '" method="POST">';
print '<input type="hidden" id="sesskey" name="sesskey" value="'.sesskey().'" />';
print $component->display_objective_list();

if(!$plancompleted && ($cansetduedate || $cansetpriority)) {
    print '<input type="submit" name="submitbutton" value="'.get_string('updatesettings', 'local_plan').'" />';
}

print '</form>';
print_footer();