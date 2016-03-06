window.onload=function(){
			var Osignin=document.querySelector("#signin");
			var Osignup=document.querySelector("#signup");
			var Ologin=document.querySelector("#login");
			var Oregister=document.querySelector("#register");
			var Osliderbar=document.querySelector("#sliderbar");
			var Ocaptchaimage=document.querySelector("#captchaimage");
			var Oinformation=document.querySelector("#information");
			Osignup.addEventListener('click',function(){
				Osignup.style.color="#3291d9";
				Osignin.style.color="#555";
				Ologin.style.display="none";
				Oregister.style.display="block";
				Osliderbar.style.transform="translate(72px)";
			});
			Osignin.addEventListener('click',function(){
				Osignup.style.color="#555";
				Osignin.style.color="#3291d9"
				Ologin.style.display="block";
				Oregister.style.display="none";
				Osliderbar.style.transform="none";
			});
			Ocaptchaimage.addEventListener('mouseover',function(){
				Oinformation.style.display="block";
			});
			Ocaptchaimage.addEventListener('mouseout',function(){
				Oinformation.style.display="none";
			});
		}