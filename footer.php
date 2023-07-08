<footer>
    <div class="wave-purple"></div>
    <div class="footer-section section">
        <div class="footer-wrapper">
         <div class="footer-left">
            <div class="footer-address">
                <div class="footer-left-wrapper">
                    <div class="logo-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.png" alt="">
                    </div>
                    <h2 class="sologram">創業200有余年の老舗旅館</h2>
                <p class="address">〒949-8201 <br>

                新潟県中魚沼郡津南町大字下船渡戊450</p>
                <p class="ph"><span>電話番号:</span> <span>000-0000-0000</span></p>
                <p class="fax"><span>FAX:</span> <span>026-765-4639</span></p>

            </div>
</div>
            
            </div>
            <div class="footer-right">
                <div class="footer-right-wrapper">
                    <div class="right-top">
                        <div class="footer-button">
                    <a class="more-link"href="">詳しく見る</a>
</div>
<div class="puppy-img-wrapper">
  <div class="img-wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wanchan.png" alt="">
</div>
</div>
                    </div>
        <ul class="footer-menu-list">
            <li class="menu-list"><a href="<?php echo esc_url(home_url("/about/")); ?>" class="menu-link">ようこそ綿屋旅館へ</a></li>
            <li class="menu-list"><a href="<?php echo esc_url(home_url("/plan/")); ?>" class="menu-link">宿泊プラン</a></li>  
            <li class="menu-list"><a href="" class="menu-link">お知らせ</a></li>  
            <li class="menu-list"><a href="<?php echo esc_url(home_url("/hospitality/")); ?>" class="menu-link">おもてなし</a></li>  
            <li class="menu-list"><a href="https://www.yado-sagashi.net/yoyaku/plan/index2.jsp?beg&all&yid=23120638184302" class="menu-link">ご予約</a></li>
          
            <li class="menu-list"><a href="<?php echo esc_url(home_url("/contact/")); ?>" class="menu-link">お問い合わせ</a></li>
        </ul>
        </div>
</div>
        <div>
    </div>
    <?php wp_footer(); ?>
</footer>


<script>
    var areas = document.querySelectorAll('area');
    var imageContainer = document.querySelector('.image-container');

    areas.forEach(function(area) {
      area.addEventListener('click', function(event) {
        event.preventDefault();

        var imageSrc = this.getAttribute('data-image');

        if (imageSrc) {
          imageContainer.innerHTML = '<img src="' + imageSrc + '" alt="画像">';
          imageContainer.style.display = 'block';
        } else {
          imageContainer.innerHTML = '';
          imageContainer.style.display = 'none';
        }
      });
    });
  </script>
  <!-- <script type="text/javascript" src="js/script.js"></script> -->
<script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <!--ドロワー-->
   
    <!-- <script src="<?php //echo get_template_directory_uri(); ?>/assets/js/slick.js"></script> -->

    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
    />

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    ></script>
</body>

</html>