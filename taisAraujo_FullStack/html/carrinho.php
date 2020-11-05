
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>

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
    </header>
    <main>
        <br><h3> Ops! Parece que você ainda não adicionou produtos no carrinho ;(</h3>

        <div>
            <span>
                <p>Cadastre suas informações aqui</p>
                <input class="redondo" type="text" placeholder= "Insira o email">

                <button class="btn btn-success" type="button" onclick="cadastroCliente(this)">Cadastrar</button>
            </span>
        </div>
        
        <div>
            <span>
                <p>Para pagamento com cartão de crédito</p>
                <input class="redondo" type="text" placeholder= "Insira o nome">
                <input class="redondo" type="number" placeholder= "Insira o número do cartão">
                <br><br>
                <input class="redondo" type="number" placeholder= "Insira o código de segurança">
                <input class="redondo" type="text" placeholder= "Insira a data de vencimento">
                <button class="btn btn-success" type="button" onclick="comprar(this)">Enviar</button>  
            </span>
        </div>
        <div>
            <span>
                <p>Para pagamento com boleto bancário</p>
                <input class="redondo" type="text" placeholder= "Insira o email">
                <button class="btn btn-success" type="button" onclick="gerarBoleto(this)">Gerar boleto</button>
            </span>
        </div>
        <br><br>
        <div id= foto>
            <img src="https://suryabrasil.com/media/wysiwyg/FormasdePagamento_3__1.png" width="250px", 
        alt="Formas de Pagamento">
        </div>
    </main>
    <footer class="container bg-primary">
        <hr>
        <center><br><br>
            <font color="white" face="Arial">&copy;Taís Araújo - Recode Pro</font>
        </center><br>
    </footer>
    <script src="index.js"></script>
</body>
</html>

