//funcoes para exibir sacadores PF ou PJ de acordo com selecao do radio button - 1 sacador
$('.sacpf, .sacpj, .sacpj2').hide();           

$('input[name="natSacador1"]').change(function () {
    if ($('input[name="natSacador1"]:checked').val() === "pf") {
        $('.sacpf').show();
        $('.sacpj').hide();
    }
});

$('input[name="natSacador1"]').change(function () {
    if ($('input[name="natSacador1"]:checked').val() === "pj") {
        $('.sacpj').show();
        $('.sacpf').hide();
    }
});

//funcoes para habilitar e desabilitar campos do sacador 2
$("#natSacador2NE").click(function (){
    $("#listaPF2").prop("disabled", true);
    $("#listaPJ2").prop("disabled", true);
    $("#docSacador2").prop("disabled", true);
    $('.sacpj2').hide();
    $('.sacpf2').show();
    $("#docSacador2").val("")
    $("#listaPF2").val("Por favor, selecione um sacador PF")
    $("#listaPJ2").val("Por favor, selecione um sacador PJ")
});

$("#natSacador2PF").click(function (){
    $("#listaPF2").prop("disabled", false);
    $("#docSacador2").prop("disabled", false);
    $('.sacpf2').show();
    $('.sacpj2').hide();
});

$("#natSacador2PJ").click(function (){
	$('.sacpf2').hide();
	$('.sacpj2').show();
	$("#docSacador2").prop("disabled", false);
    $("#listaPJ2").prop("disabled", false);

});

//funcao para habilitar e desabilitar campos do advogado
 $('input[name="repProc"]').change(function () {
    if ($('input[name="repProc"]:checked').val() === "jusPostulandi") {
        $("#listaAdv").prop("disabled", true);
    	$("#cpfAdv").prop("disabled", true);
        $("#oabAdv").prop("disabled", true);
        $("#listaAdv").val("Por favor, selecione um advogado (a)");
        $("#cpfAdv").val("");
        $("#oabAdv").val("");
    }
});

$('input[name="repProc"]').change(function () {
    if ($('input[name="repProc"]:checked').val() === "advogado") {
       	$("#listaAdv").prop("disabled", false);
    	$("#cpfAdv").prop("disabled", false);
        $("#oabAdv").prop("disabled", false);

    }
});

//funcoes para preencher dados de sacador pessoa fisica
$("#listaPF").change(function(){
    var nome = $(this).val();
    $.ajax({
       url: "../controller/json-pf.php?nome="+nome,
    }).done(function(data){
        data = JSON.parse(data);
        $("input[name=docSacador1]").val(data.cpfCNPJ);
    });
});

$("#listaPF2").change(function(){
    var nome = $(this).val();
    $.ajax({
       url: "../controller/json-pf.php?nome="+nome,
    }).done(function(data){
        data = JSON.parse(data);
        $("input[name=docSacador2]").val(data.cpfCNPJ);            
    });
});

//funcoes para preencher dados de sacador pessoa juridica
  $("#listaPJ").change(function(){
    var nome = $(this).val();
    $.ajax({
       url: "../controller/json-pj.php?nome="+nome,
    }).done(function(data){
        data = JSON.parse(data);
        $("input[name=docSacador1]").val(data.cpfCNPJ);
    });
});

$("#listaPJ2").change(function(){
    var nome = $(this).val();
    $.ajax({
       url: "../controller/json-pj.php?nome="+nome,
    }).done(function(data){
        data = JSON.parse(data);
        $("input[name=docSacador2]").val(data.cpfCNPJ);            
    });
});

//funcao para preencher dados do advogado
$("#listaAdv").change(function(){
    var nome = $(this).val();
    $.ajax({
       url: "../controller/json-adv.php?nome="+nome,
    }).done(function(data){
        data = JSON.parse(data);
        $("input[name=cpfAdv]").val(data.cpf);
   		$("input[name=oabAdv]").val(data.oab);
    });
});

