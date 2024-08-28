<div class="container">
    <p>Conteúdo da Página Sobre</p>

    <?php
        $texto = "Mem Vindo ao Codeigniter 4!";
        $textoCripto = $cripto->encrypt($texto);
        echo "Mensagem Criptografada:<br>";
        echo $textoCripto.'<br><br>';
        echo "Mensagem Descriptografada:<br>";
        echo $cripto->decrypt($textoCripto);
    ?>
</div>
