<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\intrinsik;

class IntrinsikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function main()
    {
        $intrinsiks = intrinsik::orderBy('id','asc')->paginate(5);
        return view('appadmin.main',compact('intrinsiks'))
                ->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appadmin.intrinsik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'tema'=> 'required',
            'penokohan'=> 'required',
            'latar'=> 'required',
            'alur_cerita'=> 'required'
            //'gambarMahasiswa' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        intrinsik::create($request->all());
        return redirect()->route('appadmin.intrinsik.create')
                         ->with('success','Data berhasil ditambahkan');
    }

}
