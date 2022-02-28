<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">
    <?php wp_head(); ?>
</head>
<?php $slug = get_queried_object()->post_name ; ?>
<body <?php body_class($slug); ?>>

<header id="mainHeader" class="mainHeader">
</header>