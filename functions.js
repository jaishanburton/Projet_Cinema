// JavaScript source code

var counter = 1;
setInterval(function()
{
	document.getElementById('radio' + counter).checked = true;
	counter++;
	if(counter > 5){
	counter = 1;
	}
}, 5000);

var valpanier = 0;

function panierenplus(num)//Sousprog d'addition des prix des articles dans le panier
{ 
	var valTicket=0;	
	var nbTicket=0;

	if ((valTicket=document.getElementById("nb1")).selected) 
	{
		nbTicket += 1;		///number of ticket
	}
	else if ((valTicket=document.getElementById("nb2")).selected) 
	{
		nbTicket += 2;		///number of ticket
	}
	else if ((valTicket=document.getElementById("nb3")).selected) 
	{
		nbTicket += 3;		///number of ticket
	}
	else if ((valTicket=document.getElementById("nb4")).selected) 
	{
		nbTicket += 4;		///number of ticket
	}
	else if ((valTicket=document.getElementById("nb5")).selected) 
	{
		nbTicket += 5;		///number of ticket
	}
	else if ((valTicket=document.getElementById("nb6")).selected) 
	{
		nbTicket += 6;		///number of ticket
	}
	else if ((valTicket=document.getElementById("nb7")).selected) 
	{
		nbTicket += 7;		///number of ticket
	}

	if ((valTicket=document.getElementById("AdultTicket")).selected) 
	{
		valpanier += nbTicket*25;		///Price of the Adult Ticket £25
	}
	else if ((valTicket=document.getElementById("ChildTicket")).selected) 
	{
		valpanier += nbTicket*15;		///Price of the Child Ticket 15£
	}
	else if ((valTicket=document.getElementById("StudentTicket")).selected) 
	{
		valpanier += nbTicket*20;		///Price of the Adult Student £20
	}
	else if ((valTicket=document.getElementById("SeniorTicket")).selected) 
	{
		valpanier += nbTicket*18;		///Price of the Adult Senior £18
	}

	document.getElementById("valpanier").innerHTML=valpanier;//Retourner la valeur du panier
	
}
