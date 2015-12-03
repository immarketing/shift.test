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

    public function setIsSaveToDisk($IsSaveToDisk)
    {
        $this->IsSaveToDisk = $IsSaveToDisk;
    }

    public function getIsSaveToDisk()
    {
        return $this->IsSaveToDisk;
    }


    private $IsCollectTenderTd = false;

    public function setIsCollectTenderTd($IsCollectTenderTd)
    {
        $this->IsCollectTenderTd = $IsCollectTenderTd;
    }

    public function getIsCollectTenderTd()
    {
        return $this->IsCollectTenderTd;
    }

    private $IsStoreRequests = false;

    public function setIsStoreRequests($IsStoreRequests)
    {
        $this->IsStoreRequests = $IsStoreRequests;
    }

    public function getIsStoreRequests()
    {
        return $this->IsStoreRequests;
    }

    /**
     *
     */
    public function ZakupkiGovRu($dbc)
    {
        timeStampedEcho("ZakupkiGovRu created\n");
        $this->dbConnection = $dbc;
    }

    /**
     * @param $pageText
     * @param $pageTextCRLFLess
     * @param $reqURL
     */
    private function storeRequest($pageText, $pageTextCRLFLess, $reqURL)
    {
        /* подготавливаемый запрос, первая стадия: подготовка */
        $stmt = null;
        if (!($stmt = $this->dbConnection->prepare("INSERT INTO zakupki_gov_ru_requests	(URL, PAGETEXT, PAGETEXTSRLFLESS)	VALUES (?, ?, ?)"))) {
            timeStampedEcho("Не удалось подготовить запрос: (" . $this->dbConnection->errno . ") " . $this->dbConnection->error);
            return null;
        }
        if (!$stmt->bind_param("sss", $reqURL, $pageText, $pageTextCRLFLess)) {
            echo "Не удалось привязать параметры: (" . $stmt->errno . ") " . $stmt->error;
        }
        if (!($rslt = $stmt->execute())) {
            echo "Не удалось выполнить запрос: (" . $stmt->errno . ") " . $stmt->error;
        }
        $stmt->close();
    }

    /*
     * INSERT INTO zakupki_gov_ru_tendertd
	(TenderDT, TenderDD)
	VALUES ('', '')
     */

    private function storeTendertd($TenderDT,$TenderDD){
        $stmt = null;
        if (!($stmt = $this->dbConnection->prepare("INSERT INTO zakupki_gov_ru_tendertd	(TenderDT, TenderDD)	VALUES (?, ?)"))) {
            timeStampedEcho("Не удалось подготовить запрос: (" . $this->dbConnection->errno . ") " . $this->dbConnection->error);
            return null;
        }
        if (!$stmt->bind_param("ss", $TenderDT,$TenderDD)) {
            echo "Не удалось привязать параметры: (" . $stmt->errno . ") " . $stmt->error;
        }
        if (!($rslt = $stmt->execute())) {
            echo "Не удалось выполнить запрос: (" . $stmt->errno . ") " . $stmt->error;
        }
        $stmt->close();
    }

    /**
     * @param $pageText
     * @return null
     */
    private function workOutPage($pageText, $pageTextCRLFLess, $reqURL)
    {
        $rst = $pageText;
        $fndRst = preg_match_all('(/epz?.*common?.*[0-9]{10,14})', $rst, $fnd);
        // "tenderTd".*?</td>
        //$fndRst = preg_match_all('tenderTd.*?<\/td>', $pageTextCRLFLess, $fnd);

        if ($this->getIsCollectTenderTd()) {
            $fndRst = preg_match_all('/"tenderTd".*?<\/td>/s', $pageText, $matches);
            if ($fndRst) foreach ($matches[0] as $oneString) {
                $tenderTd = array('', '');
                if ($fndRstString = preg_match_all('/dt>(.*?)</', $oneString, $matchesOneString)) {
                    timeStampedEcho($matchesOneString[1][0] . "\t");
                    $tenderTd[0] = $matchesOneString[1][0];
                }
                if ($fndRstString = preg_match_all('/dd>(.*?)</', $oneString, $matchesOneString)) {
                    timeStampedEcho($matchesOneString[1][0] . "\t\n");
                    $tenderTd[1] = $matchesOneString[1][0];
                }
                $this->storeTendertd($tenderTd[0],$tenderTd[1]);
            }
        }

        //$fndRst = preg_match_all ('(/epz/order/notice/zk44/view/common-info.html.regNumber.[0-9]{10,14})',$rst,$fnd);
        ///epz/order/notice/zk44/view/common-info.html?regNumber=0138100002715000198

        if ($this->getIsStoreRequests()) {
            $this->storeRequest($pageText, $pageTextCRLFLess, $reqURL);
        }
        return null;

    }

    /**
     * Провести обработку всех страниц с сайта
     */

    public function  handleAllPages()
    {
        $this->browser = create_curl();

        $startPageText = $this->loadPage(self::$STARTPAGE, '.\\datas\\zakupki.gov\\0.html');

        $this->workOutPage($startPageText[0], $startPageText[1], self::$STARTPAGE);

        $url1 = 'http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=';
        $url2 = '&placeOfSearch=FZ_44%2CFZ_223&searchType=ORDERS&morphology=false&strictEqual=false&orderPriceCurrencyId=-1&okdpWithSubElements=false&orderStages=AF%2CCA&headAgencyWithSubElements=false&smallBusinessSubject=I&rnpData=I&executionRequirement=I&penalSystemAdvantage=I&disabilityOrganizationsAdvantage=I&russianGoodsPreferences=I&orderPriceCurrencyId=-1&okvedWithSubElements=false&jointPurchase=false&byRepresentativeCreated=false&selectedMatchingWordPlace223=NOTICE_AND_DOCS&matchingWordPlace94=NOTIFICATIONS&matchingWordPlace44=NOTIFICATIONS&searchAttachedFile=false&changeParameters=true&showLotsInfo=false&extendedAttributeSearchCriteria.searchByAttributes=NOTIFICATION&law44.okpd.withSubElements=false';
        for ($i = 1; $i <= 100; $i++) {
            sleep(5);
            $url = $url1 . $i . $url2;
            timeStampedEcho($url . "\n");
            $pageText = $this->loadPage($url, '.\\datas\\zakupki.gov\\' . $i . '.html');
            $this->workOutPage($pageText[0], $pageText[1], $url);
        }


        return null;
    }

    protected function loadPage($fromURL, $toFile)
    {
        //$fromURL = self::$STARTPAGE;
        $ch = $this->browser;

        $url = $fromURL;
        $fpout = null;
        $toPage = $toFile;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $rst = curl_exec($ch);

        if ($this->getIsSaveToDisk()) {
            try {
                $fpout = @fopen($toPage, "w");
                if ($fpout) {
                    fwrite($fpout, $rst);
                    fclose($fpout);
                }
            } catch (Exception $e) {
                throw $e;
            }

        }


        //$fndRst = preg_match_all ('(/epz.*common.*[0-9]{10,14})',$rst,$fnd);
        //$fndRst = preg_match_all ('(/epz.*common.*[0-9]{10,14})',$rst,$fnd);

        $rstTrncated = preg_replace('/\r/', ' ', $rst);
        $rstTrncated = preg_replace('/\n/', ' ', $rstTrncated);

        return array($rst, $rstTrncated);

    }


    /**
     * Функция загружает начальную страницу
     */
    private function loadStartPage1()
    {
        return $this->loadPage(self::$STARTPAGE, '.\\datas\\zakupki.gov\\0.html');
    }

    /*
     * SELECT ID, DT, URL, PAGETEXT, PAGETEXTSRLFLESS
	FROM zakupki_gov_ru_requests
     */
}