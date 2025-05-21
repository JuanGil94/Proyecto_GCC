<?php
$dDebug = false;
$dSQL = "";

$tables_data = array();
$page_layouts = array();
$page_options = array();
$pd_pages = array();
$all_pd_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$placeHolders = array();
$all_page_layouts = array();
$all_page_types = null;
$all_pages = null;
$detailsTablesData = array();
$masterTablesData = array();

// .NET convertor needs this
$tdataGLOBAL = array();
$pages = array();
$defaultPages = array();
$topsArray = array();

/**
 * Breadcrumb label templates

 *	Label without master table
 *	$breadcrumb_titles[<language>][<table>][<page>]["."] = "..."

 *	Label with master active
 *	$breadcrumb_titles[<language>][<table>][<page>][<master>] = "..."

 *	Label for the page with no table
 *	$breadcrumb_titles[<language>]["."][<page>]["."] = "..."
 */
$breadcrumb_labels = array();


$lookupTableLinks = array();

$_gmdays = array(0=>31,1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);

include(getabspath('classes/layout.php'));
include(getabspath('classes/pdlayout.php'));


//	custom labels
$custom_labels = array();
$custom_labels["Spanish"] = array();

define('GLOBAL_PAGES_SHORT', ".global");
define('GLOBAL_PAGES', "<global>");

/**
 *  Define constants of page name
 */
define('PAGE_LIST',"list");
define('PAGE_MASTER_INFO_LIST',"masterlist");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_REMIND_SUCCESS',"remind_success");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_MASTER_INFO_REPORT',"masterreport");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_MASTER_INFO_PRINT',"masterprint");
define('PAGE_RPRINT',"rprint");
define('PAGE_MASTER_INFO_RPRINT',"masterrprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_INLINEADD',"inlineadd");
define('PAGE_INLINEEDIT',"inlineedit");
define('PAGE_DASHBOARD',"dashboard");
define('PAGE_DASHMAP', "map");
define('PAGE_ADMIN_RIGHTS', "admin_rights_list");
define('PAGE_ADMIN_MEMBERS', "admin_members_list");
define('PAGE_ADMIN_ADMEMBERS', "admin_admembers_list");
define('PAGE_USERINFO',"userinfo");
define('PAGE_SESSION_EXPIRED',"session_expired");

define('ADMIN_USERS',"admin_users");


define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_INLINE",2);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_INLINE",5);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);
define("LOGIN_AD",2);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);
define("SECURITY_AD", 2);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);
define("nDATABASE_Interbase", 16);
define("nDATABASE_REST", 19 );

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);
define("ADD_DASHBOARD",5);
define("ADD_MASTER_POPUP",6);
define("ADD_MASTER_DASH",7);

//	Edit page modes
define("EDIT_SIMPLE",0); 	//	standalone Edit page
define("EDIT_INLINE",1);	//	inlineEdit
define("EDIT_POPUP",3);		//	edit page in popup
define("EDIT_DASHBOARD",4);	//	edit page in dashboard
define("EDIT_SELECTED_SIMPLE",5);
define("EDIT_SELECTED_POPUP",6);


//	View page modes
define("VIEW_SIMPLE",0); 	//	standalone View page
define("VIEW_POPUP",1); 	//	View page in popup
define("VIEW_DASHBOARD",2); 	//	View page in dashboard
define("VIEW_PDFJSON",3); 	//	prepare json for PDF

define("LOGIN_SIMPLE", 0);
define("LOGIN_POPUP", 1);
define("LOGIN_EMBEDED", 2);

define("REGISTER_SIMPLE", 0);
define("REGISTER_POPUP", 1);

define("REMIND_SIMPLE", 0);
define("REMIND_POPUP", 1);

define("EXPORT_SIMPLE", 0);
define("EXPORT_POPUP", 1);

define("EXPORT_RAW", 0);
define("EXPORT_FORMATTED", 1);
define("EXPORT_BOTH", 2);


define("CHANGEPASS_SIMPLE", 0);
define("CHANGEPASS_POPUP", 1);

define("USERINFO_SIMPLE", 0 );
define("USERINFO_2FACTOR", 1 );

define("SESSION_EXPIRED_SIMPLE", 0 );
define("SESSION_EXPIRED_POPUP", 1 );

define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);
define("titDASHBOARD",4);
define("titSQL",6);
define("titREST",7);
define("titSQL_REPORT",8);
define("titSQL_CHART",9);
define("titREST_REPORT",10);
define("titREST_CHART",11);

define("TAB_TYPE_TAB", 0);
define("TAB_TYPE_SECTION", 1);
define("TAB_TYPE_STEP", 2);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);
define("LIST_DASHBOARD", 7);
define("LIST_DASHDETAILS", 8);
define("MAP_DASHBOARD", 9);
define("LIST_MASTER",10);
define("PRINT_MASTER",11);
define("LIST_POPUPDETAILS",12);
define("PRINT_SIMPLE",13);
define("PRINT_PDFJSON",14); 	//	prepare json for PDF
define("LIST_PDFJSON",15); 	//	prepare details table json for PDF



define("REPORT_SIMPLE", 0);
define("REPORT_POPUPDETAILS", 1);
define("REPORT_DASHBOARD", 2);
define("REPORT_DETAILS", 3);
define("REPORT_DASHDETAILS", 4);

define("CHART_SIMPLE", 0);
define("CHART_POPUPDETAILS", 1);
define("CHART_DASHBOARD", 2);
define("CHART_DETAILS", 3);
define("CHART_DASHDETAILS", 4);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("DL_SINGLE",0);
define("DL_INDIVIDUAL",1);
define("DL_NONE",2);

