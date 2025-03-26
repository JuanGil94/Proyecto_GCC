<?php

require_once(getabspath("include/sms.php"));

/**
 * That function  copies all elements from associative array to object, as object properties with same names
 * Usefull when you need to copy many properties
 *
 * @param link $obj
 * @param link $argsArr
 * @intellisense
 */
function RunnerApply (&$obj, &$argsArr)
{
	foreach ($argsArr as $key=>$var)
		setObjectProperty($obj,$key,$argsArr[$key]);
}

/**
 * Replaces dot with locale delimiter for $numberStr
 * @param String $numberStr
 * @intellisense
 */
function formatNumberForEdit( $numberStr )
{
	global $locale_info;
	return str_replace( ".", $locale_info["LOCALE_SDECIMAL"], $numberStr );
}

/**
 * @intellisense
 */
function GetImageFromDB( $params )
{
	global $cman;

	$table = $params["table"];
	$pSet = new ProjectSettings( $table, $params["pageType"], $params["page"] );

	@ini_set("display_errors", "1");
	@ini_set("display_startup_errors", "1");

	$field = $params["field"];
	$connection = $cman->byTable( $table );

	$dc = new DsCommand();
	$dc->keys = $params["keys"];
	$dc->filter = Security::SelectCondition( "S", $pSet );
	$dataSource = getDataSource( $table, $pSet, $connection );
	$data = $dataSource->getSingle( $dc )->fetchAssoc();

	if( !$data )
		return DisplayNoImage();

	$value = $connection->stripSlashesBinary( $data[ $field ] );

	if( !$value )
		return DisplayNoImage();

	$itype = SupposeImageType( $value );
	if( !$itype )
		return DisplayFile();

	header("Content-Type: ".$itype);
	header("Cache-Control: private");
	SendContentLength( strlen_bin( $value ) );
	echoBinary( $value );

	return '';
}

/**
 *	Redirects to login.
 *  Displays Session expired message if the page was opened from within the project directory.
 *
 */
function redirectToLogin()
{

	$expired = "";
	$url = "http://";
	if( $_SERVER["HTTPS"] && $_SERVER["HTTPS"] != "off")
		$url = "https://";
	$url .= $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI'];

	global $logoutPerformed;
	if( !$logoutPerformed && isset($_SERVER['HTTP_REFERER']) )
	{
		if( getDirectoryFromURI( $_SERVER['HTTP_REFERER'] ) == getDirectoryFromURI( $url )
			&& getFilenameFromURI( $_SERVER['HTTP_REFERER'] ) != "index.htm"
			&& $_SERVER['HTTP_REFERER'] != getDirectoryFromURI( $url ))
			$expired = "message=expired";
	}
	if( !$logoutPerformed )
		$expired = "return=true&" . $expired;
	HeaderRedirect("login", "", $expired);
	exit();
}

/**
 *	Returns server and directory path from the file-based URI
 *  Examples:
 *  http://server.com:88/Calendar/login.php?a=expired => http://server.com:88/Calendar/
 *
 *  Beware! These URLs are incorrect input:
 *  https://server.com/app1
 *  https://server.com
 *
 */

function getDirectoryFromURI( $uri )
{
	$qMark = strpos( $uri, "?" );
	if( $qMark !== FALSE )
		$uri = substr( $uri, 0, $qMark );
	$lastSlash = strrpos( $uri, "/" );
	if( $lastSlash !== FALSE )
		return substr($uri, 0, $lastSlash )."/";
	return $uri;
}

function getFilenameFromURI( $uri )
{
	$qMark = strpos( $uri, "?" );
	if( $qMark !== FALSE )
		$uri = substr( $uri, $qMark );
	$lastSlash = strrpos( $uri, "/" );
	if( $lastSlash !== FALSE )
		return substr($uri, $lastSlash + 1 );
	return $uri;
}


/**
 * @intellisense
 */
function getLangFileName($langName)
{
	$langArr = array();
	$langArr["Spanish"] = "Spanish";
	return $langArr[$langName];
}

/**
 * @intellisense
 */
function GetGlobalData($name, $defValue = false )
{
	global $globalSettings;
	if(!array_key_exists($name, $globalSettings))
		return $defValue;
	return $globalSettings[$name];
}

function & getSecurityOption( $name ) {
	global $globalSettings;
	return $globalSettings['security'][ $name ];
}

/**
 * @intellisense
 */
function DisplayMap($params)
{
	global $pageObject;

	$pageObject->googleMapCfg['mapsData'][$params['id']]['addressField'] = $params['addressField'] ? $params['addressField'] : "";
	$pageObject->googleMapCfg['mapsData'][$params['id']]['latField'] = $params['latField'] ? $params['latField'] : '';
	$pageObject->googleMapCfg['mapsData'][$params['id']]['lngField'] = $params['lngField'] ? $params['lngField'] : '';
	$pageObject->googleMapCfg['mapsData'][$params['id']]['weightField'] = $params['weightField'] ? $params['weightField'] : '';
	$pageObject->googleMapCfg['mapsData'][$params['id']]['clustering'] = $params['clustering'];
	$pageObject->googleMapCfg['mapsData'][$params['id']]['heatMap'] = $params['heatMap'];
	$pageObject->googleMapCfg['mapsData'][$params['id']]['showAllMarkers'] = $params['showAllMarkers'] || $params['clustering'] || $params['heatMap'];
	$pageObject->googleMapCfg['mapsData'][$params['id']]['width'] = $params['width'] ? $params['width'] : 0;
	$pageObject->googleMapCfg['mapsData'][$params['id']]['height'] = $params['height'] ? $params['height'] : 0;
	$pageObject->googleMapCfg['mapsData'][$params['id']]['type'] = 'BIG_MAP';
	$pageObject->googleMapCfg['mapsData'][$params['id']]['showCenterLink'] = $params['showCenterLink'] ? $params['showCenterLink'] : 0;
	$pageObject->googleMapCfg['mapsData'][$params['id']]['descField'] = $params['descField'] ? $params['descField'] : $pageObject->googleMapCfg['mapsData'][$params['id']]['addressField'];
	$pageObject->googleMapCfg['mapsData'][$params['id']]['descField'] = $params['description'] ? $params['description'] : $pageObject->googleMapCfg['mapsData'][$params['id']]['addressField'];
	$pageObject->googleMapCfg['mapsData'][$params['id']]['markerAsEditLink'] = $params['markerAsEditLink'];
	$pageObject->googleMapCfg['mapsData'][$params['id']]['markerIcon'] = $params['markerIcon'] ? $params['markerIcon'] : '';
	$pageObject->googleMapCfg['mapsData'][$params['id']]['markerField'] = $params['markerField'] ? $params['markerField'] : '';
	$pageObject->googleMapCfg['mapsData'][$params['id']]['showCurrentLocation'] = $params['showCurrentLocation'] ? $params['showCurrentLocation'] : false;
	$pageObject->googleMapCfg['mapsData'][$params['id']]['currentLocationIcon'] = $params['currentLocationIcon'] ? $params['currentLocationIcon'] : '';

	if (isset($params['zoom']))
		$pageObject->googleMapCfg['mapsData'][$params['id']]['zoom'] = $params['zoom'];

	if ($pageObject->googleMapCfg['mapsData'][$params['id']]['showCenterLink'])
		$pageObject->googleMapCfg['mapsData'][$params['id']]['centerLinkText'] = $params['centerLinkText'] ? $params['centerLinkText'] : '';

	$pageObject->googleMapCfg['mainMapIds'][] = $params['id'];

	if (isset($params['APIkey']))
		$pageObject->googleMapCfg['APIcode'] = $params['APIkey'];
}

/**
 * @intellisense
 */
function checkTableName($shortTName )
{
	if (!$shortTName)
		return false;

	if ("usugcc__users" == $shortTName )
		return true;
	if ("abogados" == $shortTName )
		return true;
	if ("actuaciones" == $shortTName )
		return true;
	if ("ciudades" == $shortTName )
		return true;
	if ("conceptos" == $shortTName )
		return true;
	if ("departamentos" == $shortTName )
		return true;
	if ("despachos" == $shortTName )
		return true;
	if ("empresas" == $shortTName )
		return true;
	if ("entidades" == $shortTName )
		return true;
	if ("especialidades" == $shortTName )
		return true;
	if ("estados" == $shortTName )
		return true;
	if ("etapas" == $shortTName )
		return true;
	if ("festivos" == $shortTName )
		return true;
	if ("motivosdevoluciones" == $shortTName )
		return true;
	if ("naturalezas" == $shortTName )
		return true;
	if ("niveles" == $shortTName )
		return true;
	if ("oficios" == $shortTName )
		return true;
	if ("operaciones" == $shortTName )
		return true;
	if ("parejas" == $shortTName )
		return true;
	if ("presupuestos" == $shortTName )
		return true;
	if ("reportes" == $shortTName )
		return true;
	if ("salarios" == $shortTName )
		return true;
	if ("seccionales" == $shortTName )
		return true;
	if ("test" == $shortTName )
		return true;
	if ("uvts" == $shortTName )
		return true;
	if ("carteratipos" == $shortTName )
		return true;
	if ("chequeos" == $shortTName )
		return true;
	if ("chequeosoficios" == $shortTName )
		return true;
	if ("chequeossancionados" == $shortTName )
		return true;
	if ("devoluciones" == $shortTName )
		return true;
	if ("horarios" == $shortTName )
		return true;
	if ("usugcc_uggroups" == $shortTName )
		return true;
	if ("ipsrestringidas" == $shortTName )
		return true;
	if ("tiposdocumentos" == $shortTName )
		return true;
	if ("tramites" == $shortTName )
		return true;
	if ("conceptos1" == $shortTName )
		return true;
	if ("procesos" == $shortTName )
		return true;
	if ("solidarios" == $shortTName )
		return true;
	if ("llamadas" == $shortTName )
		return true;
	if ("medidas" == $shortTName )
		return true;
	if ("acuerdos" == $shortTName )
		return true;
	if ("pagos1" == $shortTName )
		return true;
	if ("cuentas" == $shortTName )
		return true;
	if ("intereses" == $shortTName )
		return true;
	if ("reasignaciones" == $shortTName )
		return true;
	if ("suspensiones" == $shortTName )
		return true;
	if ("suspensiones1" == $shortTName )
		return true;
	if ("interrupciones" == $shortTName )
		return true;
	if ("reliquidaciones" == $shortTName )
		return true;
	if ("ayudas" == $shortTName )
		return true;
	if ("temas" == $shortTName )
		return true;
	if ("correspondencias" == $shortTName )
		return true;
	if ("usugcc__audit" == $shortTName )
		return true;
	if ("importaciones" == $shortTName )
		return true;
	if ("indeterminados" == $shortTName )
		return true;
	if ("userprofile" == $shortTName )
		return true;
	if ("auditorias" == $shortTName )
		return true;
	if ("menus" == $shortTName )
		return true;
	if ("minjusticia" == $shortTName )
		return true;
	if ("minjusticia2" == $shortTName )
		return true;
	if ("minjusticia3" == $shortTName )
		return true;
	if ("actas" == $shortTName )
		return true;
	if ("alertastipos" == $shortTName )
		return true;
	if ("direcciones" == $shortTName )
		return true;
	if ("propiedades" == $shortTName )
		return true;
	if ("propiedades1" == $shortTName )
		return true;
	if ("propiedades3" == $shortTName )
		return true;
	if ("bancos" == $shortTName )
		return true;
	if ("motivos" == $shortTName )
		return true;
	if ("oficios_sigobius" == $shortTName )
		return true;
	if ("tasas_tributarias" == $shortTName )
		return true;
	if ("tasas_comerciales" == $shortTName )
		return true;
	if ("tasas_tes__deterioro_de_cartera_" == $shortTName )
		return true;
	if ("carceles" == $shortTName )
		return true;
	if ("alertas" == $shortTName )
		return true;
	if ("tipocobro" == $shortTName )
		return true;
	if ("oficios1" == $shortTName )
		return true;
	if ("ciudades1" == $shortTName )
		return true;
	if ("autorizaciones" == $shortTName )
		return true;
	if ("liquidaciones" == $shortTName )
		return true;
	if ("usugcc__noti" == $shortTName )
		return true;
	if ("sancionados" == $shortTName )
		return true;
	if ("seguimiento_y_control_de_acuerdos" == $shortTName )
		return true;
	if ("dbo_despachos4" == $shortTName )
		return true;
	if ("despachos1" == $shortTName )
		return true;
	if ("remanentes_report" == $shortTName )
		return true;
	if ("dbo_procesosprescritos" == $shortTName )
		return true;
	if ("prescritos_report" == $shortTName )
		return true;
	if ("alertmandpago" == $shortTName )
		return true;
	if ("alertnotmandpago" == $shortTName )
		return true;
	if ("alertincacupago" == $shortTName )
		return true;
	if ("alertsinpersuasivo" == $shortTName )
		return true;
	if ("alertbusqbienes" == $shortTName )
		return true;
	if ("alertsegadelante" == $shortTName )
		return true;
	if ("alertintsusp" == $shortTName )
		return true;
	if ("reportemandamientos" == $shortTName )
		return true;
	if ("listachequeosreporte" == $shortTName )
		return true;
	if ("reporteclasificacioncartera" == $shortTName )
		return true;
	if ("procesossinnotificareport" == $shortTName )
		return true;
	if ("reportecorporaci_nespecialidad" == $shortTName )
		return true;
	if ("corporacionesview" == $shortTName )
		return true;
	if ("fechas" == $shortTName )
		return true;
	if ("auditoriasprocesosview" == $shortTName )
		return true;
	if ("procesosreasignar" == $shortTName )
		return true;
	if ("genero" == $shortTName )
		return true;
	if ("admin_admembers" == $shortTName )
		return true;
	if ("ciudades2" == $shortTName )
		return true;
	if ("dbo_ciudades4" == $shortTName )
		return true;
	if ("dbo_ciudades5" == $shortTName )
		return true;
	if ("ciudades3" == $shortTName )
		return true;
	if ("uvbs" == $shortTName )
		return true;
	if ("resumen_mensual" == $shortTName )
		return true;
	if ("tiporecaudo" == $shortTName )
		return true;
	if ("despachos2" == $shortTName )
		return true;
	if ("dbo_despachos5" == $shortTName )
		return true;
	if ("bdme_actualizaci_n" == $shortTName )
		return true;
	if ("bdme_gu_a_del_deudor_moroso1" == $shortTName )
		return true;
	if ("bdme_incumplimiento_acuerdo_de_pago_semestral1" == $shortTName )
		return true;
	if ("bdme_retiros1" == $shortTName )
		return true;
	if ("bdme_reporte_semestral" == $shortTName )
		return true;
	if ("bdme_cancelaci_n_acuerdo_de_pago1" == $shortTName )
		return true;
	if ("bdme_excluidos1" == $shortTName )
		return true;
	if ("base_de_datos___historico" == $shortTName )
		return true;
	if ("deterioro_de_cartera_por_proceso" == $shortTName )
		return true;
	if ("intereses_por_proceso" == $shortTName )
		return true;
	if ("listado_medidas_cautelares" == $shortTName )
		return true;
	if ("presunci_n_prescripci_n" == $shortTName )
		return true;
	if ("certificado_del_resumen_mensual" == $shortTName )
		return true;
	if ("certificado_del_resumen_por_periodo" == $shortTName )
		return true;
	if ("bdme_actualizaci_n_datachild" == $shortTName )
		return true;
	if ("bdme_cancelaci_n_acuerdo_de_pago_datachild" == $shortTName )
		return true;
	if ("bdme_excluidos_datachild" == $shortTName )
		return true;
	if ("bdme_incumplimiento_acuerdo_de_pago_semestral_datachild" == $shortTName )
		return true;
	if ("bdme_reporte_semestral_datachild" == $shortTName )
		return true;
	if ("bdme_retiros_datachild" == $shortTName )
		return true;
	if ("busquedaspropiedades" == $shortTName )
		return true;
	if ("procesosview1" == $shortTName )
		return true;
	if ("obligaciones_de_dificil_recaudo" == $shortTName )
		return true;
	if ("privados_de_la_libertad" == $shortTName )
		return true;
	if ("recaudos_por_a_os" == $shortTName )
		return true;
	if ("reportes1" == $shortTName )
		return true;
	if ("reportes_datachild_prescritos_con_resoluci_n_expedida_solidarios" == $shortTName )
		return true;
	if ("reportes_datachild_prescritos_con_resoluci_n_expedida_solidarios_bienes" == $shortTName )
		return true;
	if ("transacciones_usuario" == $shortTName )
		return true;
	if ("indicadores_de_gesti_n" == $shortTName )
		return true;
	if ("tablero_de_control_general" == $shortTName )
		return true;
	if ("tablero_de_control_total_procesos" == $shortTName )
		return true;
	if ("tableros_recaudoseccional" == $shortTName )
		return true;
	if ("total_procesos" == $shortTName )
		return true;
	if ("total_recaudado" == $shortTName )
		return true;
	if ("procesos___mes" == $shortTName )
		return true;
	if ("recaudo___mes" == $shortTName )
		return true;
	if ("tablero_de_control_gesti_n" == $shortTName )
		return true;
	if ("actuaciones_por_mes" == $shortTName )
		return true;
	if ("dbo_procesossancionados" == $shortTName )
		return true;
	if ("bienesinmuebles" == $shortTName )
		return true;
	if ("bienesmuebles" == $shortTName )
		return true;
	if ("productos_bancarios" == $shortTName )
		return true;
	if ("tipotasas" == $shortTName )
		return true;
	if ("acuerdo_de_pago" == $shortTName )
		return true;
	if ("listado_de_chequeos" == $shortTName )
		return true;
	if ("listado_de_chequeo_sancionado_datachild" == $shortTName )
		return true;
	if ("listado_de_chequeo_oficios_datachild" == $shortTName )
		return true;
	if ("listado_de_chequeo_motivo_devolucion_datachild" == $shortTName )
		return true;
	if ("clasificaciones____cartera" == $shortTName )
		return true;
	if ("corporaciones___especialidades" == $shortTName )
		return true;
	if ("mandamientos_de_pago_automaticos" == $shortTName )
		return true;
	if ("prescripciones_autom_tica" == $shortTName )
		return true;
	if ("procesos_sin_notificaci_n" == $shortTName )
		return true;
	if ("remanentes_" == $shortTName )
		return true;
	if ("prueba_archivo_plano" == $shortTName )
		return true;
	if ("consulta_publica" == $shortTName )
		return true;
	if ("consulta_publica_notificacion_detalle" == $shortTName )
		return true;
	if ("consulta_publica_generacion_desprendible" == $shortTName )
		return true;
	if ("pagos2" == $shortTName )
		return true;
	if ("propiedades2" == $shortTName )
		return true;
	if ("motivos1" == $shortTName )
		return true;
	if ("etapas1" == $shortTName )
		return true;
	if ("estados1" == $shortTName )
		return true;
	if ("aplazamientos" == $shortTName )
		return true;
	if ("seccionales1" == $shortTName )
		return true;
	if ("naturalezas1" == $shortTName )
		return true;
	if ("calificaciones" == $shortTName )
		return true;
	if ("niveles1" == $shortTName )
		return true;
	if ("niveles2" == $shortTName )
		return true;
	if ("conceptos2" == $shortTName )
		return true;
	if ("propiedadesmedidas" == $shortTName )
		return true;
	if ("consolidado_por_conceptos" == $shortTName )
		return true;
	if ("movimiento_mensual" == $shortTName )
		return true;
	if ("informe_ejecutivo_de_gesti_n" == $shortTName )
		return true;
	if ("cumplimiento_de_metas_de_recaudo" == $shortTName )
		return true;
	if ("indicadores_de_b_squeda" == $shortTName )
		return true;
	if ("indicadores_recaudos" == $shortTName )
		return true;
	if ("indicadores_sin_actuaciones" == $shortTName )
		return true;
	if ("test_de_deterioro__resumen_" == $shortTName )
		return true;
	if ("novedades" == $shortTName )
		return true;
	if ("procesoscorrespondencias" == $shortTName )
		return true;
	if ("correspondenciamasiva" == $shortTName )
		return true;
	if ("usuariosseccionales" == $shortTName )
		return true;
	if ("usuarioscarteratipos" == $shortTName )
		return true;
	if ("webpages_roles" == $shortTName )
		return true;
	if ("webpages_usersinroles" == $shortTName )
		return true;
	if ("usugcc_ugmembers" == $shortTName )
		return true;
	if ("despachossigob" == $shortTName )
		return true;
	if ("codificadoresdespacho" == $shortTName )
		return true;
	if ("dbo_seccional_procesosview1" == $shortTName )
		return true;
	if ("tiposnovedades" == $shortTName )
		return true;
	if ("recaudo_por_seccional" == $shortTName )
		return true;
	if ("prescripcionautomatica" == $shortTName )
		return true;
	if ("mandamientoautomatico" == $shortTName )
		return true;
	if ("alertasoficios" == $shortTName )
		return true;
	if ("admin_rights" == $shortTName )
		return true;
	if ("admin_members" == $shortTName )
		return true;
	if ("admin_users" == $shortTName )
		return true;
	if ("persuasivosautomaticos" == $shortTName )
		return true;
	if ("bdme_publica" == $shortTName )
		return true;
	if ("seccionales2" == $shortTName )
		return true;
	if ("gesti_n_medidas_cautelares" == $shortTName )
		return true;
	if ("procesos_sin_medidas_cautelares" == $shortTName )
		return true;
	if ("liquidacioneshistorico" == $shortTName )
		return true;
	return false;
}

/**
 * DEPRECATED
 * Get password field on register page
 * @intellisense
 */
function GetPasswordField()
{
	return Security::passwordField();
}

/**
 * DEPRECATED
 * Get user name field on register page
 * @intellisense
 */
function GetUserNameField()
{
	return Security::usernameField();
}

/**
 * DEPRECATED
 * Get user name field on register page
 * @intellisense
 */
function GetDisplayNameField($table = "")
{
	return Security::fullnameField();
}

/**
 * DEPRECATED
 * Get user name field on register page
 * @intellisense
 */
function GetEmailField($table = "")
{
	return Security::emailField();
}

/**
 * @intellisense
 */
