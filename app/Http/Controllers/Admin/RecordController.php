<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Contracts\Services\Record\RecordServiceInterface;
use App\Models\Record;

class RecordController extends Controller
{
    /**
     * record service interface
     */
    private $recordService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RecordServiceInterface $recordService)
    {
        $this->recordService = $recordService;
    }

    /**
     * To show create report view
     * 
     * @return View create report
     */
    public function createViewReport()
    {
        # code...
        return view('ui-panel.report');  // front ui view
    }

    /**
     * To save record data and mail to defender roses
     * 
     * @return View success alert page
     */
    public function createReport()
    {
        # code...
        $this->recordService->saveRecord();
        $this->recordService->mailRecord();

        return view('ui-panel.success-alert');
    }

    /**
     * To show all record data
     * 
     * @return View record from admin view with record data
     */
    public function showViewRecord()
    {
        # code...
        $data = $this->recordService->getAllRecord();

        return view('admin-panel.record',['data' => $data]);
    }

    /**
     * To download record csv file
     * 
     * @return File Download CSV file
     */
    public function export()
    {
        # code...
        return $this->recordService->export(); 
    }

    /**
     * To submit CSV upload view
     * 
     * 
     * @return view previous page
     */
    public function import()        
    {
        # code...
        $this->recordService->import();
        
        return back();
    }

    /**
     * To show graph view
     * 
     * 
     * @return view previous page
     */
    public function graphView()
    {
        return view('admin-panel.graph');
    }

    /**
     * To get Age and Count Age
     * 
     * 
     * return array
     */
    public function graph()
    {

        $allDataCount = $this->recordService->getAllRecord();
        $dataone = $this->recordService->getAge();

        return [count($allDataCount), $dataone];
    }
}
