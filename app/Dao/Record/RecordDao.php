<?php

namespace App\Dao\Record;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contracts\Dao\Record\RecordDaoInterface;

class recordDao implements RecordDaoInterface
{
    /**
     * To show all record data
     * 
     * @return array record data
     */
    public function getAllRecord()
    {
        return Record::all();
    }

    /**
     * To save record data
     * 
     * procedure
     */
    public function saveRecord()
    {
        $record = new Record;

        $record->user_id = Auth::user()->id;
        $record->case = request()->case ?: "အရေးပေါ် အကူအညီတောင်းခံခြင်း";
        $record->address = request()->address ?: Auth::user()->address;

        $record->save();
    }
}