<?php
        namespace App\Http\Controllers\Finance;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\CreditNotes;
        use Illuminate\Support\Facades\DB;
        class CreditNotesController extends Controller
        {        
           public function index()
            {
                $data = CreditNotes::where('status','<>',-1)->get();
                return view("omis.finance.creditnotes.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.finance.creditnotes.create");
            }
        
            public function store(Request $request)
            {
                CreditNotes::create($request->all());
                return redirect()->route('finance.creditnotes.index')->with('success','The CreditNotes created Successfully.');
            }
        
            public function show($id)
            {
                $data = CreditNotes::findOrFail($id);
                return view("omis.finance.creditnotes.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = CreditNotes::findOrFail($id);
                return view("omis.finance.creditnotes.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = CreditNotes::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('finance.creditnotes.index')->with('success','The CreditNotes updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = CreditNotes::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The CreditNotes Deleted Successfully.'],200);
            }
        }
        