define("SEARCH_SIMPLE", 0);
define("SEARCH_LOAD_CONTROL", 1);
define("SEARCH_DASHBOARD", 2);
define("SEARCH_POPUP", 3);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
// lookup table is not added to the project
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);
define("ENCRYPTION_ALG_DES", 1);
define("ENCRYPTION_ALG_AES", 128);
define("ENCRYPTION_ALG_AES_256", 256);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

define("SEARCHID_SIMPLE", 1);
define("SEARCHID_PANEL", 10);
define("SEARCHID_ALL", 10000);


/* Define constants for the filters settings */
//fiter totals
define("FT_NONE", 0);
define("FT_COUNT", 1);
define("FT_MIN", 2);
define("FT_MAX", 3);
//filter multiselect
define("FM_NONE", 0);
define("FM_ON_DEMAND", 1);
define("FM_ALWAYS", 2);
//filter format
define("FF_VALUE_LIST", "Values list");
define("FF_BOOLEAN", "Options list");
define("FF_INTERVAL_LIST", "Interval list");
define("FF_INTERVAL_SLIDER", "Interval slider");
//define filter interval limits' constants
define("FIL_NONE", 0);
define("FIL_MORE_THAN", 1);
define("FIL_LESS_THAN", 1);
define("FIL_LESS_THAN_OR_EQUAL", 2);
define("FIL_MORE_THAN_OR_EQUAL", 2);
define("FIL_REMAINDER", 3);
//define slider filter constants
define("FS_BOTH", 0);
define("FS_MIN_ONLY", 1);
define("FS_MAX_ONLY", 2);
//define slider step types
define("FSST_SECONDS", 0);
define("FSST_MINUTES", 1);
define("FSST_HOURS", 2);
define("FSST_DAYS", 3);
define("FSST_MONTHS", 4);
define("FSST_YEARS", 5);
//sorting constants
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);
/**/


define("gltHORIZONTAL", 0);
define("gltVERTICAL", 1);
define("gltCOLUMNS", 2);
define("gltFLEXIBLE", 3);

/* Define comstamts for hidden columns devices*/
define("DESKTOP", 1);
define("TABLET_10_IN", 2);
define("TABLET_7_IN", 3);
define("SMARTPHONE_LANDSCAPE", 4);
define("SMARTPHONE_PORTRAIT", 5);
/**/

/* Dashboard types */
define("DASHBOARD_LIST", 0);
define("DASHBOARD_CHART", 1);
define("DASHBOARD_REPORT", 2);
define("DASHBOARD_RECORD", 3);
define("DASHBOARD_SEARCH", 4);
define("DASHBOARD_DETAILS", 5);
define("DASHBOARD_MAP", 6);
define("DASHBOARD_SNIPPET", 7);
/**/

/* Define message type constants */
define("MESSAGE_INFO", 1);
define("MESSAGE_ERROR", 2);

/* Define ML String type constants */
define("ML_TEXT", 0);
define("ML_CUSTOM_LABEL", 1);
define("ML_MESSAGE", 2);


/* Define print page and pdf page constants */
define("PRINT_PAGE_WIDTH", 700);
define("PRINT_PAGE_HEIGHT", 900);
define("PDF_PAGE_WIDTH", 750);
define("PDF_PAGE_HEIGHT", 1060);

/* Defined maps type */
define("GOOGLE_MAPS", 0);
define("OPEN_STREET_MAPS", 1);
define("BING_MAPS", 2);
define("HERE_MAPS", 3);
define("MAPQUEST_MAPS", 4);

/* Defined captcha type */
define("FLASH_CAPTCHA", 0);
define("RE_CAPTCHA", 1);

/* Define 'after record added/edited actions' constants*/
define("AA_TO_LIST", 0);
define("AA_TO_ADD", 1);
define("AA_TO_VIEW", 2);
define("AA_TO_EDIT", 3);
define("AA_TO_DETAIL_ADD", 4);
define("AA_TO_DETAIL_LIST", 5);

define("AE_TO_LIST", 0);
define("AE_TO_EDIT", 1);
define("AE_TO_VIEW", 2);
define("AE_TO_NEXT_EDIT", 3);
define("AE_TO_PREV_EDIT", 4);
define("AE_TO_DETAIL_LIST", 5);
/**/

define('BOOTSTRAP_LAYOUT', 3);
define('PD_BS_LAYOUT', 4); // temp

define('ICON_NONE', 0);
define('ICON_FILE', 1);
define('ICON_BOOTSTRAP_GLYPH', 2);
define('ICON_FONT_AWESOME', 3);


define('WELCOME_MENU', "welcome_page");

define('MENU_VERTICAL', "v");
define('MENU_HORIZONTAL', "h");
define('MENU_QUICKJUMP', "q");

// paramsLogger types
define('SSEARCH_PARAMS_TYPE', 1);
define('CRESIZE_PARAMS_TYPE', 2);
define('SHFIELDS_PARAMS_TYPE', 3);
define('FORDER_PARAMS_TYPE', 4);

// remind password method
define('RPM_SEND', 0 );
define('RPM_RESET', 1 );

define('CONTEXT_GLOBAL', 0);	//	global context
define('CONTEXT_PAGE', 1);		//	page where pageObject is available
define('CONTEXT_BUTTON', 2);	// 	button or other AJAX event
define('CONTEXT_LOOKUP', 3);	//	dependent lookup
define('CONTEXT_ROW', 4);		// 	processing grid row on multiple-records page (list)
define('CONTEXT_COMMAND', 5);	// 	DsCommand context
define('CONTEXT_SEARCH', 6);	// 	Search object context
define('CONTEXT_MASTER', 7);	// 	Master-details context

define('BOTH_RECORDS', 0);
define('NEXT_RECORD', 1);
define('PREV_RECORD', 2);

// login form types
define('LOGIN_SEPARATE', 0);
//define('LOGIN_POPUP', 1);
//define('LOGIN_EMBEDED', 2);
define('NO_LOGIN', 3);

