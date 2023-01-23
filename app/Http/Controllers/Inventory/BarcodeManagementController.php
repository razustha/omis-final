<?php
        namespace App\Http\Controllers\Inventory;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Inventory\BarcodeManagement;
        use Illuminate\Support\Facades\DB;
        class BarcodeManagementController extends Controller
        {        
           public function index()
            {
                $data = BarcodeManagement::where('status','<>',-1)->get();
                return view("omis.inventory.barcodemanagement.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.inventory.barcodemanagement.create");
            }
        
            public function store(Request $request)
            {
                BarcodeManagement::create($request->all());
                return redirect()->route('inventory.barcodemanagement.index')->with('success','The BarcodeManagement created Successfully.');
            }
        
            public function show($id)
            {
                $data = BarcodeManagement::findOrFail($id);
                return view("omis.inventory.barcodemanagement.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = BarcodeManagement::findOrFail($id);
                return view("omis.inventory.barcodemanagement.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = BarcodeManagement::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('inventory.barcodemanagement.index')->with('success','The BarcodeManagement updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = BarcodeManagement::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The BarcodeManagement Deleted Successfully.'],200);
            }
        }
        