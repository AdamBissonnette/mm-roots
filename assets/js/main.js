jQuery(document).ready(function($) {
	$('#send').click(function(e) {
		e.preventDefault();
		if (ValidateForm("form#mail"))
		{
			SendMessage(jQuery("form#mail"));
		}
	});

	$('#terms').hide();
	$('#honey').hide();

	// ------------------------------------
	// FitVids
	// ------------------------------------
	$(".fitvids").fitVids();
});

function SendMessage(form)
{
	var formdata = jQuery(form).serializeArray()
	jQuery.post ('../wp-admin/admin-ajax.php',
		 { 'action':'do_ajax', 'fn':'contact', 'count':10, contact:formdata },
		  function(data){FinalizeSend(data)},
		   "json");
}



function FinalizeSend(data)
{
	ShowModal('Message Sent!', '<p>Your message has been sent.  We will be in touch shortly!</p>');

	document.getElementById('mail').reset()
}