<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// TODO: mejorar presentación del buscador

class SearchController extends Controller
{
    public function index()
    {
      return view("search.index");
    }

    public function search(Request $request)
    {
      $keywords = $request->keywords;
      $type = $request->type;

      $data = null;

      switch($type)
      {
        case 'd':     // diseases
          $data = \App\Disease::byName($keywords)->orderBy('name')->get();
        break;

        case 'p':     // plants
          $data = \App\Plant::byName($keywords)->orderBy('name')->get();
        break;

        default:      // other
          $data = ['error' => true,
                   'type' => 'Search Type Not Found',
                   'value' => $type,
                   'code' => 404];
        break;
      }

      $datapack = [
        'data' => $data,
        'type' => $type,
        'keywords' => $keywords
      ];

      if($type == 'd')
        return view("search.results.diseases", $datapack);
      else if($type == 'p')
        return view("search.results.plants", $datapack);
      else
        return view("search.results.error", $datapack);

  }
}
