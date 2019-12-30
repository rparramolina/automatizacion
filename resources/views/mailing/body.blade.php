<form method="post" action="{{url('/productor/update/'.$id)}}">
    <div class="form-group">
        @csrf
        <label for="mailing_list">Lista de correos</label>
        <textarea class="form-control input" placeholder="Ingrese las direcciones de correo separados por punto y coma(;)" id="mailing_list" name="mailing_list" rows="3">{!! $mailing_list !!}</textarea>
    </div>
    <button class="btn btn-primary glyphicon glyphicon-edit" type="submit">Guardar</button>


</form>
