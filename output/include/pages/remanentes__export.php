<?php
			$optionsArray = array( 'totals' => array( 'CarteraTipoId' => array( 'totalsType' => '' ),
'Seccional' => array( 'totalsType' => '' ),
'Abogado' => array( 'totalsType' => '' ),
'Fecha' => array( 'totalsType' => '' ),
'ConceptoId' => array( 'totalsType' => '' ),
'Numero' => array( 'totalsType' => '' ),
'Sancionado' => array( 'totalsType' => '' ),
'SancionadoDocumento' => array( 'totalsType' => '' ),
'Obligacion' => array( 'totalsType' => '' ),
'Intereses' => array( 'totalsType' => '' ),
'Costas' => array( 'totalsType' => '' ),
'Remanente' => array( 'totalsType' => '' ),
'SeccionalOrigen' => array( 'totalsType' => '' ),
'ProcesoOrigen' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'CarteraTipoId',
'Seccional',
'Abogado',
'Fecha',
'ConceptoId',
'Numero',
'Sancionado',
'SancionadoDocumento',
'Obligacion',
'Intereses',
'Costas',
'Remanente',
'SeccionalOrigen',
'ProcesoOrigen' ),
'exportFields' => array( 'CarteraTipoId',
'Seccional',
'Abogado',
'Fecha',
'ConceptoId',
'Numero',
'Sancionado',
'SancionadoDocumento',
'Obligacion',
'Intereses',
'Costas',
'Remanente',
'SeccionalOrigen',
'ProcesoOrigen' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'CarteraTipoId' => array( 'export_field' ),
'Seccional' => array( 'export_field1' ),
'Abogado' => array( 'export_field2' ),
'Fecha' => array( 'export_field3' ),
'ConceptoId' => array( 'export_field4' ),
'Numero' => array( 'export_field5' ),
'Sancionado' => array( 'export_field6' ),
'SancionadoDocumento' => array( 'export_field7' ),
'Obligacion' => array( 'export_field8' ),
'Intereses' => array( 'export_field9' ),
'Costas' => array( 'export_field10' ),
'Remanente' => array( 'export_field11' ),
'SeccionalOrigen' => array( 'export_field12' ),
'ProcesoOrigen' => array( 'export_field13' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ) ),
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
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => false,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
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
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'CarteraTipoId',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'Seccional',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'Abogado',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'Fecha',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'ConceptoId',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'Numero',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'Sancionado',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'SancionadoDocumento',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'Obligacion',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'Intereses',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'Costas',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'Remanente',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'SeccionalOrigen',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'ProcesoOrigen',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false,
'fileTypes' => array( 'excel' => true,
'word' => false,
'csv' => true,
'xml' => false ) );
		?>