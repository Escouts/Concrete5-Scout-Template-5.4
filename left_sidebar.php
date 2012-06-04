<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

	<div id="contain" class="full">
		
		<div id="sidebar" class="left">
			<?php  
			$as = new Area('Sidebar');
			$as->display($c);
			?>		
		</div>
		
		<div id="main" class="right">	
			<?php  
			$a = new Area('Main');
			$a->display($c);
			?>
		</div>	
		
	</div>

<?php   $this->inc('elements/footer.php'); ?>