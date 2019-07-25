function upload(){
var file = document.getElementById("file").prop('files');
    $.ajax({
        type: "POST",
        url: "upload.php",
        data: file,
        cache: false,
        success: function(s) {
        alert(s);
     }
    });
}