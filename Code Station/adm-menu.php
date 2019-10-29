<html>
<?php

@session_start();//inicia sessão
include 'model/header.php';
include "model/conexao.php";
include "model/retiraextensao.php";

$email = $_SESSION['email'];
$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$id = $dado['id'];
if($id == 14 || $id == 17 || $id == 67){
 ?>  
    
        <title><?php echo $titulo; ?> - Class Menu do Administrador</title>
    <body>
<?php include 'model/navbar5.php';?>
    <section id="Menu">
      <div class="content" style="line-weight:25px">
        <h1 style="color:#4a148c ;">Menu de Administração</h1>
        
        <div id="menu">
            <ul>
                <li id="plataforma">
                    <a href="#">
                        <img style="margin:8%;width:85%;" src="https://codestation.cf/icone.png?">
					    <span>Cadastradas na plataforma</span>
					   
				    </a>
				</li>
				
				 <li id="java">
                    <a href="#">
                        <img  style="margin:5%" src="https://img.icons8.com/color/160/000000/java-coffee-cup-logo.png">
					    <span>Cadastrados no curso de Java</span>
				    </a>
				</li>
				
				<li id="online">
                    <a href="#">
				    <img style="margin:5%" src="https://img.icons8.com/office/160/000000/online.png">
					<span>Pessoas online na plataforma</span>
				</a>
			</li>
				
            </ul>
        </div>
        <div id="resultado">
            
        </div>
        
        <script>
            var pesquisa  = "plataforma";
        </script>
    <style>
                      
        #menu ul{
            overflow:hidden;
            list-style: none;
            margin:12%;
        }
        #menu ul li {
		float: left; margin: 0 20px 0 0;
	    }
	    #menu ul li  {
			display: block; width: 180px; height: 180px;
			background-image: url(icons.png);
			background-repeat: no-repeat;
		}
		#menu ul li:nth-child(1)  {
				background-color: #5bb2fc;
				background-position: 28px 28px;
		}
		#menu ul li:nth-child(2)  {
				background-color: #58ebd3;
				background-position: 28px -96px;
		}
		#menu ul li:nth-child(3)  {
				background-color: #ffa659;
				background-position: 28px -222px;
		}
		#menu ul li  span {
					font-size: 40px;
					position: absolute; 
					left:32%;
					margin-top: 2.5%;
					display: none;
		}
		#menu ul li a:hover span {
						display: block;
		}
		#menu ul li:nth-child(1)  span {
					color: #5bb2fc;
				}
		#menu ul li:nth-child(2)  span {
					color: #58ebd3;
				}
		#menu ul li:nth-child(3)  span {
					color: #ffa659;
				}
		
.configbtn:hover {
    background-color: #1dad3a;
    border: 2px solid #1dad3a;
    color: white;
}
.configbtn:active {
  background-color: #1dad3a;
  border: 2px solid #1dad3a;
  transform: translateY(5px);
  color: white;
}
                   input{
                       width:40%;
                       padding:0.8%;
                       height:4%;
                       border:2px solid #ccc;
                   }
                      .imgPerfil{
                          width:128px;
                          height:128px;
                          border-radius:50%;
                      }
                      .info{
                          margin-left:18%;
                          margin-top:-14.5%;
                          margin-bottom:5%;
                      }
            </style>
    </section>
    <style>
.configbtn:hover {
    background-color: #1dad3a;
    border: 2px solid #1dad3a;
    color: white;
}
.configbtn:active {
  background-color: #1dad3a;
  border: 2px solid #1dad3a;
  transform: translateY(5px);
  color: white;
}
    </style>
    
    <script>
        $(function(){
	//Pesquisar os cursos sem refresh na página
	$("#plataforma").click(function(){
		
		var pesquisa = "plataforma";
		$("#resultado").html("<img class='preload' src='loading.gif'>");
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}		
			$.post('procurar-usuario.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$("#resultado").html(retorna);
			});
		}else{
			$("#resultado").html('');
		}		
	});

	$("#java").click(function(){
		$("#resultado").html("<img class='preload' src='loading.gif'>");
		var pesquisa = "java";
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}		
			$.post('procurar-usuario.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$("#resultado").html(retorna);
			});
		}else{
			$("#resultado").html('');
		}		
	});

	$("#online").click(function(){
		$("#resultado").html("<img class='preload' src='loading.gif'>");
		var pesquisa = "online";
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}		
			$.post('procurar-usuario.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$("#resultado").html(retorna);
			});
		}else{
			$("#resultado").html('');
		}		
	});
});
    </script>
<?php include 'model/footer.php';?>
<?php include 'model/scriptsjava.php';?>
    </body>
</html>
    <?php
}else{
 @header("location:pagina");?>
    <script>
        window.location.replace("pagina");
    </script>


<?php } ?>