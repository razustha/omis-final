<?php
        namespace App\Http\Controllers\Finance;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Advancerequest;
        use Illuminate\Support\Facades\DB;
        class AdvancerequestController extends Controller
        {        
           public function index()
            {
                $data = Advancerequest::where('status','<>',-1)->get();
                return view("omis.finance.advancerequest.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.finance.advancerequest.create");
            }
        
            public function store(Request $request)
            {
                Advancerequest::create($request->all());
                return redirect()->route('finance.advancerequest.index')->with('success','The Advancerequest created Successfully.');
            }
        
            public function show($id)
            {
                $data = Advancerequest::findOrFail($id);
                return view("omis.finance.advancerequest.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Advancerequest::findOrFail($id);
                return view("omis.finance.advancerequest.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Advancerequest::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('finance.advancerequest.index')->with('success','The Advancerequest updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Advancerequest::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Advancerequest Deleted Successfully.'],200);
            }
        }
        