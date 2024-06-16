<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Purchase\PO;
use App\Models\Service\SCategory;
use App\Models\Service\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = User::find(Auth::id());
        $data['data'] = $data['user']->services()->get();
        
        return view('admin.panel.services.list.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $scategories['dataCat'] = SCategory::all();
        return view('admin.panel.services.create.index', $scategories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
    		'category' => 'required|integer',
    		'description' => 'required|min:3|max:255',
    		// 'gallery' => 'image|mimes:jpeg,png,jpg,gif',
    	]);

        if ($request->category !== NULL) {
            $catName = SCategory::find($request->category)->scat_data1;
        }


        // dd($catName);

        $sp = Service::create(
            [
                'user_id' => Auth::id(),
                'ser_data1' => $request->name,
                'ser_data2' => $request->category,
                'ser_data3' => $catName,
                'ser_data4' => $request->description,
                // 'ser_data5' => $request->coi, ### Gallery Id
            ]
        );

        return redirect()->route('sp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['sp'] = Service::findOrFail($id);
        $scategories['dataCat'] = SCategory::all();
        // dd($data['sp']->scategory()->get());

        return view('admin.panel.services.show.index', $scategories, $data);
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
        //
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


    ### Panel Purchasing Service -SP ###
    public function panelIndex(Request $request)
    {
        $data['po'] = PO::where('sp_id', Auth::id());

        if ($request->is('panel/purchase/service-provider/pending')) {
            $data['pos'] = $data['po']->where('po_data14', 0)->get();
        } else
        if ($request->is('panel/purchase/service-provider/processing')) {
            $data['pos'] = $data['po']->where('po_data14', 1)->get();
        } else
        if ($request->is('panel/purchase/service-provider/finish')) {
            $data['pos'] = $data['po']->where('po_data14', 2)->get();
        } else
        {
            return back()->with('warning', 'Something went wrong...');
        }

        ### If data is null ###
        if (empty($data)) {
            return back()->with('warning', 'Something went wrong...');
        }
        
        return view('admin.purchasing.master', $data);
    }
    ### Panel Purchasing Service -SP ###
}
