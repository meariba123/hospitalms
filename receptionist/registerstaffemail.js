//this sends the email and tells the receptionist the email was sent successfully

function SendMail(){
    emailjs.send("service_02a8pat", "template_n0tolzk").then(function (res){
        alert("Success! " + res.status);
    })
}
