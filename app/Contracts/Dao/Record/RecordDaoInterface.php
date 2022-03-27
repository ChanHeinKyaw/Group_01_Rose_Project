<?php

namespace App\Contracts\Dao\Record;

use Illuminate\Http\Request;

interface RecordDaoInterface
{
    /**
     * To show all record data
     * 
     * @return array record data
     */
    public function getAllRecord();

    /**
     * To save record data
     * 
     * procedure
     */
    public function saveRecord();
}