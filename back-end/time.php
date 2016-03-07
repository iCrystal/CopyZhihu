<?php
date_default_timezone_set("Asia/Chongqing");
echo date("Y h:i:s")."<br/>";
$my_time = getdate(date('U'));
echo $my_time['year']." ";
echo $my_time['hours'].":";
echo $my_time['minutes'].":";
echo $my_time['seconds'];
echo time();

class mytime{
	public $time_now;
	public $time_before;
	public $a;

	function before(){
        $this->time_now = time();
        $time = $this->time_now - $this->time_before
        if( $time<=604800){
            $this->a['days'] = $this->time % 86400;
            $this->a['hours'] = ($time - ($this->a['day'] * 86400) ) % 3600;
            $this->a['seconds'] =($time - $this->a['days'] * 86400 - $this->a['hours'] * 3600) %60;
        }
	}
}