<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    private function createRand()
    {
        //字典檔
        $word = 'abcdefghjkmnpqrstuvwxyz';
        $number = '23456789';

        $rand_word = [];
        $rand_number = [];

        $i = 0;
        while ($i < 3) {
            $rand = $word[rand() % strlen($word)];
            if (!in_array($rand, $rand_word)) {
                array_push($rand_word, $rand);
                $i++;
            }
        }
        return $rand_word;

    }
    public function bossRegister(Rrequest $request)
    {
        $rand = $this->createRand();
        return $rand;
        // return view('page.bossRegister');
    }
}
