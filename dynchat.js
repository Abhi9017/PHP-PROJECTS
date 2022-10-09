const form = document.querySelector(".typing-area"),
sendBtn = form.querySelector("button"),
inputfield = form.querySelector(".input-field"),
chatbox = document.querySelector(".chat-box");


form.onsubmit=(e)=>{
	e.preventDefault();
}
sendBtn.onclick = () =>{
	let xhr=new XMLHttpRequest();
	xhr.open("POST","insert-chat.php",true);
	xhr.onload =()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status===200){
				inputfield.value = "";
				scrollToBottom();
				
				
			}
		}
	}
	let formData = new  FormData(form);
	xhr.send(formData);
	


}

chatbox.onmouseenter = () =>{
	chatbox.classList.add("active");
}
chatbox.onmouseleave = () =>{
	chatbox.classList.remove("active");
}
setInterval(()=>{
		let xhr=new XMLHttpRequest();
	xhr.open("POST","get-chat.php",true);
	xhr.onload =()=>{
		if(xhr.readyState===XMLHttpRequest.DONE){
			if(xhr.status===200){
				let data = xhr.response;
			 
			    chatbox.innerHTML = data;
				if(!chatbox.classList.contains("active")){
					scrollToBottom();
				}

			}
		}
	}
	let formData = new  FormData(form);
	xhr.send(formData);

},500);

function scrollToBottom(){
	chatbox.scrollTop = chatbox.scrollHeight;
}


/*let data = xhr.response;
				 console.log(data);

				if(data == "success	"){
                   location.href = "chatlogout.php";
				}else{
					errortext.textContent=data;
					errortext.style.display = "block";
					
				}*/