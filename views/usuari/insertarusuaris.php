<h2>REGISTRE</H2>
<form action="index.php?controller=usuari&action=guardarusuaris" method="post">

    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="origen" name="nom" >
    </div>
    <div class="form-group">
        <label for="contrasenya">Contrasenya</label>
        <input type="password" class="form-control" id="contrasenya" name="contrasenya">
    </div>
    <div class="form-group">
        <label for="correu">Correu</label>
        <input type="text" class="form-control" id="correu" name="correu" >
    </div>
    <div class="form-group">
        <label for="adreça">Adreça</label>
        <input type="text" class="form-control" id="adreça" name="adreça">
    </div>
    <div class="form-group">
        <label for="dni">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni" >
    </div>
    <div class="form-group">
        <label for="telefon">Telèfon</label>
        <input type="text" class="form-control" id="telefon" name="telefon" >
    </div>
    <div class="form-group">
        <label for="num_tarjeta">Número de targeta</label>
        <input type="text" class="form-control" id="num_tarjeta" name="num_tarjeta" ><br>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>