function GetTablesList($pdfMode = false)
{
	$arr = array();
	$checkPermissions = Security::permissionsAvailable();
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.UsuGCC-_users");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.UsuGCC-_users";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Abogados");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Abogados";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Actuaciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Actuaciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Ciudades");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Ciudades";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Conceptos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Conceptos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Departamentos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Departamentos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Despachos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Despachos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Empresas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Empresas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Entidades");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Entidades";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Especialidades");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Especialidades";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Estados");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Estados";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Etapas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Etapas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Festivos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Festivos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.MotivosDevoluciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.MotivosDevoluciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Naturalezas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Naturalezas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Niveles");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Niveles";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Oficios");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Oficios";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Operaciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Operaciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Parejas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Parejas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Presupuestos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Presupuestos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Reportes");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Reportes";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Salarios");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Salarios";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Seccionales");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Seccionales";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Test");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Test";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Uvts");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Uvts";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.CarteraTipos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.CarteraTipos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Chequeos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Chequeos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.ChequeosOficios");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.ChequeosOficios";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.ChequeosSancionados");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.ChequeosSancionados";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Devoluciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Devoluciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Horarios");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Horarios";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.UsuGCC-uggroups");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.UsuGCC-uggroups";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.IPsRestringidas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.IPsRestringidas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.TiposDocumentos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.TiposDocumentos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Tramites");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Tramites";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Conceptos1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Conceptos1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Procesos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Procesos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Solidarios");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Solidarios";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Llamadas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Llamadas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Medidas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Medidas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Acuerdos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Acuerdos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Pagos1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Pagos1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Cuentas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Cuentas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Intereses");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Intereses";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Reasignaciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Reasignaciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Suspensiones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Suspensiones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Suspensiones1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Suspensiones1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Interrupciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Interrupciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Reliquidaciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Reliquidaciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Ayudas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Ayudas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Temas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Temas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Correspondencias");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Correspondencias";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.usugcc-_audit");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.usugcc-_audit";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Importaciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Importaciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Indeterminados");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Indeterminados";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.UserProfile");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.UserProfile";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Auditorias");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Auditorias";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Menus");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Menus";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Minjusticia");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Minjusticia";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Minjusticia2");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Minjusticia2";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Minjusticia3");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Minjusticia3";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Actas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Actas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.AlertasTipos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.AlertasTipos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Direcciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Direcciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Propiedades");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Propiedades";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Propiedades1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Propiedades1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Propiedades3");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Propiedades3";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Bancos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Bancos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Motivos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Motivos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Oficios Sigobius");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Oficios Sigobius";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Tasas Tributarias");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Tasas Tributarias";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Tasas Comerciales");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Tasas Comerciales";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Tasas TES (Deterioro de Cartera)");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Tasas TES (Deterioro de Cartera)";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Carceles");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Carceles";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Alertas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Alertas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.tipoCobro");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.tipoCobro";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Oficios1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Oficios1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Ciudades1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Ciudades1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Autorizaciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Autorizaciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Liquidaciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Liquidaciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.usugcc__noti");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.usugcc__noti";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Sancionados");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Sancionados";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Seguimiento y control de Acuerdos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Seguimiento y control de Acuerdos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Despachos4");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Despachos4";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Despachos1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Despachos1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Remanentes Report");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Remanentes Report";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.ProcesosPrescritos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.ProcesosPrescritos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Prescritos Report");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Prescritos Report";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.AlertMandPago");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.AlertMandPago";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("AlertNotMandPago");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="AlertNotMandPago";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("AlertIncAcuPago");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="AlertIncAcuPago";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("AlertSinPersuasivo");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="AlertSinPersuasivo";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("AlertBusqBienes");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="AlertBusqBienes";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("AlertSegAdelante");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="AlertSegAdelante";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("AlertIntSusp");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="AlertIntSusp";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.ReporteMandamientos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.ReporteMandamientos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.ListaChequeosReporte");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.ListaChequeosReporte";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.ReporteClasificacionCartera");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.ReporteClasificacionCartera";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.ProcesosSinNotificaReport");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.ProcesosSinNotificaReport";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.ReporteCorporaciónEspecialidad");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.ReporteCorporaciónEspecialidad";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.CorporacionesView");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.CorporacionesView";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Fechas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Fechas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.AuditoriasProcesosView");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.AuditoriasProcesosView";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.ProcesosReasignar");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.ProcesosReasignar";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Genero");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Genero";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("admin_admembers");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="admin_admembers";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Ciudades2");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Ciudades2";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Ciudades4");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Ciudades4";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Ciudades5");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Ciudades5";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Ciudades3");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Ciudades3";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Uvbs");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Uvbs";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Resumen_Mensual");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Resumen_Mensual";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.tipoRecaudo");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.tipoRecaudo";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Despachos2");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Despachos2";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Despachos5");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Despachos5";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Actualización");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Actualización";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Guía del Deudor Moroso");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Guía del Deudor Moroso";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Incumplimiento Acuerdo de Pago Semestral");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Incumplimiento Acuerdo de Pago Semestral";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Retiros");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Retiros";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Reporte Semestral");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Reporte Semestral";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Cancelación Acuerdo de Pago");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Cancelación Acuerdo de Pago";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Excluidos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Excluidos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Base de Datos - Historico");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Base de Datos - Historico";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Deterioro de Cartera por Proceso");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Deterioro de Cartera por Proceso";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Intereses por Proceso");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Intereses por Proceso";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Listado Medidas Cautelares");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Listado Medidas Cautelares";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Presunción Prescripción");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Presunción Prescripción";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Certificado del Resumen Mensual");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Certificado del Resumen Mensual";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Certificado del Resumen por Periodo");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Certificado del Resumen por Periodo";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Actualización DataChild");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Actualización DataChild";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Cancelación Acuerdo de Pago DataChild");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Cancelación Acuerdo de Pago DataChild";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Excluidos DataChild");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Excluidos DataChild";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Incumplimiento Acuerdo de Pago Semestral DataChild");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Incumplimiento Acuerdo de Pago Semestral DataChild";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Reporte Semestral Datachild");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Reporte Semestral Datachild";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Retiros DataChild");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Retiros DataChild";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.BusquedasPropiedades");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.BusquedasPropiedades";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.ProcesosView1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.ProcesosView1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Obligaciones de Dificil Recaudo");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Obligaciones de Dificil Recaudo";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Privados de la Libertad");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Privados de la Libertad";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Recaudos por Años");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Recaudos por Años";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Reportes");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Reportes";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Reportes DataChild prescritos con resolución expedida_Solidarios");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Reportes DataChild prescritos con resolución expedida_Solidarios";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Reportes DataChild prescritos con resolución expedida_Solidarios_Bienes");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Reportes DataChild prescritos con resolución expedida_Solidarios_Bienes";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Transacciones Usuario");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Transacciones Usuario";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Indicadores de Gestión");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Indicadores de Gestión";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Tablero de Control General");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Tablero de Control General";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Tablero de Control Total Procesos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Tablero de Control Total Procesos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Tableros_RecaudoSeccional");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Tableros_RecaudoSeccional";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Total Procesos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Total Procesos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Total Recaudado");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Total Recaudado";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Procesos - Mes");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Procesos - Mes";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Recaudo - Mes");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Recaudo - Mes";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Tablero de Control Gestión");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Tablero de Control Gestión";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Actuaciones Por Mes");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Actuaciones Por Mes";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.ProcesosSancionados");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.ProcesosSancionados";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BienesInmuebles");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BienesInmuebles";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BienesMuebles");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BienesMuebles";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Productos Bancarios");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Productos Bancarios";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.tipoTasas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.tipoTasas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Acuerdo de Pago");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Acuerdo de Pago";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Listado de Chequeos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Listado de Chequeos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Listado de Chequeo Sancionado DataChild");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Listado de Chequeo Sancionado DataChild";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Listado de Chequeo Oficios DataChild");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Listado de Chequeo Oficios DataChild";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Listado de Chequeo Motivo devolucion DataChild");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Listado de Chequeo Motivo devolucion DataChild";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Clasificaciones -- Cartera");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Clasificaciones -- Cartera";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Corporaciones - Especialidades");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Corporaciones - Especialidades";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Mandamientos de pago Automaticos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Mandamientos de pago Automaticos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Prescripciones Automática");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Prescripciones Automática";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Procesos Sin Notificación");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Procesos Sin Notificación";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Remanentes-");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Remanentes-";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Prueba Archivo Plano");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Prueba Archivo Plano";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Consulta Publica");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Consulta Publica";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Consulta Publica Notificacion Detalle");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Consulta Publica Notificacion Detalle";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Consulta Publica Generacion Desprendible");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Consulta Publica Generacion Desprendible";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Pagos2");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Pagos2";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Propiedades2");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Propiedades2";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Motivos1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Motivos1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Etapas1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Etapas1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Estados1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Estados1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Aplazamientos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Aplazamientos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Seccionales1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Seccionales1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Naturalezas1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Naturalezas1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Calificaciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Calificaciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Niveles1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Niveles1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Niveles2");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Niveles2";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Conceptos2");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Conceptos2";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.PropiedadesMedidas");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.PropiedadesMedidas";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Consolidado por Conceptos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Consolidado por Conceptos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Movimiento Mensual");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Movimiento Mensual";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Informe ejecutivo de Gestión");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Informe ejecutivo de Gestión";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Cumplimiento de metas de Recaudo");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Cumplimiento de metas de Recaudo";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Indicadores de búsqueda");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Indicadores de búsqueda";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Indicadores Recaudos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Indicadores Recaudos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Indicadores Sin Actuaciones");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Indicadores Sin Actuaciones";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Test de Deterioro (Resumen)");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Test de Deterioro (Resumen)";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Novedades");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Novedades";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.ProcesosCorrespondencias");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.ProcesosCorrespondencias";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.CorrespondenciaMasiva");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.CorrespondenciaMasiva";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.UsuariosSeccionales");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.UsuariosSeccionales";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.UsuariosCarteraTipos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.UsuariosCarteraTipos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.webpages_Roles");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.webpages_Roles";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.webpages_UsersInRoles");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.webpages_UsersInRoles";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.UsuGCC-ugmembers");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.UsuGCC-ugmembers";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.despachosSigob");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.despachosSigob";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.codificadoresDespacho");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.codificadoresDespacho";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Seccional_ProcesosView1");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Seccional_ProcesosView1";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.tiposNovedades");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.tiposNovedades";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Recaudo Por Seccional");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Recaudo Por Seccional";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("PrescripcionAutomatica");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="PrescripcionAutomatica";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("MandamientoAutomatico");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="MandamientoAutomatico";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.AlertasOficios");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.AlertasOficios";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("admin_rights");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="admin_rights";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("admin_members");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="admin_members";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("admin_users");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="admin_users";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("PersuasivosAutomaticos");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="PersuasivosAutomaticos";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("BDME Publica");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="BDME Publica";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.Seccionales2");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.Seccionales2";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Gestión Medidas Cautelares");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Gestión Medidas Cautelares";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("Procesos Sin Medidas Cautelares");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="Procesos Sin Medidas Cautelares";
	}
	$tableAvailable = true;
	if( $checkPermissions ) {
		$strPerm = GetUserPermissions("dbo.LiquidacionesHistorico");
		$tableAvailable = ( strpos($strPerm, "P") !== false
			|| $pdfMode && strpos($strPerm, "S") !== false );
	}
	if( $tableAvailable ) {
		$arr[]="dbo.LiquidacionesHistorico";
	}
	return $arr;
}

/**
 * @intellisense
 */
function GetTablesListWithoutSecurity()
{
	$arr = array();
	$arr[]="dbo.UsuGCC-_users";
	$arr[]="dbo.Abogados";
	$arr[]="dbo.Actuaciones";
	$arr[]="dbo.Ciudades";
	$arr[]="dbo.Conceptos";
	$arr[]="dbo.Departamentos";
	$arr[]="dbo.Despachos";
	$arr[]="dbo.Empresas";
	$arr[]="dbo.Entidades";
	$arr[]="dbo.Especialidades";
	$arr[]="dbo.Estados";
	$arr[]="dbo.Etapas";
	$arr[]="dbo.Festivos";
	$arr[]="dbo.MotivosDevoluciones";
	$arr[]="dbo.Naturalezas";
	$arr[]="dbo.Niveles";
	$arr[]="dbo.Oficios";
	$arr[]="dbo.Operaciones";
	$arr[]="dbo.Parejas";
	$arr[]="dbo.Presupuestos";
	$arr[]="dbo.Reportes";
	$arr[]="dbo.Salarios";
	$arr[]="dbo.Seccionales";
	$arr[]="dbo.Test";
	$arr[]="dbo.Uvts";
	$arr[]="dbo.CarteraTipos";
	$arr[]="dbo.Chequeos";
	$arr[]="dbo.ChequeosOficios";
	$arr[]="dbo.ChequeosSancionados";
	$arr[]="dbo.Devoluciones";
	$arr[]="dbo.Horarios";
	$arr[]="dbo.UsuGCC-uggroups";
	$arr[]="dbo.IPsRestringidas";
	$arr[]="dbo.TiposDocumentos";
	$arr[]="dbo.Tramites";
	$arr[]="dbo.Conceptos1";
	$arr[]="dbo.Procesos";
	$arr[]="dbo.Solidarios";
	$arr[]="dbo.Llamadas";
	$arr[]="dbo.Medidas";
	$arr[]="dbo.Acuerdos";
	$arr[]="dbo.Pagos1";
	$arr[]="dbo.Cuentas";
	$arr[]="dbo.Intereses";
	$arr[]="dbo.Reasignaciones";
	$arr[]="dbo.Suspensiones";
	$arr[]="dbo.Suspensiones1";
	$arr[]="dbo.Interrupciones";
	$arr[]="dbo.Reliquidaciones";
	$arr[]="dbo.Ayudas";
	$arr[]="dbo.Temas";
	$arr[]="dbo.Correspondencias";
	$arr[]="dbo.usugcc-_audit";
	$arr[]="dbo.Importaciones";
	$arr[]="dbo.Indeterminados";
	$arr[]="dbo.UserProfile";
	$arr[]="dbo.Auditorias";
	$arr[]="dbo.Menus";
	$arr[]="dbo.Minjusticia";
	$arr[]="dbo.Minjusticia2";
	$arr[]="dbo.Minjusticia3";
	$arr[]="dbo.Actas";
	$arr[]="dbo.AlertasTipos";
	$arr[]="dbo.Direcciones";
	$arr[]="dbo.Propiedades";
	$arr[]="dbo.Propiedades1";
	$arr[]="dbo.Propiedades3";
	$arr[]="dbo.Bancos";
	$arr[]="dbo.Motivos";
	$arr[]="dbo.Oficios Sigobius";
	$arr[]="Tasas Tributarias";
	$arr[]="Tasas Comerciales";
	$arr[]="Tasas TES (Deterioro de Cartera)";
	$arr[]="dbo.Carceles";
	$arr[]="dbo.Alertas";
	$arr[]="dbo.tipoCobro";
	$arr[]="dbo.Oficios1";
	$arr[]="dbo.Ciudades1";
	$arr[]="dbo.Autorizaciones";
	$arr[]="dbo.Liquidaciones";
	$arr[]="dbo.usugcc__noti";
	$arr[]="dbo.Sancionados";
	$arr[]="dbo.Seguimiento y control de Acuerdos";
	$arr[]="dbo.Despachos4";
	$arr[]="dbo.Despachos1";
	$arr[]="dbo.Remanentes Report";
	$arr[]="dbo.ProcesosPrescritos";
	$arr[]="dbo.Prescritos Report";
	$arr[]="dbo.AlertMandPago";
	$arr[]="AlertNotMandPago";
	$arr[]="AlertIncAcuPago";
	$arr[]="AlertSinPersuasivo";
	$arr[]="AlertBusqBienes";
	$arr[]="AlertSegAdelante";
	$arr[]="AlertIntSusp";
	$arr[]="dbo.ReporteMandamientos";
	$arr[]="dbo.ListaChequeosReporte";
	$arr[]="dbo.ReporteClasificacionCartera";
	$arr[]="dbo.ProcesosSinNotificaReport";
	$arr[]="dbo.ReporteCorporaciónEspecialidad";
	$arr[]="dbo.CorporacionesView";
	$arr[]="dbo.Fechas";
	$arr[]="dbo.AuditoriasProcesosView";
	$arr[]="dbo.ProcesosReasignar";
	$arr[]="dbo.Genero";
	$arr[]="admin_admembers";
	$arr[]="dbo.Ciudades2";
	$arr[]="dbo.Ciudades4";
	$arr[]="dbo.Ciudades5";
	$arr[]="dbo.Ciudades3";
	$arr[]="dbo.Uvbs";
	$arr[]="Resumen_Mensual";
	$arr[]="dbo.tipoRecaudo";
	$arr[]="dbo.Despachos2";
	$arr[]="dbo.Despachos5";
	$arr[]="BDME Actualización";
	$arr[]="BDME Guía del Deudor Moroso";
	$arr[]="BDME Incumplimiento Acuerdo de Pago Semestral";
	$arr[]="BDME Retiros";
	$arr[]="BDME Reporte Semestral";
	$arr[]="BDME Cancelación Acuerdo de Pago";
	$arr[]="BDME Excluidos";
	$arr[]="Base de Datos - Historico";
	$arr[]="Deterioro de Cartera por Proceso";
	$arr[]="Intereses por Proceso";
	$arr[]="Listado Medidas Cautelares";
	$arr[]="Presunción Prescripción";
	$arr[]="Certificado del Resumen Mensual";
	$arr[]="Certificado del Resumen por Periodo";
	$arr[]="BDME Actualización DataChild";
	$arr[]="BDME Cancelación Acuerdo de Pago DataChild";
	$arr[]="BDME Excluidos DataChild";
	$arr[]="BDME Incumplimiento Acuerdo de Pago Semestral DataChild";
	$arr[]="BDME Reporte Semestral Datachild";
	$arr[]="BDME Retiros DataChild";
	$arr[]="dbo.BusquedasPropiedades";
	$arr[]="dbo.ProcesosView1";
	$arr[]="Obligaciones de Dificil Recaudo";
	$arr[]="Privados de la Libertad";
	$arr[]="Recaudos por Años";
	$arr[]="Reportes";
	$arr[]="Reportes DataChild prescritos con resolución expedida_Solidarios";
	$arr[]="Reportes DataChild prescritos con resolución expedida_Solidarios_Bienes";
	$arr[]="Transacciones Usuario";
	$arr[]="Indicadores de Gestión";
	$arr[]="Tablero de Control General";
	$arr[]="Tablero de Control Total Procesos";
	$arr[]="Tableros_RecaudoSeccional";
	$arr[]="Total Procesos";
	$arr[]="Total Recaudado";
	$arr[]="Procesos - Mes";
	$arr[]="Recaudo - Mes";
	$arr[]="Tablero de Control Gestión";
	$arr[]="Actuaciones Por Mes";
	$arr[]="dbo.ProcesosSancionados";
	$arr[]="BienesInmuebles";
	$arr[]="BienesMuebles";
	$arr[]="Productos Bancarios";
	$arr[]="dbo.tipoTasas";
	$arr[]="Acuerdo de Pago";
	$arr[]="Listado de Chequeos";
	$arr[]="Listado de Chequeo Sancionado DataChild";
	$arr[]="Listado de Chequeo Oficios DataChild";
	$arr[]="Listado de Chequeo Motivo devolucion DataChild";
	$arr[]="Clasificaciones -- Cartera";
	$arr[]="Corporaciones - Especialidades";
	$arr[]="Mandamientos de pago Automaticos";
	$arr[]="Prescripciones Automática";
	$arr[]="Procesos Sin Notificación";
	$arr[]="Remanentes-";
	$arr[]="Prueba Archivo Plano";
	$arr[]="Consulta Publica";
	$arr[]="Consulta Publica Notificacion Detalle";
	$arr[]="Consulta Publica Generacion Desprendible";
	$arr[]="dbo.Pagos2";
	$arr[]="dbo.Propiedades2";
	$arr[]="dbo.Motivos1";
	$arr[]="dbo.Etapas1";
	$arr[]="dbo.Estados1";
	$arr[]="dbo.Aplazamientos";
	$arr[]="dbo.Seccionales1";
	$arr[]="dbo.Naturalezas1";
	$arr[]="dbo.Calificaciones";
	$arr[]="dbo.Niveles1";
	$arr[]="dbo.Niveles2";
	$arr[]="dbo.Conceptos2";
	$arr[]="dbo.PropiedadesMedidas";
	$arr[]="Consolidado por Conceptos";
	$arr[]="Movimiento Mensual";
	$arr[]="Informe ejecutivo de Gestión";
	$arr[]="Cumplimiento de metas de Recaudo";
	$arr[]="Indicadores de búsqueda";
	$arr[]="Indicadores Recaudos";
	$arr[]="Indicadores Sin Actuaciones";
	$arr[]="Test de Deterioro (Resumen)";
	$arr[]="dbo.Novedades";
	$arr[]="dbo.ProcesosCorrespondencias";
	$arr[]="dbo.CorrespondenciaMasiva";
	$arr[]="dbo.UsuariosSeccionales";
	$arr[]="dbo.UsuariosCarteraTipos";
	$arr[]="dbo.webpages_Roles";
	$arr[]="dbo.webpages_UsersInRoles";
	$arr[]="dbo.UsuGCC-ugmembers";
	$arr[]="dbo.despachosSigob";
	$arr[]="dbo.codificadoresDespacho";
	$arr[]="dbo.Seccional_ProcesosView1";
	$arr[]="dbo.tiposNovedades";
	$arr[]="Recaudo Por Seccional";
	$arr[]="PrescripcionAutomatica";
	$arr[]="MandamientoAutomatico";
	$arr[]="dbo.AlertasOficios";
	$arr[]="admin_rights";
	$arr[]="admin_members";
	$arr[]="admin_users";
	$arr[]="PersuasivosAutomaticos";
	$arr[]="BDME Publica";
	$arr[]="dbo.Seccionales2";
	$arr[]="Gestión Medidas Cautelares";
	$arr[]="Procesos Sin Medidas Cautelares";
	$arr[]="dbo.LiquidacionesHistorico";
	return $arr;
}

/**
 * DEPRECATED! Use RunnerPage::_getFieldSQLDecrypt instead
 * Return the full database field original name
 *
 * @param string	$field
 * @param string	$table The datasource table name
 * @param boolean	$addAs OPTIONAL
 *
 * @return String
 * @intellisense
 * @deprecated
 */
function GetFullFieldName($field, $table = "", $addAs = true, $connection = null)
{
	global $strTableName, $cman;

	if( $table == "" )
		$table = $strTableName;

	if( !$connection )
		$connection = $cman->byTable( $table );
	$pSet = new ProjectSettings($table);

	$fname = RunnerPage::_getFieldSQL($field, $connection, $pSet);

	if($pSet->hasEncryptedFields() && !$connection->isEncryptionByPHPEnabled())
	{
		$cipherer = new RunnerCipherer($table);
		return $cipherer->GetFieldName($fname, $field)
			.($cipherer->isFieldEncrypted($field) && $addAs ? " as ".$connection->addFieldWrappers($field) : "");
	}
	return $fname;
}

/**
 * returns Chart type
 * @intellisense
 */
function GetChartType($shorttable)
{
	if($shorttable=="total_procesos")
		return "2DDoughnut";
	if($shorttable=="total_recaudado")
		return "2DDoughnut";
	if($shorttable=="procesos___mes")
		return "Line";
	if($shorttable=="recaudo___mes")
		return "Line";
	if($shorttable=="actuaciones_por_mes")
		return "2DColumn";
	return "";
}

////////////////////////////////////////////////////////////////////////////////
// data output functions
////////////////////////////////////////////////////////////////////////////////

/**
 * @intellisense
 */
function GetShorteningForLargeText($strValue, $cNumberOfChars, $html = true )
{
	$ret = runner_substr($strValue, 0, $cNumberOfChars );
	if( $html )
		return runner_htmlspecialchars($ret);
	return $ret;
}

/**
 * add prefix to the URL
 * @intellisense
 */
function AddLinkPrefix($pSet, $field, $link)
{
	if(strpos($link,"://")===false && substr($link,0,7)!="mailto:")
		return $pSet->getLinkPrefix($field).$link;
	return $link;
}

/**
 * @intellisense
 */
function GetTotalsForTime($value)
{
	$time=parsenumbers($value);
	while(count($time)<3)
		$time[]=0;
	return $time;
}

/**
 * return Totals string
 * @intellisense
 */
function GetTotals( $field, $value, $stype, $iNumberOfRows, $sFormat, $ptype, $pSet, $useRawValue , $pageObject )
{
	if( $stype == "AVERAGE" )
	{
		if( !$iNumberOfRows )
			return "";

		if( $sFormat == FORMAT_TIME ) {
			if( $value ) {
				include_once getabspath('classes/controls/ViewTimeField.php');
				$value = ViewTimeField::getFormattedTotals(
					$field,
					round($value/$iNumberOfRows, 0),
					$pSet,
					$pageObject->pdfJsonMode(),
					false
				);
			}
		} else {
			$value = round($value/$iNumberOfRows, 2);
		}
	}

	if( $stype == "TOTAL" || $stype == "SUM" )
	{
		if( $sFormat == FORMAT_TIME ) {
			include_once getabspath('classes/controls/ViewTimeField.php');
			$value = ViewTimeField::getFormattedTotals(
				$field,
				$value,
				$pSet,
				$pageObject->pdfJsonMode(),
				true
			);
		}
	}

	if( $stype == "COUNT" || $useRawValue )
		return $value;

	$sValue = $value;
	if( $sFormat == FORMAT_CURRENCY || $sFormat == FORMAT_PERCENT || $sFormat == FORMAT_NUMBER || $sFormat == FORMAT_CUSTOM )
	{
		// get formatted value
		$data = array( $field => $value );
		if( !$pageObject ) {
			include_once getabspath('classes/controls/ViewControlsContainer.php');
			$viewControls = new ViewControlsContainer( $pSet, $ptype );
		} else {
			$viewControls = $pageObject;
		}
		$sValue = $viewControls->showDBValue( $field, $data );
	}

	if( $stype == "TOTAL" || $stype == "SUM" || $stype == "AVERAGE" )
		return $sValue;

	// wrong stype ?
	return "";
}


/**
 * @intellisense
 */
function DisplayNoImage()
{
	$path = getabspath("images/no_image.gif");
	header("Content-Type: image/gif");
	printfile($path);
}

/**
 * @intellisense
 */
function DisplayFile()
{
	$path = getabspath("images/file.gif");
	header("Content-Type: image/gif");
	printfile($path);
}

////////////////////////////////////////////////////////////////////////////////
// miscellaneous functions
////////////////////////////////////////////////////////////////////////////////

/**
 * analog of strrpos function
 * @intellisense
 */
function my_strrpos($haystack, $needle)
{
	$index = strpos(strrev($haystack), strrev($needle));
	if($index === false)
		return false;
	$index = strlen($haystack) - strlen($needle) - $index;
	return $index;
}

/**
 * prepare string for JavaScript. Replace ' with \' and linebreaks with \r\n
 * @intellisense
 */
function jsreplace($str)
{
	$ret= str_replace(array("\\","'",'"',"\r","\n"),array("\\\\","\\'",'\\"',"\\r","\\n"),$str);
	return my_str_ireplace("</script>","</scr'+'ipt>",$ret);
}

/**
 * @intellisense
 */
function LogInfo($SQL)
{/*
	global $dSQL,$dDebug;
	$dSQL=$SQL;
	if($dDebug)
	{
		echo $dSQL;
		echo "<br>";
	}*/
}

/**
 * check if file extension is image extension
 * @intellisense
 */
function CheckImageExtension($filename)
{
	if(strlen($filename)<4)
		return false;
	$ext=strtoupper(substr($filename,strlen($filename)-4));
	if($ext==".GIF" || $ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".BMP")
		return $ext;
	return false;
}

/**
 * @intellisense
 */
function html_special_decode($str)
{
	$ret=$str;
	$ret=str_replace("&gt;",">",$ret);
	$ret=str_replace("&lt;","<",$ret);
	$ret=str_replace("&quot;","\"",$ret);
	$ret=str_replace("&#039;","'",$ret);
	$ret=str_replace("&#39;","'",$ret);
	$ret=str_replace("&amp;","&",$ret);
	return $ret;
}

////////////////////////////////////////////////////////////////////////////////
// database and SQL related functions
////////////////////////////////////////////////////////////////////////////////

/**
 * add clause to WHERE or HAVING expression
 * @intellisense
 */
function whereAdd($where,$clause)
{
	if(!strlen($clause))
		return $where;
	if(!strlen($where))
		return $clause;
	return "(".$where.") and (".$clause.")";
}

/**
 * combine SQL logincal clauses from array using AND (default) or OR
 * @intellisense
 */
function combineSQLCriteria($arrElements, $and = true)
{
	$filteredCriteria = array();
	$union = $and ? " AND " : " OR ";

	foreach($arrElements as $e)
	{
		if(strlen($e))
			$filteredCriteria[] = "( " . $e . " )";
	}
	return implode( $union, $filteredCriteria );
}


function sqlMoreThan( $field, $value )
{
	if( $value == 'null' )
		return $field . " is not null";
	return $field . " > " . $value;
}
function sqlLessThan( $field, $value )
{
	if( $value == 'null' )
		return "";
	return $field . " < " . $value . ' or ' . $field . ' is null';

}

function sqlEqual( $field, $value )
{
	if( $value == 'null' )
		return $value . ' is null';
	return $field . " = " . $value;
}


/**
 * add WHERE clause to SQL string
 * @intellisense
 */
function AddWhere($sql,$where)
{
	if(!strlen($where))
		return $sql;
	$sql=str_replace(array("\r\n","\n","\t")," ",$sql);
	$tsql = strtolower($sql);
	$n = my_strrpos($tsql," where ");
	$n1 = my_strrpos($tsql," group by ");
	$n2 = my_strrpos($tsql," order by ");
	if($n1===false)
		$n1=strlen($tsql);
	if($n2===false)
		$n2=strlen($tsql);
	if ($n1>$n2)
		$n1=$n2;
	if($n===false)
		return substr($sql,0,$n1)." where ".$where.substr($sql,$n1);
	else
		return substr($sql,0,$n+strlen(" where "))."(".substr($sql,$n+strlen(" where "),$n1-$n-strlen(" where ")).") and (".$where.")".substr($sql,$n1);
}

/**
 *  DEPRECATED. Use RunnerPage::keysSQLExpression instead
 *	Construct WHERE clause with key values
 *
 * @param &Array	$keys
 * @param String	$table Teh data source table name OPTIONAL
 *
 * @return String
 * @intellisense
 * @deprecated
 */
function KeyWhere(&$keys, $table )
{
	global $cman;

	$strWhere="";

	$pSet = new ProjectSettings($table);
	$cipherer = new RunnerCipherer($table);
	$connection = $cman->byTable( $table );
	if( !$connection->dbBased() ) {
		return "";
	}

	$keyFields = $pSet->getTableKeys();
	foreach($keyFields as $kf)
	{
		if( strlen($strWhere) )
			$strWhere.= " and ";

		$value = $cipherer->MakeDBValue($kf, $keys[ $kf ], "", true);

		if( $connection->dbType == nDATABASE_Oracle )
			$valueisnull = $value === "null" || $value == "''";
		else
			$valueisnull = $value === "null";

		if( $valueisnull )
			$strWhere.= RunnerPage::_getFieldSQL($kf, $connection, $pSet)." is null";
		else
			$strWhere.= RunnerPage::_getFieldSQLDecrypt($kf, $connection, $pSet, $cipherer)."=".$cipherer->MakeDBValue($kf, $keys[ $kf ], "", true);
	}
	return $strWhere;
}

/**
 * Get count of rows from the query
 * @param String strSQL
 * @param Connection connection
 * @return Number
 * @intellisense
 */
function GetRowCount($strSQL, $connection)
{
	$strSQL = str_replace(array("\r\n","\n","\t")," ",$strSQL);
	$tstr = strtoupper($strSQL);
	$ind1 = strpos($tstr, "SELECT ");
	$ind2 = my_strrpos($tstr," FROM ");
	$ind3 = my_strrpos($tstr," GROUP BY ");
	if($ind3 === false)
	{
		$ind3 = strpos($tstr," ORDER BY ");
		if($ind3 === false)
			$ind3 = strlen($strSQL);
	}

	$countstr = substr($strSQL, 0, $ind1 + 6)." count(*) ".substr($strSQL, $ind2 + 1, $ind3 -$ind2);
	$countdata = $connection->query( $countstr )->fetchNumeric();
	return $countdata[0];
}

/**
 * 	add MSSQL Server TOP clause
 * @intellisense
 */
function AddTop( $strSQL, $n )
{
	$pattern = "/(^\\s*select\\s+distinct\\s+)|(^\\s*select\\s+)/i";
	$matches = array();
	preg_match_all( $pattern, $strSQL, $matches );

	if( $matches[0] ) {
		return $matches[0][0] . "top " . $n . " " . substr( $strSQL, strlen( $matches[0][0] ) );
	}
	return $strSQL;
}

/**
 * 	add DB2 Server TOP clause
 * @intellisense
 */
function AddTopDB2($strSQL, $n)
{
	return $strSQL." fetch first ".$n." rows only";
}
/**
 * @intellisense
 */
function AddTopIfx($strSQL,$n)
{
	return substr($strSQL,0,7)."limit ".$n." ".substr($strSQL,7);
}
/**
 * 	add Oracle ROWNUMBER checking
 * @intellisense
 */
function AddRowNumber($strSQL, $n)
{
	return "select * from (".$strSQL.") where rownum<".($n+1);
}

/**
 * Apply a limit to an SQL-query
 * @param String sql
 * @param Number N
 * @param Number dbType
 * @return String
 */
function applyDBrecordLimit($sql, $N, $dbType)
{
	if( !strlen($dbType) )
		return $sql;

	if( $dbType == nDATABASE_MySQL || $dbType == nDATABASE_PostgreSQL || $dbType == nDATABASE_SQLite3 )
		return $sql." LIMIT ".$N;

	if( $dbType == nDATABASE_Oracle )
		return AddRowNumber($sql, $N);

	if( $dbType == nDATABASE_MSSQLServer || $dbType == nDATABASE_Access )
		return AddTop($sql, $N);

	if( $dbType == nDATABASE_Informix )
		return AddTopIfx($sql, $N);

	if( $dbType == nDATABASE_DB2 )
		return AddTopDB2($sql, $N);

	return $sql;
}

/**
 * DEPRECATED
 * test database type if values need to be quoted
 * @intellisense
 */
function NeedQuotesNumeric($type)
{
    if($type == 203 || $type == 8 || $type == 129 || $type == 130 ||
		$type == 7 || $type == 133 || $type == 134 || $type == 135 ||
		$type == 201 || $type == 205 || $type == 200 || $type == 202 || $type==72 || $type==13)
		return true;
	else
		return false;
}

//	using ADO DataTypeEnum constants
//	the full list available at:
//	https://docs.microsoft.com/en-us/sql/ado/reference/ado-api/datatypeenum?view=sql-server-2017
//	or
//	https://www.google.com/search?q=ADO+DataTypeEnum

/**
 * @intellisense
 */
function IsNumberType($type)
{
	if($type==20 || $type==14 || $type==5 || $type==10 || $type==6
	|| $type==3 || $type==131 || $type==4 || $type==2 || $type==16
	|| $type==21 || $type==19 || $type==18 || $type==17 || $type==139
	|| $type==11)
		return true;
	return false;
}

/**
 * @intellisense
 */
function IsFloatType($type)
{
	if($type==14 || $type==5 || $type==131 || $type==4 || $type==6)
		return true;
	return false;
}


/**
 * @intellisense
 */
function NeedQuotes($type)
{
	return !IsNumberType($type);
}

/**
 * @intellisense
 */
function IsBinaryType($type)
{
	if($type==128 || $type==205 || $type==204)
		return true;
	return false;
}

/**
 * date and datetime
 * @intellisense
 */
function IsDateFieldType($type)
{
	if($type==7 || $type==133 || $type==135)
		return true;
	return false;
}

/**
 * only datetime
 * @intellisense
 */
function IsDateTimeFieldType($type)
{
	if($type==135)
		return true;
	return false;
}

/**
 * @intellisense
 */
function IsTimeType($type)
{
	if( $type==134 || $type==145 )
		return true;
	return false;
}

/**
 * @intellisense
 */
function IsCharType($type)
{
	if(IsTextType($type) || $type==8 || $type==129 || $type==200 || $type==202 ||  $type==130)
		return true;
	return false;
}

/**
 * @intellisense
 */
function IsTextType($type)
{
	if($type==201 || $type==203)
		return true;
	return false;
}

/**
 * @intellisense
 */
function IsGuid($type)
{
	if($type==72)
		return true;
	return false;
}

function IsBigInt($type)
{
	if($type==20)
		return true;
	return false;
}

/**
 * @intellisense
 */
function GetUserPermissionsDynamic( $table )
{
	if( !isLogged() )
		return "";
	global $gPermissionsRefreshTime,$gPermissionsRead;
	if( Security::isAdmin() )
	{
		if($table=="admin_admembers")
			return "ADESPIM";
		if($table=="admin_rights")
			return "ADESPIM";
		if($table=="admin_members")
			return "ADESPIM";
		if($table=="admin_users")
			return "ADESPIM";
	}

	$userRights = &Security::dynamicUserRights();
	return $userRights[ $table ][ "mask" ];
}


/**
 * @intellisense
 */
function GetUserPermissionsStatic( $table )
{
	if( !isLogged() )
		return "";

	$sUserGroup = storageGet( "GroupID" );
	$extraPerm = "";
	if( $table=="dbo.UsuGCC-_users" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Abogados" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Actuaciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Ciudades" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Conceptos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Departamentos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Despachos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Empresas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Entidades" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Especialidades" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Estados" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Etapas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Festivos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.MotivosDevoluciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Naturalezas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Niveles" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Oficios" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Operaciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Parejas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Presupuestos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Reportes" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Salarios" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Seccionales" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Test" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Uvts" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.CarteraTipos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Chequeos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.ChequeosOficios" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.ChequeosSancionados" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Devoluciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Horarios" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.UsuGCC-uggroups" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.IPsRestringidas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.TiposDocumentos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Tramites" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Conceptos1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Procesos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Solidarios" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Llamadas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Medidas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Acuerdos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Pagos1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Cuentas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Intereses" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Reasignaciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Suspensiones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Suspensiones1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Interrupciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Reliquidaciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Ayudas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Temas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Correspondencias" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.usugcc-_audit" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Importaciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Indeterminados" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.UserProfile" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Auditorias" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Menus" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Minjusticia" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Minjusticia2" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Minjusticia3" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Actas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.AlertasTipos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Direcciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Propiedades" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Propiedades1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Propiedades3" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Bancos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Motivos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Oficios Sigobius" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Tasas Tributarias" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Tasas Comerciales" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Tasas TES (Deterioro de Cartera)" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Carceles" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Alertas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.tipoCobro" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Oficios1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Ciudades1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Autorizaciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Liquidaciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.usugcc__noti" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Sancionados" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Seguimiento y control de Acuerdos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "SP".$extraPerm;
	}
	if( $table=="dbo.Despachos4" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Despachos1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Remanentes Report" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "SP".$extraPerm;
	}
	if( $table=="dbo.ProcesosPrescritos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Prescritos Report" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "SP".$extraPerm;
	}
	if( $table=="dbo.AlertMandPago" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="AlertNotMandPago" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="AlertIncAcuPago" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="AlertSinPersuasivo" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="AlertBusqBienes" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="AlertSegAdelante" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="AlertIntSusp" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.ReporteMandamientos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "SP".$extraPerm;
	}
	if( $table=="dbo.ListaChequeosReporte" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "SP".$extraPerm;
	}
	if( $table=="dbo.ReporteClasificacionCartera" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "SP".$extraPerm;
	}
	if( $table=="dbo.ProcesosSinNotificaReport" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "SP".$extraPerm;
	}
	if( $table=="dbo.ReporteCorporaciónEspecialidad" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "SP".$extraPerm;
	}
	if( $table=="dbo.CorporacionesView" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Fechas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.AuditoriasProcesosView" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.ProcesosReasignar" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Genero" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="admin_admembers" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Ciudades2" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Ciudades4" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Ciudades5" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Ciudades3" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Uvbs" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Resumen_Mensual" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.tipoRecaudo" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Despachos2" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Despachos5" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Actualización" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Guía del Deudor Moroso" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Incumplimiento Acuerdo de Pago Semestral" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Retiros" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Reporte Semestral" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Cancelación Acuerdo de Pago" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Excluidos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Base de Datos - Historico" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Deterioro de Cartera por Proceso" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Intereses por Proceso" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Listado Medidas Cautelares" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Presunción Prescripción" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Certificado del Resumen Mensual" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Certificado del Resumen por Periodo" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Actualización DataChild" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Cancelación Acuerdo de Pago DataChild" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Excluidos DataChild" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Incumplimiento Acuerdo de Pago Semestral DataChild" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Reporte Semestral Datachild" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Retiros DataChild" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.BusquedasPropiedades" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.ProcesosView1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Obligaciones de Dificil Recaudo" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Privados de la Libertad" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Recaudos por Años" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Reportes" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Reportes DataChild prescritos con resolución expedida_Solidarios" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Reportes DataChild prescritos con resolución expedida_Solidarios_Bienes" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Transacciones Usuario" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Indicadores de Gestión" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Tablero de Control General" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Tablero de Control Total Procesos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Tableros_RecaudoSeccional" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Total Procesos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "S".$extraPerm;
	}
	if( $table=="Total Recaudado" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "S".$extraPerm;
	}
	if( $table=="Procesos - Mes" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "S".$extraPerm;
	}
	if( $table=="Recaudo - Mes" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "S".$extraPerm;
	}
	if( $table=="Tablero de Control Gestión" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Actuaciones Por Mes" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "S".$extraPerm;
	}
	if( $table=="dbo.ProcesosSancionados" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BienesInmuebles" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BienesMuebles" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Productos Bancarios" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.tipoTasas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Acuerdo de Pago" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Listado de Chequeos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Listado de Chequeo Sancionado DataChild" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Listado de Chequeo Oficios DataChild" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Listado de Chequeo Motivo devolucion DataChild" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Clasificaciones -- Cartera" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Corporaciones - Especialidades" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Mandamientos de pago Automaticos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Prescripciones Automática" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Procesos Sin Notificación" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Remanentes-" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Prueba Archivo Plano" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Consulta Publica" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "S".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Consulta Publica Notificacion Detalle" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "S".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Consulta Publica Generacion Desprendible" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "S".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Pagos2" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Propiedades2" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Motivos1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Etapas1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Estados1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Aplazamientos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Seccionales1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Naturalezas1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Calificaciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Niveles1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Niveles2" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Conceptos2" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.PropiedadesMedidas" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Consolidado por Conceptos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Movimiento Mensual" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Informe ejecutivo de Gestión" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Cumplimiento de metas de Recaudo" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Indicadores de búsqueda" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Indicadores Recaudos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Indicadores Sin Actuaciones" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Test de Deterioro (Resumen)" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Novedades" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.ProcesosCorrespondencias" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.CorrespondenciaMasiva" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.UsuariosSeccionales" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.UsuariosCarteraTipos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.webpages_Roles" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.webpages_UsersInRoles" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.UsuGCC-ugmembers" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.despachosSigob" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.codificadoresDespacho" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Seccional_ProcesosView1" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.tiposNovedades" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Recaudo Por Seccional" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="PrescripcionAutomatica" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="MandamientoAutomatico" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.AlertasOficios" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="admin_rights" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "S".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="admin_members" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "S".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="admin_users" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "S".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="PersuasivosAutomaticos" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "S".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="BDME Publica" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "S".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.Seccionales2" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "S".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Gestión Medidas Cautelares" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "S".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="Procesos Sin Medidas Cautelares" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "S".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	if( $table=="dbo.LiquidacionesHistorico" )
	{
		if( $sUserGroup=="<Guest>" )
		{
						return "S".$extraPerm;
		}
//	default permissions
		return "ADESPI".$extraPerm;
	}
	// grant nothing by default
	return "";
}

/**
 * DEPRECATED
 *	Check if the current user is Dynamic Permissions admin user
 * @return Boolean
 * @intellisense
 */
function IsAdmin()
{
	return Security::isAdmin();
}

/**
 * Returns user permissions for a particular table
 *	A - Add
 *	D - Delete
 *	E - Edit
 *	S - List/View/Search
 *	P - Print/Expor
 * @param String table
 * @return String
 * @intellisense
 */
function GetUserPermissions( $table = "" )
{
	global $strTableName, $globalEvents;
	if(!$table)
		$table = $strTableName;
	$permissions = "";
	if( Security::hasLogin() ) {
		if( !IsLogged() )
			return "";
	}

	if( is_array( $_SESSION["securityOverrides"] ) )
	{
		if( isset( $_SESSION["securityOverrides"][ $table ] ) ) {
			if( isset( $_SESSION["securityOverrides"][ $table ][ "mask" ] ) ) {
				return $_SESSION["securityOverrides"][ $table ][ "mask" ];
			}
		}
	}

	if( Security::permissionsAvailable() ) {
		if( Security::dynamicPermissions() ) {
			$permissions =  GetUserPermissionsDynamic($table);
		} else {
			$permissions =  GetUserPermissionsStatic($table);
		}
	} else {
		$permissions =  "ADESPI";
	}

	if($globalEvents->exists("GetTablePermissions", $table))
	{
		$permissions = $globalEvents->GetTablePermissions($permissions, $table);
	}
	return $permissions;
}

/**
 * Checks if user has access to link to page
 * @param String table
 * @param String pageType
 * @param String page
 * @return String
 * @intellisense
 */
function menuLinkAvailable( $table, $pageType, $page = null )
{
	if ( $table == WEBREPORTS_TABLE )
		return true;

	if ( !$page ) {
//		this part solves #15950, but very time consuming as creates ProjectSettings for every menu item every time.
//		$pSet = new ProjectSettings( $table, $pageType );
//		$permission = Security::pageType2permission( $pSet->getPageType() );

		$permission = Security::pageType2permission( $pageType );
		return Security::userCan( $permission, $table );
	}
	return Security::userCanSeePage( $table, $page );
}

/**
 * @intellisense
 */
function isLogged()
{
	if( !Security::hasLogin() ) {
		return true;
	}

	if( !Security::verifySafeCSRF() ) {
		return false;
	}

	return !!Security::getUserName();
}


/**
 * @intellisense
 */
function guestHasPermissions()
{
	global $gGuestHasPermissions;
	if( $gGuestHasPermissions === -1 ) {
		if( Security::dynamicPermissions() ) {
			$gGuestHasPermissions = Security::guestHasDynamicPermissions()
				? 1
				: 0;
		} else {
			$gGuestHasPermissions = Security::guestHasStaticPermissions()
				? 1
				: 0;
		}
	}
	return $gGuestHasPermissions === 1;
}

/**
 * @intellisense
 */
function CheckTablePermissions($strTableName, $permission)
{
	if( strpos(GetUserPermissions($strTableName), $permission) === false )
		return false;

	return true;
}

function pagetypeToPermissions($pageType)
{
	global $_pagetypeToPermissions_dict;

	if(!$_pagetypeToPermissions_dict)
	{
		$_pagetypeToPermissions_dict = array();
		$_pagetypeToPermissions_dict["list"] = "S";
		$_pagetypeToPermissions_dict["search"] = "S";
		$_pagetypeToPermissions_dict["view"] = "S";
		$_pagetypeToPermissions_dict["add"] = "A";
		$_pagetypeToPermissions_dict["edit"] = "E";
		$_pagetypeToPermissions_dict["print"] = "P";
		$_pagetypeToPermissions_dict["export"] = "P";
		$_pagetypeToPermissions_dict["import"] = "I";
	}

	return $_pagetypeToPermissions_dict[$pageType];
}


////////////////////////////////////////////////////////////////////////////////
// editing functions
////////////////////////////////////////////////////////////////////////////////
/**
 * @intellisense
 */
function make_db_value($field,$value,$controltype="",$postfilename="",$table="")
{
	$ret = prepare_for_db($field, $value, $controltype, $postfilename, $table);

	if($ret === false)
		return $ret;

	return add_db_quotes($field, $ret, $table);
}

/**
 * @param String field
 * @param Mixed value
 * @param String table		The datasource table name
 * @param String type
 * @intellisense
 */
function add_db_quotes($field, $value, $table = "", $type = null)
{
	global $strTableName, $locale_info, $cman;

	if( $table == "" )
		$table=$strTableName;

	$pSet = new ProjectSettings($table);
	$connection = $cman->byTable( $table );

	if( $type == null )
		$type = $pSet->getFieldType($field);

	if( IsBinaryType($type) )
		return $connection->addSlashesBinary( $value );

	if( ($value === "" || $value === FALSE || is_null($value)) && !IsCharType($type) )
		return "null";

	if(NeedQuotes($type))
	{
		if( !IsDateFieldType($type) )
			$value = $connection->prepareString($value);
		else
		{
			$y = "(\d\d\d\d)";
			$m = "(0?[1-9]|1[0-2])";
			$d = "(0?[1-9]|[1-2][0-9]|3[0-1])";
			$delim = "(-|".preg_quote($locale_info["LOCALE_SDATE"], "/").")";
			$reg = "/".$d.$delim.$m.$delim.$y."|".$m.$delim.$d.$delim.$y."|".$y.$delim.$m.$delim.$d."/";
			if( !preg_match($reg, $value, $matches) )
				return "null";

			$value = $connection->addDateQuotes( $value );
		}
	}
	else
	{
		// if boolean type field, add quotes
		if( $connection->dbType == nDATABASE_PostgreSQL && $type == 11 )
		{
			$value = strtolower($value);
			if (!strlen($value) || $value == 0 || $value == "0" || $value == "false" || $value == "f" || $value == "n" || $value == "no" || $value == "off")
				$value = "f";
			else
				$value = "t";
			$value = $connection->prepareString($value);
		}
		else
			$value = DB::prepareNumberValue( $value );
	}
	return $value;
}


/**
 * @param String field
 * @param Mixed value
 * @param String controltype
 * @param String postfilename
 * @param String table			The datasource table name
 * @intellisense
 */
function prepare_for_db($field, $value, $controltype = "", $postfilename = "", $table = "")
{
	global $strTableName, $cman;

	if( $controltype == "display" )
		return $value;

	if($table == "")
		$table = $strTableName;

	$pSet = new ProjectSettings($table);
	$connection = $cman->byTable( $table );

	$filename = "";
	$type = $pSet->getFieldType($field);
	if((!$controltype || $controltype == "multiselect") && !IsTimeType($type))
	{
		if(is_array($value))
			$value = combineLookupValues($value);
		if(($value === "" || $value === FALSE) && !IsCharType($type))
			return "";
		if(IsGuid($type))
		{
			if(!IsGuidString($value))
				return "";
		}

		if( IsFloatType($type) )
			return makeFloat($value);

		if( IsNumberType($type) && !is_int($value) )
		{
			$value = trim($value);
			if( !is_numeric( str_replace(",", ".", $value) ) )
				$value = "";
		}
		return $value;
	}
	else if($controltype == "time" || IsTimeType($type))
	{
		if(!strlen($value))
			return "";

		$time = localtime2db($value);
		if( $connection->dbType == nDATABASE_PostgreSQL )
		{
			$timeArr = explode(":",$time);
			if($timeArr[0]>24 || $timeArr[1]>59 || $timeArr[2]>59)
				return "";
		}

		if( IsDateFieldType($type) )
			$time = "2000-01-01 ".$time;

		return $time;
	}
	else if(substr($controltype, 0, 4) == "date")
	{
		$dformat = substr($controltype, 4);
		if($dformat == EDIT_DATE_SIMPLE || $dformat == EDIT_DATE_SIMPLE_INLINE || $dformat == EDIT_DATE_SIMPLE_DP)
		{
			$time = localdatetime2db($value);
			if($time == "null")
				return "";
			return $time;
		}
		else if($dformat == EDIT_DATE_DD || $dformat == EDIT_DATE_DD_INLINE || $dformat == EDIT_DATE_DD_DP)
		{
			$a = explode("-",$value);
			if(count($a) < 3)
				return "";
			else
			{
				$y = $a[0];
				$m = $a[1];
				$d = $a[2];
			}
			if($y < 100)
			{
				if($y < 70)
					$y += 2000;
				else
					$y += 1900;
			}
			return mysprintf("%04d-%02d-%02d",array($y,$m,$d));
		}
		else
			return "";
	}
	else if(substr($controltype, 0, 8) == "checkbox")
	{
		if($value == "on")
			$ret = 1;
		else if($value == "none")
			return "";
		else
			$ret = 0;
		return $ret;
	}
	else
		return false;
}

/**
 * 	delete uploaded files when deleting the record
 * @intellisense
 */
function DeleteUploadedFiles($pSet, $deleted_values)
{
	require_once getabspath('classes/filehandler.php');

	foreach($deleted_values as $field => $value)
	{
		if( $pSet->getEditFormat($field) != EDIT_FORMAT_FILE && !$pSet->getPageTypeByFieldEditFormat($field, EDIT_FORMAT_FILE) ) {
			//	field format is not file, on this or any other page
			continue;
		}
		if( !$pSet->isDeleteAssociatedFile($field) ) {
			continue;
		}

		$filesArray = RunnerFileHandler::getFileArray( $value, $field, $pSet );
		foreach($filesArray as $delFile)
		{
			$fs = getStorageProvider( $pSet, $field );
			$fs->delete( $delFile["name"] );
			if( $delFile["thumbnail"] ) {
				$fs->delete( $delFile["thumbnail"] );
			}
		}
	}
}

/**
 * combine values omiting empty and duplicate ones
*/
function combineLookupValues( $arr )
{
	$added = array();
	$data = array();
	foreach( $arr as $v ) {
		if( $v != "" && !$added[$v] ) {
			$data[] = $v;
			$added[$v] = true;
		}
	}
	return combinevalues( $data );
}


/**
 * 	combine checked values from multi-select list box
 * @intellisense
 */
function combinevalues($arr)
{
	$ret="";
	foreach($arr as $item)
	{
		$val = $item;
		if(strlen($ret))
			$ret.=",";
		if(strpos($val,",")===false && strpos($val,'"')===false)
			$ret.=$val;
		else
		{
			$val=str_replace('"','""',$val);
			$ret.='"'.$val.'"';
		}
	}
	return $ret;
}

/**
 * split values ignore empty and repeating
 */
function splitLookupValues( $str ) {
	$values = splitvalues( $str );
	$ret = array();
	$added = array();
	foreach( $values as $v ) {
		if( $added[$v] || $v === "" ) {
			continue;
		}
		$added[$v] = true;
		$ret[] = $v;
	}
	return $ret;
}

/**
 * 	split values for multi-select list box
 * @intellisense
 */
function splitvalues($str)
{
	$arr=array();
	if($str=="")
	{
		$arr[] = "";
		return $arr;
	}
	$start=0;
	$i=0;
	$inquot=false;
	while($i<=strlen($str))
	{
		if($i<strlen($str) && substr($str,$i,1)=='"')
			$inquot=!$inquot;
		else if($i==strlen($str) || !$inquot && substr($str,$i,1)==',')
		{
			$val=substr($str,$start,$i-$start);
			$start=$i+1;
			if(strlen($val) && substr($val,0,1)=='"')
			{
				$val=substr($val,1,strlen($val)-2);
				$val=str_replace('""','"',$val);
			}

			if( $val !== FALSE )
			$arr[]=$val;
		}
		$i++;
	}
	return $arr;
}

/**
 *
 */
/*
function GetLookupFieldsIndexes($pSet, $field)
{
	$lookupTable = $pSet->getLookupTable($field);
	$lookupType = $pSet->getLookupType($field);
	$displayFieldName = $pSet->getDisplayField($field);
	$linkFieldName = $pSet->getLinkField($field);
	$linkAndDisplaySame = $linkFieldName == $displayFieldName;
	if($lookupType == LT_QUERY)
	{
		$lookupPSet = new ProjectSettings($lookupTable);
		$linkFieldIndex = $lookupPSet->getFieldIndex($linkFieldName) - 1;
		if($linkAndDisplaySame)
			$displayFieldIndex = $linkFieldIndex;
		else
		{
			if($pSet->getCustomDisplay($field))
				$displayFieldIndex = $lookupPSet->getCustomExpressionIndex($pSet->_table, $field);
			else
				$displayFieldIndex = $lookupPSet->getFieldIndex($displayFieldName) - 1;
		}
	}
	else
	{
		$linkFieldIndex = 0;
		$displayFieldIndex = $linkAndDisplaySame ? 0 : 1;
	}
	return array("linkFieldIndex" => $linkFieldIndex, "displayFieldIndex" => $displayFieldIndex);
}
*/
//////////////////////////////////////////////////////////////////////////////
/**
 * Get locale, am, pm for field edit as time
 * @param integer $convention - 24 or 12 hours format for timePicker
 * @param boolean $useTimePicker -  use timePicker or not
 * @return array
 * @intellisense
 */
function getLacaleAmPmForTimePicker($convention, $useTimePicker = false)
{
	$am = '';
	$pm = '';
	global $locale_info;
	if($useTimePicker)
	{
		$locale_convention = $locale_info["LOCALE_ITIME"] ? 24 : 12;
		if($convention == $locale_convention)
		{
			$am = $locale_info["LOCALE_S1159"];
			$pm = $locale_info["LOCALE_S2359"];
			$locale = $locale_info["LOCALE_STIMEFORMAT"];
		}
		else
		{
			if($convention == 24)
			{
				$am = '';
				$pm = '';
				$locale = "H:mm:ss";
			}
			else
			{
				$am = 'am';
				$pm = 'pm';
				$locale = "h:mm:ss tt";
			}
		}
	}
	else
		$locale = $locale_info["LOCALE_STIMEFORMAT"];

	return array('am'=>$am,'pm'=>$pm,'locale'=>$locale);
}

/**
 * Get value for field edit as time and get dpTime settings
 * @param integer $convention - 24 or 12 hours format for timePicker
 * @param string $type - type of field
 * @param string $value - value of field
 * @param boolean $useTimePicker -  use timePicker or not
 * @return array
 * @intellisense
 */
function getValForTimePicker($type,$value,$locale)
{
	$val = "";
	$dbtime = array();
	if(IsDateFieldType($type))
	{
		$dbtime = db2time($value);
		if(count($dbtime))
			$val = format_datetime_custom($dbtime, $locale);
	}
	else
	{
		$arr = parsenumbers($value);
		if(count($arr))
		{
			while(count($arr)<3)
				$arr[] = 0;
			$dbtime = array(0, 0, 0, $arr[0], $arr[1], $arr[2]);
			$val = format_datetime_custom($dbtime, $locale);
		}
	}

	return array('val'=>$val,'dbTime'=>$dbtime);
}


/**
 * @intellisense
 */
function my_stripos($str,$needle, $offest)
{
	if (strlen($needle)==0 || strlen($str)==0)
		return false;
	return strpos(strtolower($str),strtolower($needle), $offest);
}

/**
 * @intellisense
 */
function my_str_ireplace($search, $replace,$str)
{
	$pos=my_stripos($str,$search,0);
	if($pos===false)
		return $str;
	return substr($str,0,$pos).$replace.substr($str,$pos+strlen($search));
}


/**
 * @intellisense
 */
function in_assoc_array($name, $arr)
{
	foreach ($arr as $key => $value)
	{
		if ($key==$name)
			return true;
	}
	return false;
}

/**
 * @intellisense
 */
function xmlencode($str)
{
	$str = str_replace("&","&amp;",$str);
	$str = str_replace("<","&lt;",$str);
	$str = str_replace(">","&gt;",$str);
	$str = str_replace("'","&apos;",$str);
	return escapeEntities($str);
}

/**
 * @intellisense
 */
function print_inline_array(&$arr,$printkey=false)
{
	if(!$printkey)
	{
		foreach ( $arr as $key=>$val )
			echo str_replace(array("&","<","\\","\r","\n"),array("&amp;","&lt;","\\\\","\\r","\\n"),str_replace(array("\\","\r","\n"),array("\\\\","\\r","\\n"),$val))."\\n";
	}
	else
	{
		foreach( $arr as $key=>$val )
			echo str_replace(array("&","<","\\","\r","\n"),array("&amp;","&lt;","\\\\","\\r","\\n"),str_replace(array("\\","\r","\n"),array("\\\\","\\r","\\n"),$key))."\\n";
	}

}

/**
 * @intellisense
 */
function checkpassword($pwd)
{
	$len = strlen($pwd);
	if($len < 8)
		return false;
	$cUnique = array();
	$cLower = $cUpper = $cDigit = 0;
	for($i=0; $i<$len; $i++)
	{
		$c = substr($pwd, $i, 1);
		if($c >= 'a' && $c <= 'z')
			$cLower++;
		else if($c >= 'A' && $c<= 'Z')
			$cUpper++;
		else
			$cDigit++;

		$cUnique[$c] = 1;
	}
	if(count($cUnique)<1)
		return false;
	if($cDigit<2)
		return false;
	if(!$cLower || !$cUpper)
		return false;
	return true;
}

/**
 * @intellisense
 */
function GetChartXML($chartname)
{
	$strTableName = GetTableByShort($chartname);
	$settings = new ProjectSettings($strTableName);
	return $settings->getChartXml();
}

function isSecureProtocol() {
  return
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || $_SERVER['SERVER_PORT'] == 443;
}

/**
 * Returns site address without path
 * Examples:
 * http://server.com:88
 * https://server.com
 *
 * @intellisense
 */
function GetSiteUrl()
{
	$proto = "http://";
	if( $_SERVER["HTTPS"] && $_SERVER["HTTPS"] != "off")
		$proto = "https://";
	return $proto . $_SERVER["HTTP_HOST"];
}

/**
 * DEPRECATED! Use projectUrl() instead
 * Returns site address with path
 * Examples:
 * http://server.com:88/Calendar
 * https://server.com
 *
 * @intellisense
 */
function GetFullSiteUrl()
{
	return getDirectoryFromURI( GetSiteUrl() . $_SERVER['REQUEST_URI'] );
}


/**
 * @intellisense
 */
function GetAuditObject($table="")
{

	$linkAudit = false;
	if(!$table)
	{
		$linkAudit = true;
	}
	else
	{
		$settings = new ProjectSettings($table);
		$linkAudit = $settings->auditEnabled();
	}
	if ($linkAudit)
	{
		require_once(getabspath("include/audit.php"));
		return new AuditTrailTable();
	}
	else
	{
		return NULL;
	}
}

/**
 * @intellisense
 */
function GetLockingObject($table="")
{
	return NULL;

	if(!$table)
	{
		global $strTableName;
		$table = $strTableName;
	}
	$settings = new ProjectSettings($table);
	if ($settings->lockingEnabled())
	{
		require_once(getabspath("include/locking.php"));
		return new oLocking();
	}
	else
	{
		return NULL;
	}
}

/**
 * @intellisense
 */
function isEnableSection508()
{
	return GetGlobalData("isSection508",false);
}

/**
 * Returns validation type which defined in js validation object.
 * Use this function, because runner constants has another names of validation functions
 *
 * @param string $name
 * @return string
  * @intellisense
 */
function getJsValidatorName($name)
{
	switch ($name)
	{
		case "Number":
			return "IsNumeric";
			break;
		case "Password":
			return "IsPassword";
			break;
		case "Email":
			return "IsEmail";
			break;
		case "Currency":
			return "IsMoney";
			break;
		case "US ZIP Code":
			return "IsZipCode";
			break;
		case "US Phone Number":
			return "IsPhoneNumber";
			break;
		case "US State":
			return "IsState";
			break;
		case "US SSN":
			return "IsSSN";
			break;
		case "Credit Card":
			return "IsCC";
			break;
		case "Time":
			return "IsTime";
			break;
		case "Regular expression":
			return "RegExp";
			break;
		default:
			return $name;
			break;
	}
}

/**
 * @intellisense
 */
function SetLangVars($xt, $prefix, $pageName = "", $extraparams = "")
{
	$xt->assign("lang_label", true);

	$currentLang = mlang_getcurrentlang();

	$var = GoodFieldName($currentLang)."_langattrs";
	$xt->assign($var, "selected");

	$xt->assign($currentLang . "LANGLINK_ACTIVE", true);

	$xt->assign("SpanishLANGLINK", "Spanish" != $currentLang);

	if( isEnableSection508() )
		$xt->assign_section("lang_label", "<label for=\"languageSelector\">","</label>");

	if( $extraparams )
		$extraparams = $extraparams."&";

	$dataAttr = 'data-params="'.$extraparams.'" data-prefix="'.$prefix.'"';
	$xt->assign("langselector_attrs", "id=\"languageSelector\" ".$dataAttr);

	$xt->assign("languages_block", true);
}

/**
 * @intellisense
 */
function GetTableCaption($table)
{
	global $tableCaptions;
	return @$tableCaptions[mlang_getcurrentlang()][$table];
}

/**
 * @intellisense
 */
function GetFieldByLabel($table, $label)
{
	global $field_labels, $strTableName;
	if (!$table)
	{
		$table = $strTableName;
	}

	if(!array_key_exists($table,$field_labels))
		return "";
	$currLang = mlang_getcurrentlang();
	if(!array_key_exists($currLang,$field_labels[$table]))
		return "";
	$lables = $field_labels[$table][mlang_getcurrentlang()];
	foreach ($lables as $key=>$val)
	{
		if ($val == $label)
		{
			return $key;
		}
	}
	return '';
}

/**
 * @intellisense
 */
function GetFieldLabel($table,$field)
{
	global $field_labels;
	if( !array_key_exists( $table, $field_labels ) )
		return "";

	return @$field_labels[ $table ][ mlang_getcurrentlang() ][ $field ];
}


/**
 * @intellisense
 */
function GetFieldToolTip($table, $field)
{
	global $fieldToolTips;
	if( !array_key_exists( $table, $fieldToolTips ) )
		return "";

	return @$fieldToolTips[ $table ][ mlang_getcurrentlang() ][ $field ];
}

/**
 * @param String table
 * @param String field
 * @return String
 */
function GetFieldPlaceHolder( $table, $field )
{
	global $placeHolders;

	if( !array_key_exists( $table, $placeHolders ) )
		return "";

	return @$placeHolders[ $table ][ mlang_getcurrentlang() ][ $field ];
}


/**
 * @param Array - MLString type from TS
 * @return String
 */
function GetMLString($mLString)
{
	if( !$mLString ) {
		return "";
	}
	switch($mLString["type"])
	{
		case ML_TEXT:
			return $mLString["text"];

		case ML_CUSTOM_LABEL:
			return GetCustomLabel($mLString["label"]);

		case ML_MESSAGE:
			return mlang_message($mLString["tag"]);
	}

	return "";
}




/**
 * @intellisense
 */
function GetCustomLabel($custom)
{
	global $custom_labels;
	return @$custom_labels[mlang_getcurrentlang()][$custom];
}

/**
 * @intellisense
 */
function mlang_getcurrentlang()
{
	global $_currentLanguage, $mlang_messages,$mlang_defaultlang;
	if(@$_POST["language"])
		$_SESSION["language"]=@$_POST["language"];
	if(@$_GET["language"])
		$_SESSION["language"]=@$_GET["language"];
	if(@$_SESSION["language"])
		return $_SESSION["language"];
	return $mlang_defaultlang;
}

function isRTL()
{
	global $mlang_charsets;
	$cp = strtolower($mlang_charsets[mlang_getcurrentlang()]);
	return ($cp == 'windows-1256' || $cp == 'windows-1255');
}


/**
 * @intellisense
 */
function mlang_getlanglist()
{
	global $mlang_messages,$mlang_defaultlang;
	return array_keys($mlang_messages);
}

/**
 * @intellisense
 */
function getMountNames()
{
	$mounts = array();
		$mounts[1] = "Enero";
	$mounts[2] = "Febrero";
	$mounts[3] = "Marzo";
	$mounts[4] = "Abril";
	$mounts[5] = "Mayo";
	$mounts[6] = "Junio";
	$mounts[7] = "Julio";
	$mounts[8] = "Agosto";
	$mounts[9] = "Septiembre";
	$mounts[10] = "Octubre";
	$mounts[11] = "Noviembre";
	$mounts[12] = "Diciembre";

	return $mounts;
}


/**
 * @intellisense
 */
function showDetailTable($params)
{
	global $strTableName;
	$oldTableName = $strTableName;
	$strTableName = $params["table"];
	// show page
	if($params["dpObject"]->isDispGrid())
		$params["dpObject"]->showPage();
	$strTableName = $oldTableName;
}

/**
 * insert record on Add & Register pages
 * @intellisense
 */
function DoInsertRecordSQL($table, &$avalues, &$blobfields, &$pageObject)
{
	//	make SQL string
	$strSQL = "insert into ".$pageObject->connection->addTableWrappers($table)." ";

	$strFields = "(";
	$strValues = "(";
	$blobs = PrepareBlobs($avalues, $blobfields, $pageObject);

	foreach($avalues as $akey => $value)
	{
		$strFields.= $pageObject->getTableField($akey).", ";

		if( in_array($akey, $blobfields) )
			$strValues.= $value.", ";
		else
		{
			if( is_null($pageObject->cipherer) )
				$strValues.= add_db_quotes($akey, $value).", ";
			else
				$strValues.= $pageObject->cipherer->AddDBQuotes($akey, $value).", ";
		}
	}

	if( substr($strFields, -2) == ", " )
		$strFields = substr($strFields, 0, strlen($strFields) - 2);

	if( substr($strValues, -2) == ", " )
		$strValues = substr($strValues, 0, strlen($strValues) - 2);

	$strSQL.= $strFields.") values ".$strValues.")";

	if( !ExecuteUpdate($pageObject, $strSQL, $blobs) )
		return false;

	$pageObject->ProcessFiles();

	return true;
}

function getEventObject( $table )
{
	global $tableEvents, $tables_data, $dummyEvents;
	if( array_key_exists($table,$tableEvents) )
		return $tableEvents[$table];

	if( !$tables_data[$table] ) {
		return null;
	}
	if( !$tables_data[$table][".hasEvents"] ) {
		return $dummyEvents;
	}
	$tableEvents[$table] = createEventClass( $table );
	return $tableEvents[$table];
}

/**
 * @intellisense
 */
function tableEventExists($event,$table)
{
	$events = getEventObject( $table );
	if( !$events ) {
		return false;
	}
	return $events->exists($event);
}

/**
 * @intellisense
 */
function add_nocache_headers()
{
	header("Cache-Control: no-cache, no-store, max-age=0, must-revalidate");
	header("Pragma: no-cache");
	header("Expires: Fri, 01 Jan 1990 00:00:00 GMT");
}

/**
 * @intellisense
 */
function IsGuidString(&$str)
{
//	{3F2504E0-4F89-11D3-9A0C-0305E82C3301}
	if(strlen($str)==36 && substr($str,0,1)!="{" && substr($str,-1)!="}")
		$str="{".$str."}";
	elseif(strlen($str)==37 && substr($str,0,1)=="{" && substr($str,-1)!="}")
		$str=$str."}";
	elseif(strlen($str)==37 && substr($str,0,1)!="{" && substr($str,-1)=="}")
		$str="{".$str;

	if(strlen($str)!=38)
		return false;
	for($i=0;$i<38;$i++)
	{
		$c = substr($str,$i,1);
		if($i==0)
		{
			if($c!='{')
				return false;
		}
		elseif($i==37 )
		{
			if($c!='}')
				return false;
		}
		elseif($i==9 || $i==14 || $i==19 || $i==24)
		{
			if($c!='-')
				return false;
		}
		else
		{
			if(($c<'0' || $c>'9') && ($c<'a' || $c>'f') && ($c<'A' || $c>'F'))
				return false;
		}
	}
	return true;
}

/**
 * @intellisense
 */
function IsStoredProcedure($strSQL)
{
	if(strlen($strSQL)>6)
	{
		$c=strtolower(substr($strSQL,6,1));
		if(strtolower(substr($strSQL,0,6))=="select" && ($c<'0' || $c>'9') && ($c<'a' || $c>'z') && $c!='_')
			return false;
		else
			return true;
	}
	else
		return true;
}

/**
 * Checks whether an browser for mobile devices
 * Returns false - Browser stationary or it was not possible to determine
 * 1-4 - the browser is running on your mobile device
 * @return Mixed
 * @intellisense
 */
function MobileDetected()
{
	$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
	$accept = strtolower($_SERVER['HTTP_ACCEPT']);

	if( strpos($accept,'text/vnd.wap.wml')!==false || strpos($accept,'application/vnd.wap.xhtml+xml')!==false )
		return 1; // Mobile browser detected by HTTP-headers

	if( isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE']) )
		return 2; // Mobile browser detected by server settings


	if(preg_match('/(ipad|android|symbianos|opera mini|ipod|blackberry|'.
		'palm os|palm|hiptop|avantgo|plucker|xiino|blazer|elaine|iris|3g_t|'.
		'windows ce|opera mobi|windows ce; smartphone;|windows ce; iemobile|'.
		'mini 9.5|vx1000|lge |m800|e860|u940|ux840|compal|'.
		'wireless| mobi|ahong|lg380|lgku|lgu900|lg210|lg47|lg920|lg840|'.
		'lg370|sam-r|mg50|s55|g83|t66|vx400|mk99|d615|d763|el370|sl900|'.
		'mp500|samu3|samu4|vx10|xda_|samu5|samu6|samu7|samu9|a615|b832|'.
		'm881|s920|n210|s700|c-810|_h797|mob-x|sk16d|848b|mowser|s580|'.
		'r800|471x|v120|rim8|c500foma:|160x|x160|480x|x640|t503|w839|'.
		'i250|sprint|w398samr810|m5252|c7100|mt126|x225|s5330|s820|'.
		'htil-g1|fly v71|s302|-x113|novarra|k610i|-three|8325rc|8352rc|'.
		'sanyo|vx54|c888|nx250|n120|mtk |c5588|s710|t880|c5005|i;458x|'.
		'p404i|s210|c5100|teleca|s940|c500|s590|foma|samsu|vx8|vx9|a1000|'.
		'_mms|myx|a700|gu1100|bc831|e300|ems100|me701|me702m-three|sd588|'.
		's800|8325rc|ac831|mw200|brew |d88|htc\/|htc_touch|355x|m50|km100|'.
		'd736|p-9521|telco|sl74|ktouch|m4u\/|me702|8325rc|kddi|phone|lg |'.
		'sonyericsson|samsung|240x|x320vx10|nokia|sony cmd|motorola|'.
		'up.browser|up.link|mmp|symbian|smartphone|midp|wap|vodafone|o2|'.
		'pocket|kindle|silk|hpwos|mobile|psp|treo)/', $user_agent))
	{
		return 3; // Mobile browser detected by User Agent signature
	}

	if(in_array(substr($user_agent,0,4),
		Array("1207", "3gso", "4thp", "501i", "502i", "503i", "504i", "505i", "506i",
			  "6310", "6590", "770s", "802s", "a wa", "abac", "acer", "acoo", "acs-",
			  "aiko", "airn", "alav", "alca", "alco", "amoi", "anex", "anny", "anyw",
			  "aptu", "arch", "argo", "aste", "asus", "attw", "au-m", "audi", "aur ",
			  "aus ", "avan", "beck", "bell", "benq", "bilb", "bird", "blac", "blaz",
			  "brew", "brvw", "bumb", "bw-n", "bw-u", "c55/", "capi", "ccwa", "cdm-",
			  "cell", "chtm", "cldc", "cmd-", "cond", "craw", "dait", "dall", "dang",
			  "dbte", "dc-s", "devi", "dica", "dmob", "doco", "dopo", "ds-d", "ds12",
			  "el49", "elai", "eml2", "emul", "eric", "erk0", "esl8", "ez40", "ez60",
			  "ez70", "ezos", "ezwa", "ezze", "fake", "fetc", "fly-", "fly_", "g-mo",
			  "g1 u", "g560", "gene", "gf-5", "go.w", "good", "grad", "grun", "haie",
			  "hcit", "hd-m", "hd-p", "hd-t", "hei-", "hiba", "hipt", "hita", "hp i",
			  "hpip", "hs-c", "htc ", "htc-", "htc_", "htca", "htcg", "htcp", "htcs",
			  "htct", "http", "huaw", "hutc", "i-20", "i-go", "i-ma", "i230", "iac",
			  "iac-", "iac/", "ibro", "idea", "ig01", "ikom", "im1k", "inno", "ipaq",
			  "iris", "jata", "java", "jbro", "jemu", "jigs", "kddi", "keji", "kgt",
			  "kgt/", "klon", "kpt ", "kwc-", "kyoc", "kyok", "leno", "lexi", "lg g",
			  "lg-a", "lg-b", "lg-c", "lg-d", "lg-f", "lg-g", "lg-k", "lg-l", "lg-m",
			  "lg-o", "lg-p", "lg-s", "lg-t", "lg-u", "lg-w", "lg/k", "lg/l", "lg/u",
			  "lg50", "lg54", "lge-", "lge/", "libw", "lynx", "m-cr", "m1-w", "m3ga",
			  "m50/", "mate", "maui", "maxo", "mc01", "mc21", "mcca", "medi", "merc",
			  "meri", "midp", "mio8", "mioa", "mits", "mmef", "mo01", "mo02", "mobi",
			  "mode", "modo", "mot ", "mot-", "moto", "motv", "mozz", "mt50", "mtp1",
			  "mtv ", "mwbp", "mywa", "n100", "n101", "n102", "n202", "n203", "n300",
			  "n302", "n500", "n502", "n505", "n700", "n701", "n710", "nec-", "nem-",
			  "neon", "netf", "newg", "newt", "nok6", "noki", "nzph", "o2 x", "o2-x",
			  "o2im", "opti", "opwv", "oran", "owg1", "p800", "palm", "pana", "pand",
			  "pant", "pdxg", "pg-1", "pg-2", "pg-3", "pg-6", "pg-8", "pg-c", "pg13",
			  "phil", "pire", "play", "pluc", "pn-2", "pock", "port", "pose", "prox",
			  "psio", "pt-g", "qa-a", "qc-2", "qc-3", "qc-5", "qc-7", "qc07", "qc12",
			  "qc21", "qc32", "qc60", "qci-", "qtek", "qwap", "r380", "r600", "raks",
			  "rim9", "rove", "rozo", "s55/", "sage", "sama", "samm", "sams", "sany",
			  "sava", "sc01", "sch-", "scoo", "scp-", "sdk/", "se47", "sec-", "sec0",
			  "sec1", "semc", "send", "seri", "sgh-", "shar", "sie-", "siem", "sk-0",
			  "sl45", "slid", "smal", "smar", "smb3", "smit", "smt5", "soft", "sony",
			  "sp01", "sph-", "spv ", "spv-", "sy01", "symb", "t-mo", "t218", "t250",
			  "t600", "t610", "t618", "tagt", "talk", "tcl-", "tdg-", "teli", "telm",
			  "tim-", "topl", "tosh", "treo", "ts70", "tsm-", "tsm3", "tsm5", "tx-9",
			  "up.b", "upg1", "upsi", "utst", "v400", "v750", "veri", "virg", "vite",
			  "vk-v", "vk40", "vk50", "vk52", "vk53", "vm40", "voda", "vulc", "vx52",
			  "vx53", "vx60", "vx61", "vx70", "vx80", "vx81", "vx83", "vx85", "vx98",
			  "w3c ", "w3c-", "wap-", "wapa", "wapi", "wapj", "wapm", "wapp", "wapr",
			  "waps", "wapt", "wapu", "wapv", "wapy", "webc", "whit", "wig ", "winc",
			  "winw", "wmlb", "wonu", "x700", "xda-", "xda2", "xdag", "yas-", "your",
			  "zeto", "zte-")))
	{
		return 4; // Mobile browser detected by User Agent signature
	}

	return false; // Mobile browser not found
}

/**
 * Check if user is using IE 8
 * @intellisense
 */
function isIE8()
{
	$matches = "";
	preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches);
	return (count($matches)>1 && $matches[1]<=8);
}

/**
 * Check if the client application's part is run on a mobile device
 * @intellisense
 */
function mobileDeviceDetected()
{
	return false;
}

/**
 * Check if the client application's part is run on a mobile device
 * @return Boolean
 */
function detectMobileDevice()
{
	return false;
}

function IsMobile()
{
	return detectMobileDevice();
}

/**
 * GetPageLayout
 * Return reference to layout object by table name, page type and section (or tab) name
 * @param {string} tableName				the short table name (may be empty)
 * @param {string} pageType					the page's type
 * @param {string} suffixName (optional) 	It could contain a section/tab name or a pages layout's suffix (eg 'success')
 * @return {reference} 						a reference to the layout object
 */
function & GetPageLayout($table, $page, $suffixName = '')
{
	$shortTableName = GetTableURL($table);
	global $page_layouts, $arrCustomPages, $all_page_layouts, $pd_pages;

	// try open old layout first
	$layoutName = ($shortTableName != '' ? $shortTableName.'_' : '').$page.($suffixName != '' ? '_'.$suffixName : '');
	$oldLayoutName = $layoutName;
	if( $shortTableName == GLOBAL_PAGES_SHORT )
		$oldLayoutName = $page;
	if( $arrCustomPages[ $oldLayoutName . ".htm" ] /*||  isAdminPage( $shortTableName ) */) {
		$layout = $page_layouts[ $oldLayoutName ];
		if($layout)
		{
			if(postvalue("pdf"))
			{
				$layout->style = $layout->pdfStyle();
			}
		}
		return $layout;
	}
	//	find and return new layout
	$shortTableName = $shortTableName == "" ? GLOBAL_PAGES_SHORT : $shortTableName;
	$pdLayoutName = $shortTableName . '_' .$page;
	if( isset( $all_page_layouts[$pdLayoutName] ))
		return $all_page_layouts[$pdLayoutName];

	importPageOptions( $table, $page );
	if( !isset( $pd_pages[ $table ] ) || !isset( $pd_pages[ $table ][ $page ] ) ) {
		return null;
	}

	global $bsProjectTheme, $bsProjectSize, $styleOverrides;

	$stylepath = "";
	$theme = $bsProjectTheme;
	$size = $bsProjectSize;
	$customSettings = false;
	$override = $styleOverrides[ $table . "_" . $page ];
	if( !$override && $table == GLOBAL_PAGES ) {
		$override = $styleOverrides[ "_" . $page ];
	}
	if( $override ) {
		$theme = $override["theme"];
		$size = $override["size"];
		$stylepath = $override["path"];
		$customSettings = true;
	}
	$layout  = new PDLayout(
			$shortTableName,
			$pd_pages[ $table ][ $page ],
			$theme,
			$size,
			$stylepath,
			$customSettings );
	$all_page_layouts[ $shortTableName."_".$page ] = $layout;
	return $layout;
}

function & getLayoutByFilename( $filename ) {
	global $page_layouts, $arrCustomPages, $all_page_layouts;
	if( isset( $all_page_layouts[$filename] ))
		return $all_page_layouts[$filename];

	$oldFileName = $filename;
	if( substr($filename, 0, 8 ) == ".global_" )
		$oldFileName = substr( $filename, 8 );
	return $page_layouts[$oldFileName];
}

/**
 * Check if the mobile template is set
 * @param String templateFileName
 * @return Boolean
 */
function isPageLayoutMobile( $templateFileName )
{
	return false;
}

/**
 * @intellisense
 */
function extractStyle($str)
{
	$pos = my_stripos($str,'style="',0);
	$quot = '"';
	if($pos === false)
	{
		$pos = my_stripos($str,'style=\'',0);
		$quot = '\'';
	}
	if($pos === false)
		return;
	$pos1 = strpos($str,$quot, $pos+7);
	if($pos1 === false)
		return "";
	return substr($str, $pos+7, $pos1-$pos-7);
}

/**
 * @intellisense
 */
function injectStyle($str, $style)
{
	$pos = my_stripos($str,'style="',0);
	$quot = '"';
	if($pos === false)
	{
		$pos = my_stripos($str,'style=\'',0);
		$quot = '\'';
	}
	if($pos === false)
		return $str.' style="'.$style.'"';
	return substr($str,0, $pos+7).$style.";".substr($str, $pos+7);
}

/**
 * A number string of a particular length
 * @param Number length
 * @return String
 */
function generateUserCode($length)
{
	$code = "";
	for($i = 0; $i < $length; $i++)
	{
		$code.= rand(0, 9);
	}

	return $code;
}

/**
 * @intellisense
 */
function generatePassword($length)
{
	$password="";
	for($i=0;$i<$length;$i++)
	{
		$j = rand(0,35);
		if($j<26)
			$password.= chr(ord('a')+$j);
		else
			$password.= chr(ord('0')-26+$j);
	}
	return $password;
}

function generateHex( $length ) {
	$password="";
	for($i=0;$i<$length;$i++)
	{
		$j = rand(0,15);
		if($j<10)
			$password.= chr( ord('0') + $j );
		else
			$password.= chr( ord('a') - 10 + $j );
	}
	return $password;
}

/**
 * Generate 'unique' database column or query alias
 * can't start with number
 */
function generateAlias() {
	return 'a' . generatePassword(9);
}

/**
 * @intellisense
 */
function securityCheckFileName($fileName)
{
	$maliciousStrings = array("../", "..\\");
	for($i = 0; $i < count($maliciousStrings); $i++)
	{
		while(strpos($fileName, $maliciousStrings[$i]) !== FALSE)
		{
			$fileName = str_replace($maliciousStrings, "", $fileName);
		}
	}
	return $fileName;
}

/**
 * @intellisense
 */
function getOptionsForMultiUpload($pSet, $field)
{
	if($pSet->isAbsolute($field))
		$uploadDir = $pSet->getUploadFolder($field);
	else
		$uploadDir = getabspath($pSet->getUploadFolder($field));
	$options = array(
		"max_file_size" => $pSet->getMaxFileSize($field),
		"max_totalFile_size" => $pSet->getMaxTotalFilesSize($field),
		"max_number_of_files" => $pSet->getMaxNumberOfFiles($field),
		"max_width" => $pSet->getMaxImageWidth($field),
		"max_height" => $pSet->getMaxImageHeight($field));
	if($pSet->getResizeOnUpload($field))
	{
		$options["resizeOnUpload"] = true;
		$options["max_width"] = $pSet->getNewImageSize($field);
		$options["max_height"] = $options["max_width"];
	}
	if($pSet->getCreateThumbnail($field))
	{
		$options['image_versions'] = array(
                'thumbnail' => array(
                    'max_width' => $pSet->getThumbnailSize($field),
                    'max_height' => $pSet->getThumbnailSize($field),
					'thumbnailPrefix' => $pSet->getStrThumbnail($field)
                ));
	}
    return $options;
}

/**
 * Returns MIME type by file extension.
 */
function mimeTypeByExt( $ext ) {
	$mime =& getMimeTypes();
	$ext = strtolower( $ext );
	if( $mime[ $ext ] ) {
		return $mime[ $ext ];
	}
	return "application/octet-stream";
}

function & getMimeTypes() {
	global $onDemnadVariables;
	if( $onDemnadVariables["mimeTypes"] ) {
		return $onDemnadVariables["mimeTypes"];
	}
	$mime = array();
	$mime["aac"] = "audio/aac";
	$mime["abw"] = "application/x-abiword";
	$mime["arc"] = "application/x-freearc";
	$mime["avi"] = "video/x-msvideo";
	$mime["azw"] = "application/vnd.amazon.ebook";
	$mime["bin"] = "application/octet-stream";
	$mime["bmp"] = "image/bmp";
	$mime["bz"] = "application/x-bzip";
	$mime["bz2"] = "application/x-bzip2";
	$mime["cda"] = "application/x-cdf";
	$mime["csh"] = "application/x-csh";
	$mime["css"] = "text/css";
	$mime["csv"] = "text/csv";
	$mime["doc"] = "application/msword";
	$mime["docx"] = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";
	$mime["eot"] = "application/vnd.ms-fontobject";
	$mime["epub"] = "application/epub+zip";
	$mime["gz"] = "application/gzip";
	$mime["gif"] = "image/gif";
	$mime["htm"] = "text/html";
	$mime["html"] = "text/html";
	$mime["ico"] = "image/vnd.microsoft.icon";
	$mime["ics"] = "text/calendar";
	$mime["jar"] = "application/java-archive";
	$mime["jpeg"] = "image/jpeg";
	$mime["jpg"] = "image/jpeg";
	$mime["js"] = "text/javascript";
	$mime["json"] = "application/json";
	$mime["jsonld"] = "application/ld+json";
	$mime["mid"] = "audio/midi audio/x-midi";
	$mime["midi"] = "audio/midi audio/x-midi";
	$mime["mjs"] = "text/javascript";
	$mime["mp3"] = "audio/mpeg";
	$mime["mp4"] = "video/mp4";
	$mime["m4v"] = "video/mp4";
	$mime["mpeg"] = "video/mpeg";
	$mime["mpg"] = "video/mpeg";
	$mime["mpkg"] = "application/vnd.apple.installer+xml";
	$mime["odp"] = "application/vnd.oasis.opendocument.presentation";
	$mime["ods"] = "application/vnd.oasis.opendocument.spreadsheet";
	$mime["odt"] = "application/vnd.oasis.opendocument.text";
	$mime["oga"] = "audio/ogg";
	$mime["ogv"] = "video/ogg";
	$mime["ogx"] = "application/ogg";
	$mime["opus"] = "audio/opus";
	$mime["otf"] = "font/otf";
	$mime["png"] = "image/png";
	$mime["pdf"] = "application/pdf";
	$mime["php"] = "application/x-httpd-php";
	$mime["ppt"] = "application/vnd.ms-powerpoint";
	$mime["pptx"] = "application/vnd.openxmlformats-officedocument.presentationml.presentation";
	$mime["rar"] = "application/vnd.rar";
	$mime["rtf"] = "application/rtf";
	$mime["sh"] = "application/x-sh";
	$mime["svg"] = "image/svg+xml";
	$mime["swf"] = "application/x-shockwave-flash";
	$mime["tar"] = "application/x-tar";
	$mime["tif"] = "image/tiff";
	$mime["tiff"] = "image/tiff";
	$mime["ts"] = "video/mp2t";
	$mime["ttf"] = "font/ttf";
	$mime["txt"] = "text/plain";
	$mime["vsd"] = "application/vnd.visio";
	$mime["wav"] = "audio/wav";
	$mime["wmv"] = "audio/webm";
	$mime["weba"] = "audio/webm";
	$mime["webm"] = "video/webm";
	$mime["webp"] = "image/webp";
	$mime["woff"] = "font/woff";
	$mime["woff2"] = "font/woff2";
	$mime["xhtml"] = "application/xhtml+xml";
	$mime["xls"] = "application/vnd.ms-excel";
	$mime["xlsx"] = "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet";
	$mime["xml"] = "application/xml";
	$mime["xul"] = "application/vnd.mozilla.xul+xml";
	$mime["zip"] = "application/zip";
	$mime["3gp"] = "video/3gpp";
	$mime["3g2"] = "video/3gpp2";
	$mime["7z"] = "application/x-7z-compressed";
	$mime["asf"] = "video/x-ms-asf";
	$mime["wav"] = "audio/wav";
	$mime["asp"] = "text/asp";
	$mime["flv"] = "video/flv";
	$onDemnadVariables["mimeTypes"] = &$mime;
	return $mime;
}


/**
 * DEPRECATED, use mimeTypeByExt instead. Note the dot, mimeTypeByExt doesn't accept it
 *
 * @intellisense
 */
function getContentTypeByExtension($ext)
{
	$ext = strtolower( $ext );
	if( substr($ext,0,1) != "." )
		$ext = ".".$ext;

	if($ext==".asf")
		$ctype = "video/x-ms-asf";
	elseif($ext==".avi")
		$ctype = "video/avi";
	elseif($ext==".doc")
		$ctype = "application/msword";
	elseif($ext==".zip")
		$ctype = "application/zip";
	elseif($ext==".xls")
		$ctype = "application/vnd.ms-excel";
	elseif($ext==".png")
		$ctype = "image/png";
	elseif($ext==".gif")
		$ctype = "image/gif";
	elseif($ext==".jpg" || $ext=="jpeg")
		$ctype = "image/jpeg";
	elseif($ext==".wav")
		$ctype = "audio/wav";
	elseif($ext==".mp3")
		$ctype = "audio/mpeg";
	elseif($ext==".mpg" || $ext=="mpeg")
		$ctype = "video/mpeg";
	elseif($ext==".rtf")
		$ctype = "application/rtf";
	elseif($ext==".htm" || $ext=="html")
		$ctype = "text/html";
	elseif($ext==".asp")
		$ctype = "text/asp";
	elseif($ext == ".flv")
		$ctype = "video/flv";
	elseif($ext == ".mp4" || $ext == ".m4v" )
		$ctype = "video/mp4";
	elseif($ext == ".webm")
		$ctype = "video/webm";
	elseif($ext == ".wmv")
		$ctype = "video/webm";
	elseif($ext == ".pdf")
		$ctype = "application/pdf";
	else
		$ctype = "application/octet-stream";

	return $ctype;
}

/**
 * @intellisense
 */
function getLatLngByAddr($addr)
{
	global $globalSettings;

	$apiKey = $globalSettings["apiGoogleMapsCode"];

	switch( getMapProvider() ){
		case GOOGLE_MAPS:
			$url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.rawurlencode($addr).'&sensor=false&key=' . $apiKey;
			$result = my_json_decode(myurl_get_contents($url));
			if( $result['status'] == 'OK' ) {
				return $result['results'][0]['geometry']['location'];
			}
			break;

		case OPEN_STREET_MAPS:
			$url = 'https://nominatim.openstreetmap.org/search/'.rawurlencode($addr).'?format=json&addressdetails=1&limit=1';
			$result = my_json_decode(myurl_get_contents($url));
			if( $result ) {
				$lat = $result[0]['lat'];
				if( !$lat )
					$lat = 0;
				$lng = $result[0]['lon'];
				if( !$lng )
					$lng = 0;
				return array("lat"=>$lat,"lng"=>$lng);
			}
			break;

		case BING_MAPS:
			if( !$apiKey || !$addr )
				return false;

			$url = 'https://dev.virtualearth.net/REST/v1/Locations?query='.rawurlencode( $addr ).'&output=json&key='.$apiKey;
			$result = my_json_decode(myurl_get_contents($url));
			if( $result ) {
				$lat = $result["resourceSets"][0]["resources"][0]["geocodePoints"][0]["coordinates"][0];
				if( !$lat )
					$lat = 0;
				$lng = $result["resourceSets"][0]["resources"][0]["geocodePoints"][0]["coordinates"][1];
				if( !$lng )
					$lng = 0;
				return array("lat"=>$lat,"lng"=>$lng);
			}
			break;

		case HERE_MAPS:
			$request = new HttpRequest(
				"https://geocode.search.hereapi.com/v1/geocode?apiKey=".$apiKey."&q=".rawurlencode( $addr ),
				"GET"
			);

			$ret = $request->run();
			if( !$ret["erorr"] && $ret["content"] ) {
				$data = my_json_decode( $ret["content"] );
				return array(
					"lat" => $data["items"][0]["position"]["lat"],
					"lng" => $data["items"][0]["position"]["lng"]
				);
			}
			break;

		case MAPQUEST_MAPS:
			$request = new HttpRequest(
				"http://www.mapquestapi.com/geocoding/v1/address?key=".$apiKey."&location=".rawurlencode( $addr ),
				"GET"
			);

			$ret = $request->run();
			if( !$ret["erorr"] && $ret["content"] ) {
				$data = my_json_decode( $ret["content"] );
				return array(
					"lat" => $data["results"][0]["locations"][0]["latLng"]["lat"],
					"lng" => $data["results"][0]["locations"][0]["latLng"]["lng"]
				);
			}
			break;
	}
	return false;
}

/**
 * deprecated. Used in some business templates only
 */
function isLoggedAsGuest()
{
	return Security::isGuest();
}


/**
 * @intellisense
 */
function func_Override($page)
{
	global $globalSettings;
	if(!isset($globalSettings["override"][$page]))
		return otNone;
	return $globalSettings["override"][$page];
}


/**
 * @intellisense
 */
function GetFieldType($field,$table="")
{
	global $pageObject;
	if($table != "" || !isset($pageObject))
	{
		if($table == "")
		{
			global $strTableName;
			$table = $strTableName;
		}
		$newSet = new ProjectSettings($table);
		return $newSet->getFieldType($field);
	}
	else
		return $pageObject->pSet->getFieldType($field);
}

/**
 * @intellisense
 */
function Label($field,$table="")
{
	global $pageObject;
	if($table != "" || !isset($pageObject))
	{
		if($table == "")
		{
			global $strTableName;
			$table = $strTableName;
		}
		$newSet = new ProjectSettings($table);
		$result = $newSet->label($field);
	}
	else
		$result = $pageObject->pSet->label($field);
	return $result != "" ? $result : $field;
}

/**
 * @intellisense
 */
function getIconByFileType($fileType, $sourceFileName)
{
	switch($fileType)
	{
		case "text/html":
			$fileName = "html.png";
			break;
		case "text/asp":
			$fileName = "code.png";
			break;
		case "application/msword":
		case "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
			$fileName = "doc.png";
			break;
		case "application/vnd.ms-excel":
		case "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet":
			$fileName = "xls.png";
			break;
		case "application/rtf":
			$fileName = "rtf.png";
			break;
		case "image/png":
		case "image/x-png":
			$fileName = "png.png";
			break;
		case "image/gif":
			$fileName = "gif.png";
			break;
		case "image/jpeg":
		case "image/pjpeg":
			$fileName = "jpg.png";
			break;
		case "audio/wav":
			$fileName = "wma.png";
			break;
		case "audio/mp3":
		case "audio/mpeg3":
		case "audio/mpeg":
			$fileName = "mp2.png";
			break;
		case "video/mpeg":
			$fileName = "mpeg.png";
			break;
		case "video/flv":
			$fileName = "flv.png";
			break;
		case "video/mp4":
			$fileName = "mp4.png";
			break;
		case "video/x-ms-asf":
			$fileName = "asf.png";
			break;
		case "video/webm":
		case "video/x-webm":
		case "video/avi":
			$fileName = "mpg.png";
			break;
		case "application/zip":
		case "application/x-zip-compressed":
			$fileName = "zip.png";
			break;
		default:
			$fileName = "text.png";
			$sourceFileName = strtolower( $sourceFileName );
			$dotPosition = strrpos($sourceFileName, '.');
			if($dotPosition !== false && $dotPosition < strlen($sourceFileName) - 1)
			{
				$ext = substr($sourceFileName, $dotPosition + 1);
				$icons = array();
	           	$icons['7z'] = '7z';
	        		$icons['asf'] = 'asf';
	        		$icons['asp'] = 'code';
	        		$icons['avi'] = 'mpg';
	        		$icons['chm'] = 'chm';
	        		$icons['doc'] = 'doc';
	        		$icons['docx'] = 'doc';
	        		$icons['flv'] = 'flv';
	        		$icons['gz'] = 'gz';
	        		$icons['html'] = 'html';
	        		$icons['mdb'] = 'mdb';
	        		$icons['mdbx'] = 'mdb';
	        		$icons['mp3'] = 'mp2';
	        		$icons['mp4'] = 'mp4';
	        		$icons['mpeg'] = 'mpeg';
	        		$icons['mpg'] = 'mpg';
	        		$icons['mov'] = 'mov';
	        		$icons['pdf'] = 'pdf';
	        		$icons['php'] = 'code';
	        		$icons['pps'] = 'pps';
	        		$icons['ppt'] = 'powerpoint';
	        		$icons['psd'] = 'psd';
	        		$icons['rar'] = 'rar';
	        		$icons['rtf'] = 'rtf';
	        		$icons['swf'] = 'swf';
	        		$icons['tif'] = 'tif';
	        		$icons['ttf'] = 'ttf';
	        		$icons['txt'] = 'txt';
	        		$icons['wav'] = 'wav';
	        		$icons['webm'] = 'mpg';
	        		$icons['wma'] = 'wma';
	        		$icons['wmv'] = 'emv';
	        		$icons['xls'] = 'xls';
	        		$icons['xlsx'] = 'xls';
	        		$icons['zip'] = 'zip';
				if(isset($icons[$ext]))
					$fileName = $icons[$ext].".png";
			}
	}
	return $fileName;
}

function isImageType($type)
{
	switch($type)
	{
		case "image/png":
		case "image/x-png":
		case "image/gif":
		case "image/jpeg":
		case "image/pjpeg":
			return true;
	}
	return false;
}

function initArray(&$array, $key)
{
	if(!isset($array[$key]))
	{
		$array[$key] = array();
	}
}

/**
 * GetKeysArray
 * Form aray of primary keys and their values for audit
 * @param {array} $arr array of inserting values
 * @param {bool} $searchId - find last inserted id or not
 * @return {array} array of keys and their values
 * @deprecated
 */
function GetKeysArray($arr, $pageObject, $searchId = false)
{
	$keyfields = $pageObject->pSet->GetTableKeys();
	$aKeys = array();
    if(count($keyfields))
    {
    	foreach ($keyfields as $kfield)
		{
    		if(array_key_exists($kfield, $arr))
    			$aKeys[$kfield] = $arr[$kfield];
	    }
		if(count($aKeys) == 0 && $searchId)
	    {
	    	$lastId = $pageObject->connection->getInsertedId();
	    	if($lastId > 0)
				$aKeys[$keyfields[0]] = $lastId;
	    }
    }
    return $aKeys;
}

function GetBaseScriptsForPage($isDisplayLoading, $additionalScripts = "", $customText = "")
{
	global $projectBuildKey;
	$result = "";
	$result .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/loadfirst.js?39925")."\"></script>";

	$result .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/custom_functions.js?".$projectBuildKey)."\"></script>";

	$result .= $additionalScripts;
	$result .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/lang/".getLangFileName(mlang_getcurrentlang()).".js?39925")."\"></script>";



	if( getMapProvider() == BING_MAPS )
	{
		$result .= "<script type=\"text/javascript\" src=\"https://www.bing.com/api/maps/mapcontrol?&setMkt=".getBingMapsLang()."\"></script>";
	}

	if( getMapProvider() == HERE_MAPS ) {
		// ui infoBubble styles
		$result .= '<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />';
		$result .= '<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>';
		$result .= '<script src="https://js.api.here.com/v3/3.1/mapsjs-core-legacy.js" type="text/javascript" charset="utf-8"></script>';
		$result .= '<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>';
		$result .= '<script src="https://js.api.here.com/v3/3.1/mapsjs-service-legacy.js" type="text/javascript" charset="utf-8"></script>';
		$result .= '<script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js" type="text/javascript" charset="utf-8"></script>';
		// ui infoBubble
		$result .= '<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>';
		// clustered map
		$result .= '<script src="https://js.api.here.com/v3/3.1/mapsjs-clustering.js" type="text/javascript" charset="utf-8"></script>';
		// heat map
		$result .= '<script src="https://js.api.here.com/v3/3.1/mapsjs-data.js" type="text/javascript" charset="utf-8"></script>';
	}

	if( getMapProvider() == MAPQUEST_MAPS ) {
		$result .= '<link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>';
		$result .= '<script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>';

		// clustered map
		$result .= '<script src="https://unpkg.com/leaflet.markercluster@1.0.6/dist/leaflet.markercluster.js"></script>';
		$result .= '<link type="text/css" rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.0.6/dist/MarkerCluster.css"/>';
		$result .= '<link type="text/css" rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.0.6/dist/MarkerCluster.Default.css"/>';

		//heat map
		$result .= '<script src="https://leaflet.github.io/Leaflet.heat/dist/leaflet-heat.js"></script>';
	}

	if($isDisplayLoading)
	{
		$result .= "<script type=\"text/javascript\">Runner.runLoading('".$customText."');</script>";
	}

	return $result;
}

/**
 * @param Mixed data
 * @param Bolean plainJSON (optional)	The flag indicating that the JSON's html special chars mustn't be convarted
 * @return String
 */
function printJSON($data, $returnPlainJSON = false)
{
	$rJSON = my_json_encode( $data );

	return $returnPlainJSON ? $rJSON : runner_htmlspecialchars( $rJSON );
}

/**
 * Get the value of an interval limit's custom PHP expression
 * @param String table
 * @param String field
 * @param Number idx
 * @param Boolean isLowerBound
 * @return Mixed
 */
function getIntervalLimitsExprs($table, $field, $idx, $isLowerBound)
{


}

/**
 * @deprecated
 */
function import_error_handler($errno, $errstr, $errfile, $errline)
{
	/*global $error_happened;

	$error_happened=1;*/
}
function PrepareForExcel($ret)
{
	//$ret = htmlspecialchars($str); commented for bug #6823
	if (substr($ret,0,1)== "=")
		$ret = "&#61;".substr($ret,1);
	return $ret;

}

function countTotals(&$totals, $totalsFields, $data)
{
	if( !$totalsFields ) {
		return;
	}
	for($i = 0; $i < count($totalsFields); $i ++)
	{
		if($totalsFields[$i]['totalsType'] == 'COUNT')
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]!= "");
		else if($totalsFields[$i]['viewFormat'] == "Time")
		{
			$time = GetTotalsForTime($data[$totalsFields[$i]['fName']]);
			$totals[$totalsFields[$i]['fName']]["value"] += $time[2]+$time[1]*60 + $time[0]*3600;
		}
		else
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]+ 0);

		if($totalsFields[$i]['totalsType'] == 'AVERAGE')
		{
			if(!is_null($data[$totalsFields[$i]['fName']]) && $data[$totalsFields[$i]['fName']]!=="")
				$totals[$totalsFields[$i]['fName']]['numRows']++;
		}
	}
}

