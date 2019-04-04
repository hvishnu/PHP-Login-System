

$(document)
    .on("submit",".js-register",function (event) {
    event.preventDefault();
    var _form=$("this");

    var data={
        email: $("input [type='email']",_form).val(),
        password:$("input[type='password']",_form).val()

    }
    alert("form was submiiteerd");
    console.log(data);
    console.log("sonmtheignl")
    return false;
})