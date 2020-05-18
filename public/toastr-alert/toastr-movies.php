    
<?php if (isset($pelicula_insertada) and $pelicula_insertada == true) {?>

<script>
    PeliculaInsertada()
</script>

<?php }?>

<?php if (isset($pelicula_editada) and $pelicula_editada == true) {?>

<script>
    PeliculaEditada()
</script>

<?php }?>

<?php if (isset($pelicula_eliminada) and $pelicula_eliminada == true) {?>

<script>
    PeliculaEliminada()
</script>

<?php }?>