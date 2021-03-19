<?php

namespace App\Http\Controllers\Admin;

use App\Models\FormRequest;

class FormRequestsController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formRequests = FormRequest::all();
        return view('admin.form_requests.index',compact('formRequests'));
    }

    public function destroy($id)
    {
        FormRequest::destroy($id);
        return redirect()->back()->with('success', 'Запись успешно удалена');
    }

    public function update($id)
    {
        $req = FormRequest::find($id);
        $req->is_new = false;
        $req->save();
        return redirect()->back();
    }
}
