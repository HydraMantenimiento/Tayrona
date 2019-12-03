@extends('theme.lte.master')

@section('title')
    Tayrona Pet Shop
@endsection

@section('content')
    @include('partials.alert')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header">
                    Listado del Comentarios
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th width="10px">Id</th>
                            <th width="50px">Estado</th>
                            <th>Usuario</th>
                            <th>Comentario</th>
                            <th width="50px">Id Blog</th>
                            <th>Titulo</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$comment->id}}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$comment->status }}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$comment->user->name}}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$comment->comment}}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$comment->blog->id}}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$comment->blog->title}}</td>
                                <td width="70px">
                                    <form action="{{route('updatecomment', [ 'id'=>$comment->id, 'blog'=> $blog])}}">
                                        <button type="submit" class="btn btn-warning btn-sm">
                                                <i class="fa fa-pencil"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


@endsection
