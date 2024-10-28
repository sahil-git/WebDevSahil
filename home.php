<?php
get_header();
?>

<main id="main-content" class="site-main">
    <header class="archive-info">
        <div class="wds-container">
            <h1 class="archive-title">Blog Articles</h1>
            <p class="archive-description">
                Explore a curated collection of articles, tutorials, and case studies that showcase the latest in web development and design trends.
            </p>
        </div>
    </header>

    <section class="archive-posts">
        <div class="wds-container">
            <div class="posts">
                <?php for ($c = 0; $c < 6; $c++): ?>
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
                    <article class="post" itemscope itemtype="https://schema.org/BlogPosting">
                        <a href="<?php the_permalink(); ?>" class="post-image-link" itemprop="url">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>" class="post-image" itemprop="image">
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
            <?php endfor; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
