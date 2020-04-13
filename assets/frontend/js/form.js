$(function() {

	// Get the form.
	var form = $('#ajax-contact');
	var subs = $('#ajax-subscribe');
	// Get the messages div.
	var formMessages = $('#form-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData,
			dataType: 'json',
			success: function(response){
				Swal.fire({
				  icon: 'success',
				  title: 'Success !',
				  text: 'Pertanyaan telah dikirim',
				  showConfirmButton: false,
				  timer: 2500
				});
				$('#namA, #emaiL, #subjecT, #textarea').val('');	
			},
			error: function(jqXHR, textStatus, errorThrown){
				Swal.fire({
				  icon: 'error',
				  title: 'Error',
				  text: 'Terdapat kesalahan sistem',
				  showConfirmButton: false,
				  timer: 2500
				});
			}
		})
	});

	$(subs).submit(function(e){
		e.preventDefault();	
		var formSubs = $(subs).serialize();
		$.ajax({
			type: 'post',
			url: $(subs).attr('action'),
			dataType: "json",
			data: formSubs,
			success: function(response){
				if(response == 'ada'){
					Swal.fire({
					  icon: 'error',
					  title: 'Error',
					  text: 'Email sudah ada dalam database',
					  showConfirmButton: false,
					  timer: 2500
					});

				}else{
					Swal.fire({
					  icon: 'success',
					  title: 'Success !',
					  text: 'Terimakasih telah mensubcsribe berita ITSC',
					  showConfirmButton: false,
					  timer: 2500
					});
					$('#eMail').val('');
				}
			},			 
			error: function(jqXHR, textStatus, errorThrown){
				Swal.fire({
				  icon: 'error',
				  title: 'Error',
				  text: textStatus,
				  showConfirmButton: false,
				  timer: 2500
				});
			}
		})
	});

});
