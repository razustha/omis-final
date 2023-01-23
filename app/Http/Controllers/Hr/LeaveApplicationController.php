<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\LeaveApplication;
        use Illuminate\Support\Facades\DB;
        class LeaveApplicationController extends Controller
        {        
           public function index()
            {
                $data = LeaveApplication::where('status','<>',-1)->get();
                return view("omis.hr.leaveapplication.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.leaveapplication.create");
            }
        
            public function store(Request $request)
            {
                LeaveApplication::create($request->all());
                return redirect()->route('hr.leaveapplication.index')->with('success','The LeaveApplication created Successfully.');
            }
        
            public function show($id)
            {
                $data = LeaveApplication::findOrFail($id);
                return view("omis.hr.leaveapplication.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = LeaveApplication::findOrFail($id);
                return view("omis.hr.leaveapplication.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = LeaveApplication::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.leaveapplication.index')->with('success','The LeaveApplication updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = LeaveApplication::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The LeaveApplication Deleted Successfully.'],200);
            }
        }
        