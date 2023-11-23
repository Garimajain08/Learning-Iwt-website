<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <h2>Moonsite</h2>
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#featurebox">Features</a></li>
                <li><a href="#about_box">About</a></li>
                <li><a href="#contactbox">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Grow with Moonsite</h1>
            <p>
                "Moonsite: Illuminating minds with a celestial array of educational brilliance."</p>

        </div>
    </header>
    <div class="container" id="featurebox">
        <p>
        <h2 class="contact-heading">Our Features</h2>
        </p>
        <section class="features">
            <div class="feature-container">

                <div class="feature-box">
                    <div class="f-img">
                        <img src="images/info-icon1.png" />
                    </div>
                    <div class="f-text">
                        <h3>Web Development</h3>
                        <p>Crafting digital galaxies one code constellation at a time with precision and innovation at the heart of web development."</p>
                        <!-- <a href="#" class="main-btn">Check</a> -->
                    </div>
                </div>

                <div class="feature-box">
                    <div class="f-img">
                        <img src="images/info-icon2.png" />
                    </div>
                    <div class="f-text">
                        <h3>Software Development</h3>
                        <p>
                            Empowering progress through lines of code, where innovation meets functionality in the realm of software development.</p>

                    </div>
                </div>

                <div class="feature-box">
                    <div class="f-img">
                        <img src="images/info-icon3.png" />
                    </div>
                    <div class="f-text">
                        <h3>App Development</h3>
                        <p>Shaping seamless experiences, one app at a time, where functionality meets user delight in the world of app development.</p>
                        <!-- <a href="#" class="main-btn">Check</a> -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container" id="about_box">
        <h2 class="contact-heading">About us</h2>
        <section class="about">

            <div class="about-img">
                <img src="images/about.png">
            </div>
            <div class="about-text">
                <h2>Our Story</h2>
                <p> From my childhood, the desire to educate and inspire students has burned brightly within us. While many aspire to become engineers, our dream has always been to nurture and guide them to achieve their goals. We aspire to be the driving force behind your journey to a successful career, much like the moon illuminates the night sky.</p>
                <h2>Our mission</h2>
                <p> Moonsite mission is to empower the next generation of engineers and innovators. We are committed to providing high-quality education and guidance to help you reach your full potential. Our dedicated team of educators and professionals is here to support your journey towards a brighter and successful career.</p>
            </div>
        </section>
    </div>
    <footer class="contact" id="contactbox">
        <div class="contact-heading">
            <h1>Contact Us</h1>

        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name" />
            <input type="email" name="email" placeholder="Your E-Mail" />
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </footer>
</body>

</html>