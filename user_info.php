<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>PHP IF / ELSE Assignment</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background: #7ad1db18;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #e8f0f1;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"], input[type="number"] {
            padding: 12px;
            margin: 12px 10px;
            width: 70%;
            border-radius: 15px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: rgba(9, 9, 8, 0.907);
            cursor: pointer;
            color: white;
        }
        button:hover{
            background-color: rgb(150, 108, 29);
            transition-duration: 1s;
            opacity: 90%;
        }
        .result{
            margin-top: 20px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP IF / ELSE Assignment</h2>
        <form method="get" action="">
            <input type="text" name="Name" placeholder="Enter Your Name" required>
            <input type="text" name="Age" placeholder="Enter Your Age" required>
            <input type="text" name="Country" placeholder="Enter Your Country" required>
            <br>
            <button type="Submit">Submit</button>
        </form>
        <div class="result">
    <?php
    if (isset($_get["Name"]) && isset($_get["Age"]) && isset($_get["Country"])) {
        $name = $_get["Name"];
        $age = $_get["Age"];
        $country = strtoupper($_get["Country"]);

        if ($country !== "USA") {
            echo "Only USA is accepted as the country.<br>";
        } else {
            if ($age < 18) {
                echo "You are a Minor!<br>";
                echo "You are not eligble to Vote <br>";
            } elseif ($age >= 18 && $age < 65) {
                echo "You are an Adult <br>";
                echo "You are Eligible to Vote in the USA <br>"; // Added the missing semicolon
            } else {
                echo "You are a senior citizen <br>";
                echo "You are eligible to vote in the USA.<br>";
            }
        }
    }
    ?>
</div>
</div>

    </div>
</body>
</html>