function XMLNameEncode($strValue)
{
	$search=array(" ","#","'","/","\\","(",")",",","[");
	$ret=str_replace($search,"",$strValue);
	$search=array("]","+","\"","-","_","|","}","{","=");
	$ret=str_replace($search,"",$ret);
	return $ret;
}

/**
 * Get the file extention string
 * @param String fileName
 * @return String
 */
function getFileExtension($fileName)
{
	$pos = strrpos($fileName, ".");
	if( $pos === FALSE )
		return "";

	return substr($fileName, $pos + 1);
}

/**
 * Get the filename without extension
 * @param String fileName
 * @return String
 */
function getFileWoExtension($fileName)
{
	$pos = strrpos($fileName, ".");
	if( $pos === FALSE )
		return $fileName;

	return substr($fileName, 0, $pos );
}


/**
 * Get the default db connection object
 * @return Connection
 */
function getDefaultConnection()
{
	global $cman;
	return $cman->getDefault();
}

function isIOS()
{
	return stripos($_SERVER['HTTP_USER_AGENT'],"iPod") !== false
		|| stripos($_SERVER['HTTP_USER_AGENT'],"iPad") !== false
		|| stripos($_SERVER['HTTP_USER_AGENT'],"iPhone") !== false;
}


/* Get map provider google = 0, openStreetMap = 1*/
function getMapProvider(){
	return GetGlobalData("mapProvider", true);
}

