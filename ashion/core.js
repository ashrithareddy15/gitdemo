$.get('http:/ashion/convert.php')
.done((data)=>{
   
    var x=JSON.parse(data);

    var y=x[0]["productid"];

    let carts=document.querySelectorAll('.add-cart');
    let wish=document.querySelectorAll('.wishlist');
   
    let sorting=document.querySelectorAll('.sorting');
  
   
    for(let i=0;i<carts.length;i++)
   {
       console.log(x);
       var value;
     
       carts[i].addEventListener('mouseout',()=>{
          carts[i].innerText = "Add to Cart";
      
      })
      carts[i].addEventListener('mouseover',()=>{
      carts[i].innerText = "Please select a size";
      
      })
    sorting[i].addEventListener('click',()=>{
  value= quantitynull(x);
  console.log(value);


    })
   carts[i].addEventListener('click',()=>{
       console.log("when clicked");
   let getsize=localStorage.getItem('size');
if(value==1){
    console.log("doo nothing");
}
    else if(getsize!=null){
        x[i][9]=getsize;
        x[i]['size']=getsize;
    cartNumbers(x[i]);
    totalCost(x[i]);
  
  

    }
    else{
        alert('specify size');
 console.log("in else");
    }    
   })
  }



  function quantitynull(x){
flag=0;
    let getsize=localStorage.getItem('size');
    
    console.log("start "+getsize);
       if(getsize!=null ){
           for(let j=1;j<7;j++){
            
               if(x[j]['size']==getsize && x[j]['quantity']==0)
              {
                   flag=1;
                  console.log("qwertyuiop");
                 
               }
           }
        }

 console.log("in funccccc");
    var elem = document.getElementById("add-cart");
    console.log(elem);
    if(flag){
        elem.innerText = "Out of stock";
        elem.addEventListener('mouseout',()=>{
            elem.innerText = "Out Of Stock";
    
        })
     elem.addEventListener('mouseover',()=>{
        elem.innerText = "Notify Me";

    })
}
    else{

    elem.innerText = "Add to cart";
    
    elem.addEventListener('mouseout',()=>{
        elem.innerText = "Add to cart";

    })
 elem.addEventListener('mouseover',()=>{
    elem.innerText = "Add to cart";

})
    }

return flag;


  }
//wishlist functions
  for(let j=0;j<wish.length;j++)
  {
  wish[j].addEventListener('click',()=>{
  wishNumbers(x[j]);
  console.log("in wish");
 
  })
 }
 
 function wishNumbers(x){
    
    let prodNumbers=localStorage.getItem('wishNumbers');
    console.log(typeof prodNumbers);
    prodNumbers=parseInt(prodNumbers);
    let y=document.getElementsByClassName("heart");
    console.log(prodNumbers);
    let wishItem=localStorage.getItem('wishesInCart');
    wishItem=JSON.parse(wishItem);

    if(wishItem!=null)
    {
        
        if(wishItem[x["productid"]]==undefined){
           
          prodNumbers+=1
        }
        
    }
    if(prodNumbers)
    {
        localStorage.setItem('wishNumbers',prodNumbers);

        y[0].innerHTML=`
        <div class="tip">${prodNumbers}</div>
        `;
        y[1].innerHTML=` <div class="tip">${prodNumbers}</div>`;
    }
    else{
        localStorage.setItem('wishNumbers',1);
        y[0].innerHTML=`
        <div class="tip">1</div>
        `;
        y[1].innerHTML=` <div class="tip">1</div>`;
    }
    
   wishItems(x);
  }

  function onLoadWishNumbers(){
    let prodNumbers = localStorage.getItem('wishNumbers');
    let x=document.getElementsByClassName("heart");
    console.log("prodNumbers");
    console.log(prodNumbers);
    if(prodNumbers){
        x[0].innerHTML=`
        <div class="tip">${prodNumbers}</div>
        `;
        x[1].innerHTML=` <div class="tip">${prodNumbers}</div>`;
    }
    else{
        x[0].innerHTML=`
        <div class="tip">0</div>
        `;
        x[1].innerHTML=` <div class="tip">0</div>`;
    }
  }

  function wishItems(x){
    let wishItems=localStorage.getItem('wishesInCart');
    wishItems=JSON.parse(wishItems);

    if(wishItems!=null)
    {
        
        if(wishItems[x["productid"]]==undefined){
           
            console.log("Inside inside if");
            wishItems={
                ...wishItems,
                [x["productid"]]:x
            }
            console.log(wishItems);
            alert("added");
        }
        
    }else{
        
      
        wishItems={
        [x["productid"]]:x
      }
    }
    
      localStorage.setItem("wishesInCart",JSON.stringify(wishItems));
    }
//wishlist ends


    
//add cart functions
  function onLoadCartNumbers(){
      let x=document.getElementsByClassName("cart");
      
      
    let productNumbers = localStorage.getItem('cartNumbers');
    if(productNumbers){
        x[0].innerHTML=`
        <div class="tip">${productNumbers}</div>
        `;
        x[1].innerHTML=` <div class="tip">${productNumbers}</div>`;
       // document.querySelector('.cart span').textContent=productNumbers;
    }
    else{
        x[0].innerHTML=`
        <div class="tip">0</div>
        `;
        x[1].innerHTML=` <div class="tip">0</div>`;
    }
    localStorage.removeItem('size');
    flag=0;
  }

   function cartNumbers(x){
    
    let productNumbers=localStorage.getItem('cartNumbers');
    let y=document.getElementsByClassName("cart");
    
    productNumbers=parseInt(productNumbers);
   
    if(productNumbers)
    {
        localStorage.setItem('cartNumbers',productNumbers+1);
        y[0].innerHTML=`
        <div class="tip">${productNumbers}</div>
        `;
        y[1].innerHTML=` <div class="tip">${productNumbers}</div>`;
    }
    else{
        localStorage.setItem('cartNumbers',1);
        y[0].innerHTML=`
        <div class="tip">1</div>
        `;
        y[1].innerHTML=` <div class="tip">1</div>`;
    }
    
    setItems(x);
  }

   function setItems(x){

       
    let cartItems=localStorage.getItem('productsInCart');
    cartItems=JSON.parse(cartItems);
   var flag=0;
    if(cartItems!=null)
    {
    
    var len=Object.keys(cartItems).length;
    
    for(let i in cartItems)
       {
        console.log(x[0]+" "+cartItems[i].productid);
           if(x[0]==cartItems[i].productid && x['size']==cartItems[i].size)
         {  
             flag=1;
         
              
              cartItems[i]["quantity"]+=1;
              
          }   
         
        
          
       } 
       if(flag==0)
       {
           
        x["quantity"]=1;
        cartItems={
            ...cartItems,
            [len]:x
        }
       }
    
}else{
        
       x["quantity"]=1;
        cartItems={
        [0]:x
      }
    }
    
      localStorage.setItem("productsInCart",JSON.stringify(cartItems));
    }

    function totalCost(x)
    {   
        var y=x["price"];
        y=parseInt(y);
        let cartcost=localStorage.getItem('totalcost');
        cartcost=parseInt(cartcost);
       
        if(cartcost)
        {
            localStorage.setItem("totalcost",cartcost+y);
            
        }
        else{
            localStorage.setItem("totalcost",y);
        }
    }



   


   
onLoadWishNumbers();
onLoadCartNumbers();
    
});


