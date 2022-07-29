<div class="link-container">
    <a class="link-part" target="_blank" href="<?php echo(get_post_meta($post->ID, '_link_meta_key', true)); ?>">
        <img class="link-part--file" src="<?php echo(get_template_directory_uri() . "/assets/images/file.png"); ?>" alt="File icon">
        <?php echo(the_title()); ?>
    </a>
</div>
