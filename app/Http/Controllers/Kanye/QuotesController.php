<?php

namespace App\Http\Controllers\Kanye;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function index(Request $request, $count = 5 )
    {

        $quotes = $this->fetchQuotes($count);
        if ($request->is('api/*')) {
           return  response()->json($quotes);
        }else{
            return view('quotes.index', compact('quotes'));
        }

    }

    private function fetchQuotes($count)
    {
        $quotes = [];
        for ($i = 0; $i < $count; $i++) {
            $response = Http::get('https://api.kanye.rest');
            if ($response->successful()) {
                $quotes[] = $response['quote'];
            } else {
                $quotes[] = 'Could not fetch quote';
            }
        }
        return $quotes;
    }
}
