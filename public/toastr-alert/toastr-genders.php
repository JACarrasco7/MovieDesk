    
<?php if (isset($genero_insertado) and $genero_insertado == true) {?>

<script>
    GeneroInsertado()
</script>

<?php }?>

<?php if (isset($genero_editado) and $genero_editado == true) {?>

<script>
    GeneroEditado()
</script>

<?php }?>

<?php if (isset($genero_eliminado) and $genero_eliminado == true) {?>

<script>
    GeneroEliminado()
</script>

<?php }?>