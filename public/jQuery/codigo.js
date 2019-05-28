$(document).ready(function(){
	$('#selec').change(function(){
		var url = $(this).val();
		var texto = $(this).find('option:selected').text(); 
		url = "uploadimages/"+url;
		$("#imagen").attr("src", url);
		$("#tittle").text(texto)
		// alert(url)
	});
});