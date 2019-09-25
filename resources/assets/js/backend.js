$(document).on('click','.menu-item',function() {

	let url = $(this).attr('data-url');

	$.ajax({
		url: url,
		method: 'GET',
		beforeSend:function() {
			// console.log("beforeSend");
		},

		success: function(resp) {
			$('.right-side').empty().append(resp);
		},

		error: function(error) {
			console.log(error);
		}

	});
});
