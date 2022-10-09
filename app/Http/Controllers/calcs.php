<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcs extends Controller
{
    public function result($value1, $operator, $value2)
    {
        switch ($operator) {
            case 'addition':
                $result = $value1 + $value2;
                break;
            case 'subtraction':
                $result = $value1 - $value2;
                break;
            case 'multiplication':
                $result = $value1 * $value2;
                break;
            case 'division':
                $result = $value1 / $value2;
                break;
        }
        return view('messages.result', ['result' => $result]);
    }
}
