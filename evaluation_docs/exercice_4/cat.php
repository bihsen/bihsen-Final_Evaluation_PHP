<?php 
class Cat
{
	private $name;
	
	private $age;

	private $color;

	private $sex;

	private $race;
	
	public function __construct($name, $age, $color, $sex, $race)
	{
		$this->name = $name;
		$this->age = $age;
		$this->color = $color;
		$this->sex = $sex;
		$this->race = $race;
	}
	
	private function setName($name){
		if($name > 3 && $name < 20) {
			$this->name = $name;
			return $this;
		} else {
			echo "enter a name between 3 and 20 charachter.";
		}
	}
	
	private function setAge($age){
		if(is_int($age)) {
			$this->age = $age;
			return $this;
		} else {
			echo "insert a member.";
		}
	}
	
	private function setColor($color, $name){
		if($color> 3 && $name < 10) {
			$this->color = $color;
			return $this;
		} else {
			echo "Enter a name between 3 and 10 charactère.";
		}
	}

	private function setSex($sex){
		if($sex == 'male' || $sex == 'female') {
			$this->sex = $sex;
			return $this;
		} else {
			echo "chose between male or female.";
		}
	}
	
	 
	private function setRace($race){
		if($race > 3 && $race < 20) {
			$this->race = $race;
			return $this;
		} else {
			echo "Enter a name between 3 and 10 charactère.";
		}
	}
	
	public function getName(){
		return $this->name;
	}

	public function getAge(){
		return $this->age;
	}
	
	public function getColor(){
		return $this->color;
	}

	public function getSex(){
		return $this->sex;
	}
	
	public function getRace(){
		return $this->race;
	}

	public function getInfos(){
		 $info = array(
			"Cat name :".$this->getName().'.',
			"Cat age : ".$this->getAge().'.',
			"Cat color :".$this->getColor().'.',
			"Cat sex :".$this->getSex().'.',
			"Cat race : ".$this->getRace().'.<br>'
		);
		return $info;
	}
}
?>