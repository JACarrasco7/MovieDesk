<?php if (isset($administrador_insertado) and $administrador_insertado == true) {?>

<script>
    AdministradorInsertado()
</script>

<?php }?>

<?php if (isset($administrador_editado) and $administrador_editado == true) {?>

<script>
    AdministradorEditado()
</script>

<?php }?>

<?php if (isset($administrador_eliminado) and $administrador_eliminado == true) {?>

<script>
    AdministradorEliminado()
</script>

<?php }?>