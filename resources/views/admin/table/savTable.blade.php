@if (auth()->check() === false)
    @extends('layouts.app')

    @section('content')
        <h1 class="alert alert-danger text-center m-5">Vous n'avez rien à faire ici</h1>
    @endsection
@else
    @foreach ($savs as $sav)
        <tr>
            <td>{{ $sav->lastname }}</td>
            <td>{{ $sav->firstname }}</td>
            <td>{{ $sav->address }}</td>
            <td>{{ $sav->city }}</td>
            <td>{{ $sav->sujet }}</td>
            <td>{{ $sav->created_at }}</td>
            <td class="text-right">
                <button id="deleteSav" value="{{ $sav->id }}">
                    <i class="far fa-trash-alt"></i>
                </button>
            </td>
        </tr>
    @endforeach
@endif

