function formCheck(){
    var item1 = document.getElementById("item1");
    var item2 = document.getElementById("item2");
    var item3 = document.getElementById("item3");
    var amount1 = document.getElementById("amount1");
    var amount2 = document.getElementById("amount2");
    var amount3 = document.getElementById("amount3");
    var userName = document.getElementById("userName");
    var password = document.getElementById("password");

    var valid = true;
    var validUsername = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; //had to find help using w3 schools on validating emails.

    if(!userName.match(validUsername)){
        if(userName.length < 1){
            alert("Must give a Username");
        }
        else{
            alert("Username invalid");
        }
        valid = false;
    }
    if(password.length < 1){
        alert("Must give a Password");
        valid = false;
    }
    if(amount1 && amount2 && amount3){
        alert("Select Shipping.");
        valid = false;
    }
    if(item1 == 0 && item2 == 0 && item3 == 0){
        alert("Have to order 1 item");
        valid = false;
    }
}