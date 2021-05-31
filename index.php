<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
     <title>Kin Details</title>
</head>
<body>
    <div class="split-screen">
        <div class="left">
            <!-- <section class="copy">
                <h1>Mbao Savings Plan</h1>
                <p>A tailoring scheme aimed at ensuring a beter saving expirience</p>
            </section>             -->
        </div>
        <div class="right">
            <form action="dbconnect.php" method="POST"> 
                <section class="copy">
                    <h4>Howdy Client !</h4>
                    <div class="login-container">
                        <p>Not Yet an MSP member? <a href="">
                            <strong>Contact Us</strong></a>
                        </p>
                    </div>
                </section>
                <div class="input-container name">
                    <label for="code">MSP Code.</label>
                    <input id="code" type="text" name="code" required>
                </div>
                <div class="input-container name">
                    <label for="id_number">ID No.</label>
                    <input id="id_number" type="number" name="id_number" required>
                </div>
                <div class="input-container email">
                    <label for="telephone">Telephone.</label>
                    <input id="telephone" type="number" name="telephone" required>
                </div>
                <div class="input-container email">
                    <label for="fname">Next Of Kin.</label>
                    <input id="kin" type="text" name="kin"  placeholder="Please Give Full names" required>
                </div>
                <div class="input-container password">
                    <label for="password">Kin's Telephone.</label>
                    <input id="password" type="number" name="kin_telephone" required>
                </div>
                <div class="input-container cta">
                    <label class="checkbox-container">
                        <input type="checkbox" name="c" required>
                        <span class="checkmark"></span>
                        I agree with the terms and conditions
                    </label>
                </div>
                <button class="signup-btn" type="submit" name="s";">
                    submit
                </button>
                <section class="copy legal">
                    <p><span class="small"> By Filling this form, you agree to accept our <br><a href="terms.php">privacy Policy</a> &amp;
                        <a href="terms.php">Terms of service</a></span></p>
                </section>
            </form>
        </div>
    </div>
    
</body>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.12/dist/sweetalert2.min.js">
    function validation() {
        var code = '1234';
        var code_1 = document.getElementById('code').value;

        if (code == code_1) {
            Swal.fire(
                'Good job!',
                'You clicked the button!',
                'success'
            )
        } -->
    <!-- }
</script> -->
</html>