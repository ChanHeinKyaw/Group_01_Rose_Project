<?php

namespace App\Dao\Record;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $record->user_name = Auth::user()->name;
        $record->case = request()->case ?: "အရေးပေါ် အကူအညီတောင်းခံခြင်း";
        $record->address = request()->address ?: Auth::user()->address;

        $record->save();
    }

    /**
     * To get Age and Count Age
     * 
     * 
     * return array
     */
    public function getAge()
    {
        return DB::table('records')->join('users', 'records.user_id', 'users.id')->select('users.age as user_age', DB::raw('COUNT(users.age) as count_user_age'))->groupBy('user_age')->having('user_age', '>' , '1')->get();
    }
}