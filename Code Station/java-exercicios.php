<?php 
@session_start();
if(isset($_SESSION['logado'])): 
include "model/conexao.php";
include 'model/expiraLogin.php';
include "model/retiraextensao.php";
$email = $_SESSION['email'];
$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$java = $dado['java'];
$id = $dado['id'];
?>

<html>
<?php include 'model/header.php';?>
        <title><?php echo $titulo; ?> - Class Java Exercicios</title>
    <body style="visibility:hidden">
<?php include 'model/navbar2.php';?>
    <section id="java">
      <div class="content" style="line-weight:25px">
        <h1 style="color:#fe412e">Java - Exercícios</h1>
        <br><br>
         <div id="colapsion">
 <button style="background-color:#fe412e" class="collapsible">Code Station - Java</button>
<div style="background-color:white" class="content">
  <p style="background-color:white;margin-left:2.5%;margin-right:2.5%">
      Para instigar o nosso aluno a aprender mais sobre a linguagem, nós criamos uma versão para exercícios totalmente em Java, esta versão contém mais exercícios do que a versão WEB e usa a metodologia de uma prova objetiva de múltipla escolha, ou seja uma prova com 5 respostas para cada pergunta, nós acreditamos no nosso aluno e gostaríamos muito de que você o aluno desse uma chance para esta versão em Java, caso tenha ficado interessado
      
    <a style="color:blue;text-decoration:underline" target="_blanck" download="Code Station - Instalador.exe" href="Code Station - Instalador.exe">baixe o programa clicando aqui.</a>
  </p>
    </div>   
    <br><br>
      <div id="colapsion">
 <button style="background-color:#fe412e" class="collapsible">Java Exercícios Basicos</button>
<div style="background-color:white" class="content">
  <p style="background-color:white;margin-left:2.5%;margin-right:2.5%">
      1. Faça um algoritmo que leia a idade de uma pessoa expressa em anos, meses e dias e
mostre-a expressa em dias. Leve em consideração o ano com 365 dias e o mês com 30.
(Ex: 3 anos, 2 meses e 15 dias = 1170 dias.)<br><br>
2. Fazer um programa que imprima a média aritmética dos números 8,9 e 7. A média dos
números 4, 5 e 6. A soma das duas médias. A média das médias.<br><br>
3. Informar um saldo e imprimir o saldo com reajuste de 1%.<br><br>
4. Escrever um algoritmo que lê:
- a porcentagem do IPI a ser acrescido no valor das peças
- o código da peça 1, valor unitário da peça 1, quantidade de peças 1
- o código da peça 2, valor unitário da peça 2, quantidade de peças 2
O algoritmo deve calcular o valor total a ser pago e apresentar o resultado.
Fórmula : (valor1*quant1 + valor2*quant2)*(IPI/100 + 1)<br><br>
5. Crie um algoritmo que leia o valor do salário mínimo e o valor do salário de um usuário, calcule a quantidade de salários mínimos que esse usuário ganha e imprima o resultado. (1SM=R$788,00).<br><br>
6. Desenvolva um algoritmo em Java que leia um número inteiro e imprima o seu
antecessor e seu sucessor.<br><br>
  </p>
    </div>   
    <br><br>
          <div id="colapsion">
 <button style="background-color:#fe412e" class="collapsible">Java Exercícios Intermediario</button>
<div style="background-color:white" class="content">
  <p style="background-color:white;margin-left:2.5%;margin-right:2.5%">
      1. Crie uma classe java MaiorNumero que contenha um método que receba dois
