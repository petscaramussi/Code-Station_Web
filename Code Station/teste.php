<html>
<?php 
include 'model/header.php';
include 'model/conexao.php';

$id = "14";


$SQL = "select * from mensagem WHERE idalvo = '$id' ";
$result_id = mysqli_query($connect,$SQL);
$total = mysqli_num_rows($result_id); 

echo $total 
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <title><?php echo $titulo; ?> - Class Menu do Administrador</title>
    <body>
<?php include 'model/navbar5.php';?>
    <section id="Menu">
      <div class="content" style="line-weight:25px">
        <h1 style="color:#4a148c ;">Aba de Teste</h1>
   
   <div style="width:2%;border:2px solid #333;padding:3%">
       <i style="font-size:25px;color:#333" class="far fa-comment-dots"></i>
   </div>
   
        </div>
        </section>
        
<style>
    .swal-wide{
    width:1500px !important;
}
</style>        
    <script>
    Swal.fire({
  title: 'Você tem mensagens para ler?',
  text: "Recomendavel que veja, pode ser mensagens do administradores",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ler Mensagens!',
  cancelButtonText: 'Não',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
    
    Swal.fire({
  title: 'Mensagens recebidas:',
  type: 'info',
  width: 1200,
  html:
  <?php while($dados = mysqli_fetch_assoc($result_id)){ ?>
    'Usuario <b><?php echo $dados['idenviado'] ?></b>, Mensagem <b><?php echo $dados['mensagem'] ?></b>,  '+
    <?php } ?>,
  focusConfirm: false,
  confirmButtonText:
    '<i class="fas fa-check-double"></i> Ler todas as mensagens!',
  confirmButtonAriaLabel: 'Ler todas mensagens!',
}) 

  }
})
   

    </script>
<?php include 'model/footer.php';?>
<?php include 'model/scriptsjava.php';?>
    </body>
</html>