//inheritanc....
<?php
	class a
	{
		public function test()
		{
			echo "This is test method..";
			echo "<br>";
		}
	}
	class b extends a
	{
		public function beta()
		{
			echo "Hello.....";
		}
	}
	$obj = new b;
	$obj -> test();
	$obj -> beta();
?>