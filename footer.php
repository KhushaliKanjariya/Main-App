<html>
<head>
<title>Movie Studio</title>
</head>
 <!-- footer -->
    <footer>
      <div class="wrapper"> <a href="index.php" id="footer_logo"><span>MOVIE</span>STUDIO</a>
        <ul id="icons">
          <li><a href="https://www.facebook.com/" class="normaltip"><img src="images/icon1.gif" alt=""></a></li>
          <li><a href="https://twitter.com/" class="normaltip"><img src="images/icon2.gif" alt=""></a></li>
          
        </ul>
      </div>
      <div class="wrapper">
        <nav>
          <ul id="footer_menu">
            <li class="active"><a href="home.php">HOME</a></li>
            <li><a href="search.php">SEARCH</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
			<li><a href="policy.php">POLICY</a></li>
            <li>
					
					<?php
					if(!isset($_SESSION['user_nm']))
					//if($_SESSION['u_nm']=="")
					{
					?> <a href="login.php" style="font-size:18px"> <?php echo "Login"; 
					}
					else { ?> </a>
				<a href="logout.php" style="font-size:18px"><?php 	echo "Logout"; 
				 }
					?></a>
				</li>		
          </ul>
        </nav>
        <div class="tel"><span>+1 800</span>123 45 67</div>
      </div>
      <div id="footer_text">Copyright &copy; <a href="#">Movie Studio</a> All Rights Reserved<br>
    </footer>
    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        preset: 'zabor',
        easing: 'easeOutQuad',
        duration: 800,
        pagination: true,
        banners: true,
        waitBannerAnimation: false,
        slideshow: 6000,
        bannerShow: function (banner) {
            banner.css({
                right: '-700px'
            }).stop().animate({
                right: '0'
            }, 600, 'easeOutExpo')
        },
        bannerHide: function (banner) {
            banner.stop().animate({
                right: '-700'
            }, 600, 'easeOutExpo')
        }
    })
    $('.pagination li').hover(function () {
        if (!$(this).hasClass('current')) {
            $(this).find('a').stop().animate({
                backgroundPosition: '0 0'
            }, 600, 'easeOutExpo', function () {
                $(this).parent().css({
                    backgroundPosition: '-20px 0'
                })
            });
        }
    }, function () {
        if (!$(this).hasClass('current')) {
            $(this).css({
                backgroundPosition: '0 0'
            }).find('a').stop().animate({
                backgroundPosition: '-250px 0'
            }, 600, 'easeOutExpo');
        }
    })
})
</script>
</body>
</html>