<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'feedback', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['add_item'] = 'Add question to activity';
$string['add_items'] = 'Add question to activity';
$string['add_pagebreak'] = 'Add a page break';
$string['adjustment'] = 'Adjustment';
$string['after_submit'] = 'After submitting';
$string['allowfullanonymous'] = 'Allow full anonymous';
$string['analysis'] = 'Analysis';
$string['anonymous'] = 'Anonymous';
$string['anonymous_edit'] = 'Record user names';
$string['anonymous_entries'] = 'Anonymous entries';
$string['anonymous_user'] = 'Anonymous user';
$string['append_new_items'] = 'Append new items';
$string['autonumbering'] = 'Automated numbers';
$string['autonumbering_help'] = 'Enables or disables automated numbers for each question';
$string['average'] = 'Average';
$string['bold'] = 'Bold';
$string['cancel_moving'] = 'Cancel moving';
$string['cannotmapfeedback'] = 'Database problem, unable to map feedback to course';
$string['cannotsavetempl'] = 'saving templates is not allowed';
$string['cannotunmap'] = 'Database problem, unable to unmap';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha hasn\'t been set.';
$string['completed'] = 'completed';
$string['completed_feedbacks'] = 'Submitted answers';
$string['complete_the_form'] = 'Answer the questions...';
$string['completionsubmit'] = 'View as completed if the feedback is submitted';
$string['configallowfullanonymous'] = 'If this option is set yes so the feedback can be completed without any preceding logon. It only affects feedbacks on the homepage.';
$string['confirmdeleteentry'] = 'Are you sure you want to delete this entry?';
$string['confirmdeleteitem'] = 'Are you sure you want to delete this element?';
$string['confirmdeletetemplate'] = 'Are you sure you want to delete this template?';
$string['confirmusetemplate'] = 'Are you sure you want to use this template?';
$string['continue_the_form'] = 'Continue the form';
$string['count_of_nums'] = 'Count of numbers';
$string['courseid'] = 'courseid';
$string['creating_templates'] = 'Save these questions as a new template';
$string['delete_entry'] = 'Delete entry';
$string['delete_item'] = 'Delete question';
$string['delete_old_items'] = 'Delete old items';
$string['delete_template'] = 'Delete template';
$string['delete_templates'] = 'Delete template...';
$string['depending'] = 'depending items';
$string['depending_help'] = 'Depending items allow you to show items depend on values from other items.<br />
<strong>Here an build example to use it:</strong><br />
<ul>
<li>First create an item on which value other items depends.</li>
<li>Next add a pagebreak.</li>
<li>Next add the items depend on the item-value before<br />
Choose in the item creation-form the item in the list "depend item" and put the needed value into the textbox "depend value".</li>
</ul>
<strong>The structure should looks like this:</strong>
<ol>
<li>Item Q: do you have a car? A: yes/no</li>
<li>Pagebreak</li>
<li>Item Q: what color has your car?<br />
(this item depends on item 1 with value = yes)</li>
<li>Item Q: why you have not a car?<br />
(this item depends on item 1 with value = no)</li>
<li> ... other items</li>
</ol>
That is all. Have fun!';
$string['dependitem'] = 'depend item';
$string['dependvalue'] = 'depend value';
$string['description'] = 'Description';
$string['do_not_analyse_empty_submits'] = 'Do not analyse empty submits';
$string['dropdown'] = 'Multiple choice - single answer allowed (dropdownlist)';
$string['dropdownlist'] = 'Multiple choice - single answer (dropdown)';
$string['dropdownrated'] = 'Dropdownlist (rated)';
$string['dropdown_values'] = 'Answers';
$string['drop_feedback'] = 'Remove from this course';
$string['edit_item'] = 'Edit question';
$string['edit_items'] = 'Edit questions';
$string['email_notification'] = 'Send e-mail notifications';
$string['emailnotification'] = 'emailnotifications';
$string['emailnotification_help'] = 'If enabled, administrators receive email notification of feedback submissions.';
$string['emailteachermail'] = '{$a->username} has completed feedback activity : \'{$a->feedback}\'

You can view it here:

{$a->url}';
$string['emailteachermailhtml'] = '{$a->username} has completed feedback activity : <i>\'{$a->feedback}\'</i><br /><br />
You can view it <a href="{$a->url}">here</a>.';
$string['entries_saved'] = 'Your answers have been saved. Thank you.';
$string['export_questions'] = 'Export questions';
$string['export_to_excel'] = 'Export to Excel';
$string['feedbackclose'] = 'Close the feedback at';
$string['feedbackcloses'] = 'Feedback closes';
$string['feedback:complete'] = 'Complete a feedback';
$string['feedback:createprivatetemplate'] = 'Create private template';
$string['feedback:createpublictemplate'] = 'Create public template';
$string['feedback:deletesubmissions'] = 'Delete completed submissions';
$string['feedback:deletetemplate'] = 'Delete template';
$string['feedback:edititems'] = 'Edit items';
$string['feedback_is_not_for_anonymous'] = 'feedback is not for anonymous';
$string['feedback_is_not_open'] = 'The feedback is not open';
$string['feedback:mapcourse'] = 'Map courses to global feedbacks';
$string['feedbackopen'] = 'Open the feedback at';
$string['feedbackopens'] = 'Feedback opens';
$string['feedback_options'] = 'Feedback options';
$string['feedback:receivemail'] = 'Receive email notification';
$string['feedback:view'] = 'View a feedback';
$string['feedback:viewanalysepage'] = 'View the analysis page after submit';
$string['feedback:viewreports'] = 'View reports';
$string['file'] = 'File';
$string['filter_by_course'] = 'Filter by course';
$string['generategrade'] = 'Generate Grade';
$string['generategrade_help'] = 'If you want to use this feedback as a prerequisite for a conditional activity -
requiring that the feedback must be completed before that conditional activity becomes available -
then you must set Generate Grade to Yes';

