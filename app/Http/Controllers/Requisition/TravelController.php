<?php
        namespace App\Http\Controllers\Requisition;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Requisition\Travel;
        use Illuminate\Support\Facades\DB;
        class TravelController extends Controller
        {        
           public function index()
            {
                $data = Travel::where('status','<>',-1)->get();
                return view("omis.requisition.travel.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.requisition.travel.create");
            }
        
            public function store(Request $request)
            {
                Travel::create($request->all());
                return redirect()->route('requisition.travel.index')->with('success','The Travel created Successfully.');
            }
        
            public function show($id)
            {
                $data = Travel::findOrFail($id);
                return view("omis.requisition.travel.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Travel::findOrFail($id);
                return view("omis.requisition.travel.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Travel::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('requisition.travel.index')->with('success','The Travel updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Travel::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Travel Deleted Successfully.'],200);
            }
        }
        