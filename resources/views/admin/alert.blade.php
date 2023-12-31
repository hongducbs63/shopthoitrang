@if (session('msg'))
    <div class="alert alert-danger">{{session('msg')}}</div>
@endif

@if (session('success'))
    <div class="alert alert-success mt-2">{{session('success')}}</div>
@endif

@if (session('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
