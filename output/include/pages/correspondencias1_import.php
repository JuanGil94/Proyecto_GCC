<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'N.Minjusticia',
'Deudor',
'Solidario',
'T.Documento',
'Documento',
'Concepto',
'N.Proceso',
'No.Radicado Origen',
'Competencia',
'F.Creación',
'F.Providencia',
'F.Ejecutoria',
'Obligacion',
'Costas',
'Intereses',
'F.Acuerdo Pago',
'Estado',
'Abogado' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'N.Minjusticia' => array( 'import_field' ),
'Deudor' => array( 'import_field1' ),
'Solidario' => array( 'import_field2' ),
'T.Documento' => array( 'import_field3' ),
'Documento' => array( 'import_field4' ),
'Concepto' => array( 'import_field5' ),
'N.Proceso' => array( 'import_field6' ),
'No.Radicado Origen' => array( 'import_field7' ),
'Competencia' => array( 'import_field8' ),
'F.Creación' => array( 'import_field9' ),
'F.Providencia' => array( 'import_field10' ),
'F.Ejecutoria' => array( 'import_field11' ),
'Obligacion' => array( 'import_field12' ),
'Costas' => array( 'import_field13' ),
'Intereses' => array( 'import_field14' ),
'F.Acuerdo Pago' => array( 'import_field15' ),
'Estado' => array( 'import_field16' ),
'Abogado' => array( 'import_field17' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'N.Minjusticia',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'Deudor',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'Solidario',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'T.Documento',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'Documento',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'Concepto',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'N.Proceso',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'No.Radicado Origen',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'Competencia',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'F.Creación',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'F.Providencia',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'F.Ejecutoria',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'Obligacion',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'Costas',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'Intereses',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'F.Acuerdo Pago',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'Estado',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'Abogado',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>