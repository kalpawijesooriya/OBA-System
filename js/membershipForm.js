




$(document).ready(function(e){

document.getElementById("error_email").style.display='none';
document.getElementById("error_nic").style.display='none';
document.getElementById("error_bd").style.display='none';
document.getElementById("error_password").style.display='none';
  $("#register_form").on('submit', function(e){
   e.preventDefault();
  var nic = document.getElementById("nic").value;
  var selecttitle = document.getElementById("title")
  var title=selecttitle.options[selecttitle.selectedIndex].text;
  var name = document.getElementById("name").value;
  var birthday = document.getElementById("birthday").value;
  var address = document.getElementById("address").value;
  var selectcountry = document.getElementById("country")
  var country=selectcountry.options[selectcountry.selectedIndex].text;
  var phone = document.getElementById("phone").value;
  var mobile = document.getElementById("mobile").value;
  var email = document.getElementById("email").value;
  var index_num = document.getElementById("index_num").value;
  var ol_year = document.getElementById("ol_year").value;
  var al_year = document.getElementById("al_year").value;
  var password = document.getElementById("password").value;
  var confirmPassword =document.getElementById("confirmPass").value;

  // Returns successful data submission message when the entered information is stored in database.
 
  if(nic.length!=10){
    document.getElementById("error_nic").style.display='block';
  } else if(birthday.length!=14){
    document.getElementById("error_bd").style.display='block';
  } else if (password != confirmPassword) {
    document.getElementById("error_password").style.display='block';
      
  }else if(!validateEmail()){
    document.getElementById("error_email").style.display='block';
  }
  else {
  
//AJAX code to submit form.
    $.ajax({
        type: "POST",
        async:false,
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        url: "php/membership/memberHedder.php",
        beforeSend: function(){
          $('.submitBtn').attr("disabled","disabled");
          $('#fupForm').css("opacity",".5");
        },
        success: function(s) {
         alert(e)
         $(".submitBtn").removeAttr("disabled");
     }
    });
    
    }
    return false;
    
    });
 });

 $("#file").change(function() {
  var file = this.files[0];
  var imagefile = file.type;
  var match= ["image/jpeg","image/png","image/jpg"];
  if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
      alert('Please select a valid image file (JPEG/JPG/PNG).');
      $("#file").val('');
      return false;
  }
})
//------------------------------------------------------------------------------------------------Styles

var date = document.getElementById('birthday');

function checkValue(str, max) {
  if (str.charAt(0) !== '0' || str == '00') {
    var num = parseInt(str);
    if (isNaN(num) || num <= 0 || num > max) num = 1;
    str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
  };
  return str;
};

date.addEventListener('input', function(e) {
  this.type = 'text';
  var input = this.value;
  if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
  var values = input.split('/').map(function(v) {
    return v.replace(/\D/g, '')
  });
  if (values[0]) values[0] = checkValue(values[0], 31);
  if (values[1]) values[1] = checkValue(values[1], 12);
  var output = values.map(function(v, i) {
    return v.length == 2 && i < 2 ? v + ' / ' : v;
  });
  this.value = output.join('').substr(0, 14);
});

date.addEventListener('blur', function(e) {
  this.type = 'text';
  var input = this.value;
  var values = input.split('/').map(function(v, i) {
    return v.replace(/\D/g, '')
  });
  var output = '';
  
  if (values.length == 3) {
    var year = values[2].length !== 4 ? parseInt(values[2]) + 2000 : parseInt(values[2]);
    var month = parseInt(values[0]) - 1;
    var day = parseInt(values[1]);
    var d = new Date(year, month, day);
    if (!isNaN(d)) {
      document.getElementById('result').innerText = d.toString();
      var dates = [d.getMonth() + 1, d.getDate(), d.getFullYear()];
      output = dates.map(function(v) {
        v = v.toString();
        return v.length == 1 ? '0' + v : v;
      }).join(' / ');
    };
  };
  this.value = output;
});

//NIC validation
var nic = document.getElementById('nic');
nic.addEventListener('input', function(e) {
    this.type = 'text';
    var input = this.value;

    if(isNaN(parseInt(input))){
        this.value= ""
    }
    else if( this.value.length==9)
    {
        this.value= this.value+"v"
        document.getElementById("error_nic").style.display='none';
    }
   
  
    this.value = this.value.substr(0, 10);

 
  });

  nic.onkeydown = function() {
    var key = event.keyCode || event.charCode;

    if( key == 8 || key == 46 )
    this.value=""
};

// password validation
  var password = document.getElementById("password");
  var confirmPassword =document.getElementById("confirmPass");


password.addEventListener('input', function(e) {

      if( this.value.length>6)
      {
          confirmPassword.disabled = false;
      }
      else
      {
          confirmPassword.disabled = true;
      }  
  });

  password.onclick= function(){
    document.getElementById("error_password").style.display='none';
  };
  password.onclick = function(){
    document.getElementById("error_password").style.display='none';
  };
  confirmPassword.onclick = function(){
    document.getElementById("error_password").style.display='none';
  };

//email validations annd error msgs
    function validateEmail() {
      var emailText = document.getElementById('email').value;
      var pattern = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
      if (pattern.test(emailText)) {
          return true;
      } else {
          return false;
      }
  }
  email=document.getElementById("email");

  email.onclick = function(){
    document.getElementById("error_email").style.display='none';
  };
  email.addEventListener('input', function(e) {

    var emailText = email.value;
    var pattern = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
    if (pattern.test(emailText)) {
      document.getElementById("error_email").style.display='none';
    } else {
      document.getElementById("error_email").style.display='block';
    } 
 });

// nic validation add error msgs
 nic=document.getElementById("nic");
 nic.onclick = function(){
  document.getElementById("error_nic").style.display='none';
};

//Birthday Validation
bd=document.getElementById("birthday");
bd.onclick = function(){
 document.getElementById("error_bd").style.display='none';
};

//prevent refresh the page
$(document).ready(function () {
  $("#register_form").submit(function(e) {
    e.preventDefault();
  });
  
});








    
    
