<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


<script language="JavaScript">

    function protegercodigo() {
    if (event.button==2||event.button==3){ //Previni o Botão direito do mouse
        alert('Codigo protegido!');}
    }
    document.onmousedown=protegercodigo
    
    $(document).keydown(function (event) {
    if (event.keyCode == 123) { // Previni o F12 Codigo da tecla 123 == F12
    alert('Codigo protegido!');
        return false; //Retorna o Valor falso para o navegador entender que nada foi pressionado   //Evento Ctrl   Evento Shift      codigo da teclar == 73 == I
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Previni Ctrl+Shift+I  
    alert('Codigo protegido!');
    return false;//Retorna o Valor falso para o navegador entender que nada foi pressionado
        
    }
});

</script>-->