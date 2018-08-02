function pag_control(){
	if(!y){
	document.getElementById("previous").style.display= "none";
	}else{
	document.getElementById("next").style.display= "none";
	}
	
}
function search_show(){
	 document.getElementById("search_default").style.display= "none";
	 document.getElementById("search_prompt").style.display= "inline-block";
 }
 function search(x){
		
	    document.getElementById("payload").style.display = "none";
		document.getElementById("footer").style.display = "none";
		document.getElementById("search_results").style.display = "block";
		var hr = new XMLHttpRequest();
		var url = "pages/parser.php";
		var search_load = document.getElementById("value_search").value;
		var vars = "name_search="+ search_load+"&pn="+x;
		hr.open("POST",url,true);
		hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		hr.onreadystatechange = function(){
			if(hr.readyState ==4 && hr.status == 200){
				var return_data = hr.responseText;
				document.getElementById("search_results").innerHTML = return_data;
			}
		}
		hr.send(vars);	
		document.getElementById("search_results").innerHTML = "<img src='images/loading.gif' />";
	 }
function prompt_reverse(){
	var s_load = document.getElementById("value_search").value;
	if(s_load == ""){
		var leave = document.getElementById("search_prompt");
		leave.style.display= "none";
		document.getElementById("search_default").style.display= "inline-block";
	}
}
		function back(){
		document.getElementById("payload").style.display = "block";
		document.getElementById("footer").style.display = "block";
		document.getElementById("search_results").style.display = "none";
	}