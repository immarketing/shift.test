<?php
/**
 * Created by PhpStorm.
 * User: AVGorbunov
 * Date: 15.12.2015
 * Time: 16:12
 */


class TenderFileDB
{
    private $startDir = null;
    private $elements = array();
    private $tenders = array();
    private $queries = array();

    /**
     * @return null
     */
    public function getStartDir()
    {
        return $this->startDir;
    }

    /**
     * @param null $startDir
     * @return TenderFileDB
     */
    public function setStartDir($startDir)
    {
        $this->startDir = $startDir;
        return $this;
    }

    public function isTenderIDExists ($tID){
        if (array_key_exists ($tID, $this->tenders)) {
            return $this->tenders[$tID];
        } else {
            return null;
        }
    }

    private function updateTenders (){
        unset ($this->tenders);
        $this->tenders = array();
        if (!$this->elements) {
            return;
        }
        foreach ($this->elements as $key => $element){
            if ($element) {
                $tendersOfElement = &$element['tenders'];
                if ($tendersOfElement) foreach ($tendersOfElement as $tenderID => &$tenderInfo) {
                    if (! array_key_exists  ($tenderID, $this->tenders)) {
                        $this->tenders[$tenderID] = $tenderInfo;

                    }

                }
            };

        }

    }

    public function gotNewTender ($tFileName,$qID){
        if (! array_key_exists ($qID, $this->tenders) ) {
            $this->tenders[$qID] = array('fileName'=>$qID.'.html','id'=>$qID,'path'=>$tFileName);
            krsort ($this->queries);
        }
        return $this;
    }

    public function gotNewQuery ($qFileName,$qText, $qDt, $qNm){
        $queryFileName = $qFileName;
        $entryQueryID = $qDt.'_'.$qNm;

        if (! array_key_exists ($entryQueryID, $this->queries) ) {
            $this->queries[$entryQueryID] = array('fileName'=>$qNm.'.html','id'=>$entryQueryID,'path'=>$queryFileName);
            krsort ($this->queries);
        }
        return $this;
    }



    public function readFromDir($fromDir = null){
        if (!$fromDir){
            $fromDir = $this->getStartDir();
        }
        if (!$fromDir) {
            return;
        }
        $elements = array();
        $queries = array();
        if ($handle = opendir($fromDir)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    //echo "$entry\n";
                    /*
                     * Должны быть директории с датами изменения процедур
                     *
                     */
                    $fullDir = $fromDir.'/'.$entry;
                    if (is_dir($fullDir)) {
                        // нашли директорию с запросами и тендерами
                        unset ($tenders);
                        $tenders = array();
                        if ($handleQueries = opendir($fullDir)) {
                            while (false !== ($entryQuery = readdir($handleQueries))) {
                                if (!is_dir($fullDir.'/'.$entryQuery)) if ($entryQuery != "." && $entryQuery != "..") {
                                    /*
                                     * пропускаем директории
                                     * файлы с запросами
                                     */
                                    $queryFileName = $fullDir.'/'.$entryQuery;
                                    $entryQueryID = $entry.'_'.preg_replace('/.html$/', '', $entryQuery);
                                    $queries[$entryQueryID] = array('fileName'=>$entryQuery,'id'=>$entryQueryID,'path'=>$queryFileName);
                                }
                            }
                            closedir($handleQueries);
                        }
                        if ($handleTenders = opendir($fullDir.'/tenders')) {
                            // считываем тендера
                            while (false !== ($entryTender = readdir($handleTenders))) {
                                if ($entryTender != "." && $entryTender != "..") {
                                    /*
                                     * файлы с тендерами
                                     */
                                    $tenderFileName = $fullDir.'/tenders/'.$entryTender;
                                    $entryTenderID = preg_replace('/.html$/', '', $entryTender);
                                    $tenders[$entryTenderID] = array('fileName'=>$entryTender,'id'=>$entryTenderID,'path'=>$tenderFileName);

                                }

                            }
                            closedir($handleTenders);

                        }
                        if ($tenders || true) {
                            $elements[$entry]=array ('date'=>$entry,'path'=>$fullDir, 'tenders'=>$tenders);
                        }
                    }
                }
            }
            closedir($handle);
        }
        krsort ($elements);
        $this->elements = &$elements;
        $this->updateTenders();

        krsort ($queries);
        $this->queries = &$queries;
    }
}

?>