<?php
        namespace App\Http\Controllers\Finance;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Cashrequest;
        use Illuminate\Support\Facades\DB;
        class CashrequestController extends Controller
        {        
           public function index()
            {
                $data = Cashrequest::where('status','<>',-1)->get();
                return view("omis.finance.cashrequest.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.finance.cashrequest.create");
            }
        
            public function store(Request $request)
            {
                Cashrequest::create($request->all());
                return redirect()->route('finance.cashrequest.index')->with('success','The Cashrequest created Successfully.');
            }
        
            public function show($id)
            {
                $data = Cashrequest::findOrFail($id);
                return view("omis.finance.cashrequest.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Cashrequest::findOrFail($id);
                return view("omis.finance.cashrequest.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Cashrequest::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('finance.cashrequest.index')->with('success','The Cashrequest updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Cashrequest::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Cashrequest Deleted Successfully.'],200);
            }
        }
        