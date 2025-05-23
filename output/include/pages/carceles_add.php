<?php
			$optionsArray = array( 'details' => array( 'dbo.ChequeosSancionados' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'dbo.Direcciones' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'master' => array( 'dbo.Ciudades' => array( 'preview' => false ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'Carcel',
'CiudadId',
'Telefono',
'Email',
'Direccion' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Carcel' => array( 'integrated_edit_field' ),
'CiudadId' => array( 'integrated_edit_field1' ),
'Telefono' => array( 'integrated_edit_field3' ),
'Email' => array( 'integrated_edit_field4' ),
'Direccion' => array( 'Direccion' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_back_list',
'add_cancel',
'snippet' ),
'top' => array( 'add_header' ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field4',
'Direccion',
'text',
'snippet1',
'text2',
'text3' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'snippet' => 'below-grid',
'add_header' => 'top',
'integrated_edit_field' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'Direccion' => 'grid',
'text' => 'grid',
'snippet1' => 'grid',
'text2' => 'grid',
'text3' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'Direccion' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'text' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'snippet1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'text2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'text3' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field4',
'Direccion' ),
'text' => array( 'text',
'text2',
'text3' ),
'snippet' => array( 'snippet',
'snippet1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field4',
'Direccion',
'text',
'snippet1',
'text2',
'text3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ) ),
'c2' => array( 'model' => 'c2',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_back_list',
'add_cancel',
'snippet' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field4',
'Direccion',
'text',
'snippet1',
'text2',
'text3' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header',
'title' => array( 'page' => 'add',
'table' => 'dbo.Carceles',
'type' => 7 ) ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'integrated_edit_field' => array( 'field' => 'Carcel',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'CiudadId',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'Telefono',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'Email',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => '{$direccion_form}',
'type' => 0 ),
'editedByRte' => false ),
'text2' => array( 'type' => 'text',
'label' => array( 'text' => '{$direccion_form2}',
'type' => 0 ),
'editedByRte' => false,
'customCSS' => '/* Put  your custom CSS code here */

:host {
  
}

' ),
'Direccion' => array( 'field' => 'Direccion',
'type' => 'integrated_edit_field',
'orientation' => 0,
'customCSS' => '/* Put  your custom CSS code here */

:host {
  color: red;
  display : none;
}
' ),
'text3' => array( 'type' => 'text',
'label' => array( 'text' => '<style>
  .calculadora-container {
    position: relative;
    display: inline-block;
  }

  .calculadora {
    display: none;
    position: absolute;
    top: 40px;
    left: 0;
    background: white;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    width: 150px; /* Ajuste para que encajen los botones */
  }

  .calculadora-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 5px;
  }

  .calculadora button {
    width: 45px;
    height: 45px;
    font-size: 18px;
    cursor: pointer;
    border: 1px solid #ccc;
    background: #f4f4f4;
    border-radius: 5px;
    text-align: center;
  }

  .calculadora button:hover {
    background: #ddd;
  }

  #numeroSeleccionado {
    width: 100px;
    text-align: center;
    font-size: 16px;
    padding: 5px;
    border: 1px solid #ccc;
    cursor: pointer;
  }
</style>
',
'type' => 0 ),
'editedByRte' => false ),
'snippet' => array( 'eventId' => 'dbo_Carceles_snippet',
'label' => array( 'text' => 'dbo_Carceles_snippet',
'type' => 0 ),
'type' => 'snippet' ),
'snippet1' => array( 'eventId' => 'Nomenclaturas_list',
'label' => array( 'text' => 'Nomenclaturas_list',
'type' => 0 ),
'type' => 'snippet' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>