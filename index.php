<?php
require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arba Minch University - Water Institute Digital Information Hub">
    <title>Home - AMU Water Institute</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section with Video Background -->
    <section class="hero-section">
        <div class="video-background">
            <video autoplay muted loop playsinline>
                <source src="assets/videos/water-institute-bg.mp4" type="video/mp4">
                <source src="assets/videos/water-institute-bg.webm" type="video/webm">
                <!-- Fallback image if video doesn't load -->
                <img src="assets/images/hero-fallback.jpg" alt="Water Institute">
            </video>
            <div class="video-overlay"></div>
        </div>
        <div class="hero-content">
            <h1 class="hero-title fade-in">Welcome to AMU Water Institute</h1>
            <h2 class="hero-subtitle fade-in-delay">Digital Information Hub</h2>
            <p class="hero-text fade-in-delay-2">Leading water research and education in East Africa</p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-box fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Departments</h3>
                    <p>Explore our four specialized departments offering cutting-edge water engineering programs</p>
                    <a href="departments.php" class="feature-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="feature-box fade-in-delay">
                    <div class="feature-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Digital Library</h3>
                    <p>Access course materials, research papers, and educational resources</p>
                    <a href="library.php" class="feature-link">Browse Library <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="feature-box fade-in-delay-2">
                    <div class="feature-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Research & Innovation</h3>
                    <p>Discover groundbreaking research and innovative projects in water science</p>
                    <a href="news.php#research" class="feature-link">View Research <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="feature-box fade-in-delay-3">
                    <div class="feature-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Contact Us</h3>
                    <p>Get in touch with our team for inquiries and collaborations</p>
                    <a href="contact.php" class="feature-link">Contact <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">4</div>
                    <div class="stat-label">Departments</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Staff Members</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">100+</div>
                    <div class="stat-label">Research Papers</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Students</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>
</html>

