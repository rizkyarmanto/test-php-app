
$(".btnsubmit").prop('disabled', true);
	function recaptcha(response){
      $(".btnsubmit").prop('disabled', !response);
  	}
  $(document).ready(function(){
  		
		var BOX = $('.captchaBox');
        var WRAP = $('.captchaWrapper');
        var CONTAINER = $('.captchaContainer');
        var CHECK = $('#hiddenCaptcha');

        $(function(){
          if(CHECK.prop('checked')) {
            BOX.removeClass();
            BOX.addClass('captchaBox circle fadeOut');
          }
          CONTAINER.click(function() {
            if(CONTAINER.hasClass('captchaError')) {
              CONTAINER.removeClass('captchaError');
            }
          })
        });

        BOX.click(function(){
          $.ajax({
            url:murl,
            method:'post',
            data:{
              dt:dta
            },
            dataType: "json",
            success:function(result){
              if(result['code'] == 200 ) {
                  $('#g-recaptcha-response').next().html('');
                  $('#g-recaptcha-response').val(result['message']);
                  recaptcha(true);
              }else{
                  $('#g-recaptcha-response').next().html('Terjadi kesalahan memanggil Captcha.');
                  CONTAINER.addClass('captchaError');
                  recaptcha(false);
              }
            },
            error:function(result){
              CONTAINER.addClass('captchaError');
            },
          });
          setTimeout(scaleDown, 100);
        })
        function scaleDown() {
          BOX.addClass('scaleDown');
          setTimeout(scaleUp, 600);
        }
        function scaleUp() {
          BOX.removeClass('scaleDown boxHover').addClass('circle scaleUp');
          WRAP.addClass('rotation');

          setTimeout(fadeToMark, 1200);

        }
        function fadeToMark() {
          BOX.removeClass('scaleUp rotation').addClass('fadeOut');
          setTimeout(checkItOut, 400);
        }
        function checkItOut() {
          CHECK.prop('checked', true);
        }
	});