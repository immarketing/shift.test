<?php

//use algo\ZakupkiGovRu;

require_once("algo/ZakupkiGovRu.php");

//use algo\ZakupkiGovRu;

/*
 * http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?placeOfSearch=FZ_44&placeOfSearch=FZ_223&orderPriceFrom=&orderPriceTo=&orderPriceCurrencyId=-1&deliveryAddress=&participantName=&orderPublishDateFrom=&orderPublishDateTo=&orderUpdateDateFrom=&orderUpdateDateTo=&customer.title=&customer.code=&customer.fz94id=&customer.fz223id=&customer.inn=&agency.title=&agency.code=&agency.fz94id=&agency.fz223id=&agency.inn=&orderStages=AF&orderStages=CA&searchTextInAttachedFile=&applSubmissionCloseDateFrom=&applSubmissionCloseDateTo=&searchString=&morphology=false&strictEqual=false
 * http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_10&pageNo=2&placeOfSearch=FZ_44%2CFZ_223&searchType=ORDERS&morphology=false&strictEqual=false&orderPriceCurrencyId=-1&okdpWithSubElements=false&orderStages=AF%2CCA&headAgencyWithSubElements=false&smallBusinessSubject=I&rnpData=I&executionRequirement=I&penalSystemAdvantage=I&disabilityOrganizationsAdvantage=I&russianGoodsPreferences=I&orderPriceCurrencyId=-1&okvedWithSubElements=false&jointPurchase=false&byRepresentativeCreated=false&selectedMatchingWordPlace223=NOTICE_AND_DOCS&matchingWordPlace94=NOTIFICATIONS&matchingWordPlace44=NOTIFICATIONS&searchAttachedFile=false&changeParameters=true&showLotsInfo=false&extendedAttributeSearchCriteria.searchByAttributes=NOTIFICATION&law44.okpd.withSubElements=false
 * http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_10&pageNo=3&placeOfSearch=FZ_44%2CFZ_223&searchType=ORDERS&morphology=false&strictEqual=false&orderPriceCurrencyId=-1&okdpWithSubElements=false&orderStages=AF%2CCA&headAgencyWithSubElements=false&smallBusinessSubject=I&rnpData=I&executionRequirement=I&penalSystemAdvantage=I&disabilityOrganizationsAdvantage=I&russianGoodsPreferences=I&orderPriceCurrencyId=-1&okvedWithSubElements=false&jointPurchase=false&byRepresentativeCreated=false&selectedMatchingWordPlace223=NOTICE_AND_DOCS&matchingWordPlace94=NOTIFICATIONS&matchingWordPlace44=NOTIFICATIONS&searchAttachedFile=false&changeParameters=true&showLotsInfo=false&extendedAttributeSearchCriteria.searchByAttributes=NOTIFICATION&law44.okpd.withSubElements=false
 *
 * ?????? ????????:
 * http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?placeOfSearch=FZ_44&placeOfSearch=FZ_223&orderPriceFrom=&orderPriceTo=&orderPriceCurrencyId=-1&deliveryAddress=&participantName=&orderPublishDateFrom=&orderPublishDateTo=&orderUpdateDateFrom=&orderUpdateDateTo=&customer.title=&customer.code=&customer.fz94id=&customer.fz223id=&customer.inn=&agency.title=&agency.code=&agency.fz94id=&agency.fz223id=&agency.inn=&orderStages=AF&orderStages=CA&searchTextInAttachedFile=&applSubmissionCloseDateFrom=&applSubmissionCloseDateTo=&searchString=&morphology=false&strictEqual=false
 *
 * ??????????? ????????
 * http://www.zakupki.gov.ru/epz/order/extendedsearch/search.html?sortDirection=false&sortBy=UPDATE_DATE&recordsPerPage=_10&pageNo=2&placeOfSearch=FZ_44%2CFZ_223&searchType=ORDERS&morphology=false&strictEqual=false&orderPriceCurrencyId=-1&okdpWithSubElements=false&orderStages=AF%2CCA&headAgencyWithSubElements=false&smallBusinessSubject=I&rnpData=I&executionRequirement=I&penalSystemAdvantage=I&disabilityOrganizationsAdvantage=I&russianGoodsPreferences=I&orderPriceCurrencyId=-1&okvedWithSubElements=false&jointPurchase=false&byRepresentativeCreated=false&selectedMatchingWordPlace223=NOTICE_AND_DOCS&matchingWordPlace94=NOTIFICATIONS&matchingWordPlace44=NOTIFICATIONS&searchAttachedFile=false&changeParameters=true&showLotsInfo=false&extendedAttributeSearchCriteria.searchByAttributes=NOTIFICATION&law44.okpd.withSubElements=false
 */

require_once("libs/funcs.php");
require_once("libs/dbfuncs.php");
date_default_timezone_set("Europe/Moscow");
/**
 * Created by PhpStorm.
 * User: ????
 * Date: 11.10.2015
 * Time: 20:29
 */
//echo("sdf\n");
$connection = connectDB();
if (is_null($connection)) {
    exit;
}


$zgr = new ZakupkiGovRu($connection);

timeStampedEcho("Starting\n");
//timeStampedEcho($url."\n");
//$ch = create_curl ();

// http://www.zakupki.gov.ru/epz/order/notice/ea44/view/common-info.html?regNumber=0138100005315000120

//loadStartPage('http://www.zakupki.gov.ru/epz/order/notice/ea44/view/common-info.html?regNumber=0138100005315000120','.\\datas\\__.html', $ch);
//exit;

//loadStartPage($url,'.\\datas\\0.html', $ch);
$zgr->setIsSaveToDisk(false);
$zgr->setIsCollectTenderTd(false);
$zgr->setIsStoreRequests(false);
$zgr->handleAllPages();

exit;


fclose($fperr);

