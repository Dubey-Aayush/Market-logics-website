function refresh()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
function refresh1()
{
	var http1 = new XMLHttpRequest();
		http1.open("GET","getStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("tata_remaining").innerHTML=this.responseText;
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
setInterval(function(){console.log('refresh');},1000);
setInterval(function(){console.log('refresh1');},1000);