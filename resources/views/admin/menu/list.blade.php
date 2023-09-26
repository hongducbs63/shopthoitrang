@extends('admin.main')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <td style="width: 50px">Id</td>
                <td>Name</td>
                <td>Active</td>
                <td>Update</td>
                <td style="width: 100px">&nbsp;</td>
            </tr>
        </thead>
        <tbody>
            {!!\App\Helpers\Helper::menu($menus)!!}
        </tbody>
    </table>
@endsection 