define('MEDIA_DESKTOP', 0);
define('MEDIA_MOBILE', 1);
define('MEDIA_MOBILE_EXPANDED', 2);

define('WEBREPORTS_TABLE', "{04AFFBE6-86C0-47b0-ADD3-BA7FA19CA6FC}" );

define('REST_BASIC', 1);
define('REST_APIKEY', 2);
define('REST_JWT', 3);
define('REST_OAUTH', 4);

define("TIME_FORMAT_TIME_OF_DAY", 0);
define("TIME_FORMAT_DURATION", 1);

// user session levels
define("LOGGED_NONE", 0 );
//	logged in
define("LOGGED_FULL", 1 );
//	user has entered username & password, has to do 2factor authentication
define("LOGGED_2F_PENDING", 2 );
//	user has logged in, must setup 2factor authentication
define("LOGGED_2FSETUP_PENDING", 3 );
//	user has logged in, acount not activated, must confirm email address
define("LOGGED_ACTIVATION_PENDING", 4 );


define("stNONE", '%none' );
define("stHARDCODED", '%hardcoded' );
define("stDB", '%db' );
define("stAD", '%ad' );
define("stGOOGLE", '%google' );
define("stOPENID", '%openid' );
define("stFACEBOOK", '%facebook' );
define("stAZURE", '%azure' );
define("stSAML", '%saml' );
define("stOKTA", '%okta' );

//	storage providers
define("stpDISK", 0 );
define("stpAMAZON", 1 );
define("stpGOOGLEDRIVE", 2 );
define("stpONEDRIVE", 3 );
define("stpDROPBOX", 4 );
define("stpWASABI", 5 );

define( "spidGOOGLEDRIVE", "_PHPRunnerGoogleDriveConnection" );
define( "spidAMAZON", "_PHPRunnerAmazonS3Connection" );
define( "spidONEDRIVE", "_PHPRunnerOneDriveConnection" );
define( "spidDROPBOX", "_PHPRunnerDropboxConnection" );
define( "spidWASABI", "_PHPRunnerWasabiS3Connection" );

$globalSettings = array();
$g_defaultOptionValues = array();
$g_settingsType = array();

$twilioSID = "";
$twilioAuth = "";
$twilioNumber = "";

// Update edit format for date text fields
$editTextAsDate = false;


/**
 * An option to be added to the wizard
 * Controls 'Remeber me' option
 */
$globalSettings["keepLoggedIn"] = true;

$globalSettings["bEncryptPasswords"] = true;
$globalSettings["nEncryptPasswordMethod"] = "0";

//mail settings
$globalSettings["useBuiltInMailer"] = false;

$globalSettings["useCustomSMTPSettings"] = true;

$globalSettings["strSMTPUser"] = "appcobrocoactivo@deaj.ramajudicial.gov.co";
$globalSettings["strSMTPServer"] = "smtp.office365.com";
$globalSettings["strSMTPPort"] = "587";
$globalSettings["strSMTPPassword"] = "C1av3C06r0*";
$globalSettings["strFromEmail"] = "soportecobrocoactivo@deaj.ramajudicial.gov.co";

$globalSettings["SMTPSecure"] = "tls";
//

/*
$globalSettings["ADDomain"] = "";
$globalSettings["ADServer"] = "";
$globalSettings["ADFollowRefs"] = ;
$globalSettings["ADBaseDN"] = "";
if( !$globalSettings["ADBaseDN"] ) {
	$globalSettings["ADBaseDN"] = ldap_Domain2DN( $globalSettings["ADDomain"] );
}

$globalSettings["customLDAP"] = false;
*/
$customLDAPSettings = array(); //#9409

//	if user is member of group A, and group A is a memeber of group B,
//	count the user as member of group B
$adNestedPermissions = false;

$ajaxSearchStartsWith = true;

$globalSettings["staticGuestLogin"] = true;


$globalSettings["LandingPageType"] = 0;
$globalSettings["LandingTable"] = "";
$globalSettings["LandingPage"] = "";
$globalSettings["LandingURL"] = "";
$globalSettings["LandingPageId"] = "";

$globalSettings["ProjectLogo"] = array();
$globalSettings["ProjectLogo"]["Spanish"] = "Portal Coactivo";

$globalSettings["CookieBanner"] = array();

$globalSettings["useCookieBanner"] = 0 != 0;

$globalSettings["htmlEmailTemplates"] = array();
$globalSettings["htmlEmailTemplates"]["Spanish"] = array();
$globalSettings["htmlEmailTemplates"]["Spanish"]["resetpassword"] = true;


$globalSettings["createLoginPage"] = true;
$globalSettings["userGroupCount"] = 2;


$globalSettings["apiGoogleMapsCode"] = "";

$globalSettings["useEmbedMapsAPI"] = 1 != 0;

//password global settings for register page
$globalSettings["pwdStrong"] = true;
$globalSettings["pwdLen"] = 8;
$globalSettings["pwdUnique"] = 1;
$globalSettings["pwdDigits"] = 2;
$globalSettings["pwdUpperLower"] = true;


/**
 * If true then detail table name will be printed before detail table on the view page
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * The number of seach suggests displayed
 */
$globalSettings["searchSuggestsNumber"] = 10;

$globalSettings["override"] = array();


$styleOverrides = array();


$globalSettings["mapProvider"]=0;

$globalSettings["CaptchaSettings"] = array();
$globalSettings["CaptchaSettings"]["type"] = 0;
$globalSettings["CaptchaSettings"]["siteKey"] = "";
$globalSettings["CaptchaSettings"]["secretKey"] = "";
$globalSettings["CaptchaSettings"]["captchaPassesCount"] = "5";






