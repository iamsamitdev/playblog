@extends('layouts.default_template')

@section('title_page')
    Home
@endsection

@section('active_home')
active
@endsection

@section('content')
   <div id="carouselId" class="carousel slide pt-5" data-ride="carousel">
       <ol class="carousel-indicators">
           <li data-target="#carouselId" data-slide-to="0" class="active"></li>
           <li data-target="#carouselId" data-slide-to="1"></li>
           <li data-target="#carouselId" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner" role="listbox">
           <div class="carousel-item active">
               <img src="images/slide/slide1.jpg">
           </div>
           <div class="carousel-item">
                <img src="images/slide/slide2.jpg">
           </div>
           <div class="carousel-item">
                <img src="images/slide/slide3.jpg">
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


   <div class="container-fluid mt-5 mb-5">
       <div class="row">
           <div class="col-lg-4 text-center">
               <img src="images/intro/intro1.jpg" class="rounded-circle">
               <h1 class="mt-3">Home</h1>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, quos voluptas asperiores ratione fugit officiis quo reprehenderit dignissimos a, illum ea, vitae magni aliquid veritatis dolores doloribus nemo odit praesentium?</p>
           </div>
           <div class="col-lg-4 text-center">
                <img src="images/intro/intro2.jpg" class="rounded-circle">
                <h1 class="mt-3">Service mind</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, quos voluptas asperiores ratione fugit officiis quo reprehenderit dignissimos a, illum ea, vitae magni aliquid veritatis dolores doloribus nemo odit praesentium?</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="images/intro/intro3.jpg" class="rounded-circle">
                <h1 class="mt-3">Contact us</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, quos voluptas asperiores ratione fugit officiis quo reprehenderit dignissimos a, illum ea, vitae magni aliquid veritatis dolores doloribus nemo odit praesentium?</p>
            </div>
       </div>
   </div>
@endsection

