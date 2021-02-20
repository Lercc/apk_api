<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>DNI</th>
        <th>NOBRE</th>
        <th>APELLIDO</th>
        <th>CELULAR</th>
        <th>CORREO</th>
        <th>CARRERA</th>
        <th>SEMESTRE</th>
        <th>INSTITUCIÓN</th>
        <th>INGLÉS</th>
        <th>PROGRAMA</th>
        <th>CANAL COM.</th>
        <th>HORARIO COM.</th>
        <th>COMENTARIO</th>
        <th>PERFIL</th>
    </tr>
    </thead>
    <tbody>
    @foreach($leads as $lead)
        <tr>
            <td>{{ $lead->id }}</td>
            <td>{{ $lead->dni}}</td>
            <td>{{ $lead->name }}</td>
            <td>{{ $lead->surnames }}</td>
            <td>{{ $lead->mobile }}</td>
            <td>{{ $lead->email }}</td>
            <td>{{ $lead->career->name}}</td>
            <td>{{ $lead->semester }}</td>
            <td>{{ $lead->institution->name}}</td>
            <td>{{ $lead->english_level }}</td>
            <td>{{ $lead->program->name }}</td>
            <td>{{ $lead->communication_channel }}</td>
            <td>{{ $lead->schedule_duration }}</td>
            <td>{{ $lead->commentary }}</td>
            <td>{{ $lead->profile }}</td>
        </tr>
    @endforeach
    </tbody>
</table>