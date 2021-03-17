<?php

namespace App\Http\Controllers\Admin;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends BaseController
{
    protected $storePath = '/uploads/certificate/';
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
        $certificates = Certificate::paginate(10);
        return view('admin.certificate.index', compact('certificates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        if (request()->file('url') !== null) {
            foreach (request()->file('url') as $item) {

                $file = $this->storeFile($item, $this->storePath);
                Certificate::create(['url' => $file['path']]);
            }
        }


        return redirect()->route('certificate.index')->with('success', 'Запись успешно создана');
    }



    public function destroy($id)
    {

        Certificate::destroy($id);
        return redirect()->route('certificate.index')->with('success', 'Категория удалена');
    }
}
