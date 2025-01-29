<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Golden Keys Realty: Unlocking Your Future Home. Explore a wide selection of premium real estate listings, from dream homes to investment properties. Let us guide you every step of the way in your property journey." />

    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
    <link rel="stylesheet" href="./assets/boxicons-master/css/boxicons.min.css" />

    <title>Golden Keys Realty: Unlocking Your Future Home | home</title>
</head>

<body>
    <!-- Main navigation container -->
    <div class="container">
        <header>
            <nav class="main-nav-bar">
                <div class="nav-bar">
                    <i class="bx bx-menu sidebarOpen"></i>
                    <!-- Logo and branding -->
                    <span class="logo navLogo"><a href="index.html">Golden Keys Realty</a></span>

                    <!-- Mobile menu and links -->
                    <div class="menu">
                        <div class="logo-toggle">
                            <span class="logo"><a href="index.html">Golden Keys Realty</a></span>
                            <i class="bx bx-x siderbarClose"></i>
                        </div>
                        <ul class="nav-links">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="bestDeals.html">Best deals</a></li>
                            <li><a href="about.html">About</a></li>
                            <li class="get-yours">Get yours today!</li>
                        </ul>
                    </div>

                    <!-- Dark mode toggle and search box -->
                    <div class="darkLight-searchBox">
                        <div class="dark-light">
                            <i class="bx bx-moon moon"></i>
                            <i class="bx bx-sun sun"></i>
                        </div>
                        <div class="searchBox">
                            <div class="searchToggle">
                                <i class="bx bx-x cancel"></i>
                                <i class="bx bx-search search"></i>
                            </div>
                            <div class="search-field">
                                <input type="text" placeholder="Search..." />
                                <i class="bx bx-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main content of the page -->
        <main>
            <section>
                <!-- Section with heading -->
                <h1 class="home">home</h1>
                <section class="form-container" aria-labelledby="inquiry-form">
                    <h2 id="inquiry-form">Real Estate Inquiry Form</h2>
                    <p>
                        Fill out the form below to inquire about properties or request
                        more information.
                    </p>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" id="name" name="name" required aria-required="true"
                                placeholder="Your name..." />
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" required aria-required="true"
                                placeholder="Your email..." />
                        </div>
                        <div class="form-group">
                            <input type="tel" id="phone" name="phone" placeholder="Your phone..." />
                        </div>
                        <div class="form-group">
                            <select id="property" name="property">
                                <option value="house">House</option>
                                <option value="apartment">Apartment</option>
                                <option value="land">Land</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" id="budget" name="budget" min="0" placeholder="Your budget..." />
                        </div>
                        <button type="submit">Submit Inquiry</button>
                    </form>
                </section>
            </section>
        </main>
        <!-- Footer section with company info and links -->
        <footer>
            <div class="footer-container">
                <div class="footer-first-section">
                    <h2 class="logo-text">Golden Keys Realty</h2>
                    <p class="footer-description">
                        Unlocking Your Future Home. Explore a wide selection of premium real estate listings, from dream
                        homes to
                        investment properties.
                        Let us guide you through every step of your property journey. &copy; 2025 Golden Keys Realty.
                    </p>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms.html">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-social-media">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="https://facebook.com" target="_blank" class="social-icon"><i
                                    class="bx bxl-facebook"></i>
                                Facebook</a></li>
                        <li><a href="https://twitter.com" target="_blank" class="social-icon"><i
                                    class="bx bxl-twitter"></i>
                                Twitter</a></li>
                        <li><a href="https://instagram.com" target="_blank" class="social-icon"><i
                                    class="bx bxl-instagram"></i>
                                Instagram</a></li>
                        <li><a href="https://linkedin.com" target="_blank" class="social-icon"><i
                                    class="bx bxl-linkedin"></i>
                                LinkedIn</a></li>
                    </ul>
                </div>
                <!-- Suggestion Form Section -->
                <div class="footer-suggestion-form">
                    <h3>Contact us</h3>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" id="email" name="email" required aria-required="true"
                                placeholder="Your email..." />
                        </div>
                        <div class="form-group">
                            <textarea id="suggestion" name="suggestion" placeholder="Your suggestions..."
                                required></textarea>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </footer>
    </div>
    <!-- External JavaScript file for additional functionality -->
    <script src="./function/app.js"></script>
</body>

</html>