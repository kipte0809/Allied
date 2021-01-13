<?php

namespace app\Providers;

use App\GameDefine\Game\RoyalSword;
use App\GameDefine\Game\WestwardJourney;
use App\GameDefine\GameType;

class GameApiProvider 
{
    
    private $_royalSword;
    private $_westwardJourney;

    function __construct(RoyalSword $royalSword , WestwardJourney $westwardJourney)
    {
        $this->_royalSword = $royalSword;
        $this->_westwardJourney = $westwardJourney;
    }

    function GetGameApi($gameId)
    {
        switch ($gameId) {
            case GameType::WestwardJourney:
                return $this->_westwardJourney;
            case GameType::RoyalSword:
                return $this->_royalSword;
        }
    }




}



?>