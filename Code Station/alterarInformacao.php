<?php 
include "model/conexao.php";

session_start();//inicia sessão
//VERIFICA SE A VARIAVEL ESTA VAZIA
   if (empty($_REQUEST['email']) ||  empty($_REQUEST['nome'] ) || empty($_REQUEST['id'])) {
    header("location: configuracao?msg=erro");
       exit();
   } 
//SQL INJECTION

$emailAtt = mysqli_real_escape_string( $connect,$_REQUEST['email']);
  if(!filter_var($emailAtt, FILTER_VALIDATE_EMAIL)){
       header("location: configuracao?msg=erro");
       ?>
<?php 
 }
 else{
$nomeAtt = mysqli_real_escape_string($connect,$_REQUEST['nome']);  
$id = mysqli_real_escape_string($connect,$_POST['id']); 
$msg = 0;

    if(!empty($_FILES['foto']['name'])) {
        
    $extensao = strtolower(substr($_FILES['foto']['name'], -4)); //PEGA EXTENSÃO
    $novoNome = $id."_".rand()."_".time().$extensao;//RENOMEIA
    $diretorio = "fotosUsuarios/";//DEFINE DIRETORIO
//VERIFICA EXTENSÃO
    if($extensao != ".jpg" && $extensao != ".png" && $extensao != "jpeg"
&& $extensao != ".gif" ) {
    header("location: configuracao?msg=tipo");
    exit();
}
//VERIFICA TAMANHO
if ($_FILES['foto']['size'][0] > 2097152) {
    header("location: configuracao?msg=tamanho");
    exit();
}
else{
    //MOVE PARA O BANCO DE DADOS
    move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novoNome);//EFETUA UPLOAD
    $busca = mysqli_query($connect,"SELECT fotos FROM cadastro WHERE id = '$id'");
    $dado = mysqli_fetch_array($busca);
    $delFoto = $dado['fotos'];
    if($delFoto != "fotosUsuarios/defaultuser2.png" ){
    unlink($delFoto);
    }
    $SQL = "UPDATE cadastro SET fotos = '$diretorio$novoNome' WHERE id = '$id'";
    $buscar = mysqli_query($connect,$SQL) or die("Erro no Envio!");
    
        $SQL = "UPDATE comentarios SET foto = '$diretorio$novoNome' WHERE idPessoa = '$id'";
        $buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
 
}
}




//ATUALIZAÇÂO NO BANCO DE DADOS
$SQL = "UPDATE cadastro SET nome = '$nomeAtt',email = '$emailAtt'  WHERE id = '$id'";
$buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
 
  $SQL = "UPDATE comentarios SET nome = '$nomeAtt' WHERE idPessoa = '$id'";
  $buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
 

 
//QUEBRANDO A SESSÂO E RECONSTRUINDO
unset($_SESSION['email']);
$_SESSION['email'] = $emailAtt;
//REDIRECIONAMENTO
header("location: configuracao?msg=sucesso");
}
?>