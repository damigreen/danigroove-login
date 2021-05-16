<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Contact Form</title>
  </head>
  <body>
    <div>
      <h2>Get in touch</h2>
      <p>Please fill in the fields</p>
      <form method="post" action="contact.php">
        <input type="text" name="name" placeholder="Full Name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="text" name="subject" placeholder="Subject"><br><br>
        <textarea  name="message" placeholder="Enter Message">
        </textarea><br>
        <button type="submit" value="submit" name="submit">SEND E-MAIL</button>
      </form>
    </div>

  </body>
</html>
