
<!DOCTYPE html>
<html lang="en">
<head>

<title>The ArtSpot | Donation</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="payment.css">

</head>
<body>
    <?php
    if (isset($_POST['send'])) {
        ?>
            <script>
             location.replace("successpul.html")
            </script>
        <?php
     }
          ?>
    

<div class="container">

    <form action="" method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">YOUR DETAILS</h3>
                <link href="assets/img/p/fi.jpg" rel="icon">

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Bharath" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="Bengaluru" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="Karnataka" required>
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="number" placeholder="123 456" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="assets/img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Mr.Bharath" required>
                </div>
                <div class="inputBox">
                    <span>Card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span> 
                        <input type="number" placeholder="123" required>
                    </div>
                </div>

            </div>
    
        </div>
        
        <button name="send" style="border:1px solid #2ecc71; background: #2ecc71; padding: 5px; position: relative;left: 300px;">Pay Now</button>

    </form>

</div>    
    
</body>
</html>