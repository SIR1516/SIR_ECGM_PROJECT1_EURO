<?php
class Key {
	public $numbers = array();
	public $stars = array();
}


class keyGenerator {
	public $key;
	
	public function __construct() {
		$this->key = new Key();
		
		$allnumbers = array();
		for($i=0;$i<50;$i++) {
			$allnumbers[$i] =  $i+1;
		}
		
		for($i=0; $i<5; $i++) {
			$rindex = rand(0,count($allnumbers)-1);
			$number = array_splice($allnumbers,$rindex,1);
			$this->key->numbers[] = $number[0];
		}
		
		sort($this->key->numbers);
		
		
		$allstars = array();
		for($i=0;$i<11;$i++) {
			$allstars[$i] =  $i+1;
		}
		
		for($i=0; $i<2; $i++) {
			$rindex = rand(0,count($allstars)-1);
			$star = array_splice($allstars,$rindex,1);
			$this->key->stars[] = $star[0];
		}
		sort($this->key->stars, SORT_NUMERIC);
		
		//var_dump($this->key);
		
	}
	
	public function toJSON()
	{
		return json_encode($this->key);
		
	}
	
}

$a = new keyGenerator();
echo $a->toJSON();

//echo '{"numbers":[1,2,3,4,50],"stars":[1,11]}';


?>