var inicio=function () {
	$(".cantidad").keyup(function(e){
		if($(this).val()!=''){
			if($(".cantidad").change()){
				var id=$(this).attr('data-id');
				var precio=$(this).attr('data-precio');
				var cantidad=$(this).val();
				$(this).parentsUntil('.producto').find('.subtotal').text('Total: '+(precio*cantidad));
				$.post('js/modificarDatos.php',{
					Id:id,
					Precio:precio,
					Cantidad:cantidad
				},function(e){
						$("#total").text('Total: '+e);
						$("#iva").text('Iva: '+e);
						$("#completo").text('Total: '+e);
				});
			}

		}
	});
	$(".eliminar").click(function(e){
		e.preventDefault();
		var id=$(this).attr('data-id');
		$(this).parentsUntil('.stock').remove();
		$.post('./js/eliminar.php',{
			Id:id
		},function(a){
				location.href="./carro-de-compras.php";
		});

	});
};
$(document).on('ready',inicio);
