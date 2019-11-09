<table  >
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Subcategoria</th>
        <th>Precio</th>
        <th>Fecha</th>
    </tr>
    </thead>
    <tbody>
    @foreach($reports as $report )ss
        <tr>
            <td>{{ $report->name }}</td>
            <td>{{ $report->descripcion }}</td>
            <td>{{ $report->product_status->name }}</td>
            <td>{{ $report->subcategory->name}}</td>
            <td>{{ $report->precio }}</td>
            <td>{{ $report->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
