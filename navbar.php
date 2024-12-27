<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Navbar</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome CDN for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<style>
    /* General styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

/* Navbar styling */
.nav-bar {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #2c3e50; /* Changed to a darker color for a more professional look */
    padding: 15px 0;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    position: sticky;
    top: 0;
    z-index: 1000;
}

/* Navbar link styles */
.nav-bar a {
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    padding: 12px 25px;
    margin: 0 20px;
    text-align: center;
    display: flex;
    align-items: center;
    border-radius: 5px;
    transition: all 0.3s ease;
}

/* Icon styling */
.nav-bar a i {
    margin-right: 10px;
    font-size: 22px;
}

/* Hover effects */
.nav-bar a:hover {
    background-color: #ff6347; /* Changed to a soft red-orange color */
    color: #fff;
    box-shadow: 0 4px 8px rgba(255, 99, 71, 0.5);
}

/* Active link styling */
.nav-bar a.active {
    background-color: #ff6347; /* Active link color */
    color: #fff;
    box-shadow: 0 4px 8px rgba(255, 99, 71, 0.7);
}

/* Mobile responsive navbar */
@media screen and (max-width: 768px) {
    .nav-bar {
        flex-direction: column;
        padding: 20px;
    }
    .nav-bar a {
        margin: 12px 0;
        font-size: 22px;
        width: 100%;
        text-align: left;
        padding-left: 30px;
    }
}

</style>
<body>
    <!-- Navbar -->
    <nav class="nav-bar">
        <a class="nav-link active" href="index.php"><i class="fas fa-home"></i> Home</a>
        <a class="nav-link" href="aboutus.php"><i class="fas fa-camera-retro"></i> About Us</a>
        <a class="nav-link" href="contact.php"><i class="fas fa-phone-alt"></i> Contact</a>
        <a class="nav-link" href="services.php"><i class="fas fa-info-circle"></i> Services</a>
    </nav>
</body>
</html>
