<?php 
include "model/conexao.php";
$email = $_SESSION['email'];
$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$nome = $dado['nome'];
$foto = $dado['fotos'];
$site = $_SERVER["REQUEST_URI"];
$id = $dado['id'];
$busca = mysqli_query($connect,"SELECT * FROM comentarios WHERE identificacao LIKE '$site%' ");
$rows = mysqli_num_rows($busca);
date_default_timezone_set('America/Sao_Paulo');
?>



<br><br>
<!--<text id="contador"><?php echo $rows?> Comentários</text>-->
<hr>
<div>
    <input class="text" type="text" name="foto" id="foto" value="<?php echo $foto?>">
    <input class="text" type="hidden" id="nome" name="nome" value="<?php echo $nome?>">
    <input class="text" type="text" id="url" name="site" value="<?php echo $site?>">
    <input class="text" type="hidden" name="comentar" value="<?php echo $site?>">
    <input class="text" type="hidden" id="idpessoa" name="idpessoa" value="<?php echo $id?>">
    <img style="margin-bottom:37px" class="foto" src="<?php echo $foto?>">
    <textarea name="comentario" id="textoComentario" required minlength=5></textarea>
    <button id="enviar" value="Comentar">Comentar <i class="fas fa-comments"></i></button>
    <a href="#" id="foo"></a>
</div>
<hr id="hree">
<?php 
$buscar = mysqli_query($connect,"SELECT * FROM comentarios WHERE identificacao LIKE '$site%' ORDER BY id ");
$ROW = mysqli_num_rows($buscar);?>
<div id="tudo">
     <text id="contador"><?php echo $rows?> <?php if ($rows == 1):?>Comentário<?php else: ?>Comentários<?php endif;?></text>
<?php
if($ROW > 0){
     $valorform = 0;
    while($linha = mysqli_fetch_array($buscar)){
        $valorform += 1;
        $nomer = $linha['nome'];
        $comentario = $linha['comentario'];?>
        <div class="comentarios">
        <form id="ver<?php echo $valorform?>" action="../pesquisar" method="POST">
        <input class="text" type="hidden" name="pesquisa" value="<?php echo $linha['idpessoa']?>">
        <a id="excluir" onClick="document.getElementById('ver<?php echo $valorform?>').submit();">
        <img style="cursor:pointer" class="foto" src="<?php echo $linha['foto'] ?>">
        <text class="nome"><?php echo $nomer?></text>
        </a>
        </form>
        <?php if($nome == $nomer || $id == "14" || $id == "67" || $id == "17"){ ?>
        <!-- Exclusão -->
        <div id="sla">
        
        <input class="text" type="hidden" name="site" value="<?php echo $site?>">
        <a id="exclusao<?php echo $valorform?>"><text id="excluircomentario"><i class="fas fa-times"></i></text></a>
        <p style="margin-top:10px;margin-bottom:10px "></p>
        <!-- Editar -->
         <a id="edicao<?php echo $valorform?>"><text id="editarcomentario"><i class="fas fa-pen"></i></text></a>
         <input class="text" type="hidden" id="idexclusao<?php echo $valorform ?>" name="id" value="<?php echo $linha['id']?>">
        </div>
        <?php } ?>
        <text class="comentario"><?php echo $comentario?></text>
        </div>
        <script type="text/javascript">
	//Excluir
	$("#exclusao<?php echo $valorform ?>").click(function(){
		swal({
  title: "Deletar comentário?",
  text: "Você realmente quer deletar seu comentário?",
  icon: "warning",
  buttons: ["Cancelar", "Excluir comentário"],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Seu comentário foi excluído com sucesso", {
      icon: "success",
    });
        var id = $('#idexclusao<?php echo $valorform?>').val();
		var site = $('#url').val();
		var idpessoa = $('#idpessoa').val();	
		var nome = $('#nome').val();
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
			});
  } else {
    swal("Seu comentário está seguro");
  }
});
		});
		
		
//Edição JQuery

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
<?php  } ?>
</div>


 <style>
 #sla{
    float:right;
    margin-top:-52px;
 }
.comentarios #excluircomentario{
     cursor:pointer;
 }
 .comentarios #editarcomentario{
     cursor:pointer;
 }
 #comentarios{
     margin-bottom:-60px;
 }
        .comentarios{
            padding:0;
            margin:0;
            padding-bottom:20px
        }
        .comentarios img{
            cursor:pointer;
            
        }
        .comentarios .nome{
            cursor:pointer;
        }
            .nome{
                position:absolute;
                margin-left:10px;
                font-weight:700;
            } 
            .comentario{
                position:absolute;
                margin-left:70px;
                margin-top:-26px;
                font-weight:700;
            }
            
        </style>