$bsProjectTheme = "cerulean";
$bsProjectSize = "normal";

$wr_pagestylepath = "OfficeOffice";
$wr_is_standalone = false;
$WRAdminPagePassword = "";



/**
 * Legacy variables for pre-10.6 business templates only.
 * DEPRECATED
 */
$cLoginTable = "dbo.UsuGCC-_users";
$cDisplayNameField = "fullname";
$cUserNameField	= "username";
$cPasswordField	= "password";
$cUserGroupField = "UserName";
$cEmailField = "email";
$cUserpicField = "";
$loginKeyFields= array();
$loginKeyFields[] = "ID";

//	legacy use only
$cKeyFields = $loginKeyFields;

/**
 * End Legacy csection
 */


$globalSettings["usersDatasourceTable"] = "dbo.UsuGCC-_users";

$globalSettings["userRequireActivation"] = true;
$globalSettings["userActivationField"] = "active";

$globalSettings["jwtSecret"] = "ibM3D3ojrsLt0VHyTPKD";


$arrCustomPages = array();


$gPermissionsRefreshTime = 5;
$gPermissionsRead = false;

//	-1 - undetermined, 0 - nah, 1 - yep
$gGuestHasPermissions = -1;

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";
$showCustomMarkerOnPrint = false;

$projectBuildKey = "4601_1747748876";
$wizardBuildKey = "39925";
$projectBuildNumber = "4601";

$mlang_messages = array();
$mlang_charsets = array();


$projectMenus = array();
$projectMenus[] = "main";
$projectMenus[] = "BDME_Publica";
$projectMenus[] = "secondary";


$menuTreelikeFlags = array();
$menuTreelikeFlags["main"] = 1;


$menuTreelikeFlags["BDME_Publica"] = 1;
$menuTreelikeFlags["secondary"] = 1;



