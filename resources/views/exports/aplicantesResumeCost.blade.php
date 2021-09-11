<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>DNI</th>
        <th>NOBRE</th>
        <th>APELLIDO</th>
        <th>CORREO</th>
        <th style="text-align:center;">PROGRAMA</th>
        <th style="text-align:center;">COSTO</th>
        <th style="text-align:center;">ABONO</th>
        <th style="text-align:center;">ADEUDO</th>
    </tr>
    </thead>
    <tbody>
    @foreach($aplicantes as $aplicante)
        <tr>
            <td>{{ $aplicante->id }}</td>
            <td>{{ $aplicante->dni}}</td>
            <td>{{ $aplicante->name }}</td>
            <td>{{ $aplicante->surnames }}</td>
            <td>{{ $aplicante->email }}</td>

            @foreach($aplicante->clientPrograms as $clientProgram)
                @if ( $clientProgram->season == $season)
                    <td style="width:20px; text-align:center; @if($clientProgram->program->name == 'work and travel') background: #968ece
                            @elseif($clientProgram->program->name == 'internship') background: #7fbfd8
                            @elseif($clientProgram->program->name == 'trainee') background: #7fbfd8
                            @elseif($clientProgram->program->name == 'au pair') background: #f1d390
                            @endif"
                    >
                        {{ $clientProgram->program->name }} - {{ $clientProgram->season }}
                    </td>
                    <td style="width:20px; text-align:center; background: #cee5f2"
                    >
                        {{ $clientProgram->cost }}
                    </td>
                    @php
                        $abonado = 0
                    @endphp

                    @foreach( $clientProgram->vouchers as $index => $voucher)
                        @if($voucher->state == 'verificado' && ($voucher->name != 'Entrevista de inglés' && $voucher->name != 'SEVIS'))
                            @php
                            $abonado += $voucher->amount
                            @endphp
                        @endif
                    @endforeach
                    <td style="width:20px; text-align:center; background: #B1B4B6"
                    >{{ $abonado }}</td>
                    <td style="width:20px; text-align:center; background: #D9D9D9"
                    >{{ $clientProgram->cost - $abonado }}</td>
                @endif
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>