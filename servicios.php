<?php
include('mobile.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Lato:900,700,400,300,100|Merriweather:700,400,300' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Servicios | Ley de Inmigración | Los Ángeles, CA | L.A. Rights Law Office</title>
	<link rel="shortcut icon" href="favicon.ico?" type="image">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet" type="text/css">
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
	<nav class="navbar navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<button type="button" class="btn btn-espanol navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        Menú
		    </button>
		    <div class="navbar-brand-div">
		    	<a class="navbar-brand" href="inicio.php"><img class="img-responsive" src="img\logo2.svg"></a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
				<li><a class="nav-link-espanol" style="display:none" href="services.php"><button class="btn btn-espanol">Inglés</button></a></li>
			</ul>
		</div>
		<ul id="nav-link-espanol-desktop" class="nav navbar-nav navbar-right">
			<li><a class="nav-link-espanol" href="services.php"><button class="btn btn-espanol">Inglés</button></a></li>
		</ul>
		<div class="navbar-collapse collapse navbar-right" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-left">
				<li><a class="nav-link" href="inicio.php">INICIO</a></li>
				<li><a class="nav-link" href="acerca-de-nosotros.html">ACERCA DE NOSOTROS</a></li>
				<li><a class="nav-link active" href="servicios.php">SERVICIOS</a></li>
				<li><a class="nav-link" href="contáctenos.php">CONTÁCTENOS</a></li>
			</ul>
		</div>
	</nav>
	<?php
	if($IS_MOBILE){
	?>
	<div class="text-center">
		<h3>Nuestros Servicios</h3>
		<p>Nuestra firma ofrece una variedad de servicios de inmigración, incluyendo peticiones familiares, naturalización y visas de no-inmigrante (non-immigrant visas). La información contenida en nuestro sitio web es información general sobre leyes de inmigración. <br><br><a href="https://egov.uscis.gov/casestatus/landing.do">El estado de su caso en USCIS</a><br><a href="https://www.uscis.gov/forms">USCIS Formas</a></p>
	</div>
	<div id="accordion" role="tablist" aria-multiselectable="true" class="service-accordion">
	  <div class="panel panel-default">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	    	<div class="panel-heading" role="tab" id="headingOne">
	      		<h5 class="panel-title">Asilo<span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span></h5>
	    	</div>
	    </a>
	    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
	      <p>El asilo permite la protección a través de la inmigración a los Estados Unidos para los que están siendo perseguidos o temen persecución en sus países de origen. Para ser elegible para el asilo, la persona debe establecer los siguientes factores:</P>
  			<ul>
  				<li>Miedo bien fundado de la persecución</li>
  				<li>Temer la persecución por razones de: raza, religión, nacionalidad, pertenecer a un grupo social en particular, o por sus opiniones políticas</li>
  				<li>Impuestos por el gobierno o por un grupo el cual el gobierno es incapaz o no dispuesto en controlar</li>
  				<li>Amerita un ejercicio favorable de criterio</li>
  			</ul>
	      <!--<div class="text-center">
	      	<a href="#"><button class="btn btn-espanol btn-learnmore">Learn More</button></a>
	      </div>-->
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	    	<div class="panel-heading" role="tab" id="headingTwo">
	      		<h4 class="panel-title">
	          	Accion Diferida Para Los Llegados en <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>La Infancia (DACA)
	      		</h4>
	    	</div>
		</a>
	    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			<p>La Acción Diferida para los Llegados en la Infancia (DACA por sus siglas en ingles) es un programa iniciado por la administración Obama que permite a ciertas personas indocumentadas permanecer los Estados Unidos sin ser deportados.</p>
			<p>Requisitos para ser elegibles para la acción diferida:</p>
			<ul>
				<li>Haber tenido menos de 31 años antes de junio 15 del 2012</li>
				<li>Haber llegado a EEUU antes de haber cumplido 16 años de edad</li>
				<li>Haber residido continuamente en EEUU desde junio 15 del 2007 hasta la actualidad</li>
				<li>Haber estado presente en EEUU en junio 15 del 2012, y al momento de aplicar para la acción diferida con USCIS</li>
				<li>Haber entrado sin inspección antes de junio 15 del 2012, o su estatus legal de inmigración haberse expirado en junio 15 del 2012</li>
				<li>Estar en la escuela, haberse graduado u obtenido un diploma de finalización de la escuela secundaria, haber obtenido un certificado de educación general de desarrollo (GED), o haber sido honorablemente licenciado como veterano de la Guardia Costera o de las fuerzas armadas de los Estados Unidos</li>
				<li>No haber sido condenado por alguna felonía, delito menor significante, tres o más otro delito menor, y no ser una amenaza para la seguridad nacional o la seguridad pública</li>
			</ul>
			<p>Beneficios de la acción diferida:</p>
			<ul>
				<li>Permite obtener un permiso de trabajo</li>
				<li>Limita la deportación</li>
			</ul>
			<p><i>Tenga en cuenta que la acción diferida no le dará un estatus de residencia legal permanente (una tarjeta verde) y no es un camino a la ciudadanía</i></p>
			<h4 class="sub-title">Expansion de DACA</h4>
			<p>El programa expandido de DACA ha sido actualmente suspendido. Este programa, si llega a ser expandido incluirá a personas que llegaron a Estados Unidos antes de cumplir los 16 años de edad y no tendrá edad límite, hayan residido continuamente en los Estados Unidos comenzando desde enero 1 del 2010 y extenderá el permiso de trabajo por 3 años.</p>
			<p>Riesgos de la acción diferida:</p>
			<p>La acción diferida no es para todos, por ejemplo, los antecedentes criminales puede ponerlo en riesgo. Además, la acción diferida es un programa temporal. Consulte con un abogado hoy para pesar los beneficios y riesgos asociados en obtener la acción diferida.</p>
	      <!--<div class="text-center">
	      	<a href="#"><button class="btn btn-espanol btn-learnmore">Learn More</button></a>
	      </div>-->
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	    	<div class="panel-heading" role="tab" id="headingThree">
	      		<h4 class="panel-title">La Acción Diferida para los Padres de hijos Americanos <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>y Residentes Legales Permanentes (DAPA)</h4>
	    	</div>
	    </a>
	    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			<p>La Acción Diferida para los Padres de hijos Americanos y Residentes Legales Permanentes (“DAPA” por sus siglas en ingles) es una acción ejecutiva que permite a las personas que viven en EEUU una protección en contra de la deportación, un permiso de trabajo y un número de seguro social. Esta orden, actualmente, está detenida esperando la decisión de la corte.</p>
			<h4 class="sub-title">¿Califico para DAPA?</h4>
			<p>Los criterios para la DAPA son:</p>
			<ul>
				<li>Tener un(a) hijo(a) que sea ciudadano(a) estadounidense o residente legal permanente</li>
				<li>Haber vivido continuamente en EEUU desde enero 1 del 2010</li>
				<li>Haber estado presente en EEUU en noviembre 20 del 2014. Es muy probable que usted tiene que estar presente en EEUU todos los días desde ahora hasta que aplique para DAPA</li>
				<li>No tener un estatus legal de inmigración. Para cumplir con este requisito, (1) usted debió haber entrado a EEUU sin papeles, o, si usted entro legalmente, su estatus legal de inmigración bebe haberse ya vencido; (2) no tener estatus legal de inmigración alguno al momento de aplicar para DAPA</li>
				<li>No haber sido condenado por ciertas ofensas criminales, incluyendo cualquier felonía y/o delitos menores</li>
			</ul>
			<h4 class="sub-title">¿Cuándo puedo aplicar para DAPA?</h4>
			<p>Por ahora usted no puede aplicar para DAPA, por favor tenga cuidado de personas que digan que usted puede aplicar ahora.</p>
			<h4 class="sub-title">¿Cómo puedo prepararme para DAPA?</h4>
			<p>Usted puede comenzar a reunir sus documentos. Es muy probable que los elementos que va a necesitar sean los siguientes:</p>
			<ul>
				<li>Dinero, se espera que el costo sea por lo menos de $465</li>
				<li>Prueba que usted estuvo presente en EEUU en noviembre 20 del 2014 (por ejemplo, usted puede obtener registros bancarios, y registros médicos, etc.)</li>
				<li>Prueba de su relación con un ciudadano estadounidense o residente permanente legal, certificado de nacimiento, certificado de naturalización, tarjeta de residencia, o pasaporte</li>
				<li>Prueba de identidad: documentos gubernamentales tales como pasaporte, certificado de nacimiento, etc.</li>
				<li>Prueba de que ha residido en EEUU desde enero 1 del 2010 tales como recibos de renta, acuerdos de arrendamiento, registros médicos, registros de empleo, declaraciones de impuestos, registros clericós, registros de escuela, facturas de servicios públicos</li>
  				<li>Obtener antecedentes penales y que un abogado los revise</li>
			</ul>
	      <!--<div class="text-center">
	      	<a href="#"><button class="btn btn-espanol btn-learnmore">Learn More</button></a>
	      </div>-->
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
	    	<div class="panel-heading" role="tab" id="headingThree">
	      		<h4 class="panel-title">Defensa de Deportación<span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span></h4>
	    	</div>
	    </a>
	    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
  			<p>Hay varias opciones disponibles para las personas que han sido colocadas bajo el proceso de deportación. A continuación se presenta una lista de algunos de los métodos comunes usados pero esta lista no es comprensiva.</p>
			<h4 class="sub-title">Cancelacion de Orden de Deportacion</h4>
			<p>La cancelación de orden de deportación es una forma de alivio para las personas que están en proceso de deportación.</p>
			<p>Hay dos tipos de cancelación de deportación disponibles y tienen diferentes requisitos para ser elegibles. El primer tipo es para los residentes legales permanentes (también conocidos como poseedores de una tarjeta verde), el segundo es para una persona que no es un residente legal.</p>
			<p>Requisitos para la cancelación de deportación para ciertos residentes legales permanentes:</p>
			<ul>
				<li>Ser residente legal permanente por lo menos cinco (5) años</li>
				<li>Tener por lo menos siete (7) años de residencia continua en los Estados Unidos después de haber sido legalmente admitido bajo algún estatus legal de inmigración</li>
				<li>No tener felonías agraviadas</li>
			</ul>
			<p>Cancelación de deportación para ciertas personas SIN residencia permanente:</p>
			<ul>
				<li>Tener 10 años de presencia continua en los Estados Unidos</li>
				<li>Tener buen carácter moral durante ese periodo de tiempo</li>
				<li>Dificultad excepcional y extremadamente inusual a un ciudadano estadounidense o residente legal permanente ya sea cónyuge, padre o hijo</li>
				<li>No tener ofensas criminales que lo vayan a descalificar</li>
			</ul>
	      <!--<div class="text-center">
	      	<a href="#"><button class="btn btn-espanol btn-learnmore">Learn More</button></a>
	      </div>-->
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
	    	<div class="panel-heading" role="tab" id="headingThree">
	      		<h4 class="panel-title">Peticiones Familiares<span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span></h4>
	    	</div>
		</a>
	    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
	      <p>La página viene pronto.</p>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
	    	<div class="panel-heading" role="tab" id="headingThree">
	      		<h4 class="panel-title">U Visas<span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span></h4>
	    	</div>
		</a>
	    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
	    	<p>Una Visa U es una visa para víctimas de ciertos crímenes.</p>
  			<h4>¿Quién califica para una Visa U?</h4>
  			<p>Personas que son víctimas de ciertos crímenes y que han contribuido a la aplicación de la ley en investigación o sanción del crimen pueden calificar para una Visa U. En ciertos casos, algunos individuos que han atestiguado el crimen pueden ser elegibles también. Las personas que califican para una Visa U también pueden obtener una visa para ciertos familiares.</p>
  			<h4>¿Cuáles son los crimines que califican?</h4>
  			<p>Algunos de los crímenes incluyen crímenes de violencia, agresión, violencia doméstica, secuestro y crímenes sexuales.</p>
  			<h4>¿Me da la Visa U una tarjeta de residente permanente (green card)?</h4>
  			<p>La Visa U es válida por 4 años. Después de 3 años, usted puede aplicar por una residencia permanente. La Visa U también otorga un permiso de trabajo.</p>
  			<h4>¿Cuánto tiempo toma la Visa U?</h4>
  			<p>Actualmente, toma desde 9 meses a un año y medio para obtener su visa. El tiempo de procesamiento varía. </p>
  			<h4>¿Quién puede aplicar a una Visa U?</h4>
  			<p>EIncuso si usted ha cometido crímenes serios, usted puede aplicar a la Visa U, sin embargo, debería buscar consultoría con un abogado.</p>
  			<h4>¿Cuánto cuesta la Visa U?</h4>
  			<p>La Visa U es gratuita, sin embargo, la exención cuesta $585. Adicionalmente, hay una tarifa si desea obtener el permiso de trabajo para familiares. Personas con ingresos bajos puede calificar para la extensión de esta tarifa.</p>
	      <!--<div class="text-center">
	      	<a href="#"><button class="btn btn-espanol btn-learnmore">Learn More</button></a>
	      </div>-->
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
	    	<div class="panel-heading" role="tab" id="headingThree">
	      		<h4 class="panel-title">Acta Contra La Violencia a La Mujer (VAWA)<span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span></h4>
	    	</div>
		</a>
	    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
	       <p>El acta contra la violencia a la mujer (VAWA por sus siglas en ingles) permite a las personas que han experimentado agresión o extrema crueldad obtener su estatus y, en ciertos casos puede ser usada como defensa en contra de la deportación. La persona tiene que demostrar lo siguiente:</p>
		<ul>
			<li>Usted fue el conyugue de un ciudadano estadounidense o un residente legal permanente abusador</li>
			<li>Que él o ella es víctima de agresión o crueldad extrema</li>
			<li>Dificultad extrema al solicitante o al conyugue, padre o hijo que es un ciudadano estadounidense o residente legal permanente</li>
		</ul>
	      <!--<div class="text-center">
	      	<a href="service-violence-against-women-act.html"><button class="btn btn-espanol btn-learnmore">Learn More</button></a>
	      </div>-->
	    </div>
	  </div>
	</div>
	<div class="container-fluid">
		<h4>¿No está seguro de lo que está buscando?</h4>
		<a href="contáctenos.php"><button class="btn btn-cta-darkblue">CONTÁCTENOS</button></a>
		<!--<p>We're happy to help! Give us a call or send us a message:</p>
		<form id="ctaform" method="post" action="contact-form.php" onsubmit="validateForm();">
			<label>NAME</label><br>
			<input id="name" name="name"><br>
			<label>EMAIL</label><br>
			<input id="email" name="email" type="email"><br>
			<label>PHONE</label><br>
			<input id="phone" name="phone" type="tel"><br>
			<label>MESSAGE</label><br>
			<textarea id="message" rows="8" class="message" name="message" type="text"></textarea>
			<input id="submit" class="btn btn-form" name="submit" type="submit" value="SEND">
		</form>-->
	</div>
	<?php } 
	if(!$IS_MOBILE){
	?>
	<div class="container-fluid fill" style="position:absolute;">
	  	<div class="row fill">
	      	<div id="sidebar-col" class="col-sm-4 fill">
	      		<div class="sidebar-nav fill">
	      			<div class="navbar fill">
	      				<ul class="nav navbar-nav fill">
	      					<li><a class="item sidebar-title" data-target="1" href="#">NUESTROS SERVICIOS</a></li>
				            <li><a class="item" data-target="2" href="#">Asilo</a></li>
				            <li><a class="item" data-target="3" href="#">Accion Diferida Para Los Llegados en La Infancia (DACA)</a></li>
				            <li><a class="item" data-target="4" href="#">La Acción Diferida para los Padres de hijos Americanos y Residentes Legales Permanentes (DAPA)</a></li>
				            <li><a class="item" data-target="5" href="#">Defensa de Deportación</a></li>
				            <li><a class="item" data-target="6" href="#">Peticiones Familiares</a></li>
				            <li><a class="item" data-target="7" href="#">U Visas</a></li>
				            <li><a class="item" data-target="8" href="#">Acta Contra La Violencia a La Mujer (VAWA)</a></li>
			        	</ul>
	      			</div>
	      		</div>
	      	</div>
	      	<div class="col-sm-8">
	      		<div id="div1" class="targetDiv text-center">
	      			<p>Nuestra firma ofrece una variedad de servicios de inmigración, incluyendo peticiones familiares, naturalización y visas de no-inmigrante (non-immigrant visas). La información contenida en nuestro sitio web es información general sobre leyes de inmigración.</p>
	      			<p class="text-center schedule-an-appt">Programe una cita:</p>
					<h2 class="text-center phone">310-906-0946</h2>
					<div class="or-container">
						<hr class="or-hr-grey">
						<div id="or">o</div>
					</div>
					<a href="contáctenos.php"><button class="btn btn-cta-darkblue">ENVIA UN MENSAJE</button></a>
					<img class="img-center img-responsive" src="img/pic_services.jpg" />
	      		</div>
	      		<div id="div2" class="targetDiv">
	      			<h2>Asilo</h2>
	      			<p>El asilo permite la protección a través de la inmigración a los Estados Unidos para los que están siendo perseguidos o temen persecución en sus países de origen. Para ser elegible para el asilo, la persona debe establecer los siguientes factores:</P>
	      			<ul>
	      				<li>Miedo bien fundado de la persecución</li>
	      				<li>Temer la persecución por razones de: raza, religión, nacionalidad, pertenecer a un grupo social en particular, o por sus opiniones políticas</li>
	      				<li>Impuestos por el gobierno o por un grupo el cual el gobierno es incapaz o no dispuesto en controlar</li>
	      				<li>Amerita un ejercicio favorable de criterio</li>
	      			</ul>
	      			<!-- <p class="text-center schedule-an-appt">Schedule an appointment by calling:</p>
					<h2 class="text-center phone">310-906-0946</h2>
					<div class="or-container">
						<hr class="or-hr-grey">
						<div id="or">or</div>
					</div>
					<div class="text-center">
						<a href="contact.php"><button class="btn btn-cta-darkblue">SEND A MESSAGE</button></a>
					</div> -->
	      		</div>
	      		<div id="div3" class="targetDiv">
	      			<h2>Accion Diferida Para Los Llegados en La Infancia (DACA)</h2>
	      			<p>La Acción Diferida para los Llegados en la Infancia (DACA por sus siglas en ingles) es un programa iniciado por la administración Obama que permite a ciertas personas indocumentadas permanecer los Estados Unidos sin ser deportados.</p>
	      			<p>Requisitos para ser elegibles para la acción diferida:</p>
	      			<ul>
	      				<li>Haber tenido menos de 31 años antes de junio 15 del 2012</li>
	      				<li>Haber llegado a EEUU antes de haber cumplido 16 años de edad</li>
	      				<li>Haber residido continuamente en EEUU desde junio 15 del 2007 hasta la actualidad</li>
	      				<li>Haber estado presente en EEUU en junio 15 del 2012, y al momento de aplicar para la acción diferida con USCIS</li>
	      				<li>Haber entrado sin inspección antes de junio 15 del 2012, o su estatus legal de inmigración haberse expirado en junio 15 del 2012</li>
	      				<li>Estar en la escuela, haberse graduado u obtenido un diploma de finalización de la escuela secundaria, haber obtenido un certificado de educación general de desarrollo (GED), o haber sido honorablemente licenciado como veterano de la Guardia Costera o de las fuerzas armadas de los Estados Unidos</li>
	      				<li>No haber sido condenado por alguna felonía, delito menor significante, tres o más otro delito menor, y no ser una amenaza para la seguridad nacional o la seguridad pública</li>
	      			</ul>
	      			<p>Beneficios de la acción diferida:</p>
	      			<ul>
	      				<li>Permite obtener un permiso de trabajo</li>
	      				<li>Limita la deportación</li>
	      			</ul>
	      			<p><i>Tenga en cuenta que la acción diferida no le dará un estatus de residencia legal permanente (una tarjeta verde) y no es un camino a la ciudadanía</i></p>
	      			<h4 class="sub-title">Expansion de DACA</h4>
	      			<p>El programa expandido de DACA ha sido actualmente suspendido. Este programa, si llega a ser expandido incluirá a personas que llegaron a Estados Unidos antes de cumplir los 16 años de edad y no tendrá edad límite, hayan residido continuamente en los Estados Unidos comenzando desde enero 1 del 2010 y extenderá el permiso de trabajo por 3 años.</p>
	      			<p>Riesgos de la acción diferida:</p>
	      			<p>La acción diferida no es para todos, por ejemplo, los antecedentes criminales puede ponerlo en riesgo. Además, la acción diferida es un programa temporal. Consulte con un abogado hoy para pesar los beneficios y riesgos asociados en obtener la acción diferida.</p>
	      			<!-- <p class="text-center">Schedule an appointment by calling:</p>
					<h2 class="text-center phone">310-906-0946</h2>
					<div class="or-container">
						<hr class="or-hr-grey">
						<div id="or">or</div>
					</div>
					<div class="text-center">
						<a href="contact.html"><button class="btn btn-cta-darkblue">SEND A MESSAGE</button></a>
					</div> -->
	      		</div>
	      		<div id="div4" class="targetDiv">
	      			<h2>La Acción Diferida para los Padres de hijos Americanos y Residentes Legales Permanentes (DAPA)</h2>
	      			<p>La Acción Diferida para los Padres de hijos Americanos y Residentes Legales Permanentes (“DAPA” por sus siglas en ingles) es una acción ejecutiva que permite a las personas que viven en EEUU una protección en contra de la deportación, un permiso de trabajo y un número de seguro social. Esta orden, actualmente, está detenida esperando la decisión de la corte.</p>
	      			<h4 class="sub-title">¿Califico para DAPA?</h4>
	      			<p>Los criterios para la DAPA son:</p>
	      			<ul>
	      				<li>Tener un(a) hijo(a) que sea ciudadano(a) estadounidense o residente legal permanente</li>
	      				<li>Haber vivido continuamente en EEUU desde enero 1 del 2010</li>
	      				<li>Haber estado presente en EEUU en noviembre 20 del 2014.  Es muy probable que usted tiene que estar presente en EEUU todos los días desde ahora hasta que aplique para DAPA</li>
	      				<li>No tener un estatus legal de inmigración. Para cumplir con este requisito, (1) usted debió haber entrado a EEUU sin papeles, o, si usted entro legalmente, su estatus legal de inmigración bebe haberse ya vencido; (2) no tener estatus legal de inmigración alguno al momento de aplicar para DAPA</li>
	      				<li>No haber sido condenado por ciertas ofensas criminales, incluyendo cualquier felonía y/o delitos menores</li>
	      			</ul>
	      			<h4 class="sub-title">¿Cuándo puedo aplicar para DAPA?</h4>
	      			<p>Por ahora usted no puede aplicar para DAPA, por favor tenga cuidado de personas que digan que usted puede aplicar ahora.</p>
	      			<h4 class="sub-title">¿Cómo puedo prepararme para DAPA?</h4>
	      			<p>Usted puede comenzar a reunir sus documentos. Es muy probable que los elementos que va a necesitar sean los siguientes:</p>
	      			<ul>
	      				<li>Dinero, se espera que el costo sea por lo menos de $465</li>
	      				<li>Prueba que usted estuvo presente en EEUU en noviembre 20 del 2014 (por ejemplo, usted puede obtener registros bancarios, y registros médicos, etc.)</li>
	      				<li>Prueba de su relación con un ciudadano estadounidense o residente permanente legal, certificado de nacimiento, certificado de naturalización, tarjeta de residencia, o pasaporte</li>
	      				<li>Prueba de identidad: documentos gubernamentales tales como pasaporte, certificado de nacimiento, etc.</li>
	      				<li>Prueba de que ha residido en EEUU desde enero 1 del 2010 tales como recibos de renta, acuerdos de arrendamiento, registros médicos, registros de empleo, declaraciones de impuestos, registros clericós, registros de escuela, facturas de servicios públicos</li>
	      				<li>Obtener antecedentes penales y que un abogado los revise</li>
	      			</ul>
	      			<!-- <p class="text-center">Schedule an appointment by calling:</p>
					<h2 class="text-center phone">310-906-0946</h2>
					<div class="or-container">
						<hr class="or-hr-grey">
						<div id="or">or</div>
					</div>
					<div class="text-center">
						<a href="contact.html"><button class="btn btn-cta-darkblue">SEND A MESSAGE</button></a>
					</div> -->
	      		</div>
	      		<div id="div5" class="targetDiv">
	      			<h2>Defensa de Deportación</h2>
	      			<p>Hay varias opciones disponibles para las personas que han sido colocadas bajo el proceso de deportación. A continuación se presenta una lista de algunos de los métodos comunes usados pero esta lista no es comprensiva.</p>
	      			<h4 class="sub-title">Cancelacion de Orden de Deportacion</h4>
	      			<p>La cancelación de orden de deportación es una forma de alivio para las personas que están en proceso de deportación.</p>
	      			<p>Hay dos tipos de cancelación de deportación disponibles y tienen diferentes requisitos para ser elegibles. El primer tipo es para los residentes legales permanentes (también conocidos como poseedores de una tarjeta verde), el segundo es para una persona que no es un residente legal.</p>
	      			<p>Requisitos para la cancelación de deportación para ciertos residentes legales permanentes:</p>
	      			<ul>
	      				<li>Ser residente legal permanente por lo menos cinco (5) años</li>
	      				<li>Tener por lo menos siete (7) años de residencia continua en los Estados Unidos después de haber sido legalmente admitido bajo algún estatus legal de inmigración</li>
	      				<li>No tener felonías agraviadas</li>
	      			</ul>
	      			<p>Cancelación de deportación para ciertas personas SIN residencia permanente:</p>
	      			<ul>
	      				<li>Tener 10 años de presencia continua en los Estados Unidos</li>
	      				<li>Tener buen carácter moral durante ese periodo de tiempo</li>
	      				<li>Dificultad excepcional y extremadamente inusual a un ciudadano estadounidense o residente legal permanente ya sea cónyuge, padre o hijo</li>
	      				<li>No tener ofensas criminales que lo vayan a descalificar</li>
	      			</ul>
	      			<!-- <p class="text-center">Schedule an appointment by calling:</p>
					<h2 class="text-center phone">310-906-0946</h2>
					<div class="or-container">
						<hr class="or-hr-grey">
						<div id="or">or</div>
					</div>
					<div class="text-center">
						<a href="contact.html"><button class="btn btn-cta-darkblue">SEND A MESSAGE</button></a>
					</div> -->
	      		</div>
	      		<div id="div6" class="targetDiv">
	      			<p>La página viene muy pronto.</p>
	      		</div>
	      		<div id="div7" class="targetDiv">
	      			<h2>U Visas</h2>
	      			<p>Una Visa U es una visa para víctimas de ciertos crímenes.</p>
	      			<h4>¿Quién califica para una Visa U?</h4>
	      			<p>Personas que son víctimas de ciertos crímenes y que han contribuido a la aplicación de la ley en investigación o sanción del crimen pueden calificar para una Visa U. En ciertos casos, algunos individuos que han atestiguado el crimen pueden ser elegibles también. Las personas que califican para una Visa U también pueden obtener una visa para ciertos familiares.</p>
	      			<h4>¿Cuáles son los crimines que califican?</h4>
	      			<p>Algunos de los crímenes incluyen crímenes de violencia, agresión, violencia doméstica, secuestro y crímenes sexuales.</p>
	      			<h4>¿Me da la Visa U una tarjeta de residente permanente (green card)?</h4>
	      			<p>La Visa U es válida por 4 años. Después de 3 años, usted puede aplicar por una residencia permanente. La Visa U también otorga un permiso de trabajo.</p>
	      			<h4>¿Cuánto tiempo toma la Visa U?</h4>
	      			<p>Actualmente, toma desde 9 meses a un año y medio para obtener su visa. El tiempo de procesamiento varía. </p>
	      			<h4>¿Quién puede aplicar a una Visa U?</h4>
	      			<p>EIncuso si usted ha cometido crímenes serios, usted puede aplicar a la Visa U, sin embargo, debería buscar consultoría con un abogado.</p>
	      			<h4>¿Cuánto cuesta la Visa U?</h4>
	      			<p>La Visa U es gratuita, sin embargo, la exención cuesta $585. Adicionalmente, hay una tarifa si desea obtener el permiso de trabajo para familiares. Personas con ingresos bajos puede calificar para la extensión de esta tarifa.</p>
	      		</div>
	      		<div id="div8" class="targetDiv">
	      			<h2>Acta Contra La Violencia a La Mujer (VAWA)</h2>
	      			<p>El acta contra la violencia a la mujer (VAWA por sus siglas en ingles) permite a las personas que han experimentado agresión o extrema crueldad obtener su estatus y, en ciertos casos puede ser usada como defensa en contra de la deportación. La persona tiene que demostrar lo siguiente:</p>
	      			<ul>
	      				<li>Usted fue el conyugue de un ciudadano estadounidense o un residente legal permanente abusador</li>
	      				<li>Que él o ella es víctima de agresión o crueldad extrema</li>
	      				<li>Dificultad extrema al solicitante o al conyugue, padre o hijo que es un ciudadano estadounidense o residente legal permanente</li>
	      			</ul>
	      			<!-- <p class="text-center">Schedule an appointment by calling:</p>
					<h2 class="text-center phone">310-906-0946</h2>
					<div class="or-container">
						<hr class="or-hr-grey">
						<div id="or">or</div>
					</div>
					<div class="text-center">
						<a href="contact.html"><button class="btn btn-cta-darkblue">SEND A MESSAGE</button></a>
					</div> -->
	      		</div>
	      	</div>
	    </div><!-- end of row -->
	    <div class="row ctasmall">
	    	<div class="col-md-4"></div>
			<div class="col-md-4 text-center">
				<h4 class="white">Programe una cita:</h4>
				<h2 class="phone white">310-906-0946</h2>
				<div class="or-container">
					<hr class="or-hr">
					<div id="or-grey">o</div>
				</div>
				<a href="contáctenos.php"><button class="btn btn-cta">ENVIA UN MENSAJE</button></a>
			</div>
			<div class="col-md-4"></div>
	    </div>
	    <?php } ?>
	    <footer>
			<div class="row">
				<div class="col-md-6">
					<table class="pull-right">
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
					<table class="pull-left">
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
	</div>
	
	<script type="text/javascript">

	$(document).ready(function () {
		$('.targetDiv').hide();
		$('#div1').show();
		jQuery('.item').click(function(){
              jQuery('.targetDiv').hide();
              jQuery('#div'+$(this).attr('data-target')).show();
              var height = $('#div'+$(this).attr('data-target')).height();

			  $('.sidebar-nav').css("height", height + 50); //height(height);
        });
		
		$(".content").hide();
		$(".more-btn").click(function (event) {
			event.preventDefault();
			$(this).parent().find(".content").slideToggle(200);
			$(this).text($(this).text() == 'Read less...' ? 'Read more...' : 'Read less...')
		});

		$('.collapsed').click(function() {
			$(this).find('span').toggleClass('glyphicon-chevron-down').toggleClass('glyphicon-chevron-up');
		})
	});
	</script>
</body>
</html>