// table captions
$tableCaptions = array();
$tableCaptions["Spanish"] = array();
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"]["dbo_UsuGCC__users"] = "UsuGCC- Users";
$tableCaptions["Spanish"]["dbo_Abogados"] = "Abogados";
$tableCaptions["Spanish"]["dbo_Actuaciones"] = "Actuaciones";
$tableCaptions["Spanish"]["dbo_Ciudades"] = "Ciudades";
$tableCaptions["Spanish"]["dbo_Conceptos"] = "Conceptos";
$tableCaptions["Spanish"]["dbo_Departamentos"] = "Departamentos";
$tableCaptions["Spanish"]["dbo_Despachos"] = "Despachos";
$tableCaptions["Spanish"]["dbo_Empresas"] = "Parámetros";
$tableCaptions["Spanish"]["dbo_Entidades"] = "Entidades";
$tableCaptions["Spanish"]["dbo_Especialidades"] = "Especialidades";
$tableCaptions["Spanish"]["dbo_Estados"] = "Estados";
$tableCaptions["Spanish"]["dbo_Etapas"] = "Etapas";
$tableCaptions["Spanish"]["dbo_Festivos"] = "Festivos";
$tableCaptions["Spanish"]["dbo_MotivosDevoluciones"] = "Motivos Devoluciones";
$tableCaptions["Spanish"]["dbo_Naturalezas"] = "Naturalezas";
$tableCaptions["Spanish"]["dbo_Niveles"] = "Niveles";
$tableCaptions["Spanish"]["dbo_Oficios"] = "Oficios";
$tableCaptions["Spanish"]["dbo_Operaciones"] = "Operaciones";
$tableCaptions["Spanish"]["dbo_Parejas"] = "Parejas";
$tableCaptions["Spanish"]["dbo_Presupuestos"] = "Presupuestos";
$tableCaptions["Spanish"]["dbo_Reportes"] = "Reportes";
$tableCaptions["Spanish"]["dbo_Salarios"] = "Salarios";
$tableCaptions["Spanish"]["dbo_Seccionales"] = "Seccionales";
$tableCaptions["Spanish"]["dbo_Test"] = "Test";
$tableCaptions["Spanish"]["dbo_Uvts"] = "Uvts";
$tableCaptions["Spanish"]["dbo_CarteraTipos"] = "Cartera Tipos";
$tableCaptions["Spanish"]["dbo_Chequeos"] = "Chequeos";
$tableCaptions["Spanish"]["dbo_ChequeosOficios"] = "Chequeos Oficios";
$tableCaptions["Spanish"]["dbo_ChequeosSancionados"] = "Chequeos Sancionados";
$tableCaptions["Spanish"]["dbo_Devoluciones"] = "Devoluciones";
$tableCaptions["Spanish"]["dbo_Horarios"] = "Horarios";
$tableCaptions["Spanish"]["dbo_UsuGCC_uggroups"] = "Usu GCC-uggroups";
$tableCaptions["Spanish"]["dbo_IPsRestringidas"] = "IPs Restringidas";
$tableCaptions["Spanish"]["dbo_TiposDocumentos"] = "Tipos Documentos";
$tableCaptions["Spanish"]["dbo_Tramites"] = "Tramites";
$tableCaptions["Spanish"]["dbo_Conceptos1"] = "Conceptos1";
$tableCaptions["Spanish"]["dbo_Procesos"] = "Procesos";
$tableCaptions["Spanish"]["dbo_Solidarios"] = "Solidarios";
$tableCaptions["Spanish"]["dbo_Llamadas"] = "Llamadas";
$tableCaptions["Spanish"]["dbo_Medidas"] = "Medidas";
$tableCaptions["Spanish"]["dbo_Acuerdos"] = "Acuerdos";
$tableCaptions["Spanish"]["dbo_Pagos1"] = "Pagos1";
$tableCaptions["Spanish"]["dbo_Cuentas"] = "Cuentas";
$tableCaptions["Spanish"]["dbo_Intereses"] = "Intereses";
$tableCaptions["Spanish"]["dbo_Reasignaciones"] = "Reasignaciones";
$tableCaptions["Spanish"]["dbo_Suspensiones"] = "Suspensiones";
$tableCaptions["Spanish"]["dbo_Suspensiones1"] = "Suspensiones1";
$tableCaptions["Spanish"]["dbo_Interrupciones"] = "Interrupciones";
$tableCaptions["Spanish"]["dbo_Reliquidaciones"] = "Reliquidaciones";
$tableCaptions["Spanish"]["dbo_Ayudas"] = "Ayudas";
$tableCaptions["Spanish"]["dbo_Temas"] = "Temas";
$tableCaptions["Spanish"]["dbo_Correspondencias"] = "Correspondencias";
$tableCaptions["Spanish"]["dbo_usugcc__audit"] = "Usugcc- Audit";
$tableCaptions["Spanish"]["dbo_Importaciones"] = "Importaciones";
$tableCaptions["Spanish"]["dbo_Indeterminados"] = "Indeterminados";
$tableCaptions["Spanish"]["dbo_UserProfile"] = "User Profile";
$tableCaptions["Spanish"]["dbo_Auditorias"] = "Auditorias";
$tableCaptions["Spanish"]["dbo_Menus"] = "Menus";
$tableCaptions["Spanish"]["dbo_Minjusticia"] = "Minjusticia";
$tableCaptions["Spanish"]["dbo_Minjusticia2"] = "Minjusticia2";
$tableCaptions["Spanish"]["dbo_Minjusticia3"] = "Minjusticia3";
$tableCaptions["Spanish"]["dbo_Actas"] = "Actas";
$tableCaptions["Spanish"]["dbo_AlertasTipos"] = "Alertas Tipos";
$tableCaptions["Spanish"]["dbo_Direcciones"] = "Direcciones";
$tableCaptions["Spanish"]["dbo_Propiedades"] = "Propiedades";
$tableCaptions["Spanish"]["dbo_Propiedades1"] = "Propiedades1";
$tableCaptions["Spanish"]["dbo_Propiedades3"] = "Propiedades3";
$tableCaptions["Spanish"]["dbo_Bancos"] = "Bancos";
$tableCaptions["Spanish"]["dbo_Motivos"] = "Motivos";
$tableCaptions["Spanish"]["dbo_Oficios_Sigobius"] = "Oficios Sigobius";
$tableCaptions["Spanish"]["Tasas_Tributarias"] = "Tasas Tributarias";
$tableCaptions["Spanish"]["Tasas_Comerciales"] = "Tasas Comerciales";
$tableCaptions["Spanish"]["Tasas_TES__Deterioro_de_Cartera_"] = "Tasas TES (Deterioro de Cartera)";
$tableCaptions["Spanish"]["dbo_Carceles"] = "Carceles";
$tableCaptions["Spanish"]["dbo_Alertas"] = "Alertas";
$tableCaptions["Spanish"]["dbo_tipoCobro"] = "Tipo Cobro";
$tableCaptions["Spanish"]["dbo_Oficios1"] = "Oficios1";
$tableCaptions["Spanish"]["dbo_Ciudades1"] = "Ciudades1";
$tableCaptions["Spanish"]["dbo_Autorizaciones"] = "Autorizaciones";
$tableCaptions["Spanish"]["dbo_Liquidaciones"] = "Liquidaciones";
$tableCaptions["Spanish"]["dbo_usugcc__noti"] = "Usugcc  Noti";
$tableCaptions["Spanish"]["dbo_Sancionados"] = "Sancionados";
$tableCaptions["Spanish"]["dbo_Seguimiento_y_control_de_Acuerdos"] = "Seguimiento y control de Acuerdos";
$tableCaptions["Spanish"]["dbo_Despachos4"] = "Despachos4";
$tableCaptions["Spanish"]["dbo_Despachos1"] = "Despachos1";
$tableCaptions["Spanish"]["dbo_Remanentes_Report"] = "Remanentes Report";
$tableCaptions["Spanish"]["dbo_ProcesosPrescritos"] = "Procesos Prescritos";
$tableCaptions["Spanish"]["dbo_Prescritos_Report"] = "Prescritos Report";
$tableCaptions["Spanish"]["dbo_AlertMandPago"] = "Alert Mand Pago";
$tableCaptions["Spanish"]["AlertNotMandPago"] = "Alert Not Mand Pago";
$tableCaptions["Spanish"]["AlertIncAcuPago"] = "Alert Inc Acu Pago";
$tableCaptions["Spanish"]["AlertSinPersuasivo"] = "Alert Sin Persuasivo";
$tableCaptions["Spanish"]["AlertBusqBienes"] = "Alert Busq Bienes";
$tableCaptions["Spanish"]["AlertSegAdelante"] = "Alert Seg Adelante";
$tableCaptions["Spanish"]["AlertIntSusp"] = "Alert Int Susp";
$tableCaptions["Spanish"]["dbo_ReporteMandamientos"] = "Reporte Mandamientos";
$tableCaptions["Spanish"]["dbo_ListaChequeosReporte"] = "Lista Chequeos Reporte";
$tableCaptions["Spanish"]["dbo_ReporteClasificacionCartera"] = "Reporte Clasificacion Cartera";
$tableCaptions["Spanish"]["dbo_ProcesosSinNotificaReport"] = "Procesos Sin Notifica Report";
$tableCaptions["Spanish"]["dbo_ReporteCorporaci_nEspecialidad"] = "Reporte Corporación Especialidad";
$tableCaptions["Spanish"]["dbo_CorporacionesView"] = "Corporaciones View";
$tableCaptions["Spanish"]["dbo_Fechas"] = "Fechas";
$tableCaptions["Spanish"]["dbo_AuditoriasProcesosView"] = "Auditorias Procesos View";
$tableCaptions["Spanish"]["dbo_ProcesosReasignar"] = "Procesos Reasignar";
$tableCaptions["Spanish"]["dbo_Genero"] = "Genero";
$tableCaptions["Spanish"]["admin_admembers"] = "Admin Admembers";
$tableCaptions["Spanish"]["dbo_Ciudades4"] = "Ciudades4";
$tableCaptions["Spanish"]["dbo_Ciudades5"] = "Ciudades5";
$tableCaptions["Spanish"]["dbo_Ciudades3"] = "Ciudades3";
$tableCaptions["Spanish"]["dbo_Uvbs"] = "Uvbs";
$tableCaptions["Spanish"]["Resumen_Mensual"] = "Resumen Mensual";
$tableCaptions["Spanish"]["dbo_tipoRecaudo"] = "Tipo Recaudo";
$tableCaptions["Spanish"]["dbo_Despachos2"] = "Despachos2";
$tableCaptions["Spanish"]["dbo_Despachos5"] = "Despachos5";
$tableCaptions["Spanish"]["BDME_Actualizaci_n"] = "BDME Actualización";
$tableCaptions["Spanish"]["BDME_Gu_a_del_Deudor_Moroso"] = "BDME Guía del Deudor Moroso";
$tableCaptions["Spanish"]["BDME_Incumplimiento_Acuerdo_de_Pago_Semestral"] = "BDME Incumplimiento Acuerdo de Pago Semestral";
$tableCaptions["Spanish"]["BDME_Retiros"] = "BDME Retiros";
$tableCaptions["Spanish"]["BDME_Reporte_Semestral"] = "BDME Reporte Semestral";
$tableCaptions["Spanish"]["BDME_Cancelaci_n_Acuerdo_de_Pago"] = "BDME Cancelación Acuerdo de Pago";
$tableCaptions["Spanish"]["BDME_Excluidos"] = "BDME Excluidos";
$tableCaptions["Spanish"]["Base_de_Datos___Historico"] = "Base de Datos - Historico";
$tableCaptions["Spanish"]["Deterioro_de_Cartera_por_Proceso"] = "Deterioro de Cartera por Proceso";
$tableCaptions["Spanish"]["Intereses_por_Proceso"] = "Intereses por Proceso";
$tableCaptions["Spanish"]["Listado_Medidas_Cautelares"] = "Listado Medidas Cautelares";
$tableCaptions["Spanish"]["Presunci_n_Prescripci_n"] = "Presunción Prescripción";
$tableCaptions["Spanish"]["Certificado_del_Resumen_Mensual"] = "Certificado del Resumen Mensual";
$tableCaptions["Spanish"]["Certificado_del_Resumen_por_Periodo"] = "Certificado del Resumen por Periodo";
$tableCaptions["Spanish"]["BDME_Actualizaci_n_DataChild"] = "BDME Actualización DataChild";
$tableCaptions["Spanish"]["BDME_Cancelaci_n_Acuerdo_de_Pago_DataChild"] = "BDME Cancelación Acuerdo de Pago DataChild";
$tableCaptions["Spanish"]["BDME_Excluidos_DataChild"] = "BDME Excluidos DataChild";
$tableCaptions["Spanish"]["BDME_Incumplimiento_Acuerdo_de_Pago_Semestral_DataChild"] = "BDME Incumplimiento Acuerdo de Pago Semestral DataChild";
$tableCaptions["Spanish"]["BDME_Reporte_Semestral_Datachild"] = "BDME Reporte Semestral Datachild";
$tableCaptions["Spanish"]["BDME_Retiros_DataChild"] = "BDME Retiros DataChild";
$tableCaptions["Spanish"]["dbo_BusquedasPropiedades"] = "Busquedas Propiedades";
$tableCaptions["Spanish"]["dbo_ProcesosView1"] = "Procesos View1";
$tableCaptions["Spanish"]["Obligaciones_de_Dificil_Recaudo"] = "Obligaciones de Dificil Recaudo";
$tableCaptions["Spanish"]["Privados_de_la_Libertad"] = "Privados de la Libertad";
$tableCaptions["Spanish"]["Recaudos_por_A_os"] = "Recaudos por Años";
$tableCaptions["Spanish"]["Reportes"] = "Reportes";
$tableCaptions["Spanish"]["Reportes_DataChild_prescritos_con_resoluci_n_expedida_Solidarios"] = "Reportes DataChild prescritos con resolución expedida_Solidarios";
$tableCaptions["Spanish"]["Reportes_DataChild_prescritos_con_resoluci_n_expedida_Solidarios_Bienes"] = "Reportes DataChild prescritos con resolución expedida_Solidarios_Bienes";
$tableCaptions["Spanish"]["Transacciones_Usuario"] = "Transacciones Usuario";
$tableCaptions["Spanish"]["Indicadores_de_Gesti_n"] = "Indicadores de Gestión";
$tableCaptions["Spanish"]["Tablero_de_Control_General"] = "Tablero de Control General";
$tableCaptions["Spanish"]["Tablero_de_Control_Total_Procesos"] = "Tablero de Control Total Procesos";
$tableCaptions["Spanish"]["Tableros_RecaudoSeccional"] = "Tableros RecaudoSeccional";
$tableCaptions["Spanish"]["Total_Procesos"] = "Total Procesos";
$tableCaptions["Spanish"]["Total_Recaudado"] = "Total Recaudado";
$tableCaptions["Spanish"]["Procesos___Mes"] = "Procesos - Mes";
$tableCaptions["Spanish"]["Recaudo___Mes"] = "Recaudo - Mes";
$tableCaptions["Spanish"]["Tablero_de_Control_Gesti_n"] = "Tablero de Control Gestión";
$tableCaptions["Spanish"]["Actuaciones_Por_Mes"] = "Actuaciones Por Mes";
$tableCaptions["Spanish"]["dbo_ProcesosSancionados"] = "Procesos Sancionados";
$tableCaptions["Spanish"]["BienesInmuebles"] = "Bienes Inmuebles";
$tableCaptions["Spanish"]["BienesMuebles"] = "Bienes Muebles";
$tableCaptions["Spanish"]["Productos_Bancarios"] = "Productos Bancarios";
$tableCaptions["Spanish"]["dbo_tipoTasas"] = "Tipo Tasas";
$tableCaptions["Spanish"]["Acuerdo_de_Pago"] = "Acuerdo de Pago";
$tableCaptions["Spanish"]["Listado_de_Chequeos"] = "Listado de Chequeos";
$tableCaptions["Spanish"]["Listado_de_Chequeo_Sancionado_DataChild"] = "Listado de Chequeo Sancionado DataChild";
$tableCaptions["Spanish"]["Listado_de_Chequeo_Oficios_DataChild"] = "Listado de Chequeo Oficios DataChild";
$tableCaptions["Spanish"]["Listado_de_Chequeo_Motivo_devolucion_DataChild"] = "Listado de Chequeo Motivo devolucion DataChild";
$tableCaptions["Spanish"]["Clasificaciones____Cartera"] = "Clasificaciones -- Cartera";
$tableCaptions["Spanish"]["Corporaciones___Especialidades"] = "Corporaciones - Especialidades";
$tableCaptions["Spanish"]["Mandamientos_de_pago_Automaticos"] = "Mandamientos de pago Automaticos";
$tableCaptions["Spanish"]["Prescripciones_Autom_tica"] = "Prescripciones Automática";
$tableCaptions["Spanish"]["Procesos_Sin_Notificaci_n"] = "Procesos Sin Notificación";
$tableCaptions["Spanish"]["Remanentes_"] = "Remanentes-";
$tableCaptions["Spanish"]["Prueba_Archivo_Plano"] = "Prueba Archivo Plano";
$tableCaptions["Spanish"]["Consulta_Publica"] = "Consulta Publica";
$tableCaptions["Spanish"]["Consulta_Publica_Notificacion_Detalle"] = "Consulta Publica Notificacion Detalle";
$tableCaptions["Spanish"]["Consulta_Publica_Generacion_Desprendible"] = "Consulta Publica Generacion Desprendible";
$tableCaptions["Spanish"]["dbo_Pagos2"] = "Pagos2";
$tableCaptions["Spanish"]["dbo_Propiedades2"] = "Propiedades2";
$tableCaptions["Spanish"]["dbo_Motivos1"] = "Motivos1";
$tableCaptions["Spanish"]["dbo_Etapas1"] = "Etapas1";
$tableCaptions["Spanish"]["dbo_Estados1"] = "Estados1";
$tableCaptions["Spanish"]["dbo_Aplazamientos"] = "Aplazamientos";
$tableCaptions["Spanish"]["dbo_Seccionales1"] = "Seccionales1";
$tableCaptions["Spanish"]["dbo_Naturalezas1"] = "Naturalezas1";
$tableCaptions["Spanish"]["dbo_Calificaciones"] = "Calificaciones";
$tableCaptions["Spanish"]["dbo_Niveles1"] = "Niveles1";
$tableCaptions["Spanish"]["dbo_Niveles2"] = "Niveles2";
$tableCaptions["Spanish"]["dbo_Conceptos2"] = "Conceptos2";
$tableCaptions["Spanish"]["dbo_PropiedadesMedidas"] = "Propiedades Medidas";
$tableCaptions["Spanish"]["Consolidado_por_Conceptos"] = "Consolidado por Conceptos";
$tableCaptions["Spanish"]["Movimiento_Mensual"] = "Movimiento Mensual";
$tableCaptions["Spanish"]["Informe_ejecutivo_de_Gesti_n"] = "Informe ejecutivo de Gestión";
$tableCaptions["Spanish"]["Cumplimiento_de_metas_de_Recaudo"] = "Cumplimiento de metas de Recaudo";
$tableCaptions["Spanish"]["Indicadores_de_b_squeda"] = "Indicadores de búsqueda";
$tableCaptions["Spanish"]["Indicadores_Recaudos"] = "Indicadores Recaudos";
$tableCaptions["Spanish"]["Indicadores_Sin_Actuaciones"] = "Indicadores Sin Actuaciones";
$tableCaptions["Spanish"]["Test_de_Deterioro__Resumen_"] = "Test de Deterioro (Resumen)";
$tableCaptions["Spanish"]["dbo_Novedades"] = "Novedades";
$tableCaptions["Spanish"]["dbo_ProcesosCorrespondencias"] = "Procesos Correspondencias";
$tableCaptions["Spanish"]["dbo_CorrespondenciaMasiva"] = "Correspondencia Masiva";
$tableCaptions["Spanish"]["dbo_UsuariosSeccionales"] = "Usuarios Seccionales";
$tableCaptions["Spanish"]["dbo_UsuariosCarteraTipos"] = "Usuarios Cartera Tipos";
$tableCaptions["Spanish"]["dbo_webpages_Roles"] = "Webpages Roles";
$tableCaptions["Spanish"]["dbo_webpages_UsersInRoles"] = "Webpages UsersInRoles";
$tableCaptions["Spanish"]["dbo_UsuGCC_ugmembers"] = "Usu GCC-ugmembers";
$tableCaptions["Spanish"]["dbo_despachosSigob"] = "Despachos Sigob";
$tableCaptions["Spanish"]["dbo_codificadoresDespacho"] = "Codificadores Despacho";
$tableCaptions["Spanish"]["dbo_Seccional_ProcesosView1"] = "Seccional ProcesosView1";
$tableCaptions["Spanish"]["dbo_tiposNovedades"] = "Tipos Novedades";
$tableCaptions["Spanish"]["Recaudo_Por_Seccional"] = "Recaudo Por Seccional";
$tableCaptions["Spanish"]["PrescripcionAutomatica"] = "Prescripcion Automatica";
$tableCaptions["Spanish"]["MandamientoAutomatico"] = "Mandamiento Automatico";
$tableCaptions["Spanish"]["dbo_AlertasOficios"] = "Alertas Oficios";
$tableCaptions["Spanish"]["admin_rights"] = "Admin Rights";
$tableCaptions["Spanish"]["admin_members"] = "Admin Members";
$tableCaptions["Spanish"]["admin_users"] = "Admin Users";
$tableCaptions["Spanish"]["PersuasivosAutomaticos"] = "Persuasivos Automaticos";
$tableCaptions["Spanish"]["BDME_Publica"] = "BDME Publica";
$tableCaptions["Spanish"]["dbo_Seccionales2"] = "Seccionales2";
$tableCaptions["Spanish"]["Gesti_n_Medidas_Cautelares"] = "Gestión Medidas Cautelares";
$tableCaptions["Spanish"]["Procesos_Sin_Medidas_Cautelares"] = "Procesos Sin Medidas Cautelares";
$tableCaptions["Spanish"]["dbo_LiquidacionesHistorico"] = "Liquidaciones Historico";
$tableCaptions["Spanish"]["dbo_Nomenclaturas"] = "Nomenclaturas";
$tableCaptions["Spanish"]["dbo_Ciudades2"] = "Ciudades2";


