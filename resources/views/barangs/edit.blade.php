@extends('barangs.layout')
 
@section('content')
 
<div class="container mt-5">
 
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data Barang
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                         @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('barangs.update', $Barang->Kode_Barang) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Kode_Barang">Kode Barang</label> 
                        <input type="text" name="Kode_Barang" class="form-control" id="Kode_Barang" value="{{ $Barang->Kode_Barang }}" aria-describedby="Kode_Barang" > 
                    </div>
                    <div class="form-group">
                        <label for="Nama_Barang">Nama Barang</label> 
                        <input type="text" name="Nama_Barang" class="form-control" id="Nama_Barang" value="{{ $Barang->Nama_Barang }}" aria-describedby="Nama_Barang" > 
                    </div>
                    <div class="form-group">
                        <label for="Kategori_Barang">Kategori Barang</label> 
                        <input type="Kategori_Barang" name="Kategori_Barang" class="form-control" id="Kategori_Barang" value="{{ $Barang->Kategori_Barang }}" aria-describedby="Kategori_Barang" > 
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label> 
                        <input type="Harga" name="Harga" class="form-control" id="Harga" value="{{ $Barang->Harga }}" aria-describedby="Harga" > 
                    </div>
                    <div class="form-group">
                        <label for="Qty">Qty</label> 
 
                        <input type="Qty" name="Qty" class="form-control" id="Qty" value="{{ $Barang->Qty }}" aria-describedby="Qty" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection