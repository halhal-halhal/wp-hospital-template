<?php
/*
Template Name: contant
*/
?><?php get_header();?>

  <section id="content-top" style="padding-top:10em;">

    <div class="container">
      <!-- パンくずリスト -->
      <div class="row">
        <div class="col-lg-12">
          <ol class="breadcrumb" style="background-color:rgba(0,0,0,0);">
            <li><a href="index.html">Home</a></li>
            <li class="active">資料請求・お問い合わせ</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->

      <div id="top-title">
        <h1>資料請求/お問い合わせ</h1>
      </div>
    </div>
  </section>


  <!-- Page Content -->
  <div class="container">
    <div class="contact-wrap">
      <p>
        採用に関する各種お問い合わせは、下記の入力フォームよりお願いします。<br/>
        ※入力情報はSSLにより暗号化され当院まで送信されます。<br/>
        ※このページをご利用の際には『個人情報保護方針』が適用されますので、必ずお読みください。<br/>
        　申し込まれた場合、この条件に同意されたものとみなします。<br/>
        ※参加希望者の方からご提供頂いた個人情報は、当院の採用業務にのみ使用し、その他の目的には一切使用しません。<br/>
        　また、収集した個人情報は採用活動の終了に伴い、当院の責任のもとで適切に廃棄・消去します。<br/>
        ※申込された方には、申込内容について担当者よりご連絡させていただく場合があります<br/>
      </p><br>
      <?php echo do_shortcode('[contact-form-7 id="125" title="Contact form 1_copy"]'); ?>
    </div>
  </div>
  <hr>
</div>
<!-- Footer -->

<?php get_footer();?>