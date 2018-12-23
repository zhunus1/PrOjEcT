function price() {
    var x = document.getElementById("brands");
    var z=document.getElementById("par1");
    var y=document.getElementById("par2");
        x.style.display = "none";
        z.value="true";
        y.value="false";
        
}
//------------------------------------------------------------
function parametr() {
    var x = document.getElementById("brands");
    var z=document.getElementById("par1");
    var y=document.getElementById("par2");
        x.style.display = "block"; 
        z.value="false";
        y.value="true";
}
//------------------------------------------------------------
let brandss = ["Mercedes-Benz","Lexus","Rolls&Royce","BMW","Lamborghini","Ferrari"];
let modelss = {"Mercedes-Benz":["S 400","S63 AMG","S65 AMG"],"Lexus":["LS500","RX350h","NX200t"],"Rolls&Royce":["Wraith","Ghost","Phantom"],"Lamborghini":["Aventador","Huracan"],"BMW":["M5","760Li","X6M"],"Ferrari":["458 Italia","FF","California"]};
function f() {
    var q = document.getElementById('modeli');
    for (let i in q){
    	q.remove(i);}
    for (let i in modelss){
    	if(event.target.value ==  i){
    		for(let j of modelss[i]){
    			a1 = document.createElement("option");
                a1.text = j;
                q.add(a1);}}}}
	var c = document.getElementById('brandy');
	for (let i of brandss){
    	let ad = document.createElement("option");
    	ad.text = i;
    	c.add(ad);
	}
document.getElementById('brandy').addEventListener('click',f);
//Getting data from form!
//----------------------------------------------------------
let car = {};
function getInformFull(){
	car["brand"]=document.getElementById("brandy").value;
	car["model"]=document.getElementById("modeli").value;
	car["pricefrom"]=document.getElementsByName("price1")[0].value;
	car["priceto"]=document.getElementsByName("price2")[0].value;
	car["yearfrom"]=document.getElementsByName("year")[0].value;
	car["yearto"]=document.getElementsByName("year")[1].value;
    
}

function getInformPart(){
	car["pricefrom"]=document.getElementsByName("price1")[0].value;
	car["priceto"]=document.getElementsByName("price2")[0].value;
	car["yearfrom"]=document.getElementsByName("year")[0].value;
	car["yearto"]=document.getElementsByName("year")[1].value;

}
//--------------------------------------------------------
function checking(){
	if(document.getElementById("par1").value=="false"){
		getInformFull();
	}else if(document.getElementById("par2").value=="false"){
		getInformPart();
	}else{
	   getInformFull();
	}
}

document.getElementsByTagName("form")[0].addEventListener('click',checking);
//-------------------------------------------------------
