@if (session('msg'))
    <div class="alert alert-danger">{{session('msg')}}</div>
@endif