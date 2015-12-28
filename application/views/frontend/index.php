<?php
	$system_name = $this->db->get_where('general_settings',array('general_settings_id'=>'1'))->row()->system_name;
	include 'header.php';
	include $page_name.'.php';
	include 'footer.php';
?>