function getBingMapsLang()
{
	$arrBimgMapLang = array();
	$arrBimgMapLang["Czech"] = "cs-CZ";
	$arrBimgMapLang["Danish"] = "da-DK";
	$arrBimgMapLang["Dutch"] = "nl-NL";
	$arrBimgMapLang["English"] = "en-US";
	$arrBimgMapLang["French"] = "fr-FR";
	$arrBimgMapLang["German"] = "de-DE";
	$arrBimgMapLang["Italian"] = "it-IT";
	$arrBimgMapLang["Japanese"] = "ja-JP";
	$arrBimgMapLang["Norwegian"] = "nb-NO";
	$arrBimgMapLang["Polish"] = "pl-PL";
	$arrBimgMapLang["Portugal"] = "pt-PT";
	$arrBimgMapLang["Portuguese"] = "pt-BR";
	$arrBimgMapLang["Russian"] = "ru-RU";
	$arrBimgMapLang["Spanish"] = "es-ES";
	$arrBimgMapLang["Swedish"] = "sw-SE";
	$arrBimgMapLang["Chinese"] = "zh-TW";
	$arrBimgMapLang["Hongkong"] = "zh-HK";
	if( array_key_exists( mlang_getcurrentlang(), $arrBimgMapLang ) )
		return $arrBimgMapLang[mlang_getcurrentlang()];

	return	$arrBimgMapLang["English"];
}

function getDefaultLanguage()
{
	if( strlen(@$_SESSION["language"]) == 0 && $_SERVER['HTTP_ACCEPT_LANGUAGE'] )
	{
		$arrWizardLang = array();
		$arrWizardLang[] = "Spanish";
		$arrLang = array();
		$arrLang["af"] = "Afrikaans";
		$arrLang["ar"] = "Arabic";
		$arrLang["bs"] = "Bosnian"; //?
		$arrLang["bg"] = "Bulgarian";
		$arrLang["ca"] = "Catalan";
		$arrLang["zh"] = "Chinese";// 1
		$arrLang["hr"] = "Croatian";
		$arrLang["cs"] = "Czech";
		$arrLang["da"] = "Danish";
		$arrLang["nl"] = "Dutch";
		$arrLang["en"] = "English";
		$arrLang["fa"] = "Farsi"; //?
		$arrLang["fr"] = "French";
		$arrLang["ka"] = "Georgian";
		$arrLang["de"] = "German";
		$arrLang["el"] = "Greek";
		$arrLang["he"] = "Hebrew";//?
		$arrLang["hk"] = "Hongkong";// 1
		$arrLang["hu"] = "Hungarian";
		$arrLang["id"] = "Indonesian";//?
		$arrLang["it"] = "Italian";
		$arrLang["ja"] = "Japanese";
		$arrLang["ms"] = "Malay";
		$arrLang["no"] = "Norwegian";
		$arrLang["fl"] = "Phillipines";//?
		$arrLang["pl"] = "Polish";
		$arrLang["pt"] = "Portugal"; // 2
		$arrLang["br"] = "Portuguese"; // 2
		$arrLang["ro"] = "Romanian";
		$arrLang["ru"] = "Russian";
		$arrLang["sk"] = "Slovak";
		$arrLang["es"] = "Spanish";
		$arrLang["sv"] = "Swedish";
		$arrLang["tw"] = "Taiwan";//??
		$arrLang["th"] = "Thai";
		$arrLang["tr"] = "Turkish";
		$arrLang["ur"] = "Urdu";
		$arrLang["cy"] = "Welsh";

		$http_lang = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']); //return string ex.:fr-FR,fr;q=0.8,en-US;q=0.6,en;q=0.4
		$http_lang = str_replace(";",",",$http_lang);
		$http_lang = str_replace("-",",",$http_lang);

		$langcode = array();
		$langcode = explode(",", $http_lang);

		foreach($langcode as $lang)
		{
			if( in_array($arrLang[$lang], $arrWizardLang) )
				return $arrLang[$lang];
		}
	}
	return "Spanish";
}


function xt_showpdchart($params) {
	$params["chartName"] = $params["custom1"];
	$params["pdMode"] = true;
	$params["table"] = GetTableByShort( $params["chartName"] );
	xt_showchart($params);
}

function xt_showchart($params)
{
	$chartParams = getChartParams( $params );

	echo '<div class="bs-chart" id="' . $chartParams['containerId'] . '"></div>';
	if( true || !$params["singlePage"] )
	{
		echo '<div data-runner-chart-params="' . runner_htmlspecialchars( my_json_encode( $chartParams ) ) . '"></div>';
	}
}

function getFileUrl( $params )
{
	echo GetRootPathForResources($params["custom1"]);
}

function getPdfImageObject( $params )
{
	$imagePath = GetRootPathForResources( $params["custom1"] );
	$width = $params["custom2"];
	$height = $params["custom3"];
	echo '{
		image: "'.jsreplace( GetRootPathForResources( $params["custom1"] ) ) . '",
		width: '. ( $width ? $width : 'null' ).',
		height: '. ( $height ? $height : 'null' ).'
	}';
}

function setHomePage( $url )
{
	global $globalSettings;
	$globalSettings["LandingPageType"] = 2;
	$globalSettings["LandingURL"] = $url;
}

function getHomePage()
{
	global $globalSettings;
	if( $globalSettings["LandingPageType"] == 2 )
	{
		return $globalSettings["LandingURL"];
	}

//	GetLocalLink makes any difference with GetTableLink in ASP.NET only
	if( $globalSettings["LandingPageType"] == 0 )
		return GetLocalLink("menu");

	if( $globalSettings["LandingPage"]=="" || $globalSettings["LandingPage"] == "login" || $globalSettings["LandingPage"] == "register" )
		return GetLocalLink("menu");

	if( strlen($globalSettings["LandingTable"]) )
	{
		if( !strlen( $globalSettings["LandingPageId"] ) )
			return GetLocalLink( GetTableURL($globalSettings["LandingTable"]), $globalSettings["LandingPage"] );

		return GetLocalLink( GetTableURL($globalSettings["LandingTable"]), $globalSettings["LandingPage"], "page=".$globalSettings["LandingPageId"] );
	}

	return GetLocalLink( $globalSettings["LandingPage"] );
}



function printHomeLink( $params )
{
	echo runner_htmlspecialchars( getHomePage() );
}


function setProjectLogo( $html, $lng="" )
{
	global $globalSettings;
	if(strlen($lng) == 0)
		$lng = mlang_getcurrentlang();
	$globalSettings["ProjectLogo"][$lng] = $html;
}

function getProjectLogo($lng="")
{
	global $globalSettings;
	if(strlen($lng) == 0)
		$lng = mlang_getcurrentlang();
	return $globalSettings["ProjectLogo"][$lng];
}

function printProjectLogo( $params )
{
	echo getProjectLogo(mlang_getcurrentlang());
}


function xt_jspagetitlelabel($params)
{
	echo jsreplace( _pagetitlelabel($params) );
}

function xt_pagetitlelabel($params)
{
	echo _pagetitlelabel($params);
}

function _pagetitlelabel($params)
{
	global $pageObject;

	$record = isset($params["record"]) ? $params["record"] : null;
	$settings = isset($params["settings"]) ? $params["settings"] : null;

	if( isset($params["custom2"]) )
		return $pageObject->getPageTitle( $params["custom2"], $params["custom1"] , $record, $settings );
	else
	return $pageObject->getPageTitle( $params["custom1"], "", $record, $settings );
}

function xt_label($params)
{
	echo GetFieldLabel($params["custom1"],$params["custom2"]);
}

function xt_jslabel($params)
{
	echo jsreplace( GetFieldLabel($params["custom1"],$params["custom2"]) );
}


function xt_tooltip($params)
{
	echo GetFieldToolTip( $params["custom1"], $params["custom2"] );
}

function xt_tooltipAttr($params)
{
	if( !strlen( GetFieldToolTip( $params["custom1"], $params["custom2"] ) ) ) {
		echo "data-hidden";
	}
}


function xt_custom($params)
{
	echo GetCustomLabel($params["custom1"]);
}

function xt_htmlcustom($params)
{
	echo runner_htmlspecialchars(GetCustomLabel($params["custom1"]));
}

// custom label comment length
function xt_cl_length( $params )
{
	echo strlen( trim( GetCustomLabel( $params["custom1"] ) ) );
}

function xt_caption($params)
{
	echo GetTableCaption($params["custom1"]);
}

function xt_jscaption($params)
{
	echo jsreplace( GetTableCaption($params["custom1"]) );
}


