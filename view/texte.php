<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="../controle/usuariocont.php" method="POST">
            <input type="hidden" name="acao" value="inserir">
            Nome: <input type="text" name="nome" > <br>
            E-mail: <input type="email" name="email"> <br>
            Login: <input type="text" name="login"> <br>
            Senha: <input type="password" name="senha"> <br>
           
            <input type="submit">
        </form>
    </body>
</html>