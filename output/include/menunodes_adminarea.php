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
		// admin_rights item
		$menuNode = array();
		$menuNode["id"] = "2";
		$menuNode["name"] = "admin_rights";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_rights";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Permisos";
		$menuNode["href"] = GetTableLink("admin_rights", "list");
		$menuNodesObject->menuNodes["adminarea"][] = $menuNode;
		// admin_members item
		$menuNode = array();
		$menuNode["id"] = "3";
		$menuNode["name"] = "admin_members";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_members";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Asignar usuarios a grupos";
		$menuNode["href"] = GetTableLink("admin_members", "list");
		$menuNodesObject->menuNodes["adminarea"][] = $menuNode;
		// admin_users item
		$menuNode = array();
		$menuNode["id"] = "4";
		$menuNode["name"] = "admin_users";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_users";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Añadir/Editar usuarios";
		$menuNode["href"] = GetTableLink("admin_users", "list");
		$menuNodesObject->menuNodes["adminarea"][] = $menuNode;
}
	
?>
