<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		tempate.php
* @Package:		GetSimple
* @Action:		FoliSimple theme for GetSimple CMS
*
*****************************************************/

# Include the header template
include('header.inc.php'); 
?>
		<!-- page content -->
		<article>
				
				<!-- title and content -->
				<h1>
					<!-- checks page title and hides if title is Home  -->
				<?php 
				$pagetitle = return_page_title();
				if($pagetitle !== "Home") {
				echo $pagetitle;
				}
				 ?></h1>
				<?php get_page_content(); ?>
								
		</article>

<!-- include the footer template -->
<?php include('footer.inc.php'); ?>