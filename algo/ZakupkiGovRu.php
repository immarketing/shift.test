<?php
/**
 * Created by PhpStorm.
 * User: ����
 * Date: 27.10.2015
 * Time: 21:52
 */

//namespace algo;

/**
 * http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?placeOfSearch=FZ_44&placeOfSearch=FZ_223&orderPriceFrom=&orderPriceTo=&orderPriceCurrencyId=-1&deliveryAddress=&participantName=&orderPublishDateFrom=&orderPublishDateTo=&orderUpdateDateFrom=&orderUpdateDateTo=&customer.title=&customer.code=&customer.fz94id=&customer.fz223id=&customer.inn=&agency.title=&agency.code=&agency.fz94id=&agency.fz223id=&agency.inn=&orderStages=AF&orderStages=CA&searchTextInAttachedFile=&applSubmissionCloseDateFrom=&applSubmissionCloseDateTo=&searchString=&morphology=false&strictEqual=false
 *
 * http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=1&placeOfSearch=FZ_44%2CFZ_223&searchType=ORDERS&morphology=false&strictEqual=false&orderPriceCurrencyId=-1&okdpWithSubElements=false&orderStages=AF%2CCA&headAgencyWithSubElements=false&smallBusinessSubject=I&rnpData=I&executionRequirement=I&penalSystemAdvantage=I&disabilityOrganizationsAdvantage=I&russianGoodsPreferences=I&orderPriceCurrencyId=-1&okvedWithSubElements=false&jointPurchase=false&byRepresentativeCreated=false&selectedMatchingWordPlace223=NOTICE_AND_DOCS&matchingWordPlace94=NOTIFICATIONS&matchingWordPlace44=NOTIFICATIONS&searchAttachedFile=false&changeParameters=true&showLotsInfo=false&extendedAttributeSearchCriteria.searchByAttributes=NOTIFICATION&law44.okpd.withSubElements=false
 * http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_20&pageNo=1&placeOfSearch=FZ_44%2CFZ_223&searchType=ORDERS&morphology=false&strictEqual=false&orderPriceCurrencyId=-1&okdpWithSubElements=false&orderStages=AF%2CCA&headAgencyWithSubElements=false&smallBusinessSubject=I&rnpData=I&executionRequirement=I&penalSystemAdvantage=I&disabilityOrganizationsAdvantage=I&russianGoodsPreferences=I&orderPriceCurrencyId=-1&okvedWithSubElements=false&jointPurchase=false&byRepresentativeCreated=false&selectedMatchingWordPlace223=NOTICE_AND_DOCS&matchingWordPlace94=NOTIFICATIONS&matchingWordPlace44=NOTIFICATIONS&searchAttachedFile=false&changeParameters=true&showLotsInfo=false&extendedAttributeSearchCriteria.searchByAttributes=NOTIFICATION&law44.okpd.withSubElements=false
 */

/**
 *
 * Начало описания тендера descriptTenderTd
 *
 * (/epz.*common.*[0-9]{10,14})
 *
 */

/**
 * Class ZakupkiGovRu
 */
class ZakupkiGovRu
{
    private static $STARTPAGE = 'http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?placeOfSearch=FZ_44&placeOfSearch=FZ_223&orderPriceFrom=&orderPriceTo=&orderPriceCurrencyId=-1&deliveryAddress=&participantName=&orderPublishDateFrom=&orderPublishDateTo=&orderUpdateDateFrom=&orderUpdateDateTo=&customer.title=&customer.code=&customer.fz94id=&customer.fz223id=&customer.inn=&agency.title=&agency.code=&agency.fz94id=&agency.fz223id=&agency.inn=&orderStages=AF&orderStages=CA&searchTextInAttachedFile=&applSubmissionCloseDateFrom=&applSubmissionCloseDateTo=&searchString=&morphology=false&strictEqual=false';
    private $dbConnection = null;
    private $browser = null;
    private $IsSaveToDisk = false;

    public function setIsSaveToDisk($IsSaveToDisk){
        $this->IsSaveToDisk = $IsSaveToDisk;
    }

    public function getIsSaveToDisk (){
        return $this->IsSaveToDisk;
    }

    /**
     *
     */
    public function ZakupkiGovRu($dbc)
    {
        timeStampedEcho("ZakupkiGovRu created\n");
        $this->dbConnection = $dbc;
    }

    private function workOutPage($pageText){
        $rst = $pageText;
        $fndRst = preg_match_all ('(/epz?.*common?.*[0-9]{10,14})',$rst,$fnd);
        //$fndRst = preg_match_all ('(/epz/order/notice/zk44/view/common-info.html.regNumber.[0-9]{10,14})',$rst,$fnd);
        ///epz/order/notice/zk44/view/common-info.html?regNumber=0138100002715000198
        return null;

    }

    /**
     * Провести обработку всех страниц с сайта
     */

    public function  handleAllPages()
    {
        $this->browser = create_curl ();

        $startPageText = $this->loadStartPage();

        $this->workOutPage ($startPageText[0]);

        $url1 = 'http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=';
        $url2 = '&placeOfSearch=FZ_44%2CFZ_223&searchType=ORDERS&morphology=false&strictEqual=false&orderPriceCurrencyId=-1&okdpWithSubElements=false&orderStages=AF%2CCA&headAgencyWithSubElements=false&smallBusinessSubject=I&rnpData=I&executionRequirement=I&penalSystemAdvantage=I&disabilityOrganizationsAdvantage=I&russianGoodsPreferences=I&orderPriceCurrencyId=-1&okvedWithSubElements=false&jointPurchase=false&byRepresentativeCreated=false&selectedMatchingWordPlace223=NOTICE_AND_DOCS&matchingWordPlace94=NOTIFICATIONS&matchingWordPlace44=NOTIFICATIONS&searchAttachedFile=false&changeParameters=true&showLotsInfo=false&extendedAttributeSearchCriteria.searchByAttributes=NOTIFICATION&law44.okpd.withSubElements=false';
        for ($i = 1; $i <= 100; $i++) {
            sleep(5);
            $url = $url1 . $i . $url2;
            timeStampedEcho($url . "\n");
            $pageText = $this->loadPage ($url, '.\\datas\\zakupki.gov\\' . $i . '.html');
        }


        return null;
    }

    protected function loadPage ($fromURL, $toFile){
        //$fromURL = self::$STARTPAGE;
        $ch = $this->browser;

        $url = $fromURL;
        $fpout = null;
        $toPage = $toFile;
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );

        $rst = curl_exec ( $ch );

        if ($this->getIsSaveToDisk()){
            try {
                $fpout = @fopen ( $toPage, "w" );
                if ($fpout) {
                    fwrite($fpout,$rst);
                    fclose ( $fpout );
                }
            } catch ( Exception $e ) {
                throw $e;
            }

        }


        //$fndRst = preg_match_all ('(/epz.*common.*[0-9]{10,14})',$rst,$fnd);
        //$fndRst = preg_match_all ('(/epz.*common.*[0-9]{10,14})',$rst,$fnd);

        $rstTrncated = preg_replace('/\r/', ' ', $rst);
        $rstTrncated = preg_replace('/\n/', ' ', $rstTrncated);

        return array($rst,$rstTrncated);

    }


    /**
     * Функция загружает начальную страницу
     */
    private function loadStartPage()
    {
        return $this->loadPage(self::$STARTPAGE,'.\\datas\\zakupki.gov\\0.html');

   }
}