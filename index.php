<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">       
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <ul class="main-nav js--main-nav">
                        <li><a class="nav js--scroll-to-omnifood" href="#omnifood">Omnifood</a></li>
                        <li><a class="nav js--scroll-to-patatap" href="#patatap">Patatap Clone</a></li>
						<li><a class="nav js--scroll-to-yelpcamp" href="#yelpcamp">Yelp Camp</a></li>
                        <li><a class="nav js--scroll-to-contact" href="#contact">Contact Form</a></li>
                        <li><a class="nav js--scroll-to-about" href="#about">About me</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-android-menu js--ion-android"></i></a>
                </div>
            </nav>     
            <div class="header-content">
                <h1>Web applications</h1>
                <div class="header-author">by Krystian Michalak</div>
                <div class="header-description">The content of this site was created during learning process, mostly during online courses.</div>
                <a href="#contact" class="btn btn-full btn-contact js--scroll-to-contact">Contact</a>
                <a href="#about" class="btn btn-ghost js--scroll-to-about">About Me</a>
            </div>
        </header>
        <section class="section-project js--section-omnifood">
            <div class="row">
                <h2>Omnifood</h2>
                <hr>
                <div class="row section-description">Web site of fictional food delivery company.<br>HTML, CSS, Javascript and jQuery.</div>
            </div>
            <div class="row">
                <a href="omnifood/index.html" class="link-preview js--omnifood" target="_blank"><figure></figure><img src="resources/img/Omnifood.jpg"></a>
            </div>
            <div class="tab-warning js--omnifood-show">Opens in a new tab</div>
        </section>
        <section class="section-project js--section-patatap">
            <div class="row">
                <h2>Patatap clone</h2>
                <hr>
                <div class="row section-description">Keyboard needed! Turn on your audio and hit the keyboard [a-z].<br>HTML, CSS, Javascript, jQuery, Paper.js and Howler.js.</div>
            </div>
            <div class="row">
                <a href="PatatapClone/patatapClone.html" class="link-preview js--patatap" target="_blank"><figure></figure><img src="resources/img/patatapClone.jpg"></a>
            </div>
            <div class="tab-warning js--patatap-show">Opens in a new tab</div>
        </section>
		<section class="section-project js--section-yelpcamp" id="yelpcamp">
            <div class="row">
                <h2>Yelp Camp</h2>
                <hr>
                <div class="row section-description">Post opinions and comments about campgrounds.<br>HTML, CSS, Javascript, jQuery, Node.js and MongoDB.</div>
            </div>
            <div class="row">
                <a href="https://whispering-reef-67244.herokuapp.com/" class="link-preview js--yelpcamp" target="_blank"><figure></figure><img src="resources/img/yelp.jpg"></a>
            </div>
            <div class="tab-warning js--yelpcamp-show">Opens in a new tab</div>
        </section>
        <section id="about" class="about-me js--section-about">
            <div class="row">
                <h2>About me</h2>
                <hr>
                <img class="photo-me" src="resources/img/aboutMe.JPG">
                <div class="about-description">I'm civil engineer living in Gliwice. Few years ago I have started to work for an IT company.
                    Then i've realized that there is nothing more interesting that programming. Nothing even comes close! I spend my free time learning web development.
                    At weekends I study Computer Science at Silesian University of Technology. The journey has began...
                </div>
            </div>
        </section>
        <section id="contact" class="section-contact js--section-contact">
            <div class="row">
                <h2>Contact me</h2>
                <hr>
            </div>
            <form class="contact-form" method="post" action="mailer.php">
                <div class="row">
                        <?php
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                            }
                            if($_GET['success'] == -1) {
                                echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again!</div>";
                            }
                        ?>
                    </div>
                <div class="row">
                    <div class="col span-1-of-3">Name</div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">Email</div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">Drop me a line</div>
                    <div class="col span-2-of-3">
                        <textarea name="message" id="message" placeholder="Your message" required></textarea>
                        <input type="submit" value="Send">
                    </div>
                </div>
            </form>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="resources/js/script.js"></script>
    </body>
</html>