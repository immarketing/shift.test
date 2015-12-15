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

    public function readFromDir($fromDir = null){
        if (!$fromDir){
            $fromDir = $this->getStartDir();
        }
        if (!$fromDir) {
            return;
        }
        $elements = null;
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
                        if ($handleTenders = opendir($fullDir.'\\tenders')) {
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
        $this->elements = $elements;
    }
}

?>