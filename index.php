<!DOCTYPE html>
<html>
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<script src="./mail/js/jquery.min.js"></script>
<script src="./mail/js/mail.js"></script>

<body>

    <div id="alert" class="w3-panel w3-yellow w3-display-container w3-card-4 w3-hide">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>
        <h3 id="alertTitle"></h3>
        <p id="alertMessage"></p>
    </div>

    <form action="" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
        <h2 class="w3-center">Contact Us</h2>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="fname" type="text" placeholder="First Name">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="lname" type="text" placeholder="Last Name">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
            <div class="w3-rest">
                <textarea class="w3-input w3-border" name="message" type="textarea" placeholder="Message"></textarea>
            </div>
        </div>

        <p class="w3-center" id="btnSubmit">
            <button class="w3-button w3-section w3-blue w3-ripple" href="#"> Send </button>
        </p>
    </form>

</body>

</html>