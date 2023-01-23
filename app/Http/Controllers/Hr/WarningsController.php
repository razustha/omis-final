<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Warnings;
        use Illuminate\Support\Facades\DB;
        class WarningsController extends Controller
        {        
           public function index()
            {
                $data = Warnings::where('status','<>',-1)->get();
                return view("omis.hr.warnings.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.warnings.create");
            }
        
            public function store(Request $request)
            {
                Warnings::create($request->all());
                return redirect()->route('hr.warnings.index')->with('success','The Warnings created Successfully.');
            }
        
            public function show($id)
            {
                $data = Warnings::findOrFail($id);
                return view("omis.hr.warnings.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Warnings::findOrFail($id);
                return view("omis.hr.warnings.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Warnings::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.warnings.index')->with('success','The Warnings updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Warnings::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Warnings Deleted Successfully.'],200);
            }

            
        }
        