<?php
class foo {
	function __construct(){
		$foo = @ new SoapClient('httpx://');
	}
	function __destruct(){
		echo 'I never get executed.' . "\n";
	}
}
class bar {
	function __destruct(){
		echo 'I don\'t get executed either.' . "\n";
	}
}
try {
	$bar = new bar();
	$foo = new foo();
} catch (Exception $e){
	echo $e->getMessage() . "\n";
}
echo "ok\n";
?>