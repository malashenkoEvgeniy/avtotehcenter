<?php

namespace App\Http\Controllers\Admin;

use App\Models\FormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormRequestsController extends Controller
{
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
