<h1>Listar Usuários:</h1>
<?php
    $sql = "SELECT * FROM tb_usuarios";

    $res = $conn -> query($sql);

    $qtd = $res -> num_rows;

    if($qtd > 0)
    {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-Mail</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";

        while($row = $res -> fetch_object())
        {
            print "<tr>";
            print "<td>".$row -> id."</td>";
            print "<td>".$row -> nome."</td>";
            print "<td>".$row -> email."</td>";
            print "<td>".$row -> data_nascimento."</td>";
            print "<td>
                  <button onclick=\"location.href='?page=editar&id=".$row -> id."';\"class='btn btn-success'>Editar</button>
                  <button onclick=\"if(confirm('Tem certeza que deseja excluir o registro?'))
                                    {
                                        location.href='?page=salvar&acao=excluir&id=".$row -> id."';
                                    }
                                    else
                                    {
                                        false;
                                    }\" class='btn btn-danger'>Excluir</button>
                  </td>";
            print "</tr>";            
        }
        print "</table>";
    }
    else
    {
        print "<p class='alert alert-danger'>Resultado não encontrado!</p>";
    }
?>