<?php 

include "model/conexao.php";

$mensagem = $_POST['mensagem'];
$idalvo = $_POST['idAlvo'];
$idenviado = $_POST['id'];
$titulo = $_POST['titulo'];
$cursos = $_POST['pesquisa'];


$query = "INSERT INTO mensagem (mensagem,idalvo,idenviado,lido) VALUES ('$mensagem','$idalvo','$idenviado',0)";
$insert = mysqli_query($connect,$query);

	$resultado_busca = mysqli_query($connect, $cursos);
	
	if(mysqli_num_rows($resultado_busca) <= 0){
		echo "Nenhum usuario encontrado...";
	}else{
	    ?>
	    <h2 style="color:#4a148c ;"><?php echo $titulo ?></h2>
	    <br> <br> <br>
	    <?php
	     $valorform = 0;
		while($pessoas = mysqli_fetch_assoc($resultado_busca)){
		?>
		<?php $valorform += 1; ?>
    <div id="imagem">
        <label title="Foto de <?php echo $nome ?>" for="foto">
    <img class="imgPerfil" src="<?php echo $pessoas['fotos']?>">
    </label>
    </div>
    <div class="info">
        <input type="hidden" name="id" value="<?php echo $id?>">
        
    <text class="perfil">Nome:&ensp;</text><input disabled value="<?php echo $pessoas['nome']?>" title="Nome(Completo)" id="nome" class="text" name="nome" required="required"/></text><br><br>
    
    <text class="perfil">Email: &ensp;</text><input disabled value="<?php echo $pessoas['email']?>" title="Email(Completo)" id="email" class="text" name="email" required="required"/></text><br><br>
    
    <?php if($pessoas['desativado'] == 0): ?>
    
        <?php if($pessoas['id'] == 17 || $pessoas['id'] == 14 || $pessoas['id'] == 67): ?>
        
        <?php else: ?>
     <a  style="float:right;margin-top:-55px;cursor:pointer;font-size:20px;" id="desativar<?php echo $valorform?>"><i class="fas fa-power-off"></i></a>
     <?php endif; ?>
    <?php  else:?>
    
    <?php if($pessoas['id'] == 17 || $pessoas['id'] == 14 || $pessoas['id'] == 67): ?>
        
        <?php else: ?>
     <a  style="float:right;margin-top:-55px;cursor:pointer;font-size:20px;color:red" id="desativar<?php echo $valorform?>"><i class="fas fa-power-off"></i></a>
     <?php endif;?>
    <?php endif; ?>
    
    <a style="float:right;margin-top:-85px;cursor:pointer;font-size:20px"  id="mensagem<?php echo $valorform?>"><i class="fas fa-comment-dots"></i></a>
    
    <input class="text" type="hidden" id="idexclusao<?php echo $valorform ?>" name="id" value="<?php echo $pessoas['id']?>">
    <br><br>
    </div>
    
    
    <script>
    
//Enviar Mensagem

        $("#mensagem<?php echo $valorform ?>").click(function(){
	    swal("Enviar comentario para <?php echo $pessoas['nome'] ?> :", {
 
closeOnEsc: false,
closeOnClickOutside: false,
  buttons: ["Cancelar!", "Enviar Mensagem!"],
      content: {
    element: "input",
    attributes: {
      type: "text",
    },
  },
}).then((value) => {
  
  if(`${value}` == "null" || `${value}` == ""){
      swal("Nenhuma mensagem enviada.");
  }else{
  
  swal("Mensagem enviada", `Enviado para <?php echo $pessoas['nome'];?>Mensagem: ${value}`, "success")
		$("#resultado").html("<img class='preload' src='loading.gif'>");
		
		var mensagem = `${value}`;
        var id = "1";
		var idAlvo = "<?php echo $pessoas['id']; ?>";
         var pesquisa = "<?php echo $cursos ?>";
         var titulo = "<?php echo $titulo ?>";
			
			var dados = {
			    id,
			    idAlvo,
			    mensagem,
			    titulo,
			    pesquisa
			}		
			$.post('enviar-mensagem.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$("#resultado").html(retorna);
			});
  }
});
		});
		
	//Excluir
	$("#desativar<?php echo $valorform ?>").click(function(){
		swal({
  title: "<?php if($pessoas['desativado'] == 0):?>Desativar<?php else:?>Ativar<?php endif;?> este usuario: <?php echo $pessoas['nome']?> ?",
  text: "Você realmente quer <?php if($pessoas['desativado'] == 0):?>desativar<?php else:?>ativar<?php endif;?> este usuario?",
  icon: "warning",
  buttons: ["Cancelar!", "<?php if($pessoas['desativado'] == 0):?>Desativar<?php else:?>Ativar<?php endif;?> Usuario!"],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Usuario <?php if($pessoas['desativado'] == 0):?>desativado<?php else:?>ativado<?php endif;?> com sucesso", {
      icon: "success",
    });
    var id = $('#idexclusao<?php echo $valorform?>').val();
    var estado = "<?php echo $pessoas['desativado']; ?>";
    var pesquisa = "<?php echo $cursos ?>";
    var titulo = "<?php echo $titulo ?>";
		$("#resultado").html("<img class='preload' src='loading.gif'>");
		//Verificar se há algo digitado
			var dados = {
			    id,
			    estado,
			    pesquisa,
			    titulo
			}		
			$.post('desativar-usuario.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$("#resultado").html(retorna);
			});
  } else {
  }
});
		});		
    </script>
    
		<?php
		}
	}



?>