$globalEvents = new class_GlobalEvents;
$dummyEvents = new eventsBase;
$tableEvents = array();
$dalTables = array();
$tableinfo_cache = array();

$projectLanguage = "php";

importSecuritySettings();


require_once( getabspath('classes/labels.php') );
require_once( getabspath('classes/security.php') );
require_once( getabspath("connections/dbfunctions_legacy.php") );
require_once( getabspath("classes/datasource/httprequest.php") );
require_once( getabspath("connections/ConnectionManager.php") );
require_once( getabspath("connections/apis.php") );
require_once( getabspath('classes/searchclause.php'));
require_once( getabspath('classes/projectsettings.php'));
include_once( getabspath('classes/runnerpage.php'));
include_once( getabspath("classes/controls/ViewControl.php"));
require_once( getabspath('classes/db.php') );
require_once( getabspath('classes/context.php') );
require_once( getabspath("classes/cipherer.php"));
require_once( getabspath('classes/wheretabs.php') );
require_once( getabspath('classes/datasource/datacontext.php') );
require_once( getabspath("classes/filesystem/filesystem.php") );

$pageTypesForView = array();
$pageTypesForView[] = "list";
$pageTypesForView[] = "view";
$pageTypesForView[] = "export";
$pageTypesForView[] = "print";
$pageTypesForView[] = "report";
$pageTypesForView[] = "rprint";
$pageTypesForView[] = "chart";

