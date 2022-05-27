<h1>Gestion de Productos</h1>

<a href="<?= base_url ?>producto/crear" class="button button-small">
    Crear Producto
</a>

<?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == 'Complete') : ?>
    <strong class="alert_green">Registro del Producto Exitoso</strong>
<?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] == 'Failed') : ?>
    <strong class="alert_red">Registro del Producto Fallido, Ingrese todos los campos</strong>
<?php endif; ?>
<?php Utils::deleteSessions('producto'); ?>

<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == 'Complete') : ?>
    <strong class="alert_green">El producto se ha borrado</strong>
<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] == 'Failed') : ?>
    <strong class="alert_red">El producto !!NO!! se ha borrado</strong>
<?php endif; ?>
<?php Utils::deleteSessions('delete'); ?>

<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th>ACCIONES</th>
    </tr>
    <?php while ($pro = $productos->fetch_object()) : ?>
        <tr>
            <td><?= $pro->id; ?></td>
            <td><?= $pro->nombre; ?></td>
            <td><?= $pro->precio; ?></td>
            <td><?= $pro->stock; ?></td>
            <td>
                <a href="<?= base_url; ?>producto/editar&id=<?= $pro->id ?>" class="button button-gestion ">Editar</a>
                <a href="<?= base_url; ?>producto/eliminar&id=<?= $pro->id ?>" class="button button-gestion button-red">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>