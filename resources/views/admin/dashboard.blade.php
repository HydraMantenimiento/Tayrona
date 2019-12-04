@extends('theme.lte.master')
@section('title')
    Tayrona Pet Shop
@endsection

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ count($user) }}</h3>

                        <p>Usuarios</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ count($product) }}</h3>

                        <p>Productos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pricetags"></i>
                    </div>
                    <a href="{{ route('product.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{count($order)}}</h3>

                        <p>Ordenes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{ count($blog) }}</h3>

                        <p>Blogs</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-share"></i>
                    </div>
                    <a href="{{ route('blog.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="timeline">
                    <li class="time-label">
                  <span class="bg-red">
                    10 Feb. 2014
                  </span>
                    </li>
                    <li>
                        <i class="fa fa-envelope bg-blue"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                            <h3 class="timeline-header"><a href="#">Bienvenido</a> </h3>

                            <div class="timeline-body">
                                Bienvenido administrador de Tayrona
                            </div>
                            <!--<div class="timeline-footer">
                                <a class="btn btn-primary btn-xs">Read more</a>
                                <a class="btn btn-danger btn-xs">Delete</a>
                            </div>-->
                        </div>
                    </li>
                    <!--
                    <li>
                        <i class="fa fa-user bg-aqua"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-comments bg-yellow"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                            <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                            </div>
                        </div>
                    </li>

                    <li class="time-label">
                      <span class="bg-green">
                        3 Jan. 2014
                      </span>
                    </li>-->
                    <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

@endsection

