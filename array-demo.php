<?php
    // arrays in PHP
    

    //indexed array
    $array1 = array('a','b','c','d');
    echo "takes string, but won't work with array </br>";
    print_r($array1);

    $array2[] = 'aa';
    $array2[] = 'bb';
    $array2[] = 'cc';
	$array2[1] = 'zzzz';
	$array2[9] = 'skip';
	print_r($array2);
	echo "<br/>";
	
	//associative array
	$array3 = array('k1' => 'v1', 'k2' => 'v2', 'k3' => 'v3');
	print_r($array3);
    echo "<br/>";

    $something = 'cat:dog:bird';
    list($a, $b, $c) = explode(":", $something);
	echo "my name is $a and $b and $c <br/>";
	
	$number = [1,2,3];
	$letter = ['a', 'b', 'c'];
	$combined = array_combine($number, $letter);
	print_r($combined[1]);
	
	$merged = array_merge($letter, $number);
	print_r($merged);
	
	$intersect = array_intersect($letter, $letter);
	
	//loops
	$array1 = ['a' => 'aaa', 'b' => 'bbb', 'c' => 'ccc', 'd' => 'ddd'];
	foreach ($array1 as $index) {
		echo $index ."<br/>;
	}
	
?>