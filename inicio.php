<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Lato:900,700,400,300,100|Merriweather:700,400,300' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ley de Inmigración | Los Ángeles, CA | L.A. Rights Law Office</title>
	<link rel="shortcut icon" href="favicon.ico?" type="image">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet" type="text/css">
	<!--<script src="https://use.typekit.net/fvj7blr.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79019013-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
	<nav class="navbar navbar-fixed-top" role="navigation"> <!-- removed navbar-default -->
		<div class="navbar-header">
			<button type="button" class="btn btn-espanol navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        Menú
		    </button>
		    <div class="navbar-brand-div">
		    	<a class="navbar-brand" href="inicio.php"><img class="img-responsive" src="img\logo2.svg"></a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
				<li><a class="nav-link-espanol" style="display:none" href="index.php"><button class="btn btn-espanol">Inglés</button></a></li>
			</ul>
		</div>
		<ul id="nav-link-espanol-desktop" class="nav navbar-nav navbar-right">
			<li><a class="nav-link-espanol" href="index.php"><button class="btn btn-espanol">Inglés</button></a></li>
		</ul>
		<div class="navbar-collapse collapse navbar-right" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-left">
				<li><a class="nav-link active" href="inicio.php">INICIO</a></li>
				<li><a class="nav-link" href="acerca-de-nosotros.html">ACERCA DE NOSOTROS</a></li>
				<li><a class="nav-link" href="servicios.php">SERVICIOS</a></li>
				<li><a class="nav-link" href="contáctenos.php">CONTÁCTENOS</a></li>
			</ul>
		</div>
		
	</nav>

	<!-- MOBILE -->

	<!-- END OF MOBILE -->

	<div class="container-fluid no-padding">
		<div class="jumbotron">
			<div class="row text-center">
				<!-- <div class="col-md-2"></div>
				<div class="col-md-8">
					<h1 id="jumbotron-text">L.A. Rights Law Office</h1>
					<h3>We believe in and fight for the rights of immigrants</h3>
					<a href="contact.html"><button class="btn btn-cta">CONTACT US</button></a>
				</div>
				<div class="col-md-2"></div> -->
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<!-- <img class="img-responsive jumbotron-img" alt="main img" src="img/mainimg.png" /> --><h1 id="jumbotron-text">Creemos y luchamos por los derechos de los inmigrantes</h1>
					<h3 class="jumbotron-text-color">Contacto L.A. Rights hoy</h3>
					<a href="contáctenos.php"><button class="btn btn-cta">CONTÁCTENOS</button></a>
					<p>O <a class="jumbotron-link" href="about.html">lea más</a> sobre nuestros servicios</p>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row maincta-bg">
			<div class="container" id="maincta">
				<div class=""></div>
				<div class="col-md-6 col-sm-6 ctatext">
					<h3 class="large-text">Proporcionamos servicios legales asequibles porque creemos que todo el mundo se merece el derecho a un abogado.</h3>
					<p class="maincta-text">Los asuntos de inmigración pueden ser difíciles para el individuo, la familia y los amigos. A menudo, las personas que tratan de navegar por el sistema sin un abogado enfrentan demoras innecesarias, la negación de su solicitud o la deportación.</p><br>
					<p class="maincta-text">En la oficina de LA Rights Law nuestros clientes son tratados con respeto y dignidad. Evaluaremos su situación y ofreceremos un asesoramiento confiable y solido.</p>
				</div>
				<div class="col-md-5 col-sm-6" id="schedule">
					<div class="text-center">
						<p class="schedule-an-appt-home">Programe una cita:</p>
						<p class="phone">310-906-0946</p>
						<div class="or-container">
							<hr class="or-hr">
							<div id="or">o</div>
						</div>
					</div>
					
					<form id="ctaform" method="post" action="contact-form-inicio.php" onsubmit="validateForm();">
						<label>NOMBRE</label><br>
						<input id="name" name="name"><br>
						<label>EMAIL</label><br>
						<input id="email" name="email" type="email"><br>
						<label>TELÉFONO</label><br>
						<input id="phone" name="phone" type="tel"><br>
						<label>MENSAJE</label><br>
						<textarea id="message" rows="8" class="message" name="message" type="text"></textarea>
						<input id="submit" class="btn btn-form" name="submit" type="submit" value="ENVIA">
					</form>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>

			<!--<div class="row reviews">
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center">
					<div class="row review-header">
						<h2>What people are saying about L.A. Rights</h2>
					</div>
					<div class="row review">
						<p>“Ms. Kuwahara has been extremely informative and helpful throughout our legal process.”</p>
						<p>- Amie</p>
					</div>
					<div class="row review">
						<p>"Ms. Deniece Kuwahara has been a genuine dedicated and bright council to me. She has worked on couple of my cases and advised me on many others occasions. As an immigrant, she has been a strong actor in my life for the last 2 years. She is very good at her job and very caring. Her availability and flexibility were unprecedented and the results were there. With her, I was able to understand the process and it was important to me. After all the time I have spent with her, I will say that I have no doubt she is a gentile, dedicated human being who passionately cares about immigrants and everybody's human rights. She has volunteered her time to many good causes and inspired me. Without hesitation, I would recommend her and her services."</p>
						<p>- Patrick</p>
					</div>
					<div class="row review">
						<p>“As many immigrants, lacking the resources to afford a private attorney, I let a public notary to handle my case, what seemed to be a cheap situation ended up being a terrible decision. After meeting several attorneys, - most not willing to take my case and others willing to take it at an exuberant cost, - I was so fortunate in finding Ms. Kuwahara.</p>
						<p>Ms. Kuwahara’s services are very affordable and her interest in helping the immigrant community is without precedent. After assessing my case and explaining the process in simple terms, I decided to let her handle my already complicated case.  She kept me informed at every stage of the process and thanks to her hard work now I enjoy legal staying in this country. I remain so thankful for her help.  Ms. Kuwahara’s compassion for the immigrant community is impressive.  Ms. Kuwahara is a strong fighter for human rights and advocates for the less fortunate. Her interaction with the immigrant community has given her the understanding of the legal difficulties it faces on a daily basis in this country.</p>
						<p>Without hesitation I recommend Ms. Kuwahara’s services to family members, friends and to everyone in need of an excellent representation on immigration matters.”</p>
						<p>- Levi</p>
					</div>
					<small>These testimonials or endorsements do not constitute a guarantee, warranty, or prediction regarding the outcome of your legal matter.</small>
				</div>
				<div class="col-md-3"></div>
			</div>-->
			
		<div class="row">
			<img style="width:100%;" src="img/bannerdark.png" alt="banner" />
		</div>
		<div class="row ctasmall">
			<div class="col-md-4"></div>
			<div class="col-md-4 text-center">
				<h4 class="white">Programe una cita:</h4>
				<h2 class=" white phone">310-906-0946</h2>
				<div class="or-container">
					<hr class="or-hr">
					<div id="or-grey">o</div>
				</div>
				<a href="contáctenos.php"><button class="btn btn-cta">ENVIA UN MENSAJE</button></a>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	<footer>
		<div class="row">
			<div class="col-md-6">
				<table>
					<tbody>
						<tr>
							<td class="footer-label">TELÉFONO</td><td>(310) 906-0946</td>
						</tr>
						<tr>
							<td class="footer-label">HORAS</td><td>Lunes - Viernes, 8 am - 5 pm</td>
						</tr>
						
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<table>
					<tbody>
						<tr>
							<td class="footer-label">DIRECCIÓN</td><td>1320 West Gardena Blvd, Suite 203</td>
						</tr>
						<tr>
							<td></td><td>Gardena, CA 90247</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
				<div class="col-sm-12 text-center">
					<small>Descargo de responsabilidad: La información contenida es este documento es un anuncio y es solo para fines informativos y no establece una relación de abogado-cliente. La situación de cada persona es única, por lo tanto, tampoco substituye el consejo de un abogado con respecto a la cuestión de un individuo en específico o tema. Aunque no se escatiman esfuerzos razonables para presentar información actualizada y precisa, la oficina de LA Rights no hace ninguna representación of garantía de ningún tipo y no será responsable por ningún reclamo de supuestos daños o lesiones derivadas de los contenidos de cualquier o toda información utilizada de este sitio.<br>Deniece Kuwahara, es abogada-en-leyes, miembro activo y abogada con licencia para practicar en el estado de Colorado.</small>
				</div>
			</div>
	</footer>
</body>
</html>