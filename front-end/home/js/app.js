window.onload=function(){
	var Ocompleteone=document.querySelector('#completeone');
	var Ocompletetwo=document.querySelector('#completetwo');
	var Ocompletethree=document.querySelector('#completethree');
	var Ohiddenone=document.querySelector('#hiddenone');
	var Ohiddentwo=document.querySelector('#hiddentwo');
	var Ohiddenthree=document.querySelector('#hiddenthree');
	var Ocomeoutone=document.querySelector('#comeoutone');
	var Ocomeouttwo=document.querySelector('#comeouttwo');
	var Ocomeoutthree=document.querySelector('#comeoutthree');
	var Opackupone=document.querySelector('#packupone');
	var Opackuptwo=document.querySelector('#packuptwo');
	var Opackupthree=document.querySelector('#packupthree');
	Ocomeoutone.addEventListener('click',function(){
		Ocompleteone.style.display="block";
		Ohiddenone.style.display="none";
		Opackupone.style.display="block";
	});
	Ocomeouttwo.addEventListener('click',function(){
		Ocompletetwo.style.display="block";
		Ohiddentwo.style.display="none";
		Opackuptwo.style.display="block";
	});
	Ocomeoutthree.addEventListener('click',function(){
		Ocompletethree.style.display="block";
		Ohiddenthree.style.display="none";
		Opackupthree.style.display="block";
	});
	Opackupone.addEventListener('click',function(){
		Ocompleteone.style.display="none";
		Ohiddenone.style.display="block";
		Opackupone.style.display="none";
	});
	Opackuptwo.addEventListener('click',function(){
		Ocompletetwo.style.display="none";
		Ohiddentwo.style.display="block";
		Opackuptwo.style.display="none";
	});
	Opackupthree.addEventListener('click',function(){
		Ocompletethree.style.display="none";
		Ohiddenthree.style.display="block";
		Opackupthree.style.display="none";
	})
}
