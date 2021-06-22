<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SATOKO</title>
    <script
      src="https://kit.fontawesome.com/e8e62ccbd7.js"
      crossorigin="anonymous"
    ></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js" defer></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <header id="header">
      <h1>SATOKO ISHIDA</h1>

      <nav>
        <ul>
          <li><a href="#firstView">HOME</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#works">Works</a></li>

          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>

    　
    <div id="firstView">
      <div class="textAnimation">SATOKO TEST</div>
      <div class="textAnimation subtitle">welcome to my portfolio!</div>
    </div>

    <main class="">
      <section class="about" id="about">
        <div class="animationTarget inner">
          <h2>About Me</h2>
          <div class="about-box">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/mother.jpg"
              class="about-img"
              alt="私のイメージ"
            />
            <div class="about-info">
              <h3>SATOKO TEST</h3>
              <p>
                ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト
              </p>
              <p>
              ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト
              </p>
              <p class="more"><a href="">and more・・準備中</a></p>
            </div>
          </div>
        </div>
      </section>

      <section class="works" id="works">
        <div class="animationTarget inner">
          <h2>Works</h2>

          <div class="workList">
            <a href="" class="workItem">
              <img src="<?php echo get_template_directory_uri(); ?>/images/zassou.png" class="work-img" alt="..." />
              <p class="work-title">ここにテキスト</p>
              <p class="work-info">
              ここにテキストここにテキストここにテキストここにテキスト
              </p>
            </a>

            <a href="" class="workItem">
              <img src="<?php echo get_template_directory_uri(); ?>/images/zukan.png" class="work-img" alt="..." />
              <p class="work-title">ここにテキスト</p>
              <p class="work-info">ここにテキストここにテキストここにテキスト。
              </p>
            </a>

            <a href="./works/works03/index.html" class="workItem">
              <img src="<?php echo get_template_directory_uri(); ?>/images/work01.jpg" class="work-img" alt="..." />
              <p class="work-title">ここにテキスト</p>
              <p class="work-info">
              ここにテキストここにテキストここにテキストここにテキスト。
              </p>
            </a>

          </div>
          <p class="more">
            <a href="">and more 準備中>></a>
          </p>
        </div>
      </section>

      <section class="contact" id="contact">
        <div class="animationTarget inner">
          <h2>Contact</h2>
          <p>下記よりお気軽にお問い合わせください。</p>
          <p class="btn_to_form">
            <a href="./wp/contact/">
              <i class="fa fa-envelope-o"></i> お問い合わせフォーム</a
            >
          </p>
        </div>
      </section>
    </main>

    <p class="pagetop">
      <a id="pagetop"><i class="fa fa-chevron-up"></i></a>　
    </p>
    <!-- footer -->
    <footer class="footer">
      <div class="copyright">&copy;SATOKO ISHIDA</div>
    </footer>
    <!-- /footer -->
    <!-- jQueryを読み込む！必ず先に！ -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>
