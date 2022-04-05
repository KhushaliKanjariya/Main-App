<html>
<head>
<title>Movie Studio</title>
</head>
 <!-- footer -->
    <footer>
        <ul id="icons">
          <li><a href="https://www.facebook.com/" class="normaltip"><img src="images/icon1.gif" alt=""></a></li>
          <li><a href="https://twitter.com/" class="normaltip"><img src="images/icon2.gif" alt=""></a></li>
          
        </ul>
 
      
        <nav>
          <ul id="footer_menu">
           <ul>
					<li><a href="movietype.php" class="current"  style="font-size:20px">SEARCH</a></li>
					

			<li>
					
					<?php
					if(!isset($_SESSION['a_nm']))
					//if($_SESSION['u_nm']=="")
					{
					?> <a href="login.php" style="font-size:20px"> <?php echo "LOGIN"; 
					}
					else { ?> </a>
				<a href="logout.php" style="font-size:20px"><?php 	echo "LOGOUT"; 
				 }
					?></a>
				</li>				
				</ul> 
				
        </nav>
       </div>
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