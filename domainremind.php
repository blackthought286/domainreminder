<?php

	/*
	*Plugin Name: Domain Remind
	*Plugin URI: 
	*Description: Plugin will remind you of the date to renew your domain name
	*Version: 0.1
	*Author: Everett Bryant
	*Author URI: 
	*/
	
	setDateOfExpiration();
	
	function setDateOfExpiration($day, $month, $year){
		
		$hello = "This is from the option tags";
		
		add_option('hello', $hello);
	}
	
	function createAdministrationPanels(){
		
	}
	
?>