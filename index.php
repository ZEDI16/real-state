<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Golden Keys Realty: Unlocking Your Future Home. Explore a wide selection of premium real estate listings, from dream homes to investment properties. Let us guide you every step of the way in your property journey." />
  <!-- css  -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/responsive.css" />

  <!-- icons  -->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  <title>Golden Keys Realty: Unlocking Your Future Home | index</title>
</head>

<body>
  <div class="container">
    <header>
      <!-- Navigation Bar -->
      <nav class="main-nav-bar" role="navigation">
        <div class="nav-bar">
          <i class="bx bx-menu sidebarOpen"></i>
          <!-- Logo and branding -->
          <span class="logo navLogo">
            <a href="index.html" aria-label="Golden Keys Realty Home">Golden Keys Realty</a>
          </span>
          <div class="menu">
            <ul class="nav-links">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li class="get-yours">Get yours today!</li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section>
        <h1 class="home">home</h1>
        <section class="form-container" aria-labelledby="inquiry-form">
          <h2 id="inquiry-form">Real Estate Inquiry Form</h2>
          <p>
            Fill out the form below to inquire about properties or request
            more information.
          </p>
          <form action="submit_inquiry.php" method="post">
            <div class="form-group">
              <input type="text" id="name" name="name" required aria-required="true" placeholder="Your name..." />
            </div>
            <div class="form-group">
              <input type="email" id="email" name="email" required aria-required="true" placeholder="Your email..." />
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
    <footer></footer>
  </div>

  <script src="./function/app.js"></script>
</body>

</html>