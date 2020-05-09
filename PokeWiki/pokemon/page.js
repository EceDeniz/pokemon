var input, filter, table, tr, td, i, txtValue, selected, type1Display, type2Display, generationDisplay, legendaryDisplay, a, link;

function init(){
	table = document.getElementById("dataTable");
	tr = table.getElementsByTagName("tr");
	type1Display = [];
	type2Display = [];
	generationDisplay = [];
	legendaryDisplay = [];
	for (i = 1; i < tr.length; i++) {
		type1Display[i] = true;
		type2Display[i] = true;
		generationDisplay[i] = true;
		legendaryDisplay[i] = true;
	}

	addLinks();
}

function addLinks(){
	for (i = 1; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[1];
		if (td) {
			txtValue = td.textContent || td.innerText;
			if (txtValue.toUpperCase() == "BULBASAUR") {
				txtValue = txtValue.link("Bulbasaur.html");
				td.innerHTML = txtValue;
				createLink();
				a.href = "Bulbasaur.html";
				td.appendChild(a);
			}
			else if (txtValue.toUpperCase() == "CHARMANDER") {
				txtValue = txtValue.link("Charmander.html");
				td.innerHTML = txtValue;
				createLink();
				a.href = "Charmander.html";
				td.appendChild(a);
			}
			else if (txtValue.toUpperCase() == "SQUIRTLE") {
				createLink();
				a.href = "Squirtle.html";
				td.appendChild(a);
			}
			else if (txtValue.toUpperCase() == "PIKACHU") {
				createLink();
				a.href = "Pikachu.html";
				td.appendChild(a);
			}
			else if (txtValue.toUpperCase() == "EEVEE") {
				createLink();
				a.href = "Eevee.html";
				td.appendChild(a);
			}
			else if (txtValue.toUpperCase() == "SNORLAX") {
				createLink();
				a.href = "Snorlax.html";
				td.appendChild(a);
			}
			else if (txtValue.toUpperCase() == "JIGGLYPUFF") {
				createLink();
				a.href = "Jigglypuff.html";
				td.appendChild(a);
			}
			else if (txtValue.toUpperCase() == "MEOWTH") {
				createLink();
				a.href = "Meowth.html";
				td.appendChild(a);
			}
			else if (txtValue.toUpperCase() == "MAGIKARP") {
				createLink();
				a.href = "Magikarp.html";
				td.appendChild(a);
			}
			else if (txtValue.toUpperCase() == "GENGAR") {
				createLink();
				a.href = "Gengar.html";
				td.appendChild(a);
			}

		}
	}
}
function createLink(){
	a = document.createElement("a");
	link = document.createElement("IMG");
	link.setAttribute("src", "img/go_to.png");
  	link.setAttribute("class", "goTo");
	a.appendChild(link);	
}


function searchName(){
  input = document.getElementById("nameInput");
  filter = input.value.toUpperCase();
  
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.visibility = "visible";
      } else {
        tr[i].style.visibility = "collapse";
      }
    }       
  }
}

function filterGeneration(){
	selected = document.getElementById("generation").value;
	
  	for (i = 1; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[11];
	    if (td) {
	      	txtValue = td.textContent || td.innerText;
	    	if (txtValue == selected || selected == "GENERATION") {
	        	generationDisplay[i] = true;
	      	} else {
	       		generationDisplay[i] = false;
	     	}
	    } 

	  	display(i);
	}
}

function filterLegendary(){
	selected = document.getElementById("legendary").value.toUpperCase();
	
  	for (i = 1; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[12];
	    if (td) {
	      	txtValue = td.textContent || td.innerText;
	    	if (txtValue.toUpperCase() == selected || selected == "LEGENDARY") {
	        	legendaryDisplay[i] = true;
	      	} else {
	       		legendaryDisplay[i] = false;
	     	}
	    } 

	  	display(i);
	}
}

function filterType1(){
	selected = document.getElementById("type1").value.toUpperCase();
	
  	for (i = 1; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[2];
	    if (td) {
	      	txtValue = td.textContent || td.innerText;
	    	if (txtValue.toUpperCase() == selected || selected == "TYPE 1") {
	        	type1Display[i] = true;
	      	} else {
	       		type1Display[i] = false;
	     	}
	    } 

	  	display(i);
	}
}

function filterType2(){
	selected = document.getElementById("type2").value.toUpperCase();
	
  	for (i = 1; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[3];
	    if (td) {
	      	txtValue = td.textContent || td.innerText;
	    	if (txtValue.toUpperCase() == selected || selected == "TYPE 2") {
	           	type2Display[i] = true;
	      	} else {
	       		type2Display[i] = false;
	     	}
	    }

	    display(i); 
	}
}

function display(i){
	if (type2Display[i] == true && type1Display[i] == true && generationDisplay[i] == true && legendaryDisplay[i] == true) {
	  	tr[i].style.display = "";
	}else{
	 	tr[i].style.display = "none";
 	}
}
