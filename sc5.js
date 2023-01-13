var imagei=document.getElementById("myFile");//file
var pi =document.getElementById("addimg");//img
imagei.onchange=ev =>{
    const[phAbo]=imagei.files;
    if(phAbo){
        pi.src=URL.createObjectURL(phAbo);
    }
}



var theForm4 = document.testForm4;

function validationFunc4() {
    

/*if (theForm4.photo.value == "") {
    alert( "choose photo  please" );
    theForm4.photo.focus();
    return false;
}*/


if (theForm4.Nservice.value == "") {
    alert( "Enter service name  please" );
    theForm4.Nservice.focus();
    return false;
}
if (!isNaN(theForm4.Nservice.value)   ){
    alert( " All Number Not allowed" );
    theForm4.Nservice.focus();
    return false;
} 

if (theForm4.price.value == "") {
    alert( "Enter price   please" );
    theForm4.price.focus();
    return false;
}

if (theForm4.description.value == "") {
    alert( "Enter description  please" );
    theForm4.description.focus();
    return false;
}

if (!isNaN(theForm4.description.value)   ){
    alert( " All Number Not allowed" );
    theForm4.description.focus();
    return false;
} 
return (true);}

