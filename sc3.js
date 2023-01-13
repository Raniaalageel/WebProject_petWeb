///rvwNew user::::


//print("hiii");
var theForm6 = document.testForm6;

function validationFunc6() {
    if (theForm6.rate2.value == "") {
        alert( "Enter  rate  please" );
        theForm6.rate2.focus();
        return false;
    }

if (theForm6.recommend2.value == ""||theForm6. recommend2 .value.length < 10) {
    alert( "Enter   more than 10 charcter please" );
    theForm6. recommend2 .focus();
    return false;
}

if (theForm6.feedb2.value == ""||theForm6.feedb2.value.length < 10) {
    alert( "Enter   more than 10 charcter please" );
    theForm6. feedb2 .focus();
    return false;
}

return (true);}
