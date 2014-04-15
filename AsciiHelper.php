<?php
App::uses('HttpSocket', 'Network/Http');

class AsciiHelper extends AppHelper {

	const url = 'http://artii.herokuapp.com/';
	const default_font = 'cosmic';

	public $helpers = array('Html');

	private function fetch($url){
		$HttpSocket = new HttpSocket();
		$response = $HttpSocket->get($url);
		return $response;
	}

	public function make($string,$font = null){
		$string = urlencode($string);
		if($font){
			$text = self::fetch(self::url.'make?text='.$string.'&font='.$font);
		} else {
			$text =  self::fetch(self::url.'make?text='.$string.'&font='.self::default_font);
		}
		return '<pre>'.htmlentities($text).'</pre>';
	}

	public function fonts(){
		return self::fetch(self::url.'fonts_list');
	}

	public function preview_all($string){
		$fonts = explode("\n", self::fonts());
		foreach ($fonts as $font) {
			echo $font . '<br />';
			echo self::make($string,$font) . '<br /><br />';
		}
	}
}