$pageTypesForEdit = array();
$pageTypesForEdit[] = "add";
$pageTypesForEdit[] = "edit";
$pageTypesForEdit[] = "search";
$pageTypesForEdit[] = "register";


$projectEntities = array();
$projectEntitiesReverse = array();
$tablesByGoodName = array();
$tablesByUpperCase = array();
$tablesByUpperGoodname = array();


$contextStack = new RunnerContext;

$cman = new ConnectionManager();
$restApis = new RestManager();
$restResultCache = array();

/**
 * substitute for $_SESSION when in REST API (stateless) mode
 */
$restStorage = array();

$currentConnection = null;

$mlang_defaultlang = getDefaultLanguage();

include(getabspath("include/languages.php"));

$mediaType = $_COOKIE["mediaType"];
$mediaType = $mediaType ? $mediaType : 0;



$page_titles[GLOBAL_PAGES_SHORT] = array();
if(mlang_getcurrentlang()=="Spanish")
{
				$page_titles[GLOBAL_PAGES_SHORT]["Spanish"] = array();
	$page_titles[GLOBAL_PAGES_SHORT]["Spanish"]["login1"] = "Portal Coactivo";
}

$globalSettings["showDetailedError"] = true;



$globalSettings["mapMarkerCount"] = 50;

// SearchClause::getSearchObject
$_cachedSeachClauses = array();

