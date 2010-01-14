<?php

	/*
	*Plugin Name: Domain Reminder
	*Plugin URI: http://blackthought.posterous.com/domain-reminder-for-wordpress
	*Description: Plugin will remind you of the date to renew your domain name
	*Version: 0.1
	*Author: Everett Bryant
	*Author URI: 
	*/
	
	
	/* 
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA 
	*/
	
	
	add_action('admin_menu','createAdministrationPanels');
	
	setDateOfExpiration();
	
	function setDateOfExpiration(){

		if(isset($_POST['dr_date']) && isset($_POST['dr_month']) && isset($_POST['dr_year'])){
		
			$date = (int) $_POST['dr_date'];
			$month = whiteListMonth($_POST['dr_month']);
			$year = (int) $_POST['dr_year'];
			
			//place data in an array and update the expiration date
			$expiration_date = array($date, $month, $year);
			update_option('date_of_expiration', $expiration_date);
		}
		
	}
	
	/**
	*@method - confirm that it was a month that was listed
	**/
	function whiteListMonth($month){
		$correct_month_format = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		if(in_array($month, $correct_month_format)){
			return $month;
		}
	}
	
	function createAdministrationPanels(){
		add_options_page('Domain Reminder', 'Domain Reminder', 'administrator', 'domainreminder', 'menuForm');
	}
	
	/**
	*@Function menuForm - Creates a form to set the date, time, and year to renew the domain. Also displays that date as well.
	**/
	
	function menuForm(){
	?>
		<div class="wrap">
			<h2>Domain Reminder</h2>
			<p>a simple tool to help remind you of when your domain renewel is coming up</p>
			
			<h4>Remember to renew your Domain name on: </h4>
	<?php 
				$show_date = get_option('date_of_expiration'); 
				echo('<i>'.$show_date[1].' '.$show_date[0].' '.$show_date[2].'</i>');
	?>
		</div>
		<br />
		<br />
		<br />
		
	<?php
	
		echo('<div class="wrap">');
		echo('<p>Enter the expiration date of your domain</p>');
		echo('</div>');
		
	?>

	<div class="wrap">
	<form name="dr_form" method="post" action="">
		<select name="dr_month" id="dr_month">
			<option SELECTED>January</option>
			<option>February</option>
			<option>March</option>
			<option>April</option>
			<option>May</option>
			<option>June</option>
			<option>July</option>
			<option>August</option>
			<option>September</option>
			<option>October</option>
			<option>November</option>
			<option>December</option>
		</select>
		<select name="dr_date" id="dr_date">
			<option SELECTED>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
			<option>31</option>		
		</select>
		<select name="dr_year" id="dr_year">			   
	`		<option>2030</option> 
			<option>2029</option> 
			<option>2028</option> 
			<option>2027</option> 
			<option>2026</option> 
			<option>2025</option> 
			<option>2024</option> 
			<option>2023</option> 
			<option>2022</option> 
			<option>2021</option> 
			<option>2020</option> 
			<option>2019</option> 
			<option>2018</option> 
			<option>2017</option> 
			<option>2016</option> 
			<option>2015</option> 
			<option>2014</option> 
			<option>2013</option> 
			<option>2012</option> 
			<option>2011</option> 
			<option value = "2010" SELECTED>2010</option> 
			<option>2009</option> 
			<option>2008</option> 
			<option>2007</option> 
			<option>2006</option> 
			<option>2005</option> 
			<option>2004</option> 
			<option>2003</option> 
			<option>2002</option> 
			<option>2001</option> 
			<option>2000</option> 
			<option>1999</option> 
			<option>1998</option>  
			<option>1997</option>  
			<option>1996</option>  
			<option>1995</option>  
			<option>1994</option> 
			<option>1993</option>
			<option>1992</option>  
			<option>1991</option>
			<option>1990</option>  
			<option>1989</option>  
			<option>1988</option>  
			<option>1987</option>  
			<option>1986</option>  
			<option>1985</option>  
			<option>1984</option>  
			<option>1983</option>  
			<option>1982</option>  
			<option>1981</option>
			<option>1980</option>  
			<option>1979</option>  
			<option>1978</option>
			<option>1977</option>  
			<option>1976</option>  
			<option>1975</option>  
			<option>1974</option>  
			<option>1973</option> 
			<option>1972</option>
			<option>1971</option>
			<option>1970</option>  
			<option>1969</option>  
			<option>1968</option>
			<option>1967</option>  
			<option>1966</option>  
			<option>1965</option>
			<option>1964</option>
			<option>1963</option>
			<option>1962</option> 
			<option>1961</option>
		</select>
		
		<input type="submit" name="submit" value="Insert Expiration Date" />
	</form>
<?php
		
}
?>