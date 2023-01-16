<?php
	class a
	{
		public $a = "Hello!";
		public function test()
		{
			echo $this -> a;
			echo "<br>";
		}
	}
	class b extends a
	{
		public $b = "Pgdca";
		public function disp()
		{
			echo $this -> b;
		}
	}
	class c extends b
	{
		
	}
	$obj = new c;
	$obj -> test();
	$obj -> disp();
	
?>