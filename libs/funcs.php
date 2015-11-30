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

/**
 * @return resource
 */
function create_curl() {
    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_COOKIESESSION, true );
    curl_setopt ( $ch, CURLOPT_HEADER, true );
    curl_setopt ( $ch, CURLINFO_HEADER_OUT, true );
    curl_setopt ( $ch, CURLOPT_HTTPGET, true );
    curl_setopt ( $ch, CURLOPT_VERBOSE, true );

    //curl_setopt ( $ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5 );
    //curl_setopt ( $ch, CURLOPT_PROXYPORT, 9150 );
    //curl_setopt ( $ch, CURLOPT_PROXYPORT, 9150 );
    //curl_setopt ( $ch, CURLOPT_PROXY, '127.0.0.1' );

    $fperr = @fopen ( '.\\datas\\err.html', "w" );
    curl_setopt ( $ch, CURLOPT_STDERR,  $fperr);
    curl_setopt ( $ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.10240' );

    return $ch;

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
