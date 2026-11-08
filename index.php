
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Website</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(
                135deg,
                #2563eb,
                #60a5fa,
                #a78bfa
            );
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .card {
            background-color: white;
            width: 100%;
            max-width: 450px;
            padding: 45px 30px;
            text-align: center;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease,
                        box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        }

        h1 {
            color: #2563eb;
            font-size: 38px;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            font-size: 17px;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .name {
            color: #2563eb;
            font-weight: bold;
            font-size: 18px;
            margin-top: 25px;
        }

        .badge {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: linear-gradient(
                135deg,
                #2563eb,
                #7c3aed
            );
            color: white;
            border-radius: 25px;
            font-size: 14px;
            font-weight: bold;
        }

        .footer {
            margin-top: 25px;
            font-size: 13px;
            color: #888;
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 30px;
            }

            .card {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>

    <div class="card">

        <h1>Hello World!</h1>

        <p>Welcome to my first website.</p>

        <p>
            This website was created using
            HTML, CSS, Visual Studio Code,
            and XAMPP.
        </p>

        <p class="name">
            My First Web Development Project
        </p>

        <div class="badge">
            HTML + CSS
        </div>

        <p class="footer">
            Made with VS Code and XAMPP
        </p>

    </div>

</body>
</html>
