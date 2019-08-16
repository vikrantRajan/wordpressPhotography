</div> <!--container -->
<footer class="blog-footer">
	<p>
		<a class="backtotop" href="#">Back to top</a>
	</p>
</footer>
<div id="footer">
<?php
             if (is_active_sidebar('sidebar-1')){
             	 dynamic_sidebar('sidebar-1');
             }
             ?>
			 </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<?php wp_footer();?>
</body>
</html>
