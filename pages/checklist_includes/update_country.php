<?php
error_reporting(E_ALL);


$json = json_encode(["a" => "Teja", "b" => "good"]);

var_dump($json); die();

/*

$json = '{"statusCode" : "OK", "statusMessage" : "", "ipAddress" : "174.127.133.36", "countryCode" : "US", "countryName" : "United States", "regionName" : "Washington", "cityName" : "Bellevue", "zipCode" : "98004", "latitude" : "47.6156", "longitude" : "-122.211", "timeZone" : "-07:00"}';

$jsonData = stripslashes(html_entity_decode($json));

$k=json_decode($jsonData,true);

print_r($k);
die();
//var_dump(json_decode($json));
//var_dump(json_decode($json, true));

include "dbconfig.php";
//var_dump($db);
$variable_to_echo = "";
$squery = "SELECT `ip_address` FROM `checklist_count` WHERE `geo_info_status` = 0 GROUP BY `ip_address`";
$select_query = $db->prepare($squery);
$select_query->execute();

if($select_query->rowCount() > 0){

	$select_query_result = $select_query->fetchAll();
	foreach($select_query_result as $select_query_row){    
		$present_ip = $select_query_row['ip_address'];		
		$variable_to_echo .= "processed ip = ".$present_ip."\n";
		$geoinfo = "http://api.ipinfodb.com/v3/ip-city/?key=13ebc6d8740ab89e93e615530a59dd0f22df559274089129135f83188578f84d&ip=$present_ip&format=json";

		$ch_geoinfo = curl_init($geoinfo); 	
		curl_setopt($ch_geoinfo, CURLOPT_HEADER, 0);         	
		curl_setopt($ch_geoinfo, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch_geoinfo, CURLOPT_MAXREDIRS, 10);
		curl_setopt($ch_geoinfo, CURLOPT_AUTOREFERER, true);
		curl_setopt($ch_geoinfo, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch_geoinfo,CURLOPT_CONNECTTIMEOUT,60);
		curl_setopt($ch_geoinfo, CURLOPT_FAILONERROR, 1);

		$execute_geoinfo = curl_exec($ch_geoinfo);
		curl_close($ch_geoinfo);
		var_dump($execute_geoinfo);
		$json_geoinfo = str_replace('\\', '\\\\', $execute_geoinfo);
		var_dump(json_decode($json_geoinfo, true));
		die();
		var_dump($execute_geoinfo);
		if(!curl_errno($ch_geoinfo)){
echo "coming if";	
//var_dump($json_geoinfo);
//echo "^^^^^^^^^^^^^^";		
			$json_geoinfo = str_replace('\\', '\\\\', $execute_geoinfo);
			
			//echo "%%%%%%%%%%%%%%%%% 777777777777777";	
			
			$json_decode_geoinfo = json_decode($json_geoinfo);   
			var_dump($json_decode_geoinfo);
			echo "#################";
			$country_name = $json_decode_geoinfo["countryName"];
			$city_name = $json_decode_geoinfo["cityName"];
			$country_code = $json_decode_geoinfo["countryCode"];			
			$region = $json_decode_geoinfo["regionName"];
			$zipCode = $json_decode_geoinfo["zipCode"];
			$latitude = $json_decode_geoinfo["latitude"];
			$longitude = $json_decode_geoinfo["longitude"];
			$timeZone = $json_decode_geoinfo["timeZone"];
			
			$variable_to_echo .= "country :  ".$country_name." -------- city :  ".$city_name."\n";	
echo $variable_to_echo;
			$geo_info_status_var = 1;
			$update_q = "UPDATE `checklist_count` SET `country` = :country, `country_code` = :country_code, `region` = :region, `city` = :city, `zip` = :zip, `latitude` = :latitude, `longitude` = :longitude, `timezone` = :timezone, `geo_info_status` = 1 WHERE `geo_info_status` = 0 AND `ip_address` = :ip_address";
			$update_query = $db->prepare($update_q);
			$update_query->bindParam(":country",$country_name);
			$update_query->bindParam(":country_code",$country_code);
			$update_query->bindParam(":region",$region);
			$update_query->bindParam(":city",$city_name);
			$update_query->bindParam(":zip",$zipCode);
			$update_query->bindParam(":latitude",$latitude);
			$update_query->bindParam(":longitude",$longitude);
			$update_query->bindParam(":timezone",$timeZone);
			$update_query->bindParam(":ip_address",$present_ip);
			
			
			try{ 
				$update_query->execute();
				var_dump($db->erroeInfo());
			}
			catch(PDOException $e){
				//return $e->getMessage();
				var_dump($e->getMessage());
			}
			echo "------s";
		}else{
				echo "coming else";
		}
		echo "end sahadksa ------s";		
	}
}
echo "********************";
//echo $variable_to_echo;
?>

8*/