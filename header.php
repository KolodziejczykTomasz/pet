<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="PET BIOM">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.webp" />
</head>
<header>
    <nav class="nav__container">
        <div class="nav__brand">
            <img class="nav__brand--image" src="assets/images/logo.svg" />
        </div>
        <div>
            <ul id="menu">
                <li><a class="nav-item" href="#mission">Mission</a></li>
                <li><a class="nav-item" href="#product">About the product</a></li>
                <li><a class="nav-item" href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="nav__switch__language">
            <div>pl</div>
            <div>en</div>
        </div>
        <div class="burger__wrapper">
            <button id="burger" class="burger" onclick="this.classList.toggle('active');"></button>
        </div>
    </nav>
</header>