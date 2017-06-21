<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ibad = buku::all();
        return view('buku.index', compact('ibad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputt=Input::all();

        $ibad=new buku;
        $ibad->title = $inputt['title'];
        $ibad->author = $inputt['author'];

        $ibad->save();
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
        ]);
        header("Location: http://localhost/ibadusan/public/buku");
        die();

        $request->session()->flash('alert-success', 'Data berhasil disimpan');
        return redirect()->action('MahasiswaController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $ibad = buku::where('id', $id)->first();
      return view('buku.show', compact('ibad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ibad = buku::where('id', $id)->first();
        return view('buku.edit', compact('ibad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        buku::find($id)->update($data);
        return redirect()->action('BukuController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ibad = buku::find($id);
        $ibad->delete();

         header("Location: http://localhost/ibadusan/public/buku");
         die();
        $request->session()->flash('alert-success', 'Data berhasil dihapus');
        return redirect()->action('BukuController@index');
    }
    public function cetak()
    {
        $ibad = buku::all();
       return view('buku.cetak', compact('ibad'));


    }
}
