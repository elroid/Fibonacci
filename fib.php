<?php
$n = $_GET['n'];

function fib($n){
	if($n <= 1)
		return 1;
	else
	{
		return fib($n - 1) + fib($n - 2);
	}
}

print(""+fib($n));
?>

