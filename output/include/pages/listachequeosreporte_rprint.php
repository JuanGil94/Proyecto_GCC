<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'fields' => array( 'gridFields' => array( 'ChequeoId',
'Seccional',
'Fecha',
'Origen',
'Abogado',
'Despacho',
'Numero',
'Persuasivo',
'AbogadoId1',
'Observaciones',
'Obligacion',
'TramiteId',
'Fisico',
'Digital' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'ChequeoId' => array( 'report_grid_field' ),
'Seccional' => array( 'report_grid_field1' ),
'Fecha' => array( 'report_grid_field3' ),
'Origen' => array( 'report_grid_field5' ),
'Abogado' => array( 'report_grid_field6' ),
'Despacho' => array( 'report_grid_field7' ),
'Numero' => array( 'report_grid_field8' ),
'Persuasivo' => array( 'report_grid_field9' ),
'AbogadoId1' => array( 'report_grid_field10' ),
'Observaciones' => array( 'report_grid_field21' ),
'Obligacion' => array( 'report_grid_field26' ),
'TramiteId' => array( 'report_grid_field38' ),
'Fisico' => array( 'report_grid_field39' ),
'Digital' => array( 'report_grid_field40' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader',
'print_pdf' ),
'grid' => array( 'report_grid_field',
'report_grid_field3',
'report_grid_field5',
'report_grid_field21',
'report_grid_field26',
'report_grid_field38',
'report_grid_field39',
'report_grid_field40',
'report_grid_field1',
'report_grid_field6',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top',
'print_pdf' => 'top',
'report_grid_field' => 'grid',
'report_grid_field3' => 'grid',
'report_grid_field5' => 'grid',
'report_grid_field21' => 'grid',
'report_grid_field26' => 'grid',
'report_grid_field38' => 'grid',
'report_grid_field39' => 'grid',
'report_grid_field40' => 'grid',
'report_grid_field1' => 'grid',
'report_grid_field6' => 'grid',
'report_grid_field7' => 'grid',
'report_grid_field8' => 'grid',
'report_grid_field9' => 'grid',
'report_grid_field10' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'report_grid_field' => array( 'report_grid_field',
'report_grid_field1',
'report_grid_field3',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10',
'report_grid_field21',
'report_grid_field26',
'report_grid_field38',
'report_grid_field39',
'report_grid_field40' ),
'print_pdf' => array( 'print_pdf' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'rprint',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'newreport' => array( 'reportInfo' => array( 'groupFields' => array(  ),
'fields' => array( array( 'avg' => false,
'field' => 'ChequeoId',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Fecha',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Origen',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Observaciones',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Obligacion',
'grid' => true,
'max' => false,
'min' => false,
'sum' => true ),
array( 'avg' => false,
'field' => 'TramiteId',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Fisico',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Digital',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Seccional',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Abogado',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Despacho',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Numero',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Persuasivo',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'AbogadoId1',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ) ),
'showData' => true,
'pageSummary' => false,
'globalSummary' => true,
'crosstab' => false,
'colors' => array(  ),
'horizSummary' => false,
'layout' => 'plain',
'vertSummary' => false ) ) );
			$pageArray = array( 'id' => 'rprint',
'type' => 'rprint',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ),
'c4' => array( 'model' => 'c4',
'items' => array(  ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'print_pdf' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'report-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'report_grid_field',
'report_grid_field3',
'report_grid_field5',
'report_grid_field21',
'report_grid_field26',
'report_grid_field38',
'report_grid_field39',
'report_grid_field40',
'report_grid_field1',
'report_grid_field6',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1,
'reportInfo' => array( 'groupFields' => array(  ),
'fields' => array( array( 'avg' => false,
'field' => 'ChequeoId',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Fecha',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Origen',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Observaciones',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Obligacion',
'grid' => true,
'max' => false,
'min' => false,
'sum' => true ),
array( 'avg' => false,
'field' => 'TramiteId',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Fisico',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Digital',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Seccional',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Abogado',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Despacho',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Numero',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'Persuasivo',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'AbogadoId1',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ) ),
'showData' => true,
'pageSummary' => false,
'globalSummary' => true,
'crosstab' => false,
'colors' => array(  ),
'horizSummary' => false,
'layout' => 'plain',
'vertSummary' => false ) ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'report_grid_field' => array( 'field' => 'ChequeoId',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field1' => array( 'field' => 'Seccional',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field3' => array( 'field' => 'Fecha',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field5' => array( 'field' => 'Origen',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field6' => array( 'field' => 'Abogado',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field7' => array( 'field' => 'Despacho',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field8' => array( 'field' => 'Numero',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field9' => array( 'field' => 'Persuasivo',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field10' => array( 'field' => 'AbogadoId1',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field21' => array( 'field' => 'Observaciones',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field26' => array( 'field' => 'Obligacion',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => true ),
'report_grid_field38' => array( 'field' => 'TramiteId',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field39' => array( 'field' => 'Fisico',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field40' => array( 'field' => 'Digital',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'print_pdf' => array( 'type' => 'print_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>