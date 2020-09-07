<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TrackingAreaRequest;
use App\TrackingArea;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class TrackingAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TrackingArea::all();

        return view('pages.admin.tracking-area.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.tracking-area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrackingAreaRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->resi);

        TrackingArea::create($data);
        return redirect()->route('tracking-area.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = TrackingArea::findOrFail($id);

        return view('pages.admin.tracking-area.edit', [
            'item' =>$item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrackingAreaRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->resi);

        $item = TrackingArea::findOrFail($id);

        $item->update($data);

        return redirect()->route('tracking-area.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TrackingArea::findOrFail($id);
        $item->delete();

        return redirect()->route('tracking-area.index');
    }
}
