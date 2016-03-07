<?php
//$username = $_POST['username'];
//$password = $_POST['password'];
//$password = '233';
//$password = sha1(crypt(md5($password)));
//echo $password."<br/>".time();
//--------------------------------------------------
class encryption{
	public $password;
	private $salt;
	function encrypt1(){
		$this->password = sha1(crypt(md5($this->password)));
		//echo $this->password; 
	}
}
$password = '233';
$p = new encryption;
$p->encrypt1();
$password = $p->password;
echo "<br/>OO:".$password;
?>