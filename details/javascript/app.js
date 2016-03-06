window.onload=function(){
	var Obtn1=document.querySelector('#btn1');
	var Obtn2=document.querySelector('#btn2');
	var Obtn3=document.querySelector('#btn3');
	var Obtn4=document.querySelector('#btn4');
	var Obtn5=document.querySelector('#btn5');
	var Obtn6=document.querySelector('#btn6');
	var Otextdec=document.querySelector('#textdec');
	Obtn1.addEventListener('click',function(){
		btn1.style.backgroundColor="#a8a8cb";
		btn1.style.border="1px solid #a9a9a9";
		btn1.style.borderRadius="3px";
		Otextdec.style.fontWeight="bold";

	});
	Obtn2.addEventListener('click',function(){
		btn2.style.backgroundColor="#a8a8cb";
		btn2.style.border="1px solid #a9a9a9";
		btn2.style.borderRadius="3px";
		Otextdec.style.fontStyle="italic";
	});
	Obtn3.addEventListener('click',function(){
		btn3.style.backgroundColor="#a8a8cb";
		btn3.style.border="1px solid #a9a9a9";
		btn3.style.borderRadius="3px";
		Otextdec.style.textDecoration="underline"
	});
	Obtn4.addEventListener('click',function(){
		btn4.style.backgroundColor="#a8a8cb";
		btn4.style.border="1px solid #a9a9a9";
		btn4.style.borderRadius="3px";
	});
	Obtn5.addEventListener('click',function(){
		btn5.style.backgroundColor="#a8a8cb";
		btn5.style.border="1px solid #a9a9a9";
		btn5.style.borderRadius="3px";
	});
	Obtn6.addEventListener('click',function(){
		btn6.style.backgroundColor="#a8a8cb";
		btn6.style.border="1px solid #a9a9a9";
		btn6.style.borderRadius="3px";
	});
	
}