var theForm = document.testForm4;
var now = new Date();


            
function myvalidationFunc() {
   
    if (theForm.name.value == "") {
        alert( "Enter the pet name please" );
        theForm.name.focus();
        return false;

}    if (theForm.breed.value == "") {
    alert( "Enter the breed please" );
    theForm.breed.focus();
    return false;
}    
 if (theForm.date.value == "") {
    alert( "Enter the date please" );
    theForm.date.focus();
    return false;
}    
    
if (theForm.gender.value == "") {
    alert( "Enter the gender please" );
    theForm.gender.focus();
    return false;
}   
  if (theForm.stat.value == "") {
    alert( "Enter the stat please" );
    theForm.stat.focus();
    return false;
} 
   
  
              /*  if((alphaExp.test(fname)))
                {
                    
                    alert("Please enter only alphabets");//!regName.test(name)fname
                    fname.focus();
                    return false;
                }*/

return (true);
}
