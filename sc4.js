/////////////////////////////////setAvalibleAppointment:
/////////////////////////////////setAvalibleAppointment:
var theForm2 = document.testForm2;


function validationFunc2() {
if (theForm2.service.value == "") {
    alert( "choose the service please" );
    theForm2.service.focus();
    return false;
}
if (theForm2.date.value == "") {
    alert( "Enter the date please" );
    theForm2.date.focus();
    return false;
}
if (theForm2.time.value == "") {
    alert( "Enter the time please" );
    theForm2.time.focus();
    return false;
}

if (theForm2.note.value == ""||theForm2.note.value.length < 10) {
    alert( "Enter the not please more then 10 charcter" );
    theForm2.note.focus();
    return false;
}
if (!isNaN(theForm2.note.value)   ){
    alert( " All Number Not allowed" );
    theForm2.note.focus();
    return false;
} 
if (!isNaN(theForm2.note.value)   ){
    alert( " All Number Not allowed" );
    theForm2.note.focus();
    return false;
} 


return (true);
}
///////////////////////////////////////////editAbout:
/*var theForm3 = document.testForm3;

function validationFunc3() {
if (theForm3.about.value == "") {
    alert( "Enter About us more than 15 charcter please" );
    theForm3.about.focus();
    return false;
}





return (true);
}*/





