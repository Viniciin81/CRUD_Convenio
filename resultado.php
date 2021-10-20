    <?php
    require_once "conexao.php";
    $array_erro = [];
    empty($_POST['nome']) ? $array_erro['nome'] = "Campo nome não preenchido" : $nome = trim($_POST['nome']);
    empty($_POST['email']) ? $array_erro['email'] = "Campo e-mail não preenchido" : $email = trim($_POST['email']);
    empty($_POST['dtnascimento']) ? $array_erro['dtnascimento'] = "Campo data não preenchido" : $dtnascimento = trim($_POST['dtnascimento']);
    empty($_POST['salario']) ? $array_erro['salario'] = "Campo salario não preenchido" : $salario = trim($_POST['salario']);
    empty($_POST['modalidades']) ? $array_erro['modalidades'] = "Campo modalidades não preenchido" : $modalidades = trim($_POST['modalidades']);
    if (count($array_erro) > 0) {
        foreach ($array_erro as $value) {
            alertErro($value);
            echo '<br>';
        }
    } else {
        $query = "INSERT INTO cliente values(NULL, '$nome', '$email',
        '$dtnascimento', '$salario', '$modalidades', NOW())";
        $resultado = $con->query($query);
        if($resultado){
            alertSucesso('Dados informados com sucesso!');

            unset($nome, $email, $dtnascimento, $salario, $modalidades);
            $con->close();
        }else{
            alertErro('Não foi possível inserir os dados');
        }
    }



    ?>
