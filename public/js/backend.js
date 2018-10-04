$(".qty").on('change', function(e){

	$('#lodding').html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>');
	var qyt = $(this).val();
	var cartId = $(this).parent().attr('data-id');
	var dataString = { 'quantity' : qyt, 'cart_id':cartId};
		e.preventDefault();
		$.ajax ({
			
		    type: "POST",
		    url: "update", 
		    data: dataString,
		    headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  },
			success: function(data) {

				if(!data.success)
				{
					$('#lodding').html('');
					$("#"+cartId).val(data.result.amount);
					alert(data.result.error);
				}
				else
				{
					$("#"+cartId).val(data.result.amount);
			        $("#total-"+cartId).text(data.result.total);
			        $("#net").text(data.total);
			        $("#a").text(data.total);
			        $("#b").text(data.total);
			        $('#lodding').html('');
				}
	
		    }
		});
})


