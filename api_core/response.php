<?php

class Response {
  public static function json($status = 200, $message = 'success', $data = null) {

    header("Content-Type: application/json");

    if(!API_IS_ACTIVE) {
      return json_encode([
        "status"=> 400,
        "message"=> 'Api is not running',
        "api_version" => API_VERSION,
        "time_response" => time(),
        "dateTIme_response" => date("Y-m-d H:i:s"),
        "data"=> null
      ], JSON_PRETTY_PRINT);
    }

    return json_encode([
      "status"=> $status,
      "message"=> $message,
      "api_version" => API_VERSION,
      "time_response" => time(),
      "dateTIme_response" => date("Y-m-d H:i:s"),
      "data"=> $data
    ], JSON_PRETTY_PRINT);
  }
}