<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Http\Request;
use App\Services\tepianService;

class dataGuru extends Controller
{
    protected $service;
    public function __construct(tepianService $tepianService)
    {
        $this->service = $tepianService;
    }

    public function getRekap()
    {
       $req = $this->service->createUser("yogie",2010,"yogie.prayoga35@gmail.com","A");
       dd($req);

    }
}