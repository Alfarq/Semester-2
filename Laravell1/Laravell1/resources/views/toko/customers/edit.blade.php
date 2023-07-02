@extends('template/admin/index')
@section('content')
<h2>Edit Pelanggan</h2>
<form action="{{ route('customers.update', $customers) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $customers->name }}">
    </div>
    <div class="form-group">
        <label for="address">Alamat:</label>
        <input type="text" name="address" id="address" class="form-control" value="{{ $customers->address }}">
    </div>
    <div class="form-group">
        <label for="no_hp">No Hp:</label>
        <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $customers->no_hp }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection