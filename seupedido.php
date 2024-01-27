<!DOCTYPE html>   
<html lang="pt-br" >
    <head>
        <title> Cozinha da Oma - Pedido </title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css"
        <script src="java.js"></script>
        
    </head>
   
    <body>
    <header>
          <img src="logo.jpg" alt="capa da cozinha da oma com bandeira da alemanha" width="100%" height="200px"/>
          <center>
          <a href="pagina inicial.html">HOME</a>
            <a href="cardapio.html">CARDÁPIO</a>
            <a href="pedido.html">PEDIDOS</a>
          </center>
          <hr/>

      </header>
      
        <?php

           $nome = $_POST["nome"];
           $email = $_POST["email"];
           $telefone = $_POST["telefone"];
           $pedido = $_POST["pedido"];

           if(empty($nome) || empty($email) || empty($telefone) || empty($pedido)) {
               print "a;guns campos estao em branco.";
           } else { 
                print  "<center><h2><i> Olá, $nome seu pedido foi recebido com sucesso!!!</i></h2></center>";
            
        }
                $db_user = 'root';
                $db_pas = '';
                $db_name = 'pedidos cozinha' ;
                try {
                    $conn = new PDO("mysql:host=localhost;dbname=$db_name;charset=utf8", $db_user, $db_pass);
                } catch(PDOException $e) {
                    echo 'ERROR: ' . $e->getMessage();
                }

                $stmt = $conn->prepare("INSERT INTO `pedidos` (`nome`, `email`, `telefone`, `pedido`) 
                                   VALUES (?, ?, ?, ?);");
                    $stmt->bindParam(1, $nome);
                    $stmt->bindParam(2, $email);
                    $stmt->bindParam(3, $telefone);
                    $stmt->bindParam(4, $pedido);
                    $stmt->execute();
            
           
        ?>
        <footer>
        <hr/>
        <h2><i>Nossos Contatos e Redes Sociais!</i></h2>
        <br>
        <a  href="https://web.facebook.com/cozinhadaoma" target="blank"><img src="face.png" width="40px" /></a>
        
        <img src="zap.webp" width="40px" <h3><i>(21) 98084-0520/  (21) 99811-2757 </i></h3>
        

          

      </footer>
    </body>
</html>
