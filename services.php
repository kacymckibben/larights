<?php
include('mobile.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Lato:900,700,400,300,100|Merriweather:700,400,300' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Services | Immigration Lawyer | Los Angeles, CA | L.A. Rights Law Office</title>
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
		        Menu
		    </button>
		    <div class="navbar-brand-div">
		    	<a class="navbar-brand" href="index.php"><img class="img-responsive" src="img\logo2.svg"></a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
				<li><a class="nav-link-espanol" style="display:none" href="servicios.php"><button class="btn btn-espanol">Español</button></a></li>
			</ul>
		</div>
		<ul id="nav-link-espanol-desktop" class="nav navbar-nav navbar-right">
			<li><a class="nav-link-espanol" href="servicios.php"><button class="btn btn-espanol">Español</button></a></li>
		</ul>
		<div class="navbar-collapse collapse navbar-right" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-left">
				<li><a class="nav-link" href="index.php">HOME</a></li>
				<li><a class="nav-link" href="about.html">ABOUT</a></li>
				<li><a class="nav-link active" href="services.php">SERVICES</a></li>
				<li><a class="nav-link" href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</nav>
	<?php
	if($IS_MOBILE){
	?>
	<div class="text-center">
		<h3>Our Services</h3>
		<p>Our firm offers a variety of immigration services including family petitions, naturalization and other nonimmigrant visas. The information contained on our website is general information concerning our immigration laws.<br><br><a href="https://egov.uscis.gov/casestatus/landing.do">Check your case status on USCIS</a><br><a href="https://www.uscis.gov/forms">USCIS Forms</a></p>
	</div>
	<div id="accordion" role="tablist" aria-multiselectable="true" class="service-accordion">
	  <div class="panel panel-default">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	    	<div class="panel-heading" role="tab" id="headingOne">
	      		<h5 class="panel-title">Asylum<span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span></h5>
	    	</div>
	    </a>
	    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
	      <p>Asylum allows protection through immigration to the United States for who are being persecuted or fear persecution within their home countries. To become eligible for asylum, an individual must establish the following factors:</P>
  			<ul>
  				<li>Well-founded fear of persecution</li>
  				<li>On account of race, religion, nationality, membership in a particular social group, or your political opinion</li>
  				<li>Imposed by the government or by a group which the government is unable or unwilling to control</li>
  				<li>Meriting a favorable exercise of discretion</li>
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
	          	Deferred Action for Childhood Arrivals <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>(DACA)
	      		</h4>
	    	</div>
		</a>
	    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			<p>Deferred Action for Childhood Arrivals (DACA) is a program initiated by the Obama administration that allows certain undocumented individuals to stay in the United States without being removed.</p>
			<p>Eligibility requirements for deferred action:</p>
			<ul>
				<li>Were under the age of 31 as of June 15, 2012</li>
				<li>Came to the United States before reaching your 16th birthday</li>
				<li>Have continuously resided in the United States since June 15, 2007, up to the present time</li>
				<li>Were physically present in the United States on June 15, 2012, and at the time of making your request for consideration of deferred action with USCIS</li>
				<li>Entered without inspection before June 15, 2012, or your lawful immigration status expired as of June 15, 2012</li>
				<li>Are currently in school, have graduated or obtained a certificate of completion from high school, have obtained a general education development (GED) certificate, or are an honorably discharged veteran of the Coast Guard or Armed Forces of the United States</li>
				<li>Have not been convicted of a felony, significant misdemeanor, three or more other misdemeanors, and do not otherwise pose a threat to national security or public safety</li>
			</ul>
			<p>Benefits of deferred action:</p>
			<ul>
				<li>Work permit</li>
				<li>Limits on deportation</li>
			</ul>
			<p><i>Note that deferred action will not give you a legal permanent residency status (a greencard) and is not a pathway to citizenship.</i></p>
			<h4 class="sub-title">Expanded DACA</h4>
			<p>The expanded DACA program is currently on hold. The program, when it becomes available, will include individuals who arrived in the United States before the age of 16 without an age cap, have resided continuously in the United States starting in January 1, 2010 and expands the work authorization period to 3 years.</p>
			<p>Risks of deferred action:</p>
			<p>Deferred action is not for everybody, for example, any criminal history could put you at risk.  In addition, deferred action is a temporary program. Consult an attorney today to weigh the benefits and risks associated with obtaining deferred action.</p>
	      <!--<div class="text-center">
	      	<a href="#"><button class="btn btn-espanol btn-learnmore">Learn More</button></a>
	      </div>-->
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	    	<div class="panel-heading" role="tab" id="headingThree">
	      		<h4 class="panel-title">Deferred Action for Parents of Americans <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>(DAPA)</h4>
	    	</div>
	    </a>
	    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			<p>Deferred Action for Parents of Americans and Lawful Permanent Residents (“DAPA”) is an executive action that allows individuals who live in the United States to be granted protection from deportation, a work permit and a social security number. It is currently on hold pending court proceedings.</p>
			<h4 class="sub-title">Do I qualify for DAPA?</h4>
			<p>The criteria for DAPA are:</p>
			<ul>
				<li>Have a child who is a U.S. citizen or lawful permanent resident</li>
				<li>Have lived continuously in the U.S. since January 1, 2010</li>
				<li>Was present in the U.S. on November 20, 2014. It is also likely that you will need to be present in the U.S. every day from now until you apply for DAPA</li>
				<li>No lawful immigration status. To meet this requirement, (1) you must have entered the U.S. without papers, or, if you entered lawfully, your lawful immigration status must have expired; and (2) you must not have a lawful immigration status at the time you apply for DAPA</li>
				<li>Have not been convicted of certain criminal offenses, including any felonies and some misdemeanors</li>
			</ul>
			<h4 class="sub-title">When can I apply for DAPA?</h4>
			<p>You cannot apply now, please be wary of anybody who says that you can apply now.</p>
			<h4 class="sub-title">What can I do now to prepare for DAPA?</h4>
			<p>You can start collecting your paperwork. It is likely that the items you will need are the following:</p>
			<ul>
				<li>Money, the fees are expected to be at least $465</li>
				<li>Proof that you were present in the United States on November 20, 2014 (for example, you can obtain bank records, medical records, etc.)</li>
				<li>Proof of your relationship to a U.S. citizen or lawful permanent resident, birth certificate, naturalization certificate, green card, or passport</li>
				<li>Proof of identity: government documents such as a passport, birth certificate etc.</li>
				<li>Proof that you have lived in the United States since January 1, 2010, such as rent receipts, lease agreements, medical records, employment records, tax returns, church records, school records, utility bills</li>
				<li>Obtain any criminal records and have an attorney review them</li>
			</ul>
	      <!--<div class="text-center">
	      	<a href="#"><button class="btn btn-espanol btn-learnmore">Learn More</button></a>
	      </div>-->
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
	    	<div class="panel-heading" role="tab" id="headingThree">
	      		<h4 class="panel-title">Deportation Defense<span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span></h4>
	    	</div>
	    </a>
	    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
  			<p>There are several options available for individuals who have been placed in removal proceedings. The following provides a list of some of the common methods used but this list is not comprehensive.</p>
  			<h4 class="sub-title">Cancellation of Removal</h4>
  			<p>Cancellation of removal is a form of relief for individuals who have been placed in removal proceedings.</p>
  			<p>There are two types of cancellation of removal available and they have different requirements to become eligible. The first type is for lawful permanent residents (also known as a green card holder), the second is for an individual who is not a lawful permanent resident.</p>
  			<p>Requirements for Cancellation of Removal for Certain Lawful Permanent Residents:</p>
  			<ul>
  				<li>Permanent resident for at least five (5) years</li>
  				<li>You have at least seven (7) years continuous residence in the United States after having been lawfully admitted in any status</li>
  				<li>No aggravated felony convictions</li>
  			</ul>
  			<p>Cancellation of Removal for Certain Non-permanent Residents:</p>
  			<ul>
  				<li>10 Years of continuous presence in the United States</li>
  				<li>Good moral character during that period of time</li>
  				<li>Exceptional and extremely unusual hardship to a U.S. Citizen or Lawful Permanent Resident spouse, parent or child</li>
  				<li>No criminal offenses that will disqualify you</li>
  			</ul>
	      <!--<div class="text-center">
	      	<a href="#"><button class="btn btn-espanol btn-learnmore">Learn More</button></a>
	      </div>-->
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
	    	<div class="panel-heading" role="tab" id="headingThree">
	      		<h4 class="panel-title">Family Petitions<span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span></h4>
	    	</div>
		</a>
	    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
	      <p>Coming soon!</p>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
	    	<div class="panel-heading" role="tab" id="headingThree">
	      		<h4 class="panel-title">U Visas<span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span></h4>
	    	</div>
		</a>
	    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
	    	<p>A U visa is a visa for victims of certain crimes.</p>
  			<h4>Who qualifies for a U visa?</h4>
  			<p>Individuals who are victims of certain crimes and who assisted law enforcement with investigating or prosecuting the crime may qualify for a U visa. In certain cases, some individuals who witnessed the crime may also be eligible. Individuals who qualify for a U visa may also be able to obtain a visa for certain family members.</p>
  			<h4>What are the qualifying crimes?</h4>
  			<p>Some of the crimes include violent crimes, assault, domestic violence, kidnapping and sexual crimes.</p>
  			<h4>Does the U visa give me a permanent resident card (green card)?</h4>
  			<p>The U visa is valid for 4 years. After 3 years, you may apply for permanent residency. The U visa also grants a work permit.</p>
  			<h4>How long does the U visa take?</h4>
  			<p>Currently, it takes about 9 months to 1.5 years to obtain your visa. Processing times vary.</p>
  			<h4>Who can apply for the U visa?</h4>
  			<p>Even if you have committed a serious crime, you may apply for the U visa, however, you should seek the advice of an attorney.</p>
  			<h4>How much is the U visa?</h4>
  			<p>The U visa is free, however, the waiver is $585. In addition, there is a fee if you want to obtain a work permit for family members. Low income individuals may qualify for a fee waiver.</p>
	      <!--<div class="text-center">
	      	<a href="#"><button class="btn btn-espanol btn-learnmore">Learn More</button></a>
	      </div>-->
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
	    	<div class="panel-heading" role="tab" id="headingThree">
	      		<h4 class="panel-title">Violence Against Women Act (VAWA)<span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span></h4>
	    	</div>
		</a>
	    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
	      <p>The Violence Against Women Act (VAWA) allows individuals who have experienced battery or extreme cruelty to obtain status and, where applicable, as a defense against removal (deportation). That individual must show the following:</p>
			<ul>
				<li>You were the spouse of a U.S. Citizen or lawful permanent resident abuser</li>
				<li>That he or she is the victim of battery or extreme cruelty</li>
				<li>Extreme hardship to the applicant or to a spouse, parent or child who is a U.S. Citizen or lawful permanent resident</li>
			</ul>
	      <!--<div class="text-center">
	      	<a href="service-violence-against-women-act.html"><button class="btn btn-espanol btn-learnmore">Learn More</button></a>
	      </div>-->
	    </div>
	  </div>
	</div>
	<div class="container-fluid">
		<h4>Not sure what you're looking for?</h4>
		<a href="contact.php"><button class="btn btn-cta-darkblue">CONTACT US</button></a>
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
	      					<li><a class="item sidebar-title" data-target="1" href="#">OUR SERVICES</a></li>
				            <li><a class="item" data-target="2" href="#">Asylum</a></li>
				            <li><a class="item" data-target="3" href="#">Deferred Action for Childhood Arrivals (DACA)</a></li>
				            <li><a class="item" data-target="4" href="#">Deferred Action for Parents of Americans (DAPA)</a></li>
				            <li><a class="item" data-target="5" href="#">Deportation Defense</a></li>
				            <li><a class="item" data-target="6" href="#">Family Petitions</a></li>
				            <li><a class="item" data-target="7" href="#">U Visas</a></li>
				            <li><a class="item" data-target="8" href="#">Violence Against Women Act (VAWA)</a></li>
			        	</ul>
	      			</div>
	      		</div>
	      	</div>
	      	<div class="col-sm-8">
	      		<div id="div1" class="targetDiv text-center">
	      			<p>Our firm offers a variety of immigration services including family petitions, naturalization and other nonimmigrant visas. The information contained on our website is general information concerning our immigration laws.</p>
	      			<p class="text-center schedule-an-appt">Schedule an appointment by calling:</p>
					<h2 class="text-center phone">310-906-0946</h2>
					<div class="or-container">
						<hr class="or-hr-grey">
						<div id="or">or</div>
					</div>
					<a href="contact.php"><button class="btn btn-cta-darkblue">SEND US A MESSAGE</button></a>
					<img class="img-center img-responsive" src="img/pic_services.jpg" />
	      		</div>
	      		<div id="div2" class="targetDiv">
	      			<h2>Asylum</h2>
	      			<p>Asylum allows protection through immigration to the United States for who are being persecuted or fear persecution within their home countries. To become eligible for asylum, an individual must establish the following factors:</P>
	      			<ul>
	      				<li>Well-founded fear of persecution</li>
	      				<li>On account of race, religion, nationality, membership in a particular social group, or your political opinion</li>
	      				<li>Imposed by the government or by a group which the government is unable or unwilling to control</li>
	      				<li>Meriting a favorable exercise of discretion</li>
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
	      			<h2>Deferred Action for Childhood Arrivals (DACA)</h2>
	      			<p>Deferred Action for Childhood Arrivals (DACA) is a program initiated by the Obama administration that allows certain undocumented individuals to stay in the United States without being removed.</p>
	      			<p>Eligibility requirements for deferred action:</p>
	      			<ul>
	      				<li>Were under the age of 31 as of June 15, 2012</li>
	      				<li>Came to the United States before reaching your 16th birthday</li>
	      				<li>Have continuously resided in the United States since June 15, 2007, up to the present time</li>
	      				<li>Were physically present in the United States on June 15, 2012, and at the time of making your request for consideration of deferred action with USCIS</li>
	      				<li>Entered without inspection before June 15, 2012, or your lawful immigration status expired as of June 15, 2012</li>
	      				<li>Are currently in school, have graduated or obtained a certificate of completion from high school, have obtained a general education development (GED) certificate, or are an honorably discharged veteran of the Coast Guard or Armed Forces of the United States</li>
	      				<li>Have not been convicted of a felony, significant misdemeanor, three or more other misdemeanors, and do not otherwise pose a threat to national security or public safety</li>
	      			</ul>
	      			<p>Benefits of deferred action:</p>
	      			<ul>
	      				<li>Work permit</li>
	      				<li>Limits on deportation</li>
	      			</ul>
	      			<p><i>Note that deferred action will not give you a legal permanent residency status (a greencard) and is not a pathway to citizenship.</i></p>
	      			<h4 class="sub-title">Expanded DACA</h4>
	      			<p>The expanded DACA program is currently on hold. The program, when it becomes available, will include individuals who arrived in the United States before the age of 16 without an age cap, have resided continuously in the United States starting in January 1, 2010 and expands the work authorization period to 3 years.</p>
	      			<p>Risks of deferred action:</p>
	      			<p>Deferred action is not for everybody, for example, any criminal history could put you at risk.  In addition, deferred action is a temporary program. Consult an attorney today to weigh the benefits and risks associated with obtaining deferred action.</p>
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
	      			<h2>Deferred Action for Parents of Americans (DAPA)</h2>
	      			<p>Deferred Action for Parents of Americans and Lawful Permanent Residents (“DAPA”) is an executive action that allows individuals who live in the United States to be granted protection from deportation, a work permit and a social security number. It is currently on hold pending court proceedings.</p>
	      			<h4 class="sub-title">Do I qualify for DAPA?</h4>
	      			<p>The criteria for DAPA are:</p>
	      			<ul>
	      				<li>Have a child who is a U.S. citizen or lawful permanent resident</li>
	      				<li>Have lived continuously in the U.S. since January 1, 2010</li>
	      				<li>Was present in the U.S. on November 20, 2014. It is also likely that you will need to be present in the U.S. every day from now until you apply for DAPA</li>
	      				<li>No lawful immigration status. To meet this requirement, (1) you must have entered the U.S. without papers, or, if you entered lawfully, your lawful immigration status must have expired; and (2) you must not have a lawful immigration status at the time you apply for DAPA</li>
	      				<li>Have not been convicted of certain criminal offenses, including any felonies and some misdemeanors</li>
	      			</ul>
	      			<h4 class="sub-title">When can I apply for DAPA?</h4>
	      			<p>You cannot apply now, please be wary of anybody who says that you can apply now.</p>
	      			<h4 class="sub-title">What can I do now to prepare for DAPA?</h4>
	      			<p>You can start collecting your paperwork. It is likely that the items you will need are the following:</p>
	      			<ul>
	      				<li>Money, the fees are expected to be at least $465</li>
	      				<li>Proof that you were present in the United States on November 20, 2014 (for example, you can obtain bank records, medical records, etc.)</li>
	      				<li>Proof of your relationship to a U.S. citizen or lawful permanent resident, birth certificate, naturalization certificate, green card, or passport</li>
	      				<li>Proof of identity: government documents such as a passport, birth certificate etc.</li>
	      				<li>Proof that you have lived in the United States since January 1, 2010, such as rent receipts, lease agreements, medical records, employment records, tax returns, church records, school records, utility bills</li>
	      				<li>Obtain any criminal records and have an attorney review them</li>
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
	      			<h2>Deportation Defense</h2>
	      			<p>There are several options available for individuals who have been placed in removal proceedings. The following provides a list of some of the common methods used but this list is not comprehensive.</p>
	      			<h4 class="sub-title">Cancellation of Removal</h4>
	      			<p>Cancellation of removal is a form of relief for individuals who have been placed in removal proceedings.</p>
	      			<p>There are two types of cancellation of removal available and they have different requirements to become eligible. The first type is for lawful permanent residents (also known as a green card holder), the second is for an individual who is not a lawful permanent resident.</p>
	      			<p>Requirements for Cancellation of Removal for Certain Lawful Permanent Residents:</p>
	      			<ul>
	      				<li>Permanent resident for at least five (5) years</li>
	      				<li>You have at least seven (7) years continuous residence in the United States after having been lawfully admitted in any status</li>
	      				<li>No aggravated felony convictions</li>
	      			</ul>
	      			<p>Cancellation of Removal for Certain Non-permanent Residents:</p>
	      			<ul>
	      				<li>10 Years of continuous presence in the United States</li>
	      				<li>Good moral character during that period of time</li>
	      				<li>Exceptional and extremely unusual hardship to a U.S. Citizen or Lawful Permanent Resident spouse, parent or child</li>
	      				<li>No criminal offenses that will disqualify you</li>
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
	      			<p>Coming soon!</p>
	      		</div>
	      		<div id="div7" class="targetDiv">
	      			<h2>U Visas</h2>
	      			<p>A U visa is a visa for victims of certain crimes.</p>
	      			<h4>Who qualifies for a U visa?</h4>
	      			<p>Individuals who are victims of certain crimes and who assisted law enforcement with investigating or prosecuting the crime may qualify for a U visa. In certain cases, some individuals who witnessed the crime may also be eligible. Individuals who qualify for a U visa may also be able to obtain a visa for certain family members.</p>
	      			<h4>What are the qualifying crimes?</h4>
	      			<p>Some of the crimes include violent crimes, assault, domestic violence, kidnapping and sexual crimes.</p>
	      			<h4>Does the U visa give me a permanent resident card (green card)?</h4>
	      			<p>The U visa is valid for 4 years. After 3 years, you may apply for permanent residency. The U visa also grants a work permit.</p>
	      			<h4>How long does the U visa take?</h4>
	      			<p>Currently, it takes about 9 months to 1.5 years to obtain your visa. Processing times vary.</p>
	      			<h4>Who can apply for the U visa?</h4>
	      			<p>Even if you have committed a serious crime, you may apply for the U visa, however, you should seek the advice of an attorney.</p>
	      			<h4>How much is the U visa?</h4>
	      			<p>The U visa is free, however, the waiver is $585. In addition, there is a fee if you want to obtain a work permit for family members. Low income individuals may qualify for a fee waiver.</p>
	      		</div>
	      		<div id="div8" class="targetDiv">
	      			<h2>Violence Against Women Act (VAWA)</h2>
	      			<p>The Violence Against Women Act (VAWA) allows individuals who have experienced battery or extreme cruelty to obtain status and, where applicable, as a defense against removal (deportation). That individual must show the following:</p>
	      			<ul>
	      				<li>You were the spouse of a U.S. Citizen or lawful permanent resident abuser</li>
	      				<li>That he or she is the victim of battery or extreme cruelty</li>
	      				<li>Extreme hardship to the applicant or to a spouse, parent or child who is a U.S. Citizen or lawful permanent resident</li>
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
				<h4 class="white">Schedule an appointment:</h4>
				<h2 class="phone white">310-906-0946</h2>
				<div class="or-container">
					<hr class="or-hr">
					<div id="or-grey">or</div>
				</div>
				<a href="contact.php"><button class="btn btn-cta">SEND A MESSAGE</button></a>
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
								<td class="footer-label">PHONE</td><td>(310) 906-0946</td>
							</tr>
							<tr>
								<td class="footer-label">HOURS</td><td>Mon - Fri, 8 am - 5 pm</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-6">
					<table class="pull-left">
						<tbody>
							<tr>
								<td class="footer-label">ADDRESS</td><td>1320 West Gardena Blvd, Suite 203</td>
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
					<small>The information contained herein is an advertisement and is for informational purposes only and does not establish an attorney-client relationship. Every individual’s situation is unique, therefore, it also does not substitute for advice from an attorney with regard to a specific individual’s matter or issue. Although every reasonable effort is made to present current and accurate information, the LA Rights Law Office makes no representation or guarantee of any kind and we shall not be liable for any claims of alleged damage or injury arising from the contents of any and all information used from this site.<br>Deniece Kuwahara, attorney-at-law, active member and attorney licensed to practice in the State of Colorado.</small>
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