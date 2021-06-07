<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->

        <link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet" />
        <link href="<?php echo get_template_directory_uri(); ?>/css/works.css" rel="stylesheet" />

        <?php wp_head(); ?>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">SATOKO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php while(have_posts()): the_post(); ?>


        <!-- Page Header-->
        <?php
         $id = get_post_thumbnail_id();
         $img = wp_get_attachment_image_src($id);
         ?>
        
        <header class="worksHeader" style="background-image: url('<?php echo $img[0]; ?>')">

                            <h1>制作実績</h1>
                            
                            <p>Works</p>

        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">

            <h1><?php the_title(); ?></h1>

                        <!-- <?php print_r(get_field("トップ画像")); ?>  -->
                       <div class="top_Area">
                            <div class="top_imgArea">
                                <?php
                                    $image = get_field('トップ画像');
                                    $src = $image['sizes']['medium_large'];
                                    // $width = $image['sizes']['large-width'];
                                    // $height = $image['sizes']['large-height'];
                                ?>
                                <img src="<?php echo $src; ?>"  alt="">
                            </div>

                            <div class="top_textArea">
                                <dl>
                                    <dt>使用ツール</dt>
                                    <!-- <?php
                                    $tool = get_post_meta(get_the_ID(), "使用ツール", true);
                                    ?>
                                    <dd><?php echo $tool ?></dd> -->
                                    <dd><?php the_field("使用ツール") ?></dd>

                                    <dt>使用言語</dt>
                                
                                    <dd><?php the_field("使用言語") ?></dd>

                                    <dt>制作期間</dt>
                                    <dd><?php echo the_field('制作期間');?></dd>
                                </dl>
                            </div>

                        </div>

                        <?php the_content(); ?>



            </div>
        </article>

        <?php endwhile; ?>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2021</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
    <?php wp_footer(); ?>
    </body>
</html>
