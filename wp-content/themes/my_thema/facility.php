<?php
/*
Template Name: facility
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
        <span class="top-line"><span>職員サポート</span></span>
        <h1>院内施設</h1>
        <p>図書館やシミュレーション室など、<br>
          スタッフ向けの教育研修センター、<br>
          またヘルスケア全般、職員食堂なども<br>
          充実しています。
        </p>
      </div>
    </div>
  </section>


  <!-- Page Content -->
  <div class="container">
    <!-- Link Area -->
    <div class="link-area">
      <div class="row">
        <div class="col-md-1 col-sm-0 col-xs-0"></div>
        <a href="#training" class="index-menu">
          <div class="col-md-2 col-sm-4 col-xs-6">
            <img src="<?php echo get_field('リンクアイコン1'); ?>"/>
          </div>
        </a>
        <a href="#shop1" class="index-menu">
          <div class="col-md-2 col-sm-4 col-xs-6">
            <img src="<?php echo get_field('リンクアイコン2'); ?>"/>
          </div>
        </a>
        <a href="#shop2" class="index-menu">
          <div class="col-md-2 col-sm-4 col-xs-6">
            <img src="<?php echo get_field('リンクアイコン3'); ?>"/>
          </div>
        </a>
        <a href="#shop3" class="index-menu">
          <div class="col-md-2 col-sm-6 col-xs-6">
            <img src="<?php echo get_field('リンクアイコン4'); ?>"/>
          </div>
        </a>
        <a href="#shop4" class="index-menu">
          <div class="col-md-2 col-sm-6 col-xs-6">
            <img src="<?php echo get_field('リンクアイコン5'); ?>"/>
          </div>
        </a>
        <div class="col-md-1 col-sm-0 col-xs-0"></div>
      </div>
    </div>
    <!-- /Link Area -->
    <div id="training"></div>
    <div class="training">
      <h3>教育研修センター Learning SKAiR : Salvia(サルビア)/ Training SKAiR Apice(アピス)</h3>
      <img src="<?php echo get_field('教育研修センター_画像'); ?>" alt="" />
      <h4>さらなる成長をめざして ～ 教育研修センター ～</h4>
      <p>
        2015年5月、職員専用の図書室・勉強室、シミュレーション室等を備えた教育研修センターをオープンしました。
      </p>
      <h4>Learning SKAiR : Salvia(サルビア)― 図書室・勉強室 ―</h4>
      <p>
        24時間利用が可能で、PCコーナーにはパソコン20台以上、ラウンジコーナーではくまモンの上でくつろぎの空間が。
        また、ポスターも印刷可能な複合機や、統計ソフト、Wi-Fi、ドリンクコーナーも完備しています。
      </p>
      <h4>Training SKAiR Apice(アピス) ― シミュレーション室・多目的室 等 ―</h4>
      <p>
        シミュレーション室、各種トレーニングや講演会場にもなる多目的スペースを備えた施設。
        病棟の個室を完全再現した模擬病室を備えたシミュレーション室、各種シミュレーターが用意してあり、
        蘇生トレーニングなどを含む各医療スタッフの技術研修が可能です。
      </p>
    </div>
    <div id="health">
      <h3>職員健康管理室</h3>
      <div class="content">
        <div class="cf">
          <img src="<?php echo get_field('職員健康管理室_画像'); ?>" align="right" style="padding-bottom: 1em;"/>
          <h4>職員の健康を守るために</h4>
          <p>
            2013年9月1日より職員健康管理室が稼働し、
            職員のこころとからだの健康を守るためのサポートを行っています。
            職員健康管理室には、産業医、保健師、事務員、臨床心理士(非常勤:週2日)、
            が専任で在駐していますので、気軽に相談できる体制が整っています。
          </p>
        </div>
        <h4>【当院の職員の健康に関する方針】</h4>
        <p>
          職員は「自分の健康は自分で守る」という意識をもって、
          自らのこころとからだの健康づくりに主体的に取り組み、
          済生会熊本病院はそれを支援します。
        </p>
        <p>
          済生会熊本病院は、職員が高い志気を持って能力を十分に発揮できるよう、
          安全かつ快適な職場環境をつくり、充実した職場生活を送れるよう支援します。
        </p>
        <p>
          個人情報の適正な利用と管理の徹底を図るとともに、法令を順守した健康管理を推進します。
        </p><br>
        <h4>【主な業務内容】</h4>
        <div class="for-pcview">
          <table width="100%" border="0">
            <tr>
              <th scope="col">事業内容</th>
              <th scope="col">目的</th>
            </tr>
            <tr>
              <td>職員の健康推進計画</td>
              <td>職員健康診断の実施、精密検査受診フォロー、産業医との面談、臨床心理士との面談、職員への健康教育、疾病予防まで、一貫して計画的に実施・管理する。</td>
            </tr>
            <tr>
              <td>職員の感染防止対策</td>
              <td>抗体価の管理、ワクチン接種の実施・管理を一貫して行い、職員を感染から守るだけでなく、患者さんへの感染防止にもつなげる。</td>
            </tr>
            <tr>
              <td>組織健康度</td>
              <td>職員の健康に関するデータを用いて、組織の健康度の指標を作り、それを測ることで組織に必要な課題を把握し健康推進計画等に活かしていく。</td>
            </tr>
          </table>
        </div>
        <div class="for-spview">
          <table width="100%">
            <tr>
              <th>職員の健康推進計画</th>
              <td>職員健康診断の実施、精密検査受診フォロー、産業医との面談、臨床心理士との面談、
                職員への健康教育、疾病予防まで、一貫して計画的に実施・管理する。</td>
              </tr>
              <tr>
                <th>職員の感染防止対策</th>
                <td>抗体価の管理、ワクチン接種の実施・管理を一貫して行い、職員を感染から守るだけでなく、
                  患者さんへの感染防止にもつなげる。</td>
                </tr>
                <tr>
                  <th>組織健康度</th>
                  <td>職員の健康に関するデータを用いて、組織の健康度の指標を作り、
                    それを測ることで組織に必要な課題を把握し健康推進計画等に活かしていく。</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="shop">
                <div id="shop1"></div>
                <h3><?php echo get_field('施設紹介1'); ?></h3>
                <img src="<?php echo get_field('施設紹介1_画像'); ?>"/>
                <h4>～<?php echo get_field('施設紹介1_キャッチ'); ?>～</h4>
                <p>
                  <?php echo get_field('施設紹介1_内容'); ?>
                </p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="shop">
                <div id="shop2"></div>
                <h3><?php echo get_field('施設紹介2'); ?></h3>
                <img src="<?php echo get_field('施設紹介2_画像'); ?>"/>
                <h4>～<?php echo get_field('施設紹介2_キャッチ'); ?>～</h4>
                <p>
                   <?php echo get_field('施設紹介2_内容'); ?>
                </p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="shop">
                <div id="shop3"></div>
                <h3><?php echo get_field('施設紹介3'); ?></h3>
                <img src="<?php echo get_field('施設紹介3_画像'); ?>"/>
                <h4>～<?php echo get_field('施設紹介3_キャッチ'); ?>～</h4>
                <p>
                  <?php echo get_field('施設紹介3_内容'); ?>
                </p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div id="shop4"></div>
              <div class="shop">
                <h3><?php echo get_field('施設紹介4'); ?></h3>
                <img src="<?php echo get_field('施設紹介4_画像'); ?>"/>
                <h4>～<?php echo get_field('施設紹介4_キャッチ'); ?>～</h4>
                <p>
                  <?php echo get_field('施設紹介4_内容'); ?>
                </p>
              </div>
            </div>
          </div>
          <hr>
        </div>
        <!-- Footer -->

           <?php get_footer();?>