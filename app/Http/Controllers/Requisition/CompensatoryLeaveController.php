<?php
        namespace App\Http\Controllers\Requisition;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Requisition\CompensatoryLeave;
        use Illuminate\Support\Facades\DB;
        class CompensatoryLeaveController extends Controller
        {        
           public function index()
            {
                $data = CompensatoryLeave::where('status','<>',-1)->get();
                return view("omis.requisition.compensatoryleave.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.requisition.compensatoryleave.create");
            }
        
            public function store(Request $request)
            {
                CompensatoryLeave::create($request->all());
                return redirect()->route('requisition.compensatoryleave.index')->with('success','The CompensatoryLeave created Successfully.');
            }
        
            public function show($id)
            {
                $data = CompensatoryLeave::findOrFail($id);
                return view("omis.requisition.compensatoryleave.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = CompensatoryLeave::findOrFail($id);
                return view("omis.requisition.compensatoryleave.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = CompensatoryLeave::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('requisition.compensatoryleave.index')->with('success','The CompensatoryLeave updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = CompensatoryLeave::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The CompensatoryLeave Deleted Successfully.'],200);
            }
        }
        