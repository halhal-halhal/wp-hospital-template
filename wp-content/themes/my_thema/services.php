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
  <?php get_footer();?>