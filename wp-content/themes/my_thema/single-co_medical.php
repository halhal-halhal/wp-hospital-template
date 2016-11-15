<?php get_header();?>

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


<?php
  $type_name = esc_html(get_post_type_object(get_post_type())->name);
  if ( $type_name == 'trainer' )       { $rectopix = '臨床研修医';}
  else if ( $type_name == 'doctor' )   { $rectopix = '診療科医師';}
  else if ( $type_name == 'nurse' )    { $rectopix = '看護師';}
  else if ( $type_name == 'co_medical'){ $rectopix = 'メディカルスタッフ';}
  else if ( $type_name == 'staff' )    { $rectopix = '事務系スタッフ';}
?>
  <!-- Page Content -->
  <div class="container">
    <div class="content-head">
      <span class="global-category-<?php echo $type_name; ?>"><?php echo $rectopix; ?></span><span class="topix-name"><?php the_title();?></span>
      <ul>
        <li class="about-recruit"><a href="#">採用説明会・病院見学について</a></li>
        <li class="back"><a href="#">診療科医師　INDEXに戻る</a></li>
      </ul>
    </div>
    <div class="content-menu">
      <table class="content-table <?php echo $type_name;?>">
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
    <?php if( get_post_meta($post->post_content) ):?>
      <div id="sidenav-message"></div>
    <div class="message-area">
      <div class="row">
        <div class="col-lg-12">
          <img class="img-responsive" src="<?php the_field('トップ画像'); ?>" alt="" width="1200px">
        </div>
      </div>
      <!-- /.row -->
      <!-- main -->
      <div class="message">
        <div class="<?php echo $type_name;?>">
        <?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
        </div>
      </div>
         </div>
      <?php endif?>
   
      <div id="sidenav-recruit"></div>
  

    <div class="requirements-area">
      <div class="requirements">
        <h3 class="<?php echo $type_name; ?>">募集要項</h3>
        <h4 class="line <?php echo $type_name; ?>"><span><?php the_title();?>募集</span></h4>
        <?php if(get_post_meta($post->ID , '募集' ,true)=='募集終了'):?>
        <h4>今年度の募集は修了致しました。</h4>
        <?php else:?>
        <h5><?php if($rectopix=='trainer'){echo '募集要項'; }else{ echo '採用条件';}?></h5>
        <div id="require-table">
          <table width="100%">
            <tr>
              <td>採用日時</td><th><?php echo get_post_meta($post->ID , '採用日時' ,true); ?></th>
            </tr>
            <tr>
              <td>雇用形態</td><th><?php echo get_post_meta($post->ID , '雇用形態' ,true); ?></th>
            </tr>
            <tr>
              <td>募集人数</td><th><?php echo get_post_meta($post->ID , '募集人数' ,true); ?></th>
            </tr>
            <tr>
              <td>応募資格</td><th><?php echo get_post_meta($post->ID , '応募資格' ,true); ?></th>
            </tr>
            <tr>
              <td>業務内容</td><th><?php echo get_post_meta($post->ID , '業務内容' ,true); ?></th>
            </tr>
          </table>
          <h5>応募・選考方法</h5>
          <table width="100%">
            <tr>
              <td>選考日</td><th><?php echo get_post_meta($post->ID , '選考日' ,true); ?></th>
            </tr>
            <tr>
              <td>試験内容</td><th><?php echo get_post_meta($post->ID , '試験内容' ,true); ?></th>
            </tr>
            <tr>
              <td>応募書類</td><th><?php echo get_post_meta($post->ID , '応募書類' ,true); ?></th>
            </tr>
          </table>
          <h5>待遇</h5>
          <table>
              <tr>
              <td>勤務地</td><th><?php echo get_post_meta($post->ID , '勤務地' ,true); ?></th>
            </tr>
            <tr>
              <td>勤務部署</td><th><?php echo get_post_meta($post->ID , '勤務部署' ,true); ?></th>
            </tr>
            <tr>
              <td>給与</td><th><?php echo get_post_meta($post->ID , '給与' ,true); ?></th>
            </tr>
            <tr>
              <td>手当等</td><th><?php echo get_post_meta($post->ID , '手当等' ,true); ?></th>
            </tr>
            <tr>
              <td>勤務時間</td><th><?php echo get_post_meta($post->ID , '勤務時間' ,true); ?></th>
            </tr>
            <tr>
              <td>休日</td><th><?php echo get_post_meta($post->ID , '休日' ,true); ?></th>
            </tr>
            <tr>
              <td>有給休暇</td><th><?php echo get_post_meta($post->ID , '有給休暇' ,true); ?></th>
            </tr>
            <tr>
              <td>休暇制度</td><th><?php echo get_post_meta($post->ID , '休暇制度' ,true); ?></th>
            </tr>
            <tr>
              <td>社会保険</td><th><?php echo get_post_meta($post->ID , '社会保険' ,true); ?></th>
            </tr>
            <tr>
              <td>福利厚生その他</td><th><?php echo get_post_meta($post->ID , '福利厚生その他' ,true); ?></th>
            </tr>
          </table>
          </div>
          <?php endif?>
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

  <?php if(get_post_meta($post->ID , 'q_1' ,true) != ""): ?>
      <div id="sidenav-qaa"></div>
      <div class="qaa-area">
        <div class="qaa">
          <h3 class="<?php echo $type_name; ?>">Q&A</h3>
          <h4 class="line <?php echo $type_name; ?>"><span><?php the_title();?>についての質問</span></h4>
        
          <div class="qaa-content">
            <div class="<?php echo $type_name;?>">
            <span class="q"><?php echo get_post_meta($post->ID , 'q_1' ,true);?></span>
            <p class="a">
              <?php echo get_post_meta($post->ID , 'a_1' ,true);?>
            </p>
            </div>
          </div>

          <?php if(get_post_meta($post->ID , 'q_2' ,true) != ""): ?>
          <div class="qaa-content">
            <div class="<?php echo $type_name;?>">
            <span class="q"><?php echo get_post_meta($post->ID , 'q_2' ,true);?></span>
            <p class="a">
              <?php echo get_post_meta($post->ID , 'a_2' ,true);?>
            </p>
          </div>
          </div>
          <?php endif?>
          <?php if(get_post_meta($post->ID , 'q_3' ,true) != ""): ?>
          <div class="qaa-content">
            <div class="<?php echo $type_name;?>">
            <span class="q"><?php echo get_post_meta($post->ID , 'q_3' ,true);?></span>
            <p class="a">
              <?php echo get_post_meta($post->ID , 'a_3' ,true);?>
            </p>
          </div>
          </div>
          <?php endif?>
        </div>
      </div>
          <?php endif?>
      <hr>
      <!-- sidenav-->
       <div id="sidenav">
        <ul><?php if( get_post_meta($post->post_content) ):?>
          <li><a href="#sidenav-message">メッセージ</a></li><?php endif?>
          <li><a href="#sidenav-recruit">募集要項</a></li>
            <?php if(get_post_meta($post->ID , 'q_1' ,true) != ""): ?>
          <li><a href="#sidenav-qaa">Q&A</a></li>
                    <?php endif?>
        </ul>
      </div>
      <!-- Footer -->
    </div>
  <?php get_footer();?>