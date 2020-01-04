<div class="row">
    <div class="card-body">
        <table id="productores" class="table responsive table-striped table-bordered">
            <thead>
            <tr>
                <th>Productor</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productores as $productor)
                <tr>
                    <td>{{ucwords(strtolower($productor->productor_nombre))}}</td>
                    <td><a href="{{url('/productor/edit/'.$productor->productor_id)}}"
                           class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Productor</th>
                <th>Opciones</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

