<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;
class PagesController extends Controller
{
    /**
     * Show the form
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('pages.show')->withPage(Page::find($id));
    }
}
