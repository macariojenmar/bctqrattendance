require('./bootstrap');

function radioGrade() {    
    var getSelectedValue = document.querySelector('input[name="gradelevel"]:checked');   

    if(getSelectedValue != null) {   

        document.getElementById("lblGrade").innerHTML = getSelectedValue.value;      

    }   
}
