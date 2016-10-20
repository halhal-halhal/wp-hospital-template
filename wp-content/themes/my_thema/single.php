<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RECRUIT - Subpage Template</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom CSS -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/add_style.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <script src="https://use.fontawesome.com/a3de6310f4.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- スクロール位置を取得しサイドナビを点灯 -->
  <script type="text/javascript">
  $(function(){
    $('a[href^="#"]').click(function(){
      var speed = 500;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });
  });
  </script>
  <script type="text/javascript">
  $(function() {
    /**
    * ページ内スクロール
    */
    $('a[href="#"]').click(function(){
      var speed = 500;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top - 50;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });
  });

  $(function() {

    /**
    * 現在スクロール位置によるグローバルナビのアクティブ表示
    */
    var scrollMenu = function() {
      // 配列宣言
      // ここにスクロールで点灯させる箇所のidを記述する
      // 数値は全て0でOK
      var array = {
        '#sidenav-message': 0,
        '#sidenav-recruit': 0,
        '#sidenav-qaa': 0
      };

      var $globalNavi = new Array();

      // 各要素のスクロール値を保存
      for (var key in array) {
        if ($(key).offset()) {
          array[key] = $(key).offset().top - 10; // 数値丁度だとずれるので10px余裕を作る
          $globalNavi[key] = $('#sidenav ul li a[href="' + key + '"]');
        }
      }

      // スクロールイベントで判定
      $(window).scroll(function () {
        for (var key in array) {
          if ($(window).scrollTop() > array[key] - 50) {
            $('#sidenav ul li a').each(function() {
              $(this).removeClass('active');
            });
            $globalNavi[key].addClass('active');
          }
        }
      });
    }

    // 実行
    scrollMenu();
  });
  </script>

  <script>
  $(function() {
    var topBtn = $('#page-top');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        topBtn.fadeIn();
      } else {
        topBtn.fadeOut();
      }
    });
    //スクロールしてトップ
    topBtn.click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
  });
  </script>
<?php wp_head();?>
</head>

<body>
  <p id="page-top"><a href="#wrap">TOPへ</a></p>
  <div id="top"></div>

  <div id="sidenav-message"></div>
  <!-- Navigation -->
  <nav class="navbar navbar-fixed-top" id="header-nav" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">RECRUIT SITE</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <p id="header_btn" class="navbar-right__top"><a href="#">資料請求・お問い合わせ</a></p>
        <ul class="nav navbar-nav navbar-right navbar-right__bottom">
          <li><a href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 求める人物像</a></li>
          <li><a href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 教育体制（人材育成）</a></li>
          <li><a href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 福利厚生</a></li>
          <li><a href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 採用説明会･病院見学</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <header>
    <div id="globalnav-area">
      <div class="container">
        <table id="globalnav">
          <tr>
            <th class="ln00"><a href="#">トップページ</a></th>
            <th class="ln01"><a href="#">臨床研修医(初期・後期)</a></th>
            <th class="ln02-now"><a href="#">診療科医師</a></th>
            <th class="ln03"><a href="#">看護師</a></th>
            <th class="ln04"><a href="#">メディカルスタッフ</a></th>
            <th class="ln05"><a href="#">事務系スタッフ</a></th>
          </tr>
        </table>
      </div>
    </div>

    <div id="localnav-area">
      <div class="container">
        <ul id="localnav">
          <li><a href="#">救急医・総合診療医</a></li>
          <li><a href="#">集中治療医</a></li>
          <li><a href="#">泌尿器科医</a></li>
          <li><a href="#">麻酔科医</a></li>
          <li><a href="#">病理診療医</a></li>
          <li><a href="#">神経内科医</a></li>
          <li><a href="#">総合健診医</a></li>
          <li><a href="#">消化器内科医</a></li>
          <li><a href="#">腫瘍内科医</a></li>
        </ul>
      </div>
    </div>
    <table id="sp-globalnav">
      <tr>
        <th><a href="#">トップページ</a></th>
        <th><a href="#">臨床研修医(初期・後期)</a></th>
        <th><a href="#">診療科医師</a></th>
        <th><a href="#">看護師</a></th>
        <th><a href="#">メディカルスタッフ</a></th>
        <th><a href="#">事務系スタッフ</a></th>
      </tr>
    </table>
  </header>

  <section id="content-top">
    <div class="container">
      <!-- パンくずリスト -->
      <div class="row">
        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="<?php echo home_url(); ?>/<?php echo esc_html(get_post_type_object(get_post_type())->label); ?>"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></a></li>
            <li class="active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
    </div>
  </section>



  <!-- Page Content -->
  <div class="container">
    <div class="content-head">
      <span class="global-category">診療科医師</span><span class="topix-name">救急医・総合診療医</span>
      <ul>
        <li class="about-recruit"><a href="#">採用説明会・病院見学について</a></li>
        <li class="back"><a href="#">診療科医師　INDEXに戻る</a></li>
      </ul>
    </div>
    <div class="content-menu">
      <table class="content-table">
        <tr class="content-tr">
          <th>救急医・総合診療医</th>
          <th>部長インタビュー</th>
          <th>センターの特徴</th>
          <th>教育・研修体制</th>
          <th>診療実績・学術研究業績</th>
          <th>取り組み・イベント</th>
        </tr>
      </table>
    </div>
    <!-- Image Header -->
    <div class="message-area">
      <div class="row">
        <div class="col-lg-12">
          <img class="img-responsive" src="http://placehold.it/1200x400" alt="" >
        </div>
      </div>
      <!-- /.row -->
      <!-- main -->
      <div class="message">
        <?php while(have_posts()): the_post(); ?>
 <?php the_content(); ?>
