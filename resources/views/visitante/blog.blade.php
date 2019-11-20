@extends('visitante.layouts.layout')


@section('content')

<div class="container "style="">
    <div class="row">
        <div class="ultimos-blog ml-4 my-4" style=" width:300px; height:auto; border-right:  solid #571C7C; ">
            <h3 class="titulo-blog" style=" text-align:center;">Ultimos Blogs</h3>
            @foreach($blogs as $blog)
            <div class="blog-ultimos my-2 select-blog" data-id="id{{$blog->id}}" style="  background: ; width:90%; height:60px; border-bottom: solid;  border-width: 1px;">
                <div class="row">
                    <div class="img-2 my-2 ml-3" style="  width:20%; height:45px; "><img src="{{ asset('imagenes/m.jpg') }}" alt="" style=" width:auto; height:45px; "></div>
                    <div class="my-2 ml-4" style=" background:; width:180px; height:45px; "><p class="ml-2">{{ $blog->title}}</p></div>
                </div>
            </div>
            @endforeach
          </div>
    <div class="content-blogs" style=" width:65%; height:500px;">
        @foreach($blogs as $blog)
        <div class="blog  ml-5 my-4" id="id{{$blog->id}}">
                <h1>{{$blog->title}}</h1>
                {!!$blog->body!!}
        </div>
        @endforeach
    </div>

    <hr class="p-0 m-0">
    <div class="comments-container">
		<ul id="comments-list" class="comments-list">
			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="{{ asset('imagenes/m1.jpg') }}" alt=""></div>
					<!-- Contenedor del Comentario -->
					    <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name "><a href="">jaiber vargas</a></h6>
                                    <span>hace 20 minutos</span>
                                    <i class="fa fa-reply ji"></i>
                                    <i class="fa fa-heart ji"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
					    </div>
                    </div>
                </div>
            </li>
		</ul>
    </div>

    <p class="my-2 vermas" ><link rel="stylesheet" href="">ver mas</link></p>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function () {
    $('.select-blog').click(function () {
        var id = $(this).data('id');
        console.log(id);
        $('.blog').hide();
        $('#'+ id).show();
    });
    $('.blog').hide();
    var blogs=$('.content-blogs').children().first().show();
    console.log(blogs);

});
</script>

@endsection
