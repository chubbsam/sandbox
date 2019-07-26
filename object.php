<?php
# objects inside classes
# functions return objects
class Test1 {
	public $value1a=111;
	public $value1b=111;
	function ftest_1(){
		$obj2 = new Test2;
		$this->value1a = $obj2->value2;
		$obj3 = new Test3;
		$this->value1b = $obj3->value3;
		$hi = $this->value1a + $this->value1b;
		return $hi;
    }
}

class Test2 {
    public $value2=22;
	function ftest_2() { 
		$obj3 = new Test3;
		$obj3->value3 = $this->value2;//被Test1覆寫
		return new Test1();
 	}

}

class Test3 {
    public $value3=33;
    function ftest_3($n3){
		$obj2 = new Test2;
		$obj2->value2 = $n3;//被Test1覆寫
        return new Test2();
    }
}

$obj = new Test3();
echo $obj->ftest_3(100)->ftest_2()->ftest_1().":r1<br>";

?>
結論：<br>
1. 要叫用需先產生物件。<br>
2. 物件要叫用別的類別的成員時，只能叫用public的。<br>
3. 可在類別中產生別的類別的物件。<br>
4. 當叫用的成員方法是回傳物件時，可以連串叫用。<br>
5. 會依照叫用的次序作用，晚叫用的會覆寫早叫用的。
