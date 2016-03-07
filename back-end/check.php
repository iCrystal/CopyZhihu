<?php

//echo $flag;
//----------------------------------------------------
class screenIllChar{
	public $key;
	public $flag;
	function screen(){
		//echo $this->key."<br/>";
        $len = strlen($this->key);//返回字符串长度
        $this->key = str_split($this->key);//拆分字符串
        //$this->flag = 0;//flag默认值为0
        for( $i=0; $i<$len; $i++){
	    //echo $key[$i];
	        $ascii = ord($this->key[$i]);
	        ( ($ascii>=48 && $ascii<=57)||
		        ($ascii>=65 && $ascii<=90)||
		        ($ascii>=97 && $ascii>=122) )?$this->flag = 1:$this->flag = 0;
	        if($this->flag == 0) break;//防止flag被覆盖
	        //echo $ascii." ".$this->key[$i]." ".$this->flag."<br/>";
        }
        //echo $flag."<br/>";
	}
}
$password = '233%99';
$p = new screenIllChar;
$p->key = $password;
$p->screen();
//$flag = $p->flag;
//echo $p->flag;
?>