$string['handling_error'] = 'Error occurred in feedback module action handling';
$string['hide_no_select_option'] = 'Hide the "Not selected" option';
$string['horizontal'] = 'horizontal';
$string['check'] = 'Multiple choice - multiple answers';
$string['checkbox'] = 'Multiple choice - multiple answers allowed (check boxes)';
$string['check_values'] = 'Possible responses';
$string['choosefile'] = 'Choose a file';
$string['chosen_feedback_response'] = 'chosen feedback response';
$string['importfromthisfile'] = 'Import from this file';
$string['import_questions'] = 'Import questions';
$string['import_successfully'] = 'Import successfully';
$string['info'] = 'Information';
$string['infotype'] = 'Information-Type';
$string['insufficient_responses_for_this_group'] = 'There are insufficient responses for this group';
$string['insufficient_responses'] = 'insufficient responses';
$string['insufficient_responses_help'] = 'There are insufficient responses for this group.

To keep the feedback anonymous, a minimum of 2 responses must be done.';
$string['item_label'] = 'Label';
$string['item_name'] = 'Question';
$string['items_are_required'] = 'Answers are required to starred questions.';
$string['label'] = 'Label';
$string['line_values'] = 'Rating';
$string['mapcourseinfo'] = 'This is a site-wide feedback that is available to all courses using the feedback block. You can however limit the courses to which it will appear by mapping them. Search the course and map it to this feedback.';
$string['mapcoursenone'] = 'No courses mapped. Feedback available to all courses';
$string['mapcourse'] = 'Map feedback to courses';
$string['mapcourse_help'] = 'By default, feedback forms created on your homepage are available site-wide
and will appear in all courses using the feedback block. You can force the feedback form to appear by making it a sticky block or limit the courses in which a feedback form will appear by mapping it to specific courses.';
$string['mapcourses'] = 'Map feedback to courses';
$string['mapcourses_help'] = 'Once you have selected the relevant course(s) from your search,
you can associate them with this feedback using map course(s). Multiple courses may be selected by holding down the Apple or Ctrl key whilst clicking on the course names. A course may be disassociated from a feedback at any time.';
$string['mappedcourses'] = 'Mapped courses';
$string['max_args_exceeded'] = 'Max 6 arguments can be handled, too many arguments for';
$string['maximal'] = 'maximal';
$string['messageprovider:message'] = 'Feedback reminder';
$string['messageprovider:submission'] = 'Feedback notifications';
$string['mode'] = 'Mode';
$string['modulename'] = 'Feedback';
$string['modulename_help'] = 'The feedback modules enables custom surveys to be created.';
$string['modulenameplural'] = 'Feedback';
$string['movedown_item'] = 'Move this question down';
$string['move_here'] = 'Move here';
$string['move_item'] = 'Move this question';
$string['moveup_item'] = 'Move this question up';
$string['multichoice'] = 'Multiple choice';
$string['multichoicerated'] = 'Multiple choice (rated)';
$string['multichoicetype'] = 'Multiple choice type';
$string['multichoice_values'] = 'Multiple choice values';
$string['multiple_submit'] = 'Multiple submissions';
$string['multiplesubmit'] = 'Multiple submissions';
$string['multiplesubmit_help'] = 'If enabled for anonymous surveys, users can submit feedback an unlimited number of times.';
$string['name'] = 'Name';
$string['name_required'] = 'Name required';
$string['next_page'] = 'Next page';
$string['no_handler'] = 'No action handler exists for';
$string['no_itemlabel'] = 'No label';
$string['no_itemname'] = 'No itemname';
$string['no_items_available_yet'] = 'No questions have been set up yet';
$string['non_anonymous'] = 'User\'s name will be logged and shown with answers';
$string['non_anonymous_entries'] = 'non anonymous entries';
$string['non_respondents_students'] = 'non respondents students';
$string['notavailable'] = 'this feedback is not available';
$string['not_completed_yet'] = 'Not completed yet';
$string['not_started'] = 'not started';
$string['no_templates_available_yet'] = 'No templates available yet';
$string['not_selected'] = 'Not selected';
$string['numeric'] = 'Numeric answer';
$string['numeric_range_from'] = 'Range from';
$string['numeric_range_to'] = 'Range to';
$string['of'] = 'of';
$string['oldvaluespreserved'] = 'All old questions and the assigned values will be preserved';
$string['oldvalueswillbedeleted'] = 'The current questions and all your user\'s responses will be deleted';
$string['only_one_captcha_allowed'] = 'Only one captcha is allowed in a feedback';
$string['overview'] = 'Overview';
$string['page'] = 'Page';
$string['page-mod-feedback-x'] = 'Any feedback module page';
$string['page_after_submit'] = 'Page after submit';
$string['pagebreak'] = 'Page break';
$string['parameters_missing'] = 'Parameters missing from';
$string['picture'] = 'Picture';
$string['picture_file_list'] = 'List of pictures';
$string['picture_values'] = 'Choose one or more<br />picture files from the list:';
$string['pluginadministration'] = 'Feedback administration';
$string['pluginname'] = 'Feedback';
$string['position'] = 'Position';
$string['preview'] = 'Preview';
$string['preview_help'] = 'In the preview you can change the order of questions.';
$string['previous_page'] = 'Previous page';
$string['public'] = 'Public';
$string['question'] = 'Question';
$string['questions'] = 'Questions';
$string['radio'] = 'Multiple choice - single answer';
$string['radiobutton'] = 'Multiple choice - single answer allowed (radio buttons)';
$string['radiobutton_rated'] = 'Radiobutton (rated)';
$string['radiorated'] = 'Radiobutton (rated)';
$string['radio_values'] = 'Responses';
$string['ready_feedbacks'] = 'Ready feedbacks';
$string['relateditemsdeleted'] = 'All your user\'s responses for this question will also be deleted';
$string['required'] = 'Required';
$string['resetting_data'] = 'Reset feedback responses';
$string['resetting_feedbacks'] = 'Resetting feedbacks';
$string['response_nr'] = 'Response number';
$string['responses'] = 'Responses';
$string['responsetime'] = 'Responsestime';
$string['save_as_new_item'] = 'Save as new question';
$string['save_as_new_template'] = 'Save as new template';
$string['save_entries'] = 'Submit your answers';
$string['save_item'] = 'Save question';
$string['saving_failed'] = 'Saving failed';
$string['saving_failed_because_missing_or_false_values'] = 'Saving failed because missing or false values';
$string['search_course'] = 'Search course';
$string['searchcourses'] = 'Search courses';
$string['searchcourses_help'] = 'Search for the code or name of the course(s) that you wish to associate with this feedback.';
$string['selected_dump'] = 'Selected indexes of $SESSION variable are dumped below:';
$string['send'] = 'send';
$string['send_message'] = 'send message';
$string['separator_decimal'] = '.';
$string['separator_thousand'] = ',';
$string['show_all'] = 'Show all';
$string['show_analysepage_after_submit'] = 'Show analysis page after submit';
$string['show_entries'] = 'Show responses';
$string['show_entry'] = 'Show response';
$string['show_nonrespondents'] = 'Show non-respondents';
$string['site_after_submit'] = 'Site after submit';
$string['sort_by_course'] = 'Sort by course';
$string['start'] = 'Start';
$string['started'] = 'started';
$string['stop'] = 'End';
$string['subject'] = 'Subject';
$string['switch_group'] = 'Switch group';
$string['switch_item_to_not_required'] = 'switch to: answer not required';
$string['switch_item_to_required'] = 'switch to: answer required';
$string['template'] = 'Template';
$string['templates'] = 'Templates';
$string['template_saved'] = 'Template saved';
$string['textarea'] = 'Longer text answer';
$string['textarea_height'] = 'Number of lines';
$string['textarea_width'] = 'Width';
$string['textfield'] = 'Short text answer';
$string['textfield_maxlength'] = 'Maximum characters accepted';
$string['textfield_size'] = 'Textfield width';
$string['there_are_no_settings_for_recaptcha'] = 'There are no settings for captcha';
$string['this_feedback_is_already_submitted'] = 'You\'ve already completed this activity.';
$string['timeclose'] = 'Time to close';
$string['timeclose_help'] = 'You can specify times when the feedback is accessible for people to answer the questions. If the checkbox is not ticked there is no limit defined.';
$string['timeopen'] = 'Time to open';
$string['timeopen_help'] = 'You can specify times when the feedback is accessible for people to answer the questions. If the checkbox is not ticked there is no limit defined.';
$string['typemissing'] = 'missing value "type"';
$string['update_item'] = 'Save changes to question';
$string['url_for_continue'] = 'URL for continue-button';
$string['url_for_continue_help'] = 'By default after a feedback is submitted the target of the continue button is the course page. You can define here another target URL for this continue button.';
$string['url_for_continue_button'] = 'URL for continue button';
$string['use_one_line_for_each_value'] = '<br />Use one line for each answer!';
$string['use_this_template'] = 'Use this template';
$string['using_templates'] = 'Use a template';
$string['vertical'] = 'vertical';
$string['viewcompleted'] = 'completed feedbacks';
$string['viewcompleted_help'] = 'You may view completed feedback forms, searchable by course and/or by question.
Feedback responses may be exported to Excel.';