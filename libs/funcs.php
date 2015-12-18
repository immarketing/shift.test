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

function rereadProxies (){
    $defaultProxies = array (
        null,
        array(CURLPROXY_SOCKS5,1080,'127.0.0.1'),
        array(CURLPROXY_SOCKS5,10200,'77.105.194.125'),
        array(CURLPROXY_SOCKS5,60088,'188.165.203.182'),
        array(CURLPROXY_SOCKS5,60088,'188.165.194.129'),
        array(CURLPROXY_SOCKS5,55788,'94.137.50.114'),
        array(CURLPROXY_SOCKS5,10200,'24.192.116.105'),
        array(CURLPROXY_SOCKS5,60088,'167.114.156.160'),
        array(CURLPROXY_SOCKS5,3130,'31.184.242.114'),
        array(CURLPROXY_SOCKS5,10200,'137.118.141.50')
    );
    $dbProxies = array ();
    try {
        $dbc = connectDB();

        $rst = $dbc->query('select HOSTNAME, PORT, PHPPROXYTYPE from proxies');
        if ($rst) {
            while ($row = $rst->fetch_assoc()) {
                $dbp = array($row['PHPPROXYTYPE'],$row['PORT'],$row['HOSTNAME']);
                $dbProxies[]= &$dbp;
                //echo " id = " . $row['id'] . "\n";
            }
            $rst->close();
        }

        $dbc ->close();

    } catch (Exception $e) {

    }
    return array_merge ($defaultProxies,$dbProxies);
}


/**
 * @return resource
 */
function create_curl() {
    //http://hideme.ru/proxy-list/?type=5
    //http://50na50.net/ru/proxy/socks5list
    //http://sockslist.net/check

    static $GlobalCURLProxies = array ();
    static $GlobalCURLProxiesCurrentIndex = 0;

    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_COOKIESESSION, true );
    curl_setopt ( $ch, CURLOPT_HEADER, true );
    curl_setopt ( $ch, CURLINFO_HEADER_OUT, true );
    curl_setopt ( $ch, CURLOPT_HTTPGET, true );
    curl_setopt ( $ch, CURLOPT_VERBOSE, true );

    if (($GlobalCURLProxiesCurrentIndex == 0) || (count($GlobalCURLProxies)==0)){
        $GlobalCURLProxies = rereadProxies();
    }

    if ($GlobalCURLProxies[$GlobalCURLProxiesCurrentIndex]) {
        $prx = $GlobalCURLProxies[$GlobalCURLProxiesCurrentIndex];
        curl_setopt ( $ch, CURLOPT_PROXYTYPE, $prx[0] );
        curl_setopt ( $ch, CURLOPT_PROXYPORT, $prx[1] );
        curl_setopt ( $ch, CURLOPT_PROXY, $prx[2] );
        timeStampedEcho('Using ['.$GlobalCURLProxiesCurrentIndex.'] proxy');
    }
    $GlobalCURLProxiesCurrentIndex = ($GlobalCURLProxiesCurrentIndex+1)%count($GlobalCURLProxies);

    //curl_setopt ( $ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5 );
    //curl_setopt ( $ch, CURLOPT_PROXYPORT, 9150 );
    //curl_setopt ( $ch, CURLOPT_PROXYPORT, 1080 );
    //curl_setopt ( $ch, CURLOPT_PROXY, '127.0.0.1' );

    //$fperr = @fopen ( '.\\datas\\err.html', "w" );
    //curl_setopt ( $ch, CURLOPT_STDERR,  $fperr);
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
            curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );

            //curl_setopt ( $ch, CURLOPT_HEADER, 0 );

            $rst = curl_exec ( $ch );

            // preg_match_all

            $fndRst = preg_match_all ('(/epz.*common.*[0-9]{10,14})',$rst,$fnd);
            fclose ( $fpout );
            return true;
        }
    } catch ( Exception $e ) {
        throw $e;
    }
    return false;

}
