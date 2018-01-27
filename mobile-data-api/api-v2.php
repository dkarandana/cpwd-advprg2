<?php
	require 'mobileData.php';

	$errors = array();
	$dataStream = array();

	/* To fetch individual Mobile Data */

	$mobilekey = trim( filter_input(INPUT_GET, 'mobilekey', FILTER_SANITIZE_SPECIAL_CHARS) );

	/* Type of request [allmobiles]*/
	$type = trim( filter_input(INPUT_GET, 'type', FILTER_SANITIZE_SPECIAL_CHARS) );
	/* Field of the mobile */
	$field = trim( filter_input(INPUT_GET, 'field', FILTER_SANITIZE_SPECIAL_CHARS) );


	echo "<pre>";
	if( $mobilekey ){

		if( array_key_exists( $mobilekey, $mobilePhones ) ){

			$dataStream[ $mobilekey ] = $mobilePhones[$mobilekey];

		}else{
			$errors[] = array(
				"code"=>"1400",
				"error"=>"unable to find given value `". $mobilekey . "` in the list"
			);
		}

	}elseif( $type && $field ){

		$names = array();

		if( $type == "allmobiles" ){


			$dataStream = array_column($mobilePhones, $field );

			if( !$dataStream ){
				$errors[] = array(
					"code"=>"1400",
					"error"=>"Unkonown field. Please check the 'field' ". $field
				);

			}

		}else{
			$errors[] = array(
				"code"=>"1400",
				"error"=>"unkonown type provided. Please check the 'type' ". $type
			);
		}

	}else{
		$errors[] = array(
			"code"=>"1400",
			"error"=>" `mobilekey` not found "
		);
	}
	

echo "<pre>";

	$returnData = array();

	
	if( !empty( $errors )){
		$returnData["success"]= 'false';
		$returnData["error"] = $errors;
	}else{
		$returnData["success"] = 'true';
		$returnData["data"] = $dataStream;
	}

	print_r( $returnData );

	
	/*print_r( $mobilePhones );
	print_r( $vendors );*/


?>