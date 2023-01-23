<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Designation;
        use Illuminate\Support\Facades\DB;
        class DesignationController extends Controller
        {        
           public function index()
            {
                $data = Designation::where('status','<>',-1)->get();
                return view("omis.hr.designation.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.designation.create");
            }
        
            public function store(Request $request)
            {
                Designation::create($request->all());
                return redirect()->route('hr.designation.index')->with('success','The Designation created Successfully.');
            }
        
            public function show($id)
            {
                $data = Designation::findOrFail($id);
                return view("omis.hr.designation.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Designation::findOrFail($id);
                return view("omis.hr.designation.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Designation::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.designation.index')->with('success','The Designation updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Designation::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Designation Deleted Successfully.'],200);
            }
        }
        