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
        if($id == null) {
            $data = EtherealTale::all();
            return view('page')->with('data', $data);
        } else {
            return $this->show($id);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return EtherealTale::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $etherealTale = EtherealTale::find($id);

        $etherealTale->author = $request->input('author');
        $etherealTale->subject = $request->input('subject');
        $etherealTale->tale = $request->input('tale');
        $etherealTale->save();

        return "Success updating Ethereal Tale #" . $etherealTale->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request) {
        $etherealTale = EtherealTale::find($request->input('id'));

        $etherealTale->delete();

        return "Employee record successfully deleted #" . $request->input('id');
    }
}
