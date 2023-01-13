var theForm = document.ownerForm;
/*var fname=document.ownerForm.fname.value;  
var lname= document.ownerForm.lname.value;  
var gender=document.ownerForm.gender.value;  
var email=document.ownerForm.email.value;  
var phone=document.ownerForm.phone.value;  
var photo=document.ownerForm.photo.value;  */
var now = new Date();
var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
var phonev= /^[0-9]{10}$/;
 

function validationowner() {

    /*
    if ( fname==""){  
        alert("Name can't be blank");  
        fname.focus();
        return false; 
    }
    if (lname==null || lname==""){  
        alert("last name can't be blank");  
    
        breed.focus();
        return false;
    }
    

    if (gender == "") {
        //If the "Please Select" option is selected display error.
        alert("Please select a gender option!");
        gender.focus();
        return false;
    }
 

    if (!(email.match(validRegex))) {
  
      alert("inValid email address!");
  
      document.form1.text1.focus();
  
      return false;
  
    }
    if (!(phone.match(phonev))) {
  
        alert("inValid phone number!");
    
        document.form1.text1.focus();
    
        return false;
    
      }*/
    

      if (theForm.fname.value == "") {
        alert( "Enter the  name please" );
        theForm.fname.focus();
        return false;

}    if (theForm.lname.value == "") {
    alert( "Enter the last name please" );
    theForm.lname.focus();
    return false;
}    
 if (theForm.gender.value == "") {
    alert( "Enter the gender please" );
    theForm.gender.focus();
    return false;
}    
    
if (theForm.email.value == "") {
    alert( "Enter the email please" );
    theForm.email.focus();
    return false;
}   
  if (theForm.phone.value == "") {
    alert( "Enter the phone please" );
    theForm.phone.focus();
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
