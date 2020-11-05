<?php
    include 'connect.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de produtos</title>

    <link rel="stylesheet" type="text/css" href="css/estilo.css"> 

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
    crossorigin="anonymous">
</head>
<body>
    <header>
        <!-- menu -->
    <?php
        include_once('menu.html');
    ?>
        <br><br>
    </header>

    <main class="ladoAlado" id="main-prod">
    
    <aside id="aside-prod">
            
        <ul class="navbar flex-column">
            <p class="filtro" onclick="semFiltro('limpar')">Todas as categorias</p>
            <li class="filtro" onclick="exibirCategoria('Motorola')">Motorola(4)</li>
            <li class="filtro" onclick="exibirCategoria('Nokia')">Nokia(2)</li>
            <li class="filtro" onclick="exibirCategoria('Siemens')">Siemens(1)</li>
            <li class="filtro" onclick="exibirCategoria('SonyEricsson')">SonyEricsson(2)</li>
        </ul>
    </aside>

    <section class="vitrine">
        
    <?php

    $sql= "select * from produtos"; 
    $result= $connect->query($sql);

    if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){
        ?>
        <div class="container">
            <span class="col-sm-12" id="<?php echo $rows['categoria']?>">
                <img src=" <?php echo $rows['imagem']?>"
                    width="105px" height="100px" onclick="destaque(this)" >
                <p><?php echo $rows['produto']?></p>
                <p><?php echo $rows['descricao']?></p>
                <p><font size="2", color="black"><strike>R$ 65,80</strike></font><br>
                    <font size= "4", color="red"><?php echo $rows['preco']?></font></p> 
                 
                    <button class="btn btn-danger" onclick="adicionadoCarrinho()">
                    Comprar</button>

                    <button class="btn btn-warning" onclick="gostouNe()">
                    WishList</button></span>
                    <hr>
        </div>
    <?php 
        }
    } else {
        echo "Nenhum produto cadastrado.";
    } 
    ?>
        
    </section>


</main>
 <br><br><br><br><br><br>   
<footer class="container bg-primary">
    <hr>
    <center>
        <font color="white" face="Arial">&copy;Taís Araújo - Recode Pro</font>
        <br><br></center>
</footer>
<script src="index.js"></script>
</body>
</html>