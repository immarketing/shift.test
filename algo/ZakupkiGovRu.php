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
    // завершенные закупки за 20151213
    //http://www.zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=13.12.2015&updateDateTo=13.12.2015&_orderStages=on&_orderStages=on&orderStages=PC&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=1&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=false&isHeaderClick=&checkIds=
    //http://www.zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=13.12.2015&updateDateTo=13.12.2015&_orderStages=on&_orderStages=on&orderStages=PC&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=PRICE&recordsPerPage=_50&pageNo=1&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=false&isHeaderClick=&checkIds=
    //http://www.zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=13.12.2015&updateDateTo=13.12.2015&_orderStages=on&_orderStages=on&orderStages=PC&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=1&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=true&isHeaderClick=&checkIds=
    //http://www.zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=13.12.2015&updateDateTo=13.12.2015&_orderStages=on&_orderStages=on&orderStages=PC&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=2&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=true&isHeaderClick=&checkIds=
    //http://www.zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=13.12.2015&updateDateTo=13.12.2015&_orderStages=on&_orderStages=on&orderStages=PC&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=1&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=false&isHeaderClick=&checkIds=

    private static $STARTPAGEFINISHED = array('http://zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom='
    , '&updateDateTo='
    , '&_orderStages=on&_orderStages=on&orderStages=PC&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=PRICE&recordsPerPage=_500&pageNo='
    , '&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=true&isHeaderClick=&checkIds=');

    //http://zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=13.12.2015&updateDateTo=13.12.2015&_orderStages=on&_orderStages=on&orderStages=PC&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=2&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=true&isHeaderClick=&checkIds=
    //http://zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=13.12.2015&updateDateTo=13.12.2015&_orderStages=on&_orderStages=on&orderStages=PC&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=3&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=true&isHeaderClick=&checkIds=
    //http://zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=13.12.2015&updateDateTo=13.12.2015&_orderStages=on&_orderStages=on&orderStages=PC&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=1&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=false&isHeaderClick=&checkIds=
    /**
     * @var string
     */
    //private static $STARTPAGE = 'http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?placeOfSearch=FZ_44&placeOfSearch=FZ_223&orderPriceFrom=&orderPriceTo=&orderPriceCurrencyId=-1&deliveryAddress=&participantName=&orderPublishDateFrom=&orderPublishDateTo=&orderUpdateDateFrom=&orderUpdateDateTo=&customer.title=&customer.code=&customer.fz94id=&customer.fz223id=&customer.inn=&agency.title=&agency.code=&agency.fz94id=&agency.fz223id=&agency.inn=&orderStages=AF&orderStages=CA&searchTextInAttachedFile=&applSubmissionCloseDateFrom=&applSubmissionCloseDateTo=&searchString=&morphology=false&strictEqual=false';
    private static $STARTPAGE = 'http://zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=&updateDateTo=&orderStages=AF&_orderStages=on&orderStages=CA&_orderStages=on&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=1&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=true&isHeaderClick=&checkIds=';
    //private static $OTHERPAGES = array('http://zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=&updateDateTo=&orderStages=AF&_orderStages=on&orderStages=CA&_orderStages=on&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=','&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=false&isHeaderClick=&checkIds=');
    private static $OTHERPAGES = array('http://zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=&updateDateTo=&orderStages=AF&_orderStages=on&orderStages=CA&_orderStages=on&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=', '&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=true&isHeaderClick=&checkIds=');
    //                           http://zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=&updateDateTo=&orderStages=AF&_orderStages=on&orderStages=CA&_orderStages=on&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=1&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=false&isHeaderClick=&checkIds=
    // http://zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=&updateDateTo=&orderStages=AF&_orderStages=on&orderStages=CA&_orderStages=on&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=1&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=true&isHeaderClick=&checkIds=
    // http://zakupki.gov.ru/epz/order/quicksearch/update.html?placeOfSearch=FZ_44&_placeOfSearch=on&placeOfSearch=FZ_223&_placeOfSearch=on&_placeOfSearch=on&priceFrom=0&priceTo=200+000+000+000&publishDateFrom=&publishDateTo=&updateDateFrom=&updateDateTo=&orderStages=AF&_orderStages=on&orderStages=CA&_orderStages=on&_orderStages=on&_orderStages=on&sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=2&searchString=&strictEqual=false&morphology=false&showLotsInfo=false&isPaging=true&isHeaderClick=&checkIds=
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

    private $HandleFinishedByDates = false;

    /**
     * @return boolean
     */
    public function isHandleFinishedByDates()
    {
        return $this->HandleFinishedByDates;
    }

    /**
     * @param boolean $HandleFinishedByDates
     * @return ZakupkiGovRu
     */
    public function setHandleFinishedByDates($HandleFinishedByDates)
    {
        $this->HandleFinishedByDates = $HandleFinishedByDates;
        return $this;
    }

    private $tendersFileDB = null;

    public function readFinishedFromDir (){
        $tendersFileDB = $this->tendersFileDB;
        $tendersFileDB->readFromDir();

    }

    private $IsUseDB = false;

    /**
     * @return boolean
     */
    public function isIsUseDB()
    {
        return $this->IsUseDB;
    }

    /**
     * @param boolean $IsUseDB
     * @return ZakupkiGovRu
     */
    public function setIsUseDB($IsUseDB)
    {
        $this->IsUseDB = $IsUseDB;
        return $this;
    }

    /**
     *
     */
    public function ZakupkiGovRu($dbc)
    {
        timeStampedEcho("ZakupkiGovRu created\n");
        $this->dbConnection = $dbc;
        $this->tendersFileDB = new TenderFileDB();
    }

    private function touchConnection()
    {
        if (!$this->isIsUseDB()) return null;

        $this->dbConnection = touchDB($this->dbConnection);
    }

    /**
     * @param $pageText
     * @param $pageTextCRLFLess
     * @param $reqURL
     */
    private function storeRequest($pageText, $pageTextCRLFLess, $reqURL)
    {
        if (!$this->isIsUseDB()) return null;

        $this->touchConnection();
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

    private function storeTendertd($TenderDT, $TenderDD)
    {
        if (!$this->isIsUseDB()) return null;

        $this->touchConnection();
        $stmt = null;
        if (!($stmt = $this->dbConnection->prepare("INSERT INTO zakupki_gov_ru_tendertd	(TenderDT, TenderDD)	VALUES (?, ?)"))) {
            timeStampedEcho("Не удалось подготовить запрос: (" . $this->dbConnection->errno . ") " . $this->dbConnection->error);
            return null;
        }
        if (!$stmt->bind_param("ss", $TenderDT, $TenderDD)) {
            echo "Не удалось привязать параметры: (" . $stmt->errno . ") " . $stmt->error;
        }
        if (!($rslt = $stmt->execute())) {
            echo "Не удалось выполнить запрос: (" . $stmt->errno . ") " . $stmt->error;
        }
        $stmt->close();
    }

    private $storeTenderFilesInDir = null;

    /**
     * @return null
     */
    public function getStoreTenderFilesInDir()
    {
        return $this->storeTenderFilesInDir;
    }

    /**
     * @param null $storeTenderFilesInDir
     * @return ZakupkiGovRu
     */
    public function setStoreTenderFilesInDir($storeTenderFilesInDir)
    {
        $this->storeTenderFilesInDir = $storeTenderFilesInDir;
        return $this;
    }


    /*
     * INSERT INTO zakupki_gov_ru_descripttenders
	(TENDERID, TENDERURL)
	VALUES ('', '')
     */
    private function storeDescriptTenderTd($tid, $turl)
    {
        if (!$this->isIsUseDB()) return null;
        $this->touchConnection();
        /* подготавливаемый запрос, первая стадия: подготовка */
        $stmt = null;
        if (!($stmt = $this->dbConnection->prepare("INSERT INTO zakupki_gov_ru_descripttenders	(TENDERID, TENDERURL)	VALUES (?, ?)"))) {
            timeStampedEcho("Не удалось подготовить запрос: (" . $this->dbConnection->errno . ") " . $this->dbConnection->error);
            return null;
        }
        if (!$stmt->bind_param("ss", $tid, $turl)) {
            echo "Не удалось привязать параметры: (" . $stmt->errno . ") " . $stmt->error;
        }
        if (!($rslt = $stmt->execute())) {
            echo "Не удалось выполнить запрос: (" . $stmt->errno . ") " . $stmt->error;
        }
        $stmt->close();
    }

    private function loadTenderDesc($tid, $turl)
    {
        //       http://www.zakupki.gov.ru/

        $turl = preg_replace('/^\//', 'http://www.zakupki.gov.ru/', $turl);

        //'.\\datas\\zakupki.gov\\tenders\\';

        $pageText = $this->loadPage($turl, $this->getStoreTenderFilesInDir() . $tid . '.html');

    }

    private function handleDescriptTenderTd($pageText, $pageTextCRLFLess, $reqURL)
    {
        $fndRst = preg_match_all('/"descriptTenderTd".*?<\/td>/s', $pageText, $matches);
        if ($fndRst) foreach ($matches[0] as $oneString) {
            $tenderTd = array('', '');
            unset ($tenderTd);
            if ($fndRstString = preg_match_all('/href="(.*?regNumber.*?)"/', $oneString, $matchesOneString)) {
                //timeStampedEcho($matchesOneString[1][0] . "\t");
                $tenderTd[0] = $matchesOneString[1][0];

                unset ($matchesOneString);
                if ($fndRstString = preg_match_all('/=([0-9]+)/', $tenderTd[0], $matchesOneString)) {
                    //timeStampedEcho($matchesOneString[1][0] . "\t");
                    $tenderTd[1] = $matchesOneString[1][0];
                }
            } else if ($fndRstString = preg_match_all('/href="(.*?noticeId.*?)"/', $oneString, $matchesOneString)) { // noticeId
                $tenderTd[0] = $matchesOneString[1][0];

                unset ($matchesOneString);
                if ($fndRstString = preg_match_all('/=([0-9]+)/', $tenderTd[0], $matchesOneString)) {
                    //timeStampedEcho($matchesOneString[1][0] . "\t");
                    $tenderTd[1] = $matchesOneString[1][0];
                }
            } else {
                timeStampedEcho("\n!!!! GOT UNHANDLED TENDER DESCRIPTION !!!!\n");
            }
            if ($tenderTd) {
                //sleep(5);
                if ($this->getIsCollectTenderTd()) {
                    $this->loadTenderDesc($tenderTd[1], $tenderTd[0]);
                    $this->storeDescriptTenderTd($tenderTd[1], $tenderTd[0]);

                }
            }
        }
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

        // descriptTenderTd
        $this->handleDescriptTenderTd($pageText, $pageTextCRLFLess, $reqURL);

        if ($this->getIsCollectTenderTd()) {
            $fndRst = preg_match_all('/"tenderTd".*?<\/td>/s', $pageText, $matches);
            if ($fndRst) foreach ($matches[0] as $oneString) {
                $tenderTd = array('', '');
                if ($fndRstString = preg_match_all('/dt>(.*?)</', $oneString, $matchesOneString)) {
                    //timeStampedEcho($matchesOneString[1][0] . "\t");
                    $tenderTd[0] = $matchesOneString[1][0];
                }
                if ($fndRstString = preg_match_all('/dd>(.*?)</', $oneString, $matchesOneString)) {
                    //timeStampedEcho($matchesOneString[1][0] . "\t\n");
                    $tenderTd[1] = $matchesOneString[1][0];
                }
                $this->storeTendertd($tenderTd[0], $tenderTd[1]);
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

        unset ($dirToSaveTo, $url, $startPageText);

        $cDate = getdate();
        $cDateFmt = date('Ymd', $cDate[0]);
        // date('Ymd',$cDate[0]-60*60*24)


        if ($this->isHandleFinishedByDates()) {
            $dirToSaveTo = '.\\datas\\zakupki.gov\\finished';
        } else {
            $dirToSaveTo = '.\\datas\\zakupki.gov\\' . $cDateFmt;
            $url = self::$STARTPAGE;
        }
        $this->tendersFileDB->setStartDir($dirToSaveTo);
        $this->readFinishedFromDir();

        if (!is_dir($dirToSaveTo)) mkdir($dirToSaveTo, 0700, true);

        for ($days = 1; $days <= 100; $days++) {
            for ($i = 1; $i <= 100; $i++) {
                if ($this->isHandleFinishedByDates()) {
                    $cDateFmt = date('Ymd', $cDate[0] - $days * 60 * 60 * 24); // дата изменения процедуры, с которой работаем
                    $dirToSaveTo1 = $dirToSaveTo . '\\' . $cDateFmt;
                    timeStampedEcho("[v1]" . "\t[" . $days . "]\t[" . $cDateFmt . "]\t[" . $i . "]\t\n");
                    if (!is_dir($dirToSaveTo1)) mkdir($dirToSaveTo1, 0700, true);
                    // '.\\datas\\zakupki.gov\\tenders\\'
                    $this->setStoreTenderFilesInDir($dirToSaveTo1 . '\\tenders\\');
                    if (!is_dir($this->getStoreTenderFilesInDir())) mkdir($this->getStoreTenderFilesInDir(), 0700, true);
                    $url = self::$STARTPAGEFINISHED[0] . date('d.m.Y', $cDate[0] - $days * 60 * 60 * 24) . self::$STARTPAGEFINISHED[1] . date('d.m.Y', $cDate[0] - $days * 60 * 60 * 24) . self::$STARTPAGEFINISHED[2] . $i . self::$STARTPAGEFINISHED[3];
                    //$startPageText = $this->loadPage($url, $dirToSaveTo1 . '\\' . $i . '.html');
                    $startPageText = $this->loadQuery($url, $dirToSaveTo1 . '\\' . $i . '.html',$cDateFmt,$i);
                    $this->workOutPage($startPageText[0], $startPageText[1], $url);
                } else {
                    //$startPageText = $this->loadPage($url, $dirToSaveTo.'\\0.html');
                    //$this->workOutPage($startPageText[0], $startPageText[1], $url);
                    $url1 = self::$OTHERPAGES[0];
                    //'http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_50&pageNo=';
                    $url2 = self::$OTHERPAGES[1];
                    //'&placeOfSearch=FZ_44%2CFZ_223&searchType=ORDERS&morphology=false&strictEqual=false&orderPriceCurrencyId=-1&okdpWithSubElements=false&orderStages=AF%2CCA&headAgencyWithSubElements=false&smallBusinessSubject=I&rnpData=I&executionRequirement=I&penalSystemAdvantage=I&disabilityOrganizationsAdvantage=I&russianGoodsPreferences=I&orderPriceCurrencyId=-1&okvedWithSubElements=false&jointPurchase=false&byRepresentativeCreated=false&selectedMatchingWordPlace223=NOTICE_AND_DOCS&matchingWordPlace94=NOTIFICATIONS&matchingWordPlace44=NOTIFICATIONS&searchAttachedFile=false&changeParameters=true&showLotsInfo=false&extendedAttributeSearchCriteria.searchByAttributes=NOTIFICATION&law44.okpd.withSubElements=false';

                    $url = $url1 . $i . $url2;
                    //timeStampedEcho($url . "\n");
                    timeStampedEcho("[v2]" . "\t[" . $i . "]\t\n");
                    $this->setStoreTenderFilesInDir($dirToSaveTo . '\\tenders\\');
                    if (!is_dir($this->getStoreTenderFilesInDir())) mkdir($this->getStoreTenderFilesInDir(), 0700, true);
                    $pageText = $this->loadPage($url, $dirToSaveTo . '\\' . $i . '.html');
                    $this->workOutPage($pageText[0], $pageText[1], $url);
                }


            }

        }


        return null;
    }

    protected function loadQuery($fromURL, $toFile, $dt, $num) {
        unset ($startPageText);
        if (is_file($toFile)) {
            // такой файл есть. Читаем текст из файла
            $startPageText = file_get_contents ($toFile );
            $startPageText = array($startPageText, $this->truncateCRLF($startPageText));
        } else {
            $startPageText = $this->loadPage($fromURL, $toFile);
            if ($startPageText) {
                $this->tendersFileDB->gotNewQuery($toFile,$startPageText,$dt,$num);
            }
        }
        return $startPageText;
    }
    protected function loadPage($fromURL, $toFile, $curl_tmout = 10, $reinitBrowser = 0, $makeSleep = 5)
    {
        //$fromURL = self::$STARTPAGE;
        if ($makeSleep) {
            $ccc = 0;
            while ($ccc++ < $makeSleep) {
                try {
                    sleep(1);
                } catch (Exception $e) {

                }
            }
        }
        if ($reinitBrowser) {
            curl_close($this->browser);
            $this->browser = create_curl();
        }
        $ch = $this->browser;

        $url = $fromURL;
        $fpout = null;
        $toPage = $toFile;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, $curl_tmout);
        curl_setopt($ch, CURLOPT_NOSIGNAL, 1);

        $rst = curl_exec($ch);

        $curl_errno = curl_errno($ch);
        $curl_error = curl_error($ch);
        if ($curl_errno > 0) {
            timeStampedEcho("cURL Error ($curl_errno): $curl_error\n");
            if ($curl_errno != 28) {
                return ($this->loadPage($fromURL, $toFile, $curl_tmout * 2, 1));
            } else
                return ($this->loadPage($fromURL, $toFile, $curl_tmout * 2));
        }
        $lastHttpCode = curl_getinfo($ch);
        if ($lastHttpCode['http_code'] != 200) {
            if ($makeSleep < 40) {
                $makeSleep = 40;
            }
            timeStampedEcho('Got wrong HTTP_CODE [' . $lastHttpCode['http_code'] . ']. Sleeping ' . ($makeSleep * 2) . "\n");
            return ($this->loadPage($fromURL, $toFile, 10, 1, $makeSleep * 2));
        }

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

        //$rstTrncated = preg_replace('/\r/', ' ', $rst);
        //$rstTrncated = preg_replace('/\n/', ' ', $rstTrncated);
        $rstTrncated = $this->truncateCRLF($rst);

        return array($rst, $rstTrncated);
    }

    private function truncateCRLF (&$str) {
        return preg_replace('/\r/', ' ', preg_replace('/\n/', ' ', $str));
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