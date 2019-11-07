@extends('layouts.layout')


@section('content')


<div class="container" style=" width: 100vw;  height: 100vh;">
    <div class="row">
        <div class="my-3 con">
            <div class=" my-1 img-des">
                <img src="{{ asset('imagenes/m.jpg') }}" alt="" class="img-t">
            </div>
            <div class=" my-1 img-des">
                <img src="{{ asset('imagenes/m.jpg') }}" alt="" class="img-t">
            </div>
            <div class="img-des">
                <img src="{{ asset('imagenes/m.jpg') }}" alt="" class="img-t">
            </div>
        </div>
        <!-- imagen grande -->
        <div class="col-5 my-3  img-m">
            <img src="{{ asset('imagenes/m.jpg') }}" alt="" class="img-m">
        </div>
        <!-- este campo es de la descripcion -->
        <div class="col-5 my-3 img-m">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Descripcion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">usos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="my-2" style="width: auto;  height: 130px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque beatae laboriosam doloremque dignissimos atque molestias earum velit maxime deserunt nobis sed minus expedita deleniti modi libero, rem totam, cum sapiente!
                    </div>
                    <div class="" style="width: auto;  height: 150px;">
                        <!-- aca ban los botones y precio -->
                    <button type="button" class="btn btn-outline btnl">10 kg</button>
                    <button type="button" class="btn btn-outline">20 kg</button>
                    <button type="button" class="btn btn-outline">20 kg</button>
                    <p class="my-2"> Precio : $50.000</p>
                    <button type="button" class="btn btn-outline-success"><i class="fas fa-shopping-basket"></i></button>
                    <button type="button" class="btn btn-outline-success"><i class="fas fa-heart"></i></button>

                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">em ipsum dolor sit amet, consectetur adipisicing elit. Autem quisquam, iusto cumque te</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">.bhasdasbdhasjdjkash.</div>
            </div>
        </div>
        <div style="margin-left:23%;">
            <form>
                <p class="clasificacion">
                    <input id="radio1" type="radio" name="estrellas" value="5">
                    <label class="estrella" for="radio1">★</label>
                    <input id="radio2" type="radio" name="estrellas" value="4">
                    <label class="estrella" for="radio2">★</label>
                    <input id="radio3" type="radio" name="estrellas" value="3">
                    <label class="estrella" for="radio3">★</label>
                    <input id="radio4" type="radio" name="estrellas" value="2">
                    <label class="estrella" for="radio4">★</label>
                    <input id="radio5" type="radio" name="estrellas" value="1">
                    <label class="estrella" for="radio5">★</label>
                </p>
            </form>
        </div>
    </div>
    <hr class="p-0 m-0">
    <!-- Contenedor Principal -->
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
