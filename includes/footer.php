<!--Creamos un fichero a parte para contener el footer que añadiremos a las demás páginas-->
<footer class="footer" id="footer">
				<div class="footer-widgets">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<!-- Empieza ¿Sabías Qué? -->
								<div class="widget_nav_menu widget widget__footer">
									<h3 class="widget-title">¿Sabías Qué?</h3>
									<div class="widget-content">
										Con ChuguisApp se puede llevar un control de las tomas, comidas, altura, peso...de nuestro bebé y tener un control de las distintas etapas evolutivas del mismo.
									</div>
								</div>
								<!-- Termina ¿Sabías Qué? -->
							</div>
							<div class="col-sm-6 col-md-3">
								<!-- Empieza Etiquetas -->
								<div class="widget_tag_cloud widget widget__footer">
									<h3 class="widget-title">Páginas</h3>
									<div class="tagcloud">
										<a href="index.php" class="btn btn-secondary btn-sm">Inicio</a>
										<a href="guias.php" class="btn btn-secondary btn-sm">Guías</a>
										<a href="servicios.php" class="btn btn-secondary btn-sm">Nuestros Servicios</a>
										<a href="blog.php" class="btn btn-secondary btn-sm">Blog</a>
										<a href="nosotros.php" class="btn btn-secondary btn-sm">Sobre Nosotros</a>								
										<a href="contacto.php" class="btn btn-secondary btn-sm">Contacto</a>
										<a href="ayuda.php" class="btn btn-secondary btn-sm">Ayudas</a>										
									</div>
								</div>
								<!-- Termina Etiquetas -->
							</div>

							<div class="clearfix visible-sm"></div>

							<div class="col-sm-6 col-md-3">
								<!-- Empieza Entradas Blog -->
								<div class="latest-posts-widget widget widget__footer">
									<h3 class="widget-title">Entradas Blog</h3>
									<div class="widget-content">
										<ul class="latest-posts-list">
											<li>
												<h5 class="title"><a href="blog.php">¿Pañales de Tela?</a></h5>
												<span class="date">18 Mayo 2021</span>
											</li>
											<li>
												<h5 class="title"><a href="ayuda.php">¿Cómo puedo Loguearme en ChuguisApp?</a></h5>
												<span class="date">27 Abril 2021</span>
											</li>
											<li>
												<h5 class="title"><a href="ayuda.php">¿Cómo puedo Registrarme en ChuguisApp?</a></h5>
												<span class="date">16 Abril 2021</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- Termian Entradas Blog -->
							</div>
							<div class="col-sm-6 col-md-3">
								<!-- Empieza Boletín de Noticias -->
								<div class="widget_newsletter widget widget__footer">
									<h3 class="widget-title">Boletín de Noticias</h3>
									<div class="widget-content">
										<p>Si quieres recibir noticias sobre la app al instante, solo debe introducir tu email en el siguiente cuadro de texto y darle a enviar. </p>
										<form action="" method="POST" id="newsletter-form">	
											<div class="alert alert-success hidden" id="newsletter-alert-success">
												<strong>¡Perfecto!</strong> Gracias por suscribirte.
											</div>
											<div class="alert alert-danger hidden" id="newsletter-alert-error">
												<strong>¡Error!</strong> Comprueba los datos introducidos.
											</div>										
											<div class="input-group">
												<input type="text" 												
													class="form-control"
													placeholder="Introduce tu email aquí..."
													name="subscribe-email"
													id="subscribe-email">
												<span class="input-group-btn">
													<button name="newsletter" type="submit" class="btn btn-success btn-block" data-loading-text="Cargando...">Enviar</button>
												</span>
											</div>
										</form>
									</div>
								</div>
								<!-- Termina Boletín de Noticias -->
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-6">
								Copyright &copy; 2021 <a href="index.php">ChuguisApp</a> &nbsp;| &nbsp;Todos los Derechos Reservados
							</div>
							<div class="col-sm-6 col-md-6">
								Creado Por <a href="http://amggdeveloper.pythonanywhere.com/" target="_blank">amgg Developer</a>
							</div>
						</div>
					</div>
				</div>
			</footer>