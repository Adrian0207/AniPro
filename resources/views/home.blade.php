@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menú</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="button"><a href="/adopcion">Adopción</a></button>
                    <button type="button"><a href="/donacion">Donación</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
