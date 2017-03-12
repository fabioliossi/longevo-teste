
$( ".btn-cadastrar" ).click(function() {
  	
    swal({
      title: "Validando os dados",
      type:"warning",
      text: "",
      showConfirmButton: false
    });

  	$.ajax({
      type: "POST",
      url: "store",
      dataType: "html",
      data: $("#formChamado").serialize(),
      success: function (response) {
        
        swal(response, "", "success");
        window.location.href = "/";
        
      },
      error: function (error) {
        
      	swal(error.responseText, "", "error");

      }
    });

});


$( ".btn-cadastrar-chamado" ).click(function() {
    swal({
      title: "Aguarde",
      type:"info",
      text: "Abrindo o formulário",
      showConfirmButton: false
    });
  window.location.href = "chamado/create";
});

$( ".btn-cancelar" ).click(function() {
  swal({
      title: "Aguarde",
      type:"info",
      text: "Retornando para a lista",
      showConfirmButton: false
    });
  window.location.href = "/";
});

$( ".btn-buscar" ).click(function() {
      swal({
      title: "Pesquisando registros",
      type:"info",
      text: "",
      showConfirmButton: false
    });
});