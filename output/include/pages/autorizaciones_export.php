<?php
			$optionsArray = array( 'totals' => array( 'ChequeoId' => array( 'totalsType' => '' ),
'Seccional' => array( 'totalsType' => '' ),
'Concepto' => array( 'totalsType' => '' ),
'Tipo' => array( 'totalsType' => '' ),
'Cantidad' => array( 'totalsType' => '' ),
'Obligacion' => array( 'totalsType' => '' ),
'Costas' => array( 'totalsType' => '' ),
'Fecha' => array( 'totalsType' => '' ),
'Competencia' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'ChequeoId',
'Fecha',
'Tipo',
'Cantidad',
'Obligacion',
'Costas',
'Competencia',
'Concepto',
'Seccional' ),
'exportFields' => array( 'Tipo',
'Cantidad',
'Obligacion',
'Costas',
'ChequeoId',
'Seccional',
'Concepto',
'Fecha',
'Competencia' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'ChequeoId' => array( 'export_field' ),
'Fecha' => array( 'export_field3' ),
'Tipo' => array( 'export_field23' ),
'Cantidad' => array( 'export_field25' ),
'Obligacion' => array( 'export_field26' ),
'Costas' => array( 'export_field27' ),
'Competencia' => array( 'export_field4' ),
'Concepto' => array( 'export_field2' ),
'Seccional' => array( 'export_field1' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field23',
'export_field25',
'export_field26',
'export_field27',
'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field23' => 'grid',
'export_field25' => 'grid',
'export_field26' => 'grid',
'export_field27' => 'grid',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field3',
'export_field23',
'export_field25',
'export_field26',
'export_field27',
'export_field4',
'export_field2',
'export_field1' ) ),
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
'word' => true,
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
'items' => array( 'export_field23',
'export_field25',
'export_field26',
'export_field27',
'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4' ) ) ),
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
'export_field' => array( 'field' => 'ChequeoId',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'Fecha',
'type' => 'export_field' ),
'export_field23' => array( 'field' => 'Tipo',
'type' => 'export_field' ),
'export_field25' => array( 'field' => 'Cantidad',
'type' => 'export_field' ),
'export_field26' => array( 'field' => 'Obligacion',
'type' => 'export_field' ),
'export_field27' => array( 'field' => 'Costas',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'Competencia',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'Concepto',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'Seccional',
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
'exportSelectFields' => false );
		?>