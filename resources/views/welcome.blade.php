@extends('layouts.app')

@section('content')
<div>
    <div class="row">
        <div class="col-12">
            <article class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="card-title">Sum Form</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("sumar") }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="number" placeholder="Ingresa el número a" name="a" class="form-control">
                            @error('a')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="Ingresa el número b" name="b" class="form-control">
                            @error('b')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </form>
                </div>
            </article>
        </div>
    </div>
@endsection
   
