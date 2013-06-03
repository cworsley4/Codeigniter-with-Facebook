	<?php include_once('template/header.php') ?>
	<header>
		<!--
			<nav>
				<ul>
					<li></li>
				</ul>
			</nav>
		-->
		</header>
		
		<section>
		
			<?php
				echo $this->session->userdata('name') . " &mdash; <a href='" . $this->Facebook_model->getLogoutUrl() . "'>Logout</a>";
			?>
			
		</section>
	<?php $this->load->view('template/header', $fb_obj) ?>