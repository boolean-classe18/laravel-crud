<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'dresses' => Dress::all()
        ];
        return view('dresses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $new_dress = new Dress();
        // $new_dress->name = $data['name'];
        // $new_dress->description = $data['description'];
        // $new_dress->price = $data['price'];
        // $new_dress->season = $data['season'];
        // $new_dress->size = $data['size'];
        // $new_dress->color = $data['color'];
        $new_dress->fill($data);
        $new_dress->save();

        return redirect()->route('dresses.show', ['dress' => $new_dress->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dress $dress)
    {
        // SELECT * FROM dresses WHERE id = <$id>
        // $dress = Dress::find($id);
        if($dress) {
            $data = [
                'dress' => $dress
            ];
            return view('dresses.show', $data);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $dress)
    {
        if($dress) {
            $data = [
                'dress' => $dress
            ];
            return view('dresses.edit', $data);
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dress $dress)
    {
        $data = $request->all();
        $dress->update($data);
        return redirect()->route('dresses.show', ['dress' => $dress->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $dress)
    {
        $dress->delete();
        return redirect()->route('dresses.index');
    }
}
