function submitMemberData() {
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var contact = document.getElementById("mobile").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'method=register&name=' + name + '&email=' + email + '&password=' + password + '&contact=' + contact;
if (name == '' || email == '' || password == '' || contact == '') {
alert("Please Fill All Fields");
} else {
//AJAX code to submit form.
    $.ajax({
        type: "POST",
        url: "includes/memberHedder.php",
        data: dataString,
        cache: false,
        success: function(html) {
        alert(html);
     }
    });
    
}
return false;
}