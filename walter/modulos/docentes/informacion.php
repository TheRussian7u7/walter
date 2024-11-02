<?php
// Incluir el archivo de rutas para tener acceso a las constantes
require_once($_SERVER['DOCUMENT_ROOT'] . '/walter/rutas.php');

require_once(TEMPLATES_PATH . 'header.php');

require_once(PRIVATE_PATH . 'menus/menu_docentes.php');
?>


<!-- ALERT DE REGISTRO DE DATOS -->

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Descubre la Mejor Plataforma de Aprendizaje</h2>
                                    <p>Bienvenido a nuestra plataforma educativa, donde encontrarás herramientas interactivas y recursos diseñados para maximizar tu aprendizaje. Accede a cursos, materiales y soporte en un solo lugar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="/walter/private/assets/images/slider-dec.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Increíbles <em>Servicios y Características</em> para ti</h4>
                    <img src="/walter/private/assets/images/heading-line-dec.png" alt="">
                    <p>En nuestra plataforma, ofrecemos una colección exclusiva de herramientas y recursos para optimizar tu experiencia. Si necesitas más información sobre nuestros servicios, no dudes en visitar nuestra <a rel="nofollow" href="https://www.toocss.com/" target="_blank">página de recursos</a>.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="service-item first-service">
                    <div class="icon"><i class="fa fa-cog"></i></div>
                    <h4>Mantenimiento de Aplicaciones</h4>
                    <p>Mantenemos tus aplicaciones al día y funcionando sin problemas. La actualización continua es clave para el éxito.</p>
                    <div class="text-button">
                        <a href="#">Leer Más <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item second-service">
                    <div class="icon"><i class="fa fa-rocket"></i></div>
                    <h4>Velocidad de Aplicación Rápida</h4>
                    <p>Nuestras aplicaciones están optimizadas para ofrecer un rendimiento excepcional y velocidad insuperable.</p>
                    <div class="text-button">
                        <a href="#">Leer Más <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item third-service">
                    <div class="icon"><i class="fa fa-sitemap"></i></div>
                    <h4>Ideas de Trabajo Multi-Fluxo</h4>
                    <p>Te ayudamos a implementar múltiples flujos de trabajo para mejorar la colaboración y eficiencia en tus proyectos.</p>
                    <div class="text-button">
                        <a href="#">Leer Más <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item fourth-service">
                    <div class="icon"><i class="fa fa-headset"></i></div>
                    <h4>Soporte 24/7</h4>
                    <p>Nuestro equipo de soporte está disponible las 24 horas, los 7 días de la semana, para ayudarte con cualquier consulta.</p>
                    <div class="text-button">
                        <a href="#">Leer Más <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="section-heading">
                    <h4>Acerca de <em>Nuestra Misión</em> y ¿Quiénes Somos?</h4>
                    <img src="/walter/private/assets/images/heading-line-dec.png" alt="">
                    <p>En nuestra plataforma, nos dedicamos a ofrecer un entorno de aprendizaje enriquecedor, accesible y colaborativo para estudiantes y educadores.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="#">Problemas de Mantenimiento</a></h4>
                            <p>Ofrecemos asistencia técnica para garantizar que tu experiencia de aprendizaje sea fluida y sin interrupciones.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="#">Soporte y Ayuda 24/7</a></h4>
                            <p>Estamos aquí para ayudarte en cualquier momento, con un equipo de soporte disponible las 24 horas.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="#">Resolución de Problemas</a></h4>
                            <p>Contamos con un equipo dedicado a solucionar cualquier inconveniente que surja durante el uso de la plataforma.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="#">Desarrollo Colaborativo</a></h4>
                            <p>Fomentamos la colaboración entre estudiantes y profesores para crear un ambiente de aprendizaje dinámico.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <p>Únete a nosotros y experimenta una nueva forma de aprender. Nos apasiona ofrecer herramientas que mejoren la educación y faciliten el aprendizaje en línea.</p>
                        <div class="gradient-button">
                            <a href="#">Comienza tu Prueba Gratuita de 2 Días</a>
                        </div>
                        <span>*No se requiere tarjeta de crédito</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-image">
                    <img src="/walter/private/assets/images/about-right-dec.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>



<div id="pricing" class="pricing-tables">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>Contamos con los Mejores Precios de <em>Suscripción</em> para Tu Educación</h4>
                    <img src="/walter/private/assets/images/heading-line-dec.png" alt="">
                    <p>Ofrecemos planes de suscripción accesibles para garantizar que todos tengan acceso a una educación de calidad.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-regular">
                    <span class="price">$10</span>
                    <h4>Plan Estándar</h4>
                    <div class="icon">
                        <img src="/walter/private/assets/images/pricing-table-01.png" alt="">
                    </div>
                    <ul>
                        <li>Acceso a cursos básicos</li>
                        <li>20 TB de almacenamiento para proyectos</li>
                        <li>Soporte 24/7</li>
                        <li class="non-function">Complementos Premium</li>
                        <li class="non-function">Red Rápida</li>
                        <li class="non-function">Más Opciones</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">Compra Este Plan Ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-pro">
                    <span class="price">$15</span>
                    <h4>Plan Empresarial</h4>
                    <div class="icon">
                        <img src="/walter/private/assets/images/pricing-table-01.png" alt="">
                    </div>
                    <ul>
                        <li>Acceso a cursos avanzados</li>
                        <li>50 TB de almacenamiento para proyectos</li>
                        <li>Soporte 24/7</li>
                        <li>Complementos Premium</li>
                        <li class="non-function">Red Rápida</li>
                        <li class="non-function">Más Opciones</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">Compra Este Plan Ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-regular">
                    <span class="price">$30</span>
                    <h4>Plan Premium</h4>
                    <div class="icon">
                        <img src="/walter/private/assets/images/pricing-table-01.png" alt="">
                    </div>
                    <ul>
                        <li>Acceso a todos los cursos</li>
                        <li>120 TB de almacenamiento para proyectos</li>
                        <li>Soporte 24/7</li>
                        <li>Complementos Premium</li>
                        <li>Red Rápida</li>
                        <li>Más Opciones</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">Compra Este Plan Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php require_once(TEMPLATES_PATH . 'footer.php'); ?>