<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Contract;
        use Illuminate\Support\Facades\DB;
        class ContractController extends Controller
        {        
           public function index()
            {
                $data = Contract::where('status','<>',-1)->get();
                return view("omis.hr.contract.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.contract.create");
            }
        
            public function store(Request $request)
            {
                Contract::create($request->all());
                return redirect()->route('hr.contract.index')->with('success','The Contract created Successfully.');
            }
        
            public function show($id)
            {
                $data = Contract::findOrFail($id);
                return view("omis.hr.contract.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Contract::findOrFail($id);
                return view("omis.hr.contract.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Contract::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.contract.index')->with('success','The Contract updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Contract::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Contract Deleted Successfully.'],200);
            }
        }
        