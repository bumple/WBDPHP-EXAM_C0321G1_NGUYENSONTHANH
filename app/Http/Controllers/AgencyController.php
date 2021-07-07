<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgency;
use App\Http\Requests\EditAgency;
use App\Models\Agency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AgencyController extends Controller
{
    //
    public function index()
    {
        $agencies = Agency::orderby('agency_id')->get();
        return view('index', compact('agencies'));
    }

    public function create()
    {
        return view('create');
    }


    public function store(CreateAgency $request)
    {
        $agency = new Agency();
        $agency->fill($request->all());
        $agency->save();
        Session::flash('success', 'Thêm mới agency thành công');
        $agencies = Agency::orderby('agency_id')->get();
        return redirect()->route('agency.index',compact('agencies'));
    }



    public function edit($id)
    {
        $agency = Agency::findorfail($id);
        return view('edit1', compact('agency'));
    }

    public function update($id, EditAgency $request)
    {
        $agency = Agency::find($id);
        $agency->agency_name = $request->agency_name;
        $agency->agency_id = $request->agency_id;
        $agency->agency_email = $request->agency_email;
        $agency->agency_address = $request->agency_address;
        $agency->agency_phone = $request->agency_phone;
        $agency->manager_name = $request->manager_name;
        $agency->status = $request->status;
        $agency->save();
        return redirect()->route('agency.index')->with('message','Sửa thành công');

    }

    public function delete($id)
    {
        $agency = Agency::find($id);
        $agency_name = $agency->agency_name;
        Agency::destroy($id);
        Session::flash('success', 'Xoá đại lý ' . $agency_name . ' thành công');
        return redirect()->route('agency.index');
    }

    public function search(Request $request)
    {
        $agencySearch = $request->search;
        $agencies = Agency::where('agency_name','LIKE',"%".$agencySearch."%")->orderby('agency_id')->get();
        return view('index',compact('agencies'));

    }
}
