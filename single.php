<?php
get_header();
if (have_posts()):
    while (have_posts()):
        the_post();

?>
    <main class="site-main">
        <div class="wds-container">
            <div class="back-to-blog-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10">
                    <path id="Path" d="M-9.97,0l1.3,1.285L-11.5,4.093H0V5.907H-11.5l2.831,2.807L-9.97,10-15,5Z" transform="translate(15)" fill="#391400"/>
                </svg>
                <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="back-to-blog">Back to Blog</a>
            </div>
            <h1><?php the_title(); ?></h1>
            
            <div class="single-post-meta">
                <p>In 
                    <?php
                    $categories = get_the_category();
                    if ($categories) {
                        foreach ($categories as $category) {
                            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a> ';
                        }
                    }
                    ?>
                    by <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                        <?php echo esc_html(get_the_author_meta('display_name')); ?>
                    </a>
                </p>
                <p>Date <span><?php echo get_the_date(); ?></span></p>
            </div>

            <?php if (has_post_thumbnail()): ?>
                <img class="single-post-thumbnail" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>"/>
            <?php endif; ?>

            <div class="main-content">
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <?php the_content(); ?>
            </div>

            <div class="author-meta">
                <div class="author-info">
                    <?php echo get_avatar(get_the_author_meta('ID'), 64); ?>
                    <p> 
                        <strong><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a></strong>
                        <span><?php echo get_the_author_meta('position') ?: 'Editor'; ?></span>
                    </p>
                </div>
                <nav class="social-links">
                <ul>
                        <!-- Facebook Share Button -->
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.333" height="16" viewBox="0 0 9.333 16">
                                    <path d="M2.667,5.333H0V8H2.667v8h4V8H9.093l.24-2.667H6.667V4.223c0-.637.128-.889.744-.889H9.333V0H6.128c-2.4,0-3.461,1.056-3.461,3.077Z" fill="#fff"/>
                                </svg>
                            </a>
                        </li>

                        <!-- Twitter Share Button -->
                        <li>
                            <a href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13.004" viewBox="0 0 16 13.004">
                                    <path d="M16,1.54a6.57,6.57,0,0,1-1.885.517A3.3,3.3,0,0,0,15.559.241a6.568,6.568,0,0,1-2.085.8A3.284,3.284,0,0,0,7.88,4.031,9.323,9.323,0,0,1,1.115.6,3.287,3.287,0,0,0,2.131,4.984,3.277,3.277,0,0,1,.645,4.573a3.287,3.287,0,0,0,2.633,3.26A3.29,3.29,0,0,1,1.8,7.889a3.287,3.287,0,0,0,3.067,2.279A6.606,6.606,0,0,1,0,11.529,9.284,9.284,0,0,0,5.031,13a9.284,9.284,0,0,0,9.331-9.765A6.618,6.618,0,0,0,16,1.54Z" fill="#fff"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
<?php
    endwhile;
endif;
?>

<section class="related-articles">
    <div class="wds-container">
        <h2>Related Articles</h2>
        <div class="related-articles-grid">
            <?php
                $related_posts = new WP_Query(array(
                    'category__in' => wp_get_post_categories(get_the_ID()),
                    'post__not_in' => array(get_the_ID()),
                    'posts_per_page' => 3,
                ));

                if ($related_posts->have_posts()):
                    while ($related_posts->have_posts()):
                        $related_posts->the_post();
            ?>
                <article class="post" itemscope itemtype="https://schema.org/BlogPosting">
                    <a href="<?php the_permalink(); ?>" class="post-image-link" itemprop="url">
                        <?php if (has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="post-image" itemprop="image">
                        <?php endif; ?>
                    </a>
                    <div class="post-content">
                        <?php
                        $category = get_the_category();
                        if (!empty($category)):
                            $category_link = get_category_link($category[0]->term_id);
                            ?>
                            <p class="post-category" itemprop="about">
                                <a href="<?php echo esc_url($category_link); ?>">
                                    <?php echo esc_html($category[0]->name); ?>
                                </a>
                            </p>
                        <?php endif; ?>
                        <h2 class="post-title" itemprop="headline">
                            <a href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a>
                        </h2>
                        <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="post-date" itemprop="datePublished">
                            <?php echo get_the_date(); ?>
                        </time>
                    </div>
                </article>
            <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                            ?>
                <p>No related articles found.</p>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>
