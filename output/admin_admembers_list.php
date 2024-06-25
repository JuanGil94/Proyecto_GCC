<?php

@ini_set("display_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_admembers_variables.php");

if( !Security::processAdminPageSecurity( true ) )
	return;

require_once('include/xtempl.php');
require_once("classes/searchclause.php");
require_once("classes/searchcontrol.php");
require_once("classes/panelsearchcontrol.php");


require_once("classes/runnerldap.php");
require_once('classes/listpage.php');
require_once('classes/listpage_embed.php');
require_once('classes/listpage_lookup.php');
require_once('classes/memberspage_ad.php');


$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_ADMIN_ADMEMBERS;
$options["id"] = postvalue_number("id");
$options["pageTable"] = GLOBAL_PAGES;
$options["mode"] = MEMBERS_PAGE;
$options["providerType"] = stAD;
$options["providerCode"] = postvalue("provider");
$options["xt"] = &$xt;
$options["requestGoto"] = postvalue_number("goto");

$pageObject = ListPage::createListPage( $strTableName, $options );

if( postvalue("a") == "addgr" )
{
	//	CSRF protection
	if( !isPostRequest() )
		return;
	$returnJSON = array();
	$label = postvalue("name");
	$providerCode = postvalue("provider");
	
	$dc = new DsCommand();
	$dc->values[ "Label" ] = $label;
	
	if( !Security::ADonlyLogin() || storageGet( "groups_provider_field" )) {
		$dc->values[ "Provider" ] = $providerCode;
	}
	$dataSource = Security::getUgGroupsDatasource();
	$data = $dataSource->insertSingle( $dc );
	if( !$data ) {
		$returnJSON['success'] = false;
		$returnJSON['message'] = $dataSource->lastError();
		echo printJSON( $returnJSON );	
		exit();
	}
	$returnJSON['id'] = $data[ "GroupID" ];

	if( !$data[ "GroupID" ] ) {
		$dcMax = new DsCommand();
		$dcMax->totals[] = array(
			"alias" => "maxid",
			"field" => "GroupID",
			"total" => "max"
		);
		$rsMax = $dataSource->getTotals( $dcMax );
		if( !$rsMax ) {
			$returnJSON['success'] = false;
			$returnJSON['message'] = $dataSource->lastError();
			echo printJSON( $returnJSON );	
			exit();
		}
		$dataMax = $rsMax->fetchAssoc();
		$returnJSON['id'] = $dataMax["maxid"];
	}
	
	if( !Security::ADonlyLogin() ) {
		//	add provider name to the label
		$provider = Security::findProvider( $providerCode );
		$providerLabel = GetMLString( $provider["label"] );
		if( $providerLabel ) {
			$label = $providerLabel . ":" . $label;
		}
	}
	$returnJSON['label'] = $label;

	$returnJSON['success'] = true;
	echo printJSON( $returnJSON );	
	exit();
}
	
// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();

?>