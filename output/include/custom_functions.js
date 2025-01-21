	// Execute code, then prompt the user to stay
	 /*
	window.onbeforeunload = function() {
  // This will happen before leaving the page
  //return 'Are you sure you want to leave?';
 
	// Crear el overlay
    var overlay = document.createElement("div");
    overlay.id = "overlay";
    overlay.style.position = "fixed";
    overlay.style.top = "0";
    overlay.style.left = "0";
    overlay.style.width = "100%";
    overlay.style.height = "100%";
    overlay.style.backgroundColor = "rgba(0, 0, 0, 0.5)"; // Fondo gris claro con opacidad ajustada
    overlay.style.zIndex = "9998"; // Justo debajo del spinner
    overlay.style.display = "flex";
    overlay.style.alignItems = "center";
    overlay.style.justifyContent = "center";
 
    // Añadir el overlay al body
    document.body.appendChild(overlay);
 
    // Crear el contenedor del spinner
    var container = document.createElement("div");
    container.id = "spinner-container";
    container.style.position = "relative"; // Relativo al overlay
    container.style.zIndex = "9999";
    container.style.textAlign = "center";
    container.style.fontFamily = "Arial, sans-serif"; // Para asegurar que el texto sea legible
 
    // Crear el spinner
    var spinner = document.createElement("div");
    spinner.id = "spinner";
    spinner.style.width = "80px";
    spinner.style.height = "80px";
    spinner.style.border = "8px solid rgba(255, 255, 255, 0.3)";
    spinner.style.borderRadius = "50%";
    spinner.style.borderTopColor = "#fff"; // Color blanco para que contraste con el fondo oscuro
    spinner.style.animation = "spin 1s ease-in-out infinite";
    spinner.style.margin = "0 auto";  // Centrar el spinner dentro del contenedor
 
    // Crear el texto
    var text = document.createElement("div");
    text.id = "spinner-text";
    text.style.marginTop = "10px";
    text.style.fontSize = "18px";
    text.style.color = "#fff"; // Texto blanco para que contraste con el fondo oscuro
    text.innerText = "Cargando...";
 
    // Añadir el spinner y el texto al contenedor
    container.appendChild(spinner);
    container.appendChild(text);
 
    // Añadir el contenedor al overlay
    overlay.appendChild(container);
 
    // Definir la animación de rotación del spinner
    var style = document.createElement("style");
    style.type = "text/css";
    var keyFrames = "@keyframes spin { to { transform: rotate(360deg); } }";
    style.innerHTML = keyFrames;
    document.getElementsByTagName("head")[0].appendChild(style);
 
    // Mostrar el overlay y el spinner
    document.getElementById("spinner").style.display = "block";
}
*/
 

// Place event code here.
// Use "Add Action" button to add code snippets.