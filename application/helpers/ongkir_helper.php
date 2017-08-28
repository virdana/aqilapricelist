<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('get_province'))
{
  function get_province()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://pro.rajaongkir.com/api/province",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: a830a1c526c8125248109478556560cc"
      ),
    ));

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
      echo "cURL Error #:" . $error;
    } else {
      $data = json_decode($response, true);
      
      for ($i=0; $i < count($data['rajaongkir']['results']); $i++){
        echo "<option value='".$data['rajaongkir']['results'][$i]['province_id']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";
      }

    }
  }
}

if (!function_exists('get_city'))
{
  function get_city($province){    

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://pro.rajaongkir.com/api/city?province=$province",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: a830a1c526c8125248109478556560cc"
      ),
    ));

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
      echo "cURL Error #:" . $error;
    } else {
      //echo $response;
      $data = json_decode($response, true);
      //echo json_encode($k['rajaongkir']['results']);
      
      for ($j=0; $j < count($data['rajaongkir']['results']); $j++){

        echo "<option value='".$data['rajaongkir']['results'][$j]['city_id']."'>".$data['rajaongkir']['results'][$j]['city_name']." (".$data['rajaongkir']['results'][$j]['type'].")"."</option>";
      }
    }
  }
}

if (!function_exists('get_subdistrict'))
{
  function get_subdistrict($city){    

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://pro.rajaongkir.com/api/subdistrict?city=$city",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: a830a1c526c8125248109478556560cc"
      ),
    ));

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
      echo "cURL Error #:" . $error;
    } else {
      //echo $response;
      $data = json_decode($response, true);
      //echo json_encode($k['rajaongkir']['results']);
      
      for ($j=0; $j < count($data['rajaongkir']['results']); $j++){

        echo "<option value='".$data['rajaongkir']['results'][$j]['subdistrict_id']."'>".$data['rajaongkir']['results'][$j]['subdistrict_name']."</option>";
      }
    }
  }
}

if (!function_exists('get_ongkir'))
{
  function get_ongkir($courier=NULL, $origin=NULL, $origin_type='city', $destination=NULL, $destination_type='subdistrict', $weight=NULL)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://pro.rajaongkir.com/api/cost",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "origin=$origin&originType=$origin_type&destination=$destination&destinationType=$destination_type&weight=$weight&courier=$courier",
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        "key: a830a1c526c8125248109478556560cc"
      ),
    ));

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
      echo "cURL Error #:" . $error;
    } 
    else {
      $data = json_decode($response, true);
      return $data;
    }
  }
}

/* End of file ongkir_helper.php */
/* Location: ./application/helpers/ongkir_helper.php */