<?php

/*****
*
* Navigation
*
*****/

global $current_page;

$menu_item = ($current_page == "inprogress" || $current_page == "home") ? "menu" : $current_page;

?>

<header class="header">

    <!-- START Navigation -->
    <div class="wrapper">

        <div class="logo-container">
            <a href="/" title="Go to Homepage" class="site-logo">
                <svg class="site-logo__signet" width="32px" height="32" viewBox="0 0 256 256">
                    <path d="M128 183.7l-64-38.4V90.6l64 38.4 64-38.4v39.5l32 19.2V34.1l-96 57.6-96-57.6v129.3l96 57.6 76.7-46-31.1-18.7"/>
                </svg>
                <span class="site-logo__text">Michel Luarasi</span> 
            </a>
        </div>

        <div class="menu-container">
            <a href="#" class="selected-menu-item"><?php echo $menu_item; ?></a>
            <div class="menu-toggle">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <span class="menu-line menu-line-1"></span>
                        <span class="menu-line menu-line-2"></span>
                    </span>
                </a>

                <span class="menu-circle"></span>
            </div>
        </div>  
    </div>
    <!-- END Navigation -->


    <!-- START Menu Content -->

    <div class="menu-overlay">
        <nav class="main-nav" role="navigation">
            <a class="main-nav__list-item__link <?php echo $current_page == "work" ? "main-nav__list-item__link--active" : "" ; ?>" href="/work">Work
            </a>
            <a class="main-nav__list-item__link <?php echo $current_page == "portrait" ? "main-nav__list-item__link--active" : "" ; ?>" href="/portrait">Portrait
            </a>
            <a class="main-nav__list-item__link <?php echo $current_page == "reverie" ? "main-nav__list-item__link--active" : "" ; ?>" href="/reverie">R&ecirc;verie
            </a>
            <a class="main-nav__list-item__link <?php echo $current_page == "journal" ? "main-nav__list-item__link--active" : "" ; ?>" href="/journal">Journal
            </a>
        </nav> 

        <nav class="meta-nav">
            <a class="meta-nav-link" href="/contact">Contact
                <svg width="8px" height="8px" viewBox="0 0 8 8">
                    <path fill="#5259D4" d="M2 0l4 3.5L2 7"/>
                </svg>
            </a>

            <a class="meta-nav-link" href="/credits">Credits
                <svg width="8px" height="8px" viewBox="0 0 8 8">
                    <path fill="#5259D4" d="M2 0l4 3.5L2 7"/>
                </svg>
            </a>

            <a class="meta-nav-link" href="/legal">Legal
                <svg width="8px" height="8px" viewBox="0 0 8 8">
                    <path fill="#5259D4" d="M2 0l4 3.5L2 7"/>
                </svg>
            </a> 
        </nav>  
    </div>

    <!-- END Menu Content -->

</header>

