<main class = "shadow-lg py-3 px-md-5 mb-5 bg-white text-dark rounded border">
<?php
    if(isset($_POST['submit']))
        require_once "resultado.php";
?>
<form action="#" method="post">
<div class="form-row">
    <div class="form-group col-md-8">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value = "<?= isset($nome)?$nome:'' ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control" id="email" value = "<?= isset($email)?$email:'' ?>">
    </div>

</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="dtnascimento">Data de Nascimento</label>
        <input type="date" class="form-control" name="dtnascimento" id="dtnascimento" value = "<?= isset($dtnascimento)?$dtnascimento:'' ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="salario">Salário</label>
        <input type="text" name="salario" class="form-control" placeholder="0000,00" id="salario" value = "<?= isset($salario)?$salario:'' ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="modalidades">Modalidades</label>
        <input type="number" name="modalidades" class="form-control" id="modalidades" value = "<?= isset($modalidades)?$modalidades:'' ?>">
    </div>

</div>
<div class="form-row">
    <input type="submit" name="submit" class="btn btn-primary text-center" value="Enviar">
</div>


</form>

</main>