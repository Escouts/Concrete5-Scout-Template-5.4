<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

	<div id="contain" class="full">
		
		<div id="main" class="no-sidebar">	
			<?php  
			$a = new Area('Main');
			$a->display($c);
			?>
		</div>	
		
	</div>

<?php   $this->inc('elements/footer.php'); ?>