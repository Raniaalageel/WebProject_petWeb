var imagei=document.getElementById("phAbo");//file
 var pi =document.getElementById("addi");//img
 imagei.onchange=ev =>{
     const[phAbo]=imagei.files;
     if(phAbo){
         pi.src=URL.createObjectURL(phAbo);
     }
 }

//var imag=document.forms['testForm3']['fileim'];
 //var validate=["gif","png","jpg","jpeg"];
var theForm3 = document.testForm3;
 
function validationFunc3() {
   




    if (theForm3.about.value == ""||theForm3.about.length < 10 ) {
    alert( "Enter about us  more than 10 charcter please" );
    theForm3.about.focus();
    return false;
}
if (!isNaN(theForm3.about.value)   ){
    alert( " All Number Not allowed" );
    theForm3.about.focus();
    return false;
} 
if (theForm3.vision.value == ""||theForm3.vision.length < 10) {
    alert( "Enter vision u more than 10 charcter please" );
    theForm3.vision.focus();
    return false;
}
if (!isNaN(theForm3.vision.value)   ){
    alert( " All Number Not allowed" );
    theForm3.vision.focus();
    return false;
} 
if (theForm3.location.value == ""||theForm3.location.length < 10) {
    alert( "Enter location  more than 10 charcter please" );
    theForm3.location.focus();
    return false;
}
if (!isNaN(theForm3.location.value)   ){
    alert( " All Number Not allowed" );
    theForm3.location.focus();
    return false;
} 




return (true); }
