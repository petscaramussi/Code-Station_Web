 <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- User scripts -->
    <script type="text/javascript" src="pagina.js"></script>

<script language="JavaScript">
            var div1 = $('#comentario1'), div2 = $('#comentario2');
            
$("#site").click(function(e) {
		div1.show();
		div2.hide();
	 });
	 $("#disquis").click(function(e) {
		div1.hide();
		div2.show();
	 });
	 
</script>

<?php if(isset($_COOKIE['prova'])){?>
    <script>
       Swal.fire({
  position: 'center',
    allowOutsideClick: false,
  type: 'error',
  title: 'Você está em prova. Espere o tempo acabar para acessar o site novamente',
  showConfirmButton: false,
  timer: 1800000
})
    </script>
<?php } ?>