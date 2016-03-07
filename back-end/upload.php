<?php
class upload{
             public $info ; 
             public $name ;
             public $filename ;
             private $type_arr = array('image/jpeg'=>0,
             	                             ) ;

	function upload(){
		if ($_FILES['file']['type'] == $this->type_arr[0]){
			if($_FILES['file']['error'] > 0){
				$info = 'Error : '.$_FILES['file']['error'] ;
			}
			else{
				$info = null ;
			}

			momove_uploaded_file($_FILES['file']['tmp_name'],
      'upload/' . $_FILES['file']['name']);
		}
	}
}
?>