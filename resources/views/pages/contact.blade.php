@extends('layouts.app')
@section('title','halaman contact')
@section('content')
    <x-modaal color="dark">
        TEKAN
    </x-modaal>
    
    <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-success text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Add or Invite me if you want to play with me! Follow my social media for any information</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item "><h3>Social Media</h3></li>
              <li class="list-group-item fa fa-instagram"> @endarrrrr</li>
              <li class="list-group-item fa fa-twitter"> @endarsuntara</li>
              <li class="list-group-item fa fa-facebook"> Endar Snntara</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Name</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-success btn-">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
@stop