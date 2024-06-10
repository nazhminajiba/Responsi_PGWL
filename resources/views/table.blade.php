
@extends('layouts.template')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Data Praktikan</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>    
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Najib</td>
            <td>B</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Peoz</td>
            <td>B</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Adi</td>
            <td>B</td>
        </tr>
    </tbody>
</table>
@endsection