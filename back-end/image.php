<?php
class pic{
	public $name ;
	public $imgbig ;
	public $width = 80;
	public $height = 80;

	function picshort(){
		$imgbig = './pic/'.$name.'.jpeg' ;
		$img = getimagesize($imgbig) ;
		switch($img[2]){
			case 2:
			$im = imagecreatefromjpeg($imgbig) ;
			break;

			default:
			$name = '0' ;
			break;
		}
		if($img[0] >= $img[1]){
			$img[1] = $img[0] ;
		}
		else{
			$img[0] = $img[1] ;
		}

                          $tmp = imagecreatetruecolor($this->width, $this->height) ;
                          imagecopyresampled($tmp, $im, 0, 0, 0, 0, $this->width, $this->height, $img[0], $img[1]);
                          imagejpeg($tmp,$imgsmall) ;
                          
	}
}
?>