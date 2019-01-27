<?php
	class Monster {
		
		public $name;
		public $strength;
		public $life;
		public $type;
		
		function __construct(){
			$this->type = 'pink';
			
		}
		function func_get_name(){
			return $this->name;
		}
		function func_set_name($name){
			$this->name=$name; 
		}
		function func_set_strength($strength){
			$this->strength=$strength; 
		}
		function func_get_strength(){
			return $this->strength;
		}
		function func_set_life($life){
			$this->life=$life; 
		}
		function func_get_life(){
			return $this->life;
		}
		function func_set_type($type){
			$this->type=$type; 
		}
		function func_get_type(){
			return $this->type;
		}
	}
	/*
	$monster1 = new Monster();
	$monster2 = new Monster();
	$monster3 = new Monster();
	$monster4 = new Monster();

	$monster1->name = "Bodoi";
	$monster1->lastName= "Bodoi";
	$monster2= new Monster();
	$monster2->age = 23;
	$monster2->color = 'blue';
	var_dump($monster1, $monster2);
	*/
	
?>
	