<?php

namespace App\Http\Controllers;

use App\DataPersonal;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DataPersonal::orderBy('id', 'DESC')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'tgl' => 'required',
            'name' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'lama_bekerja' => 'required',
            'last_education' => 'required',
            'work_experiences_place1' => 'required',
            'work_experiences_tgl1' => 'required',
            'work_experiences_description1' => 'required',
            'skill' => 'required',
            'languange' => 'required',
            'job_lists' => 'required',
            'job_group' => 'required',
            'status' => 'required',
        ]);

        $post = DataPersonal::create([
            $filename = $request->file('dokumen_cv')->getClientOriginalName(),
            $request->dokumen_cv->move(storage_path('app/dokumen'), $filename),
            'tgl' => $request->get('tgl'),
            'name' => $request->get('name'),
            'alamat' => $request->get('alamat'),
            'email' => $request->get('email'),
            'telp' => $request->get('telp'),
            'last_education' => $request->get('last_education'),
            'lama_bekerja' => $request->get('lama_bekerja'),
            'work_experiences_place1' => $request->get('work_experiences_place1'),
            'work_experiences_tgl1' => $request->get('work_experiences_tgl1'),
            'work_experiences_description1' => $request->get('work_experiences_description1'),
            'skill' => $request->get('skill'),
            'languange' => $request->get('languange'),
            'certified' => $request->get('certified'),
            'job_lists' => $request->get('job_lists'),
            'job_group' => $request->get('job_group'),
            'status' => $request->get('status'),
            'dokumen_cv' => $filename,
        ]);

        return redirect()->route('post.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataPersonal  $datapersonal
     * @return \Illuminate\Http\Response
     */
    public function show(DataPersonal $datapersonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataPersonal  $datapersonal
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPersonal $datapersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataPersonal  $datapersonal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPersonal $datapersonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataPersonal  $datapersonal
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPersonal $datapersonal)
    {
        //
    }
}
