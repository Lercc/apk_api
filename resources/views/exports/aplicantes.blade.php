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
        </tr>
    @endforeach
    </tbody>
</table>