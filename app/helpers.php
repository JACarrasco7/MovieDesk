<?php

function AsignarClaseActive($nombreRuta)
{
    return request()->routeIs($nombreRuta) ? 'link-active' : '';
}

?>

    <?php if (isset($insertada) and $insertada == true) {?>

    <script>
        PeliculaInsertada()
    </script>

    <?php }?>

    <?php if (isset($editada) and $editada == true) {?>

    <script>
        PeliculaEditada()
    </script>

    <?php }?>

    <?php if (isset($eliminada) and $eliminada == true) {?>

    <script>
        PeliculaEliminada()
    </script>

    <?php }?>