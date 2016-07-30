<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
		xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="utf-8">
		<!-- sets IE rendering to IE-EDGE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<!-- sets viewport width to device width, scaling 1:1 -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Limelight|Lobster+Two|Overlock|Forum|Flamenco|Sail|Lancelot'
				rel='stylesheet' type='text/css'>

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- OUR CUSTOM CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-2.2.3.min.js"
				  integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script src='https://www.google.com/recaptcha/api/verify'></script>
<!--		My reCAPTCHA wasn't working consistently because the images weren't popping up after the first validation. The Google documentation said this dependency was required as well. Added it and it works.-->

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>
<!--		<script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js"></script>-->
<!--		<script src="js/stellar.js"></script>-->
<!--I ended up commenting stellar.js out because it makes scrolling really choppy! But I am relying on defaults that it imported, so I didn't just get rid of it.-->
		<title>Cynthia Hodgson Music - Violin, piano, and vocal performance and accompaniment in Woodstock, IL</title>
	</head>
	<body class="body">

		<!--Navbar-->
		<header id="top">
			<nav class="navbar navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu"
								  aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#home">
							<img src="images/brand 1.png" alt="Brand" class="logo img-responsive">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="main-menu">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#home">Home</a></li>
							<li><a href="#repertoire">Repertoire</a></li>
							<li><a href="#rates-and-terms">Rates and Terms</a></li>
							<li><a href="#testimonials">Testimonials</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<!-- ========================== -->
		<!--  Section One               -->
		<!-- ========================== -->
		<section class="parallax" data-stellar-background-ratio="1.5" id="home">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img class="img-circle img-responsive headshot" src="images/cynthia-home-picture.jpg"
							  alt="Cynthia's headshot"/>
					</div>
					<div class="col-md-7">
						<h1>Welcome</h1>
						<p class="text-justify">Thank you for visiting my site! I am a violinist, pianist, and vocalist from Woodstock
							with over 20 years experience in solo performance, ensembles, weddings, and private parties. For
							every event, I strive to offer you the best musical experience.</p>
						<p class="text-justify">I have had the opportunity to play as a soloist and accompanist. I am also available to accompany other musicians. I have sung for sporting games, funerals, weddings, and church services. I am vocally trained in classical and pop styles. Currently, I am a violinist with the Lake Geneva Symphony. In addition, I am a member of my local church's praise team, where I serve as violinist, pianist, and vocalist for the weekly services. </p>
						<p class="text-justify">Please note that at this time I do request that a piano or keyboard be provided for me. Should you be requesting an ensemble, the other musicians are also members of the Lake Geneva Symphony Orchestra or other area ensembles. My ensemble can cover violin, viola, cello, piano, and flute.</p>
						<p class="text-justify">Many blessings to you! I look forward to creating musical memories for your special occasion.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<p class="text-center quote">"Music gives a soul to the universe, wings to the mind, flight to the
							imagination, and life to everything." - Plato</p>
					</div>
				</div>
			</div>
		</section>

		<!-- ========================== -->
		<!--  Section Two               -->
		<!-- ========================== -->
		<section class="parallax" data-stellar-background-ratio="1.5" id="repertoire">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-md-offset-2">
						<h1>Sample Repertoire</h1>
						<h2>String Ensemble</h2>
						<ul class="list-group">
							<li class="list-group-item">"All You Need is Love" ~ The Beatles</li>
							<li class="list-group-item">"10,000 Reasons" ~ Christina Perri</li>
							<li class="list-group-item">Contemporary Christian selections</li>
							<li class="list-group-item">Christmas/Holiday favorites</li>
							<li class="list-group-item">Folk & fiddle tunes</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 col-md-offset-2">
						<h2>Solo Piano</h2>
						<ul class="list-group">
							<li class="list-group-item">Ragtime favorites including "Maple Leaf Rag" & "The Entertainer"</li>
							<li class="list-group-item">Contemporary & classic love songs</li>
							<li class="list-group-item">Classical selections including "Moonlight Sonata" & "Fur Elise"</li>
							<li class="list-group-item">Accompaniment for soloists & ensembles</li>
							<li class="list-group-item">Original renditions of popular songs</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<p class="text-center quote">"To play a wrong note is insignificant. To play without passion is
							inexcusable." - Ludwig von Beethoven</p>
					</div>
				</div>
			</div>
		</section>

		<!-- ========================== -->
		<!--  Section Three             -->
		<!-- ========================== -->
		<section class="parallax" data-stellar-background-ratio="1.5" id="rates-and-terms">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-md-offset-2">
						<h1>Rates and Terms</h1>
						<p>Please use the contact form at the end of my site to initiate a booking, and I will get back to you promptly via email.</p>
						<p>A two week grace period is allowed from the time of our initial conversation to "hold" the date. If no communication or confirmation has been received, the date will be released to another potential client.</p>
						<p>I require more than 30 days notice to book ensembles. Events scheduled more than one year in advance may be subject to different musicians. The official ensemble will be confirmed no less than 3 months before the scheduled event.</p>
						<p>My rates are:</p>
						<ul>
							<li>$150.00 per hour (1 hour minimum)</li>
							<li>$100-150 for the first hour for all other musicians (other musicians will be paid separately from Cynthia.) Again, events requested less than one month in advance will be solo performances only.
							</li>
							<li>$75.00 for each half-hour</li>
							<li>$50.00 for each quarter hour</li>
							<li>$40.00 planning fee (if event requested more than 6 months prior)</li>
							<li>$25.00 planning fee (if event requested less than 6 months prior)</li>
							<li>$25.00 per extra mile travel fee for events not in McHenry County, IL or Walworth County, WI
							</li>
						</ul>
						<p>Payment is due by the date of the event. A three-day grace period will be allowed after the wedding for payment to be received. After three days there will be a $25 penalty added for each day the payment is past due.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- ========================== -->
		<!--  Section Four              -->
		<!-- ========================== -->
		<section id="testimonials">
			<div class=" container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1>Testimonials from Past Clients</h1>
						<p>"Cynthia was the perfect choice for our wedding ceremony music! From the start she was able to offer suggestions, or if I knew the tune she could quickly point me in the right direction of the song. Her communication made me feel confident she would arrive promptly for the big day and she even assembled another musician to work with her. Everything was flawless, I highly recommend Cynthia." ~ Anne</p>
						<div class="col-xs-12">
							<img class="center-block img-responsive quote-border" src="images/border2green.png"
								  alt="border"/>
							<!--Rochelle, I know you commented that I had something weird going on here, but I got center-block out of the Bootstrap documentation. @see http://getbootstrap.com/css/#images-responsive.-->
						</div>
						<p>"Cynthia played our November 2013 wedding at Hawk's View Golf Club in Lake Geneva, Wisconsin. We had a great experience! My husband and I had met with Cynthia months prior to the ceremony where she listened to what we were looking for and created a music set to match the theme and feel of our wedding. She was a pleasure to work with and played beautiful music during our ceremony and cocktail hour. We were very happy with her and thought that the live music really added a great touch to our special day!"   ~ Angel</p>
						<div class="col-xs-12">
							<img class="center-block img-responsive quote-border" src="images/border2green.png"
								  alt="border"/>
						</div>
						<p>"After hearing Cynthia play at my friend’s wedding, I knew I wanted her to play for my ceremony as well. Cynthia and another violinist played for my wedding in at the Holiday Inn Crystal Lake on August 2, 2014. Cynthia was amazing and it was such a special and personal touch for my wedding day!"   ~ Sara</p>
						<div class="col-md-8">
							<img class="img-responsive feature-photo" src="images/cynthia-testimonials-picture.jpg"
								  alt="Cynthia group"/>
						</div>
						<p>"The music Cynthia played for our wedding ceremony added an element that could not be duplicated by anyone else. The string music created a romantic and elegant setting outdoors by the water. Cynthia is very professional, she answered every e-mail promptly and was very assuring with sincerity as I had so many questions, and she made things stress-free! If you are looking for a string musician to add to your wedding I would recommend her. People say that your own wedding is a blur and you can barely remember what happens during throughout the day because it goes by so fast, but one of the things I do remember is the music being played as I was walking down the aisle with my father. It is most memorable! We also had a lot of our guests tell us that the music during the ceremony was the perfect touch and it couldn't have been better in any way."   ~ Oceana</p>
						<div class="col-xs-12">
							<img class="center-block img-responsive quote-border" src="images/border2green.png"
								  alt="border"/>
						<p>"The Abbey Resort listed Cynthia on their preferred vendor’s list as a classical musician, and she was absolutely a joy to work with in planning music. I was clueless when it came to wedding music, and she guided me through each step of the way with patience and professionalism. When it came to the day of the wedding the music was simply gorgeous and added so much to our special day." ~
							Rachel</p>
						<div class="col-xs-12">
							<img class="center-block img-responsive quote-border" src="images/border2green.png"
								  alt="border"/>
						</div>
						<p>"When my original wedding plans changed due a family illness, we called countless area musicians before finding Cynthia. I didn't know if she would be willing to play for us on such short notice, but not only was she available, she also organized the entire musical layout for us in less than a day! Not only did she play for the ceremony, but she was also very helpful in calming a nervous bride's spirit. It ended up raining during the middle of our ceremony and I was so nervous Cynthia wouldn't be able to play her violin due to the conditions. She surprised everyone by SINGING the “Ave Maria” instead of playing it and had even asked our wedding planner for an umbrella so her instrument could stay dry enough to play our recessional. Cynthia is one of the most caring, compassionate and insanely talented people I’ve ever met." ~ Victoria</p>
						<div class="col-xs-12">
							<img class="center-block img-responsive quote-border" src="images/border2green.png"
								  alt="border"/>
						</div>
						<p>"I decided to take the music planning into my own hands for our wedding. I had no clue what I was doing and only had mentioned to Cynthia that I really had liked a few contemporary pieces my wife and I listened to on the radio. Classical music wasn't really our style and we wanted music that was a little bit different. Not only did Cynthia work with our pianist in planning the playlist, she ended up playing an incredible classical version of our favorite song as well. Cynthia responded to all our questions and didn't laugh at how clueless we were when it came to classical music. Cynthia worked with us to select music to reflect our style and also still make it her own too.”  ~ Brian</p>
						<div class="col-xs-12">
							<img class="center-block img-responsive quote-border" src="images/border2green.png"
								  alt="border"/>
						</div>
						<p>"Cynthia played our wedding at the Geneva Inn.  We had originally planned on hiring a DJ, but I'm so glad we chose live music instead. We had a small ceremony, but the music added so much to this. Originally we had hired Cynthia only for the ceremony, but at the very last minute we asked if she could stay for cocktail hour as well. Not only did Cynthia play an extra hour for us at the last minute, she also spoke to the restaurant pianist and played and sang for us so we could actually have a "first dance" (which we had not planned on doing.) It was amazing!” ~ Megan</p>
						<div class="col-xs-12">
							<img class="center-block img-responsive quote-border" src="images/border2green.png"
								  alt="border"/>
						</div>
						<p>"Cynthia's presence and talent made our party (my parent’s anniversary celebration) come to life. She is open to suggestions and requests. I'm planning on using her for our wedding ceremony this year." ~ Michelle</p>
						<div class="col-xs-12">
							<img class="center-block img-responsive quote-border" src="images/border2green.png"
								  alt="border"/>
						</div>
						<p>"Because I had previously heard Cynthia perform and seen her amazing talents, she was the first one who came to mind to provide music at our wedding.  The violin pre-service music was simply beautiful.  I had written some customized lyrics for my husband to the song Evergreen that Cynthia sang during the service.  I will forever remember that special day in my life as all details, including the music, made it so magical!  ~ Pam</p>
					</div>
