<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Purchase\PO;
use App\Models\Service\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontServicesController extends Controller
{
    public function index()
    {
        $data['sps'] = User::where('userType', 'services')->where('isActive', 1)->get();
        return view('front.service.joblist.index', $data);
    }

    ### View Company Service ###
    public function showCompanyServices($id)
    {
        $data['sp'] = User::findOrFail($id);
        $data['sp_services'] = $data['sp']->services;
        $data['sp_corporate'] = $data['sp']->bdCorporate;
        $data['sp_contact'] = $data['sp']->bdContact;
        return view('front.service.company.services.index', $data);
    }

    ### Order Company Service ###
    public function orderService($id)
    {
        $service = Service::findOrFail($id);
        $data['service'] = $service;
        $data['sp'] = $service->user;
        $data['sp_id'] = $service->user->id;
        $userAcc = User::findOrFail($data['sp_id']);
        $data['sp_corporate'] = $userAcc->bdCorporate;
        $data['sp_contact'] = $userAcc->bdContact;

        return view('front.order.applying.index', $data);
    }

    public function orderStore(Request $request, $id)
    {
        $Strings='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $entah = 0;
        $lenghtSting = 5;
        $generateString = substr(str_shuffle($Strings), $entah, $lenghtSting);


        $validatedData = $request->validate([
            'fname' => ['required', 'string', 'max:255', 'min:3'],
    		'faddress' => ['required', 'string', 'max:255', 'min:3'],
    		'phone' => ['required', 'string', 'max:13', 'min:3'],
    		'ldate' => ['required', 'date'],
    		'email' => ['required', 'string', 'email', 'max:255'],
    	]);

        $service = Service::findOrFail($id);

        $po = PO::create(
            [
                'user_id' => Auth::id(),
                'service_id' => $id,
                'sp_id' => $service->user_id,
                'po_data1' => $request->ldate, ### Order Launch Date ###
                'po_data2' => 'PO_'.$generateString, ### Purchase Order Number ###
                'po_data3' => $request->fname, ### Order Name ###
                'po_data4' => $request->phone, ### Order Phone ###
                'po_data5' => $request->email, ### Order Email ###
                'po_data6' => $request->faddress, ### Order Address ###
                // 'po_data20' => $request->faddress, ### Description ###
            ]
        );

        // dd($request->all());

        return redirect()->route('po.view.pending');
    }


    ### Purchasing Service ###
    public function viewOrder(Request $request)
    {
        $data['po'] = PO::where('user_id', Auth::id());
        if ($request->is('services/order/pending')) {
            $data['pos'] = $data['po']->where('po_data14', 0)->get();
        } else
        if ($request->is('services/order/processing')) {
            $data['pos'] = $data['po']->where('po_data14', 1)->get();
        } else
        if ($request->is('services/order/finish')) {
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
    ### Purchasing Service ###

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $data['data'] = PO::findOrFail($id);
        $data['user'] = User::findOrFail($data['data']->user_id);
        $data['sp'] = User::findOrFail($data['data']->sp_id);
        $data['service'] = Service::findOrFail($data['data']->service_id);
        // dd($data['service']);
        return view('admin.purchasing.view.index', $data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        if ($request->inlineRadioOptions === 'pending') {
            $status = '0';
        } else if ($request->inlineRadioOptions === 'processing') {
            $status = '1';
        } else if ($request->inlineRadioOptions === 'finish') {
            $status = '2';
        } else if ($request->inlineRadioOptions !== 'pending' || $request->inlineRadioOptions !== 'processing' || $request->inlineRadioOptions !== 'finish') {
            return redirect()->back();
        }
        
        $data = PO::find($id);
    	$data->po_data14 = $status;
        $data->save();

        if ($status == 0) {
            return redirect()->route('po.sp.pending');
        } else if ($status == 1) {
            return redirect()->route('po.sp.processing');
        } else if ($status == 2) {
            return redirect()->route('po.sp.finish');
        }

        return redirect()->back();
        
    }

    public function payment($id)
    {
        $data['po'] = PO::findOrFail($id);
        return view('admin.purchasing.payment.upload', $data);
    }

    public function paymentStore(Request $request, $id)
    {
        $request->validate([
            'payment' => ['required', 'mimes:pdf, docx', 'max:3072'], ### in kilobytes
        ]);

        $payment = $request->payment;
        $paymentFileName = 'payment'.time().'.'.$payment->getClientOriginalExtension();
        $request->payment->move('assets/order/payment', $paymentFileName);
        
        $data = PO::find($id);
    	$data->po_data15 = $paymentFileName;
        $data->save();

        if ($data->po_data14 == 0) {
            return redirect()->route('po.sp.pending');
        } else if ($data->po_data14 == 1) {
            return redirect()->route('po.sp.processing');
        } else if ($data->po_data14 == 2) {
            return redirect()->route('po.sp.finish');
        }

        return redirect()->back();
        
    }

    public function download(Request $request, $id)
    {
        return response()->download(public_path('assets/order/payment/'.$id));
    }

    public function destroy($id)
    {
        //
    }
}
