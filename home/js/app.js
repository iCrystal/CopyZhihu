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
	Ocomeoutone.addEventListener('click',function(){
		Ocompleteone.style.display="block";
		Ohiddenone.style.display="none";
	});
	Ocomeouttwo.addEventListener('click',function(){
		Ocompletetwo.style.display="block";
		Ohiddentwo.style.display="none";
	});
	Ocomeoutthree.addEventListener('click',function(){
		Ocompletethree.style.display="block";
		Ohiddenthree.style.display="none";
	});
}
