<?php
/*
Template Name: benefits
*/
?><?php get_header();?>
  <section id="content-top" >

      <div class="container">
        <!-- パンくずリスト -->
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb" style="background-color:rgba(0,0,0,0);">
              <li><a href="index.html">Home</a></li>
              <li class="active">福利厚生</li>
            </ol>
          </div>
        </div>
        <!-- /.row -->

      <div id="top-title">
      <h1>福利厚生</h1>
      <h2>
        保育園や寮施設など、多くの支援制度をご用意。<br>
        安心して働くことのできる環境づくりに全力で取り組んでいます。
      </h2>
</div>
  </div>
  </section>


  <!-- Page Content -->
  <div class="container">
    <!-- Link Area -->
    <div class="link-area">
      <div class="row">
        <a href="<?php echo home_url(); ?>/教育研修センター" class="index-menu">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="<?php echo get_field('教育研修センター'); ?>"/>
          </div>
        </a>
        <a href="<?php echo home_url(); ?>/院内保育園" class="index-menu">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="<?php echo get_field('院内保育園'); ?>"/>
          </div>
        </a>
        <a href="<?php echo home_url(); ?>/職員寮" class="index-menu">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="<?php echo get_field('職員寮'); ?>"/>
          </div>
        </a>
        <a href="<?php echo home_url(); ?>/院内施設" class="index-menu">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="<?php echo get_field('院内施設'); ?>"/>
          </div>
        </a>
      </div>
    </div>
    <!-- /Link Area -->
  </div>
          <hr>
        </div>
        <!-- Footer -->

     <?php get_footer();?>