@extends('theme.lte.master')

@section('title')
    Tayrona Pet Shop
@endsection

@section('content')
    @include('partials.alert')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-warning">
                <div class="box-header">
                    Modificar Blog
                    <a href="{{ route('blog.index') }}" class="btn btn-default pull-right">Regresar</a>
                </div>
                <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title' ,$blog->title)  }}">
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen Precentacion</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" value="{{ old('Imagen') }}">
                            <small class="text-danger">{{ $errors->first('imagen') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="category_blog">Categoria</label>
                            <select type="text" class="form-control" id="category_blog" name="category_blog_id"  value="{{ old('category_blog_id' ,$blog->category_blog_id) }}">
                                <option value="">Seleccione ...</option>
                                @foreach($categorys as $category)
                                    @if($category->id ==  old('category_blog_id' ,$blog->category_blog_id))
                                    <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <small class="text-danger">{{ $errors->first('category_blog_id') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="body">Curpo del Blog</label>
                            <textarea type="text" class="form-control" name="body" id="editor" >{{  old('body' ,$blog->body)  }}</textarea>
                            <small class="text-danger">{{ $errors->first('body') }}</small>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="form-group">
                            <button class="btn btn-warning pull-right">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
