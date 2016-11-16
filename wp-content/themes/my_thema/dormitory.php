<?php
/*
Template Name: dormitory
*/
?><?php get_header();?>

  <section id="content-top">
    <div id="top-img" style="background-image: url(<?php echo get_field('トップ画像'); ?>);">
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
      </div>
      <div id="top-message">
        <span class="top-line"><span>住宅サポート</span></span>
        <h1>職員寮</h1>
        <p>(独身寮、看護師寮、世帯持寮)</p>
        <p>病院から徒歩15分程度の位置に<br>マンション式の寮を提供しています。</p>
      </div>
    </div>
  </section>


  <!-- Page Content -->
  <div class="container">
    <div class="house-detail" style="background-image: url(<?php echo get_field('背景_1'); ?>);">
      <h3>病院周辺に独身寮や世帯持寮など、<br>
        さまざまなタイプの職員用住居を完備。</h3>
        <div class="pc-site">
          <p>当院には、さまざまなライフ・スタイルに対応した職員寮を完備しています。
            研修医や医師、看護師などの単身寮、医師専用の世帯寮(2LDK)、それ以外の職種でも利用可能な世帯寮(2LDK～3LDK)があります。
            ほとんどが築10年以内で新しく、オートロックもついています。さらに、全てが病院周辺に位置しているため、通勤にも便利です。
            気になる家賃についても病院が一部を負担していますので、通常の賃貸住宅より格安で居住することができます。</p>
          </div>
        </div>
        <div class="sp-site">
          <p>当院には、さまざまなライフ・スタイルに対応した職員寮を完備しています。
            研修医や医師、看護師などの単身寮、医師専用の世帯寮(2LDK)、それ以外の職種でも利用可能な世帯寮(2LDK～3LDK)があります。
            ほとんどが築10年以内で新しく、オートロックもついています。さらに、全てが病院周辺に位置しているため、通勤にも便利です。
            気になる家賃についても病院が一部を負担していますので、通常の賃貸住宅より格安で居住することができます。</p>
          </div>

        <div class="voice">
          <h3>職員寮入居者の声</h3>
          <h4>入居寮:<?php echo get_field('職員寮入居者の声_入居寮'); ?></h4>
          <span class="voice_title"><?php echo get_field('職員寮入居者の声_タイトル'); ?></span>
          <div class="voice_content">
            <img src="<?php echo get_field('職員寮入居者の声_写真'); ?>" align="left" />
            <p>
              <?php echo get_field('職員寮入居者の声_本文'); ?>
            </p>
          </div>
        </div>

        <div class="around_info">
          <div class="sm-space"></div>
          <div class="info_detail">
            <h3>職員寮の周辺施設情報<h3>
              <?php echo get_field('周辺施設情報'); ?>
            </div>
          </div>

          <div class="gallery">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_field('ギャラリー_1_画像'); ?>" />
                <p><?php echo get_field('ギャラリー_1_タイトル'); ?></p>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_field('ギャラリー_2_画像'); ?>" />
                <p><?php echo get_field('ギャラリー_2_タイトル'); ?></p>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_field('ギャラリー_3_画像'); ?>" />
                <p><?php echo get_field('ギャラリー_3_タイトル'); ?></p>
              </div>
            </div>
          </div>

          <hr>
        </div>
        <!-- Footer -->
         <?php get_footer();?>