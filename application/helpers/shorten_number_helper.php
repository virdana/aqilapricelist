<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists("shorten_number")) {
	function shorten_number($n) 
	{
		if ($n <= 999) {
			$n_format = $n;
		}
		else if ($n > 999 && $n < 999999) {
		    // Anything less than a million
		    // $n_format = floor($n / 1000) . 'K';
		    $n_format = $n / 1000 . 'K';
		} else if ($n < 999999) {
		    // Anything less than a billion
		    // $n_format = floor($n / 1000000) . 'M';
		    $n_format = floor($n / 1000000) . 'M';
		}
		echo $n_format;
	}
}


/* End of file shorten_number_helper.php */
/* Location: ./application/helpers/shorten_number_helper.php */
