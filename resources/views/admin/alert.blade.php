@if (session('msg'))
    <div class="alert alert-danger">{{session('msg')}}</div>
@endif

@if (session('success'))
    <div class="alert alert-success mt-2">{{session('success')}}</div>
@endif

@if (session('eror'))
    <div class="alert alert-danger">{{session('eror')}}</div>
@endif