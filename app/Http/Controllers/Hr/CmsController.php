<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Cms;
        use Illuminate\Support\Facades\DB;
        class CmsController extends Controller
        {        
           public function index()
            {
                $data = Cms::where('status','<>',-1)->get();
                return view("omis.hr.cms.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.cms.create");
            }
        
            public function store(Request $request)
            {
                Cms::create($request->all());
                return redirect()->route('hr.cms.index')->with('success','The Cms created Successfully.');
            }
        
            public function show($id)
            {
                $data = Cms::findOrFail($id);
                return view("omis.hr.cms.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Cms::findOrFail($id);
                return view("omis.hr.cms.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Cms::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.cms.index')->with('success','The Cms updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Cms::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Cms Deleted Successfully.'],200);
            }
        }
        