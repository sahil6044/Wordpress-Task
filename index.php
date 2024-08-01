<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css ">

</head>
<body>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1 class="title-header" > <?php the_title(); ?> </h1>
<div class="blog-content">
    <?php the_content(); ?>
</div>

<?php endwhile; ?>
<?php
if ( get_next_posts_link() ) {
next_posts_link();
}
?>
<?php endif; ?>





</body>
</html>