<?php
			$optionsArray = array( 'details' => array( 'dbo.ChequeosOficios' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'dbo.ChequeosSancionados' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'dbo.Devoluciones' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'master' => array( 'dbo.Seccionales' => array( 'preview' => false ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'ConceptoId',
'AbogadoId',
'DespachoId',
'Origen',
'Providencia',
'Ejecutoria',
'PrimeraCopia',
'Autentica',
'PrestaMeritoEjecutivo',
'Clara',
'Expresa',
'ActualmenteExigible',
'CompetenciaDEAJ',
'FaltaRequisitos',
'FaltaCompetencia',
'PorPrescripcion',
'SeccionalId',
'Folios',
'SeccionalIdDestino',
'Observaciones',
'Tipo',
'FechaSancion',
'Cantidad',
'Obligacion',
'Remisorio',
'CarteraTipoId',
'MinJusticia',
'Plazo',
'NaturalezaId',
'TramiteId',
'Fisico',
'Digital',
'CantidadLetras',
'ObligacionLetras',
'Dias' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'ConceptoId' => array( 'integrated_edit_field' ),
'AbogadoId' => array( 'integrated_edit_field1' ),
'DespachoId' => array( 'integrated_edit_field3' ),
'Origen' => array( 'integrated_edit_field4' ),
'Providencia' => array( 'integrated_edit_field5' ),
'Ejecutoria' => array( 'integrated_edit_field6' ),
'PrimeraCopia' => array( 'integrated_edit_field7' ),
'Autentica' => array( 'integrated_edit_field8' ),
'PrestaMeritoEjecutivo' => array( 'integrated_edit_field9' ),
'Clara' => array( 'integrated_edit_field10' ),
'Expresa' => array( 'integrated_edit_field11' ),
'ActualmenteExigible' => array( 'integrated_edit_field12' ),
'CompetenciaDEAJ' => array( 'integrated_edit_field13' ),
'FaltaRequisitos' => array( 'integrated_edit_field14' ),
'FaltaCompetencia' => array( 'integrated_edit_field15' ),
'PorPrescripcion' => array( 'integrated_edit_field16' ),
'SeccionalId' => array( 'integrated_edit_field17' ),
'Folios' => array( 'integrated_edit_field18' ),
'SeccionalIdDestino' => array( 'integrated_edit_field19' ),
'Observaciones' => array( 'integrated_edit_field20' ),
'Tipo' => array( 'integrated_edit_field22' ),
'FechaSancion' => array( 'integrated_edit_field23' ),
'Cantidad' => array( 'integrated_edit_field24' ),
'Obligacion' => array( 'integrated_edit_field25' ),
'Remisorio' => array( 'integrated_edit_field27' ),
'CarteraTipoId' => array( 'integrated_edit_field28' ),
'MinJusticia' => array( 'integrated_edit_field29' ),
'Plazo' => array( 'integrated_edit_field33' ),
'NaturalezaId' => array( 'integrated_edit_field34' ),
'TramiteId' => array( 'integrated_edit_field37' ),
'Fisico' => array( 'integrated_edit_field38' ),
'Digital' => array( 'integrated_edit_field39' ),
'CantidadLetras' => array( 'integrated_edit_field41' ),
'ObligacionLetras' => array( 'integrated_edit_field42' ),
'Dias' => array( 'integrated_edit_field2' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'edit_back_list',
'edit_close' ),
'top' => array( 'edit_header' ),
'grid' => array( 'integrated_edit_field17',
'integrated_edit_field',
'integrated_edit_field37',
'integrated_edit_field4',
'integrated_edit_field24',
'integrated_edit_field18',
'integrated_edit_field28',
'integrated_edit_field34',
'integrated_edit_field3',
'integrated_edit_field23',
'integrated_edit_field22',
'integrated_edit_field41',
'integrated_edit_field25',
'integrated_edit_field42',
'integrated_edit_field6',
'integrated_edit_field2',
'integrated_edit_field20',
'integrated_edit_field5',
'integrated_edit_field7',
'integrated_edit_field9',
'integrated_edit_field11',
'integrated_edit_field13',
'integrated_edit_field15',
'integrated_edit_field29',
'integrated_edit_field27',
'integrated_edit_field19',
'integrated_edit_field33',
'integrated_edit_field8',
'integrated_edit_field10',
'integrated_edit_field12',
'integrated_edit_field14',
'integrated_edit_field16',
'integrated_edit_field1',
'snippet',
'integrated_edit_field39',
'integrated_edit_field38' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ),
'below-grid' => array( 'save_edit',
'back_button',
'close_button' ) ),
'itemForms' => array( 'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'edit_header' => 'top',
'integrated_edit_field17' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field37' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field24' => 'grid',
'integrated_edit_field18' => 'grid',
'integrated_edit_field28' => 'grid',
'integrated_edit_field34' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field23' => 'grid',
'integrated_edit_field22' => 'grid',
'integrated_edit_field41' => 'grid',
'integrated_edit_field25' => 'grid',
'integrated_edit_field42' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field20' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field11' => 'grid',
'integrated_edit_field13' => 'grid',
'integrated_edit_field15' => 'grid',
'integrated_edit_field29' => 'grid',
'integrated_edit_field27' => 'grid',
'integrated_edit_field19' => 'grid',
'integrated_edit_field33' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field12' => 'grid',
'integrated_edit_field14' => 'grid',
'integrated_edit_field16' => 'grid',
'integrated_edit_field1' => 'grid',
'snippet' => 'grid',
'integrated_edit_field39' => 'grid',
'integrated_edit_field38' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field17' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field37' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field24' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field18' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field28' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field34' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field23' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field22' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field41' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field25' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field42' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field20' => array( 'location' => 'grid',
'cellId' => 'c8' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field13' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field29' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field27' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field19' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field33' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field12' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field16' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'snippet' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'integrated_edit_field39' => array( 'location' => 'grid',
'cellId' => 'c11' ),
'integrated_edit_field38' => array( 'location' => 'grid',
'cellId' => 'c12' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field22',
'integrated_edit_field23',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field27',
'integrated_edit_field28',
'integrated_edit_field29',
'integrated_edit_field33',
'integrated_edit_field34',
'integrated_edit_field37',
'integrated_edit_field38',
'integrated_edit_field39',
'integrated_edit_field41',
'integrated_edit_field42',
'integrated_edit_field2' ),
'snippet' => array( 'snippet' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field17',
'integrated_edit_field',
'integrated_edit_field37',
'integrated_edit_field4',
'integrated_edit_field24',
'integrated_edit_field18' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field28',
'integrated_edit_field34',
'integrated_edit_field3',
'integrated_edit_field23',
'integrated_edit_field22',
'integrated_edit_field41' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0,
1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field25',
'integrated_edit_field42' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 0 ),
'rows' => array( 2,
3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5',
'integrated_edit_field7',
'integrated_edit_field9',
'integrated_edit_field11',
'integrated_edit_field13',
'integrated_edit_field15',
'integrated_edit_field29',
'integrated_edit_field27',
'integrated_edit_field19' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6',
'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field33',
'integrated_edit_field8',
'integrated_edit_field10',
'integrated_edit_field12',
'integrated_edit_field14',
'integrated_edit_field16',
'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 0,
1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'snippet' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field39' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field38' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0,
1 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field20' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 7 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 1,
'forms' => array( 'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'edit_back_list',
'edit_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c7',
'rowspan' => 2 ),
array( 'cell' => 'c6' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c9' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c10',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c11' ),
array( 'cell' => 'c12' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8',
'colspan' => 2 ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field17',
'integrated_edit_field',
'integrated_edit_field37',
'integrated_edit_field4',
'integrated_edit_field24',
'integrated_edit_field18' ) ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field28',
'integrated_edit_field34',
'integrated_edit_field3',
'integrated_edit_field23',
'integrated_edit_field22',
'integrated_edit_field41' ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field25',
'integrated_edit_field42' ),
'align' => 'center' ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field6',
'integrated_edit_field2' ) ),
'c8' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field20' ),
'align' => 'center' ),
'c7' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5',
'integrated_edit_field7',
'integrated_edit_field9',
'integrated_edit_field11',
'integrated_edit_field13',
'integrated_edit_field15',
'integrated_edit_field29',
'integrated_edit_field27',
'integrated_edit_field19' ) ),
'c9' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field33',
'integrated_edit_field8',
'integrated_edit_field10',
'integrated_edit_field12',
'integrated_edit_field14',
'integrated_edit_field16',
'integrated_edit_field1' ) ),
'c10' => array( 'model' => 'c3',
'items' => array( 'snippet' ) ),
'c11' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field39' ) ),
'c12' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field38' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header',
'title' => array( 'page' => 'edit',
'table' => 'dbo.Chequeos',
'type' => 7 ) ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'integrated_edit_field' => array( 'field' => 'ConceptoId',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field1' => array( 'field' => 'AbogadoId',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 'DespachoId',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field4' => array( 'field' => 'Origen',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field5' => array( 'field' => 'Providencia',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'Ejecutoria',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field7' => array( 'field' => 'PrimeraCopia',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'Autentica',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'PrestaMeritoEjecutivo',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'Clara',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field11' => array( 'field' => 'Expresa',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field12' => array( 'field' => 'ActualmenteExigible',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field13' => array( 'field' => 'CompetenciaDEAJ',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field14' => array( 'field' => 'FaltaRequisitos',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field15' => array( 'field' => 'FaltaCompetencia',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field16' => array( 'field' => 'PorPrescripcion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field17' => array( 'field' => 'SeccionalId',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field18' => array( 'field' => 'Folios',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field19' => array( 'field' => 'SeccionalIdDestino',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field20' => array( 'field' => 'Observaciones',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false,
'mobileDisplay' => '' ),
'integrated_edit_field22' => array( 'field' => 'Tipo',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field23' => array( 'field' => 'FechaSancion',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field24' => array( 'field' => 'Cantidad',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field25' => array( 'field' => 'Obligacion',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field27' => array( 'field' => 'Remisorio',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field28' => array( 'field' => 'CarteraTipoId',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field29' => array( 'field' => 'MinJusticia',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field33' => array( 'field' => 'Plazo',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field34' => array( 'field' => 'NaturalezaId',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field37' => array( 'field' => 'TramiteId',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field38' => array( 'field' => 'Fisico',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field39' => array( 'field' => 'Digital',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field41' => array( 'field' => 'CantidadLetras',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field42' => array( 'field' => 'ObligacionLetras',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'Dias',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'snippet' => array( 'type' => 'snippet',
'eventId' => 'dbo_Chequeos_snippet2',
'label' => array( 'text' => 'dbo_Chequeos_snippet2',
'type' => 0 ) ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>