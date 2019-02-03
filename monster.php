<?php

/**
 * Classe Monster
 * Permet de créer un monstre
 */
class Monster 
{		
	public $name;
	public $age;
	public $weight;
	public $bio;
		
	function __construct(){
	}
	function func_get_name(){
		return $this->name;
	}
	function func_set_name($name){
		$this->name=$name; 
	}
	function func_set_age($age){
		$this->age=$age; 
	}
	function func_get_age(){
		return $this->age;
	}
	function func_set_weight($weight){
		$this->weight=$weight; 
	}
	function func_get_weight(){
		return $this->weight;
	}
	function func_set_bio($bio){
		$this->bio=$bio; 
	}
	function func_get_bio(){
		return $this->bio;
	}
}
?>
	