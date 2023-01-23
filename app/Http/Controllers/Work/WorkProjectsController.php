<?php
        namespace App\Http\Controllers\Work;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Work\WorkProjects;
        use Illuminate\Support\Facades\DB;
        class WorkProjectsController extends Controller
        {        
           public function index()
            {
                $data = WorkProjects::where('status','<>',-1)->get();
                return view("omis.work.workprojects.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.work.workprojects.create");
            }
        
            public function store(Request $request)
            {
                WorkProjects::create($request->all());
                return redirect()->route('work.workprojects.index')->with('success','The WorkProjects created Successfully.');
            }
        
            public function show($id)
            {
                $data = WorkProjects::findOrFail($id);
                return view("omis.work.workprojects.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = WorkProjects::findOrFail($id);
                return view("omis.work.workprojects.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = WorkProjects::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('work.workprojects.index')->with('success','The WorkProjects updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = WorkProjects::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The WorkProjects Deleted Successfully.'],200);
            }
        }
        