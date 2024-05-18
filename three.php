<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f0f0f0;
            font-family: 'Poppins', sans-serif;
        }

        .title {
            margin-bottom: 20px;
            font-size: 32px;
            font-weight: 700;
            color: #4a4e69;
        }

        .form-container{
            background: #4a4e69;
            color: #f2e9e4;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .input01{
            margin-bottom: 20px;
        }

        .input{
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .name{
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
        }

        .input02{
            margin-bottom: 20px;
        }

        .selection{
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .btn{
            margin-top: 20px;
        }

        .button{
            width: 100%;
            background: #9a8c98;
            color: #f2e9e4;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .button:hover{
            background: #c9ada7;
        }

        .answer{
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="title">Simple Web Calculator</div>
    <div class="form-container">
        <form>
            <div class="name">
                <h2>Calculator</h2>
            </div>
            <div class="input01"> 
                <input class="input" type="text" name="num1" placeholder="Enter number 01"> 
            </div> 
            <div class="input01"> 
                <input class="input" type="text" name="num2" placeholder="Enter number 02"> 
            </div> 
            <div class="input02"> 
                <select class="selection" name="operation">
                    <option value="None">None</option>
                    <option value="Add">Add</option>
                    <option value="Subtract">Subtract</option>
                    <option value="Multiply">Multiply</option>
                    <option value="Divide">Divide</option>
                </select>
            </div> 
            <div class="btn"> 
                <button class="button" type="submit" name="submit" value="submit">Calculate</button>
            </div> 
        </form>
        <p class="answer">
            <?php
                if(isset($_GET['submit'])) {
                    $result1 = $_GET['num1'];
                    $result2 = $_GET['num2'];
                    $operator = $_GET['operation'];
                    $answer = "";

                    if (is_numeric($result1) && is_numeric($result2)) {
                        switch($operator) {
                            case "None":
                                $answer = "Please select an operator!";
                                break;
                            case "Add":
                                $answer = "$result1 + $result2 = " . ($result1 + $result2);
                                break;
                            case "Subtract":
                                $answer = "$result1 - $result2 = " . ($result1 - $result2);
                                break;
                            case "Multiply":
                                $answer = "$result1 * $result2 = " . ($result1 * $result2);
                                break;
                            case "Divide":
                                if ($result2 == 0) {
                                    $answer = "Cannot divide by zero!";
                                } else {
                                    $answer = "$result1 / $result2 = " . ($result1 / $result2);
                                }
                                break;
                        }
                    } else {
                        $answer = "Please enter valid numbers!";
                    }
                    echo $answer;
                }
            ?>
        </p>
    </div>
</body>
</html>
