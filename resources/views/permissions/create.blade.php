@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
        <div class="row align-items-center justify-content-start">
            <h1 class="text-left col">Berechtiung hinzufügen</h1>
        </div>
        <form action="{{ route('permissions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="col-form-label">Name</label>
                <input class="form-control" type="text" value="{{ old('name') }}" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="slug" class="col-form-label">Slug</label>
                <input class="form-control" type="text" value="{{ old('slug') }}" id="slug" name="slug">
            </div>
            <div class="form-group">
                <label for="description" class="col-form-label">Beschreibung</label>
                <input class="form-control" type="text" value="{{ old('description') }}" id="description" name="description">
            </div>
            <button type="submit" name="permissionscreate" class="btn btn-primary mt-4 pr-4 pl-4">Speichern</button>
        </form>
    </div> 
@endsection