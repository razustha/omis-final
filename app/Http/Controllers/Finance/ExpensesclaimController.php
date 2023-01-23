<?php
        namespace App\Http\Controllers\Finance;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Expensesclaim;
        use Illuminate\Support\Facades\DB;
        class ExpensesclaimController extends Controller
        {        
           public function index()
            {
                $data = Expensesclaim::where('status','<>',-1)->get();
                return view("omis.finance.expensesclaim.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.finance.expensesclaim.create");
            }
        
            public function store(Request $request)
            {
                Expensesclaim::create($request->all());
                return redirect()->route('finance.expensesclaim.index')->with('success','The Expensesclaim created Successfully.');
            }
        
            public function show($id)
            {
                $data = Expensesclaim::findOrFail($id);
                return view("omis.finance.expensesclaim.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Expensesclaim::findOrFail($id);
                return view("omis.finance.expensesclaim.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Expensesclaim::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('finance.expensesclaim.index')->with('success','The Expensesclaim updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Expensesclaim::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Expensesclaim Deleted Successfully.'],200);
            }
        }
        