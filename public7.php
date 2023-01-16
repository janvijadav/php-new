<?php
	class a
	{
		public $a = "Hello!";
		public function test1()
		{
			echo $this -> a;
			echo "<br>";
		}
	}
	class b extends a
	{
		public $b = "Student";
		public function test2()
		{
			echo $this -> b;
			echo "<br>";
		}
	}
	class c extends b
	{
		public $c = "How are you ? ";
		public function disp()
		{
			echo $this -> c;
			echo "<br>";
		}
	}
	$obj = new c;
	$obj -> test1();
	$obj -> test2();
	$obj -> disp();
?>