$(document).ready(function(){
    $('#size').change(function(){
      var sizeid=$(this).val();
      
     
      console.log(sizeid);
      $.ajax({
         url:"http:/ashion/convert.php?submitType="+sizeid,
         type: "POST",
         data:"size="+sizeid,
      
        success:function(data)
        {
            console.log(data);
        }
      });

      let size=localStorage.getItem('size');
      localStorage.setItem('size',sizeid);
    });
   });






function register(){
    var username  = $('#username').val();
    var password = $('#password').val();
    var confirmpass = $('#confirmpass').val();
    var contact= $('#contact').val();
    var email = $('#email').val();
    var city = $('#city').val();
    
    $.ajax({
        type: "POST",
        url: "http:/ashion/helper.php?submitType=register",
        data: "username="+username+"&password="+password+"&confirmpass="+confirmpass+"&contact="+contact+"&email="+email+"&city="+city, 
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
        beforeSend: function() {
            $('.formResult').html('Processing....');
            },
        success: function(html) {
            $('.formResult').html(html);
        }
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






function register(){
    var username  = $('#username').val();
    var password = $('#password').val();
    var confirmpass = $('#confirmpass').val();
    var contact= $('#contact').val();
    var email = $('#email').val();
    var city = $('#city').val();
    
    $.ajax({
        type: "POST",
        url: "http:/ashion/helper.php?submitType=register",
        data: "username="+username+"&password="+password+"&confirmpass="+confirmpass+"&contact="+contact+"&email="+email+"&city="+city, 
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
        beforeSend: function() {
            $('.formResult').html('Processing....');
            },
        success: function(html) {
            $('.formResult').html(html);
        }
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

