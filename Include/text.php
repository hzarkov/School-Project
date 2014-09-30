<?php
	function get_current_language_words($eng_file,$file){
		$words = file_get_contents($file);
		$end_words = file_get_contents($eng_file);
		
		$words = explode("\r\n",$words);
		$end_words = explode("\r\n",$end_words);
		$words = array_combine($end_words,$words);
		$words = array_filter($words,function($word){
			return preg_match('/^\/\//',$word) == 0;
		});
		return $words;
	}
?>