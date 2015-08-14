<?php

function wfu_component_definitions() {
	$components = array(
		array(
			"id"		=> "title",
			"name"		=> "Title",
			"mode"		=> "free",
			"dimensions"	=> null,
			"help"		=> "A title text for the plugin"
		),
		array(
			"id"		=> "filename",
			"name"		=> "Filename",
			"mode"		=> "free",
			"dimensions"	=> null,
			"help"		=> "It shows the name of the selected file (useful only for single file uploads)."
		),
		array(
			"id"		=> "selectbutton",
			"name"		=> "Select Button",
			"mode"		=> "free",
			"dimensions"	=> null,
			"help"		=> "Represents the button to select the files for upload."
		),
		array(
			"id"		=> "uploadbutton",
			"name"		=> "Upload Button",
			"mode"		=> "free",
			"dimensions"	=> null,
			"help"		=> "Represents the button to execute the upload after some files have been selected."
		),
		array(
			"id"		=> "subfolders",
			"name"		=> "Subfolders",
			"mode"		=> "free",
			"dimensions"	=> array("uploadfolder_label/Upload Folder Label", "subfolders_label/Subfolders Label", "subfolders_select/Subfolders List"),
			"help"		=> "Allows the user to select the upload folder from a dropdown list."
		),
		array(
			"id"		=> "progressbar",
			"name"		=> "Progressbar",
			"mode"		=> "free",
			"dimensions"	=> null,
			"help"		=> "Displays a simple progress bar, showing total progress of upload."
		),
		array(
			"id"		=> "userdata",
			"name"		=> "User Fields",
			"mode"		=> "free",
			"dimensions"	=> array("userdata/User Fields", "userdata_label/User Fields Label", "userdata_value/User Fields Value"),
			"help"		=> "Displays additional fields that the user must fill-in together with the uploaded files."
		),
		array(
			"id"		=> "message",
			"name"		=> "Message",
			"mode"		=> "free",
			"dimensions"	=> null,
			"help"		=> "Displays a message block with information about the upload, together with any warnings or errors."
		)
	);
	
	wfu_array_remove_nulls($components);

	return $components;
}

function wfu_category_definitions() {
	$cats = array(
		"general"		=> "General",
		"placements"		=> "Placements",
		"general"		=> "General",
		"labels"		=> "Labels",
		"notifications"		=> "Notifications",
		"colors"		=> "Colors",
		"dimensions"		=> "Dimensions",
		"general"		=> "General",
		"userdata"		=> "Additional Fields",
		"interoperability"	=> "Interoperability"
	);

	return $cats;
}

