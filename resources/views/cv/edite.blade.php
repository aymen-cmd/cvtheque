@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('cvs/' .$cv->id)}}" method="post"  enctype='multipart/form-data'>
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
            <div class="form-group">
            <label for="">Titre</label>
            <input type="text" name='titre' class="form-control" value='{{$cv->titre}}'>
           
            <div class="form-group">
            <label for="">presantation</label>
            <textarea name = 'presentation' class="form-control">{{$cv->presentation}}</textarea><br>
            
            </div>
            <div class="form-group">
                <label for="Image"></label>
                <input  class="form-control"type="file" name="photo">
            </div>
           
            <div class="form-group">
            <input type="submit"  class="form-control btn btn-danger" value='Modifer'>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection