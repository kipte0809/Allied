<?php

namespace app\Providers;

use app\GameDefine\GameType;
use \Firebase\JWT\JWT;


class JwtServiceProvider
{

  private $key = "d6d5524e-483c-11eb-b378-0242ac130002";

  function __construct()
  {
    
  }

  public function GetToken(int $memberId,int $gameType):string
  {
      $payload = array(
          "iss" => "platform",
          "aud" => "gameServer",
          "iat" => time(),
          "memberId"=>$memberId,
          "gameType"=> $gameType
      );
      $jwt = JWT::encode($payload, $this->key);
      return $jwt;
  }


  public function VerificationToken(string $token)
  {
    $decoded = JWT::decode($token ,$this->key, array('HS256'));
    return $decoded;
  }




}


?>