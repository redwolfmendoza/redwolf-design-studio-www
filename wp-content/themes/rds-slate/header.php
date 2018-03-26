
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!--Boostrap CSS-->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!--Theme CSS-->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/fonts.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/blog.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
    <?php wp_head();?>
      
  </head>
  <body>
      
    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <a class="blog-nav-item active" href="#">Home</a>
                <?php wp_list_pages( '&title_li=' ); ?>
            </nav>
        </div>
    </div>
      

    <?php if( is_home() ): ?>
      
    <section class="homepage-section">
        <div class="logo-container">
            <div class="logo">
                <a href="/">
                    <img class="img-responsive" src="/wp-content/themes/rds-slate/img/rds-640x640.png" width="320" height="320">
                </a>
            </div>
        </div>
        <div class="intro-container">
            <h1 class="rds-branding">Redwolf&nbsp;Design&nbsp;Studio</h1>
            <h4 class="rds-slogan">Professional web development and design services since 2008. San Fernando Valley, CA.</h4>
        </div>
    </section>

    <?php endif; ?>
      
    <div class="container content-wrapper">