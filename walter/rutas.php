<?php
// Definir la ruta raíz del proyecto
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/WALTER/');

// Definir rutas para carpetas específicas
define('PRIVATE_PATH', ROOT_PATH.'private/');
define('MODULOS_PATH', ROOT_PATH.'menus/'); // Ruta a menu alumnos, aspirantes y personal
define('PROCESOS_PATH', ROOT_PATH.'procesos/'); // Ruta a menu alumnos, aspirantes y personal
define('TEMPLATES_PATH', PRIVATE_PATH.'plantillas/'); // Ruta a header.php y footer.php

// Definir rutas adicionales
define('ASSETS_PATH', ROOT_PATH.'assets/'); // Ruta para archivos CSS, JS, imágenes, etc.
define('UPLOADS_PATH', ROOT_PATH.'uploads/'); // Ruta para archivos subidos
define('CONFIG_PATH', PRIVATE_PATH.'config/'); // Ruta para archivos de configuración adicionales
define('LIBRARY_PATH', PRIVATE_PATH.'libs/'); // Ruta para bibliotecas externas o clases personalizadas

// Otras rutas que puedes agregar
define('IMAGES_PATH', ROOT_PATH.'images/'); // Ruta para imágenes
define('CSS_PATH', ASSETS_PATH.'css/'); // Ruta para archivos CSS
define('JS_PATH', ASSETS_PATH.'js/'); // Ruta para archivos JavaScript

// Ejemplo comentado
// define('MENU_PATH', PRIVATE_PATH.'menu/');
?>