<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Employeelist;
        use Illuminate\Support\Facades\DB;
        class EmployeelistController extends Controller
        {        
           public function index()
            {
                $data = Employeelist::where('status','<>',-1)->get();
                return view("omis.hr.employeelist.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.employeelist.create");
            }
        
            public function store(Request $request)
            {
                Employeelist::create($request->all());
                return redirect()->route('hr.employeelist.index')->with('success','The Employeelist created Successfully.');
            }
        
            public function show($id)
            {
                $data = Employeelist::findOrFail($id);
                return view("omis.hr.employeelist.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Employeelist::findOrFail($id);
                return view("omis.hr.employeelist.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Employeelist::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.employeelist.index')->with('success','The Employeelist updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Employeelist::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Employeelist Deleted Successfully.'],200);
            }
        }
        