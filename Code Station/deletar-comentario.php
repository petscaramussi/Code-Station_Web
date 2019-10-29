<?php


include "model/conexao.php";

$nome = $_POST['nome'];
$id = $_POST["id"];
$site = $_POST["site"];
$idpessoa = $_POST["idpessoa"];
$sql_code = mysqli_query($connect,"DELETE FROM comentarios  WHERE id='$id'");

$cursos = "SELECT * FROM comentarios WHERE identificacao LIKE '$site%' ORDER BY id";

	$resultado_busca = mysqli_query($connect, $cursos);
	$rows = mysqli_num_rows($resultado_busca);?>
	   <text id="contador"><?php echo $rows?> <?php if ($rows == 1):?>Comentário<?php else: ?>Comentários<?php endif;?></text>
	  <?php
	if(mysqli_num_rows($resultado_busca) <= 0){
	  ?>
	  <h2 style="text-align:center">Seja o primeiro a comentar!</h2>
	  <?php
	}else{
	    
	    $valorform = 0;
    while($linha = mysqli_fetch_array($resultado_busca)){
        $valorform += 1;
        $nomer = $linha['nome'];
        $comentario = $linha['comentario'];?>
        <div class="comentarios" style="padding-bottom:0;padding-bottom:20px">
        <form id="ver<?php echo $valorform?>" action="../pesquisar" method="POST">
        <input class="text" type="hidden" name="pesquisa" id="idpessoa" value="<?php echo $linha['idpessoa']?>">
        <a id="excluir" onClick="document.getElementById('ver<?php echo $valorform?>').submit();">
        <img style=" width:56px;height:56px;border-radius:50%;cursor:pointer" class="foto" src="<?php echo $linha['foto'] ?>">
        <text style="position:absolute;margin-left:10px;font-weight:700;cursor:pointer" class="nome"><?php echo $nomer?></text>
        </a>
        </form>
        <?php if($nome == $nomer || $idpessoa == "14" || $idpessoa == "67" || $idpessoa == "17"){ ?>
        
       <div id="sla" style="float:right;margin-top:-52px;">
        <input class="text" type="hidden" id="idexclusao<?php echo $valorform ?>" name="id" value="<?php echo $linha['id']?>">
        <input class="text" type="hidden" name="site" value="<?php echo $site?>">
        <a  style="cursor:pointer" id="exclusao<?php echo $valorform?>"><text id="excluircomentario"><i class="fas fa-times"></i></text></a>
 <p style="margin-top:10px;margin-bottom:10px "></p>
         <a style="cursor:pointer;" id="edicao<?php echo $valorform?>"><text id="editarcomentario"><i class="fas fa-pen"></i></text></a>
         
         <input class="text" type="hidden" id="idexclusao<?php echo $valorform ?>" name="id" value="<?php echo $linha['id']?>">	

        </div>
        
          <script type="text/javascript">
        
        
	//Excluir
	$("#exclusao<?php echo $valorform ?>").click(function(){
		swal({
  title: "Deletar comentário?",
  text: "Você realmente quer deletar seu comentário?",
  icon: "warning",
  buttons: ["Cancelar!", "Excluir comentário!"],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Seu comentário foi excluído com sucesso", {
      icon: "success",
    });
    var id = $('#idexclusao<?php echo $valorform?>').val();
		var site = $('#url').val();
		var nome = $('#nome').val();
		var idpessoa = $('#idpessoa').val();
		$("#tudo").html("<img class='preload' src='loading.gif'>");
		//Verificar se há algo digitado
			var dados = {
			    id,
			    site,
			    nome,
			    idpessoa
			}		
			$.post('deletar-comentario.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$("#tudo").html(retorna);
				$('#textoComentario').val("");
			});
  } else {
    swal("Seu comentário esta seguro");
  }
});
		});
		
$("#edicao<?php echo $valorform ?>").click(function(){
	    swal("Editar Comentário:", {
 
closeOnEsc: false,
closeOnClickOutside: false,
  buttons: ["Cancelar!", "Alterar comentário!"],
      content: {
    element: "input",
    attributes: {
      type: "text",
      value: "<?php echo $comentario ?>",
    },
  },
}).then((value) => {
  
  if(`${value}` == "" || `${value}` == "null"){
      swal(`Não houve edição!`);
  }else{
  
  swal("Comentário Editado", `Editado para: ${value}`, "success")
		$("#tudo").html("<img class='preload' src='loading.gif'>");
		
		var comentario = `${value}`;
        var id = "<?php echo $linha['id']; ?>";
		var site = $('#url').val();
		var nome = $('#nome').val();
		var idpessoa = $('#idpessoa').val();
			
			var dados = {
			    id,
			    comentario,
			    site,
			    nome,
			    idpessoa
			}		
			$.post('editar-comentario.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$("#tudo").html(retorna);
			});
  }
});
	    
		});
    	</script>
        
        <?php } ?>
        <text style="position:absolute;margin-left:70px;margin-top:-26px;font-weight:700;" class="comentario"><?php echo $comentario?></text>
        </div>
	<?php } 
	}
	?>