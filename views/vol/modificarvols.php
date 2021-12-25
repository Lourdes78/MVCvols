<form action="index.php?controller=vol&action=actualitzar" method="post">

    <div class="form-group">
        
        <input type="hidden" class="form-control " id="codi" name="codi" placeholder="codi" value="<?php echo $re['codi'];?>" >
    </div>
    <div class="form-group">
        <label for="origen">Origen</label>
        <input type="text" class="form-control" id="origen" name="origen" placeholder="Origen" value="<?php echo $re['origen'];?>">
    </div>
    <div class="form-group">
        <label for="desti">Desti</label>
        <input type="text" class="form-control" id="desti" name="desti" placeholder="Desti" value="<?php echo $re['desti'];?>">
    </div>
    <div class="form-group">
        <label for="preu">Preu</label>
        <input type="text" class="form-control" id="preu" name="preu" placeholder="Preu" value="<?php echo $re['preu'];?>">
    </div>
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="text" class="form-control" id="foto" name="foto" placeholder="Foto" value="<?php echo $re['foto'];?>">
    </div>
    <div class="form-group">
        <label for="nombre_places">Nombre places</label>
        <input type="text" class="form-control" id="nombre_places" name="nombre_places" placeholder="Nombre places" value="<?php echo $re['nombre_places'];?>"><br>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>