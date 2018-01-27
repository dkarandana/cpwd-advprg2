<?php
	require 'mobileData.php';

	$errors = array();
	$dataStream = array();

	$mobilekey = trim( filter_input(INPUT_GET, 'mobilekey', FILTER_SANITIZE_SPECIAL_CHARS) );


	if( $mobilekey ){


		if( array_key_exists( $mobilekey, $mobilePhones ) ){

			$dataStream[ $mobilekey ] = $mobilePhones[$mobilekey];

		}else{
			$errors[] = array(
				"code"=>"1400",
				"error"=>"unable to find given value `". $mobilekey . "` in the list"
			);
		}
		



	}else{
		$errors[] = array(
			"code"=>"1400",
			"error"=>" `mobilekey` not found "
		);
	}
	

echo "<pre>";


	
	if( !empty( $errors )){
		print_r( $errors );
	}else{
		print_r( $dataStream );
	}

	
	/*print_r( $mobilePhones );
	print_r( $vendors );*/


?>