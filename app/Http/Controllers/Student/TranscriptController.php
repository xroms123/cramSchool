<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Model\Transcript;
use Illuminate\Http\Request;

class TranscriptController extends Controller
{
    public function showPage(Request $request)
    {
        // 從資料庫取出所有成績單資料，並將資料用teacher欄位內的值來分類
        $data = Transcript::all()->groupBy('teacher');

        $teacher_list = [];
        foreach ($data as $key => $value) {
            array_push($teacher_list, $key);
        }

        return view('page.transcript', ['teacher_list' => $teacher_list]);
    }

    public function updateDropdown(Request $request)
    {
        $data = Transcript::all();
        $input_data = $request->all();

        // 先將資料一層一層搜尋出來
        foreach ($input_data['filter'] as $input) {
            $data = $data->where($input['item'], $input['value']);
        }

        $data = $data->groupBy($input_data['nextLevel']);

        $return_list = [];
        foreach ($data as $key => $value) {
            array_push($return_list, $key);
        }

        return $return_list;
    }
}
