<!DOCTYPE html>
<html lang="ja">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css" />
        
        <link href="<?php echo get_template_directory_uri(); ?>/css/works.css" rel="stylesheet" />
        <script src="<?php echo get_template_directory_uri(); ?>/js/script.js" defer></script>

        <?php wp_head(); ?>
    </head>
    <body>
    <header id="header">
      <h1><a href="k-satoko.com">SATOKO </h1>


    <?php get_template_part("includes/nav"); ?>

    </header>

        <?php while(have_posts()): the_post(); ?>


        <!-- Page Header-->
        <?php
         $id = get_post_thumbnail_id();
         $img = wp_get_attachment_image_src($id);
         ?>
        
    <div class="worksHeader">

                            <h1>制作実績</h1>
                            
                            <p>Works</p>

    </div>  
        <!-- Post Content-->
        <section class="container">

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
                                

                            <h2><?php the_title(); ?></h2>
                            <hr>
                            <p><?php the_field("コメント"); ?></p>

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



    
        </section>

        <?php endwhile; ?>
    <!-- Footer-->
    <?php get_template_part("includes/footer"); ?>
    <!-- /footer -->

    <!-- jQueryを読み込む！必ず先に！ -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <?php wp_footer(); ?>
    </body>
</html>
