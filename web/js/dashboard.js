var id="",comm="";
var flag=0;
function del(line){
	if(line.checked){
		flag=1;
		var a=line.value.split("+");
		id=a[0];
		comm=a[1];
	}
	else	
		flag=0;
	
}
function update(){
	if(flag==1){
		var xml=new XMLHttpRequest();
		xml.onreadystatechange=function gen(){
			if(xml.readyState==4 && xml.status==200){
				$("#tb_div").html(xml.responseText);						
			}					
		}
		xml.open("post","comment.php",true);
		xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xml.send("name=del&comm="+comm);
	}
	else	
		return;
}