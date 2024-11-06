<?php
/* Template Name: Home Page */
get_header();
?>
<main class="site-main">
    <div class="wds-container">
        <p class="professional-name" aria-label="Professional Name">Sahil Sharma</p>
        <h1 class="hero-heading">The Simple,<br />Clean Design</h1>
        <p class="hero-descriptionm">Agency provides a full service range including technical skills, design, business understanding.</p>
        <button aria-label="View Portfolio">See My Work</button>
    </div>
</main>

<section class="services">
    <div class="wds-container">
        <div class="section-details">
            <p class="introductory-text">SERVICE</p>
            <h2>How Can I Help</h2>
        </div>
        <div class="services-grid">
            <div class="service-item">
                <div class="service-info">
                    <img src="#" aria-label="Design Icon" />
                    <p class="service-title">Design</p>
                </div>
                <p class="service-description">
                    Agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house.
                </p>
                <div class="service-cta">
                    <a href="#" aria-label="Learn More about Design Services">Learn More</a>
                </div>
            </div>
        </div>
        <p class="want-more-services">Want More Services? <a href="#" aria-label="Explore more services provided by us.">Explore now</a></p>
    </div>
</section>

<section class="portfolio">
    <div class="wds-container">
        <div class="section-details">
            <p class="introductory-text">PORTFOLIO</p>
            <div class="inline-flex">
                <h2>Latest Work</h2>
                <a href="#">EXPLORE MORE</a>
            </div>
        </div>
    </div>
    <div class="portfolio-grid">
        <div class="portfolio-item">
            <p class="category">Design</p>
            <h3>Website</h3>
        </div>
        <div class="portfolio-item">
            <p class="category">Design</p>
            <h3>Website</h3>
        </div>
        <div class="portfolio-item">
            <p class="category">Design</p>
            <h3>Website</h3>
        </div>
    </div>
</section>

<section class="about-me">
    <div class="wds-container">
        <div class="grid">
            <img src="#" alt="Artwork for about me section" />
            <div class="about-info">
                <p class="introductory-text">Sahil Sharma</p>
                <h2>Professional Web Designer</h2>
                <p class="description"></p>
                <a href="#" class="about-cta" aria-label="Find out more about Sahil.">ABOUT ME</a>
            </div>
        </div>
        <div class="stats-grid">
            <div class="stat">
                <img src="#" alt="Calendar icon" />
                <div class="stat-meta">
                    <p class="stat-value">10</p>
                    <p class="stat-label">Years of experience</p>
                </div>
            </div>
            <div class="stat">
                <img src="#" alt="Briefcase icon" />
                <div class="stat-meta">
                    <p class="stat-value">150+</p>
                    <p class="stat-label">Projects Done</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="wds-container">
        <div class="feature-grid">
            <div class="section-info">
                <p class="introductory-text">FEATURES</p>
                <h2>Give your site a new look</h2>
                <p class="description">Service range including technical skills, design, business understanding.</p>
                <ul class="wds-ul">
                    <li>Range including technical skills</li>
                    <li>Range including technical skills</li>
                    <li>Range including technical skills</li>
                </ul>
            </div>
            <img src="#" alt="Art work for features section"/>
        </div>
    </div>
</section>

<section class="get-strated-section">
    <div class="wds-container">
        <div class="get-strated-grid">
            <div class="grid-item">
                <img src="#" alt="Gift icon" />
                <p class="introductory-text">Get Started</p>
                <h2>I Help Companies Move Faster</h2>
                <a href="#" aria-label="Contact sahil sharma">Contact me</a>
            </div>
            <div class="grid-item">
                <p class="testimonial">Put themselves in the merchant's shoes. It is meant to partner on the long run.</p>
            </div>
            <img src="#" alt="Artwork for getting started"/>
        </div>
    </div>
</section>



<?php get_footer(); ?>
