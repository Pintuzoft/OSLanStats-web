<?php

/*
    Class User
    This class is used to create a user object.
*/
class User {
    private $steamid;
    private $name;
    private $points;

    public function __construct($steamid, $name, $points) {
        $this->steamid = $steamid;
        $this->name = $name;
        $this->points = $points;
    }

    public function getSteamid() {
        return $this->steamid;
    }

    public function getName() {
        return $this->name;
    }

    public function getPoints() {
        return $this->points;
    }
    
    public function matchSteamID ( $in_steamID ) {
        if ( strcmp ( $this->steamid, $in_steamID ) == 0 ) {
            return true;
        } else {
            return false;
        }
    }
}
?>