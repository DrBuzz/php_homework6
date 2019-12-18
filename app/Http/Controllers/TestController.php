<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TestBasicService;

class TestController extends Controller
{
    private $a;
    public function __construct(TestBasicService $a)
    {
        $this->a = $a;
    }

    public function  getOne () {
        $this->a->setName('Vladimir');
        $this->a->setAge(33);
        $this->a->setSex(true);
        return response()->json($this->a->getOne());
    }
    public function  setOne (request $request) {
        $this->a->setName($request->get('name'));
        $this->a->setAge($request->get('age'));
        $this->a->setSex($request->get('sex'));
        return response()->json($this->a->getOne());
    }
}


