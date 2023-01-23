<?php
        namespace App\Http\Controllers\Requisition;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Requisition\ConvinceRequest;
        use Illuminate\Support\Facades\DB;
        class ConvinceRequestController extends Controller
        {        
           public function index()
            {
                $data = ConvinceRequest::where('status','<>',-1)->get();
                return view("omis.requisition.convincerequest.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.requisition.convincerequest.create");
            }
        
            public function store(Request $request)
            {
                ConvinceRequest::create($request->all());
                return redirect()->route('requisition.convincerequest.index')->with('success','The ConvinceRequest created Successfully.');
            }
        
            public function show($id)
            {
                $data = ConvinceRequest::findOrFail($id);
                return view("omis.requisition.convincerequest.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = ConvinceRequest::findOrFail($id);
                return view("omis.requisition.convincerequest.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = ConvinceRequest::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('requisition.convincerequest.index')->with('success','The ConvinceRequest updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = ConvinceRequest::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The ConvinceRequest Deleted Successfully.'],200);
            }
        }
        