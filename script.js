


$(document).ready(function () {
    
var apiKey="42af261bbba60b554401bb9d58bc8cfb";
//e01f49eddd2bad8d92a490e4bc06082d avneet_kochhar0173@hotmail.com
// 298bdba7b463d53fced75e76a63dfa26  sasktel.com
 var data;
 var url;
 var submitButton= $('.button');
 var inputEmail= $( "input[name=email]" );
var ipAddress;
var today = new Date();
var monthArray=['january','february','march','april','may','june','july','august','september','october','november','december'];		
var month= monthArray[today.getMonth()];

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
$('.para').css("font-size","12px");
}
else{
$('.para').css("font-size","15px");

}




    $.ajax({
        url:'https://api.ipify.org/?format=json&callback=getIP',
        complete: function (response) {
      var obj = jQuery.parseJSON( response.responseText );
    ipAddress=obj.ip;
    
               $.ajax({
                url:'https://freegeoip.net/json/'+ipAddress,
                complete: function (response) {
              var obj = jQuery.parseJSON( response.responseText );
                 var location=obj.city+', '+ obj.region_code+', '+obj.country_name;
                 	document.getElementById("city").value=obj.city;
                 	document.getElementById("province").value=obj.region_name;
                 	document.getElementById("country").value=obj.country_name;
            	document.getElementById("month").value = monthArray[today.getMonth()]; 
            	document.getElementById("year").value = today.getFullYear(); 
            		document.getElementById("location").value =location; 
        
            $( "#h2" ).html( "<p >Welcome! its "+ monthArray[today.getMonth()]+" "+today.getFullYear()+"</p>" );
             $( "#h4" ).html( "<span>you are based in "+location+"</span>" );
                },
                error: function () {
                    $('#output').html('invalid adress');
                },
            });
    
        },
        error: function () {
         alert('invalid ip adress')  
        },
    });





$( "input" ).on('mouseleave keypress focusout keyup keydown blur change', function(e) {
    $('#error').css('display','none');
    $('#error2').css('display','none');
$('#notice').css('display','none');
});


$( "input[name='email']" ).on('focusout mouseleave', function(e) {
      var emailAdd=inputEmail.val();
	
            if( isValidEmailAddress(emailAdd ) && $( "input" ).val()!="" ) {
            console.log('calling api');
            url="https://apilayer.net/api/check?access_key="+apiKey+"&email="+emailAdd+"&smtp=1&format=1";
            
            $.ajax({
            dataType: "json",
            url: url,
            data: data,
            success: function (data) {
           
                if(data.smtp_check){
                   checkDataBase(emailAdd,month);
                }
                else{
                     submitButton.css({"pointer-events": "none", "cursor": "default","background-color":"#2d7e91","color":"white"});
                $('#error').css('display','block');
                e.preventDefault(e);
                }
            }
            });
            } 
            else
            submitButton.css({"pointer-events": "none", "cursor": "default","background-color":"#2d7e91","color":"white"});
             
});


function checkDataBase(email,mont){
    var urlCheck="https://singhavneet.000webhostapp.com/vote/api.php/?party=&month="+mont+"&email="+email;
      
      try {
             $.ajax({
                    dataType: "json",
                    url: urlCheck,
                    data: data,
                    success: function (data) {
                        try {
                                 if (data[0].id!= null) {
                                      submitButton.css({"pointer-events": "none", "cursor": "default","background-color":"#2d7e91","color":"white"});
                                         $('#error2').css('display','block');
                                 }
                            }
                            catch(err) {
                                submitButton.css({"pointer-events": "all", "cursor": "pointer","background-color":"#2d7e91","color":"white"}); 
                                var lent = history.length;
                                    history.go(-lent);
                            }
                       
                    }
              });
}
catch(err) {
    alert("value is undefine");
}
      
      
      
      
   
    
}

 function isValidEmailAddress(email) {
 var pattern =  new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

 return pattern.test(email);
 }
 
 







});



