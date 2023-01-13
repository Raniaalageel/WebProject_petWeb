/////////////////////////////////Request an Appointment:
var theForm2 = document.testForm2;


function validationFunc2() {


    if (theForm2.pet_name.value == "") {
        alert( "Enter the pet name please" );
        theForm2.pet_name.focus();
        return false;
}    

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


return (true);
}

