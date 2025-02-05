<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'changepwd_message',
'ConfirmarCambio',
'text' ),
'supertop' => array( 'image' ),
'top' => array( 'changepwd_header' ),
'grid' => array( 'oldpass_label',
'snippet_oldpass',
'newpass_label',
'snippet_newpass',
'confirm_label',
'snippet_confirmpass' ),
'footer' => array( 'changepwd_back',
'custom_confirmar_button' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'changepwd_message' => 'above-grid',
'ConfirmarCambio' => 'above-grid',
'text' => 'above-grid',
'image' => 'supertop',
'changepwd_header' => 'top',
'oldpass_label' => 'grid',
'snippet_oldpass' => 'grid',
'newpass_label' => 'grid',
'snippet_newpass' => 'grid',
'confirm_label' => 'grid',
'snippet_confirmpass' => 'grid',
'changepwd_back' => 'footer',
'custom_confirmar_button' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'oldpass_label' => array( 'oldpass_label' ),
'newpass_label' => array( 'newpass_label' ),
'confirm_label' => array( 'confirm_label' ),
'changepwd_message' => array( 'changepwd_message' ),
'changepwd_back' => array( 'changepwd_back' ),
'changepwd_header' => array( 'changepwd_header' ),
'image' => array( 'image' ),
'text' => array( 'text',
'ConfirmarCambio' ),
'snippet' => array( 'snippet_oldpass',
'snippet_newpass',
'snippet_confirmpass' ),
'custom_button' => array( 'custom_confirmar_button' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => true,
'customButtons' => array( 'Confirmar_Cambio_Contrasena' ),
'hasNotifications' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'Confirmar_Cambio_Contrasena' ) ),
'changepwd' => array( 'oldPassFieldOnPage' => false ) );
			$pageArray = array( 'id' => 'changepwd',
'type' => 'changepwd',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'changepwd-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'changepwd_message' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'ConfirmarCambio' ),
'align' => 'center' ),
'c2' => array( 'model' => 'c1',
'items' => array( 'text' ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'image' ) ),
'c' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'changepwd-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'changepwd_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'changepwd-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c5' ),
array( 'cell' => 'c6' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'oldpass_label' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'snippet_oldpass' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'newpass_label' ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'snippet_newpass' ) ),
'c5' => array( 'model' => 'c5',
'items' => array( 'confirm_label' ) ),
'c6' => array( 'model' => 'c6',
'items' => array( 'snippet_confirmpass' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'changepwd-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'changepwd_back' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'custom_confirmar_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'oldpass_label' => array( 'type' => 'oldpass_label' ),
'newpass_label' => array( 'type' => 'newpass_label' ),
'confirm_label' => array( 'type' => 'confirm_label' ),
'changepwd_message' => array( 'type' => 'changepwd_message' ),
'changepwd_back' => array( 'type' => 'changepwd_back',
'label' => array( 'type' => 0,
'text' => 'Cerrar' ) ),
'changepwd_header' => array( 'type' => 'changepwd_header' ),
'image' => array( 'type' => 'image',
'image' => array( 'image' => 'LogoCSJ.png',
'source' => 2 ) ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => 'Cambio de contraseña',
'type' => 0 ),
'editedByRte' => false,
'color' => '#ff3535',
'font-size' => '20px' ),
'ConfirmarCambio' => array( 'type' => 'text',
'label' => array( 'text' => 'La contraseña ha cambiado',
'type' => 0 ),
'editedByRte' => false,
'font-size' => '30px',
'color' => '#727272' ),
'snippet_oldpass' => array( 'eventId' => 'oldpass__snippet',
'label' => array( 'text' => 'oldpass__snippet',
'type' => 0 ),
'type' => 'snippet',
'customCSS' => '/* Put  your custom CSS code here */

:host {
  color: black;
}

.password-container {
  position: relative;
  width: 100%;
  max-width: 300px;
}

.password-input {
  width: 100%;
  padding: 10px 40px 10px 10px; /* Espacio para el ícono */
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.toggle-password {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  user-select: none;
}
' ),
'snippet_newpass' => array( 'eventId' => 'newpassl__snippet',
'label' => array( 'text' => 'newpassl__snippet',
'type' => 0 ),
'type' => 'snippet',
'customCSS' => '/* Put  your custom CSS code here */

:host {
  color: black;
}

.new-password-container {
  position: relative;
  width: 100%;
  max-width: 300px;
}

.new-password-input {
  width: 100%;
  padding: 10px 40px 10px 10px; /* Espacio para el ícono */
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.new-toggle-password {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  user-select: none;
}' ),
'snippet_confirmpass' => array( 'eventId' => 'confirmnew_pass__snippet',
'label' => array( 'text' => 'confirmnew_pass__snippet',
'type' => 0 ),
'type' => 'snippet',
'customCSS' => '/* Put  your custom CSS code here */

:host {
  color: black;
}
.confirm-new-password-container {
  position: relative;
  width: 100%;
  max-width: 300px;
}

.confirm-new-password-input {
  width: 100%;
  padding: 10px 40px 10px 10px; /* Espacio para el ícono */
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.confirm-new-toggle-password {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  user-select: none;
}' ),
'custom_confirmar_button' => array( 'eventId' => 'Confirmar_Cambio_Contrasena',
'label' => array( 'text' => 'Confirmar Cambio Contrasena',
'type' => 0 ),
'type' => 'custom_button',
'background' => '#3395ea',
'color' => '#ffffff' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>