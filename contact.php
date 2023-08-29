To receive the data from a contact form in PHP, you can use the `$_POST` variable to access the form inputs. Here's an example code:

```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Process the received data here, e.g., send an email notification

    // Clear the form data
    $_POST = array();

    // Redirect to a thank you page
    header('Location: thank-you.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">

        <label for="message">Message:</label>
        <textarea name="message" id="message"></textarea>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
```

In this code, the form data is accessed using `$_POST['input_name']`. You can then process this data (e.g., send an email) and perform any necessary actions.

Make sure to adjust the form's `action` attribute to the appropriate URL where you want to submit the form data. You can also add additional form input fields according to your requirements.