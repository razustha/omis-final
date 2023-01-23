<?php
        namespace App\Http\Controllers\Finance;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\FinanceExpenses;
        use Illuminate\Support\Facades\DB;
        class FinanceExpensesController extends Controller
        {        
           public function index()
            {
                $data = FinanceExpenses::where('status','<>',-1)->get();
                return view("omis.finance.financeexpenses.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.finance.financeexpenses.create");
            }
        
            public function store(Request $request)
            {
                FinanceExpenses::create($request->all());
                return redirect()->route('finance.financeexpenses.index')->with('success','The FinanceExpenses created Successfully.');
            }
        
            public function show($id)
            {
                $data = FinanceExpenses::findOrFail($id);
                return view("omis.finance.financeexpenses.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = FinanceExpenses::findOrFail($id);
                return view("omis.finance.financeexpenses.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = FinanceExpenses::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('finance.financeexpenses.index')->with('success','The FinanceExpenses updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = FinanceExpenses::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The FinanceExpenses Deleted Successfully.'],200);
            }
        }
        