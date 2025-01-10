<?php

function getMenuNodes_adminarea($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["adminarea"] = array();
		//Admin Area menu items
		// admin_admembers item
		$menuNode = array();
		$menuNode["id"] = "1";
		$menuNode["name"] = "admin_admembers";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_admembers";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNodesObject->menuNodes["adminarea"][] = $menuNode;
}
	
?>
