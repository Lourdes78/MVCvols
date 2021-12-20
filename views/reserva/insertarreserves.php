<form action="index.php?controller=reserva&action=guardarreserves" method="post">

    <div class="form-group">
        <label for="data_anada">Data d'anada</label>
        <input type="date" class="form-control" id="data_anada" name="data_anada" >
    </div>
    <div class="form-group">
        <label for="contrasenya">Data de tornada</label>
        <input type="date" class="form-control" id="data_tornada" name="data_tornada">
    </div>
    <div class="form-group">
        <label for="correu">Nombre de places</label>
        <input type="text" class="form-control" id="nombre_places" name="nombre_places" >
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>