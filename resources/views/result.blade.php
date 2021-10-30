@extends('layouts.app')

@section('content')
    
<div class="row">
    <div class="col-12">
        <article class="card">
            <div class="card-body">
              <h4> El resultado es:  <strong class="text-success">{{ $result }} </strong> </h4> 
            </div>
            <div class="card-footer">
                <a href="{{ route("main") }}" class="btn btn-success">Regresar</a>
            </div>
        </article>
    </div>
</div>
@endsection