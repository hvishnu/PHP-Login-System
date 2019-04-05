

$(document)
    .on("submit",".js-register",function (event) {
    event.preventDefault();
    var _form=$("this");

    var data={
        email: $("input[type='email']",_form).val(),
        favorite:$("input[type='radio']",_form).val(),
        password:$("input[type='password']",_form).val()

    }
    alert("form was submiiteerd");
    console.log(data);

    return false;
})