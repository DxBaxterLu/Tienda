<!-- barra lateral -->
<aside id="lateral">
    <div id="login" class="block_aside">
        <?php if (!isset($_SESSION['identity'])) : ?>
            <h3>Ingresa a la Web</h3>
            <form action="<?= base_url ?>usuario/login" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Enviar">
            </form>
        <?php else : ?>
            <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
        <?php endif; ?>
        <ul>
            <li><a href="#">Mis Pedidos</a></li>
            <li><a href="#">Gestionar Pedidos</a></li>
            <li><a href="#">Gestionar Categorias</a></li>
        </ul>
    </div>
</aside>

<!-- contenido centrarl -->
<div id="central">