function printError(ID,Msg){
    document.getElementById(ID).innerHTML = Msg;
}

function validationForm(){
    var Fname = document.getElementById("Fname").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var msg = document.getElementById("msg").value;

    var nameErr = emailErr = phoneErr = msgErr = false;

    if(Fname == ""){
        var err_n =  document.getElementById("nameErr");
        err_n.style.display = "block";
        printError("nameErr","Please Enter Your First Name");
        nameErr = true;
        var elem =  document.getElementById("Fname");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    }else{
        var regex = /^[a-zA-Z\s]+$/;
        if(regex.test(Fname)===false){
            var err_n =  document.getElementById("nameErr");
        err_n.style.display = "block";
            printError("nameErr","Please Enter a Valid Name");
            nameErr = true;
            var elem =  document.getElementById("Fname");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        }else{
            var err_n =  document.getElementById("nameErr");
        err_n.style.display = "none";
            printError("nameErr","");
            nameErr = false;
            var elem =  document.getElementById("Fname");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");
        }
    }

    if(email == ""){
        var err_e = document.getElementById("emailErr");
        err_e.style.display = "block";
        printError("emailErr","Please Enter Your Email");
        emailErr = true;
        var elem =  document.getElementById("email");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    }else{
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email)===false){
            var err_e = document.getElementById("emailErr");
        err_e.style.display = "block";
            printError("emailErr","Please Enter a Valid Email Address");
            emailErr = true;
            var elem =  document.getElementById("email");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        }else{
            var err_e = document.getElementById("emailErr");
        err_e.style.display = "none";
            printError("emailErr","");
            emailErr = false;
            var elem =  document.getElementById("email");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");
        }
    }

    if(phone == ""){
        var err_p = document.getElementById("phoneErr");
        err_p.style.display = "block";
        printError("phoneErr","Please Enter Your Mobile Number");
        phoneErr = true;
        var elem =  document.getElementById("phone");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    }else{
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(phone)===false){
            var err_p = document.getElementById("phoneErr");
        err_p.style.display = "block";
            printError("phoneErr","Please Enter a Valid  Mobile Number");
            phoneErr = true;
            var elem =  document.getElementById("phone");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        }else{
            var err_p = document.getElementById("phoneErr");
        err_p.style.display = "none";
            printError("phoneErr","");
            phoneErr = false;
            var elem =  document.getElementById("phone");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");
        }
    }

    if(msg == ""){
        var err_m =  document.getElementById("msgErr");
        err_m.style.display = "block";
        printError("msgErr","Please Enter Your Message");
        msgErr = true;
        var elem =  document.getElementById("msg");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    }else{
            var err_m =  document.getElementById("msgErr");
        err_m.style.display = "none";
            printError("msgErr","");
            msgErr = false;
            var elem =  document.getElementById("Fname");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");
    }

    if(nameErr==false && emailErr==false && phoneErr==false && msgErr==false){
        sendMail();
        return false;
    }
};

function sendMail() {
    var params = {
        Fname: document.getElementById("Fname").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        msg: document.getElementById("msg").value,
    };

    const serviceID = "service_x1ofdfl";
    const templateID = "template_bewpp5k";

    emailjs.send(serviceID, templateID, params).then(res => {
        document.getElementById("Fname").value = "";
        document.getElementById("email").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("msg").value = "";
        console.log(res);
        alert("Your Message sent Successfully");
    })
        .catch(err => console.log(err));
}