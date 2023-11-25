@extends('admin.main')

@section('content')
@include('admin.alert')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Khách Hàng</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Ngày đặt hàng</th>
            
            <th >Xem đơn hàng</th>
        </tr>
        </thead>
        <tbody>
            @foreach($customers as $key => $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->created_at }}</td>
                <td>
                    <a class="btn btn-primary btn-sm text-center" href="/admin/customer/view/{{ $customer->id }}">
                        <i class="fas fa-eye"></i>
                    </a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <div class="card-footer clearfix">
        {!! $customer->links() !!}
    </div> --}}
@endsection