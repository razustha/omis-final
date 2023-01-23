<?php
        namespace App\Http\Controllers\Assets;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Assets\Equipmentdemand;
        use Illuminate\Support\Facades\DB;
        class EquipmentdemandController extends Controller
        {        
           public function index()
            {
                $data = Equipmentdemand::where('status','<>',-1)->get();
                return view("omis.assets.equipmentdemand.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.assets.equipmentdemand.create");
            }
        
            public function store(Request $request)
            {
                Equipmentdemand::create($request->all());
                return redirect()->route('assets.equipmentdemand.index')->with('success','The Equipmentdemand created Successfully.');
            }
        
            public function show($id)
            {
                $data = Equipmentdemand::findOrFail($id);
                return view("omis.assets.equipmentdemand.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Equipmentdemand::findOrFail($id);
                return view("omis.assets.equipmentdemand.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Equipmentdemand::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('assets.equipmentdemand.index')->with('success','The Equipmentdemand updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Equipmentdemand::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Equipmentdemand Deleted Successfully.'],200);
            }
        }
        