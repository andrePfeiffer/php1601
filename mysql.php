<?php

require_once 'servidor.php';

consultaDados("insert into livros (titulo, preco, quantidade, numeroPaginas) 
    values ('o meu livro', 9.99, 10, 999)");

consultaDados("update livros set preco = 99.99 where id = 3");

consultaDados("delete from livros where id = 1");

$consulta = consultaDados("select id, titulo, preco from livros order by id");

while($dados = mysql_fetch_array($consulta)){
    echo $dados['id'] . ') ' . $dados['titulo'] . ' - ' . $dados['preco'] . '<br>';
}

