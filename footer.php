<footer class="footer">
    <div class="wds-container">
        <div class="footer-flex">
            <div class="about-us">
                <h2>WebDevSahil</h2>
            </div>
            <div class="site-menu">
                <h3>MENU</h3>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    ));
                ?>
            </div>
            <div class="service-menu">
                <h3>SERVICE</h3>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    ));
                ?>
            </div>
            <nav class="social-links">
                <ul>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="9.333" height="16" viewBox="0 0 9.333 16"><path d="M2.667,5.333H0V8H2.667v8h4V8H9.093l.24-2.667H6.667V4.223c0-.637.128-.889.744-.889H9.333V0H6.128c-2.4,0-3.461,1.056-3.461,3.077Z" fill="#fff"/></svg></a></li>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="13.004" viewBox="0 0 16 13.004"><path d="M16,1.54a6.57,6.57,0,0,1-1.885.517A3.3,3.3,0,0,0,15.559.241a6.568,6.568,0,0,1-2.085.8A3.284,3.284,0,0,0,7.88,4.031,9.323,9.323,0,0,1,1.115.6,3.287,3.287,0,0,0,2.131,4.984,3.277,3.277,0,0,1,.645,4.573a3.287,3.287,0,0,0,2.633,3.26A3.29,3.29,0,0,1,1.8,7.889a3.287,3.287,0,0,0,3.067,2.279A6.606,6.606,0,0,1,0,11.529,9.284,9.284,0,0,0,5.031,13a9.284,9.284,0,0,0,9.331-9.765A6.618,6.618,0,0,0,16,1.54Z" fill="#fff"/></svg></a></li>
                </ul>
            </nav>
        </div>
        <div class="site-info">   
            <div class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></div>
            <nav class="important-links">
                <ul>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </nav>
        </div>
    
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
