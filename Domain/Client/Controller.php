<?php

namespace Domain\Client;

use Illuminate\Http\Request;

class Controller extends \Domain\Core\Http\Controller
{

  public function store(Request $request)
  {
    //return ['name' => $request->name];
    $client = new Client;
    $client->name = $request->name;
    $client->save();

    return $client;
  }

}
