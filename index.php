
<?php
include 'navbar.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<!-- Full-width images with number and caption text -->
 
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/mountain.avif" style="width:100%">
  <div class="text">Mountain View</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/sky.avif" style="width:100%">
  <div class="text">Sky view</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/birdsgroup.avif" style="width:100%">
  <div class="text">Birds View</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>



<!-- About-us -->
<section class="about-us">
  <div class="about-container">
    <div class="about-text">
      <h2>About Us</h2>
      <p>
        Welcome to <strong>Visionary Frames</strong>, where every moment is a masterpiece. We are passionate about capturing life’s most precious memories, turning them into timeless works of art. Our dedication to storytelling through photography allows us to create images that evoke emotions and preserve your cherished moments forever.
      </p>
      <p>
        With a blend of creativity, technical expertise, and an eye for detail, we specialize in portrait, wedding, and event photography. Whether it's the sparkle in your eyes or the laughter shared among loved ones, we’re here to ensure no moment goes unnoticed.
      </p>
      <p>
        Let us tell your story, one frame at a time.
      </p>
      <a href="#contact" class="about-btn">Contact Us</a>
    </div>
    <div class="about-gallery">
      <img src="images/gerap.avif" alt="Beautiful Landscape" class="gallery-item">
      <img src="images/bird2.avif" alt="Couple Photoshoot" class="gallery-item">
      <img src="images/cat.avif" alt="Wedding Moments" class="gallery-item">
    </div>
  </div>
</section>




<section class="cards-section">
    <h2 class="section-title">Photography cards</h2>
    <div class="cards-container">
        <div class="card">
            <img src="images/mountain.avif" alt="Image 1" class="card-img">
            <div class="card-content">
                <h3>Card Title 1</h3>
                <p>Card description goes here. You can describe the image or the product.</p>
            </div>
        </div>

        <div class="card">
            <img src="images/sky.avif" alt="Image 2" class="card-img">
            <div class="card-content">
                <h3>Card Title 2</h3>
                <p>Card description goes here. You can describe the image or the product.</p>
            </div>
        </div>

        <div class="card">
            <img src="images/forest.avif" alt="Image 3" class="card-img">
            <div class="card-content">
                <h3>Card Title 3</h3>
                <p>Card description goes here. You can describe the image or the product.</p>
            </div>
        </div>
    </div>
</section>



<!-- Photo Grid -->
 <div class="responsive-grid">
  <h1>Photo section</h1>
  <p>Company Capture normal photos</p>
</div>
<div class="row"> 
  <div class="column">
    <img src="images/beautiful-shot-three-kudus-walking-together-surrounded-by-green-nature-daylight.jpg" style="width:100%">
    <img src="images/bird2.avif" style="width:100%">
    <img src="images/girl.avif" style="width:100%">
    <img src="images/cat.avif" style="width:100%">
    <img src="images/mon.avif" style="width:100%">
    <img src="images/zebra.avif" style="width:100%">
    <img src="images/bird4.avif" style="width:100%">
  </div>
  <div class="column">
    <img src="images/gerap.avif" style="width:100%">
    <img src="images/bird1.avif" style="width:100%">
    <img src="images/girl.avif" style="width:100%">
    <img src="images/red-cat-dark-pink-tulips.jpg" style="width:100%">
    <img src="images/gerap.avif" style="width:100%">
    <img src="images/beautiful-shot-three-kudus-walking-together-surrounded-by-green-nature-daylight.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="images/zebra.avif" style="width:100%">
    <img src="images/cat.avif" style="width:100%">
    <img src="images/bird3.avif" style="width:100%">
    <img src="images/bird4.avif" style="width:100%">
    <img src="images/zebra.avif" style="width:100%">
    <img src="images/girl.avif" style="width:100%">
    <img src="images/cat.avif" style="width:100%">
  </div>
  
</div>


<!-- This is a Footer section -->
<footer>
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <p>
                        123 Main St<br>
                        Anytown, USA<br>
                        <a href="tel:+15551234567">555-123-4567</a><br>
                        <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                    </p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Photo Gallery</h3>
                    <div class="photo-gallery">
                        <a href="#"><img src="images/bird1.avif" alt="Image 1"></a>
                        <a href="#"><img src="images/mountain.avif" alt="Image 2"></a>
                        <a href="#"><img src="images/sky.avif" alt="Image 3"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            &copy; 2023 Your Company Name. All Rights Reserved. <br>
            <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-of-service">Terms of Service</a>
        </div>
    </footer>

    <script src="script.js">
        
    </script>
</body>
</html>
