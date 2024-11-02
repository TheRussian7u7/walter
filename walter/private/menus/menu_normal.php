<?php
ob_start();
session_start();
include 'private/procesos/db.php'; // Conexión a la base de datos usando PDO

// Verificamos si el formulario enviado es de registro o de login
if (isset($_POST['registro'])) {
  // --- REGISTRO DE USUARIO ---
  $correo = $_POST['correo'];
  $usuario = $_POST['usuario'];
  $tipo_rol = $_POST['tipo_rol'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $telefono = $_POST['telefono'];
  $pais = $_POST['pais'];
  $estado = $_POST['estado'];

  try {
    $sql = "INSERT INTO registros 
                    (nombre, correo, apellidos, telefono, pais, rol_elegido, 
                     nombre_usuario, fecha_nacimiento, estado, password) 
                VALUES (:nombre, :correo, :apellidos, :telefono, :pais, 
                        :rol, :usuario, :fecha_nacimiento, :estado, :password)";

    $stmt = $conn->prepare($sql);
    $stmt->execute([
      ':nombre' => $nombre,
      ':correo' => $correo,
      ':apellidos' => $apellido,
      ':telefono' => $telefono,
      ':pais' => $pais,
      ':rol' => $tipo_rol,
      ':usuario' => $usuario,
      ':fecha_nacimiento' => $fecha_nacimiento,
      ':estado' => $estado,
      ':password' => $password,
    ]);

    // Guardar datos en la sesión
    $_SESSION['usuario_id'] = $conn->lastInsertId(); // Obtener el ID del nuevo usuario
    $_SESSION['nombre'] = $nombre;
    $_SESSION['rol'] = $tipo_rol;

    $_SESSION['mensaje'] = "¡Registro exitoso! Bienvenido [$nombre] recuerde iniciar session.";
    header("Location: /walter/index.php");
    exit();
  } catch (PDOException $e) {
    echo "Error al registrar el usuario: " . $e->getMessage();
  }
} elseif (isset($_POST['login'])) {
  // --- INICIO DE SESIÓN ---
  $usuarioCorreo = $_POST['usuario_correo'];
  $password = $_POST['password'];

  try {
    $sql = "SELECT * FROM registros 
                WHERE correo = :usuario_correo OR nombre_usuario = :usuario_correo";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':usuario_correo' => $usuarioCorreo]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
      if (password_verify($password, $usuario['password'])) {
        // Guardar datos en la sesión
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['rol'] = $usuario['rol_elegido'];

        // Redirigir según el rol
        switch ($usuario['rol_elegido']) {
          case 1:
            header('Location: /walter/modulos/administrador/index.php');
            break;
          case 2:
            header('Location: /walter/modulos/docentes/index.php');
            break;
          case 3:
            header('Location: /walter/modulos/alumnos/index.php');
            break;
          default:
            $_SESSION['error'] = "Rol no reconocido.";
            header('Location: /walter/index.php');
            exit();
        }
      } else {
        $_SESSION['error'] = "Contraseña incorrecta.";
        header('Location: /walter/index.php');
        exit();
      }
    } else {
      $_SESSION['error'] = "Correo o usuario no encontrado.";
      header('Location: /walter/index.php');
      exit();
    }
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}


// Mostrar alertas de éxito o error
if (isset($_SESSION['mensaje'])) {
  echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      Swal.fire({
          title: "Éxito!",
          text: "' . $_SESSION['mensaje'] . '",
          icon: "success",
          confirmButtonText: "Cerrar"
      });
    </script>';
  unset($_SESSION['mensaje']);
}

if (isset($_SESSION['error'])) {
  echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      Swal.fire({
          title: "Error",
          text: "' . $_SESSION['error'] . '",
          icon: "error",
          confirmButtonText: "Cerrar"
      });
    </script>';
  unset($_SESSION['error']);
}

ob_end_flush();


?>




<nav class="navbar navbar-dark fixed-top" style="background-color: #1E3A8A;" aria-label="Light offcanvas navbar">
  <div class="container-fluid">

    <div class="d-flex justify-content-between w-100">
      <!-- Título del Menú con Offcanvas -->
      <a class="navbar-brand" href="#" data-bs-toggle="offcanvas" data-bs-target="#userInfoCanvas" aria-controls="userInfoCanvas">
        <img src="/walter/private/assets/images/logo.png" style="height: 40px;">
      </a>

      <!-- Botón del Menú Hamburguesa -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>

  <!-- Offcanvas del Menú -->
  <div class="offcanvas offcanvas-end text-white" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel" style="background-color: #1E3A8A;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">MENU</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?page=HOM"><i class="fas fa-home me-2"></i>Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"><i class="fas fa-info-circle me-2"></i>Login</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="fas fa-sign-in-alt"></i> Iniciar session
              </a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">
                <i class="fas fa-user-plus"></i> Registrarse
              </a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Modal para Iniciar Sesión -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #1E3A8A; color: white;">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <input type="hidden" name="login" value="1">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="loginEmail" class="form-label">Correo electrónico o usuario</label>
              <input type="text" class="form-control" id="loginEmail" name="usuario_correo" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="loginPassword" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="loginPassword" name="password" required>
            </div>
          </div>
          <button type="submit" class="btn btn-success w-100">Iniciar Sesión</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal para Registro -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #1E3A8A; color: white;">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Registrarse</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <input type="hidden" name="registro" value="1">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="registerEmail" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="registerEmail" name="correo" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="registerName" class="form-label">Nombre de usuario</label>
              <input type="text" class="form-control" id="registerName" name="usuario" maxlength="16" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="registerRole" class="form-label">Rol</label>
              <select id="registerRole" class="form-select" name="tipo_rol">
                <option value="">Seleccionar</option>
                <option value="2">Docente</option>
                <option value="3">Alumno</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label for="registerPassword" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="registerPassword" name="password" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="birthDate" class="form-label">Fecha de nacimiento</label>
              <input type="date" class="form-control" id="birthDate" name="fecha_nacimiento" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="firstName" class="form-label">Nombre(s)</label>
              <input type="text" class="form-control" id="firstName" name="nombre" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="lastName" class="form-label">Apellidos</label>
              <input type="text" class="form-control" id="lastName" name="apellido" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="phone" class="form-label">Teléfono</label>
              <input type="text" class="form-control" id="phone" name="telefono" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="country" class="form-label">País</label>
              <input type="text" class="form-control" name="pais" id="country" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="state" class="form-label">Estado</label>
              <input type="text" class="form-control" name="estado" id="state" required>
            </div>
          </div>

          <button type="submit" class="btn btn-success w-100">Registrarse</button>
        </form>

      </div>
    </div>
  </div>
</div>