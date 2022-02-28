<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="cursor">
  <div class="cursor__ball cursor__ball--big ">
    <svg height="37" width="37">
    </svg>
  </div>
  
  <div class="cursor__ball cursor__ball--small">
    <svg height="10" width="10">
      <circle cx="5" cy="5" r="4" stroke-width="0"></circle>
    </svg>
  </div>
</div>
<header id="mainHeader" class="mainHeader">
</header>