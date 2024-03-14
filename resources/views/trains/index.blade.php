<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treni</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <h1>Tabella dei treni</h1>
        <table>
            <tr>
                <th>
                    <h3>Azienda</h3>
                </th>
                <th>
                    <h3>Stazione di partenza</h3>
                </th>
                <th>
                    <h3>Stazione di arrivo</h3>
                </th>
                <th>
                    <h3>Orario di partenza</h3>
                </th>
                <th>
                    <h3>Orario di arrivo</h3>
                </th>
                <th>
                    <h3>Codice Treno</h3>
                </th>
                <th>
                    <h3>Numero Carrozze</h3>
                </th>
                <th>
                    <h3>In orario</h3>
                </th>
                <th>
                    <h3>Cancellato</h3>
                </th>
            </tr>
            @forelse($trains as $key => $train)
            <tr>
                <td>
                    <p>{{$train['azienda']}}</p>
                </td>
                <td>
                    <p>{{$train['stazione_partenza']}}</p>
                </td>
                <td>
                    <p>{{$train['stazione_arrivo']}}</p>
                </td>
                <td>
                    <p>{{$train['orario_partenza']}}</p>
                </td>
                <td>
                    <p>{{$train['orario_arrivo']}}</p>
                </td>
                <td>
                    <p>{{$train['codice_treno']}}</p>
                </td>
                <td>
                    <p>{{$train['numero_carrozze']}}</p>
                </td>
                <td>
                    <p>{{  $train['in_orario']  }}</p>
                </td>
                <td>
                    <p>{{$train['cancellato']}}</p>
                </td>
                @empty
                <h2>Non ci sono treni</h2>
            </tr>    
            @endforelse
        </table>
    </div>
</body>
</html>
