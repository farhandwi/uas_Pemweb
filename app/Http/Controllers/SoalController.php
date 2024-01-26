<?php

namespace App\Http\Controllers;

use App\Models\Opsi_jawaban;
use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Soal::all();
        $opsi = Opsi_jawaban::all();

        if(empty($data)){
            if($data[0]['tipe_soal'] == 1){
                $data[0]['tipe_soal'] = "PG";
            }else{
                $data[0]['tipe_soal'] = "isian";
    
            }
        }
    
        return view('soal.index', [
            'title' => 'Soal',
            "dataSoal" => $data,
            "opsi" => $opsi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('soal.create',[
            'title' => "create soal",
        ]);
    }

    public function uploadGambar ($file) {

        $path = 'poster/';
        $name = $file->getClientOriginalName();

        $file->move($path,$name);
        return $name;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipePertanyaan' => 'required|max:255',
            'gambar' => 'image|file|max:1024',
            'pertanyaan' => 'required',
            'opsi' => 'required',
            'jawaban' => 'required'
        ]);
        if($validatedData['tipePertanyaan'] == "PG"){
            $validatedData['tipePertanyaan'] = 1;
        }else{
            $validatedData['tipePertanyaan'] = 2;
        }

        $validatedData['gambar'] = $this->uploadGambar($request->file('gambar'));

        $createSoal = Soal::create([
            "pertanyaan" => $validatedData['pertanyaan'],
            "tipe_soal" => $validatedData['tipePertanyaan'],
            "jawaban" => $validatedData['jawaban'],
            "gambar" => $validatedData['gambar'],
        ]);
        if($validatedData['tipePertanyaan'] == 1){
            Opsi_jawaban::create([
                "soal_id" => $createSoal->id,
                "opsi_A" => $validatedData['opsi'][0],
                "opsi_B" => $validatedData['opsi'][1],
                "opsi_C" => $validatedData['opsi'][2],
                "opsi_D" => $validatedData['opsi'][3],
            ]);
        }

        return redirect('/soal')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
