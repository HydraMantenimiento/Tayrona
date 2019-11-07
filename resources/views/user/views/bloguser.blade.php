@extends('layouts.layout')


@section('content')


<div class="container "style="">
    <div class="row">
        <div class="ultimos-blog ml-4 my-4" style=" width:300px; height:auto; border-right:  solid #571C7C; ">
            <h3 class="titulo-blog" style=" text-align:center;">Ultimos Blogs</h3>
            <div class="blog-ultimos my-2" style="  background: ; width:90%; height:60px; border-bottom: solid;  border-width: 1px;">
                <div class="row">
                    <div class="img-2 my-2 ml-3" style="  width:20%; height:45px; "><img src="{{ asset('imagenes/m.jpg') }}" alt="" style=" width:auto; height:45px; "></div>
                    <div class="my-2 ml-4" style=" background:; width:180px; height:45px; "><p class="ml-2">Titulo Blog</p></div>
                </div>
            </div>
            <div class="blog-ultimos my-2" style="  background: ; width:90%; height:60px; border-bottom: solid;  border-width: 1px;">
                <div class="row">
                    <div class="img-2 my-2 ml-3" style=" background:; width:20%; height:45px; "><img src="{{ asset('imagenes/m.jpg') }}" alt="" style=" width:auto; height:45px; "></div>
                    <div class="my-2 ml-4" style=" background:; width:180px; height:45px; "><p class="ml-2">Titulo Blog</p></div>
                </div>
            </div>
            <div class="blog-ultimos my-2" style="  background: ; width:90%; height:60px; border-bottom: solid;  border-width: 1px;">
                <div class="row">
                    <div class="img-2 my-2 ml-3" style=" background:; width:20%; height:45px; "><img src="{{ asset('imagenes/m.jpg') }}" alt="" style=" width:auto; height:45px; "></div>
                    <div class="my-2 ml-4" style=" background:; width:180px; height:45px; "><p class="ml-2">Titulo Blog</p></div>
                </div>
            </div>
            <div class="blog-ultimos my-2" style="  background: ; width:90%; height:60px; border-bottom: solid;  border-width: 1px;">
                <div class="row">
                    <div class="img-2 my-2 ml-3" style=" background:; width:20%; height:45px; "><img src="{{ asset('imagenes/m.jpg') }}" alt="" style=" width:auto; height:45px; "></div>
                    <div class="my-2 ml-4" style=" background:; width:180px; height:45px; "><p class="ml-2">Titulo Blog</p></div>
                </div>
            </div>
            <div class="blog-ultimos my-2" style="  background: ; width:90%; height:60px; border-bottom: solid;  border-width: 1px;">
                <div class="row">
                    <div class="img-2 my-2 ml-3" style=" background:; width:20%; height:45px; "><img src="{{ asset('imagenes/m.jpg') }}" alt="" style=" width:auto; height:45px; "></div>
                    <div class="my-2 ml-4" style=" background:; width:180px; height:45px; "><p class="ml-2">Titulo Blog</p></div>
                </div>
            </div>

        </div>
        <div class="blog  ml-5 my-4" style=" width:65%; height:500px; ">
            <div class="titulo" style=" width:100%; height:50px; ">
                <CENTER>
                    <H1>TITULO</H1>
                </CENTER>
            </div>
            <hr>
            <div class="titulo" style=" width:100%; height:75%; ">
                <div class="img-blog" style=" width:40%; height:37%; margin-left:2%; ">
                    <img src="{{ asset('imagenes/m.jpg') }}" alt="" class="" style=" width:270PX; height:150PX; " >
                </div>
                <div>
                    <p class="primero ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, ipsum dolorum deleniti eaque quae exercitationem dolor culpa distinctio! Dolore hic asperiores at ratione eos amet accusamus praesentium ducimus. Autem, perferendis!</p>
                </div>
                <p class="segundo ml-1 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, excepturi! Quam libero ut maiores praesentium illo, in delectus vel harum quae sapiente corrupti expedita nobis nihil magnam explicabo beatae ipsum!</p>
            </div>
            <div class="titulo" style=" border-color:purple;  border-width: 1px; width:100%; height:25px; ">
                <CENTER>
                    <p>ver mas</p>
                </CENTER>
            </div>
        </div>
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
            </li>
		</ul>
	</div>
    <p class="my-2 vermas" ><link rel="stylesheet" href="">ver mas</link></p>

</div>


@endsection