<!--					<img class="center-block img-responsive quote-border" src="images/border1green.png"-->
<!--						  alt="border"/>-->
					</div>

					<div class="col-md-offset-2 col-md-8 col-md-offset-2">

					<h1>Testimonials from Worship Leaders</h1>
					<div class="col-md-6">
						<img class="img-responsive minor-photo" src="images/pic 7.jpg"
							  alt="Cynthia group"/>
					</div>
					<p>"Cynthia is a fantastic musician who has shared her gift of music with our congregation in worship many times.  She is delightful to work with and brings a wide range of talent.  We always look forward to having her enhance our worship with music. She is creative, flexible and thoughtful in her choice of selections to share.  I highly recommend her."</p>
					<p>~ Rev. Laura McLeod, Senior Pastor,
					Delavan United Church of Christ</p>
					<p>"Cynthia Hodgson is passionate about music and this can be felt in her beautiful performances. She has provided many joyful moments for our congregation when she shares her gift of music during worship service. Cynthia is marvelous to work with - she is flexible and upbeat. She is multi-talented musician who has a great understanding of music and is able to inspire all who hear her perform."</p>
					<p>~ Nancy Rasmussen, Director of Music Ministry, Delavan United Church of Christ</p>
					</div>
				</div>
			</div>
		</section>

		<!-- ========================== -->
		<!--  Section Five              -->
		<!-- ========================== -->
		<section class="parallax" data-stellar-background-ratio="1.5" id="contact">
			<div id="contact">
				<div class="container">
					<div class="row">
						<div class="col-md-4 p-t-4">
							<img class="img-circle img-responsive" src="images/cynthia-contact-picture.jpg" alt="Cynthia's picture"/>
						</div>
						<!--Begin Contact Form-->
						<div class="col-md-7">
							<h1>Book me!</h1>
							<form id="contact-form" action="php/mailer.php" method="post">
								<div class="form-group">
									<label for="name">Name <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="name" name="name">
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
										<input type="email" class="form-control" id="email" name="email">
									</div>
								</div>
								<div class="form-group">
									<label for="message">Message <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment" aria-hidden="true"></i>
										</div>
										<textarea class="form-control" rows="5" id="message" name="message"
													 placeholder="Please tell me a little about your needs, including the type of event and date, if set. (2000 characters max.)"></textarea>
									</div>
								</div>
								​  <!-- reCAPTCHA -->
								<div class="g-recaptcha" data-sitekey="6LdPBCITAAAAAGhdX0mJM4OcGsUgqYoCrXsx3AP9"></div>
								​
								<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
								<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
							</form>
							​
							<!--empty area for form error/success output-->
							<div class="row">
								<div class="col-xs-12">
									<div id="output-area"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<p class="text-center quote">"My heart, O God, is steadfast; I will sing & make music with all my soul." - Psalm 108:1</p>
				</div>
			</div>
			<br>
		</section>

		<!-- ========================== -->
		<!--  Footer                    -->
		<!-- ========================== -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="text-center col-xs-12">
						<div class="copyright text-footer">
							<small>© 2016 by Kate McGaughey, therealmcgaughey@gmail.com</small>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</body>
</html>