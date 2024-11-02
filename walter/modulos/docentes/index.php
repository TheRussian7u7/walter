<?php
// Incluir el archivo de rutas para tener acceso a las constantes
require_once($_SERVER['DOCUMENT_ROOT'] . '/walter/rutas.php');

// Iniciar la sesión
session_start();

// Incluir el encabezado
require_once(TEMPLATES_PATH . 'header.php');

// Incluir el menú para alumnos
require_once(PRIVATE_PATH . 'menus/menu_docentes.php');

// Cargar contenido basado en el parámetro 'page'
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'PERFI':
            // Incluir perfil.php cuando se selecciona 'PERFI' en el menú
            include 'perfil.php';
            break;
        case 'CUR':
            // Incluir cursos.php cuando se selecciona 'CUR' en el menú
            include 'cursos.php';
            break;
        case 'TAS':
            // Incluir tareas.php cuando se selecciona 'TAS' en el menú
            include 'tareas.php';
            break;
        case 'FOR':
            // Incluir foros.php cuando se selecciona 'FOR' en el menú
            include 'foros.php';
            break;
        case 'CAL':
            // Incluir calendario.php cuando se selecciona 'CAL' en el menú
            include 'calendario.php';
            break;
        case 'MEN':
            // Incluir mensajes.php cuando se selecciona 'MEN' en el menú
            include 'mensajes.php';
            break;
        default:
            // Cargar el contenido por defecto del home
            include 'informacion.php';
            break;
    }
} else {
    // Cargar el contenido por defecto del home
    include 'informacion.php';
}

// Incluir el pie de página
require_once(TEMPLATES_PATH . 'footer.php');
?>
