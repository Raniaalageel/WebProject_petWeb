/////////RegPage:
var theForm = document.testForm;

//var imag=document.forms['testForm']['photo'];
 //var validate=["gif","png","jpg","jpeg"];

 

   





function validationFunc() {
   /* if(imag.value!=''){
        var pos=imag.value.lastIndexOf('.');
        var img_ext=imag.value.subString(pos);
    console.log(img_ext);
    var result=validExt.includes(img_ext);
    if(result==false){
    
        alert( "Invalid image File" ); 
        return false;
    }

}*/



if (theForm.Nservice.value == ""|| theForm.Nservice.value.length <3) {
    alert( "Enter the service please more than 3 charcter" );
    theForm.Nservice.focus();
    return false;
}
if (!isNaN(theForm.Nservice.value)   ){
    alert( " All Number Not allowed" );
    theForm.Nservice.focus();
    return false;
} 
if (theForm.price.value == "") {
    alert( "Enter the price please" );
    theForm.price.focus();
    return false;
}

if (theForm.description.value == "" || theForm.description.value.length < 15) {
    alert( "Enter the description please more then 15 charcter" );
    theForm.description.focus();
    return false;
}
if (!isNaN(theForm.description.value)   ){
    alert( " All Number Not allowed" );
    theForm.description.focus();
    return false;
} 

if (theForm.photo.value == "") {
    alert( "Enter the photo please" );
    theForm.photo.focus();
    return false;
}

return (true);
}
const myFile=document.querySelector("#myFile");
var upimg="";

myFile.addEventListener("change" , function(){

const reader=new FileReader();
reader.addEventListener("load",() =>{
    upimg=reader.result;
    document.querySelector("#addimg").style.backgroundImage=`url(${upimg})`;

});
reader.readAsDataURL(this.files[0]);

});
