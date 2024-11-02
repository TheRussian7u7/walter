<?php
// Incluir el archivo de rutas para tener acceso a las constantes
require_once($_SERVER['DOCUMENT_ROOT'] . '/walter/rutas.php');

require_once(TEMPLATES_PATH . 'header.php');

require_once(PRIVATE_PATH . 'menus/menu_alumnos.php');
?>

<?php
if (isset($_GET['page']) && $_GET['page'] == 'PERFI') {
  // Incluir boletas.php cuando se selecciona 'notas' en el menú
  include 'perfil.php';
} else {
  // Aquí va el contenido por defecto del home
  include 'informacion.php';
  
}
?>

<?php require_once(TEMPLATES_PATH . 'footer.php'); ?>