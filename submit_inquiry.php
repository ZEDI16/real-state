<?php
// submit_inquiry.php

// Include the database connection
include('database.php');

// Initialize a variable to store the confirmation message
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $property = $_POST['property'];
    $budget = $_POST['budget'];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO inquiries (name, email, phone, property, budget) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssd", $name, $email, $phone, $property, $budget);

    // Execute the query
    if ($stmt->execute()) {
        // Set the success message if insertion is successful
        $message = "Data has been saved!";
    } else {
        $message = "Error: " . $stmt->error;  // Error message if insertion fails
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

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
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <title>Golden Keys Realty: Unlocking Your Future Home | index</title>
</head>

<body>
    <div class="container">
        <header>
            <nav class="main-nav-bar">
                <span class="logo">Golden Keys Realty</span>
                <div class="menu">
                    <ul class="nav-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <section>
                <h1 class="home">Home</h1>
                <section class="form-container" aria-labelledby="inquiry-form">
                    <h2 id="inquiry-form">Real Estate Inquiry Form</h2>
                    <p>Fill out the form below to inquire about properties or request more information.</p>

                    <form action="submit_inquiry.php" method="post">
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
    </div>

    <script src="./function/app.js"></script>
</body>

</html>