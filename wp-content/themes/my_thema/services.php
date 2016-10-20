<?php
/* Template Name: [Service] */
?><?php get_header();?>

  <section id="content-top">
    <div class="container">
      <!-- パンくずリスト -->
      <div class="row">
        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><?php echo get_the_title(); ?></li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
    </div>
  </section>



  <!-- Page Content -->
  <div class="container">

    <!-- Image Header -->
    <div class="row">
      <div class="col-lg-12">
        <img class="img-responsive" src="http://placehold.it/1200x300" alt="">
      </div>
    </div>
    <!-- /.row -->

    <!-- news Section -->
    <section id="news-area">
      <div class="container">
        <div class="row">
          <div id="news-area__inner">
            <div class="col-md-3 col-sm-12 col-xs-12">
              <p>NEWS & INFORAMATION</p>

            </div>
            <div class="col-md-7 col-sm-8 col-xs-10">
              <ul>
                <li class="icon_staff">
                  <span>事務系スタッフ</span>
                  <a href="#">2016/09/29テキストテキストテキストテキスト</a>
                </li>
                <li class="icon_trainee">
                  <span>臨床研修医</span>
                  <a href="#">2016/08/29テキストテキストテキストテキスト</a>
                </li>
                <li class="icon_staff">
                  <span>事務系スタッフ</span>
                  <a href="#">2016/07/19テキストテキストテキストテキスト</a>
                </li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
              <p id="news-area__btn"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> 一覧ページへ</a></p>
            </div>
          </div>
        </div>
        <!--./row-->
      </div>
      <!--./container-->
    </section>

    <!-- Service Panels -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    
    <?php
        $type_name = get_post_meta($post->ID , '英語名' ,true);
        $wp_query = new WP_Query();
        $param = array(
          'posts_per_page' => '-1', //表示件数。-1なら全件表示
          'post_type' => $type_name, //カスタム投稿タイプの名称を入れる

          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
          'orderby' => 'DATE', //ID順に並び替え→DATE順
          'order' => 'ASC'
        );
        $wp_query->query($param);?>
        
          
    <div class="row">
      <div class="indexbox">
        <?php if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="col-md-6 col-sm-12">
          <a class="index-menu" href="<?php the_permalink(); ?>">
            <div>
              <div class="copy">
                <?php echo get_post_meta($post->ID , 'コピー' ,true); ?>
              </div>
              <h2><?php if(get_the_title() == "総合健診医"){
              echo "検診<span style=\"font-size:90%;\">(婦人科･内視鏡･総合健診医)</span>";
              }else{
              echo the_title();
              }?></h2>
              <?php the_post_thumbnail( array( 480, 300 ) );?>
            </div>
          </a>
        </div>
        <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>
   
      <!-- Service Panels -->
      <hr>
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
<script src="<?php bloginfo('template_url' ); ?><?php wp_footer(); ?>js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
  interval: 5000 //changes the speed
})
</script>
<?php wp_footer(); ?>
</body>


</html>
