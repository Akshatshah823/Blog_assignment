<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="{{url('/')}}/register" method ="POST" >
            @csrf
            <label for="username" class="text-form">Username:</label>
            <input type="text" id="username" name="username">

            <label for="email" class="text-form">Email:</label>
            <input type="email" id="email" name="email">

            <label for="password" class="text-form">Password:</label>
            <input type="password" id="password" name="password">

            <label for="confirm_password" class="text-form">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password">

            <input type="submit" class = "submit" value="Register">
            <input type="button"  class = "cancel"value="Cancel">
        </form>
    </div>
</body>
</html>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="submit"],
        input[type="cancel"]{
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .submit{
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;

        }
        .cancel{
            background-color: #8b2020;
            color: #fff;
            cursor: pointer;
            text-align: center;
        }

    </style>

