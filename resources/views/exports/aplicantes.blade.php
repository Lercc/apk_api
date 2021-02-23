<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>DNI</th>
        <th>NOBRE</th>
        <th>APELLIDO</th>
        <th>CELULAR</th>
        <th>CORREO</th>
        <th>PERFIL</th>
        <th>COMENTARIO</th>
        <th>PROGRAMAS</th>
    </tr>
    </thead>
    <tbody>
    @foreach($aplicantes as $aplicante)
        <tr>
            <td>{{ $aplicante->id }}</td>
            <td>{{ $aplicante->dni}}</td>
            <td>{{ $aplicante->name }}</td>
            <td>{{ $aplicante->surnames }}</td>
            <td>{{ $aplicante->mobile }}</td>
            <td>{{ $aplicante->email }}</td>
            <td>{{ $aplicante->profile }}</td>
            <td>{{ $aplicante->commentary }}</td>
            
            @foreach($aplicante->clientPrograms as $clientProgram)
            <td style="width:20px; text-align:center; @if($clientProgram->program->name == 'work and travel') background: #968ece
                    @elseif($clientProgram->program->name == 'internship') background: #7fbfd8
                    @elseif($clientProgram->program->name == 'trainee') background: #7fbfd8
                    @elseif($clientProgram->program->name == 'au pair') background: #f1d390
                    @endif"
            >
                {{ $clientProgram->program->name }} - {{ $clientProgram->season }}
            </td>

                @foreach( $clientProgram->vouchers as $index => $voucher)
                <td style="width:20px; text-align:center;  @if($index%2  == 0) background: #D9D9D9
                        @else background: #B1B4B6
                        @endif"
                >{{ $voucher->name }}</td>  
               
                <td style="width:20px; text-align:center; @if($index%2  == 0) background: #D9D9D9
                        @else background: #B1B4B6
                        @endif"
                >{{ $voucher->code }}</td>  
               
                <td style="width:20px; text-align:center; @if($index%2  == 0) background: #D9D9D9
                        @else background: #B1B4B6
                        @endif"
                >{{ $voucher->amount }}</td>  
                @endforeach
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>