
Atividade 1 - Média das Notas  <br> <br>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="UTF-8">
 <title>Variáveis em PHP</title>
 </head>
 <body>
 <?php
   $num1 = 6;
   $num2 = 5;
   $num3 = 4;
   $num4 = 3;
   $media = (($num1 + $num2 + $num3 + $num4)/4);
 
 echo "Nota 1 é: ". $num1. "<br>";
 ECHO "Nota 2 é: ". $num2. "<br>";
 eChO "Nota 3 é: ". $num3. "<br>";
 eChO "Nota 4 é: ". $num4. "<br>";
 eChO "A média das notas é: ".$media. "<br>";
 ?>
 </body>
</html>
 
<br>

Atividade 2 - Dados Pessoais <br> <br>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="UTF-8">
 <title>Variáveis em PHP</title>
 </head>
 <body>
 <?php
   $nome1 = "Patrycia.";
   $nome2 = "Data de Nascimento: 07/03/1998.";
   $nome3 = "Cidade Ji-Paraná.";
   $nome4 = "Estado de nascimento RO." ;
   $nome5 = "Endereço: Rua Cristais 4755.";

 
 echo "Nome: ".$nome1 . "<br>";
 echo "Data de nascimento: ". $nome2. "<br>";
 eChO "Cidade: ". $nome3. "<br>";
 eChO "Estado de nascimento: ". $nome4. "<br>";
 eChO "Endereço: ".$nome5. "<br>";
 ?>
 </body>
</html>

<br>

Atividade 3 - Nome de 10 Cidades do estado de RO. <br> <br>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="UTF-8">
 <title>Variáveis em PHP</title>
 </head>
 <body>
 <?php
   $nome1 = "Alvorada D’Oeste";
   $nome2 = "Alta Floresta D’Oeste";
   $nome3 = "Ariquemes";
   $nome4 = "Buritis";
   $nome5 = "Cabixi";
   $nome6 = "Cacoal";
   $nome7 = "Castanheiras";
   $nome8 = "Jaru";
   $nome9 = "Ji-paraná";
   $nome10 = "Ouro Preto"; 

 echo "Cidades: <br> ". $nome1. "<br>";
 echo $nome2. "<br>";
 echo $nome3. "<br>";
 echo $nome4. "<br>";
 echo $nome5. "<br>";
 echo $nome6. "<br>";
 echo $nome7. "<br>";
 echo $nome8. "<br>";
 echo $nome9. "<br>";
 echo $nome10. "<br>";
 ?>
 </body>
</html>

Atividade 4 - Criar um formulário em HTML <br> <br>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="UTF-8">
 <title>Uso de Formulários</title>
 </head>
 <body>
     <form action="MediaNota.php" method = "post">
         nome <input type = "text" name = "nome">
         idade <input type = "text" name = "idade">
         <input type = "submit" value = "Enviar">
         <input type = "reset" value = "Limpar">


     </form>

 <?php
   
   echo "<p><h2>Dados enviados com sucesso!<h2><p/><hr>";
   echo "Nome: " .$_POST[nome]. "<br>";
   echo "Idade: " .$_POST[idade]. "<br>";
 
 ?>
 </body>
</html>




