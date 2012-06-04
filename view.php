<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

	<div id="contain" class="full">
		
		<div id="main" class="no-sidebar">	
			<?php  

			print $innerContent;
			
			?>
		</div>	
		
	</div>

<?php   $this->inc('elements/footer.php'); ?>