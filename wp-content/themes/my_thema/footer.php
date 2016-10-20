       <hr>

        <!-- Footer -->
        <footer>
          <div class="container">
            <div id="footer_inner">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                      <dl>
                          <dt><a href="<?php echo home_url(); ?>/臨床研修医">臨床研修医</a></dt>
                          <dd>
                            <ul>
                              <li> <a href="<?php echo home_url(); ?>/初期臨床研修医">初期臨床研修医</a></li>
                            </ul>
                            <ul>
                              <li> <a href="<?php echo home_url(); ?>/後期臨床研修医">後期臨床研修医</a></li>
                            </ul>
                          </dd>
                        </dl>
                        <!--./臨床研修医-->
                        <dl>
                          <dt><a href="<?php echo home_url(); ?>/診療科医師">診療科医師</a></dt>
                          <dd>
                            <ul>
                              <li> <a href="<?php echo home_url(); ?>/診療科医師/救急医・総合診療医">救急医・総合診療医</a></li>
                              <li> <a href="<?php echo home_url(); ?>/診療科医師/集中治療医">集中治療医</a></li>
                              <li> <a href="<?php echo home_url(); ?>/診療科医師/泌尿器科医">泌尿器科医</a></li>
                              <li> <a href="<?php echo home_url(); ?>/診療科医師/麻酔科医">麻酔科医</a></li>
                            </ul>
                            <ul>
                              <li> <a href="<?php echo home_url(); ?>/診療科医師/病理診断医">病理診断医</a></li>
                              <li> <a href="<?php echo home_url(); ?>/診療科医師/精神内科医">精神内科医</a></li>
                              <li> <a href="<?php echo home_url(); ?>/診療科医師/総合検診医">総合健診医</a></li>
                              <li> <a href="<?php echo home_url(); ?>/診療科医師/消化器内科医">消化器内科医</a></li>
                              <li> <a href="<?php echo home_url(); ?>/診療科医師/腫瘍内科医">腫瘍内科医</a></li>
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
                  <li><a href="<?php echo home_url(); ?>">トップページ</a></li>
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
    <script src="<?php bloginfo('template_url' ); ?>/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<?php wp_footer(); ?>
</body>

</html>
