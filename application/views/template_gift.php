
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
		<div style="margin-right:0px;" class="span6">
			<div class="inner">
				<div class="form-box" >
					<div class="bottom">
						<table style="background-image:url(<?php echo TEMPLATE_ASSETS; ?>images/gift.png); background-position:center; background-repeat:no-repeat; height:340px;"  width="100%" border="0">
							<tr>
								<td style="padding-left:65px;padding-right:70px; padding-top:65px;">
									<p id="gift_nombre_para" style="font-size:14px; font-family:Arial, Helvetica, sans-serif; color:#777;">
										<?php echo $gift['NombreAgasajado']; ?>
									</p>
								</td>
							</tr>
							<tr>
								<td style="padding-left:65px;padding-right:65px;">
									<p id="gift_mensaje" style="font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#777; line-height:15px;">
										<?php echo $gift['MensajePersonalizado']; ?>
									</p>
								</td>
							</tr>
							<tr>
								<td style="padding-left:65px;padding-right:70px;">
									<p id="gift_nombre" style="font-size:14px; font-family:Arial, Helvetica, sans-serif; color:#777; text-align:right;">
										<?php echo $gift['NombreComprador']; ?>
									</p>
								</td>
							</tr>
							<tr>
								<td style="padding-left:65px;padding-right:70px;">
									<p id="gift_servicio" style="font-size:14px; font-family:Arial, Helvetica, sans-serif; color:#777; text-align:center;">
										<?php echo $gift['servicio']; ?>
									</p>
								</td>
							</tr>
							<tr>
								<td style="padding-left:65px;padding-right:70px;">
									<p style="font-size:10px; font-family:Arial, Helvetica, sans-serif; color:#a91b30; text-align:center;">
										Válido hasta el <?php echo $gift['fecha_venc']; ?>
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

	</body>
</html>