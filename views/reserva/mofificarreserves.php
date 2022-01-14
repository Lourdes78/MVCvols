<H2>MODIFICAR RESERVA</H2>
<form action="index.php?controller=reserva&action=actualitzar" method="post">

    <div class="form-group">
        
        <input type="hidden" class="form-control " id="codi" name="codi" placeholder="codi" value="<?php echo $row['codi'];?>" >
 
        <input type="hidden" class="form-control" id="codi_vol" name="codi_vol" placeholder="codi_vol" value="<?php echo $row['codi_vol'];?>">
 
        <input type="hidden" class="form-control" id="codi_usuari" name="codi_usuari" placeholder="codi_usuari" value="<?php echo $row['codi_usuari'];?>">
    </div>
    <div class="form-group">
        <label for="data_anada">Data d'anada</label>
        <input type="date" class="form-control" id="data_anada" name="data_anada" placeholder="data_anada" value="<?php echo $row['data_anada'];?>">
    </div>
    <div class="form-group">
        <label for="data_tornada">Data de tornada</label>
        <input type="date" class="form-control" id="data_tornada" name="data_tornada" placeholder="data_tornada" value="<?php echo $row['data_tornada'];?>">
    </div>
    <div class="form-group">
        <label for="nombre_places">Nombre places</label>
        <input type="text" class="form-control" id="nombre_places" name="nombre_places" placeholder="nombre_placess" value="<?php echo $row['nombre_places'];?>"><br>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>