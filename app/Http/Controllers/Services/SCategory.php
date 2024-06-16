<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Service\SCategory as ServiceSCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ServiceSCategory::all();
        return view('admin.panel.services_category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.panel.services_category.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|min:3',
    	]);

        if ($request->status === 'on') {
            $status = '1';
        } else if (!$request->status) {
            $status = '0';
        }

        $sp_cat = ServiceSCategory::create(
            [
                'scat_data1' => $request->name,
                'scat_data2' => Auth::id(),
                'scat_data3' => $status
            ]
        );

        return redirect()->route('sp.scat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data'] = ServiceSCategory::findOrFail($id);
        return view('admin.panel.services_category.view.index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'name' => 'required|min:3',
    	]);

        if ($request->status === 'on') {
            $status = '1';
        } else if (!$request->status) {
            $status = '0';
        }

        $data = ServiceSCategory::find($id);
    	$data->scat_data1 = $request->name;
    	$data->scat_data2 = Auth::id();
        $data->scat_data3 = $status;
        $data->save();

        return redirect()->route('sp.scat.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
