@extends('template/admin/index')

@section('content')

<h2>FORM INPUT PELANGGAN</h2>

<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <div class = "form-group">
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="no_hp">Alamat</label>
        <input type="text" name="address" id="address" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="no_hp">No HP</label>
        <input type="text" name="no_hp" id="no_hp" value="" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Add</button>
</form>


@endsection

