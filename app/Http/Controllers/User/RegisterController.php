<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    private function createRand()
    {
        //字典檔
        $word = 'abcdefghjkmnpqrstuvwxyz';
        $number = '23456789';

        $rand_result = "";

        /**************************************************************************
         ** stroops 是PHP的一個內建方法，可以檢查字串裡面是不是有某個字，如果沒有就會回傳false
         ** 語法：stroops(字串,要找的字)
         ** 參考：http://www.w3school.com.cn/php/func_string_strpos.asp
         ***************************************************************************/

        // 產生三碼不重複的英文字
        $i = 0;
        while ($i < 3) {
            $rand = $word[rand() % strlen($word)];
            if (!strpos($rand_result, $rand)) {
                $rand_result = $rand_result . $rand;
                $i++;
            }
        }

        // 產生四碼不重複的數字
        $k = 0;
        while ($k < 4) {
            $rand = $number[rand() % strlen($number)];
            if (!strpos($rand_result, $rand)) {
                $rand_result = $rand_result . $rand;
                $k++;
            }
        }
        return $rand_result;

    }
    public function bossRegister(Request $request)
    {
        $rand = $this->createRand();
        return view('page.bossRegister', ['rand' => $rand]);
    }
}
