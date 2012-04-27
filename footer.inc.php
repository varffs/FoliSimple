<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		footer.inc.php
* @Package:		GetSimple
* @Action:		FoliSimple theme for GetSimple CMS
*
*****************************************************/
?>

	<!-- site footer -->
	<footer class="clearfix" >
		
		<?php get_footer(); ?>

	 	<div class="wrapper">
	 		 <!-- This prints a copywrite statement for the current year with the value of the Site Name as the copywrite holder -->	
			Copyright <?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a>
		</div>
	</footer>

</div>
</body>
</html>