$(document).ready(function(){
  
	  $.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	});

	/* Asignar id de cada modulo */
	  $(document).on('click','.btn-add-position',function (addposition) {
		addposition.preventDefault();
		var a = $(this).attr('module-id');
		$("#module_id").val(a);	
	  });
	/* Asignar id de cada modulo */


/* Form types */

	var tipo = $('.tipo').val();
	if (tipo == 'link-interno' || tipo == 'link-externo')
	{
		$('.url').show();
		$('.entrada').hide();
	}else if(tipo == 'entrada')
	{
		$('.url').hide();
		$('.entrada').show();
	}


	$(document).on('change','.tipo',function (tipo){

			switch($(this).val()) {
		    case 'link-interno':
		        $('.url').show();
		        $('.entrada').hide();
		        break;
		    case 'link-externo':
		        $('.url').show();
		        $('.entrada').hide();
		        break;
		    case 'entrada':
		        $('.url').hide();
		        $('.entrada').show();
		        break;
			}
	});
/* Form types end */	

});