<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Contact Form</title>
     <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
     <div class="container">
          <h1>Contact us</h1>

          <form method="POST" action="">
               <input type="text" name="name" placeholder="Your Name" required>
               <input type="email" name="email" placeholder="You Email" required>
               <textarea name="message" placeholder="Your Message" required></textarea>
               <button type="submit">Send</button>
          </form>

          <?php if (!empty($message)): ?>
               <p><?= $message; ?></p>
          <?php endif; ?>
     </div>
</body>

</html>