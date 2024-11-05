<?php
get_header();


// Get category information
$category = get_queried_object();
$category_name = single_cat_title('', false);
$category_description = category_description();

?>
<main id="main-content" class="site-main">
    <header class="archive-info">
        <div class="wds-container">
            <h1 class="archive-title"><?php echo esc_html($category_name); ?></h1>
            <p class="archive-description">
            <?php echo esc_html($category_description); ?>
            </p>
        </div>
    </header>

    <section class="archive-posts">
        <div class="wds-container">
            <div class="posts">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
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
                else:
                ?>
                    <p>No posts found.</p>
                <?php endif; ?>
            </div> <!-- .posts -->

            <!-- Pagination -->
            <div class="pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('« Previous', 'textdomain'),
                    'next_text' => __('Next »', 'textdomain'),
                    'screen_reader_text' => __('Posts navigation'),
                ));
                ?>
            </div>
        </div> <!-- .wds-container -->
    </section>
</main>

<?php get_footer(); ?>
