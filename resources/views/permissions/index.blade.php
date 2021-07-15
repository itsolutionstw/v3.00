@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-item-center justify-content-start">
            <h1 class="text-left col">Rechte</h1>
            <a href="{{ route('permissions.create') }}" class="btn btn-primary">Hinzufügen</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Kurzname</th>
                    <th>Beschreibung</th>
                    <th>Aktionen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                <tr>
                    <th scope="row">{{ $permission->id }}</th>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->slug }}</td>
                    <td>{{ $permission->description }}</td>
                    <td class="row justify-content-center">
                        <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-primary">Bearbeiten</a>
                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ml-3" type="submit" onclick="return confirm('Soll die Berechtigung wirkliche gelöscht werden?')"
                                style="-webkit-appearance:none;">Löschen</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection