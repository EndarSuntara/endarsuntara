@extends('layouts.app')
@section('title','halaman home')
@section('content')
<x-modaal color="success">
    KLIK
</x-modaal>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
             <div class="carousel-item active">
              <img src="gambar/1.jpg" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
              <img src="gambar/2.jpg" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
              <img src="gambar/3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
@stop