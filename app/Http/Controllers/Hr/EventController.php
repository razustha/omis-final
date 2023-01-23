<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Event;
        use Illuminate\Support\Facades\DB;
        class EventController extends Controller
        {        
           public function index()
            {
                $data = Event::where('status','<>',-1)->get();
                return view("omis.hr.event.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.event.create");
            }
        
            public function store(Request $request)
            {
                Event::create($request->all());
                return redirect()->route('hr.event.index')->with('success','The Event created Successfully.');
            }
        
            public function show($id)
            {
                $data = Event::findOrFail($id);
                return view("omis.hr.event.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Event::findOrFail($id);
                return view("omis.hr.event.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Event::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.event.index')->with('success','The Event updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Event::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Event Deleted Successfully.'],200);
            }
        }
        