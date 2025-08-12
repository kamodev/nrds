<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    
    <!-- Meta information -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <!-- Title -->
    <title><?php wp_title(); ?></title>
    
    <?php wp_head(); ?>

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body <?php body_class(); ?>>
    <!-- Menu location -->
    <?php require_once('inc/primary-menu.php'); ?>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
    </header>
    
    