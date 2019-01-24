<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <title>Digital Experience</title>
</head>
<body>
    <nav>
        <div id="logo">
            <i class="fab fa-audible logo-icon"></i> 
            <a href="<?php echo site_url() ?>" id="home-target">
                DIGITAL LABS
            </a>
        </div>
        <div id="header_links">
            <a href="<?php echo site_url('/what-we-do') ?>">What we do</a>
            <a href="<?php echo site_url('/careers') ?>">Careers</a>
            <a href="<?php echo site_url('/say-hello') ?>">Get in touch</a>
        </div>
    </nav>
