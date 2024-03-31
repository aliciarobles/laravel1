<form action="{{ route('AddLibro')}}" method="POST">

@csrf
<label for="">Titulo</label>
<input type="text" name="titulo">
<label for="">Autor</label>
<input type="text" name="autor">
<label for="">Fecha de Publicacion</label>
<input type="date" name="fechaPublicacion">
<button type="submit"> Guardar libro </button>

</form>


