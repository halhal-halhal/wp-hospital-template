<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!--パンドラ-->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <!---->

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
<?php if( is_single() ): ?>
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
  <?php endif ?>

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
  <!-- to_top -->
  <!-- /to_top -->
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
        <a class="navbar-brand" href="<?php echo home_url(); ?>">RECRUIT SITE</a>
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

<?php
if( is_single() ){
                    $type_name = esc_html(get_post_type_object(get_post_type())->name);
                }else{
                    $type_name = get_post_meta($post->ID , '英語名' ,true);
                }
?>

  <header>
    <div id="globalnav-area">
      <div class="container">
        <table id="globalnav">
          <tr>
            <th class="ln00<?php if ( is_page('/') ) { echo '-now'; }?>"><a href="<?php echo home_url(); ?>">トップページ</a></th>
            <th class="ln01<?php if ( $type_name == 'trainer' ) { echo '-now'; }?>"><a href="<?php echo home_url(); ?>/臨床研修医">臨床研修医(初期・後期)</a></th>
            <th class="ln02<?php if ( $type_name == 'doctor' ) { echo '-now'; }?>"><a href="<?php echo home_url(); ?>/診療科医師">診療科医師</a></th>
            <th class="ln03<?php if ( $type_name == 'nurse' ) { echo '-now'; }?>"><a href="<?php echo home_url(); ?>/看護師">看護師</a></th>
            <th class="ln04<?php if ( $type_name == 'co_medical' ) { echo '-now'; }?>"><a href="<?php echo home_url(); ?>/メディカルスタッフ">メディカルスタッフ</a></th>
            <th class="ln05<?php if ( $type_name == 'staff' ) { echo '-now'; }?>"><a href="<?php echo home_url(); ?>/事務系スタッフ">事務系スタッフ</a></th>
          </tr>
        </table>
      </div>
    </div>
    <div id="localnav-area">
      <div class="container">
         <ul id="localnav">
          <?php 
                $wp_query = new WP_Query();
                $param = array(
                  'posts_per_page' => '-1', //表示件数。-1なら全件表示
                  'post_type' => $type_name, //カスタム投稿タイプの名称を入れる 

                  'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                  'orderby' => 'DATE', //ID順に並び替え→DATE順
                  'order' => 'ASC'
                );
                $wp_query->query($param);
                if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
            ?>
       
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>
        </ul>
      </div>
    </div>
    <table id="sp-globalnav">
      <tr>
        <th><a href="<?php echo home_url(); ?>">トップページ</a></th>
        <th><a href="<?php echo home_url(); ?>/臨床研修医初期・後期">臨床研修医(初期・後期)</a></th>
        <th><a href="<?php echo home_url(); ?>/診療科医師">診療科医師</a></th>
        <th><a href="<?php echo home_url(); ?>/看護師">看護師</a></th>
        <th><a href="<?php echo home_url(); ?>/メディカルスタッフ">メディカルスタッフ</a></th>
        <th><a href="<?php echo home_url(); ?>/事務系スタッフ">事務系スタッフ</a></th>
      </tr>
    </table>
  </header>
    