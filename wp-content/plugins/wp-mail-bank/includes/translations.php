<?php
/**
* This file is used for translation strings.
*
* @author  Tech Banker
* @package wp-mail-bank/includes
* @version 2.0.0
*/
if(!defined("ABSPATH")) exit;// Exit if accessed directly
if(!is_user_logged_in())
{
	return;
}
else
{
	$access_granted = false;
	foreach($user_role_permission as $permission)
	{
		if(current_user_can($permission))
		{
			$access_granted = true;
			break;
		}
	}
	if(!$access_granted)
	{
		return;
	}
	else
	{
		// Disclaimers
		$message_premium_edition = __("This feature is available only in Premium Editions! <br> Kindly Purchase to unlock it!", wp_mail_bank);
		$mb_click_disclaimer = __("* Click ",wp_mail_bank);
		$mb_here_disclaimer = __("here ",wp_mail_bank);
		$mb_unblock_premium_disclaimer = __(" to see Premium Edition Features in detail",wp_mail_bank);
		$mb_demos_disclaimer = __("* For Mail Bank Demos, click ",wp_mail_bank);
		$mb_manual_disclaimer = __("* For Mail Bank User Guide for this page, click ",wp_mail_bank);
		$mb_important_disclaimer = __("Important Disclaimer!",wp_mail_bank);
		$mb_language_translate_request = __("Your request email has been sent Successfully",wp_mail_bank);
		$mb_filters_disclaimer = __("* Filters ",wp_mail_bank);
		$mb_cc_bcc_disclaimer = __("* Reply to, Cc and Bcc Fields ",wp_mail_bank);
		$mb_delete_logs_disclaimer = __("* Deleting Email Logs ",wp_mail_bank);
		$mb_debugging_output_disclaimer = __("* Debugging Output",wp_mail_bank);
		$mb_show_details_disclaimer = __("* Email Logs Details ",wp_mail_bank);
		$mb_save_roles_and_capabilities_disclaimer = __("* Saving Roles & Capabilities ",wp_mail_bank);
		$mb_premium_edition_features_disclaimer = __(" Premium Edition Features :",wp_mail_bank);

		//wizard
		$mb_wizard_basic_info = __("Basic Info",wp_mail_bank);
		$mb_wizard_account_setup = __("Account Setup",wp_mail_bank);
		$mb_wizard_confirm = __("Confirm",wp_mail_bank);

		// Menus
		$wp_mail_bank = __("Mail Bank",wp_mail_bank);
		$mb_email_configuration = __("Email Setup",wp_mail_bank);
		$mb_email_logs = __("Email Logs",wp_mail_bank);
		$mb_email_log_details = __("Email Log Details",wp_mail_bank);
		$mb_test_email = __("Test Email",wp_mail_bank);
		$mb_settings = __("Plugin Settings",wp_mail_bank);
		$mb_feedbacks = __("Feedbacks",wp_mail_bank);
		$mb_roles_and_capabilities = __("Roles & Capabilities",wp_mail_bank);
		$mb_system_information = __("System Information",wp_mail_bank);

		// Footer
		$mb_success = __("Success!",wp_mail_bank);
		$mb_update_email_configuration = __("Email Setup has been updated Successfully",wp_mail_bank);
		$mb_update_feedbacks = __("Your Feedback has been sent Successfully",wp_mail_bank);
		$mb_language_translate_request = __("Your request email has been sent Successfully",wp_mail_bank);
		$mb_test_email_sent = __("Test Email was sent Successfully!",wp_mail_bank);
		$mb_test_email_not_send = __("Test Email was not sent!",wp_mail_bank);
		$mb_update_settings = __("Plugin Settings have been updated Successfully",wp_mail_bank);
		$mb_choose_action = __("Please choose an Action from Dropdown!",wp_mail_bank);
		$oauth_not_supported = __("The OAuth is not supported by providing SMTP Host, kindly provide username and password",wp_mail_bank);
		$mb_invalid_secret_key = __("Invalid Secret Key. Please rectify and try again!",wp_mail_bank);
		$mb_premium_editions_label = __("Premium Editions",wp_mail_bank);

		// Common Variables
		$mb_status_sent = __("Sent",wp_mail_bank);
		$mb_status_not_sent = __("Not Sent",wp_mail_bank);
		$mb_important_disclaimer = __("Important Disclaimer!",wp_mail_bank);
		$mb_user_access_message = __("You don't have Sufficient Access to this Page. Kindly contact the Administrator for more Privileges",wp_mail_bank);
		$mb_enable = __("Enable",wp_mail_bank);
		$mb_disable = __("Disable",wp_mail_bank);
		$mb_override = __("Override",wp_mail_bank);
		$mb_dont_override = __("Don't Override",wp_mail_bank);
		$mb_save_changes = __("Save Settings",wp_mail_bank);
		$mb_subject = __("Subject",wp_mail_bank);
		$mb_next_step = __("Next Step",wp_mail_bank);
		$mb_previous_step = __("Previous Step",wp_mail_bank);
		$mb_settings_link = __("Settings",wp_mail_bank);
		$mb_not_available = __("Not available",wp_mail_bank);
		$mb_contact_to_host = __("The following php extensions are not found on your server or are currently disabled. These might create few problems in configuring Mail Bank. Please contact your WebHost to setup these extensions on your server.",wp_mail_bank);

		// Email Setup
		$mb_email_configuration_cc_label = __("Cc",wp_mail_bank);
		$mb_email_configuration_bcc_label = __("Bcc",wp_mail_bank);
		$mb_email_configuration_cc_email_address_tooltip = __("Please provide valid Cc Email Address",wp_mail_bank);
		$mb_email_configuration_bcc_email_address_tooltip = __("Please provide valid Bcc Email Address",wp_mail_bank);
		$mb_email_configuration_cc_email_placeholder = __("Please provide Cc Email",wp_mail_bank);
		$mb_email_configuration_bcc_email_placeholder = __("Please provide Bcc Email",wp_mail_bank);
		$mb_email_configuration_mailer_settings_tab = __("Mailer Settings", wp_mail_bank);
		$mb_email_configuration_test_email_tab = __("Test Email", wp_mail_bank);
		$mb_email_configuration_from_name = __("From Name",wp_mail_bank);
		$mb_email_configuration_from_name_tooltip = __("From Name is the inbox field that tells your recipient who sent the messages. If you would like to override the pre-configured From Name, then you would need to insert the name in the inbox field", wp_mail_bank);
		$mb_email_configuration_from_name_placeholder = __("Please provide From Name", wp_mail_bank);
		$mb_email_configuration_from_email = __("From Email",wp_mail_bank);
		$mb_email_address_tooltip = __("From Email is the inbox field that tells your recipient from which Email Address the messages are coming. If you would like to override the pre-configured From Email, then you would need to insert an Email Address in the inbox field", wp_mail_bank);
		$mb_email_configuration_from_email_placeholder = __("Please provide From Email Address", wp_mail_bank);
		$mb_email_configuration_mailer_type = __("Mailer Type",wp_mail_bank);
		$mb_email_configuration_mailer_type_tooltip = __("This field provides you an ability to choose a specific option for Mailer Type. If you would like to send an Email via SMTP mailer, you would need to select Send Email via SMTP from the drop down or you could use PHP mail () Function", wp_mail_bank);
		$mb_email_configuration_send_email_via_smtp = __("Send Email via SMTP",wp_mail_bank);
		$mb_email_configuration_use_php_mail_function = __("Use The PHP mail() Function",wp_mail_bank);
		$mb_email_configuration_smtp_host = __("SMTP Host",wp_mail_bank);
		$mb_email_configuration_smtp_host_tooltip = __("If you would like to send an Email via different host, you would need to insert that specific host name like smtp.gmail.com in the inbox field", wp_mail_bank);
		$mb_email_configuration_smtp_host_placeholder = __("Please provide SMTP Host", wp_mail_bank);
		$mb_email_configuration_smtp_port = __("SMTP Port",wp_mail_bank);
		$mb_email_configuration_smtp_port_tooltip = __("This inbox field is specified to provide a valid SMTP Port for authentication", wp_mail_bank);
		$mb_email_configuration_smtp_port_placeholder = __("Please provide SMTP Port", wp_mail_bank);
		$mb_email_configuration_encryption = __("Encryption",wp_mail_bank);
		$mb_email_configuration_encryption_tooltip = __("It provides you an ability to choose a specific option for Encryption. If you would like to send an Email with TLS encryption, you would need to select Use TLS Encryption from the drop down or you could use SSL Encryption. For that you would need to select Use SSL Encryption from the drop down. If you would like to send an Email without encryption, you would need to select No Encryption from the drop down", wp_mail_bank);
		$mb_email_configuration_no_encryption = __("No Encryption",wp_mail_bank);
		$mb_email_configuration_use_ssl_encryption = __("Use SSL Encryption",wp_mail_bank);
		$mb_email_configuration_use_tls_encryption = __("Use TLS Encryption",wp_mail_bank);
		$mb_email_configuration_authentication = __("Authentication",wp_mail_bank);
		$mb_email_configuration_authentication_tooltip = __("This inbox field allows you to choose an appropriate option for authentication. It provides you the Two-way authentication factor; If you would like to authenticate yourself via Username and Password, you would need to select Use Username and Password from the drop down. You can also authenticate by an OAuth 2.0 protocol, which requires Client Id and Secret Key, for that you would need to select Use OAuth (Client ID and Secret Key) from the drop down. You can easily get Client Id and Secret Key from respective SMTP Server Developers section", wp_mail_bank);
		$mb_email_configuration_use_smtp_authentication = __("Use SMTP Authentication",wp_mail_bank);
		$mb_email_configuration_donot_use_authentication = __("Don't Use SMTP Authentication",wp_mail_bank);
		$mb_email_configuration_test_email_address = __("Test Email Address",wp_mail_bank);
		$mb_email_configuration_test_email_address_tooltip = __("In this field, you would need to provide a valid Email Address in the inbox field on which you would like to receive Test email", wp_mail_bank);
		$mb_email_configuration_test_email_address_placeholder = __("Please provide Test Email Address", wp_mail_bank);
		$mb_email_configuration_subject_test_tooltip = __("In this field, you would need to provide a subject for Test Email", wp_mail_bank);
		$mb_email_configuration_subject_test_placeholder = __("Please provide Subject", wp_mail_bank);
		$mb_email_configuration_content = __("Email Content",wp_mail_bank);
		$mb_email_configuration_content_tooltip = __("In this field, you would need to provide the content for Test Email", wp_mail_bank);
		$mb_email_configuration_send_test_email = __("Send Test Email", wp_mail_bank);
		$mb_email_configuration_smtp_debugging_output = __("SMTP Debugging Output", wp_mail_bank);
		$mb_email_configuration_send_test_email_textarea = __("Checking your settings", wp_mail_bank);
		$mb_email_configuration_result = __("Result", wp_mail_bank);
		$mb_email_configuration_send_another_test_email = __("Send Another Test Email", wp_mail_bank);
		$mb_email_configuration_enable_from_name = __("From Name Configuration",wp_mail_bank);
		$mb_email_configuration_enable_from_name_tooltip = __("If you would like to override the pre-configured name which will be used while sending Emails, then you would need to choose Override from the drop down and vice-versa",wp_mail_bank);
		$mb_email_configuration_enable_from_email = __("From Email Configuration",wp_mail_bank);
		$mb_email_configuration_enable_from_email_tooltip = __("If you would like to override your pre-configured Email Address which will be used while sending Emails, then you would need to choose Override from the drop down and vice-versa",wp_mail_bank);
		$mb_email_configuration_username = __("Username",wp_mail_bank);
		$mb_email_configuration_username_tooltip = __("In this field, you would need to provide a username to authenticate your SMTP details",wp_mail_bank);
		$mb_email_configuration_username_placeholder = __("Please provide username",wp_mail_bank);
		$mb_email_configuration_password = __("Password",wp_mail_bank);
		$mb_email_configuration_password_tooltip = __("In this field, you would need to provide a password to authenticate your SMTP details",wp_mail_bank);
		$mb_email_configuration_password_placeholder = __("Please provide password",wp_mail_bank);
		$mb_email_configuration_redirect_uri = __("Redirect URI",wp_mail_bank);
		$mb_email_configuration_redirect_uri_tooltip = __("Please copy this Redirect URI and Paste into Redirect URI field when creating your app",wp_mail_bank);
		$mb_email_configuration_use_oauth = __("Use OAuth (Client Id and Secret Key required)",wp_mail_bank);
		$mb_email_configuration_use_plain_authentication = __("Plain Authentication",wp_mail_bank);
		$mb_email_configuration_cram_md5 = __("Cram-MD5",wp_mail_bank);
		$mb_email_configuration_login = __("Login",wp_mail_bank);
		$mb_email_configuration_client_id = __("Client Id",wp_mail_bank);
		$mb_email_configuration_client_secret = __("Secret Key",wp_mail_bank);
		$mb_email_configuration_client_id_tooltip = __("Please provide valid Client Id issued by your SMTP Host",wp_mail_bank);
		$mb_email_configuration_client_secret_tooltip = __("Please provide valid Secret Key issued by your SMTP Host",wp_mail_bank);
		$mb_email_configuration_client_id_placeholder = __("Please provide Client Id",wp_mail_bank);
		$mb_email_configuration_client_secret_placeholder = __("Please provide Secret Key",wp_mail_bank);
		$mb_email_configuration_tick_for_sent_mail = __("Yes, automatically send a Test Email upon clicking on the Next Step Button to verify settings",wp_mail_bank);
		$mb_email_configuration_email_address = __("Email Address",wp_mail_bank);
		$mb_email_configuration_email_address_tooltip = __("In this field, you would need to add a valid Email Address in the inbox field from which you would like to send Emails",wp_mail_bank);
		$mb_email_configuration_email_address_placeholder = __("Please provide valid Email Address",wp_mail_bank);
		$mb_email_configuration_reply_to = __("Reply To",wp_mail_bank);
		$mb_email_configuration_reply_to_tooltip = __("In this field, you would need to add a valid Email Address that is automatically inserted into the Reply To field when a user replies to an email message",wp_mail_bank);
		$mb_email_configuration_reply_to_placeholder = __("Please provide Reply To Email Address",wp_mail_bank);
		$mb_email_configuration_get_google_credentials = __("Get Google Client Id and Secret Key",wp_mail_bank);
		$mb_email_configuration_get_microsoft_credentials = __("Get Microsoft Client Id and Secret Key",wp_mail_bank);
		$mb_email_configuration_get_yahoo_credentials = __("Get Yahoo Client Id and Secret Key",wp_mail_bank);

		// Email Logs
		$mb_start_date_title = __("Start Date",wp_mail_bank);
		$mb_start_date_placeholder = __("Please provide Start Date",wp_mail_bank);
		$mb_start_date_tooltip = __("This field shows starting date of Email Logs",wp_mail_bank);
		$mb_end_date_title = __("End Date",wp_mail_bank);
		$mb_end_date_placeholder = __("Please provide End Date",wp_mail_bank);
		$mb_end_date_tooltip = __("This field shows ending date of Email Logs",wp_mail_bank);
		$mb_submit = __("Submit",wp_mail_bank);
		$mb_email_logs_bulk_action = __("Bulk Action",wp_mail_bank);
		$mb_email_logs_delete = __("Delete",wp_mail_bank);
		$mb_email_logs_apply = __("Apply",wp_mail_bank);
		$mb_email_logs_email_to = __("Email To",wp_mail_bank);
		$mb_email_logs_actions = __("Action",wp_mail_bank);
		$mb_email_logs_show_details = __("Show Details",wp_mail_bank);
		$mb_email_logs_email_details = __("Email Details",wp_mail_bank);
		$mb_email_debugging_output = __("Email Debugging output",wp_mail_bank);
		$mb_email_logs_close = __("Close",wp_mail_bank);
		$mb_email_logs_debugging_output = __("Debugging Output",wp_mail_bank);
		$mb_email_logs_show_outputs = __("Show Debugging Output",wp_mail_bank);
		$mb_email_sent_to = __("Email Sent To",wp_mail_bank);
		$mb_date_time = __("Date/Time",wp_mail_bank);
		$mb_email_logs_status = __("Status",wp_mail_bank);
		$mb_from = __("From",wp_mail_bank);
		$mb_back_to_email_logs = __("Back to Email Logs",wp_mail_bank);

		// Settings
		$mb_settings_automatic_plugin_update = __("Automatic Plugin Updates", wp_mail_bank);
		$mb_settings_automatic_plugin_update_tooltip = __("Please choose a specific option whether to allow Automatic Plugin Updates", wp_mail_bank);
		$mb_settings_debug_mode = __("Debug Mode",wp_mail_bank);
		$mb_settings_debug_mode_tooltip = __("Please choose a specific option for Debug Mode",wp_mail_bank);
		$mb_remove_tables_title = __("Remove Tables at Uninstall",wp_mail_bank);
		$mb_remove_tables_tooltip = __("Please choose a specific option whether to allow Remove Tables at Uninstall",wp_mail_bank);
		$mb_monitoring_email_log_title = __("Monitoring Email Logs",wp_mail_bank);
		$mb_monitoring_email_log_tooltip = __("This field is used to allow Email Logs to monitor or not",wp_mail_bank);

		// Roles and Capabilities
		$mb_roles_capabilities_show_menu = __("Show Mail Bank Menu",wp_mail_bank);
		$mb_roles_capabilities_show_menu_tooltip = __("Please choose a specific role who can see Sidebar Menu",wp_mail_bank);
		$mb_roles_capabilities_administrator = __("Administrator",wp_mail_bank);
		$mb_roles_capabilities_author = __("Author",wp_mail_bank);
		$mb_roles_capabilities_editor = __("Editor",wp_mail_bank);
		$mb_roles_capabilities_contributor = __("Contributor",wp_mail_bank);
		$mb_roles_capabilities_subscriber = __("Subscriber",wp_mail_bank);
		$mb_roles_capabilities_others = __("Others",wp_mail_bank);
		$mb_roles_capabilities_topbar_menu = __("Show Mail Bank Top Bar Menu",wp_mail_bank);
		$mb_roles_capabilities_topbar_menu_tooltip = __("Please choose a specific option from Mail Bank Top Bar Menu", wp_mail_bank);
		$mb_roles_capabilities_administrator_role =  __("An Administrator Role can do the following ",wp_mail_bank);
		$mb_roles_capabilities_administrator_role_tooltip = __("Please choose specific page available for the Administrator Access", wp_mail_bank);
		$mb_roles_capabilities_full_control = __("Full Control",wp_mail_bank);
		$mb_roles_capabilities_author_role = __("An Author Role can do the following ",wp_mail_bank);
		$mb_roles_capabilities_author_role_tooltip = __("Please choose specific page available for Author Access", wp_mail_bank);
		$mb_roles_capabilities_editor_role = __("An Editor Role can do the following ",wp_mail_bank);
		$mb_roles_capabilities_editor_role_tooltip = __("Please choose specific page available for Editor Access", wp_mail_bank);
		$mb_roles_capabilities_contributor_role = __("A Contributor Role can do the following ",wp_mail_bank);
		$mb_roles_capabilities_contributor_role_tooltip = __("Please choose specific page available for Contributor Access", wp_mail_bank);
		$mb_roles_capabilities_other_role = __("Other Roles can do the following ",wp_mail_bank);
		$mb_roles_capabilities_other_role_tooltip = __("Please choose specific page available for Others Role Access", wp_mail_bank);
		$mb_roles_capabilities_other_roles_capabilities = __("Please tick the appropriate capabilities for security purposes ",wp_mail_bank);
		$mb_roles_capabilities_other_roles_capabilities_tooltip = __("Only users with these capabilities can access Mail Bank", wp_mail_bank);
		$mb_roles_capabilities_subscriber_role = __("A Subscriber Role can do the following",wp_mail_bank);
		$mb_roles_capabilities_subscriber_role_tooltip = __("Please choose specific page available for Subscriber Access", wp_mail_bank);

		// Feedbacks
		$mb_feedbacks_thank_you = __("Thank You!",wp_mail_bank);
		$mb_feedbacks_suggest_some_features = __("Kindly fill in the below form, if you would like to suggest some features which are not in the Plugin",wp_mail_bank);
		$mb_feedbacks_suggestion_complaint = __("If you also have any suggestion/complaint, you can use the same form below",wp_mail_bank);
		$mb_feedbacks_write_us_on = __("You can also write us on",wp_mail_bank);
		$mb_feedbacks_your_name = __("Your Name",wp_mail_bank);
		$mb_feedbacks_your_name_tooltip = __("Please provide your Name which will be sent along with your Feedback",wp_mail_bank);
		$mb_feedbacks_your_name_placeholder = __("Please provide your Name",wp_mail_bank);
		$mb_feedbacks_your_email = __("Your Email",wp_mail_bank);
		$mb_feedbacks_your_email_tooltip = __("Please provide your Email Address which will be sent along with your Feedback",wp_mail_bank);
		$mb_feedbacks_your_email_placeholder = __("Please provide your Email Address",wp_mail_bank);
		$mb_feedbacks_tooltip = __("Please provide your Feedback which will be sent along",wp_mail_bank);
		$mb_feedbacks_placeholder = __("Please provide your Feedback",wp_mail_bank);
		$mb_feedbacks_send_feedback = __("Send Feedback",wp_mail_bank);

		// Test Email
		$mb_test_email_sending_test_email = __("Sending Test Email to",wp_mail_bank);
		$mb_test_email_status = __("Email Status",wp_mail_bank);

	}
}
?>
