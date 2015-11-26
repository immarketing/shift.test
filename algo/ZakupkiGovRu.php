<?php
/**
 * Created by PhpStorm.
 * User: Папа
 * Date: 27.10.2015
 * Time: 21:52
 */

//namespace algo;


class ZakupkiGovRu
{
    private  $dbConnection = null;

    /**
     *
     */
    public function ZakupkiGovRu ($dbc)
    {
        timeStampedEcho("ZakupkiGovRu\n");
        $this->dbConnection = $dbc;
    }


}