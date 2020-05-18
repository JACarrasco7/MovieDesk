    
<?php if (isset($actor_insertado) and $actor_insertado == true) {?>

<script>
    ActorInsertado()
</script>

<?php }?>

<?php if (isset($actor_editado) and $actor_editado == true) {?>

<script>
    ActorEditado()
</script>

<?php }?>

<?php if (isset($actor_eliminado) and $actor_eliminado == true) {?>

<script>
    ActorEliminado()
</script>

<?php }?>