<?php 
include 'model/conexao.php';
session_start();//inicia sessão

if (empty($_POST['email']) ||  empty($_POST['senha'] )) {
       $msgerro = base64_encode("msg=erro");
    header("location:entrar?$msgerro");
setcookie("msgcookie","mensagem", time() + 10, '/');
       exit();
   } 
//SQL INJECTION
    $email = mysqli_real_escape_string( $connect,$_POST['email']);
    $senha = mysqli_real_escape_string($connect,md5($_POST['senha']));  

    $SQL = "select email, senha,desativado from cadastro WHERE email = '$email' ";
    $result_id = mysqli_query($connect,$SQL) or die("Erro no banco de dados!"); 
    $total = mysqli_num_rows($result_id); 

if($total == 1) 
{ 
// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão 

$dados = mysqli_fetch_array($result_id); 
 //Usuario Bloqueado
 
if($dados["desativado"] == 1){
    $msgdesativado = base64_encode("msg=desativado");
    setcookie("msgcookie","mensagem", time() + 10, '/');
    header("location:entrar?$msgdesativado");
         
     }
// Agora verifica a senha 
if(($senha == $dados["senha"])) 
{

    setcookie("manterConexao", "manter", time() + 3600);

    $busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
    $dado = mysqli_fetch_array($busca);
    $emailr = $dado['email'];
    $_SESSION['logado'] = true;
    $_SESSION['email'] = $emailr; 
    @header("Location: pagina");?>
<?php }
else{
    $msgerro = base64_encode("msg=erro");
    header("location:entrar?$msgerro");
    setcookie("msgcookie","mensagem", time() + 10, '/');
    
}
}else{
    $msgnaocadastrado = base64_encode("msg=naocadastrado");
    setcookie("msgcookie","mensagem", time() + 10, '/');
    header("Location: registrar?$msgnaocadastrado");
}