@if (auth()->check() === false)



    <h1>Vous n'avez rien à faire ici</h1>

@else
    @foreach ($devis as $devi)
        <tr>
            <td>{{ $devi->lastname }}</td>
            <td>{{ $devi->firstname }}</td>
            <td>{{ $devi->address }}</td>
            <td>{{ $devi->city }}</td>
            <td>{{ $devi->postal }}</td>
            <td>{{ $devi->phone }}</td>
            <td>{{ $devi->email }}</td>
            <td>{{ $devi->sujet }}</td>
            <td>{{ $devi->created_at }}</td>
            <td class="text-right">
                <button id="deleteDevis" value="{{ $devi->id }}">
                    <i class="far fa-trash-alt"></i>
                </button>
            </td>
        </tr>
    @endforeach
@endif


