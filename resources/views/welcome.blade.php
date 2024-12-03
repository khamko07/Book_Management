<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Book Management</title>
    <style>
        body {
            font-family: "Roboto Condensed", sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        img {
            width: 120px;
            margin-bottom: 1em;
        }

        h1 {
            color: #0f0f0f;
            font-size: 2.5em;
            margin-bottom: 0.5em;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 1em;
        }

        a {
            color: #fff;
            background-color: #242526;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #14b5dd;
        }

        .container {
            text-align: center;
            background: #fff;
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>

<body>
    <div class="container">
        <img src="https://pascalia-images.s3.ap-southeast-1.amazonaws.com/uploads/2019/02/05/pav-1.png" alt="logo">
        <h1>Welcome to Book Management</h1>
        <p>This is a Book Management CRUD project using Laravel during my training internship at Pascalia Asia Company
        </p>
        <p><a href="{{ route('books.index') }}">Let's go</a></p>
    </div>
</body>

</html>
