<?php
    switch(@$_REQUEST["acao"])
    {
        case "cadastrar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nascimento = $_POST["data_nascimento"];

            $sql = "INSERT INTO tb_usuarios (nome , email , senha , data_nascimento) VALUES ('{$nome}' , '{$email}' , '{$senha}' , '{$data_nascimento}')";

            $res = $conn -> query($sql);

            if ($res==true)
            {
                print "<script>alert('Cadastro realizado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
				$conn->close();
            }
            else
            {
                print "<script>alert('Não foi possível inserir os dados!');</script>";
                print "<script>location.href='?page=listar';</script>"; 
				$conn->close();
            }
			
        break;

        case "editar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nascimento = $_POST["data_nascimento"];

            $sql = "UPDATE tb_usuarios SET 
                    nome='{$nome}',
                    email='{$email}',
                    senha='{$senha}',
                    data_nascimento='{$data_nascimento}'
                WHERE
                    id=".$_REQUEST["id"];
                
            $res = $conn -> query($sql);            

            if ($res==true)
            {
                print "<script>alert('Dados editados com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
				$conn->close();
            }
            else
            {
                print "<script>alert('Não foi possível editar os dados!');</script>";
                print "<script>location.href='?page=listar';</script>"; 
				$conn->close();
            }
        break;

        case "excluir":
            
            $sql = "DELETE FROM tb_usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn -> query($sql); 

            if ($res==true)
            {
                print "<script>alert('Dados excluídos com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
				$conn->close();
            }
            else
            {
                print "<script>alert('Não foi possível excluir os dados!');</script>";
                print "<script>location.href='?page=listar';</script>"; 
				$conn->close();
            }
        break;
    }
?>