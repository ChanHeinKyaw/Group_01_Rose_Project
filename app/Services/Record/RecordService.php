<?php

namespace App\Services\Record;

use Illuminate\Http\Request;
use App\Mail\RecordAlertMail;
use App\Exports\RecordsExport;
use App\Imports\RecordsImport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Contracts\Dao\Record\RecordDaoInterface;
use App\Contracts\Services\Record\RecordServiceInterface;

class RecordService implements RecordServiceInterface
{
    /**
     * record dao interface
     */
    private $recordDao;

    /**
     * Create a new constructor instance.
     *
     * @return void
     */
    public function __construct(RecordDaoInterface $recordDao)
    {
        $this->recordDao = $recordDao;
    }

    /**
     * To show all record data
     * 
     * @return array record data
     */
    public function getAllRecord()
    {
        return $this->recordDao->getAllRecord();
    }

    /**
     * To save record data
     * 
     * procedure
     */
    public function saveRecord()
    {
        return $this->recordDao->saveRecord();
    }

    /**
     * mail to defender roses
     * 
     * procedure
     */
    public function mailRecord()
    {
        $mailData = [
            "title" => "အကူအညီတောင်းခံခြင်း",
            "person" => "Defender နှင်းဆီများ🌹",
            "case" => request()->case ?: "အရေးပေါ် အကူအညီတောင်းခံခြင်း",
            "location" => request()->address ?: Auth::user()->address,
        ];

        $defenders = DB::select("select * from users where defender = true");

        foreach ($defenders as $defender) {
            $email = $defender->email;

            Mail::to($email)->send(new RecordAlertMail($mailData));
        }
    }

    /**
     * To download record csv file
     * 
     * @return File Download CSV file
     */
    public function export()
    {
        return Excel::download(new RecordsExport, 'rose-records.xlsx');
    }

    /**
     * To submit CSV upload view
     * 
     * 
     * procedure
     */
    public function import()
    {
        Excel::import(new RecordsImport, request()->file('file'));
    }

    /**
     * To get Age and Count Age
     * 
     * 
     * return array
     */
    public function getAge()
    {
        return $this->recordDao->getAge();
    }
}