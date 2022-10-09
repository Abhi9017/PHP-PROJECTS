const form = document.querySelector(".login form"),
continuebtn = form.querySelector(".button input"),
errortext=form.querySelector(".error-txt");
form.onsubmit =(e)=>{
	 e.preventDefault();
}
continuebtn.onclick=()=>{
	
	let xhr=new XMLHttpRequest();
	xhr.open("POST","logincon.php",true);
	xhr.onload =()=>{
		if(xhr.readyState===XMLHttpRequest.DONE){
			if(xhr.status===200){
				let data = xhr.response;
								  console.log(data);

				if(data == "success	"){
                   location.href = "chatlogout.php";
				}else{
					errortext.textContent=data;
					errortext.style.display = "block";
					
				}
			}
		}
	}
	let formData = new  FormData(form);
	xhr.send(formData);
	
}
