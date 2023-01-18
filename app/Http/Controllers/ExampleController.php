<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        $data = [
            'key' => 'ini data',
            'rahmat' => 'mendapatkan rejeki'
        ];

        return response()->json($data, 200);
    }
}