//	BuildEditControl wrapper
function xt_buildeditcontrol(&$params)
{
	$pageObj = $params["pageObj"];
	$data = $pageObj->getFieldControlsData();

	$field = $params["field"];

	if($params["mode"] == "edit")
		$mode = MODE_EDIT;
	else if($params["mode"] == "add")
		$mode = MODE_ADD;
	else if($params["mode"]=="inline_edit")
		$mode = MODE_INLINE_EDIT;
	else if($params["mode"]=="inline_add")
		$mode = MODE_INLINE_ADD;
	else
		$mode = MODE_SEARCH;

	$fieldNum = 0;
	if(@$params["fieldNum"])
		$fieldNum = $params["fieldNum"];

	$id = "";
	if(@$params["id"] !== "")
		$id = $params["id"];

	$validate = array();
	if( $params["validate"] )
		$validate = @$params["validate"];

	$additionalCtrlParams = array();
	if( $params["additionalCtrlParams"] )
		$additionalCtrlParams = @$params["additionalCtrlParams"];

	$extraParams = array();
	if( $params["extraParams"] )
		$extraParams = @$params["extraParams"];

	$pageObj->getControl($field, $id, $extraParams)->buildControl(@$params["value"], $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
}

function getArrayElementNC( &$arr, $key )
{
	if( isset( $arr[ $key ] ) )
		return $arr[ $key ];
	$keys = array_keys( $arr );
	$uKey = strtoupper( $key );
	foreach( $keys as $k )
	{
		if( strtoupper($k) == $uKey )
			return $arr[ $k ];
	}
	return null;
}

/**
 * 	This function is needed for conversion to ASP & ASP.NET
 */
function getSessionElementNC( $key )
{
	if( isset( $_SESSION[ $key ] ) )
		return $_SESSION[ $key ];
	$ukey = strtoupper( $key );
	foreach( $_SESSION as $k => $v )
	{
		if( strtoupper($k) == $ukey )
			return $v;
	}
	return null;
}



/**
 *  Returns ready-to-use additional lookup wizard WHERE expression
 *  @param String field - field name
 *  @param Object pSet - ProjectSettings object
 *  @return String
 */
function prepareLookupWhere( $field, $pSet ) {

	$where = $pSet->getLookupWhere( $field );
	if( $pSet->isLookupWhereCode( $field ) )
		return $where;

	return DB::PrepareSQL( $pSet->getLookupWhere( $field ) );
}

function verifyRecaptchaResponse( $response ) {

	$verifyUrl = "https://www.google.com/recaptcha/api/siteverify?";

	$errors = array();
	$errors["missing-input-response"] = "Codigo de seguridad no válido";
	$errors["invalid-input-response"] = "Codigo de seguridad no válido";
	$errors["missing-input-secret"] = "The secret parameter is missing";
	$errors["invalid-input-secret"] = "The secret parameter is invalid or malformed";
	$errors["bad-request"] = "The request is invalid or malformed";

	$captchaSettings = GetGlobalData("CaptchaSettings", "");

	$data = array();
	$data['secret'] = $captchaSettings["secretKey"];
	$data['response'] = $response;
	$data['remoteIp'] = $_SERVER["REMOTE_ADDR"];

	$req = array();
	foreach ($data as $key => $value) {
		$req []= $key . '=' . rawurlencode($value);
	}

	$response = myurl_get_contents($verifyUrl . implode('&', $req) );
	$answers = my_json_decode($response);

	$message = '';
	if ( $response == "" )
	{
		$success = false;
		$message = "Unable to contact reCaptcha server";
	}
	else if ( !isset($answers['success']) )
	{
		$success = false;
		$message = "Unable to contact reCaptcha server<br>" . runner_htmlspecialchars( substr( $response, 0, 100 ) );
	}
	else
	{
		$success = $answers['success'];
		//	form message
		for( $i=0; $answers['error-codes'] && $i < count( $answers['error-codes'] ); ++$i )
		{
			$code = $answers['error-codes'][$i];

			//	beautify and sanitize error messages
			if( isset( $errors[ $code ] ) )
				$answers['error-codes'][$i] = $errors[ $code ];
			else
				$answers['error-codes'][$i] = runner_htmlspecialchars( $code );

			$message = implode( '<br>', $answers['error-codes'] );
		}
	}

	return array(
		'success' => $success,
		'message' => $message
	);
}

function toSet( $arr ) {
	$ret = array();
	foreach( $arr as $v ) {
		$ret[ $v ] = true;
	}
	return $ret;
}

function _loadTablePages() {
	global $all_pages;

	if( !$all_pages ) {
		$all_pages = my_json_decode( myfile_get_contents( getabspath("include/pages/pages.json" ), "r" ) );
	}
}

function pageEnabled( $tablename, $type ) {
	global $all_pages;
	_loadTablePages();

	return isset( $all_pages[ $tablename ][ $type ] );
}

/**
 * returns list of all table pages in format
 * { pageType: pageId }
 */
function tablePages( $tablename ) {
	global $all_pages;
	_loadTablePages();

	return $all_pages[ $tablename ];
}

/**
 * returns list of all pages in format
 * { table: { pageType: pageId } }
 */
function & allTablePages() {
	global $all_pages;
	_loadTablePages();

	return $all_pages;
}



function isAdminPage( $table ) {
	return $table=="admin_rights" || $table=="admin_members" || $table=="admin_admembers";
}

function isOldCustomFile( $filename ) {
	global $arrCustomPages;
	$oldFileName = getOldTemplateFilename( $filename );
	 return !!$arrCustomPages[ $oldFileName . ".htm" ];
}

function getOldTemplateFilename( $filename ) {
	if( substr($filename, 0, 8 ) == ".global_" )
		return  substr( $filename, 8 );
	return $filename;
}

function types2pages( &$pagesByTypes ) {
	$pages = array();
	foreach( $pagesByTypes as $ptype => $pids ) {
		foreach(  $pids as $pid ) {
			$pages[$pid] = $ptype;
		}
	}
	return $pages;
}

function getMediaType() {
	global $mediaType;
	return $mediaType;
}

/**
 * @param String searchField - GoodFieldName ( field )
 */
function getListOfSuggests( $sfields, $table, $numberOfSuggests, $searchOpt, $searchFor, $searchField = '', $detailKeys = array(), $conditions = array() )
{

	$pSet = new ProjectSettings( $table, PAGE_SEARCH );
	$dataSource = getDataSource( $table, $pSet );
	$cipherer = new RunnerCipherer( $table );
	$controls = new EditControlsContainer( null, $pSet, PAGE_LIST, $cipherer );

	$response = array();
	$result = array();

	// traverse all searchable fields
	foreach( $sfields as $f )
	{
		// filter fields by type
		$fType = $pSet->getFieldType( $f );

		//	Dates???
		if( !IsCharType( $fType ) && !IsNumberType( $fType ) && !IsGuid( $fType )	|| in_array( $f, $detailKeys ) )
			continue;

		if( $searchField != '' && $searchField != GoodFieldName( $f ) )
			continue;

		$fieldControl = $controls->getControl( $f, 1 );
		$dc = $fieldControl->getSuggestCommand( $searchFor, $searchOpt, $numberOfSuggests );
		$allConditions = $conditions;
		$allConditions[] = $dc->filter;
		$dc->filter = DataCondition::_And( $allConditions );
		$qResult = $dataSource->getTotals( $dc );

		// fill $response array with the field's suggest value
		while( ( $row = $qResult->fetchNumeric() ) && count($response) < $numberOfSuggests )
		{
			$val = $cipherer->DecryptField($f, $row[0]);
			if( IsGuid( $fType ) )
				$val = substr($val, 1, -1);

			// "_" is added to conver number type to string
			$fieldControl->suggestValue("_".$val, $searchFor, $response, $row);
		}
	}

	ksort( $response, SORT_STRING );

	foreach( $response as $value => $realValue )
	{
		if( count( $result ) > $numberOfSuggests )
			break;

		$strValue = $value[0] == '_' ? substr($value, 1) : $value; // .net compatibility issue
		$strRealValue = $realValue[0] == '_' ? substr($realValue, 1) : $realValue;

		$pos = my_stripos($strValue, $searchFor, 0);

		if( $pos === FALSE )
		{
			$result[] = array("value" => runner_htmlspecialchars( $strValue ), "realValue" => $strRealValue);
		}
		else
		{
			$highlightedValue = runner_htmlspecialchars( substr($strValue, 0, $pos) )."<b>".runner_htmlspecialchars( substr($strValue, $pos, strlen($searchFor)) )."</b>"
				.runner_htmlspecialchars( substr($strValue, $pos + strlen($searchFor)) );

			$result[] = array("value" => $highlightedValue, "realValue" => $strRealValue);
		}
	}

	return $result;
}

function IsEmptyRequest( $allowedKeys = array() ) {
	if( 0 != count( $_POST ) ) {
		return false;
	}
	$allowedKeys[ "menuItemId" ] = true;
	$allowedKeys[ "page" ] = true;
	$allowedKeys[ "mastertable" ] = true;
	$hasExtraKeys = false;
	$mkeyLength = 9;
	foreach( $_GET as $key => $value ) {
		if( $allowedKeys[ $key ] ) {
			continue;
		}
		if( substr( $key, 0, $mkeyLength ) == "masterkey" && (int)substr( $key,$mkeyLength ) > 0 ) {
			continue;
		}
		$hasExtraKeys = true;
		break;
	}

	if( $hasExtraKeys )
		return false;
	return true;
}

/**
 * @param String key
 * @return Boolean
 */
function IsSetKeyInRequest( $key ) {
	return isset( $_POST[ $key ] ) || isset( $_GET[ $key ] );
}


/**
 * adds $arr elements as keys to $assocArray
 * returns $assocArray
 */
function addToAssocArray( $assocArray, $arr ) {
	foreach( $arr as $e ) {
		$assocArray[ $e ] = true;
	}
	return $assocArray;
}

function postvalue_number( $key ) {
	return (int)postvalue($key);
}

/**
 * Basic View Format doesn't need other field values. So passing of the record data can be omitted for performance reasons.
 */
function basicViewFormat( $format ) {
	return $format === FORMAT_DATE_SHORT
		|| $format === FORMAT_DATE_LONG
		|| $format === FORMAT_DATE_TIME
		|| $format === FORMAT_TIME
		|| $format === FORMAT_CURRENCY
		|| $format === FORMAT_PERCENT
		|| $format === FORMAT_LOOKUP_WIZARD
		|| $format === FORMAT_PHONE_NUMBER
		|| $format === FORMAT_NUMBER
		|| $format === FORMAT_CHECKBOX;
}

/**
 * Currently used for MultilanguageString settings. Returns actual message string
 */
function getCustomMessage( $message ) {
	if( !$message || !is_array( $message ) ) {
		return "";
	}
	if( $message["messageType"] == "Text" )
		return $message["message"];
	else
		return GetCustomLabel( $message["message"] );
}

/**
 * Returns a page the user has access to.
 */
function availablePage( $table, $pageType, $page = "" ) {
	$pSet = new ProjectSettings( $table, $pageType, $page );
	return $pSet->pageName();
}


function formatDateIntervalValue( $value, $intervalType )
{
	global $locale_info;

	$tm = array();
	$tm[0] = (int)substr( $value, 0, 4 ); // year
	$tm[1] = (int)substr( $value, 4, 2 ); // month or quarter or week
	$tm[2] = (int)substr( $value, 6, 2 ); // day
	$tm[3] = (int)substr( $value, 8, 2 ); //	hour
	$tm[4] = (int)substr( $value, 10, 2 ); // minute
	$tm[5] = 0;

	if( !$tm[0] )
		return "";

	switch( $intervalType )
	{
		case 1: // DATE_INTERVAL_YEAR
			return substr( $value, 0, 4 );
		case 2: // DATE_INTERVAL_QUARTER
			return $tm[0]."/Q".$tm[1];
		case 3: // DATE_INTERVAL_MONTH
			return @$locale_info[ "LOCALE_SABBREVMONTHNAME".$tm[1] ]." ".$tm[0];
		case 4: // DATE_INTERVAL_WEEK
			$dates = getDatesByWeek( $tm[1] + 1, $tm[0] );
			return format_shortdate( db2time( $dates[0] ) ) . ' - ' . format_shortdate( db2time( $dates[1] ) );
		case 5: // DATE_INTERVAL_DAY
			return format_shortdate( $tm );
		case 6: // DATE_INTERVAL_HOUR
			$tm[4] = 0;
			$tm[5] = 0;
			return str_format_datetime( $tm );
		case 7: // DATE_INTERVAL_MINUTE
			$tm[5] = 0;
			return str_format_datetime( $tm );
		default:
			return str_format_datetime( $tm );
	}
}

/**
 * @return Boolean
 */
function pageTypeShowsData( $pageType ) {
	return $pageType == "list"
	  || $pageType == "report"
	  || $pageType == "chart"
	  || $pageType == "view"
	  || $pageType == "export"
	  || $pageType == "edit"
	  || $pageType == "print"
	  || $pageType == "rprint"
	  || $pageType == "masterlist"
	  || $pageType == "masterprint"
	  || $pageType == "userinfo";
}

/**
 * @return Boolean
 */
function pageTypeInputsData( $pageType ) {
	return $pageType == "add"
	  || $pageType == "edit"
	  || $pageType == "search"
	  || $pageType == "register"
	  || $pageType == "login"
	  || $pageType == "userinfo";
}

function base64_encode_url( $str ) {
	return str_replace( array( '+', '/', '='), array('-', '_', ''), base64_encode( $str ) );
}

function base64_encode_url_binary( $bin ) {
	return str_replace( array( '+', '/', '='), array('-', '_', ''), base64_encode_binary( $bin ) );
}

function base64_decode_url( $str ) {
	//	pad with =
	while( strlen($str) % 4 !== 0 ) {
		$str .= "=";
	}
	$ret = base64_decode( str_replace( array('-', '_'), array( '+', '/' ), $str ) );
	return $ret;
}

function base64_decode_url_binary( $str ) {
	//	pad with =
	while( strlen($str) % 4 !== 0 ) {
		$str .= "=";
	}
	$ret = base64_decode_binary( str_replace( array('-', '_'), array( '+', '/' ), $str ) );
	return $ret;
}

function jwt_encode( $payload, $duration = 10 ) {

	if( !$payload["exp"] ) {
		$payload["exp"] = time() + $duration;
	}
	$header64 = base64_encode_url( my_json_encode( array('typ' => 'JWT', 'alg' => 'HS256') ) );
	$payload64 = base64_encode_url( my_json_encode( $payload) );
	$signature = hash_hmac_sha256($header64 . "." . $payload64, GetGlobalData("jwtSecret"), true);
	$base64UrlSignature = base64_encode_url_binary( $signature );
	return $header64 . "." . $payload64 . "." . $base64UrlSignature;
}

function jwt_verify_decode( $jwt ) {
	$parts = explode('.', $jwt);
	if( count( $parts) != 3 )
		return false;
	$signature = $parts[2];
	//	compare encoded strings. Binary string comparison fails in .NET
	if( base64_encode_url_binary( hash_hmac_sha256( $parts[0] . "." . $parts[1], GetGlobalData("jwtSecret"), true ) ) !== $signature )
		return false;
	$ret = my_json_decode( base64_decode_url( $parts[1] ) );
	if( !is_array( $ret ) )
		return false;

	//	verify expiration
	if( !$ret[ "exp" ] || $ret[ "exp" ] <= time() )
		return false;

	// verify target host
	if( !$ret[ "host" ] || strtoupper( $ret[ "host" ] ) !== strtoupper( projectHost() ) )
		return false;

	return $ret;
}

/**
 * returns http or https
 */
function request_protocol() {
	return $_SERVER["HTTPS"] && $_SERVER["HTTPS"] != "off"
		? 'https'
		: 'http';
}

/**
 * Project base URL
 * Ends with /
 * May return empty string if server doesn't report it
 * @return string
 */
function projectURL() {
	return request_protocol() . "://" . projectHost() . projectPath();
}

/**
 * Site base URL
 * http://localhost:8086
 * https://www.site.com
 */
function projectOrigin() {
	return request_protocol() . "://" . projectHost();
}


function projectHost() {
	$host = $_SERVER['HTTP_X_FORWARDED_HOST'];
	if( !$host )
		$host = $_SERVER['HTTP_HOST'];
	return $host;
}

function hostFromUrl( $url ) {
	$hostStart = strpos( $url, '://' );
	if( $hostStart === false ) {
		return '';
	}
	$hostStart += 3;
	$hostEnd = strpos( $url, '/', $hostStart );
	if( $hostEnd === false ) {
		return substr( $url, $hostStart );
	}
	return substr( $url, $hostStart, $hostEnd - $hostStart );
}

function setProjectCookie( $name, $value, $expires = 0, $httpOnly = false, $sameSiteStrict = false) {

	runner_setcookie( $name, $value, $expires, projectPath(), "", isSecureProtocol(), $httpOnly, $sameSiteStrict );
}

/**
 * Returns image data usl for PNG and JPG files
 * false otherwise
 */
function imageDataUrl( $image ) {
	$imageType = SupposeImageType( $image );
	if( $imageType == "image/jpeg" || $imageType == "image/png" ) {
		return 'data:'. $imageType. ';base64,' . base64_bin2str( $image );
	}
	return false;

}

function ldap_getUrl( $address ) {
	if( strpos( $address , "://" ) !== false ) {
		return $address;
	}
	return "ldap://" . $address;
}

function ldap_getServer( $address ) {
	$pos = strpos( $address , "://" );
	if( $pos !== false ) {
		return substr( $address, $pos + 3 );
	}
	return $address;
}

/**
 * @return String "server:port"
 */
function ldap_getServerPort( $address ) {
	$server = ldap_getServer( $address );
	$portPos = strpos( $server, ':' );
	if( $portPos === false && strtolower( substr( $address, 0, 8 ) ) == "ldaps://" ) {
		$server .= ":636";
	}
	return $server;
}


/**
 * Convert domain name test.xlinesoft.com
 * return DC=test,DC=xlinesoft,DC=com
 */
function ldap_Domain2DN( $aDomain )
{
	if( strpos( $aDomain, "=" ) !== FALSE ) {
		return $aDomain;
	}
	$arrDomain = explode(".", $aDomain);
	for ($i = 0; $i < sizeof($arrDomain); $i++)
	{
		$arrDomain[$i] = "dc=".$arrDomain[$i];
	}
	return implode(',', $arrDomain);
}

function ldap_DN2Domain($dn)
{
	if( strpos( $dn, "=" ) === FALSE ) {
		return $dn;
	}
	$dom = array();
	foreach( explode(",", $dn) as $d ) {
		if( strtoupper( substr( $d, 0, 3 ) ) == "DC=" ) {
			$dom []= substr( $d, 3 );
		}
	}
	return implode('.', $dom);
}

function ldap_factory() {
	return new RunnerLdap(
		GetGlobalData( "ADServer", null )
	);
}


/**
 * @param String field - name of field set up as Lookup Wizard
 * @param ProjectSettings - object for the main table, where $field is, not the lookup table!
 * @return DataSource
 */
function getLookupDataSource( $field, $pSet )
{
	global $cman;

	$lookupTable = $pSet->getLookupTable($field);
	$lookupType = $pSet->getLookupType($field);
	if( !$lookupTable ) {
		return NULL;
	}

	if( $lookupType == LT_QUERY )
	{
		global $cman;
		$connId = $cman->byTable( $lookupTable )->connId;
	} else {
		$connId = $pSet->getNotProjectLookupTableConnId( $field );
	}
	return getTableDataSource( $lookupTable, $connId );
}

/**
 * Get DataSource for a users table
 * @return DataSource
 */
function getLoginDataSource()
{
	global $cman;
	return getTableDataSource( Security::loginTable(), $cman->getLoginConnId() );
}

/**
 * @table
 * @return DataSource
 * returns datasource for a database table or project entity
 */
function getTableDataSource( $table, $connId ) {
	global $cman;
	$connection = $cman->byId( $connId );

	require_once( getabspath( 'classes/datasource/datasource.php') );
	if( GetTableURL( $table ) && $cman->getTableConnId( $table ) == $connId ) {
		$pSet = new ProjectSettings( $table );
		return getDataSource( $table, $pSet, $connection );
	}
	return getDbTableDataSource( $table, $connId );
}

/**
 * @table
 * @return DataSource
 * returns datasource for a database table
 */
function getDbTableDataSource( $table, $connId ) {
	require_once( getabspath( 'classes/datasource/datasource.php') );
	$dbTableInfo = DB::_getTableInfo( $table, $connId );
	global $cman;
	if( $dbTableInfo ) {
		return new DataSourceDbTable( $table, $cman->byId( $connId ), $dbTableInfo );
	}
	return null;
}

function getWebDataSource( &$report ) {
	require_once( getabspath( 'classes/datasource/datasource.php') );

	$table_type = $report["table_type"];
	$table = $report['tables'][0];
	global $cman;
	$connId = $cman->getDefaultConnId();
	$connection = $cman->getDefault();
	if( $report["table_type"] == "db" ) {
		$dbTableInfo = DB::_getTableInfo( $table, $connId );
		if( $dbTableInfo ) {
			return new DataSourceWebTable( $table, $connection, $report, $dbTableInfo );
		}
	} else if( $report["table_type"] == "custom" ) {
		return new DataSourceWebSQL( $connection, $report );
	}
	return null;
}


/**
 * Returns datasource for a project entity
 */
function getDataSource( $table, $pSet = null, $connection = null ) {

	require_once( getabspath( 'classes/datasource/datasource.php') );

	if( !$pSet ) {
		$pSet = new ProjectSettings( $table );
	}
	if( !$connection ) {
		global $cman;
		$connection = $cman->byId( $pSet->getConnId() );
	}

	$type = $pSet->getEntityType();
	if( $type == titTABLE || $type == titVIEW || $type == titCHART || $type == titREPORT ) {
		return new DataSourceProjectTable( $table, $pSet, $connection  );
	}
	if( $type == titSQL || $type == titSQL_CHART || $type == titSQL_REPORT ) {
		return new DataSourceSQL( $table, $pSet, $connection  );
	}
	if( $type == titREST || $type == titREST_REPORT || $type == titREST_CHART ) {
		global $restApis;
		return new DataSourceREST( $table, $pSet,  $restApis->getConnection( $pSet->getConnId() ) );
	}
	return null;
}

function getRestConnection( $pSet ) {
	$type = $pSet->getEntityType();
	if( $type == titREST || $type == titREST_REPORT || $type == titREST_CHART ) {
		global $restApis;
		return $restApis->getConnection( $pSet->getConnId() );
	}
	return null;

}

/**
 * Tells whether the request is REST API call
 * For use within events
 * @return Boolean
 */
function inRestApi() {
	global $restApiCall;
	return isset( $restApiCall );
}

/**
 * @param Integer one of the tit... constants
 * @return Boolean
 */
function isReport( $entityType ) {
	return $entityType == titREPORT || $entityType == titSQL_REPORT || $entityType == titREST_REPORT;
}

/**
 * @param Integer one of the tit... constants
 * @return Boolean
 */
function isChart( $entityType ) {
	return $entityType == titCHART || $entityType == titSQL_CHART || $entityType == titREST_CHART;
}

/**
 * build URL with parameters
 * url?
 * @param String $url
 * @param Array $params - associative array of "name" => value
 */
function prepareUrl( $url, $params ) {
	if( !$url ) {
		return "";
	}
	if( !$params ) {
		return $url;
	}
	$body = prepareUrlQuery( $params );
	$glue = strpos( $url, "?" ) !== false
		? '&'
		: '?';
	$lastSymbol = substr( $url, strlen( $url ) - 1, 1 );
	if( $lastSymbol == '&' || $lastSymbol == '?' ) {
		$glue = "";
	}
	return $url . $glue . $body;
}

function prepareUrlQuery( $params ) {
	$data = array();
	foreach ($params as $key => $value)
    {
        if ( is_array($value) )
        {
            foreach ($value as $item)
            {
                $data[] = rawurlencode( $key ) . '=' . rawurlencode($item);
            }
        }
        else
        {
            $data[] = rawurlencode( $key ) . '=' . rawurlencode($value);
        }
    }
	return implode('&', $data);
}

function runner_json_decode( $str ) {
	return my_json_decode( $str );
}

function runner_json_encode( $str ) {
	return my_json_encode( $str );
}

function getRESTConn( $name = "" ) {
	global $restApis;
	$id = $restApis->idByName( $name );
	return $restApis->getConnection( $id );
}


/**
 * return a value from storage
 */
function storageGet( $key ) {
	if( !inRestApi() ) {
		return $_SESSION[ $key ];
	} else {
		global $restStorage;
		return $restStorage[ $key ];
	}
}

/**
 * save value in the storage
 */
function storageSet( $key, $value ) {
	if( !inRestApi() ) {
		$_SESSION[ $key ] = $value;
	} else {
		global $restStorage;
		$restStorage[ $key ] = $value;
	}
}

function storageDelete( $key ) {
	if( !inRestApi() ) {
		unset( $_SESSION[ $key ] );
	} else {
		global $restStorage;
		unset( $restStorage[ $key ] );
	}
}


function storageExists( $key ) {
	if( !inRestApi() ) {
		return isset( $_SESSION[ $key ] );
	} else {
		global $restStorage;
		return isset( $restStorage[ $key ] );
	}
}

function & storageFindOrCreate( $key, $defaultValue = array() ) {
	if( !inRestApi() ) {
		if( !isset( $_SESSION[ $key ] ) ) {
			$_SESSION[ $key ] = $defaultValue;
		}
		return $_SESSION[ $key ];
	} else {
		global $restStorage;
		if( !isset( $restStorage[ $key ] ) ) {
			$restStorage[ $key ] = $defaultValue;
		}
		return $restStorage[ $key ];
	}
}


function requestMethod() {
	return $_SERVER['REQUEST_METHOD'];
}

function isPostRequest() {
	return requestMethod() === "POST";
}

function runner_setcookie( $name, $value = "", $expires = 0, $path = "", $domain = "", $secure = false, $httpOnly = false, $sameSiteStrict = false ) {

	//	setcookie( $name, $value, $expires, $path, $domain, $secure, $httpOnly );

	$options = array();
	$options[] = $name . "=" . rawurlencode( $value ) . ";";
	$options[] = "Path=" . $path. ";";
	if( $expires ) {
		$options[] =  "Expires=" . httpDateString( $expires ). ";";
	}
	if( $httpOnly ) {
		$options[] =  "HttpOnly;";
	}
	if( $secure ) {
		$options[] =  "Secure;";
	}
	if( $sameSiteStrict ) {
		$options[] =  "SameSite=Strict;";
	}
	addHeader( "Set-Cookie: " . implode( " ", $options ) );

}

function sendEmailTemplate($toEmail, $templateFile, $data, $html = false)
{
	global $cCharset;
	$data["url"] = projectURL() ;

	if ( !isset($data["loginUrl"]) )
		$data["loginUrl"] = projectURL() . GetTableLink( "login" ) ;

	if ( !file_exists(getabspath($templateFile)) )
		return false;

	$body = myfile_get_contents(getabspath($templateFile), "r");

	$matches = findMatches( "/%[^%\W]+%/i", $body );
	for( $i = 0; $i < count( $matches ); ++$i ) {
		$m = $matches[ $i ];
		$key = substr( $m["match"], 1, strlen($m["match"]) - 2);
		$value = ''. getArrayElementNC( $data, $key );
		if( $html ) {
			$value = runner_htmlspecialchars($value);
		}
		// update the string
		$body = substr( $body, 0, $m["offset"]) . $value . substr( $body, $m["offset"] + strlen( $m["match"] ));
		// update the rest of matches
		$offsetDelta = strlen( $value ) - strlen( $m["match"] );
		for( $j = $i+1; $j < count( $matches ); ++$j ) {
			$matches[ $j ]["offset"] = $matches[ $j ]["offset"] + $offsetDelta;
		}
	}

	$subject = "";

	$templParts = splitFirstLine( $body );
	$subject = $templParts[0];
	$body = $templParts[1];

	$params = array('to' => $toEmail, 'subject' => $subject, "charset" => $cCharset);
	if($html)
		$params["htmlbody"] = $body;
	else
		$params["body"] = $body;

	return runner_mail( $params );
}

function base32symbols() {
	return array(
		'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H',
		'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P',
		'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
		'Y', 'Z', '2', '3', '4', '5', '6', '7');
}

function generateTotpSecret() {
	$table =& base32symbols();
	$ret = "";
	for( $i=0; $i < 16; ++$i ) {
		$ret .= $table[ rand(0,31) ];
	}
	return $ret;
}

/**
 * Tells whether the string is a valid TOTP secret
 * @return Boolean
 */
function validateTotpSecret( $str ) {
	if( strlen( $str ) != 16 ) {
		return false;
	}
	$table =& base32symbols();
	for( $i=0; $i < 16; ++$i ) {
		if( array_search( $str[$i], $table ) === false ) {
			return false;
		}
	}
	return true;
}

/**
 * Considers 'a@b' the shortest valid email address.
 * Not technically true, but will work for most real life applications
 * @return Boolean
 */
function validateEmail( $address ) {
	return strlen( $address ) >= 3 && strpos( $address, '@' ) !== false;
}

function normalizePhoneNumber( $number ) {
	$number = preg_replace("/[^\+\d]/", "", $number);

	if( $number[0] == "+" && strlen( $number ) > 10 )
		return $number;
	return GetGlobalData("strCounryCode", "") . $number;
}

function maskPhoneNumber( $number )
{
	$smsMaskLength = GetGlobalData("smsMaskLength", 4);

	$astrixStringLength = strlen( $number ) - $smsMaskLength;
	$number = preg_replace( "/[^+]/", "*", substr($number, 0, $astrixStringLength) ).substr($number, $astrixStringLength);

	return $number;
}

function maskEmailAddress( $address )
{
	return $address;
}

function runner_show_error($errinfo)
{
	//pepare error fields to display
	$errinfo['errstr'] = @runner_htmlspecialchars($errinfo['errstr']);
	$errinfo['url'] = @runner_htmlspecialchars($errinfo['url']);

	$sql = $errinfo['sqlStr'];
	$errinfo['sqlStr'] = @runner_htmlspecialchars(strlen($sql) < 20480 ? $sql : substr($sql, 0, 20480)."...");

	$showArgs = false;
	$debugRows = array();
	if (isset($errinfo['debugRows'])) {
		foreach ($errinfo['debugRows'] as $row) {
			$dRow = array();
			$dRow['num'] = '#' . count($debugRows);
			$dRow['path'] = $row['file'] . ':' . $row['line'];
			$dRow['func'] = $row['class'] . $row['type'] . $row['function'];
			if (isset($row['params'])) {
				$args = array();
				$showArgs = true;
				foreach ($row['params'] as $val) {
					$prepVal = strlen($val) < 4096 ? $val : substr($val, 0, 4096) . "...";
					$args[] = count($args) . '. ' . $prepVal;
				}
				$dRow['args'] = count($args) ? implode('<br/> ', $args) : 'N/A';
			}
			$debugRows[] = $dRow;
		}
		unset($errinfo['debugRows']);
	}

	// show error htm
	require_once(getabspath("include/xtempl.php"));

	$xt = new Xtempl();

	$xt->assign('showArgs', $showArgs);

	if(count($debugRows))
	{
		$xt->assign_loopsection('debugRow', $debugRows);
	}
	$xt->bulk_assign($errinfo);

	$xt->displayPartial( GetTemplateName("", "error") );
	exit(0);
}

/**
 * Return assoc array made from $values where $keys are new array keys
 * [ "id", "name" ], [ 10, "Homer" ] => array( "id" => 10, "name" => "Homer" )
 * @param Array keys
 * @param Array values
 */
function numericToAssoc( $keys, $values ) {
	$ret = array();
	foreach( $keys as $i => $k ) {
		$ret[ $k ] = $values[ $i ];
	}
	return $ret;
}

/**
 * find element in array where value is an array itself
  */
function findArrayInArray( $arr, $valueArr ) {
	foreach( $arr as $key => $value ) {
		if( count( $value ) != count( $valueArr ) ) {
			continue;
		}

		//	find out if $valueArr == $value
		$equal = true;
		foreach( $value as $k => $v ) {
			if( $valueArr[ $k ] != $v ) {
				$equal = false;
				break;
			}
		}

		if( $equal ) {
			return $key;
		}
	}
	return false;
}

/**
 * LEGACY
 * Tells if the field comes from the original main table
 * This function helps automatically exclude joined and calculated fields from Update/Insert queries.
 * We don't do that anymore, it only supports legacy logic.
 * Should return true in all dubious cases
 * @return Boolean
 */
function originalTableField( $field, $pSet ) {
	$entityType = $pSet->getEntityType();
	if( $entityType != titTABLE && $entityType != titVIEW ) {
		return true;
	}
	$fieldTable = $pSet->getOwnerTable( $field );
	return $fieldTable == $pSet->getStrOriginalTableName();
	//	the alternative could involve reading table info with DB::_getTableInfo and checking against field list.
	//	However that will not work well with aliases & small/large letters in the field names
}

/**
 * detect if specified email template send as html
 */
function isEmailTemplateUseHTML($template, $lng="")
{
	if(strlen($lng) == 0)
		$lng = mlang_getcurrentlang();

	$emailTemplates = GetGlobalData("htmlEmailTemplates", array());

	if(!array_key_exists($lng, $emailTemplates))
		return false;

	if(!is_array($emailTemplates[$lng]) || !array_key_exists($template, $emailTemplates[$lng]))
		return false;

	return !!$emailTemplates[$lng][$template];
}

/**
 * Pre-PHP8 count function. Returns 0 for non-array arguments
 * Should only be used in legacy code
 */
function pre8count( &$arr ) {
	if( !is_array( $arr ) ) {
		return 0;
	}
	return count( $arr );
}

/**
 * Escapes a string for using in LDAP filters
 */
function ldapEscape( $str ) {
	$escapeChars = array(
		",", "\\", "#", "+", "<", ">", ";", "\"", "="
	);
	$escapedChars = array(
		"\\,", "\\\\", "\\#", "\\+", "\\<", "\\>", "\\;", "\\\"", "\\="
	);
	return str_replace( $escapeChars, $escapedChars, $str );
}

/**
 * @param String table
 * Update edit format for date text fields
 */
function changeTextControlsToDate( $table ) {
	global $editTextAsDate, $tables_data;
	if( $editTextAsDate && $tables_data[ $table ] ) {
		foreach( $tables_data[ $table ] as $f => $v ) {
			if( substr( $f, 0, 1 ) == "." )
				continue;

			if( IsDateFieldType( $tables_data[ $table ][ $f ]["FieldType"] ) ) {
				foreach( $tables_data[ $table ][$f]["EditFormats"] as $pType => $format ) {
					if( $format["EditFormat"] == EDIT_FORMAT_TEXT_FIELD ) {
						$tables_data[ $table ][$f]["EditFormats"][ $pType ]["EditFormat"] = EDIT_FORMAT_DATE;
					}
				}
			}
		}
	}
}

/**
 * @return RestConnection
 */
function getOneDriveConnection() {
	$connData = array();
	$connData["connId"] = spidONEDRIVE;
	$connData["authType"] = "oauth";
	$connData["url"] = "https://graph.microsoft.com/v1.0";
	$tenant = "consumers";
	if( GetGlobalData("MicrosoftAccountType") == 1 ) {
		$tenant = GetGlobalData("MicrosoftDirectoryID");
	}
	$connData["authUrl"] = "https://login.microsoftonline.com/" . $tenant . "/oauth2/v2.0/authorize";
	$connData["tokenUrl"] = "https://login.microsoftonline.com/" . $tenant . "/oauth2/v2.0/token";

	$connData["clientId"] = GetGlobalData( "OneDriveClientID" );
	$connData["clientSecret"] = GetGlobalData( "OneDriveClientSecret" );
	$connData["scope"] = "files.readwrite offline_access";

	return new RestConnection( $connData );
}

/**
 * @return RestConnection
 */
function getGoogleDriveConnection() {
	$connData = array();
	$connData["connId"] = spidGOOGLEDRIVE;
	$connData["authType"] = "oauth";
	$connData["url"] = "https://www.googleapis.com/drive/v3/";
	$connData["authUrl"] = "https://accounts.google.com/o/oauth2/v2/auth";
	$connData["tokenUrl"] = "https://oauth2.googleapis.com/token";

	$connData["clientId"] = GetGlobalData( "GoogleDriveClientID" );
	$connData["clientSecret"] = GetGlobalData( "GoogleDriveClientSecret" );
	$connData["scope"] = "https://www.googleapis.com/auth/drive.file https://www.googleapis.com/auth/drive.photos.readonly";

	return new RestConnection( $connData );
}

/**
 * @return RestConnection
 */
function getDropboxConnection() {
	$connData = array();
	$connData["connId"] = spidDROPBOX;
	$connData["authType"] = "oauth";
	// endpoint depends
	//$connData["url"] = "";
	$connData["sendOauthClientId"] = false;
	$connData["authUrl"] = "https://www.dropbox.com/oauth2/authorize";
	$connData["tokenUrl"] = "https://api.dropboxapi.com/oauth2/token";

	$connData["clientId"] = GetGlobalData( "DropboxClientID" );
	$connData["clientSecret"] = GetGlobalData( "DropboxClientSecret" );
	$connData["scope"] = "files.content.read files.content.write files.metadata.read";

	return new RestConnection( $connData );
}


function getStorageProvider( $pSet, $field ) {
	$providerType = $pSet->fileStorageProvider( $field );
	$params = array();
	if( $providerType == stpDISK) {
		$params["absolutePath"] = $pSet->isAbsolute( $field );
		$params["path"] = $pSet->getUploadFolder( $field );
		return new DiskFileSystem( $params );
	}
	if( $providerType == stpAMAZON) {
		$params["accessKey"] = $pSet->amazonAccessKey( $field );
		$params["secretKey"] = $pSet->amazonSecretKey( $field );
		$params["bucket"] = $pSet->amazonBucket( $field );
		$params["region"] = $pSet->amazonRegion( $field );
		$params["path"] = $pSet->amazonPath( $field );
		return new S3FileSystem( $params );
	}
	if( $providerType == stpGOOGLEDRIVE) {
		$params["folder"] = $pSet->googleDriveFolder( $field );
		return new GoogleDriveFileSystem( $params );
	}
	if( $providerType == stpONEDRIVE ) {
		$params["path"] = $pSet->oneDrivePath( $field );
		$params["driveId"] = $pSet->oneDriveDrive( $field );
		return new OneDriveFileSystem( $params );
	}
	if( $providerType == stpDROPBOX ) {
		$params["path"] = $pSet->dropboxPath( $field );
		return new DropboxFileSystem( $params );
	}
	if( $providerType == stpWASABI ) {
		$params["accessKey"] = $pSet->wasabiAccessKey( $field );
		$params["secretKey"] = $pSet->wasabiSecretKey( $field );
		$params["bucket"] = $pSet->wasabiBucket( $field );
		$params["region"] = $pSet->wasabiRegion( $field );
		$params["path"] = $pSet->wasabiPath( $field );
		return new WasabiFileSystem( $params );
	}
}

/**
 * Calculate hash value for a file to be added to the link for caching purposes
 * file.php?...&filehash=<hash>
 */
function fileAttrHash( $keyLink, $size, $lastModified = 0 ) {
	global $cacheImages;
	if( !$cacheImages ) {
		return rand(0,32768);
	}
	return md5( implode("-", array( $keyLink, (string)$size, (string)$lastModified ) ) );
}

function getNotificationSettings() {
	return getSecurityOption("notifications");
}

function createNotification( &$params ) {
	require_once( getabspath( "classes/notifications.php" ) );
	$noti = new RunnerNotifications( getNotificationSettings() );
	return $noti->create( $params );
}

function addNotification( $message, $title = null, $icon = null, $url = null, $expire = null, $user = null, $provider = null ) {
	$params = array(
		"message" => $message,
		"title" => $title,
		"icon" => $icon
	);
	$params["url"] = $url;
	$params["expire"] = $expire;
	$params["user"] = $user;
	$params["provider"] = $provider;
	return createNotification( $params );
}

/**
 * @params
 * "table"
 * "pageType"
 * "page"
 * "keys" => numereic or associative array with key field values
 * "additionalParams" => array
 * "query" => string
 */
function createPageLink( $params ) {

	//	verify and try to fix table name
	$table = $params["table"];
	$shortTable = GetTableUrl( $table );
	if( $table && !$shortTable ) {
		//	probably short table name passed
		$shortTable = $table;
		$table = GetTableByShort( $shortTable );
	}

	$pageType = $params["pageType"];
	if( $pageType == "edit" || $pageType == "view" ) {
		$keyParamPrefix = "editid";
	} else if( $pageType == "add" ) {
		$keyParamPrefix = "copyid";
	}

	//	handle key fields
	if( $keyParamPrefix && $table && $params["keys"] ) {

		$pSet = new ProjectSettings( $table );
		$keys = $params["keys"];
		$keyParams = array();
		foreach( $pSet->getTableKeys() as $i => $k ) {
			if( array_key_exists( $i, $keys ) ) {
				$keyParams[ $keyParamPrefix . ( $i + 1 ) ] = $keys[ $i ];
			} elseif( array_key_exists( $k, $keys ) ) {
				$keyParams[ $keyParamPrefix . ( $i + 1 ) ] = $keys[ $k ];
			}
		}
		$keyLink = prepareUrlQuery( $keyParams );
	}

	$queryParts = array();
	$additionalParams = $params["additionalParams"];
	if( !$additionalParams ) {
		$additionalParams = array();
	}
	if( $params["page"] ) {
		$additionalParams["page"] = $params["page"];
	}
	$additionalStr = prepareUrlQuery( $params["additionalParams"] );
	if( $additionalStr ) {
		$queryParts[] = $additionalStr;
	}
	if( $keyLink ) {
		$queryParts[] = $keyLink;
	}
	if( $params["query"] ) {
		$queryParts[] = $params["query"];
	}
	if( $shortTable ) {
		$firstParam = $shortTable;
		$secondParam = $pageType;
	} else {
		$firstParam = $pageType;
		$secondParam = "";
	}
	return GetTableLink( $firstParam, $secondParam, implode( "&", $queryParts ) );
}

function makePageLink( $table, $pageType, $keys = null, $additionalParams = array() ) {
	$params = array();
	$params["table"] = $table;
	$params["pageType"] = $pageType;
	$params["keys"] = $keys;
	$params["additionalParams"] = $additionalParams;
	return createPageLink( $params );
}


/**
 * @param Array iconDesc - see IconDescriptor in TS code
 */
function getIconHTML( $iconDesc ) {
	if( !$iconDesc ) {
		return "";
	}
	if( $iconDesc["file"] ) {
		$iconType = "file";
		$html = '<img src="images/menuicons/' . rawurlencode( $iconDesc["file"] ) . '">';
	} else if( $iconDesc["glyph"] ) {
		$iconType = "text";
		$html = '<span class="glyphicon glyphicon-' . $iconDesc["glyph"] . '"></span>';
	} else if( $iconDesc["fa"] ) {
		$iconType = "text";
		$html = '<span class="fa fa-' . $iconDesc["fa"] . '"></span>';
	}
	if( $html ) {
		return '<span data-icontype="' . $iconType . '" class="r-panel-icon">' . $html . '</span> ';
	}
	return '';
}


function getPdfChartObject( $params )
{
	$params["chartName"] = $params["custom1"];
	$params["width"] = $params["custom2"];
	$params["height"] = $params["custom3"];
	$params["pdMode"] = true;
	$params["table"] = GetTableByShort( $params["chartName"] );

	$chartParams = getChartParams( $params );
	$chart = array();
	$chart["height"] = $params["height"];
	$chart["width"] = $params["width"];
	$chart["chartParams"] = $chartParams;

	echo my_json_encode( $chart );
}

function getChartParams($params) {
	$showDetails = isset( $params["showDetails"] ) ? $params["showDetails"] : true;

	$settings = new ProjectSettings(GetTableByShort($params["chartName"]));
	$refresh = $settings->getChartRefreshTime();

	$chartParams = array();
	$chartParams['showDetails'] = $showDetails;
	$chartParams['chartName'] = $params["chartName"];

	//css id identifiers are not allowed to start with a number or underscore
	$chartParams['containerId'] = "rnr".$params["chartName"].$params["id"];
	$chartParams['chartType'] = $params["ctype"];
	$chartParams['refreshTime'] = $refresh;
	$chartParams['xmlFile'] = GetTableLink("dchartdata") . '?chartname=' . $params["chartName"] . $chartPreview .
		'&ctype=' . $params["ctype"] .
		'&showDetails=' . $showDetails .
		'&' . $params["stateLink"];

	if( isset( $params["dash"] ) && $params["dash"] )
	{
		$chartParams['xmlFile'] .= '&dashChart=' . $params["dash"];
		$chartParams['dashChart'] = !!$params["dash"];
	}

	$chartParams['pageId'] = $params["id"];

	if( isset( $params["dashTName"] ) && $params["dashTName"] )
	{
		$chartParams['dashTName'] = $params["dashTName"];
		$chartParams['dashElementName'] = $params["dashElementName"];
		$chartParams['pageId'] = $params["id"];

		$chartParams['xmlFile'] .= '&dashTName=' . $params["dashTName"];
		$chartParams['xmlFile'] .= '&dashElName=' . $params["dashElementName"];
		$chartParams['xmlFile'] .= '&pageId=' . $params["id"];
		$dashSet = new ProjectSettings( $params["dashTName"] );
		$dashElement = $dashSet->getDashboardElementData( $params["dashElementName"] );
		if( $dashElement )
		{
			if( $dashElement["reload"] )
			{
				$chartParams['refreshTime'] = $dashElement["reload"];
			}
		}
	}

	if ( isset($params["refreshTime"]) )
	{
		$chartParams['refreshTime'] = $params["refreshTime"];
	}

	if( true || !$params["singlePage"] )
	{
		$chartParams["webRootPath"] = projectPath();
	}

	return $chartParams;
}

/**
 * return filename portion of a path
 * c:\xxx\aaa.pdf => 'aaa.pdf'
 * c:\xxx\aaa.pdf\ => ''
 * /usr/bin/zzz => 'zzz'
 * /usr/bin/zzz/ => ''
 * xxx => 'xxx'
 */
function runner_basename( $path ) {
	if( !$path ) {
		return '';
	}
	$delimiters = array( "\\", "/" );
	foreach( $delimiters as $d ) {
		$parts = explode( $d, $path );
		$idx = count( $parts ) - 1 ;
		$path = $idx >= 0
			? $parts[ $idx ]
			: $path;
	}
	return $path;
}


function getPdfFonts() {
	global $globalSettings;

	if ( !$globalSettings['fonts'] ) {
		importFontSettings();
	}

	$fonts = array();
	foreach( $globalSettings['fonts'] as $font ) {
		if( $font['pdf'] && $font['type'] == 0 ) {
			$fonts[] = $font;
		}
	}
	return $fonts;
}

/**
 * get first line of the string, windows or unix style
 * @return Array( <first line>, <rest of the string> )
 * when there are no line breaks, return
 * Array( "", <str> )
 */
function splitFirstLine( $str ) {
	$crPos = strpos( $str,"\n" );
	$crlfPos = strpos( $str,"\r\n" );
	if( $crlfPos !== false && $crlfPos <= $crPos ) {
		return array(
			substr( $str, 0, $crlfPos ),
			substr( $str, $crlfPos + 2 )
		);
	}
	if( $crPos !== false ) {
		return array(
			substr( $str, 0, $crPos ),
			substr( $str, $crPos + 1 )
		);
	}

	return array( "", $str );

}


?>