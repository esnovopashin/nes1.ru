<!-- Central container -->
		<footer>
			<div class="fcontainer">
				<div class="footer-col">
					<span style="font-size:14px">NESpapercraft © 1998-<?=$year?></span>
				</div>
				<div class="footer-col">
					<div class="social-bar-wrap">
						<a title="VK" href="https://vk.com/feed" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
						<a title="Facebook" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a title="Pinterest" href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
						<a title="Instagram" href="http://instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="footer-col" style="font-size:14px">
					<a href="mailto:nes2010@yandex.ru">Написать</a>
				</div>
			</div>
		</footer>
	</div>
</div>
<script src="1024/jquery.min.js"></script>
<script src="1024/prefixfree.min.js"></script>
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js"></script>
<script src="//code.jquery.com/jquery-3.0.0.min.js"> </script>
<script src="1024/wow.min.js"></script>
<script>
 new WOW().init();
</script>

<!-- FancyZoom -->
<script src="files/FancyZoom.js"></script>
<script src="files/FancyZoomHTML.js"></script>
<script>setupZoom();</script>
<!-- FancyZoom -->
<!-- mobileSidebar -->
<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
<!-- mobileSidebar -->
<!-- topBtn -->
<button onclick="topFunction()" id="topBtn" title="to top" class="fa-angle-double-up"></button>
<script>
//Get the button
var mybutton = document.getElementById("topBtn");

// When the user scrolls down 300px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<!-- topBtn -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(184976, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/184976" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->