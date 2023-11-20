@extends('admin.main')
@section('head')
     <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
@endsection
@section('content')
    @include('admin.alert')
    <form action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Tên danh mục</label>
                <input type="text" name='name' value="{{$menu->name}}" class="form-control" id="menu" placeholder="Nhập tên danh mục">
                @error('name')
                <span style="color: red">{{$message}}</span>
            
            @enderror
            </div>

            <div class="form-group">
                <label for="parent_id">Danh mục</label>
                <select class="form-control" name="parent_id">
                    <option value="0" {{$menu->parent_id == 0 ? 'selected':''}}>Danh Mục Cha</option>
                    @foreach ($menus as $menuParent)
                        <option value="{{$menuParent->id}}"
                            {{$menuParent->id == $menu->parent_id ? 'selected' : ''}}>
                            {{$menuParent->name}}
                        </option>
                        
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea name="description" class="form-control" rows="3">{{$menu->description }}
                </textarea>
            </div>


            <div class="form-group">
                <label for="content">Mô Tả Chi Tiết</label>
                <textarea name="content" id="editor" class="form-control" rows="5">
                    {{$menu->content}}
                </textarea>
            </div>

            <div class="form-group">
                <label>Kích hoạt</label>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="active" {{$menu->active == 1 ? 'checked' : ''}} id="active">
                    <label for="active" class="form-check-label">Có</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="active" {{$menu->active == 0 ? 'checked' : ''}} id="no_active">
                    <label for="no_active" class="form-check-label">Không</label>
                </div>

            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
        </div>
        @csrf
    </form>
@endsection
@section('footer')
    <script>
        // CKEDITOR.replace( 'editor1' );
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
