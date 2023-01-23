<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DepartmentController extends Controller
{
    public function index()
    {
        $data['tableName'] = "tbl_department";
        $folder = str_replace("tbl_", "", $data['tableName']);
        $data['TableRows'] = DB::select("select * from " . $data['tableName']);
        return view("omis.$folder.list", $data);
    }
    public function create()
    {
        $data['tableName'] = "tbl_department";
        $folder = str_replace("tbl_", "", $data['tableName']);

        return view("omis.$folder.create", $data);
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
