<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره ما</title>
    <link rel="stylesheet" href="../../style.css"/>
    <link rel="stylesheet" href="stylecontact.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<header>    
    <?php 
    include('../navbar.php');
    ?>
</header>
 
<div class="background">
        <div class="overlay"></div>
    </div>

    <div class="container">
        <h1>تماس با ما</h1>
        <form action="submit_form.php" method="POST">
            <div class="form-group">
                <label for="name">نام:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">ایمیل:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">موضوع:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">پیام:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">ارسال پیام</button>
        </form>
    </div>
</body>
</html>