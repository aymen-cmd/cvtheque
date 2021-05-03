@extends('layouts.app')

@section('content')


<div class="container" enctype='multipart/form-data' >
    <div class='col-md-12'>
            <h1>la list de mes cv </h1>
            <div class="float-end "   >
            <a   href="{{url('cvs/create')}}"><button class='btn btn-success'>nouveau cv </button></a>
</div>
<div class="card-group" style="width: 1000px; margin-left: 180px;">
@foreach($cvs as $cv)
        <div class="card" >
          
        <img src="{{asset('/storage/'.$cv->photo)}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> title</h5>
            <p class="card-text"><a href="" class="btn btn-primary" role="button">show</a>
                <a href="" class="btn btn-warning" role="button">editer</a>
                <a href="" class="btn btn-danger" role="button">suprimer</a></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
         
        @endforeach
        </div>
      </div>
    



@endsection