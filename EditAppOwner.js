/////////////////////////////////Edit an Appointment:
var theForm2 = document.testForm2;


function validationFunc2() {
    
if (theForm2.petName.value == "") {
        alert( "Enter the pet name please" );
        theForm2.petName.focus();
        return false;
}    
if (theForm2.serviceApp.value == "") {
    alert( "choose the service please" );
    theForm2.serviceApp.focus();
    return false;
}
if (theForm2.dateApp.value == "") {
    alert( "Enter the date please" );
    theForm2.date.focus();
    return false;
}
if (theForm2.dateApp.value == "") {
    alert( "Enter the time please" );
    theForm2.time.focus();
    return false;
}

if (theForm2.noteApp.value == ""||theForm2.noteApp.value.length < 10) {
    alert( "Enter the not please more then 10 charcter" );
    theForm2.noteApp.focus();
    return false;
}


return (true);
}

