<?php
/**
 * Created by PhpStorm.
 * User: ����
 * Date: 11.10.2015
 * Time: 21:01
 */

function timeStampedEcho($outSt) {
    $t = date ( 'Ymd H:i:s' );
    echo "[$t]\t$outSt";
}

function loadStartPage($fromURL, $toPage, $ch) {
    //
    try {
        $url = $fromURL;
        $fpout = @fopen ( $toPage, "w" );
        if ($fpout) {
            //$ch = curl_init ();
            curl_setopt ( $ch, CURLOPT_URL, $url );
            curl_setopt ( $ch, CURLOPT_FILE, $fpout );
            //curl_setopt ( $ch, CURLOPT_HEADER, 0 );

            curl_exec ( $ch );
            fclose ( $fpout );
            return true;
        }
    } catch ( Exception $e ) {
        throw $e;
    }
    return false;

}
