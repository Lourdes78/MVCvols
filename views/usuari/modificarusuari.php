<form action="index.php?controller=usuari&action=actualitzar" method="post">

    <div class="form-group">
        
        <input type="hidden" class="form-control " id="codi" name="codi" placeholder="codi" value="<?php echo $re['codi'];?>" >
    </div>
    <div class="form-group">
        <label for="origen">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" value="<?php echo $re['nom'];?>">
    </div>
    <div class="form-group">
        <label for="origen">Contrasenya</label>
        <input type="text" class="form-control" id="contrasenya" name="contrasenya" placeholder="contrasenya" value="<?php echo $re['contrasenya'];?>">
    </div>
    <div class="form-group">
        <label for="desti">Correu</label>
        <input type="text" class="form-control" id="correu" name="correu" placeholder="correu" value="<?php echo $re['correu'];?>">
    </div>
    <div class="form-group">
        <label for="preu">Adreça</label>
        <input type="text" class="form-control" id="adreça" name="adreça" placeholder="adreça" value="<?php echo $re['adreça'];?>">
    </div>
    <div class="form-group">
        <label for="foto">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni" placeholder="dni" value="<?php echo $re['dni'];?>">
    </div>
    <div class="form-group">
        <label for="nombre_places">Telèfon</label>
        <input type="text" class="form-control" id="telefon" name="telefon" placeholder="telefon" value="<?php echo $re['telefon'];?>"><br>
    </div>
    <div class="form-group">
        <label for="nombre_places">Número de tarjeta</label>
        <input type="text" class="form-control" id="num_tarjeta" name="num_tarjeta" placeholder="num_tarjeta" value="<?php echo $re['num_tarjeta'];?>"><br>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>