<div class="container">
    <br>
    <form action="/usuarios/login" method="post">
        
        <div class="form-group">
            <label for="user"><b>User</b></label>
            <input type="text" class="form-control" name="user">
        </div>
        <div class="form-group">
            <label for="senha"><b>Senha</b></label>
            <input type="password" class="form-control" name="senha">
        </div>
        <br>
        <?= csrf_field(); ?>
        <input type="submit" name="submit" class="btn btn-primary" value="Entrar">
        
    </form>
</div>