<?php
        namespace App\Http\Controllers\Finance;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Cashdeposite;
        use Illuminate\Support\Facades\DB;
        class CashdepositeController extends Controller
        {        
           public function index()
            {
                $data = Cashdeposite::where('status','<>',-1)->get();
                return view("omis.finance.cashdeposite.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.finance.cashdeposite.create");
            }
        
            public function store(Request $request)
            {
                Cashdeposite::create($request->all());
                return redirect()->route('finance.cashdeposite.index')->with('success','The Cashdeposite created Successfully.');
            }
        
            public function show($id)
            {
                $data = Cashdeposite::findOrFail($id);
                return view("omis.finance.cashdeposite.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Cashdeposite::findOrFail($id);
                return view("omis.finance.cashdeposite.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Cashdeposite::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('finance.cashdeposite.index')->with('success','The Cashdeposite updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Cashdeposite::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Cashdeposite Deleted Successfully.'],200);
            }
        }
        