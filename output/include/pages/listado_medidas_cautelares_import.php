<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'Seccional',
'Concepto',
'Numero',
'Sancionado',
'No. Documento',
'TipoPropiedad',
'Propiedad',
'Ciudad',
'Matrícula/Placa/Registro',
'Avalúo',
'F. Embargo',
'Secuestrado',
'F. Secuestro',
'Secuestre',
'Doc. Secuestre',
'Dir. Secuestre',
'Tel. Secuestre',
'Comisión',
'Aviso Remate',
'Aprobación',
'Valor Rematado',
'Dilig. Entrega',
'Observaciones',
'CarteraTipo',
'Res. Embargo',
'F. Remate',
'Res. Remate' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Seccional' => array( 'import_field' ),
'Concepto' => array( 'import_field1' ),
'Numero' => array( 'import_field2' ),
'Sancionado' => array( 'import_field3' ),
'No. Documento' => array( 'import_field4' ),
'TipoPropiedad' => array( 'import_field5' ),
'Propiedad' => array( 'import_field6' ),
'Ciudad' => array( 'import_field7' ),
'Matrícula/Placa/Registro' => array( 'import_field8' ),
'Avalúo' => array( 'import_field9' ),
'F. Embargo' => array( 'import_field10' ),
'Secuestrado' => array( 'import_field11' ),
'F. Secuestro' => array( 'import_field12' ),
'Secuestre' => array( 'import_field13' ),
'Doc. Secuestre' => array( 'import_field14' ),
'Dir. Secuestre' => array( 'import_field15' ),
'Tel. Secuestre' => array( 'import_field16' ),
'Comisión' => array( 'import_field17' ),
'Aviso Remate' => array( 'import_field18' ),
'Aprobación' => array( 'import_field19' ),
'Valor Rematado' => array( 'import_field20' ),
'Dilig. Entrega' => array( 'import_field21' ),
'Observaciones' => array( 'import_field22' ),
'CarteraTipo' => array( 'import_field23' ),
'Res. Embargo' => array( 'import_field24' ),
'F. Remate' => array( 'import_field25' ),
'Res. Remate' => array( 'import_field26' ) ) ),
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
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25',
'import_field26' ) ),
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
'import_field17' => 'grid',
'import_field18' => 'grid',
'import_field19' => 'grid',
'import_field20' => 'grid',
'import_field21' => 'grid',
'import_field22' => 'grid',
'import_field23' => 'grid',
'import_field24' => 'grid',
'import_field25' => 'grid',
'import_field26' => 'grid' ),
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
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25',
'import_field26' ) ),
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
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25',
'import_field26' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'Seccional',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'Concepto',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'Numero',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'Sancionado',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'No. Documento',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'TipoPropiedad',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'Propiedad',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'Ciudad',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'Matrícula/Placa/Registro',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'Avalúo',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'F. Embargo',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'Secuestrado',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'F. Secuestro',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'Secuestre',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'Doc. Secuestre',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'Dir. Secuestre',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'Tel. Secuestre',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'Comisión',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'Aviso Remate',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'Aprobación',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'Valor Rematado',
'type' => 'import_field' ),
'import_field21' => array( 'field' => 'Dilig. Entrega',
'type' => 'import_field' ),
'import_field22' => array( 'field' => 'Observaciones',
'type' => 'import_field' ),
'import_field23' => array( 'field' => 'CarteraTipo',
'type' => 'import_field' ),
'import_field24' => array( 'field' => 'Res. Embargo',
'type' => 'import_field' ),
'import_field25' => array( 'field' => 'F. Remate',
'type' => 'import_field' ),
'import_field26' => array( 'field' => 'Res. Remate',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>