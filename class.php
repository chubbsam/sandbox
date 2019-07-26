<?php
class worker {
    public $salary = 1;
	private $position = 'engineer';

	function setPromotion($bonus=0){  //只做事，沒傳回值
        $this->salary = 2 + $bonus;
		$this->position = 'team leader';
    }
	function setBonus(){  //只做事，沒傳回值
        $bonus = 2;
		return $bonus;
    }
    function getPosition(){  //只傳回值
        return $this->position;
    }
}   

$paul = new worker; //new 類別，得物件
echo 'Before setPromotion, salary is'.$paul->salary.'<br>';

$paul->setPromotion();   //用物件，叫方法(成員)，得結果
echo 'After setPromotion, salary is '.$paul->salary.'<br>';
echo 'Use method inside the class to get private member-position, '.$paul->getPosition().'<br>';


?>