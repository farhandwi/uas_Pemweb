@extends('layouts.main')

@section('container')

<div class="containerSoal">
    <div class="row">
        <div class="col">
            <h3> Daftar Film </h3>
        </div>
        <div class="col">
            <div style="float: right;">
                <a class="tambahSoalBtn" href="/soal/create"> Tambah Soal </a>
            </div>
        </div>
    </div>
        <table class="tableSoal">
            <thead>
                <tr>
                    <th> [-] </th>
                    <th> No </th>
                    <th> Pertanyaan </th>
                    <th> Tipe </th>
                    <th> Opsi </th>
                    <th> Jawaban </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataSoal as $data)
                    <tr>
                        <td width="5%">
                            <input type="checkbox" name="check[]" value="{{ $data->id }}">
                        </td>
                        <td width="5%"> {{ $loop->iteration }} </td>
                        <td width="20%"> {{ $data->pertanyaan }} </td>
                        <td width="5%"> {{ $data->tipe_soal }} </td>
                        @foreach ($opsi as $op)
                            <td width="15%"> {{ $op->opsi_A }} {{ $op->opsi_B }} {{ $op->opsi_C }} {{ $op->opsi_D }}</td>
                        @endforeach
                        <td width="10%"> {{ $data->jawaban }} </td>
                        <td width="8%">
                            <form method="POST" action="/soal/{{ $data->id }}/edit">
                            @csrf
                            <button class="button" type="submit"> edit </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
        
                </tr>
            </tbody>
        </table>
</div>

@endsection