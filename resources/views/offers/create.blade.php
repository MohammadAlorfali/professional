@extends('layouts.master')
@section('offer')
<div class="content">
    <h1 class="title m-b-md" style="text-align: center; color: #003c64 ">
        Add Your Offer .
    </h1>
</div>
<br>

<div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success" style='text-align: center;' role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <form method="POST" action="{{route('offers.store')}}">
        @csrf
    {{--  <input name="_token" value="{{csrf_token()}}"> --}}
        <div class="form-group">
          <label for="Your Name">Offer Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter Your Name .">
          @error('name')
             <small class="form-text text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Offer Price</label>
          <input type="text" class="form-control" name="price" placeholder="Enter The Price">
          @error('price')
             <small class="form-text text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Offer Details</label>
          <input type="text-area" class="form-control" name="details" placeholder="Enter The Details">
          @error('details')
             <small class="form-text text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Save Offer</button>
      </form>
</div>
@stop
