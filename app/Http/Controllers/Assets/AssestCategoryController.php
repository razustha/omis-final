<?php
        namespace App\Http\Controllers\Assets;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Assets\AssestCategory;
        use Illuminate\Support\Facades\DB;
        class AssestCategoryController extends Controller
        {        
           public function index()
            {
                $data = AssestCategory::where('status','<>',-1)->get();
                return view("omis.assets.assestcategory.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.assets.assestcategory.create");
            }
        
            public function store(Request $request)
            {
                AssestCategory::create($request->all());
                return redirect()->route('assets.assestcategory.index')->with('success','The AssestCategory created Successfully.');
            }
        
            public function show($id)
            {
                $data = AssestCategory::findOrFail($id);
                return view("omis.assets.assestcategory.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = AssestCategory::findOrFail($id);
                return view("omis.assets.assestcategory.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = AssestCategory::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('assets.assestcategory.index')->with('success','The AssestCategory updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = AssestCategory::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The AssestCategory Deleted Successfully.'],200);
            }
        }
        