<?php
	class test
	{
		public $a = "Hello!";
		public function test()
		{
			echo $this -> a;
		}
	}
	$obj = new test;
	$obj -> test();

?>