<?php
require_once 'funcoes/selectOrdem.inc.php';

require_once 'servidor.php';

// deleta um item
if(isset($_GET['acao'])){
    if($_GET['acao'] == 'deletar' && !empty($_GET['id'])){
        $id = (int)$_GET['id'];
        consultaDados("delete from itensMenu where id = '$id'");
        header("Location: modifica-menu.php");
    }
}

// edita um item
if(isset($_POST['id'])){
    $id = (int)$_POST['id'];
    $texto = $_POST['texto'];
    $url = $_POST['url'];
    $ordem = (int)$_POST['ordem'];
    $aviso = '';
    
    if(empty($texto)){
        $aviso .= 'o texto é obrigatório<br>';
    }
    if(empty($url)){
        $aviso .= 'a url é obrigatória<br>';
    }

    if(empty($aviso)){
        consultaDados("update itensMenu set texto = '$texto', url = '$url', ordem = '$ordem', dataAtualizacao = now() where id = '$id'");
        
        $aviso = 'item editado com sucesso';
    }

// cadastra um item
}elseif(isset($_POST['texto'])){
    $texto = $_POST['texto'];
    $url = $_POST['url'];
    $ordem = (int)$_POST['ordem'];
    $aviso = '';
    
    if(empty($texto)){
        $aviso .= 'o texto é obrigatório<br>';
    }
    if(empty($url)){
        $aviso .= 'a url é obrigatória<br>';
    }

    if(empty($aviso)){
        consultaDados("insert into itensMenu (texto, url, ordem, dataCadastro, dataAtualizacao) 
                values ('$texto', '$url', '$ordem', now(), now())");
        
        $aviso = 'item cadastrado com sucesso';
        header("Location: modifica-menu.php");
    }
}

// busca os itens do banco
$itensQuery = consultaDados("select * from itensMenu order by ordem asc");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript">
            function deletaItem(id){
                if(confirm("deleta item?")){
                    window.location = "modifica-menu.php?acao=deletar&id=" + id;
                }
            }
        </script>
        <?php include 'headers.php'; ?>   
    </head>
    <body>
        <?php include 'menu1.php'; ?>   
        <h1>Modifica o menu</h1>
        <?php if(isset($aviso)){ echo $aviso; } ?>
        <table width="100%" border="1">
            <tr>
                <th>texto</th>
                <th>url</th>
                <th>ordem</th>
                <th>ações</th>
            </tr>
            <?php mysql_data_seek($itensQuery, 0); while($itens = mysql_fetch_array($itensQuery)): ?>
            <tr>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="id" value="<?php print $itens['id']; ?>" />
                    <td><input type="text" name="texto" value="<?php print $itens['texto']; ?>" /></td>
                    <td><input type="text" name="url" value="<?php print $itens['url']; ?>" /></td>
                    <td><?php print selectOrdem($itens['ordem']); ?></td>
                    <td>
                        <input type="submit" value="editar" />
                        <input type="button" value="deletar" onclick="deletaItem(<?php print $itens['id']; ?>)" />
                    </td>
                </form>
            </tr>
            <?php endwhile; ?>
            <tr>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <td><input type="text" name="texto" value="" /></td>
                    <td><input type="text" name="url" value="" /></td>
                    <td><?php print selectOrdem(); ?></td>
                    <td><input type="submit" value="cadastrar" /></td>
                </form>
            </tr>
        </table>
        <?php include 'menu2.php'; ?>   
    </body>
</html>
