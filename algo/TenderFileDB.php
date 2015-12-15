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

    private function updateTenders (){
        unset ($this->tenders);
        if (!$this->elements) {
            return;
        }
        foreach ($this->elements as $key => $element){
            if ($element) {
                $tendersOfElement = $element['tenders'];
                foreach ($tendersOfElement as $tenderID => &$tenderInfo) {
                    if (!$this->tenders[$tenderID])
                    $this->tenders[$tenderID] = $tenderInfo;
                }
            };

        }

    }

    public function gotNewQuery ($qFileName,$qText, $qDt, $qNm){
        $queryFileName = $qFileName;
        $entryQueryID = $qDt.'_'.$qNm;

        if (!$this->queries[$entryQueryID]) {
            $queries[$entryQueryID] = array('fileName'=>$qNm.'.html','id'=>$entryQueryID,'path'=>$queryFileName);
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
        $elements = null;
        $queries = null;
        if ($handle = opendir($fromDir)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    //echo "$entry\n";
                    /*
                     * Должны быть директории с датами изменения процедур
                     *
                     */
                    $fullDir = $fromDir.'\\'.$entry;
                    unset ($tenders);
                    if (is_dir($fullDir)) {
                        // нашли директорию с запросами и тендерами
                        if ($handleQueries = opendir($fullDir)) {
                            while (false !== ($entryQuery = readdir($handleQueries))) {
                                if (!is_dir($fullDir.'\\'.$entryQuery)) if ($entryQuery != "." && $entryQuery != "..") {
                                    /*
                                     * пропускаем директории
                                     * файлы с запросами
                                     */
                                    $queryFileName = $fullDir.'\\'.$entryQuery;
                                    $entryQueryID = $entry.'_'.preg_replace('/.html$/', '', $entryQuery);
                                    $queries[$entryQueryID] = array('fileName'=>$entryQuery,'id'=>$entryQueryID,'path'=>$queryFileName);
                                }
                            }
                            closedir($handleQueries);
                        }
                        if ($handleTenders = opendir($fullDir.'\\tenders')) {
                            // считываем тендера
                            while (false !== ($entryTender = readdir($handleTenders))) {
                                if ($entryTender != "." && $entryTender != "..") {
                                    /*
                                     * файлы с тендерами
                                     */
                                    $tenderFileName = $fullDir.'\\tenders\\'.$entryTender;
                                    $entryTenderID = preg_replace('/.html$/', '', $entryTender);
                                    $tenders[$entryTenderID] = array('fileName'=>$entryTender,'id'=>$entryTenderID,'path'=>$tenderFileName);

                                }

                            }
                            closedir($handleTenders);

                        }
                        $elements[$entry]=array ('date'=>$entry,'path'=>$fullDir, 'tenders'=>$tenders);
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