function wfu_attribute_definitions() {
	$defs = array(
		array(
			"name"		=> "Plugin ID",
			"attribute"	=> "uploadid",
			"type"		=> "integer",
			"listitems"	=> null,
			"value"		=> WFU_UPLOADID,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Basic Functionalities",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "The unique id of each shortcode. When you have many shortcodes of this plugin in the same page, then you must use different id for each one."
		),
		array(
			"name"		=> "Single Button Operation",
			"attribute"	=> "singlebutton",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_SINGLEBUTTON,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Basic Functionalities",
			"parent"	=> "",
			"dependencies"	=> array("!uploadbutton"),
			"variables"	=> null,
			"help"		=> "When it is activated, no Upload button will be shown, but upload will start automatically as soon as files are selected."
		),
		array(
			"name"		=> "Upload Path",
			"attribute"	=> "uploadpath",
			"type"		=> "ltext",
			"listitems"	=> null,
			"value"		=> WFU_UPLOADPATH,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Basic Functionalities",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> array("%userid%", "%username%", "%blogid%", "%pageid%", "%pagetitle%", "%userdataXXX%"),
			"help"		=> "This is the folder where the files will be uploaded. The path is relative to wp-contents folder of your Wordpress website. The path can be dynamic by including variables such as %username% or %blogid%. Please check Documentation on how to use variables inside uploadpath."
		),
		array(
			"name"		=> "Upload Roles",
			"attribute"	=> "uploadrole",
			"type"		=> "rolelist",
			"listitems"	=> array("default_administrator"),
			"value"		=> WFU_UPLOADROLE,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Filters",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "Defines the categories (roles) of users allowed to upload files. Multiple selections can be made. If 'Select All' is checked, then all logged users can upload files. If 'Include Guests' is checked, then guests (not logged users) can also upload files. Default value is 'all,guests'."
		),
		array(
			"name"		=> "Allowed File Extensions",
			"attribute"	=> "uploadpatterns",
			"type"		=> "text",
			"listitems"	=> null,
			"value"		=> WFU_UPLOADPATTERNS,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Filters",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "Defines the allowed file extensions. Multiple extentions can be defined, separated with comma (,)."
		),
		array(
			"name"		=> "Allowed File Size",
			"attribute"	=> "maxsize",
			"type"		=> "float",
			"listitems"	=> null,
			"value"		=> WFU_MAXSIZE,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Filters",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "Defines the allowed file size in MBytes. Files larger than maxsize will not be uploaded. Floating point numbers can be used (e.g. '2.5')."
		),
		array(
			"name"		=> "Create Upload Path",
			"attribute"	=> "createpath",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_CREATEPATH,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Upload Path and Files",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If activated then the plugin will attempt to create the upload path, if it does not exist."
		),
		array(
			"name"		=> "Do Not Change Filename",
			"attribute"	=> "forcefilename",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_FORCEFILENAME,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Upload Path and Files",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "The plugin by default will modify the filename if it contains invalid or non-english characters. By enabling this attribute the plugin will not change the filename."
		),
		array(
			"name"		=> "Folder Access Method",
			"attribute"	=> "accessmethod",
			"type"		=> "radio",
			"listitems"	=> array("normal", "*ftp"),
			"value"		=> WFU_ACCESSMETHOD,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Upload Path and Files",
			"parent"	=> "",
			"dependencies"	=> array("ftpinfo", "userftpdomain", "ftppassivemode", "ftpfilepermissions"),
			"variables"	=> null,
			"help"		=> "Some times files cannot be uploaded to the upload folder because of read/write permissions. A workaround is to use ftp to transfer the files, however ftp credentials must be declared, so use carefully and only if necessary."
		),
		array(
			"name"		=> "FTP Access Credentials",
			"attribute"	=> "ftpinfo",
			"type"		=> "ltext",
			"listitems"	=> null,
			"value"		=> WFU_FTPINFO,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Upload Path and Files",
			"parent"	=> "accessmethod",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If FTP access method is selected, then FTP credentials must be declared here, in the form username:password@ftpdomain."
		),
		array(
			"name"		=> "Use FTP Domain",
			"attribute"	=> "useftpdomain",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_USEFTPDOMAIN,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Upload Path and Files",
			"parent"	=> "accessmethod",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If FTP access method is selected, then sometimes the FTP domain is different than the domain of your Wordpress installation. In this case, enable this attribute if upload of files is not successful."
		),
		array(
			"name"		=> "FTP Passive Mode",
			"attribute"	=> "ftppassivemode",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_FTPPASSIVEMODE,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Upload Path and Files",
			"parent"	=> "accessmethod",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If files fail to upload to the ftp domain then switching to passive FTP mode may solve the problem."
		),
		array(
			"name"		=> "Permissions of Uploaded File",
			"attribute"	=> "ftpfilepermissions",
			"type"		=> "text",
			"listitems"	=> null,
			"value"		=> WFU_FTPFILEPERMISSIONS,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Upload Path and Files",
			"parent"	=> "accessmethod",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "Force the uploaded files to have specific permissions. This is a 4-digit octal number, e.g. 0777. If left empty, then the ftp server will define the permissions."
		),
		array(
			"name"		=> "Show Upload Folder Path",
			"attribute"	=> "showtargetfolder",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_SHOWTARGETFOLDER,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Upload Path and Files",
			"parent"	=> "",
			"dependencies"	=> array("targetfolderlabel"),
			"variables"	=> null,
			"help"		=> "It defines if a label with the upload directory will be shown."
		),
		array(
			"name"		=> "Select Subfolder",
			"attribute"	=> "askforsubfolders",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_ASKFORSUBFOLDERS,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Upload Path and Files",
			"parent"	=> "",
			"dependencies"	=> array("subfoldertree", "subfolderlabel"),
			"variables"	=> null,
			"help"		=> "If enabled then user can select the upload folder from a drop down list. The list is defined in subfoldertree attribute. The folder paths are relative to the path defined in uploadpath."
		),
		array(
			"name"		=> "List of Subfolders",
			"attribute"	=> "subfoldertree",
			"type"		=> "folderlist",
			"listitems"	=> null,
			"value"		=> WFU_SUBFOLDERTREE,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Upload Path and Files",
			"parent"	=> "askforsubfolders",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "The list of folders a user can select. Please see documentation on how to create the list of folders. If 'Auto-populate list' is selected, then the list will be filled automatically with the first-level subfolders inside the directory defined by uploadpath. If 'List is editable' is selected, then the user will have the capability to type the subfolder and filter the subfolder list and/or define a new subfolder."
		),
		array(
			"name"		=> "File Duplicates Policy",
			"attribute"	=> "dublicatespolicy",
			"type"		=> "radio",
			"listitems"	=> array("overwrite", "reject", "*maintain both"),
			"value"		=> WFU_DUBLICATESPOLICY,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Upload Path and Files",
			"parent"	=> "",
			"dependencies"	=> array("uniquepattern"),
			"variables"	=> null,
			"help"		=> "It determines what happens when an uploaded file has the same name with an existing file. The uploaded file can overwrite the existing one, be rejected or both can be kept by renaming the uploaded file according to a rule defined in uniquepattern attribute."
		),
		array(
			"name"		=> "File Rename Rule",
			"attribute"	=> "uniquepattern",
			"type"		=> "radio",
			"listitems"	=> array("index", "datetimestamp"),
			"value"		=> WFU_UNIQUEPATTERN,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Upload Path and Files",
			"parent"	=> "dublicatespolicy",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If dublicatespolicy is set to 'maintain both', then this rule defines how the uploaded file will be renamed, in order not to match an existing file. An incremental index number or a datetime stamp can be included in the uploaded file name to make it unique."
		),
		array(
			"name"		=> "Redirect after Upload",
			"attribute"	=> "redirect",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_REDIRECT,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Redirection",
			"parent"	=> "",
			"dependencies"	=> array("redirectlink"),
			"variables"	=> null,
			"help"		=> "If enabled, the user will be redirected to a url defined in redirectlink attribute upon successful upload of all the files."
		),
		array(
			"name"		=> "Redirection URL",
			"attribute"	=> "redirectlink",
			"type"		=> "ltext",
			"listitems"	=> null,
			"value"		=> WFU_REDIRECTLINK,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Redirection",
			"parent"	=> "redirect",
			"dependencies"	=> null,
			"variables"	=> array("%filename%", "%username%"),
			"help"		=> "This is the redirect URL. The URL can be dynamic by using variables. Please see Documentation on how to use variables inside attributes."
		),
		array(
			"name"		=> "Show Detailed Admin Messages",
			"attribute"	=> "adminmessages",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_ADMINMESSAGES,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Other Administrator Options",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If enabled then more detailed messages about upload operations will be shown to administrators for debugging or error detection."
		),
		array(
			"name"		=> "Disable AJAX",
			"attribute"	=> "forceclassic",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_FORCECLASSIC,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Other Administrator Options",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If AJAX is disabled, then upload of files will be performed using HTML forms, meaning that page will refresh to complete the upload. Use it in case that AJAX is causing problems with your page (although the plugin has an auto-detection feature for checking if user's browser supports AJAX or not)."
		),
		array(
			"name"		=> "Test Mode",
			"attribute"	=> "testmode",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_TESTMODE,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Other Administrator Options",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If enabled then the plugin will be shown in test mode, meaning that all selected features will be shown but no upload will be possible. Use it to review how the plugin looks like and style it according to your needs."
		),
		array(
			"name"		=> "Debug Mode",
			"attribute"	=> "debugmode",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_DEBUGMODE,
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "Other Administrator Options",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If enabled then the plugin will show to administrators any internal PHP warnings and errors generated during the upload process inside the message box."
		),
		array(
			"name"		=> "Plugin Component Positions",
			"attribute"	=> "placements",
			"type"		=> "placements",
			"listitems"	=> null,
			"value"		=> WFU_PLACEMENTS,
			"mode"		=> "free",
			"category"	=> "placements",
			"subcategory"	=> "Plugin Component Positions",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "It defines the positions of the selected plugin components. Drag the components from the right pane and drop them to the left one to define your own component positions."
		),
		array(
			"name"		=> "Plugin Title",
			"attribute"	=> "uploadtitle",
			"type"		=> "text",
			"listitems"	=> null,
			"value"		=> WFU_UPLOADTITLE,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "Title",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "A text representing the title of the plugin."
		),
		array(
			"name"		=> "Select Button Caption",
			"attribute"	=> "selectbutton",
			"type"		=> "text",
			"listitems"	=> null,
			"value"		=> WFU_SELECTBUTTON,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "Buttons",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "The caption of the button that selects the files for upload."
		),
		array(
			"name"		=> "Upload Button Caption",
			"attribute"	=> "uploadbutton",
			"type"		=> "text",
			"listitems"	=> null,
			"value"		=> WFU_UPLOADBUTTON,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "Buttons",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "The caption of the button that starts the upload."
		),
		array(
			"name"		=> "Upload Folder Label",
			"attribute"	=> "targetfolderlabel",
			"type"		=> "text",
			"listitems"	=> null,
			"value"		=> WFU_TARGETFOLDERLABEL,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "Upload Folder",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "This is the label before the upload folder path, if the path is selected to be shown using the showtargetfolder attribute."
		),
		array(
			"name"		=> "Select Subfolder Label",
			"attribute"	=> "subfolderlabel",
			"type"		=> "text",
			"listitems"	=> null,
			"value"		=> WFU_SUBFOLDERLABEL,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "Upload Folder",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "This is the label of the subfolder dropdown list. It is active when askforsubfolders attribute is on."
		),
		array(
			"name"		=> "Success Upload Message",
			"attribute"	=> "successmessage",
			"type"		=> "ltext",
			"listitems"	=> null,
			"value"		=> WFU_SUCCESSMESSAGE,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "Upload Messages",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> array("%filename%", "%filepath%"),
			"help"		=> "This is the message that will be shown for every file that has been uploaded successfully."
		),
		array(
			"name"		=> "Warning Upload Message",
			"attribute"	=> "warningmessage",
			"type"		=> "ltext",
			"listitems"	=> null,
			"value"		=> WFU_WARNINGMESSAGE,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "Upload Messages",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> array("%filename%", "%filepath%"),
			"help"		=> "This is the message that will be shown for every file that has been uploaded with warnings."
		),
		array(
			"name"		=> "Error Upload Message",
			"attribute"	=> "errormessage",
			"type"		=> "ltext",
			"listitems"	=> null,
			"value"		=> WFU_ERRORMESSAGE,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "Upload Messages",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> array("%filename%", "%filepath%"),
			"help"		=> "This is the message that will be shown for every file that has failed to upload."
		),
		array(
			"name"		=> "Wait Upload Message",
			"attribute"	=> "waitmessage",
			"type"		=> "ltext",
			"listitems"	=> null,
			"value"		=> WFU_WAITMESSAGE,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "Upload Messages",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> array("%filename%", "%filepath%"),
			"help"		=> "This is the message that will be shown while file is uploading."
		),
		array(
			"name"		=> "Notify by Email",
			"attribute"	=> "notify",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_NOTIFY,
			"mode"		=> "free",
			"category"	=> "notifications",
			"subcategory"	=> "Email Notifications",
			"parent"	=> "",
			"dependencies"	=> array("notifyrecipients", "notifysubject", "notifymessage", "notifyheaders", "attachfile"),
			"variables"	=> null,
			"help"		=> "If activated then email will be sent to inform about successful file uploads."
		),
		array(
			"name"		=> "Email Recipients",
			"attribute"	=> "notifyrecipients",
			"type"		=> "mtext",
			"listitems"	=> null,
			"value"		=> WFU_NOTIFYRECIPIENTS,
			"mode"		=> "free",
			"category"	=> "notifications",
			"subcategory"	=> "Email Notifications",
			"parent"	=> "notify",
			"dependencies"	=> null,
			"variables"	=> array("%useremail%", "%userdataXXX%", "%n%", "%dq%"),
			"help"		=> "Defines the recipients of the email notification. Can be dynamic by using variables. Please check Documentation on how to use variables in atributes."
		),
		array(
			"name"		=> "Email Headers",
			"attribute"	=> "notifyheaders",
			"type"		=> "mtext",
			"listitems"	=> null,
			"value"		=> WFU_NOTIFYHEADERS,
			"mode"		=> "free",
			"category"	=> "notifications",
			"subcategory"	=> "Email Notifications",
			"parent"	=> "notify",
			"dependencies"	=> null,
			"variables"	=> array("%n%", "%dq%"),
			"help"		=> "Defines additional email headers, in case you want to sent an HTML message, or use Bcc list, or use a different From address and name or other more advanced email options."
		),
		array(
			"name"		=> "Email Subject",
			"attribute"	=> "notifysubject",
			"type"		=> "ltext",
			"listitems"	=> null,
			"value"		=> WFU_NOTIFYSUBJECT,
			"mode"		=> "free",
			"category"	=> "notifications",
			"subcategory"	=> "Email Notifications",
			"parent"	=> "notify",
			"dependencies"	=> null,
			"variables"	=> array("%username%", "%useremail%", "%filename%", "%filepath%", "%blogid%", "%pageid%", "%pagetitle%", "%userdataXXX%", "%dq%"),
			"help"		=> "Defines the email subject. Can be dynamic by using variables. Please check Documentation on how to use variables in atributes."
		),
		array(
			"name"		=> "Email Body",
			"attribute"	=> "notifymessage",
			"type"		=> "mtext",
			"listitems"	=> null,
			"value"		=> WFU_NOTIFYMESSAGE,
			"mode"		=> "free",
			"category"	=> "notifications",
			"subcategory"	=> "Email Notifications",
			"parent"	=> "notify",
			"dependencies"	=> null,
			"variables"	=> array("%username%", "%useremail%", "%filename%", "%filepath%", "%blogid%", "%pageid%", "%pagetitle%", "%userdataXXX%", "%n%", "%dq%"),
			"help"		=> "Defines the email body. Can be dynamic by using variables. Please check Documentation on how to use variables in atributes."
		),
		array(
			"name"		=> "Attach Uploaded Files",
			"attribute"	=> "attachfile",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_ATTACHFILE,
			"mode"		=> "free",
			"category"	=> "notifications",
			"subcategory"	=> "Email Notifications",
			"parent"	=> "notify",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If activated, then uploaded files will be included in the notification email as attachments. Please use carefully."
		),
		array(
			"name"		=> "Success Upload Message Color",
			"attribute"	=> "successmessagecolor",
			"type"		=> "color",
			"listitems"	=> null,
			"value"		=> WFU_SUCCESSMESSAGECOLOR,
			"mode"		=> "free",
			"category"	=> "colors",
			"subcategory"	=> "Upload Message Colors",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "It defines the color of the success message. This attribute has been replaced by successmessagecolors, however it is kept here for backward compatibility."
		),
		array(
			"name"		=> "Success Message Colors",
			"attribute"	=> "successmessagecolors",
			"type"		=> "color-triplet",
			"listitems"	=> null,
			"value"		=> WFU_SUCCESSMESSAGECOLORS,
			"mode"		=> "free",
			"category"	=> "colors",
			"subcategory"	=> "Upload Message Colors",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "It defines the text, background and border color of the success message."
		),
		array(
			"name"		=> "Warning Message Colors",
			"attribute"	=> "warningmessagecolors",
			"type"		=> "color-triplet",
			"listitems"	=> null,
			"value"		=> WFU_WARNINGMESSAGECOLORS,
			"mode"		=> "free",
			"category"	=> "colors",
			"subcategory"	=> "Upload Message Colors",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "It defines the text, background and border color of the warning message."
		),
		array(
			"name"		=> "Fail Message Colors",
			"attribute"	=> "failmessagecolors",
			"type"		=> "color-triplet",
			"listitems"	=> null,
			"value"		=> WFU_FAILMESSAGECOLORS,
			"mode"		=> "free",
			"category"	=> "colors",
			"subcategory"	=> "Upload Message Colors",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "It defines the text, background and border color of the fail (error) message."
		),
		array(
			"name"		=> "Wait Message Colors",
			"attribute"	=> "waitmessagecolors",
			"type"		=> "color-triplet",
			"listitems"	=> null,
			"value"		=> WFU_WAITMESSAGECOLORS,
			"mode"		=> "free",
			"category"	=> "colors",
			"subcategory"	=> "Upload Message Colors",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "It defines the text, background and border color of the wait message."
		),
		array(
			"name"		=> "Plugin Component Widths",
			"attribute"	=> "widths",
			"type"		=> "dimensions",
			"listitems"	=> null,
			"value"		=> WFU_WIDTHS,
			"mode"		=> "free",
			"category"	=> "dimensions",
			"subcategory"	=> "Plugin Component Widths",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "It defines the widths of the selected plugin components."
		),
		array(
			"name"		=> "Plugin Component Heights",
			"attribute"	=> "heights",
			"type"		=> "dimensions",
			"listitems"	=> null,
			"value"		=> WFU_HEIGHTS,
			"mode"		=> "free",
			"category"	=> "dimensions",
			"subcategory"	=> "Plugin Component Heights",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "It defines the heights of the selected plugin components."
		),
		array(
			"name"		=> "Include Additional Data Fields",
			"attribute"	=> "userdata",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_USERDATA,
			"mode"		=> "free",
			"category"	=> "userdata",
			"subcategory"	=> "Additional Data Fields",
			"parent"	=> "",
			"dependencies"	=> array("userdatalabel"),
			"variables"	=> null,
			"help"		=> "If enabled, then user can send additional information together with uploaded files (e.g. name, email etc), defined in userdatalabel attribute."
		),
		array(
			"name"		=> "Additional Data Fields",
			"attribute"	=> "userdatalabel",
			"type"		=> "userfields",
			"listitems"	=> null,
			"value"		=> WFU_USERDATALABEL,
			"mode"		=> "free",
			"category"	=> "userdata",
			"subcategory"	=> "Additional Data Fields",
			"parent"	=> "userdata",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "It defines the labels of the additional data fields and whether they are required or not."
		),
		array(
			"name"		=> "WP Filebase Plugin Connection",
			"attribute"	=> "filebaselink",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_FILEBASELINK,
			"mode"		=> "free",
			"category"	=> "interoperability",
			"subcategory"	=> "Connection With Other Plugins",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If enabled then the WP Filebase Plugin will be informed about new file uploads."
		),
		array(
			"name"		=> "Add Uploaded Files To Media",
			"attribute"	=> "medialink",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_MEDIALINK,
			"mode"		=> "free",
			"category"	=> "interoperability",
			"subcategory"	=> "Connection With Other Wordpress Features",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If enabled then the uploaded files will be added to the Media library of your Wordpress website. Please note that the upload path must be inside the wp-content/uploads directory (which is the default upload path)."
		),
		array(
			"name"		=> "Attach Uploaded Files To Post",
			"attribute"	=> "postlink",
			"type"		=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_POSTLINK,
			"mode"		=> "free",
			"category"	=> "interoperability",
			"subcategory"	=> "Connection With Other Wordpress Features",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "If enabled then the uploaded files will be added to the current post as attachments. Please note that the upload path must be inside the wp-content/uploads directory (which is the default upload path)."
		),
		null
	);

	wfu_array_remove_nulls($defs);

	return $defs;
}


?>
