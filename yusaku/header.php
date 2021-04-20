<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <div id="global-container">
        <div id="container">
            <div class="mobile-menu__cover"></div>
            <div class="nav-trigger"></div>
            <header class="header">
                <div class="header__inner">
                    <nav class="header__nav">
                        <ul class="header__ul">
                            <li class="header__li item"><a href="http://localhost:8888/#intro">概要</a></li>
                            <li class="header__li item"><a href="http://localhost:8888/#services">サービス</a></li>
                            <li class="header__li item">
                            <a class="btn filled" href="http://localhost:8888/#news">ブログ</a>
                            </li>
                            <li class="header__li item">
                            <a class="btn filled" href="http://localhost:8888/#contact">お問い合わせ</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="hamburger-menu">
                        <input type="checkbox" id="menu-btn-check">
                        <label for="menu-btn-check" class="menu-btn"><span></span></label>
                        <div class="menu-content">
                            <ul>
                                <li>
                                    <a href="#intro">Introduction</a>
                                </li>
                                <li>
                                    <a href="#services">Services</a>
                                </li>
                                <li>
                                    <a href="#news">News</a>
                                </li>
                                <li>
                                    <a href="#contact">contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="title">
                        <h1>Web集客サービスをご提供</h1>
                    </div>
                </div>
            </header>