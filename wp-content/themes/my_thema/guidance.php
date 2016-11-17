<?php
/* Template Name: [Guidance] */
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
      <div id="guidance-top">
      <h2><?php the_title();?></h2>
      </div>
      <br>
      <ul class="nav nav-tabs guidance-tabs">
        <li class="active"><a href="#doc" data-toggle="tab">医師・医学生の方へ</a></li>
        <li><a href="#nur" data-toggle="tab">看護学生の方へ</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="doc">
          <?php echo get_field('医師・医学生の方へ'); ?>
        </div>
        <div class="tab-pane fade" id="nur">
          <?php echo get_field('看護学生の方へ'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.row -->
</div>

<?php get_footer();?>
