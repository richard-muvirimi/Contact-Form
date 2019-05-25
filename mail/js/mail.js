$(document).ready(() => {

    $("#btnSubmit").click((e) => {
        e.preventDefault();

        let mail = getMail();
        console.log(mail);
        if (mail != false) {
            $.getJSON(
                "./mail/index.php", {
                    name: mail.name,
                    phone: mail.phone,
                    email: mail.email,
                    message: mail.message,
                },
                function (result, status) {

                    if (status === "success") {
                        if (result.error) {
                            notify("Error!", result.error);
                        } else {
                            notify(result.title, result.message);
                        }
                    } else {
                        notify("Error!", "There seems to be a problem sending your message.");
                    }
                    console.log(result);

                });
        }

    });

    function getMail() {
        let mail = {
            name: $("[name='fname']").first().val() + " " + $("[name='lname']").first().val(),
            phone: $("[name='phone']").first().val(),
            email: $("[name='email']").first().val(),
            message: $("[name='message']").first().val()
        };

        if (mail.name === "" && mail.phone === "" && mail.email === "" && mail.message === "") {

            notify("Missing fields!", "Your details are required so we can contact you!");

            return false;
        }

        if (mail.name.trim() === "") {

            notify("Missing fields!", "Your name is required!");

            return false;
        }

        if (mail.phone.trim() === "") {

            notify("Missing fields!", "Your phone number is required!");

            return false;
        }

        if (mail.email.trim() === "") {

            notify("Missing fields!", "Your email is required!");

            return false;
        }

        if (mail.message.trim() === "") {

            notify("Missing fields!", "Your message is required!");

            return false;
        }

        return mail;

    }

    function notify(title, message) {

        $("#alert").removeClass("w3-hide");
        $("#alert #alertTitle").text(title);
        $("#alert #alertMessage").html(message);
    }

});