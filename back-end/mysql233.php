<?php
class mysql233{
	public $key;
	public $tablename;
	public $result;
	public $flag ;

	function query($flag){
		$this->flag = $flag;
		switch ($this->flag) {
			case 1:
				$sentence = 'SELECT '.$this->key.' FROM '.$this->tablename;
				break;
			case 2:
			           echo "test case 2<br/>";
			default:
				$sentence = null;
				break;
		}
		//$sentence = 'SELECT '.$this->key.' FROM '.$this->tablename;

                         $pdo = new PDO('mysql:host=localhost;dbname=homework','root','1984');
                         $res = $pdo->prepare($sentence);
                         $res->execute();
                         $this->result= $res->fetchAll();
                         //$sentence = null;
                         //print_r($result);
                         echo 'this is sentence :'.$sentence.'<br/>';
                         echo "---------------------------------------------------------------------------------------------------------<br/>";

	}
}

$p = new mysql233;
$p->key = '*';
$p->tablename = 'user';
//$p->flag = 1;
$p->query(1);
$a = array();
$a = $p->result;
print_r($a);

?>