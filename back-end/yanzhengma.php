<?php
class code{
	public $key;
	public $image;
	function makingCode(){
        $codelen = 5 ;
        $image_size = [
             'w' => 100,
             'h' => 25
        ];//定义验证码图片大小
        $x = array('0' => rand(10,21),
                   '1' => rand(26,38), 
                   '2' => rand(42,53),
                   '3' => rand(58,69),
                   '4' => rand(74,90));
        //定义验证码文字X轴

        $y = array('0' => rand(3,6),
	               '1' => rand(3,6),
	               '2' => rand(3,6),
	               '3' => rand(3,6),
	               '4' => rand(3,6));
        //定义验证码文字Y轴

        $str = "0123456789abcdefghigklmnopqrstuvwxyz0123456789ABCDEFGHIGKLMNOPQRSTUVWXYZ0123456789";
        $this->key = "";//定义key的默认值
        for( $i=0; $i<$codelen; $i++){
	        $code[$i] = $str[rand(0,72)];
	        $this->key = $this->key.$code[$i];
        }
        //随机产生验证码字符串
        $this->key = md5($this->key);
        //产生key并加密

        $noise = 100; 
        //定义杂点的数量

        $line = 4;
        //定义干扰线的数量

        $this->image = imagecreate($image_size['w'],$image_size['h']);
        //产生验证码图片的大小

        $color_bg = imagecolorallocate($this->image,240,240,240);
        //验证码背景色

        for( $i=0; $i<$codelen; $i++){
	        $color_text[$i] = imagecolorallocate($this->image,rand(40,100),rand(40,100),rand(40,100));
        }
        //随机产生文字的颜色
        imagefill($this->image, 0, 0, $color_bg);
        //产生背景
        for( $i=0; $i<$codelen; $i++){
	        imagestring($this->image, 5, $x[$i], $y[$i], $code[$i], $color_text[$i]);
        }//产生随机颜色文字

        for( $i=0; $i<$noise; $i++){
	        $noise_color = imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));
	        imagesetpixel($this->image, rand(0,100), rand(0,25), $noise_color);
        }
        //产生杂点

        for( $i=0; $i<$line; $i++){
            $line_color= imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));
            imageline($this->image, rand(0,100), rand(0,25), rand(0,100), rand(0,25), $line_color);
        }
        //产生干扰线
	}
}

$p = new code;
$p->makingCode();
$image = $p->image;
$key = $p->key;
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
?>