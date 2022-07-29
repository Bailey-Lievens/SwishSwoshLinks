<?php get_header(); ?>

<?php
    $args = array(
        'orderby' => 'id',
        'hide_empty'=> 1,
    );
    $categories = get_categories($args);
?>

<main>
    <?php $categoryCount = 0; ?>
    <?php foreach($categories as $category): ?>
        <?php
            $args = array(
                'post_type' => 'links',
                'cat' => $category->term_id
            );

            $linkQuery = new WP_Query($args)
        ?>

        <section class="category-section">
            <div class="section-header" data-category-count="<?php echo($categoryCount); $categoryCount++; ?>">
                <h2><?php echo($category->name); ?></h2> 
                <img class="section-header--dropdown" src="<?php echo(get_template_directory_uri() . "/assets/images/dropdown.png"); ?>" alt="Dropdown icon">
            </div>

            <div class="link-section">
                <?php if($linkQuery->have_posts()): ?>
                    <?php while($linkQuery->have_posts()): ?>
                        <?php $linkQuery->the_post(); ?>
                        <?php get_template_part("template-part/linkButton"); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>

    <?php endforeach; ?>
</main>

<?php get_footer(); ?>

