<div class="hero" id="top">
        <div
	 class="hero-image"></div>
      <h1 style="z-index:1200;font-weight:400;"></h1>
      </div>
<div class="navbar-wrapper" style="position:relative;z-index:3">
          <nav>
            <div class="content">
              <ul >
                <li class="action-item" id="navpagina"><a href="pagina"><p>Main</p></a></li>
                  <text id="dropdown">        
                <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Java</a>
    <div class="dropdown-content">
      <a href="java">Curso</a>
      <a href="java-exercicios">Exercícios</a>
      <a href="java-extras">Extras</a>
    </div>
  </li>
      </text>     
              </ul>
               
              <ul class="right">
                  <?php if($id == "67" || $id == "14" || $id =="17"){ ?>
              <li><a href="adm-menu" style="text-decoration:none"><p>Administração&nbsp&nbsp<i class="fas fa-tools"></i></p></a></li>
              <?php } ?>
                  <li ><a href="ajuda" style="text-decoration:none"><p>Ajuda&nbsp&nbsp<i class="far fa-question-circle"></i></p></a></li>
              
                <li class="perfil"><a href="configuracao" style="text-decoration:none"><p>Perfil&nbsp&nbsp<i class="fas fa-user-edit"></i></p></a></li>
                <li class="sair"><a id="sair" style="text-decoration:none"><p>Sair&nbsp&nbsp<i class="fas fa-sign-out-alt"></i></p></a></li>
              </ul>
            </div>
          </nav>
      </div>
      <style>
    <?php include "dropdown.css" ?>
    </style>
<script>
    
	 $('#sair').click(function(){
swal({
  title: "Você tem Certeza?",
  text: "Você realmente gostaria de sair?",
  icon: "warning",
  buttons: true,
    dangerMode: true,
   buttons: ["Cancelar", "Tenho certeza"],
})
.then((willDelete) => {
  if (willDelete) {
    swal("Saindo...", {
      icon: "success",
      buttons:false,
      timer: 2500,
    });
    window.location.replace("sair");
  } else {
    
  }
});
});
	 
</script>
