
function submitMemberData() {
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
var values = birthday.split('/')
var newbirthday=values[2].trim()+'-'+values[1].trim()+'-'+values[0].trim();

var registrationNum=nic.slice(0,nic.length - 1)
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'method=register&regestration_number='+registrationNum+'&nic=' + nic + '&title=' + title + '&name=' + name+ '&birthday=' + newbirthday+ '&address=' + address+ '&country=' + country+ '&phone=' + phone+ '&mobile=' + mobile+ '&email=' + email+ '&index_num=' + index_num+ '&ol_year=' + ol_year+ '&al_year=' + al_year+'&password=' + password ;
if (name == '' || email == '' || password == '' || phone == ''||mobile == '' || address == '' || nic == '' || password == ''|| ol_year == '' || al_year == '' ||index_num==''|| birthday == ''|| confirmPassword == '') {
alert("Please Fill All Fields");
}else if(nic.length!=10){
    alert("Enter correct NIC Number"); 
} else if(birthday.length!=14){
    alert("Enter correct Birthday"); 
} else if (password != confirmPassword) {
    alert("Passwords do not match.");
    
}else if (password.length<=6) {
    alert("Password lenth more than 6 characters");
    
}

else {
//AJAX code to submit form.
    $.ajax({
        type: "POST",
        async:false,
        url: "../php/membership/memberHedder.php",
        data: dataString,
        cache: false,
        success: function(s) {
        alert(s);
     }
    });
    
}
return false;
}


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
    }
   
  
    this.value = this.value.substr(0, 10);

    nic.onkeydown = function() {
        var key = event.keyCode || event.charCode;
    
        if( key == 8 || key == 46 )
        this.value=""
    };
  });

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

function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
