@extends('layouts.main')

@section('container')
    <div class="containerSoalCreate">
        <div class="headerCreate">
            <div class="col">
                <h3> Tambah Soal </h3>
            </div>
        </div>
        <form method="POST" enctype="multipart/form-data" action="/soal">
            @csrf
            <table class="tableCreate">
                <tr>
                    <td style="width:50%">
                        <label for="inputField"> Tipe Pertanyaan </label>
                        <input type="text" id="inputField" name="tipePertanyaan" list="tipe-pertanyaan">
                        <datalist id="tipe-pertanyaan">
                            <option value="PG">
                            <option value="Isian">
                        </datalist>
                    </td>
                    <td>
                        <label> Gambar Pendukung </label>
                        <input type="file" name="gambar" accept=".jpg, .jpeg, .png" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Pertanyaan </label>
                        <textarea name="pertanyaan" required></textarea>
                    </td>
                    <td>
                        <label> Opsi </label>
                        <table>
                            <tr>
                                <td>
                                    <label for="">A</label>
                                    <input type="text" name="opsi[]" required></input>
                                </td>
                                <td>
                                    <label for="">B</label>
                                    <input type="text" name="opsi[]" required></input>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">C</label>
                                    <input type="text" name="opsi[]" required></input>
                                </td>
                                <td>
                                    <label for="">D</label>
                                    <input type="text" name="opsi[]" required></input>
                                </td>
                            </tr>
                        </table>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Jawaban </label>
                        <input type="text" name="jawaban" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="button" type="submit"> Simpan </button>
                    </td>
                </tr>
            </table>            
        </form>
    </div>
@endsection