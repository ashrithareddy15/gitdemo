function register(){
    var username  = $('#username').val();
    var password = $('#password').val();
    var confirmpass = $('#confirmpass').val();
    var contact= $('#contact').val();
    var email = $('#email').val();
    var city = $('#city').val();
    var x=document.getElementsByClassName("showFeedBack");
    console.log(x);
    var error=x[0].innerHTML+x[1].innerHTML+x[2].innerHTML+x[3].innerHTML+x[4].innerHTML+x[5].innerHTML;
    console.log(username);
    console.log(error);
    $.ajax({
        type: "POST",
        url: "http:/ashion/helper.php?submitType=register",
        data: "username="+username+"&password="+password+"&confirmpass="+confirmpass+"&contact="+contact+"&email="+email+"&city="+city+"&error="+error, 
        beforeSend: function() {
            $('.formResult').html('Processing....');
            },
        success: function(html) {
          
            $('.formResult').html(html);
        }
    });
}


function login(){
    var email = $('#email').val();
    var password = $('#password').val();
    $.ajax({
        type: "POST",
        url: "http:/ashion/helper.php?submitType=login",
        data: "email="+email+"&password="+password, 
        beforeSend: function() {
            $('.formResult').html('Processing....');
            },
        success: function(html) {
            $('.formResult').html(html);
        }
    });
}

function logout(){
   console.log("in logout");
    $.ajax({
        type: "POST",
        url: "http:/ashion/helper.php?submitType=logout",
        data: "", 
        
    });
}

function triggerClick() {
    document.querySelector('#profileImage').click();

}

function displayImage(e){
    if(e.files[0]){
        var reader =new FileReader();


        reader.onload=function(e){
            document.querySelector('#profileDisplay').setAttribute('src',e.target.result);

        }
        reader.readAsDataURL(e.files[0]);
    }
}

$(document).ready(function(){
    $('#username').keyup(function(){
        var regexp=/^[a-zA-Z ]+$/;
        
        if(regexp.test($('#username').val())){
         console.log("insoide mehtod");
            
            $('#username').next().html('');
            
         }else{
             $('#username').next().html('<p style="color:red;">Only letters and white space allowed</p>');
        }
    })
  
    $('#contact').keyup(function(){
        var regexp=/^[0-9]{10}$/;
        
        if(regexp.test($('#contact').val())){
         console.log("insoide mehtod");
            
            $('#contact').next().html('');
            
         }else{
             $('#contact').next().html('<p style="color:red;">Invalid contact</p>');
        }
    })

    $('#email').keyup(function(){
        var regexp=/^[a-zA-Z0-9._]+@[a-zA-Z0-9._]+\.[a-zA-Z]{2,4}$/;
        
        if(regexp.test($('#email').val())){
         console.log("insoide mehtod");
            
            $('#email').next().html('');
            
         }else{
             $('#email').next().html('<p style="color:red;">Invalid email format</p>');
        }
    })

    $('#city').keyup(function(){
        var regexp=/^[a-zA-Z ]+$/;
        
        if(regexp.test($('#city').val())){
         console.log("insoide mehtod");
            
            $('#city').next().html('');
            
         }else{
             $('#city').next().html('<p style="color:red;">Invalid City</p>');
        }
    })

    $('#password').keyup(function(){
        var regexp=/^[a-zA-Z0-9]{6,50}$/;
        
        if(regexp.test($('#password').val())){
         console.log("insoide mehtod");
            
            $('#password').next().html('');
            
         }else{
             $('#password').next().html('<p style="color:red;">Passwords must be atleast 6 characters and do not include special characters</p>');
        }
    })

    $('#confirmpass').keyup(function(){
        var regexp=/^[a-zA-Z0-9]{6,50}$/;
        
        if(regexp.test($('#confirmpass').val())){
         console.log("insoide mehtod");
            if($('#confirmpass').val()== $('#password').val())
            {
            $('#confirmpass').next().html('');
            }
            else{
             $('#confirmpass').next().html('<p style="color:red;">Passwords and Confirm Password do not match</p>');
            }
            
         }else{
             $('#confirmpass').next().html('<p style="color:red;">Passwords and Confirm Password do not match</p>');
        }
    })



}) 




