<?php

namespace App\Providers;

use app\GameDefine\GameErrorCode;

class HttpResponseProvide
{
    public function HttpResponse (array $errorCode , $jsonData = null) : string
    {
        if(!empty($jsonData))
        {
            return json_encode(array("errorCode"=>$errorCode['code'],"data"=> $jsonData));
        }
        return json_encode(array("errorCode"=>$errorCode['code'] , "errorMsg" => $errorCode['message']));
    }
}
?>