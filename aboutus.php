<?php

include 'navbar.php';

// About Us content (could be fetched from a database)
$about_us_content = "We are a passionate photography company, dedicated to capturing memories that last a lifetime. Our team of professional photographers specialize in various styles, including landscape, portrait, and event photography. With years of experience, we ensure each shot is perfect, creating beautiful stories in every frame.";

$team_members = [
    ['name' => 'John Doe', 'role' => 'Photographer', 'image' => 'images/member1.avif'],
    ['name' => 'Jane Smith', 'role' => 'Lead Photographer', 'image' => 'images/member2.avif'],
    ['name' => 'Sarah Lee', 'role' => 'Assistant Photographer', 'image' => 'images/member3.avif'],
];

$photography_images = [
    'images/cat.avif',
    'images/gerap.avif',
    'images/mon.avif',
    'images/red-cat-dark-pink-tulips.jpg',
    'images/sky.avif',
    'images/bird2.avif',
    'images/mountain.avif',
    'images/zebra.avif',
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="aboutus.css"> <!-- Link to external CSS file -->
</head>
<body>






    <div class="about-us-container">
       
        <h1>About Us</h1>
            <p>Discover our story, our team, and our passion for photography.</p>

        <section class="about-content">
            <h2>Our Story</h2>
            <p><?php echo $about_us_content; ?></p>
        </section>

        <section class="team-section">
            <h2>Meet the Team</h2>
            <div class="team-grid">
                <?php foreach ($team_members as $member): ?>
                    <div class="team-member">
                        <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>" class="team-img">
                        <h3><?php echo $member['name']; ?></h3>
                        <p><?php echo $member['role']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="photography-gallery">
            <h2>Photography Gallery</h2>
            <div class="gallery-grid">
                <?php foreach ($photography_images as $image): ?>
                    <div class="gallery-item">
                        <img src="<?php echo $image; ?>" alt="Photography Image" class="gallery-img">
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
    
</body>

</html>
