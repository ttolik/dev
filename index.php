<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gt_favicon.png">
        <!-- Bootstrap -->
        <!-- Icon font -->
        <!-- Fonts -->
        <!-- Custom styles -->
        <!--[if lt IE 9]> <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5shiv.js"></script> <![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <header id="header">
            <div id="head" class="parallax" parallax-speed="1">
                <h1 id="logo" class="text-center"> <img class="img-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/guy.jpg" alt=""> <span class="title"><?php _e( 'Anthony Russel\'s Blog', 'initio_theme' ); ?></span> <span class="tagline"><?php _e( 'A creative man is motivated by the desire to achieve, not by the desire to beat others.', 'initio_theme' ); ?></span> </h1>
            </div>
            <nav class="navbar navbar-default navbar-sticky">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                            <span class="sr-only"><?php _e( 'Toggle navigation', 'initio_theme' ); ?></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.html"><?php _e( 'Home', 'initio_theme' ); ?></a>
                            </li>
                            <li>
                                <a href="about.html"><?php _e( 'About', 'initio_theme' ); ?></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e( 'More Pages', 'initio_theme' ); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="sidebar-left.html"><?php _e( 'Left Sidebar', 'initio_theme' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="sidebar-right.html"><?php _e( 'Right Sidebar', 'initio_theme' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="single.html"><?php _e( 'Blog Post', 'initio_theme' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="blog.html"><?php _e( 'Blog', 'initio_theme' ); ?></a>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->                     
                </div>                 
            </nav>
        </header>
        <main id="main">
            <div class="container">
                <div class="row topspace">
                    <div class="col-sm-8 col-sm-offset-2">
                        <article class="post">
                            <header class="entry-header">
                                <div class="entry-meta"> 
                                    <span class="posted-on"><time class="entry-date published" date="2013-09-27">
                                            <?php _e( 'September 27, 2013', 'initio_theme' ); ?>
                                        </time></span> 
                                </div>
                                <h1 class="entry-title"><a href="single.html" rel="bookmark"><?php _e( 'Hello world!', 'initio_theme' ); ?></a></h1>
                            </header>
                            <div class="entry-content">
                                <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, molestias, architecto, adipisci, numquam dolor iusto eos reprehenderit placeat quam debitis quas magni eveniet. Saepe, nam, iste consectetur quae necessitatibus dolores provident veritatis possimus rerum facilis quia dicta itaque sapiente iusto natus quidem magni quibusdam. Explicabo nesciunt vel rem obcaecati reprehenderit eveniet culpa repudiandae. Distinctio, quia, provident illum necessitatibus repellendus rem voluptates exercitationem numquam inventore itaque atque sint nihil eveniet consequuntur eius! Laborum, at sit animi quae quidem ex tempora facilis.', 'initio_theme' ); ?></p>
                            </div>
                        </article>
                        <article class="post">
                            <header class="entry-header">
                                <div class="entry-meta"> 
                                    <span class="posted-on"><time class="entry-date published" date="2013-06-17">
                                            <?php _e( 'June 17, 2013', 'initio_theme' ); ?>
                                        </time></span> 
                                </div>                                 
                                <h1 class="entry-title"><a href="single.html" rel="bookmark"><?php _e( 'Vivamus Lacus Mauris', 'initio_theme' ); ?></a></h1>
                            </header>                             
                            <div class="entry-content"> 
                                <p><img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mac.jpg"></p>
                                <p><?php _e( 'Mauris eget quam orci. Quisque porta varius dui, quis posuere nibh mollis quis. Mauris commodo rhoncus porttitor. Maecenas et euismod elit. Nulla facilisi. Vivamus lacus libero, ultrices non ullamcorper ac, tempus sit amet enim. Suspendisse at semper ipsum. Suspendisse sagittis diam a massa viverra sollicitudin. Vivamus sagittis est eu diam fringilla nec tristique metus vestibulum. Donec magna purus, pellentesque vel lobortis ut, convallis id augue. Sed odio magna, pellentesque eget convallis ac, vehicula vel arcu. Sed eu scelerisque dui. Sed eu arcu at nibh hendrerit viverra. Vivamus lacus augue, sodales id cursus in, condimentum at risus.', 'initio_theme' ); ?> <a href="single.html" class="more-link"><?php _e( 'Continue reading&#8230;', 'initio_theme' ); ?></a></p>
                            </div>                             
                        </article>
                        <!-- #post-## -->
                        <article class="post">
                            <header class="entry-header">
                                <div class="entry-meta"> 
                                    <span class="posted-on"><time class="entry-date published" date="2013-06-17">
                                            <?php _e( 'June 17, 2013', 'initio_theme' ); ?>
                                        </time></span> 
                                </div>                                 
                                <h1 class="entry-title"><a href="single.html" rel="bookmark"><?php _e( 'Vivamus Lacus Mauris', 'initio_theme' ); ?></a></h1>
                            </header>                             
                            <div class="entry-content"> 
                                <p><?php _e( 'Mauris eget quam orci. Quisque porta varius dui, quis posuere nibh mollis quis. Mauris commodo rhoncus porttitor. Maecenas et euismod elit. Nulla facilisi. Vivamus lacus libero, ultrices non ullamcorper ac, tempus sit amet enim. Suspendisse at semper ipsum. Suspendisse sagittis diam a massa viverra sollicitudin. Vivamus sagittis est eu diam fringilla nec tristique metus vestibulum. Donec magna purus, pellentesque vel lobortis ut, convallis id augue. Sed odio magna, pellentesque eget convallis ac, vehicula vel arcu. Sed eu scelerisque dui. Sed eu arcu at nibh hendrerit viverra. Vivamus lacus augue, sodales id cursus in, condimentum at risus.', 'initio_theme' ); ?></p>
                            </div>                             
                        </article>
                        <!-- #post-## -->
                        <article class="post">
                            <header class="entry-header"> 
                                <div class="entry-meta"> 
                                    <span class="posted-on"><time class="entry-date published" date="2013-04-04">
                                            <?php _e( 'April 4, 2013', 'initio_theme' ); ?>
                                        </time></span> 
                                </div>
                                <h1 class="entry-title"><a href="single.html" rel="bookmark"><?php _e( 'Maecenas Quisque Suspendisse Lorem', 'initio_theme' ); ?></a></h1>
                            </header>
                            <div class="entry-content">
                                <p><?php _e( 'Mauris eget quam orci. Quisque porta varius dui, quis posuere nibh mollis quis. Mauris commodo rhoncus porttitor. Maecenas et euismod elit. Nulla facilisi. Vivamus lacus libero, ultrices non ullamcorper ac, tempus sit amet enim. Suspendisse at semper ipsum. Suspendisse sagittis diam a massa viverra sollicitudin. Vivamus sagittis est eu diam fringilla nec tristique metus vestibulum. Donec magna purus, pellentesque vel lobortis ut, convallis id augue. Sed odio magna, pellentesque eget convallis ac, vehicula vel arcu. Sed eu scelerisque dui. Sed eu arcu at nibh hendrerit viverra. Vivamus lacus augue, sodales id cursus in, condimentum at risus.', 'initio_theme' ); ?> <a href="single.html" class="more-link"><?php _e( 'Continue reading&#8230;', 'initio_theme' ); ?></a></p>
                            </div>
                        </article>
                        <!-- #post-## -->
                        <article class="post">
                            <header class="entry-header">
                                <div class="entry-meta"> 
                                    <span class="posted-on"><time class="entry-date published" date="2013-03-20">
                                            <?php _e( 'March 20, 2013', 'initio_theme' ); ?>
                                        </time></span> 
                                </div>
                                <h1 class="entry-title"><a href="single.html" rel="bookmark"><?php _e( 'Pellentesque Eget Convallis', 'initio_theme' ); ?></a></h1>
                            </header>
                            <div class="entry-content">
                                <p><?php _e( 'Mauris eget quam orci. Quisque porta varius dui, quis posuere nibh mollis quis. Mauris commodo rhoncus porttitor. Maecenas et euismod elit. Nulla facilisi. Vivamus lacus libero, ultrices non ullamcorper ac, tempus sit amet enim. Suspendisse at semper ipsum. Suspendisse sagittis diam a massa viverra sollicitudin. Vivamus sagittis est eu diam fringilla nec tristique metus vestibulum. Donec magna purus, pellentesque vel lobortis ut, convallis id augue. Sed odio magna, pellentesque eget convallis ac, vehicula vel arcu. Sed eu scelerisque dui. Sed eu arcu at nibh hendrerit viverra. Vivamus lacus augue, sodales id cursus in, condimentum at risus.', 'initio_theme' ); ?> <a href="single.html" class="more-link"><?php _e( 'Continue reading&#8230;', 'initio_theme' ); ?></a></p>
                            </div>
                        </article>
                        <!-- #post-## -->                         
                    </div>                     
                </div>
                <center class="">
                    <ul class="pagination">
                        <li class="disabled">
                            <a href="">&laquo;</a>
                        </li>
                        <li class="active">
                            <a href=""><?php _e( '1', 'initio_theme' ); ?></a>
                        </li>
                        <li>
                            <a href=""><?php _e( '2', 'initio_theme' ); ?></a>
                        </li>
                        <li>
                            <a href=""><?php _e( '3', 'initio_theme' ); ?></a>
                        </li>
                        <li>
                            <a href=""><?php _e( '4', 'initio_theme' ); ?></a>
                        </li>
                        <li>
                            <a href=""><?php _e( '5', 'initio_theme' ); ?></a>
                        </li>
                        <li>
                            <a href=""><?php _e( '6', 'initio_theme' ); ?></a>
                        </li>
                        <li>
                            <a href="">&raquo;</a>
                        </li>
                    </ul>
                </center>
            </div>             

            <!-- /container -->
        </main>
        <footer id="footer" class="topspace">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 widget">
                        <h3 class="widget-title"><?php _e( 'Contact', 'initio_theme' ); ?></h3>
                        <div class="widget-body">
                            <p><?php _e( '+234 23 9873237', 'initio_theme' ); ?><br> <a href="mailto:#"><?php _e( 'some.email@somewhere.com', 'initio_theme' ); ?></a><br> <br> <?php _e( '234 Hidden Pond Road, Ashland City, TN 37015', 'initio_theme' ); ?> </p> 
                        </div>
                    </div>
                    <div class="col-md-3 widget">
                        <h3 class="widget-title"><?php _e( 'Follow me', 'initio_theme' ); ?></h3>
                        <div class="widget-body">
                            <p class="follow-me-icons"> <a href=""><i class="fa fa-twitter fa-2"></i></a> <a href=""><i class="fa fa-dribbble fa-2"></i></a> <a href=""><i class="fa fa-github fa-2"></i></a> <a href=""><i class="fa fa-facebook fa-2"></i></a> </p>
                        </div>
                    </div>
                    <div class="col-md-3 widget">
                        <h3 class="widget-title"><?php _e( 'Text widget', 'initio_theme' ); ?></h3>
                        <div class="widget-body">
                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!', 'initio_theme' ); ?></p>
                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!', 'initio_theme' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 widget">
                        <h3 class="widget-title"><?php _e( 'Form widget', 'initio_theme' ); ?></h3>
                        <div class="widget-body">
                            <p><?php _e( '+234 23 9873237', 'initio_theme' ); ?><br> <a href="mailto:#"><?php _e( 'some.email@somewhere.com', 'initio_theme' ); ?></a><br> <br> <?php _e( '234 Hidden Pond Road, Ashland City, TN 37015', 'initio_theme' ); ?> </p> 
                        </div>
                    </div>
                </div>                 

                <!-- /row of widgets -->
            </div>
        </footer>
        <footer id="underfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p><?php _e( '234 Hidden Pond Road, Ashland City, TN 37015', 'initio_theme' ); ?> </p>
                        </div>
                    </div>
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right"> <?php _e( 'Copyright &copy; 2014, Your awesome name here', 'initio_theme' ); ?><br>  <?php _e( 'Design:', 'initio_theme' ); ?> <a href="http://www.gettemplate.com" rel="designer"><?php _e( 'Initio by GetTemplate', 'initio_theme' ); ?></a> </p>
                        </div>
                    </div>
                </div>                 

                <!-- /row of widgets -->
            </div>
        </footer>
        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <?php wp_footer(); ?>
    </body>
</html>
