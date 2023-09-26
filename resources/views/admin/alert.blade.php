@if (session('msg'))
    <div class="alert alert-danger">{{session('msg')}}</div>
@endif

@if (session('succcess'))
    <div class="alert alert-success mt-2">{{session('succcess')}}</div>
@endif

@if (session('eror'))
    <div class="alert alert-danger">{{session('eror')}}</div>
@endif