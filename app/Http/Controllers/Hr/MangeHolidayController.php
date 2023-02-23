<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Mangeholiday;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;
        use App\Mail\CommonMail;
        use Exception;
        use Illuminate\Support\Facades\Mail;
        use Illuminate\Support\Facades\Log;


        class MangeholidayController extends Controller
        {
           public function index(Request $request)
            {
                $data = Mangeholiday::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.mangeholiday.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.mangeholiday.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.mangeholiday.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.mangeholiday.create");
            }

            public function store(Request $request)
            {

                $validator = Validator::make($request->all(), [
                  
                    'title' => 'required',
                    'eventStartDate' => 'required',
                    'eventEndDate' =>  'required',
                    'holidayDescription' => 'required',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $request->request->add(['alias' => slugify($request->mangeholidayName)]);
                //  dd($request->all());
                 $holiday = Mangeholiday::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Mangeholiday Created Successfully.'], 200);
                }
                //start
                // if (!empty($holiday->email)) {
                //     try {
                //         $mail_data = [
                //             'name' => $user->name,
                //             'subject' => 'User Login Credentials',
                //             'message' => 'your Login credentials are:',
                         
                //             'view' => 'omis.emails.credentials'
                //         ];
                //         Mail::to($user->email)->send(new CommonMail($mail_data, $user));
                //     } catch (Exception $e) {
                //         Log::info($e->getMessage());
                //     }
                // } 


// ends
                return redirect()->route('hr.mangeholiday.index')->with('success','The Mangeholiday created Successfully.');


            }

            public function show(Request $request, $id)
            {
                $data = Mangeholiday::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.mangeholiday.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.mangeholiday.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Mangeholiday::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.mangeholiday.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.mangeholiday.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                  
                    'title' => 'required',
                    'eventStartDate' => 'required',
                    'eventEndDate' =>  'required',
                    'holidayDescription' => 'required',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $data = Mangeholiday::findOrFail($id);
                $request->request->add(['alias' => slugify($request->mangeholidayName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Mangeholiday updated Successfully.'], 200);
                }
                return redirect()->route('hr.mangeholiday.index')->with('success','The Mangeholiday updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Mangeholiday::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Mangeholiday Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Mangeholiday::where('status', '<>', -1)->get();
                        return view("omis.hr.mangeholiday.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.mangeholiday.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Mangeholiday::findOrFail($id);
                        return view("omis.hr.mangeholiday.ajax.edit", compact('data'))->render();
                        break;
                    default:
                        return 'Not Found';
                }
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Mangeholiday::where('status', '<>', -1)->get();
                            $html = view("omis.hr.mangeholiday.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Mangeholiday::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Mangeholiday Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Mangeholiday::findOrFail($id);
                            $html = view("omis.hr.mangeholiday.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Mangeholiday::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Mangeholiday updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Mangeholiday::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Mangeholiday Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        