/**
 * Lazy initialization dictionaries such as mime types for mimeTypeByExt go here
 */
$onDemnadVariables = array();


$auditMaxFieldLength = 300;
$mysqlSupportDates0000 = false;

$csrfProtectionOff = false;
$cacheImages = true;
/**
 * When true, read user permissions and write them into the session.
 */
$gReadPermissions = true;

$resizeImagesOnClient = false;


// here goes EVENT_INIT_APP event
$ajaxSearchStartsWith = false; //Se agrega el comando para buscar con ajax opciones que contengan la palabra escrita

// Place event code here.
// Use "Add Action" button to add code snippets.
;


// default connection link #9875
$conn = $cman->getDefault()->conn;


//	delete old username & password cookies
if( $_COOKIE["password"] ) {
	runner_setcookie("username", "", time() - 1, "", "", false, false);
	runner_setcookie("password", "", time() - 1, "", "", false, false);
}


$logoutPerformed = false;
Security::autoLoginAsGuest();
Security::updateCSRFCookie();


$isUseRTEBasic = true;

$isUseRTECK = false;

$isUseRTEInnova = false;

$menuNodesIndex=0;

/**
 *	Sundry data the page classes want pass to their JS counterparts
 *
 *	$pagesData[<pageid>] = array( 	<key> => <value>
 *									<key> => <value> ... )
 *					)
 */
$pagesData = array();

$pageInConstruction = null;

?>