<?php
        namespace App\Http\Controllers\Finance;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\FinancePay;
        use Illuminate\Support\Facades\DB;
        class FinancePayController extends Controller
        {        
           public function index()
            {
                $data = FinancePay::where('status','<>',-1)->get();
                return view("omis.finance.financepay.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.finance.financepay.create");
            }
        
            public function store(Request $request)
            {
                FinancePay::create($request->all());
                return redirect()->route('finance.financepay.index')->with('success','The FinancePay created Successfully.');
            }
        
            public function show($id)
            {
                $data = FinancePay::findOrFail($id);
                return view("omis.finance.financepay.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = FinancePay::findOrFail($id);
                return view("omis.finance.financepay.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = FinancePay::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('finance.financepay.index')->with('success','The FinancePay updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = FinancePay::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The FinancePay Deleted Successfully.'],200);
            }
        }
        