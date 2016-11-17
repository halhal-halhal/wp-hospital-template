<?php
/* Template Name: [News] */
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
        <h2><?php the_title();?></h2>
        <br>
  <ul class="nav nav-tabs" style="margin-bottom: 15px;">
  <li class="active"><a href="#all" data-toggle="tab">すべての記事</a></li>
  <li><a href="#art1" data-toggle="tab">臨床研修医</a></li>
  <li><a href="#art2" data-toggle="tab">診療科医師</a></li>
  <li><a href="#art3" data-toggle="tab">看護師</a></li>
  <li><a href="#art4" data-toggle="tab">メディカルスタッフ</a></li>
  <li><a href="#art5" data-toggle="tab">事務系スタッフ</a></li>
  <li><a href="#art6" data-toggle="tab">その他</a></li>
</ul>

<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="all">
    <?php
        $wp_query = new WP_Query();
        $param = array(
          'posts_per_page' => '6', //表示件数。-1なら全件表示
          'post_type' => 'news', //カスタム投稿タイプの名称を入れる
          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
          'orderby' => 'DATE', //ID順に並び替え→DATE順
          'order' => 'ASC'
        );
        $wp_query->query($param);?>
            
                <table class="news-table">
                 <?php if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post(); ?><tr>
                <th><div class="icon_<?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?>">
                  <span><?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?></span></div></th>
                  <td><?php the_time(Y年n月j日); ?></td>
                  <td><a href="<?php the_permalink(); ?>"><?php the_title();?></a></td>
                </li></tr>
              <?php endwhile; endif; ?>
              </table>
              <?php wp_reset_query(); ?>
              </ul>
            
  </div>
  <div class="tab-pane fade" id="art1">
       <?php
        $wp_query = new WP_Query();
        $param = array(
          'posts_per_page' => '6', //表示件数。-1なら全件表示
          'post_type' => 'news', //カスタム投稿タイプの名称を入れる
          'meta_value' => '臨床研修医',
          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
          'orderby' => 'DATE', //ID順に並び替え→DATE順
          'order' => 'ASC'
        );
        $wp_query->query($param);?>
            
                <table class="news-table">
                 <?php if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post(); ?><tr>
                <th><div class="icon_<?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?>">
                  <span><?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?></span></div></th>
                  <td><?php the_time(Y年n月j日); ?></td>
                  <td><a href="<?php the_permalink(); ?>"><?php the_title();?></a></td>
                </li></tr>
              <?php endwhile; endif; ?>
              </table>
              <?php wp_reset_query(); ?>
              </ul>
  </div>
  <div class="tab-pane fade" id="art2">
     <?php
        $wp_query = new WP_Query();
        $param = array(
          'posts_per_page' => '6', //表示件数。-1なら全件表示
          'post_type' => 'news', //カスタム投稿タイプの名称を入れる
          'meta_value' => '診療科医師',
          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
          'orderby' => 'DATE', //ID順に並び替え→DATE順
          'order' => 'ASC'
        );
        $wp_query->query($param);?>
            
                <table class="news-table">
                 <?php if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post(); ?><tr>
                <th><div class="icon_<?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?>">
                  <span><?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?></span></div></th>
                  <td><?php the_time(Y年n月j日); ?></td>
                  <td><a href="<?php the_permalink(); ?>"><?php the_title();?></a></td>
                </li></tr>
              <?php endwhile; endif; ?>
              </table>
              <?php wp_reset_query(); ?>
              </ul>
  </div>
    <div class="tab-pane fade" id="art3">
     <?php
        $wp_query = new WP_Query();
        $param = array(
          'posts_per_page' => '6', //表示件数。-1なら全件表示
          'post_type' => 'news', //カスタム投稿タイプの名称を入れる
          'meta_value' => '看護師',
          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
          'orderby' => 'DATE', //ID順に並び替え→DATE順
          'order' => 'ASC'
        );
        $wp_query->query($param);?>
            
                <table class="news-table">
                 <?php if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post(); ?><tr>
                <th><div class="icon_<?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?>">
                  <span><?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?></span></div></th>
                  <td><?php the_time(Y年n月j日); ?></td>
                  <td><a href="<?php the_permalink(); ?>"><?php the_title();?></a></td>
                </li></tr>
              <?php endwhile; endif; ?>
              </table>
              <?php wp_reset_query(); ?>
              </ul>
  </div>
    <div class="tab-pane fade" id="art4">
     <?php
        $wp_query = new WP_Query();
        $param = array(
          'posts_per_page' => '6', //表示件数。-1なら全件表示
          'post_type' => 'news', //カスタム投稿タイプの名称を入れる
          'meta_value' => 'メディカルスタッフ',
          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
          'orderby' => 'DATE', //ID順に並び替え→DATE順
          'order' => 'ASC'
        );
        $wp_query->query($param);?>
            
                <table class="news-table">
                 <?php if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post(); ?><tr>
                <th><div class="icon_<?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?>">
                  <span><?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?></span></div></th>
                  <td><?php the_time(Y年n月j日); ?></td>
                  <td><a href="<?php the_permalink(); ?>"><?php the_title();?></a></td>
                </li></tr>
              <?php endwhile; endif; ?>
              </table>
              <?php wp_reset_query(); ?>
              </ul>
  </div>
    <div class="tab-pane fade" id="art5">
     <?php
        $wp_query = new WP_Query();
        $param = array(
          'posts_per_page' => '6', //表示件数。-1なら全件表示
          'post_type' => 'news', //カスタム投稿タイプの名称を入れる
          'meta_value' => '事務系スタッフ',
          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
          'orderby' => 'DATE', //ID順に並び替え→DATE順
          'order' => 'ASC'
        );
        $wp_query->query($param);?>
            
                <table class="news-table">
                 <?php if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post(); ?><tr>
                <th><div class="icon_<?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?>">
                  <span><?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?></span></div></th>
                  <td><?php the_time(Y年n月j日); ?></td>
                  <td><a href="<?php the_permalink(); ?>"><?php the_title();?></a></td>
                </li></tr>
              <?php endwhile; endif; ?>
              </table>
              <?php wp_reset_query(); ?>
              </ul>
  </div>
    <div class="tab-pane fade" id="art6">
     <?php
        $wp_query = new WP_Query();
        $param = array(
          'posts_per_page' => '6', //表示件数。-1なら全件表示
          'post_type' => 'news', //カスタム投稿タイプの名称を入れる
          'meta_value' => 'その他',
          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
          'orderby' => 'DATE', //ID順に並び替え→DATE順
          'order' => 'ASC'
        );
        $wp_query->query($param);?>
            
                <table class="news-table">
                 <?php if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post(); ?><tr>
                <th><div class="icon_<?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?>">
                  <span><?php echo get_post_meta($post->ID , 'ジャンル名' ,true); ?></span></div></th>
                  <td><?php the_time(Y年n月j日); ?></td>
                  <td><a href="<?php the_permalink(); ?>"><?php the_title();?></a></td>
                </li></tr>
              <?php endwhile; endif; ?>
              </table>
              <?php wp_reset_query(); ?>
              </ul>
  </div>
  
</div>
  
  
</div>
      </div>
    </div>
    <!-- /.row -->
</div>
 
  
  <?php get_footer();?>