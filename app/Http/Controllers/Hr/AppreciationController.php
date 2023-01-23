<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Appreciation;
        use Illuminate\Support\Facades\DB;
        class AppreciationController extends Controller
        {        
           public function index()
            {
                $data = Appreciation::where('status','<>',-1)->get();
                return view("omis.hr.appreciation.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.appreciation.create");
            }
        
            public function store(Request $request)
            {
                Appreciation::create($request->all());
                return redirect()->route('hr.appreciation.index')->with('success','The Appreciation created Successfully.');
            }
        
            public function show($id)
            {
                $data = Appreciation::findOrFail($id);
                return view("omis.hr.appreciation.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Appreciation::findOrFail($id);
                return view("omis.hr.appreciation.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Appreciation::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.appreciation.index')->with('success','The Appreciation updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Appreciation::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Appreciation Deleted Successfully.'],200);
            }
        }
        