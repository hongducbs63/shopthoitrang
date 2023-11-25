@extends('admin.main')

@section('content')
   <div>
        <ul>
            <li>Tên khách hàng: {{$customers->name}}</li>
            <li>Số điện thoại: {{$customers->phone}}</li>
            <li>Địa chỉ: {{$customers->address}}</li>
            <li>Email: {{$customers->email}}</li>
            <li>Ghi chú: {{$customers->content}}</li>
        </ul>
   </div>
   <table class="table-shopping-cart">
    <tbody>
    <tr class="table_head">
        <th class="column-1">Tên sản phẩm</th>
        <th class="column-2">Giá</th>
        <th class="column-3">Số lượng</th>
        <th class="column-4">Tổng</th>
        <th class="column-5">&nbsp;</th>
    </tr>
    @php
        $total1 = 0;
    @endphp
    @foreach($carts as $key => $cart)
        @php
            $price =  $cart->price;
            $priceEnd = $price * $cart->pty;
            $total1 =  $total1 + $priceEnd;
        @endphp
       
            <tr style="" >
                
                <td class="column-1" style="font-size: 20px">ten</td>
                <td class="column-2" style="font-size: 20px">${{ number_format($price, 0, '', '.') }}</td>
                <td class="column-3" style="font-size: 20px">{{ $cart->pty }}</td>

                <td class="column-4" style="font-size: 20px">{{ number_format($priceEnd, 0, '', '.') }}</td>
                
            </tr>
     
    @endforeach
    <tr>
        <td colspan="3"><strong>Tổng tiền</strong></td>
        <td style="font-size: 25px"><strong>{{number_format($total1, 0, '', '.')}}</strong></td>
    </tr>
    </tbody>
</table>
@endsection