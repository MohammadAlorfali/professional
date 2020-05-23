@extends('layouts.master')
@section('offer')
<div class="content">
    <h1 class="title m-b-md" style="text-align: center; color: #003c64 ">
        {{__('messages.add your offer')}}
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
          <label for="Your Name">{{__('messages.offer name ar')}}</label>
          <input type="text" class="form-control" name="name_ar" placeholder="Enter Your Name .">
          @error('name_ar')
             <small class="form-text text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="Your Name">{{__('messages.offer name en')}}</label>
          <input type="text" class="form-control" name="name_en" placeholder="Enter Your Name .">
          @error('name_en')
             <small class="form-text text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">{{__('messages.offer price')}}</label>
          <input type="text" class="form-control" name="price" placeholder="Enter The Price">
          @error('price')
             <small class="form-text text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">{{__('messages.offer details ar')}}</label>
          <input type="text-area" class="form-control" name="details_ar" placeholder="Enter The Details">
          @error('details_ar')
             <small class="form-text text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">{{__('messages.offer details en')}}</label>
          <input type="text-area" class="form-control" name="details_en" placeholder="Enter The Details">
          @error('details_en')
             <small class="form-text text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">{{__('messages.check me out')}}</label>
        </div>
        <button type="submit" class="btn btn-primary">{{__('messages.save offer')}}</button>
      </form>
</div>
@stop
