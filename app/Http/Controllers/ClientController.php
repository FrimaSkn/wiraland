<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Settings\SettingClients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(SettingClients $manageClient)
    {

        return view('client', [
            'banner' => $manageClient->banner,
            'title' => $manageClient->title,
            'desc' => $manageClient->desc
        ]);
    }
}
