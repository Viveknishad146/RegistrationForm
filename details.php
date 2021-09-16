<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<link rel="stylesheet" href="regform.css"/>

</head>
<body>        
        <section class="contact">
            
            <div class="contact-heading">
                <h1>Register Yourself</h1>
                <P>Feel free to contact us</p>
                <div class="yellowbox">
                    <p>Kick start your day with our Inspirational Words of Wisdom: Thought for the Day. Our daily quote will feed your mind and spirit with positive words of encouragement and inspiration.</p>
                </div>
            </div>
            <form action="regdb.php", method="post">
                    <input type="text" name="user" placeholder="Your Full Name"/>
                    <input type="tel" name="phonenumber" placeholder="Enter Your Phone Number"/>

                    <input type="email" name="email" placeholder="Your E-Mail"/>
                    <textarea name="message" placeholder="Type the message shown in above Yellow Box..."></textarea>
                    <button class="main-btn contact-btn">Submit</button>
            </form>
        </section>
</body>
</html>