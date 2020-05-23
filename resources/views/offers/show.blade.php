@extends('layouts.master')
@section('showOffer')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">{{__('messages.offer name')}}</th>
            <th scope="col">{{__('messages.offer price')}}</th>
            <th scope="col">{{__('messages.offer details')}}</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($offers as $offer)
            <tr>
            <th scope="row">{{$offer->id}}</th>
                <td>{{$offer->name}}</td>
                <td>{{$offer->price}}</td>
                <td>{{$offer->details}}</td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@stop
