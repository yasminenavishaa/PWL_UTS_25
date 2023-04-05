@extends('barangs.layout')

@section('content')
 <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>DATA BARANG TOKO KELONTONG MIMINE</h2>
        </div>

        <form class="form-left my-2" method="get" action="{{ route('search') }}">
                <div class="form-group w-80 mb-3">
                    <label for="search" class="d-block mr-2">Pencarian</label>
                    <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Nama Barang">
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    <a class="btn btn-success right" href="{{ route('barangs.create') }}">Input Barang</a>
                </div>
            </form>
    </div>
 </div>
 
 @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
 @endif
 
 <table class="table table-bordered">
    <tr>
        <th>Kode_Barang</th>
        <th>Nama_Barang</th>
        <th>Kategori_Barang</th>
        <th>Harga</th>
        <th>Qty</th>
        <th width="280px">Action</th>
    </tr>
 @foreach ($barangs as $Barang)
 <tr>
 
        <td>{{ $Barang->Kode_Barang }}</td>
        <td>{{ $Barang->Nama_Barang }}</td>
        <td>{{ $Barang->Kategori_Barang }}</td>
        <td>{{ $Barang->Harga }}</td>
        <td>{{ $Barang->Qty }}</td>
        <td>

            <form action="{{ route('barangs.destroy',$Barang->Kode_Barang) }}" method="POST">
 
                <a class="btn btn-info" href="{{ route('barangs.show',$Barang->Kode_Barang) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('barangs.edit',$Barang->Kode_Barang) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
 </table>
 {!! $barangs->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection