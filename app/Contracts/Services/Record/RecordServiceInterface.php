<?php

namespace App\Contracts\Services\Record;

use Illuminate\Http\Request;

interface RecordServiceInterface
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

     /**
     * mail to defender roses
     * 
     * procedure
     */
    public function mailRecord();

    /**
     * To download record csv file
     * 
     * @return File Download CSV file
     */
    public function export();

    /**
     * To submit CSV upload view
     * 
     * 
     * procedure
     */
    public function import();
}