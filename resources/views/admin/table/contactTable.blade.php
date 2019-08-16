@if(auth()->check() === false)
    @extends('layouts.app')

    @section('content')
        <h1 class="alert alert-danger text-center m-5">Vous n'avez rien à faire ici</h1>
    @endsection
@else
    @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->lastname }}</td>
            <td>{{ $contact->city }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->sujet }}</td>
            <td>{{ $contact->created_at }}</td>
            <td class="text-right">
                <button id="deleteContact" value="{{ $contact->id }}">
                    <i class="far fa-trash-alt"></i>
                </button>
            </td>
        </tr>
    @endforeach
@endif


