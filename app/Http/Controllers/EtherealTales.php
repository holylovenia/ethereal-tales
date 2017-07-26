<?php

namespace App\Http\Controllers;

use App\EtherealTale;
use Illuminate\Http\Request;

class EtherealTales extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if (isset($id)) {
            return EtherealTale::find($id);
        } else {
            return EtherealTale::all();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $etherealTale = new EtherealTale;

        $etherealTale->author = $request->input('author');
        $etherealTale->subject = $request->input('subject');
        $etherealTale->tale = $request->input('tale');
        $etherealTale->save();

        return 'Ethereal Tale successfully created with id ' . $etherealTale->id;
    }
}
