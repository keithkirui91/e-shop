var dropdownDiv = document.getElementById("dropdownDiv");



dropdownDiv.style.display = "none";

function toggler(){
    
   
    if (dropdownDiv.style.display === "none") {
      dropdownDiv.style.display = "block";
      
  
    } 
    else{
      dropdownDiv.style.display = "none";
    }
}
