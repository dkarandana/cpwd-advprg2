
<h2>http://php.net/manual/en/function.array-column.php</h2>
<?php

	$data = array(
	    array(
	        'id' => 2135,
	        'first_name' => 'John',
	        'last_name' => 'Doe',
	    ),
	    array(
	        'id' => 3245,
	        'first_name' => 'Sally',
	        'last_name' => 'Smith',
	    ),
	    array(
	        'id' => 5342,
	        'first_name' => 'Jane',
	        'last_name' => 'Jones',
	    ),
	    array(
	        'id' => 5623,
	        'first_name' => 'Peter',
	        'last_name' => 'Doe',
	    )
	);

echo "<pre>";

	//print_r( $data );


	$map_func = function( $values ){

		if( array_key_exists("first_name", $values )){
			return $values["first_name"];
		}
	};


	$alt = array_map( 
		$map_func
	, $data );

	print_r( array_filter( $alt, function( $value, $key  ){ 

		return $value;

	}, ARRAY_FILTER_USE_BOTH ) );


/* Alternative solution for array column */
/*
	$func = function($arr) {

		if(array_key_exists('first_name', $arr)){
			return $arr['first_name'];
		}
	    
	};

	print_r( array_map($func, $data ) );*/






















?>