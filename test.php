<?php
require_once('fib.php');
$fibTest = new fibTest();
$fibTest->testFirstFibs();

class fibTest
{
	public function testFirstFibs()
	{
		$expected = array(1,1,2,3,5,8);
		
		for($i=0; $i<count($expected); $i++)
		{
			if(fib($i) == $expected[$i])
			{
				echo "YES\n";
			}
			else
			{
				echo  "NO\n";
			}
		}
	}
}

?>
