<h1>NOVO Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="born_date" class="form-control">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
</form>