<?php endwhile; ?>
      </div>
      <div id="sidenav-recruit"></div>
    </div>


    <div class="requirements-area">
      <div class="requirements">
        <h3>募集要項</h3>
        <h4 class="line"><span>救急医・総合診療医募集</span></h4>
        <h5>採用条件</h5>
        <div id="require-table">
          <table>
            <tr>
              <td>採用日</td><th><?php echo get_post_meta($post->ID , '採用日' ,true); ?></th>
            </tr>
            <tr>
              <td>職位</td><th><?php echo get_post_meta($post->ID , '職位' ,true); ?>す</th>
            </tr>
            <tr>
              <td>給与</td><th><?php echo get_post_meta($post->ID , '給与' ,true); ?></th>
            </tr>
            <tr>
              <td>保険</td><th><?php echo get_post_meta($post->ID , '保険' ,true); ?></th>
            </tr>
            <tr>
              <td>宿舎の有無</td><th><?php echo get_post_meta($post->ID , '宿舎の有無' ,true); ?></th>
            </tr>
            <tr>
              <td>福利厚生</td><th><?php echo get_post_meta($post->ID , '福利厚生' ,true); ?></th>
              </tr>
              <tr>
                <td>応募書類</td><th><?php echo get_post_meta($post->ID , '応募書類' ,true); ?></th>
              </tr>
              <tr>
                <td>応募締切日</td><th><?php echo get_post_meta($post->ID , '応募締切日' ,true); ?></th>
              </tr>
              <tr>
                <td>選考方法</td><th><?php echo get_post_meta($post->ID , '選考方法' ,true); ?></th>
              </tr>
              <tr>
                <td>選考日</td><th><?php echo get_post_meta($post->ID , '選考日' ,true); ?></th>
              </tr>
              <tr>
                <td>その他</td><th><?php echo get_post_meta($post->ID , 'その他' ,true); ?></th>
              </tr>
            </table>
          </div>
          <div class="send-to-area">
            <div class="row">

              <div class="col-md-5">
                <div class="send-to">
                  <h4>書類提出先</h4>
                  <p>
                    〒861-4193 熊本市南区近見5丁目3-1<br>
                    社会福祉法人恩賜財団済生会熊本病院 人事室
                  </p>
                </div>
              </div>
              <div class="col-md-7">
                <div class="send-to">
                  <h4>お問い合わせ先</h4>
                  <p>
                    TEL 096-351-8074(直通) E-mail:saiyou@saiseikaikumamoto.jp<br>
                    資料請求・お問い合わせ  見学希望の方へ
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div id="sidenav-qaa"></div>
      <div class="qaa-area">
        <div class="qaa">
          <h3>Q&A</h3>
          <h4 class="line"><span>救急医・総合診療医についての質問</span></h4>
          <div class="qaa-content">
            <span class="q">勤務体制はどのようになっていますか。</span>
            <p class="a">
              当院では、部分的交替勤務制を導入しています。<br>
              土日祝日の日勤帯は2名の交替勤務制にして、平日に振替休日としています。<br>
              長時間勤務、連続勤務が緩和されオンとオフの切り替えが明確になっています。<br>

              →詳しくはこちら
            </p>
          </div>
        </div>
      </div>

      <hr>
      <!-- sidenav-->
      <div id="sidenav">
        <ul>
          <li><a href="#sidenav-message">メッセージ</a></li>
          <li><a href="#sidenav-recruit">募集要項</a></li>
          <li><a href="#sidenav-qaa">Q&A</a></li>
        </ul>
      </div>
      <!-- Footer -->
    </div>
    <footer>
      <div class="container">
        <div id="footer_inner">
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <dl>
                <dt><a href="#">臨床研修医</a></dt>
                <dd>
                  <ul>
                    <li> <a href="#">初期臨床研修医</a></li>
                  </ul>
                  <ul>
                    <li> <a href="#">後期臨床研修医</a></li>
                  </ul>
                </dd>
              </dl>
              <!--./臨床研修医-->
              <dl>
                <dt><a href="#">診療科医師</a></dt>
                <dd>
                  <ul>
                    <li> <a href="#">救急医・総合診療医</a></li>
                    <li> <a href="#">集中治療医</a></li>
                    <li> <a href="#">泌尿器科医</a></li>
                    <li> <a href="#">麻酔科医</a></li>
                  </ul>
                  <ul>
                    <li> <a href="#">病理診断医</a></li>
                    <li> <a href="#">精神内科医</a></li>
                    <li> <a href="#">総合健診医</a></li>
                    <li> <a href="#">消化器内科医</a></li>
                    <li> <a href="#">腫瘍内科医</a></li>
                  </ul>
                </dd>
              </dl>
              <!--./診療科医師-->
              <dl>
                <dt><a href="#">看護師</a></dt>
                <dd>
                  <ul>
                    <li> <a href="#">初期臨床研修医</a></li>
                  </ul>
                  <ul>
                    <li> <a href="#">後期臨床研修医</a></li>
                  </ul>
                </dd>
              </dl>
              <!--./看護師-->
            </div>
            <!--./col-->
            <div class="col-sm-4 col-md-4">
              <dl>
                <dt><a href="#">メディカルスタッフ</a></dt>
                <dd>
                  <ul>
                    <li> <a href="#">薬剤師</a></li>
                    <li> <a href="#">臨床検査技師</a></li>
                    <li> <a href="#">言語聴覚士</a></li>
                    <li> <a href="#">診療放射線技師</a></li>
                    <li> <a href="#">臨床工学技師</a></li>
                  </ul>
                  <ul>
                    <li> <a href="#">管理栄養士</a></li>
                    <li> <a href="#">理学療法士</a></li>
                    <li> <a href="#">作業療法士</a></li>
                    <li> <a href="#">医療ソーシャルワーカー</a></li>
                    <li> <a href="#">介護福祉士</a></li>
                  </ul>
                </dd>
              </dl>
              <!--./メディカルスタッフ-->
              <dl>
                <dt><a href="#">事務系スタッフ</a></dt>
                <dd>
                  <ul>
                    <li> <a href="#">経営マネジメントスタッフ</a></li>
                    <li> <a href="#">医療秘書</a></li>
                  </ul>
                  <ul>
                    <li> <a href="#">その他スタッフ</a></li>
                  </ul>
                </dd>
              </dl>
              <!--./事務系スタッフ-->
            </div>
            <!--./col-->
            <div class="col-sm-4 col-md-4">
              <p>採用に関するお問い合わせ先</p>
              <h3>[人事室直通] <span>03-0000-0000</span></h3>
              <p id="footer_btn"><a href="#">資料請求・お問い合わせ</a></p>
              <p>社会福祉法人 恩賜財団 済生会熊本病院</p>
              <address>〒861-4193 熊本市南区近見5丁目3番1号</address>
            </div>
            <!--./col-->
          </div>
          <!--./row-->
        </div>
        <!--./#footer_inner-->
      </div>
      <!--./container-->
      <div id="footer_nav">
        <div class="container-fluid">
          <div class="row">
            <ul id="footer_nav__inner">
              <li><a href="#">トップページ</a></li>
              <li><a href="#">求める人物像</a></li>
              <li><a href="#">教育体制(人材育成)プログラム</a></li>
              <li><a href="#">福利厚生</a></li>
              <li><a href="#">採用説明会・病院見学について</a></li>
            </ul>
          </div>
          <!--./row-->
        </div>
        <!--./#footer_nav-->
      </div>
      <p id="copy">©2016 HOSPITAL ALL RIGHT RESERVED.</p>
    </footer>

  </div>
  <!-- /.container -->

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


  <!-- Bootstrap Core JavaScript -->
  <script src="<?php bloginfo('template_url' ); ?>/js/bootstrap.min.js"></script>

  <!-- Script to Activate the Carousel -->
  <script>
  $('.carousel').carousel({
    interval: 5000 //changes the speed
  })
  </script>
<?php wp_footer(); ?>
</body>


</html>
