<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\BD\Contact;
use App\Models\BD\Corporate;
use App\Models\BD\Document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Support\Facades\Storage;


class BusinessDetailsController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.site.services.businessDetails.form');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        if ($request->form == 'contact') {
            $request->validate([
                'primary_1' => ['required', 'string', 'max:255', 'min:3'],
                'department_1' => ['required', 'string', 'max:255', 'min:3'],
                'telephone_1' => ['required', 'string', 'max:13', 'min:3'],
                'email_1' => ['required', 'string', 'email', 'max:255'],
                'secondary_2' => ['max:255'],
                'department_2' => ['max:255'],
                'telephone_2' => [ 'max:13'],
                'email_2' => ['max:255'],
            ]);
            
            $bdContact = Contact::updateOrCreate(
                ['user_id' =>  Auth::id()],
                [
                    'user_id' => Auth::id(),
                    'bdcon_data1' => $request->primary_1,
                    'bdcon_data2' => $request->department_1,
                    'bdcon_data3' => $request->telephone_1,
                    'bdcon_data4' => $request->email_1,
                    'bdcon_data5' => $request->secondary_2,
                    'bdcon_data6' => $request->department_2,
                    'bdcon_data7' => $request->telephone_2,
                    'bdcon_data8' => $request->email_2,
                ],
            );

            if ($bdContact) {
                return redirect()->route('bd');
            }

        } else if ($request->form == 'corporate') {
            $request->validate([
                'cname' => ['required', 'string', 'max:255', 'min:3'],
                'oname' => ['required', 'string', 'max:255', 'min:3'],
                'rnumber' => ['required', 'string', 'max:255', 'min:3'],
                'trnumber' => ['required', 'string', 'max:255', 'min:3'],
                'coi' => ['required', 'string', 'max:255', 'min:3'],
                'doi' => ['required', 'date'],
                'cs' => ['required', 'string', 'max:255', 'min:3'],
                'noemp' => ['required', 'string', 'max:255'],
                'nalb' => ['required', 'string', 'max:255', 'min:3'],
                'website' => ['required', 'string', 'max:255', 'min:3'],
                'raddress' => ['required', 'string', 'max:255', 'min:3'],
                'baddress' => ['required', 'string', 'max:255', 'min:3'],
                
                'telephone_1' => ['required', 'string', 'max:13', 'min:3'],
                'email_1' => ['required', 'string', 'email', 'max:255'],
                
                'branch' => ['required', 'string', 'max:255', 'min:3'],
                'badress' => ['required', 'string', 'max:255', 'min:3'],
            ]);
            
            $bdCorporate = Corporate::updateOrCreate(
                ['user_id' =>  Auth::id()],
                [
                    'user_id' => Auth::id(),
                    'bdcor_data1' => $request->cname,
                    'bdcor_data2' => $request->oname,
                    'bdcor_data3' => $request->rnumber,
                    'bdcor_data4' => $request->trnumber,
                    'bdcor_data5' => $request->coi,
                    'bdcor_data6' => $request->doi,
                    'bdcor_data7' => $request->cs,
                    'bdcor_data8' => $request->noemp,
                    'bdcor_data9' => $request->nalb,
                    'bdcor_data10' => $request->website,
                    'bdcor_data11' => $request->raddress,
                    'bdcor_data12' => $request->baddress,
                    'bdcor_data13' => $request->telephone_1,
                    'bdcor_data14' => $request->email_1,
                    'bdcor_data15' => $request->branch,
                    'bdcor_data16' => $request->badress,
                ],
            );

            if ($bdCorporate) {
                return redirect()->route('bd');
            }
        } else if ($request->form == 'document') {
            $request->validate([
                'ssm' => ['required', 'mimes:pdf,docx', 'max:3072'], ### in kilobytes
                'cert' => ['required', 'mimes:pdf,docx', 'max:3072'], ### in kilobytes
            ]);
            // dd($request->all());

            $ssm = $request->ssm;
            $ssmFileName = 'ssm'.time().'.'.$ssm->getClientOriginalExtension();
            // $ssmPath = 'assets/sp/bussines-details/'.$ssmFileName;
            $request->ssm->move('assets/sp/bussines-details', $ssmFileName);

            $cert = $request->cert;
            $certFileName = 'certificate'.time().'.'.$cert->getClientOriginalExtension();
            // $certPath = 'assets/sp/bussines-details/'.$certFileName;
            $request->cert->move('assets/sp/bussines-details', $certFileName);

            $bdDocument = Document::updateOrCreate(
                ['user_id' =>  Auth::id()],
                [
                    'user_id' => Auth::id(),
                    'bddoc_data1' => $ssmFileName,
                    'bddoc_data2' => $certFileName,
                ],
            );

            if ($bdDocument) {
                return redirect()->route('bd');
            }
        }
    }
    
    public function show(Request $request, $id)
    {
        if ($request->is('business-details/contact/view/'.$id)) {
            $data = Contact::findOrFail($id);

            return view('admin.dashboard.site.services.businessDetails.view.contact.index', compact('data'));
        } else
        if ($request->is('business-details/corporate/view/'.$id)) {
            $data = Corporate::findOrFail($id);

            return view('admin.dashboard.site.services.businessDetails.view.coporate.index', compact('data'));
        }
        if ($request->is('business-details/document/view/'.$id)) {
            $data = Document::findOrFail($id);

            return view('admin.dashboard.site.services.businessDetails.view.document.index', compact('data'));
        }
    }

    public function download(Request $request, $id)
    {
        return response()->download(public_path('assets/sp/bussines-details/'.$id));
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

    public function new_register()
    {
        $users['data'] = User::where('userType', 'services')->get();
        return view('admin.panel.businessDetails.new_register.index', $users);
    }

    public function new_register_view($id)
    {
        $user = User::findOrFail($id);
        $contact = $user->bdContact;
        $corporate = $user->bdCorporate;
        $document = $user->bdDocument;
        if ($contact === NULL || $corporate === NULL || $document === NULL ) {
            return redirect()->back();
        }

        return view('admin.panel.businessDetails.view.index', compact('user', 'contact', 'corporate', 'document'));
    }

    public function new_register_verify(Request $request, $id)
    {
        $data = User::find($id);

        if ($request->status === 'on') {
            $status = '1';
            $data->isActive = $status;
            $data->save();
        } else if (!$request->status) {
            $status = '0';
            $data->isActive = $status;
            $data->save();
        }

        return redirect()->route('admin.bd');
        
    }

    public function sp_form_view($id)
    {
        $user = User::findOrFail($id);
        $contact = $user->bdContact;
        $corporate = $user->bdCorporate;
        if ($contact === NULL ) {
            $data['contact'] = $contact;
        } else if ( $corporate === NULL) {
            $data['corporate'] = $corporate;
        }

        return view('admin.panel.businessDetails.sp_view.index', compact('user', 'contact', 'corporate'));
    }
}
