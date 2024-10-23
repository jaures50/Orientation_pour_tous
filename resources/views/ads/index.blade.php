@extends('layouts.app')

@section('content')
    <h1>Liste des publicités</h1>
    <a href="{{ route('ads.create') }}">Ajouter une publicité</a>
    <table>
        <tr>
            <th>Titre</th>
            <th>Image</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
        @foreach ($ads as $ad)
            <tr>
                <td>{{ $ad->title }}</td>
                <td><img src="{{ asset('storage/' . $ad->image) }}" alt="{{ $ad->title }}" width="100"></td>
                <td>{{ $ad->position }}</td>
                <td>
                    <a href="{{ route('ads.edit', $ad) }}">Modifier</a>
                    <form action="{{ route('ads.destroy', $ad) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
