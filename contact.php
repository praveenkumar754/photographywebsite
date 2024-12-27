
<?php

include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>

    <!-- Contact Us Section -->
    <section class="contact-section">
        <h2 class="contact-title">Contact Us</h2>
        <p class="contact-description">We would love to hear from you! Please fill out the form below or reach out through the contact information provided.</p>

        <!-- Contact Form -->
        <div class="contact-form-container">
            <form action="#" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>

                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                </div>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>

        <!-- Contact Information -->
        <div class="contact-info">
            <h3>Contact Information</h3>
            <p><strong>Email:</strong> contact@yourwebsite.com</p>
            <p><strong>Phone:</strong> +1 234 567 890</p>
            <p><strong>Address:</strong> 123 Photography St, City, Country</p>
        </div>
    </section>

</body>
</html>
