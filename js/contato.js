      

	 function a() {
         $('*').each(function(){

         var k =  parseInt($(this).css('font-size'));
         var redSize = ((k*110)/100) ; //here, you can give the percentage( now it is reduced to 90%)
             $(this).css('font-size',redSize);

         });
       }
       function d(){ 
         $('*').each(function(){

         var k =  parseInt($(this).css('font-size'));
         var redSize = ((k*90)/100) ; //here, you can give the percentage( now it is reduced to 90%)
             $(this).css('font-size',redSize);

         });
       }     

	   /*alterar aqui se necess�rio*/
function txt() {
document.body.style.backgroundColor = "black";
document.body.style.color = "#fff";
}

function txt2() {
document.body.style.backgroundColor = "white";
document.body.style.color = "black";
}




