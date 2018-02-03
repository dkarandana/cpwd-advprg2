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
	    ),
	    array(
	        'id' => 2135,
	        'first_name' => 'John',
	        'last_name' => 'Cale',
	    )
	);

	echo "<pre>";

	//$index = array_search("John", array_column( $data, "first_name")  );


	//print_r($data[ $index ]);
	$arr = array_keys(array_column( $data, "first_name"), "John", true );
	$matches = count( $arr );

	print_r( "Matches " . $matches );

	if( $matches ){
	 	print_r( $arr );
	}
	 


	//echo gettype($index);

	//$out = ( $index ) ? $data[ $index ] : ["error"=>"User not found."];

	//print_r(  $out );

?>

	