números inteiros e imprima o maior entre eles.<br><br>
2. Crie uma classe java NumeroDecrescente que contenha um método que receba
um número inteiro e imprima, em ordem decrescente, o valor do número até
0.<br><br>
3. Escreva um programa que imprima na tela a soma dos números ímpares entre
0 e 30 e a multiplicação dos números pares entre 0 e 30.<br><br>
4. Crie uma classe java TrocaNumero que contenha um método que receba dois
números NumA e NumB, nessa ordem, e imprima em ordem inversa, isto é, se os
dados lidos forem NumA = 5 e NumB = 9, por exemplo, devem ser impressos na
ordem NumA = 9 e NumB = 5.<br><br>
5. Crie uma classe java ComparaNumero que contenha um método que receba
dois números e indique se são iguais ou se são diferentes. Mostre o maior e o
menor (nesta sequência).<br><br>
6. Crie uma classe MediaAluno que contenha um atributo do tipo vetor de
inteiros com o nome de notas. Essa classe deve ter um método para adicionar
as notas nesse vetor (os valores que podem ser adicionados no vetor são os
inteiros entre 0 e 100, caso contrário imprime uma mensagem de erro e não
adiciona) e outro método que calcule a média de um aluno e imprima essa
média.<br><br>
7. Crie uma classe Contato que possui dois atributos: nome e email do tipo String.
Crie outra classe, chamada Agenda, que possui um atributo contatos do tipo
vetor de Contato. A classe Agenda deve conter um método para adicionar um
novo contato em uma posição vazia do vetor, outro método para buscar um
contato (retorna uma instância de Contato) através do nome e, por fim, um
método para excluir um contato através do nome.<br>
  </p>
    </div>  
     <br><br>
          <div id="colapsion">
 <button style="background-color:#fe412e " class="collapsible">Java Exercícios Dificil</button>
<div style="background-color:white" class="content">
  <p style="background-color:white;margin-left:2.5%;margin-right:2.5%">
     1. Faça um programa em Java que peça ao usuário para digitar um texto e informe quantos caracteres possui o texto informado pelo usuário. (Utilize o método length()).
<br><br>
2. Construa uma classe que solicite uma frase escrita pelo usuário. Peça ao usuário para escolher uma palavra da frase escrita e substituí-la por outra paravra. (Utilize o método replace()).
<br><br>
3. Uma imobiliária vende apenas terrenos retangulares. Faça um programa em java para ler as dimensões de um terreno e depois exibir a área do terreno. (lado x altura)
<br><br>
4. Faça um programa em java para calcular quantas ferraduras são necessárias para equipar todos os cavalos comprados para um haras. A informação de cavalos comprados deve ser informada pelo usuário.
<br><br>
5. Escreva um programa em java para ler o nome e a idade de uma pessoa, e exibir quantos dias de vida ela possui. Considere sempre anos completos, e que um ano possui 365 dias. Ex: uma pessoa com 19 anos possui 6935 dias de vida; veja um exemplo de saída: MARIA, VOCÊ JÁ VIVEU 6935 DIAS
<br><br>
6. Faça um programa em java que receba o valor dos catetos a e b de um triângulo, calcule e mostre o valor da hipotenusa. Fórmula (h = )
<br><br>
7. Faça um programa em java que receba o valor do salário mínimo e o valor do salário de um funcionário, calcule e mostre a quantidade de salários mínimos que ganha esse funcionário.
<br><br>
8. Faça um programa em java que calcule e mostre a área de um losango. Sabe-se que: A = (diagonal_maior * diagonal_menor)/2;
<br><br>
  </p>
    </div>  
    <br><br> <br><br>
          <h2 style="text-align:center;">Comentários sobre os exercícios em Java</h2><br>
 <!--<div style="float:right">
          <text  name="site" id="site">Disqus&ensp;<i class="fab fa-dyalog"></i></text>
          <text  name="disquis" id="disquis">Site&ensp;<i class="far fa-comments"></i></text>
          </div>
          <br>-->
          <br>
          
         <!--   <div id="comentario1">
          <?php include 'model/comentario2.php' ?>
        </div>-->
          
          
         <div id="comentario2">
             <?php include 'model/comentario.php';?>
        </div> 
        
    </section>
<?php include 'model/footer.php';?>
<?php include 'model/scriptsjava.php';?>
    </body>
</html>
<?php include 'model/colapsion.php'; ?>
<script>
    onload=function(){
document.body.style.visibility="visible"
}
document.getElementsByTagName("img")[1].style.display = "none";
</script>
<?php else: ?>
<?php header("location:https://codestation.cf/"); die('Erro ao Acessar...');?>
<?php endif;?>