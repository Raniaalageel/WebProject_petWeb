var theForm = document.testForm4;
/*var fname=document.testForm4.name.value;  
var breed= document.testForm4.breed.value;  
var gender=document.testForm4.gender.value;  
var stat=document.testForm4.stat.value;  
var photo=document.testForm4.photo.value;  
var bdate=document.testForm4.date.value; */ 
var now = new Date();


            
function myvalidationFunc() {

    if (theForm.photo.value == "") {
    alert( "Enter the photo please" );
    theForm.photo.focus();
    return false;
}  
  
   
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
