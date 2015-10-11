<?php
/**
 * Created by PhpStorm.
 * User: Папа
 * Date: 11.10.2015
 * Time: 21:01
 */

function timeStampedEcho($outSt) {
    $t = date ( 'Ymd H:i:s' );
    echo "[$t]\t$outSt";
}

