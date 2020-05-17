@extends('layouts.master_template')

@section('title')Home
@endsection

@section('content')
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{asset('assets/images/sawwqqqqq4.png')}}" class="img-fluid" alt="Responsive image">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/sawwqqqqq5.png')}}" class="img-fluid" alt="Responsive image">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/sawwqqqqq6.png')}}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-home fa-3x text-success"></i>
            <h1>Home</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ipsam obcaecati consequatur delectus dicta fuga, nihil molestiae distinctio accusantium necessitatibus architecto accusamus tenetur esse officiis libero non nemo temporibus veritatis?</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-user-tie fa-3x text-info"></i>
            <h1>About us</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum cumque ut magni culpa esse corporis labore ullam fugiat, assumenda, quisquam voluptas reiciendis iusto illo in aspernatur rem sapiente. Facilis, hic?</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fab fa-product-hunt fa-3x text-primary"></i>
            <h1>Services</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci perspiciatis placeat odit aut et architecto ipsam magni amet recusandae consequatur molestias nihil nam aliquam, ullam repellat minima ratione quasi mollitia!</p>
        </div>
    </div>
</div>
@endsection