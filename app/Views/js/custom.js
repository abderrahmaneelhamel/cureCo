
function SubmitForm(){
    const regExp = /^([a-zA-Z0-9-_.]+)@([a-zA-Z0-9]+).([a-zA-Z]{2,10})(.[a-zA-Z]{2,8})?$/
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    password.style.border = "solid grey 1px";
    email.style.border = "solid grey 1px";
    var emailMsg = document.getElementById("emailMsg");
    var passwordMsg = document.getElementById("passwordMsg");
    passwordMsg.innerHTML = "";
    emailMsg.innerHTML = "";
    var ok = 1;
    if(password.value == ""){
        password.style.border = "solid red 1px";
        passwordMsg.innerHTML = "* please fill";
        ok = 0;
    }
    if(email.value == ""){
        email.style.border = "solid red 1px";
        emailMsg.innerHTML = "* please fill";
        ok = 0;
    }else if (!(regExp.test(email.value))) {
        email.style.border = "solid red 1px";
        emailMsg.innerHTML = "* Invalid Email";
        ok = 0;
    }    
    if(ok == 1){
        document.getElementById("theForm").submit();
    }else{
        return false;
    }
}
function submitProduct(){
    var name = document.getElementById("name");
    var qte = document.getElementById("qte");
    var price = document.getElementById("price");
    var category = document.getElementById("category");
    price.style.border = "solid grey 1px";
    qte.style.border = "solid grey 1px";
    name.style.border = "solid grey 1px";
    category.style.border = "solid grey 1px";
    var nameMsg = document.getElementById("nameMsg");
    var qteMsg = document.getElementById("qteMsg");
    var priceMsg = document.getElementById("priceMsg");
    var categoryMsg = document.getElementById("categoryMsg");
    priceMsg.innerHTML = "";
    qteMsg.innerHTML = "";
    nameMsg.innerHTML = "";
    categoryMsg.innerHTML = "";
    var ok = 1;
    if(price.value == ""){
        price.style.border = "solid red 1px"
        priceMsg.innerHTML = "* please fill";
        ok = 0;
    }
    if(qte.value == ""){
        qte.style.border = "solid red 1px"
        qteMsg.innerHTML = "* please fill";
        ok = 0;
    }
    if(name.value == ""){
        name.style.border = "solid red 1px";
        nameMsg.innerHTML = "* please fill";
        ok = 0;
    }  
    if(category.value == ""){
        category.style.border = "solid red 1px";
        categoryMsg.innerHTML = "* please fill";
        ok = 0;
    } 
    if(ok === 1){
        document.getElementById("ProductForm").submit();
    }else{
        return false;
    }
}