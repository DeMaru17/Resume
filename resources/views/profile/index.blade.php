@extends('layouts.app')
@section('title','Profile Page')
@section('content')

<div class="table-responsive">
    <div class="mb-3" align="right">
        <a href="" class="btn btn-primary">Tambah Profile</a>
    </div>
    <table style="color: white" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Fullname</th>
                <th>About Me</th>
                <th>Address</th>
                <th>Harga Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            {{-- @foreach ($products as $pro ) --}}
            <tr>
                <td>{{ $no++ }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <form class="d-inline" action="" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ">Delete</button>
                    </form>
                </td>
                {{-- <td>{{$no++}}</td>
                <td>{{$pro->category->category_name}}</td>
                <td>{{$pro->product_name}}</td>
                <td>{{$pro->product_qty}}</td>
                <td>{{$pro->product_price}}</td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
@endsection
