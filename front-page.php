<?php
/* Template Name: Home Page */
get_header();
?>
<main class="site-main">
    <div class="wds-container">
        <div class="hero-grid">
            <div class="hero-info">
                <p class="professional-name" aria-label="Professional Name">Sahil Sharma</p>
                <h1 class="hero-heading">The Simple,<br />Clean Design</h1>
                <p class="hero-description grey-text">Agency provides a full service range including technical skills, design, business understanding.</p>
                <a href="#" class="orange-btn mywork-btn" aria-label="View Portfolio">See My Work</a>
            </div>
            <div class="hero-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-section-image.png" alt="Hero Section Artwork">
            </div>
        </div>
    </div>
</main>

<section class="services">
    <div class="wds-container">
        <div class="section-details">
            <p class="introductory-text">SERVICE</p>
            <h2>How Can I Help<br />You With</h2>
        </div>
        <div class="services-grid">
            <div class="service-item">
                <div class="service-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/design-icon.png" aria-label="Design Icon" />
                    <p class="service-title">Design</p>
                </div>
                <p class="service-description">
                    Agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house.
                </p>
                <div class="service-cta">
                    <a href="#" aria-label="Learn More about Design Services"><span>+</span>Learn More</a>
                </div>
            </div>
            <div class="service-item">
                <div class="service-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/briefcase-icon.png" aria-label="Design Icon" />
                    <p class="service-title">Design</p>
                </div>
                <p class="service-description">
                    Agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house.
                </p>
                <div class="service-cta">
                    <a href="#" aria-label="Learn More about Design Services"><span>+</span>Learn More</a>
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
                <a href="#" class="white-btn-o">EXPLORE MORE</a>
            </div>
        </div>
    </div>
    <div class="portfolio-grid">
        <div class="portfolio-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/portfolio-placeholder.png" aria-label="Design Icon" />
            <div class="info">
                <p class="category">Design</p>
                <a href="#">Website</a>
            </div>
        </div>
        <div class="portfolio-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/portfolio-placeholder.png" aria-label="Design Icon" />
            <div class="info">
                <p class="category">Design</p>
                <a href="#">Website</a>
            </div>
        </div>
        <div class="portfolio-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/portfolio-placeholder.png" aria-label="Design Icon" />
            <div class="info">
                <p class="category">Design</p>
                <a href="#">Website</a>
            </div>
        </div>
    </div>
</section>

<section class="about-me">
    <div class="wds-container">
        <div class="grid">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/about-art.png" aria-label="Design Icon" />
            <div class="about-info">
                <p class="introductory-text">Sahil Sharma</p>
                <h2>Professional<Br />Web Designer</h2>
                <p class="subtitle">Provides a full service range</p>
                <p class="description">Ability to put themselves in the merchant's shoes. It is meant to partner on the long run, and work as an extension of the merchant's team.</p>
                <a href="#" class="white-btn about-cta" aria-label="Find out more about Sahil.">ABOUT ME</a>
            </div>
        </div>
        <div class="stats-grid">
            <div class="stat">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendar-icon.png" aria-label="Design Icon" />
                <div class="stat-meta">
                    <p class="stat-value">10</p>
                    <p class="stat-label">Years of experience</p>
                </div>
            </div>
            <div class="stat">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/briefcase-icon.png" aria-label="Design Icon" />
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
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/check.png" aria-label="Design Icon" />Range including technical skills</li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/check.png" aria-label="Design Icon" />Range including technical skills</li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/check.png" aria-label="Design Icon" />Range including technical skills</li>
                </ul>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/features.png" aria-label="Features Artwork" />
        </div>
    </div>
</section>

<section class="get-strated-section">
    <div class="wds-container">
        <div class="get-strated-grid">
            <div class="grid-item">
                <img class="gift-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/gift.png" alt="Gift icon" />
                <p class="introductory-text">Get Started</p>
                <h2>I Help Companies Move Faster</h2>
                <a href="#" aria-label="Contact sahil sharma" class="orange-btn">Contact me</a>
            </div>
            <div class="grid-item">
                <p class="testimonial">Put themselves in the merchant's shoes. It is meant to partner on the long run.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/gift-artwork.png" alt="Gift icon" />
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="wds-container">
        <div class="section-info">
            <p class="introductory-text">Testimonials</p>
            <h2>What My Clients Saying</h2>
        </div>
        <div class="testimonials-grid">
        <div class="item">
                <div class="stars">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                </div>
                <p class="testimonial-detailed">A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions.</p>
                <div class="client-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/user-icon.png" alt="IUser icon" />
                    <div class="client-detail">
                        <p class="name">Alan Marti</p>
                        <p class="company">Meta Inc.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="stars">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                </div>
                <p class="testimonial-detailed">A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions.</p>
                <div class="client-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/user-icon.png" alt="IUser icon" />
                    <div class="client-detail">
                        <p class="name">Alan Marti</p>
                        <p class="company">Meta Inc.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="stars">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" />
                </div>
                <p class="testimonial-detailed">A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions.</p>
                <div class="client-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/user-icon.png" alt="IUser icon" />
                    <div class="client-detail">
                        <p class="name">Alan Marti</p>
                        <p class="company">Meta Inc.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="white-btn">See All</a>
        </div>
    </div>
</section>

<section class="faq">
    <div class="wds-container">
        <div class="faq-grid">
            <div class="grid-item">
                <p class="introductory-text">FAQ</p>
                <h2>Frequently Asked Questions</h2>
                <p class="description">A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house.</p>
                <a href="#" class="white-btn contact-me-btn">Contact Me</a>
            </div>
            <div class="grid-item">
                <div class="faq-accordion">
                    <div class="accordion">
                        <ul>
                            <li class="active">
                                <p class="faq-title">A digital agency is a business</p>
                                <p class="faq-description">Digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions to promote your product or service online and help you hit your marketing goals and grow your business.</p>
                            </li>
                            <li>
                                <p class="faq-title">Hire to outsource your digital</p>
                                <p class="faq-description">Digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions to promote your product or service online and help you hit your marketing goals and grow your business.</p>
                            </li>
                            <li>
                                <p class="faq-title">Marketing efforts</p>
                                <p class="faq-description">Digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions to promote your product or service online and help you hit your marketing goals and grow your business.</p>
                            </li>
                            <li>
                                <p class="faq-title">Can provide your business</p>
                                <p class="faq-description">Digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions to promote your product or service online and help you hit your marketing goals and grow your business.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="brands">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/brand1.png" alt="IUser icon" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/brand1.png" alt="IUser icon" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/brand1.png" alt="IUser icon" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/brand1.png" alt="IUser icon" />
            </div>
    </div>
</section>

<section class="our-blog">
    <div class="wds-container">

        <p class="introductory-text">OUR BLOG</p>
        <div class="inline-flex">
            <h2>Latest Blog Articles</h2>
            <div class="cta-btn">
                <a href="#" class="white-btn">Discover All</a>
            </div>
        </div>

        <div class="blog-grid">
            <?php
                $args = array(
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $latest_posts = new WP_Query($args);
                if ($latest_posts->have_posts()):
                    while ($latest_posts->have_posts()):
                        $latest_posts->the_post();
            ?>
            <article class="blog-item">
                <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>" class="thumbnail-link"><?php the_post_thumbnail('medium'); ?></a>
                <?php endif; ?>
                <div class="content-wrapper">
                    <p class="category">Stories</p>
                    <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="date"><?php echo get_the_date(); ?></p>
                </div>
            </article>
            <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
        </div>

        <div class="newsletter">
            <div class="info">
                <strong>Newsletter</strong>
                <p class="description"></p>
            </div>
            <input type="email" class="email-newsletter"  />
            <button class="white-btn">SUBSCRIBE</button>
        </div>
    </div>
</section>

<section class="get-in-touch">
    <div class="wds-container">
        <div class="get-in-touch-grid">
            <div class="contact-form">
            </div>
            <div class="contact-info">
                <p class="introductory-text">Contact</p>
                <h2>Contact Me</h2>
                <p class="description">A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house.</p>
                <div class="contact-point">
                    <img src="#" alt="Contact Icon" />
                    <p class="detail">2247 Lunetta Street, TX 76301</p>
                </div>
                <div class="contact-point">
                    <img src="#" alt="Contact Icon" />
                    <p class="detail">+1 (234) 567-89-00</p>
                </div>
                <div class="contact-point">
                    <img src="#" alt="Contact Icon" />
                    <p class="detail">info@agency.com</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
