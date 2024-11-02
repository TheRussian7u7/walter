<nav class="navbar navbar-dark fixed-top" style="background-color: #1E3A8A;" aria-label="Light offcanvas navbar">
  <div class="container-fluid">

    <div class="d-flex justify-content-between w-100">
      <!-- Título del Menú con Offcanvas -->
      <a class="navbar-brand" href="#" data-bs-toggle="offcanvas" data-bs-target="#userInfoCanvas" aria-controls="userInfoCanvas">
        PERFIL
      </a>

      <!-- Botón del Menú Hamburguesa -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>

  <!-- Offcanvas para Información del Usuario -->
  <div class="offcanvas offcanvas-start" id="userInfoCanvas" aria-labelledby="userInfoCanvasLabel" style="background-color: #1E3A8A; color: white;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="userInfoCanvasLabel">Perfil del Usuario</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body text-center">
      <div class="avatar-kekos mx-auto mb-3">
        <img src="https://www.habbo.es/habbo-imaging/avatarimage?user=<?php echo htmlspecialchars($nombre_usuario); ?>&direction=3&head_direction=3&gesture=sml&action=none&size=b" alt="Avatar" class="avatar-image">
      </div>

      <p class="badge">Datos personales</p>
      <p>Nombre: <?php echo htmlspecialchars($nombre_usuario); ?></p>
      <p>Rango: <?php echo htmlspecialchars($rango); ?></p>

      <hr>
      <p class="badge">Datos de trabajo</p>
      <p>Código: <?php echo htmlspecialchars($codigo_usuario); ?></p>
      <p>Misión: <?php echo htmlspecialchars($mision_actual); ?></p>
      <p>Tiempo total: <?php echo htmlspecialchars($tiempo_acumulado); ?></p>
      <p>Estatus de tiempo: <?php echo htmlspecialchars($estado_tiempo); ?></p>
    </div>
  </div>

  <!-- Offcanvas del Menú -->
  <div class="offcanvas offcanvas-end text-white" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel" style="background-color: #1E3A8A;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">MENU DE DOCENTES</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?page=HOM">
            <i class="fas fa-home me-2"></i>Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?page=CUR">
            <i class="fas fa-book-open me-2"></i>Cursos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?page=TAS">
            <i class="fas fa-tasks me-2"></i>Tareas
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?page=FOR">
            <i class="fas fa-comments me-2"></i>Foros
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?page=CAL">
            <i class="fas fa-calendar-alt me-2"></i>Calendario
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?page=MEN">
            <i class="fas fa-envelope me-2"></i>Mensajes
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">
            <i class="fas fa-user-circle me-2"></i>Perfil
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="index.php?page=CPW"><i class="fas fa-key"></i> Cambiar Contraseña</a></li>
            <li>
              <a class="dropdown-item" href="#" onclick="confirmLogout()">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  function confirmLogout() {
    Swal.fire({
      title: '¿Estás seguro?',
      text: "¿Quieres cerrar sesión?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, cerrar sesión',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirigir a logout.php
        window.location.href = '/walter/private/procesos/logout.php';
      }
    });
  }
</script>