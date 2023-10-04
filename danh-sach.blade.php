@extends('home')
@section('content')
    <h1>DANH SÁCH Khách Hàng</h1>
    
    <a href="{{route('khach-hang.them-moi')}}"><button type="button" class="btn btn-primary">Thêm mới</button></a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</td>
                <th>TÊN Khách Hàng</th>
                <th>Địa chỉ khách hàng</th>
                <th>SỐ điện thoại khách hàng</th>
                <th>Eamil</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
@foreach($dsKhachHang as $KhachHang)
            <tr>
                <td> {{ $KhachHang->id }}</td>
                <td>{{ $KhachHang->ten_kh }}</td>
                <td>{{ $KhachHang->dia_chi_kh }}</td>
                <td>{{ $KhachHang->sdt_kh }}</td>
                <td>{{ $KhachHang->email }}</td>
                <td>
                <a href="{{route('khach-hang.xl-cap-nhat',['id'=>$KhachHang->id])}}"><button type="button" class="btn btn-warning">Edit</button></a> | <a href="{{route('khach-hang.xoa',['id'=>$KhachHang->id])}}"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            <tr>
 @endforeach
        </tbody>
    </table>
@endsection
