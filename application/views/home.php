<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Gift - Spa belgrano</title>
	<link rel="shortcut icon" href="<?php echo TEMPLATE_ASSETS; ?>images/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<link href="<?php echo TEMPLATE_ASSETS; ?>css/style.css" rel="stylesheet"/>
	<link href="<?php echo TEMPLATE_ASSETS; ?>css/colors/style-color-01.css" rel="stylesheet"/>
	<link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>css/contact.css">
	<link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>css/simple-line-icons.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="wrapper">
		<!-- Start Header -->
		<div id="header">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h1>
							<a href="<?php echo base_url('home'); ?>">
								<img src="<?php echo TEMPLATE_ASSETS; ?>images/logo-spa.png" alt="Convert" />
							</a>
						</h1>
						<h2 class="menulink">
							<a href="home-minimal.html#">Menu</a>
						</h2>
						<!-- Start Menu -->
						<div id="menu">
						</div>
						<!-- End Menu -->
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- End Header -->
		<!-- Start Content -->
		<div class="container">
			<div class="row">
				<div style="margin-bottom:30px;">
					<h1 style="text-align:center;">Regalá un Gift Certificate</h1>
					<p style="text-align:center; color:#555;">
						Los datos que escribas los vas a ver en este Gift Certificate, que luego vas a recibir por mail para reenviarlo a quien corresponda.
					</p>
					<hr style="color:#999;" />
				</div>
			</div>
			<div class="row">
				<div class="span6">
					<div class="inner">
						<div class="form-box">
							<div class="bottom">
								<div id="success">
									<span class="green textcenter">
										<p>Your message was sent successfully!</p>
									</span>
								</div>
								<div id="error">
									<span>
										<p>Something went wrong. Please refresh and try again.</p>
									</span>
								</div>

								<form id="contact" name="contact" method="post" novalidate>
									<div class="form-row">
										<h4> Seleccioná la cantidad de gifts que vas a regalar: </h4>
										<select required name="cantidad" title="campo obligatorio">
											<option value=""> Seleccionar cantidad</option>
											<option value="1"> 1</option>
											<option value="2"> 2</option>
											<option value="3"> 3</option>
											<option value="4"> 4</option>
											<option value="5"> 5</option>
											<option value="6"> 6</option>
											<option value="7"> 7</option>
											<option value="8"> 8</option>
											<option value="9"> 9</option>
											<option value="10"> 10</option>
										</select>
									</div>

									<hr  class="hr"/>

									<h2> Completá los datos </h2>

									<div class="form-row">
										<h4> Seleccioná el importe o tratamiento a regalar: </h4>
										<select name="servicio" id="servicio" required title="campo obligatorio">
											<option value="" > Seleccionar tratamiento o importe.</option>
											<?php foreach ($servicios AS $serv): ?>
											<option value="<?php echo $serv['IdServicio']; ?>" data-nombre-servicio="<?php echo $serv['Nombre']; ?>">
												<?php echo $serv['Nombre']; ?>
												( $<?php echo $serv['Valor']; ?> )
											</option>
											<?php endforeach; ?>
										</select>
									</div>

									<div class="form-row">
										<input type="text" name="nombre" id="nombre" size="30" value="" title="campo obligatorio" required class="text login_input"  placeholder="Tu Nombre">
									</div>

									<div class="form-row">
										<input type="text" name="apellido" id="apellido" size="30" value="" title="campo obligatorio" required class="text login_input"  placeholder="Tu Apellido">
									</div>

									<div class="form-row">
										<input type="email" name="email" id="email" title="email incorrecto" size="30" value="" required class="text login_input"  placeholder="Tu E-mail">
									</div>
									<div class="form-row">
										<input type="text" name="telefono" id="telefono" size="30" value="" class="text login_input"  placeholder="Tu teléfono">
									</div>

									<div class="form-row">
										<input type="text" name="nombre_para" id="nombre_para" size="30" value="" title="campo obligatorio" required class="text login_input"  placeholder="Nombre del agasajado">
									</div>
									<div class="form-row">
										<input type="text" name="apellido_para" id="apellido_para" size="30" value="" class="text login_input"  placeholder="Apellido del agasajado">
									</div>


									<div class="form-row">
										<textarea name="mensaje" id="mensaje" required  title="campo obligatorio" maxlength="150" placeholder="Mensaje Personalizado (Hasta 150 caracteres)"></textarea>
									</div>


									<div class="form-row">
										<input id="continuar" type="submit" name="continuar" value="Guardar y continuar" class="btn">

									</div>
<!--
									<div class="form-row">
										<input id="comprar" type="submit" name="comprar" value="Comprar Gift" class="btn">
									</div>
 -->
								</form>

							</div>
						</div>
						<div class="shadow"></div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- FIN GIFT DATOS -->



			<!-- COMIENZO GIFT DISEÑO -->
			<div style="margin-right:0px;" class="span6">

			<div class="inner">

			<div class="form-box" >

			<div class="bottom">
				<table style="background-image:url(<?php echo TEMPLATE_ASSETS; ?>images/gift.png); background-position:center; background-repeat:no-repeat; height:340px;"  width="100%" border="0">
					<tr>
						<td style="padding-left:65px;padding-right:70px; padding-top:65px;">
							<p id="gift_nombre_para" style="font-size:14px; font-family:Arial, Helvetica, sans-serif; color:#777;">&nbsp;</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left:65px;padding-right:65px;">
							<p id="gift_mensaje" style="font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#777; line-height:15px;">
								&nbsp;
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left:65px;padding-right:70px;">
							<p id="gift_nombre" style="font-size:14px; font-family:Arial, Helvetica, sans-serif; color:#777; text-align:right;">&nbsp;</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left:65px;padding-right:70px;">
							<p id="gift_servicio" style="font-size:14px; font-family:Arial, Helvetica, sans-serif; color:#777; text-align:center;">&nbsp;</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left:65px;padding-right:70px;">
							<p style="font-size:10px; font-family:Arial, Helvetica, sans-serif; color:#a91b30; text-align:center;">
								Válido hasta el 12/03/2015
							</p>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
				</table>

				<p style="font-size:13px; font-style:italic;">
					*Ambos apellidos no aparecerán en el Gift Certificate aunque los guardaremos en nuestra base de datos
				</p>
			</div>

			</div>
			<div class="shadow"></div>
			<div class="clearfix"></div>

			</div>

			</div>





			<div class="span6">
				<div class="inner">
					<div class="form-box">
						<div class="bottom">
							<p>
								<strong>Aclaraciones:</strong> <br />
								- Si no recibis instantáneamente el Gift Certificate en tu casilla de mail, por favor verificá el Correo No Deseado.<br />
								- Validez del Voucher: 90 días a partir de la fecha de compra.
							</p>
						</div>
					</div>
					<div class="shadow"></div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- FOOTER -->
			<div class="row">
				<div class="footer">
					<HR />
					<ul>
						<li><strong>Teléfono:</strong> 4784.3333</li>
						<li><strong>Email:</strong> info@spabelgrano.com</li>
						<li><strong>Dirección:</strong> Virrey del Pino 2237, Belgrano</li>
						<li><img src="<?php echo TEMPLATE_ASSETS; ?>images/twitter.png" width="20" height="20"> @spabelgrano</li>
                        		<li><img src="<?php echo TEMPLATE_ASSETS; ?>images/facebook.png" width="20" height="20"> /spabelgrano</li>
					</ul>
				</div>
			</div>
			<!-- FOOTER -->
		</div>
	</div>
	<!-- End content -->
	<div class="clearfix"></div>
</div>


<!--[if lte IE 7]><script src="js/icons-lte-ie7.js"></script><![endif]-->
<script src="<?php echo TEMPLATE_ASSETS; ?>js/jquery.min.js"></script>
<script src="<?php echo TEMPLATE_ASSETS; ?>js/respond.min.js"></script>
<script src="<?php echo TEMPLATE_ASSETS; ?>js/scripts.js"></script>
<script src="<?php echo TEMPLATE_ASSETS; ?>js/jquery.form.js"></script>
<script src="<?php echo TEMPLATE_ASSETS; ?>js/jquery.validate.min.js"></script>
<script src="<?php echo TEMPLATE_ASSETS; ?>js/contact.js"></script>
</body>
</html>


<script type="text/javascript">
	$(document).ready(function()
	{
		$("#nombre").keyup(function() {
			var nombre = $('#nombre').val();
			$('#gift_nombre').text(nombre);
		});
		$("#mensaje").keyup(function() {
			var mensaje = $('#mensaje').val();
			$('#gift_mensaje').text(mensaje);
		});
		$("#nombre_para").keyup(function() {
			var nombre_para = $('#nombre_para').val();

		});
		$('#servicio').on('change', function() {
			var servicio =  $(this).find(':selected').data('nombre-servicio');
			$('#gift_servicio').text(servicio);
		});
	});
</script>



