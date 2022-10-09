const searchbar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
userslist = document.querySelector(".users .users-list");

searchBtn.onclick=()=>{
	searchbar.classList.toggle("active");
	searchbar.focus();
	searchBtn.classList.toggle("active");
	searchbar.value = "";
}

searchbar.onkeyup =() =>{
	
	let searchTerm = searchbar.value;
	if(searchTerm != ""){
		searchbar.classList.add("active");

	}else{
			searchbar.classList.remove("active");
									 

	
	}
		let xh = new XMLHttpRequest();
	xh.open("POST","search.php",true);
		

	xh.onload =()=>{
		if(xh.readyState===XMLHttpRequest.DONE){
			if(xh.status===200){
				let data = xh.response;
			   userslist.innerHTML = data;

            }
		}
	}
	xh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xh.send("searchTerm=" + searchTerm);
}

setInterval(()=>{
		let xhr=new XMLHttpRequest();
	xhr.open("GET","chatlogout2.php",true);
	xhr.onload =()=>{
		if(xhr.readyState===XMLHttpRequest.DONE){
			if(xhr.status===200){
				let data = xhr.response;
			 
			  if(!searchbar.classList.contains("active")){
			      userslist.innerHTML = data;

			  }

				
			}
		}
	}
	
xhr.send();
},500);