<?php require_once("includes/header.php"); ?>


<!-- display error -->
<?php
$CI =& get_instance();
if($CI->session->flashdata('success')){
	$class="alert-success";
	$message=$CI->session->flashdata('success');
}
else if($CI->session->flashdata('error')){
	$class="alert-danger";
	$message=$CI->session->flashdata('error');
}
?>
<!-- display error ends -->



<?php if($subview=='home'){ ?>
<?php $this->load->view("front/templates/$subview");?>
<?php }else{ ?>
<section class="main-info" id="main_layout">
	<div class="container">
		<div class="row-fluid">
			<?php 
			template_validation();
			if(isset($class) && isset($message)){ 
				flash_msg($class,$message);
			} ?>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<ul class="nav nav-bar nav-stacked">
							<a href="<?php echo base_url('frontend/onetoone')?>"><li>1-1 student and mentor</li></a>
							<a href="<?php echo base_url('frontend/onetooneuni')?>"><li>1-1 Unidirectional
								<br>
								Product-Shipping
							</li></a>
							<a href="<?php echo base_url('frontend/onetoonebi')?>"><li>1-1 bi : cart-customer</li></a>
							<a href="<?php echo base_url('frontend/onetoonebicustomers')?>"><li>1-1 bi : customer-cart</li></a>

						</ul>			
					</div>
					<div class="col-md-8">
						<?php
						$this->load->view("$subview");
						?>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php include("includes/footer.php") ?>
		</div>
	</div>
</section>
