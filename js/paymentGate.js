function submitPaymentData() {
   
    var name = document.getElementById("name").value;
    var address = document.getElementById("address").value;
    var selectcountry = document.getElementById("country")
    var country=selectcountry.options[selectcountry.selectedIndex].text;
    var mobile = document.getElementById("mobile").value;
    var email = document.getElementById("email").value;
    
        
    
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'method=1&name=' + name+ '&address=' + address+ '&country=' + country+ '&mobile=' + mobile+ '&email=' + email ;
    
    
    if (name == '' || email == '' || mobile == '' || address == '' ) {
    alert("Please Fill All Fields");
    }
    
    else {
    //AJAX code to submit form.
        $.ajax({
            type: "POST",
            async:false,
            url: "php/payment/payment.php",
            data: dataString,
            cache: false,
            success: function(s) {
            
         }
        });
        
    }
    return false;
    }