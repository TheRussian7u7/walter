<?php
// Incluir el archivo de rutas para tener acceso a las constantes
require_once($_SERVER['DOCUMENT_ROOT'] . '/walter/rutas.php');

require_once(TEMPLATES_PATH . 'header.php');

require_once(PRIVATE_PATH . 'menus/menu_alumnos.php');
?>


<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>¡Bienvenido, <?php echo htmlspecialchars($user_data['nombre_completo']); ?>!</h2>
                    <p>Explora tu información y aprovecha nuestros recursos.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h4>Información Personal</h4>
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre Completo</th>
                        <td><?php echo htmlspecialchars($user_data['nombre_completo']); ?></td>
                    </tr>
                    <tr>
                        <th>Correo Electrónico</th>
                        <td><?php echo htmlspecialchars($user_data['correo']); ?></td>
                    </tr>
                    <tr>
                        <th>Fecha de Nacimiento</th>
                        <td><?php echo htmlspecialchars(date('d/m/Y', strtotime($user_data['fecha_nacimiento']))); ?></td>
                    </tr>
                    <tr>
                        <th>Teléfono</th>
                        <td><?php echo htmlspecialchars($user_data['telefono']); ?></td>
                    </tr>
                    <tr>
                        <th>Estado</th>
                        <td><?php echo htmlspecialchars($user_data['estado']); ?></td>
                    </tr>
                    <tr>
                        <th>Municipio</th>
                        <td><?php echo htmlspecialchars($user_data['municipio']); ?></td>
                    </tr>
                    <tr>
                        <th>Profesión</th>
                        <td><?php echo htmlspecialchars($user_data['profesion']); ?></td>
                    </tr>
                    <tr>
                        <th>Género</th>
                        <td><?php echo htmlspecialchars($user_data['genero']); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

<?php require_once(TEMPLATES_PATH . 'footer.php'); ?>