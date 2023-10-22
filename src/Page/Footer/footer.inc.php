</div>
<footer class="page-footer">
	<div class="container white-text">
		<p>
			Content &copy;2016-
			<?php echo date("Y"); ?> School District Five of Lexington and Richland Counties, all rights reserved.
		</p>
		<p>
			Website designed by <a href="https://ncovercash.dev/">Noah Overcash</a>
		</p>
		<br>
	</div>
</footer>
</body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script src="https://googletagmanager.com/gtag/js?id=UA-82887557-1" async defer></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag() { dataLayer.push(arguments); }
	gtag('js', new Date());
	gtag('config', 'UA-82887557-1');

	var vidfix = function () {
		for (var i = 0; i < $("video").length; i++) {
			$("video")[i].play();
			$("video")[i].volume = 0;
		}
	}
	setTimeout(vidfix, 1000);
</script>

</html>
