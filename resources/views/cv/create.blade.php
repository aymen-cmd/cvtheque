@extends('layouts.app')

@section('content')





<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('cvs/')}}" method="post" enctype='multipart/form-data'> 
        {{ csrf_field() }}
            <div class="form-group "  > 
            <label for="">Titre</label>
            <input  class="form-control @if($errors->get('titre')) is-invalid @endif" id="validationError" type="text" name='titre' class="form-control" value="{{old('titre')}}">
            @if($errors->get('titre'))
                @foreach($errors->get('titre') as $message)
                <li>{{$message}}</li><br>
                @endforeach
            @endif
            </div>
            </div>
            <div class="form-group"  >
            <label for="">presantation</label>
            <textarea class="form-control @if($errors->get('presentation')) is-invalid @endif" id="validationError" name = 'presentation'  >{{old('presentation')}}</textarea>
            @if($errors->get('presentation'))
                @foreach($errors->get('presentation') as $message)
                <li>{{$message}}</li><br>
                @endforeach
            @endif
            </div>

            <div class="form-group">
                <label for="">Image</label>
                <input  class="form-control"type="file" name="photo">
            </div>

           
            <div class="form-group">
            <input type="submit" name = '' class="form-control btn btn-primary" value='Enregistrer'>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection