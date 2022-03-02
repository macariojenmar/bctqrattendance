require('./bootstrap');

function showPass() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})


function generate(){
    var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var codeLength = 8;
    var code = "";

    for (var i=0; i<codeLength; i++) {
        var randomNumber = Math.floor(Math.random()*chars.length);
        code += chars.substring(randomNumber, randomNumber+1);
    }
    document.getElementById("code").value = code;
}

function copyCode() {

    let input = document.querySelector('#code');
    input.select();

    document.execCommand("copy");
    

}