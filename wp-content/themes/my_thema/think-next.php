<?php
/*
Template Name: think-next
*/
?><?php get_header();?>
  <section id="content-top" >
    <div id="top-img" style="background-image: url(<?php echo get_field('トップ画像'); ?>);">
      <div class="container">
        <!-- パンくずリスト -->
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb" style="background-color:rgba(0,0,0,0);">
              <li><a href="index.html">Home</a></li>
              <li class="active">求める人材像</li>
            </ol>
          </div>
        </div>
        <!-- /.row -->
      </div>

    </div>
  </section>


  <!-- Page Content -->
  <div class="container">
    <div class="director-message">
      
      <div id="director-pic">
        <img src="<?php echo get_field('院長_写真'); ?>"/><br>
        <span>済生会熊本病院　院長</span>
        <h3><?php echo get_field('院長名'); ?><br><span><?php echo get_field('院長名_英語'); ?></span></h3>
      </div>
      <h2><span>院長メッセージ</span><br>
      <?php echo get_field('院長_メッセージ_見出し'); ?></h2>
       <p><?php echo get_field('院長_メッセージ'); ?></p>
    </div>
    
    <div id="think-next">
      <h4><span>求める人材像</span></h4>
      <h3>THINK NEXT 常に一歩先を見据え、行動できる方</h3>
      <div class="think-message">
        <p>
          当院は、地域に求められる病院であり続けるために<br>
          常に先を見据え、医療の未来を切り開く<br>
          日本のリーディングホスピタルを目指しています。
        </p>
      </div>
      <p>
        「医療を通して地域社会に貢献します」という理念のもと、暖かい温もりのある看護を提供することを心がけています。<br>
        尊い理念を誇りに組織を継続し、発展させていくために、つねに社会の変革に対応した柔軟な医療・看護を展開。<br>
        本物の医療を提供するために、専門性の高い人材の育成に力を入れています。<br>
        1935年設立以来、「施薬救療」の旗印のもと、医療に恵まれない人々のために無料定額診療や過疎地診療、<br>
        住民保健活動など福祉活動に注力し、診療所から病院へ成長し現在にいたります。<br>
        わたしたちは、命の現場で最高の医療技術を駆使し、地域社会に貢献する、急性期医療のプロフェッショナルです。<br>
        「断らない救急」「高度医療の追求」を診療方針として、専門医療チームが24時間迅速に対応し、<br>
        臓器別の専門診療体制を組むことで、より高度で最新・最良の医療を提供します。<br>
      </p>
      <img id="logo" src="<?php echo get_field('済生会_ロゴ'); ?>" height="126px" width="178px"/>
    </div>
    <hr>
  </div>
  <!-- Footer -->
<?php get_footer();?>