<?php
    }
else{?>
    <h2 style="text-align:center">Seja o primeiro a comentar</h2>
<?php }    
        ?>
        </div>
    </section>
    </body>
</html>
<style>
.text{
    display:none;
}
#enviar{
    cursor:pointer;
    padding:8px;
    border: 2px solid #23c944;
    z-index:1;
    margin-right:1%;
    margin-top:-2%;
    margin-bottom:1.5%;
    float:right;
    background-color: #23c944;
    color: white; 
    border-radius:2px;
    transition:.3s;
}
#enviar:hover{
    background-color: #1dad3a;
    border: 2px solid #1dad3a;
}

#contador{
    position:absolute;
    margin-top:-210px;
    font-weight:600;
}
@media only screen and (max-width: 880px) {
  #contador {
    margin-top:-230px;
  }
  #enviar{
    margin-top:-15px;
    margin-bottom:3%;
  }
  #textoComentario{
     max-width:85%;
  }
}
@media only screen and (max-width: 480px) {
  #contador {
    margin-top:-220px;
  }
  #textoComentario{
     max-width:80%;
  }
}
@media only screen and (max-width: 380px) {
  #textoComentario{
     max-width:75%;
  }
}

@media only screen and (max-width: 320px) {
  #textoComentario{
     max-width:70%;
  }
}
@media only screen and (max-width: 280px) {
  #textoComentario{
     max-width:62%;
  }
}

hr{
    border: 1px solid #dbdfe4;
    border-radius: 5px;
    margin-bottom:25px;
    width:100%;
} 
#hree{
    margin-top:20px;
    border: 1px solid #dbdfe4;
    border-radius: 5px;
    margin-bottom:25px;
    width:100%;
 }
    textarea{
        z-index:0;
        resize: none;
        outline: 0;
        margin-left:10px;
        border:2px solid #dbdfe4;
        padding:10px;
        padding-top:15px;
        height:56px;
        border-radius:4px;
        float:inherit;
        margin-bottom:35px;
        font-size:20px;
    }
     #site{
                padding:4px;
                cursor:pointer;
                font-weight:800;
                position:absolute;
                margin-left:-185px;
                border:2px solid #2aa0ff;
                background-color:#2aa0ff;
                color:white;
                transition:0.2s;
                font-size:16px;
            }
            
    #site:hover{
                padding:4px;
                cursor:pointer;
                font-weight:800;
                position:absolute;
                margin-left:-185px;
                border:2px solid #2389db;
                background-color:#2389db;
                color:white;
                font-size:16px;
            }        
            
    .foto{
        width:56px;
        height:56px;
        border-radius:50%;
    }
</style>

<!-- Inserir Comentario -->
<script type="text/javascript">

$('#textoComentario').keypress(function(e) {
    if(e.which == 13) {
        	
		var pesquisa = $('#textoComentario').val();
		$('#textoComentario').val("");
		pesquisa = pesquisa.trim();
		var tamanho = pesquisa.length;
		if(tamanho < 5){
const Toast = Swal.mixin({
  toast: true,
  position: 'top-center',
  showConfirmButton: false,
  timer: 3000
});

Toast.fire({
  type: 'error',
  title: 'Digite pelo menos 5 letras no campo de texto'
})
		}else{
		$("#tudo").html("<img class='preload' src='loading.gif'>");
		var site = $('#url').val();
		var foto = $('#foto').val();
		var idpessoa = $('#idpessoa').val();
		var nome = $('#nome').val();
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa,
				site,
				foto,
				idpessoa,
				nome
			}		
			$.post('inserirComentario.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$("#tudo").html(retorna);
			});
		}else{
			$("#tudo").html('');
		}	
		}
      e.preventDefault();
    }
});

	
	$("#enviar").click(function(){
		
		var pesquisa = $('#textoComentario').val();
				$('#textoComentario').val("");
		pesquisa = pesquisa.trim();
		var tamanho = pesquisa.length;
		if(tamanho < 5){
const Toast = Swal.mixin({
  toast: true,
  position: 'top-center',
  showConfirmButton: false,
  timer: 3000
});

Toast.fire({
  type: 'error',
  title: 'Digite pelo menos 5 letras no campo de texto'
})
		}else{
		$("#tudo").html("<img class='preload' src='loading.gif'>");
		var site = $('#url').val();
		var foto = $('#foto').val();
		var idpessoa = $('#idpessoa').val();
		var nome = $('#nome').val();
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa,
				site,
				foto,
				idpessoa,
				nome
			}		
			$.post('inserirComentario.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$("#tudo").html(retorna);
			});
		}else{
			$("#tudo").html('');
		}	
		}
	});
	
    	</script>
