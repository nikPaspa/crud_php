<h1>Editar Usuário</h1>
<?php
$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
<input type="hidden" name="acao" value="editar">
<input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="born_date" value="<?php print $row->born_date; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
</form>