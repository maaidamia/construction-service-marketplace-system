<?php

namespace App\Http\Controllers\Purchase;

use App\Http\Controllers\Controller;
use App\Models\Purchase\PO;
use App\Models\Purchase\Ticketing as PurchaseTicketing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Ticketing extends Controller
{
    public function index()
    {
        $data['data'] = PurchaseTicketing::all();
        return view('admin.tickets.index', $data);
    }

    public function create($code)
    {
        $data = PO::where('po_data2', $code)->first();
        $ticketCheck = PurchaseTicketing::where('po_code', $code)->first();
        
        if (!empty($ticketCheck)) {
            return redirect()->route('tickets.index');
        }

        $ticket = PurchaseTicketing::create(
            [
                'po_code' => $code,
                'user_id' => $data->user_id,
                'sp_id' => Auth::id(),
                'tic_data1' => "Hello, I'm Person in charge for this issue.",
                'tic_data3' => 1,
            ]
        );

        if (!$ticket) {
            return redirect()->back();
        }

        return redirect()->route('tickets.index');
    }

    public function store(Request $request)
    {
        // 
    }

    public function show($code)
    {
        $data['code'] = $code;
        $data['data'] = PurchaseTicketing::where('po_code', $code)->get();
        return view('admin.tickets.show.index', $data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function newChat($code)
    {
        // 
    }
}
