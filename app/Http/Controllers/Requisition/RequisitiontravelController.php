<?php
        namespace App\Http\Controllers\Requisition;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Requisition\Requisitiontravel;
        use Illuminate\Support\Facades\DB;
        class RequisitiontravelController extends Controller
        {        
           public function index()
            {
                $data = Requisitiontravel::where('status','<>',-1)->get();
                return view("omis.requisition.requisitiontravel.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.requisition.requisitiontravel.create");
            }
        
            public function store(Request $request)
            {
                Requisitiontravel::create($request->all());
                return redirect()->route('requisition.requisitiontravel.index')->with('success','The Requisitiontravel created Successfully.');
            }
        
            public function show($id)
            {
                $data = Requisitiontravel::findOrFail($id);
                return view("omis.requisition.requisitiontravel.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Requisitiontravel::findOrFail($id);
                return view("omis.requisition.requisitiontravel.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Requisitiontravel::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('requisition.requisitiontravel.index')->with('success','The Requisitiontravel updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Requisitiontravel::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Requisitiontravel Deleted Successfully.'],200);
            }
        }
        