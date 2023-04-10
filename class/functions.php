<?php
include_once 'mysql.php';
include_once 'arraylist.php';

function getEventList ( ) {
    global $mysql;
    $eList = new ArrayList ( );
    $query = "SELECT stamp,attacker,attackerid,victim,victimid,points,type FROM event ORDER BY stamp DESC";
    $stmt = $mysql->prepare ( $query ) or die ( "Error: " . $mysql->getError ( ) );
    $stmt->execute ( ) or die ( "Error: " . $mysql->getError ( ) );
    $stmt->store_result ( );
    $stmt->bind_result ( $stamp, $attacker, $attackerid, $victim, $victimid, $points, $type ) or die ( "Error: " . $mysql->getError ( ) );
    while ( $stmt->fetch ( ) ) {
        $eList->add ( new Event ( $stamp, $attacker, $attackerid, $victim, $victimid, $points, $type ) );
    }
    return $eList;
}

function getUserListSorted ( ) {
    global $mysql;
    $uList = new ArrayList ( );
    $query = "SELECT steamid,name,points FROM userstats ORDER BY points DESC";
    $stmt = $mysql->prepare ( $query ) or die ( "Error: " . $mysql->getError ( ) );
    $stmt->execute ( ) or die ( "Error: " . $mysql->getError ( ) );
    $stmt->store_result ( );
    $stmt->bind_result ( $steamid, $name, $points ) or die ( "Error: " . $mysql->getError ( ) );
    while ( $stmt->fetch ( ) ) {
        $uList->add ( new User ( $steamid, $name, $points ) );
    }
    return $uList;
}

?>