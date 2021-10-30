@extends('layouts.app')

@section('content')
<div>
    <div class="row">
        <div class="col-12">

            <form action="{{ route("sumar") }}" method="POST">
                        @csrf
                        <input type="number"  name="a" class="form-control">
                        <input type="number" name="b" class="form-control">
                        <button type="summit">Guardar</button>
                    </form>
                </div>
        </div>
    </div>
    
@endsection
   
