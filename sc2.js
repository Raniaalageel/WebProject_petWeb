///////////////editMax:
var theForm4 = document.testForm4;

function validationFunc4() {
    if (theForm4.date.value == "") {
        alert( "Enter date  please" );
        theForm4.date.focus();
        return false;
    }
    if (theForm4.service.value == "") {
        alert( "choose service  please" );
        theForm4.service.focus();
        return false;
    }
    if (theForm4.time.value == "") {
        alert( "Enter time  please" );
        theForm4.time.focus();
        return false;
    }
if (theForm4.note.value == ""||theForm4.note.value.length < 10) {
    alert( "Enter note  more than 10 charcter please" );
    theForm4.note.focus();
    return false;
}
if (!isNaN(theForm4.note.value)   ){
    alert( " All Number Not allowed" );
    theForm4.note.focus();
    return false;
} 

return (true);}

