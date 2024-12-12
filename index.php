<?php

// $name = 'John';
// $day = 'Tuesday';
// $greet = 'Hello, Good day';

// if ($day == 'Sunday') {
//     echo 'Today is ' . $day;
// } else if ($day == 'Monday') {
//     echo 'Today is ' . $day;
// } else if ($day == 'Tuesday') {
//     echo 'Today is ' . $day;
// } else if ($day == 'Wednesday') {
//     echo 'Today is ' . $day;
// } else if ($day == 'Thursday') {
//     echo 'Today is ' . $day;
// } else if ($day == 'Friday') {
//     echo 'Today is ' . $day;
// } else if ($day == 'Saturday') {
//     echo 'Today is ' . $day;
// } else {
//     echo 'Invalid day of the week';
// }

// $signal = 'green';

// if ($signal == 'red') {
//     echo '<h1 style="color: red;">STOP</h1>';
// } else if ($signal == 'yellow') {
//     echo '<h1 style="color: yellow;">GET READY</h1>';
// } else if ($signal == 'green') {
//     echo '<h1 style="color: green;">GO</h1>';
// } else {
//     echo '<h1>Invalid signal color</h1>';
// }

// $grade = '99';

// if ($grade >= 70 && $grade <= 100) {
//     echo '<h1>You got an A</h1>';
// } else if ($grade >= 60 && $grade <= 69) {
//     echo '<h1>You got a B</h1>';
// } else if ($grade >= 50 && $grade <= 59) {
//     echo '<h1>You got a C</h1>';
// } else if ($grade >= 45 && $grade <= 49) {
//     echo '<h1>You got a D</h1>';
// } else if ($grade >= 40 && $grade <= 44) {
//     echo '<h1>You got an E</h1>';
// } else if ($grade >= 0 && $grade <= 39) {
//     echo '<h1>You got a F</h1>';
// } else {
//     echo '<h1>Invalid Grade</h1>';
// }

// $num1 = 9;
// $num2 = 10;
// $num3 = 18;

// if ($num1 > $num2 && $num1 > $num3) {
//     echo $num1 . ' is greater than ' . $num2 . ' and  ' . $num3;
// } else if ($num2 > $num1 && $num2 > $num3) {
//     echo $num2 . ' is greater than ' . $num1 . ' and  ' . $num3;
// } else if ($num3 > $num2 && $num3 > $num1) {
//     echo $num3 . ' is greater than ' . $num2 . ' and  ' . $num1;
// } else {
//     echo '';
// }

// $var1 = 5;
// $var2 = 5;
// $op = '+';

// if ($op == '+') {
//     echo $var1 + $var2;
// } else if ($op == '-') {
//     echo $var1 - $var2;
// } else if ($op == '*') {
//     echo $var1 * $var2;
// } else if ($op == '/') {
//     echo $var1 / $var2;
// }

// $week = 'Sunday';

// switch ($week) {
//     case 'Sunday':
//         echo 'Today is ' . $week;
//         break;

//     case 'Monday':
//         echo 'Today is ' . $week;
//         break;

//     case 'Tuesday':
//         echo 'Today is ' . $week;
//         break;

//     case 'Wednesday':
//         echo 'Today is ' . $week;
//         break;

//     case 'Thursday':
//         echo 'Today is ' . $week;
//         break;

//     case 'Friday':
//         echo 'Today is ' . $week;
//         break;

//     case 'Saturday':
//         echo 'Today is ' . $week;
//         break;

//     default:
//         echo $week . ' is not a valid day';
//         break;
// }

// $age = 16;

// echo $age >= 18 ? 'You van vote' : 'You can not vote';
// // echo $check;

// $z = ['hello', 1, true];

// $fruits = ['mango', 'paw-paw', 'apple', 'orange'];
// $fruit = ['mango', 'paw-paw', 'apple', 'orange'];
// echo '<br />';
// // output array
// print_r($fruits);
// echo '<br />';
// // output more info about the array
// var_dump($fruits);
// echo '<br />';
// print_r($fruits[2]);
// echo '<br />';
// var_dump($fruits[2]);

// // associative array
// // key value pairs
// $person = [
//     'name' => 'John', 
//     'age' => 30, 
//     'city' => 'York',
//     'hobbies' => ['reading', 'music', 'coding'],
//     'address' => [
//         'street' => '123 main st',
//         'state' => 'NY',
//         'zip' => '10001',
//     ]
// ];
// echo '<br />';
// print_r($person);
// echo '<br />';
// var_dump($person['name']);

// Increment

// $n1 = 7;
// $n2 = 4;
// $n1 = $n1 + $n2;
// $n1 += $n2;
// $n1++;
// echo $n1 . '<br>';

// // Decrement
// $n3 = 7;
// $n3--;

// // Loop

// // for loop
// for ($i = 0; $i <= 10; $i++) {
//     echo $i . '<br>';
// };

// // while loop
// $i = 0;
// while ($i <= 10) {
//     echo $i . '<br>';
//     $i++;
// };

// // count
// $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $letters = ['a', 'b', 'c', 'd', 'e'];

// echo count($letters) . '<br>';


// for ($j = 0; $j < count($letters); $j++) {
//     echo $letters[$j] . '<br>';
// };

// $j = 0;
// while ($j < count($letters)) {
//     echo $letters[$j] . '<br>';
//     $j++;
// };

// for ($x = 3; $x < count($numbers); $x++) {
//     echo $numbers[$x] . '<br>';

//     if ($x == 7) {
//         break;
//     };
// };

// $a = 6;
// if ($a % 2 == 0) {
//     echo 'Yes! ' . $a . ' is an even number';
// } else {
//     echo 'No! ' . $a . ' is an odd number';
// };

// $b = [20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];

// for ($v = 0; $v < count($b); $v ++) {
//     if ($b[$v] % 2 != 0) {
//         echo $b[$v] . '<br>';
//     }
// };

// $v = 0;
// while ($v < count($b)) {
//     if ($b[$v] % 2 != 0) {
//         echo $b[$v] . '<br>';
//     };
//     $v++;
// };

//  do while loop

// $x = 21;
// do {
//     echo $x . "<br>";
//     $x++;
// } while ($x < 31);

// // forEach loop

// $fruits = ['mango', 'apple', 'pawpaw', 'orange'];
// foreach ($fruits as $fruit) {
//     echo $fruit . 's, ';
// };

//  Inbuilt Functions (Methods)

// String functions
/*
strlen()
str_word_count()
strpos()
ucwords()
strtoupper()
strtolower()
*/

// Math functions
/*
ceil()
floor()
round()
exp()
*/

// Array functions
/*
var_dump()
print_n()
array_push()
array_search()
count()
arsort()
*/

// String Functions

// $s = 'hello world';
// echo strlen($s); // length of the string
// echo '<br>';
// echo str_word_count($s); // amount of words
// echo '<br>';
// echo strpos($s, 'e'); // index of letter
// echo '<br>';
// echo ucwords($s); // capitalize each word
// echo '<br>';
// echo strtoupper($s); // change to uppercase
// echo '<br>';
// echo strtolower($s); // change to lowercase
// echo '<br>';

// Math Functions

// $n1 = 4.2;
// echo '<br>';
// echo ceil($n1); // round up
// echo '<br>';
// $n2 = 6.9;
// echo floor($n2); // round down
// echo '<br>';
// $n3 = 3.5;
// echo round($n3); // approximate
// echo '<br>';
// $n4 = 7;
// echo exp($n4); // returns exponent


// Array Functions

// $a1 = [1, 2, 3, 4, 5];
// array_push($a1, 6); // add to array
// echo '<br>';
// print_r($a1);
// echo '<br>';
// echo array_search(6, $a1); // search array
// echo '<br>';
// echo count($a1); // count array
// echo '<br>';
// $a2 = [4, 1, 3, 5, 2];
// arsort($a2); // sorts array
// echo '<br>';
// print_r($a2);
// echo '<br>';
// echo date('d/m/Y'); // output date
// echo '<br>';
// echo date('d-m-Y h:i:s:a'); // output date and time
// echo '<br>';
// echo date('h:i:s'); // output time

// User Defined Function

// echo '<br>';
// function add($a, $b) {
//     $result = $a + $b;
//     echo $result;
// };
// add(9, 6);
// echo '<br>';

// function cube($c) {
//     $result = $c ** 3;
//     echo $result;
// };
// cube(4);
// echo '<br>';

// function operate($d, $op, $e) {
//     if ($op == '-') {
//         $result = $d - $e;
//     } else if ($op == '+') {
//         $result = $d + $e;
//     } else if ($op == '/') {
//         $result = $d / $e;
//     } else if ($op == '*') {
//         $result = $d * $e;
//     } else {
//         echo "Invalid operator";
//     };
//     echo $result;
// };
// operate(5, '*', 2);
// echo '<br>';

// function amt_calc($amt) {
//     if ($amt > 10000) {
//         $curr_amt = $amt - 1000;
//         echo 'Current amount: #' . $curr_amt;
//     } else if ($amt >= 5000 && $amt <= 10000) {
//         $curr_amt = $amt - 500;
//         echo 'Current amount: #' . $curr_amt;
//     } else {
//         echo 'Current amount: #' . $amt;
//     }
// };

// amt_calc(1000);

/* PHP Super Globals 

1) GLOBALS: This is one of the super global used to access global variables from another in the PHP script. 
2) POST: A global variable used to collect data from the HTML form after submitting.
3) GET: A global variable that shows you the form data. It is also used to get data after submitting it.
4) SERVER: This is one of the super global used to access server information. It stores information about the header, path, script and locations.
5) COOKIES: This is a small file that the web server stores on the client computer. They are used to track information such as username.
6) SESSION: This is used to sore data o the server rather than the client computer. Session information gets destroyed every time the user closes the browser.
7) FILES: This is a two-dimensional associative array of items which are uploaded via the post method.

*/

// GLOBALS

// $x = 100;
// $y = 200;

// function add() {
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// add();
// echo $z;


?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Form Data Handling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        .error {
            color: red;
            font-size: 0.9em;
            display: block;
            margin-top: 5px;
        }

        .error.hidden {
            display: none;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        #formSummary,
        #confirmationMessage {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        #formSummary h2,
        #confirmationMessage h2 {
            text-align: center;
            color: #333;
        }

        #formSummary p,
        #confirmationMessage p {
            margin: 10px 0;
        }

        #formSummary p strong,
        #confirmationMessage p strong {
            color: #007BFF;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <h1>Registration Form</h1>
    <form id="userForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <span id="nameError" class="error hidden">Name is required.</span>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span id="emailError" class="error hidden">Invalid email format.</span>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" pattern="\(\d{3}\) \d{3}-\d{4}" required>
        <span id="phoneError" class="error hidden">Invalid phone number format. Use (XXX) XXX-XXXX.</span>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="18" max="120" required>
        <span id="ageError" class="error hidden">Age must be between 18 and 120.</span>

        <label>Hobbies:</label>
        <input type="checkbox" id="hobby1" name="hobbies" value="Reading">
        <label for="hobby1">Reading</label><br>
        <input type="checkbox" id="hobby2" name="hobbies" value="Traveling">
        <label for="hobby2">Traveling</label><br>
        <input type="checkbox" id="hobby3" name="hobbies" value="Cooking">
        <label for="hobby3">Cooking</label>
        <span id="hobbiesError" class="error hidden">At least one hobby must be selected.</span>

        <label for="contactMethod">Preferred Contact Method:</label>
        <select id="contactMethod" name="contactMethod" required>
            <option value="" disabled selected>Select one</option>
            <option value="email">Email</option>
            <option value="phone">Phone</option>
        </select>
        <span id="contactMethodError" class="error hidden">Contact method is required.</span>

        <label>
            <input type="checkbox" id="acceptTerms" name="acceptTerms">
            I accept the terms and conditions
        </label>
        <span id="acceptTermsError" class="error hidden">You must accept the terms and conditions.</span>

        <button type="submit">Submit</button>
    </form>

    <div id="formSummary" class="hidden">
        <h2>Form Summary</h2>
        <p><strong>Name:</strong> <span id="summaryName"></span></p>
        <p><strong>Email:</strong> <span id="summaryEmail"></span></p>
        <p><strong>Phone Number:</strong> <span id="summaryPhone"></span></p>
        <p><strong>Age:</strong> <span id="summaryAge"></span></p>
        <p><strong>Hobbies:</strong> <span id="summaryHobbies"></span></p>
        <p><strong>Preferred Contact Method:</strong> <span id="summaryContactMethod"></span></p>
        <p id="termsMessage"></p>
    </div>

    <div id="confirmationMessage" class="hidden">
        <h2>Thank You!</h2>
        <p>Your form has been successfully submitted.</p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('userForm');
            const summarySection = document.getElementById('formSummary');
            const confirmationMessage = document.getElementById('confirmationMessage');
            const summaryName = document.getElementById('summaryName');
            const summaryEmail = document.getElementById('summaryEmail');
            const summaryPhone = document.getElementById('summaryPhone');
            const summaryAge = document.getElementById('summaryAge');
            const summaryHobbies = document.getElementById('summaryHobbies');
            const summaryContactMethod = document.getElementById('summaryContactMethod');
            const termsMessage = document.getElementById('termsMessage');

            form.addEventListener('submit', (event) => {
                event.preventDefault();

                // Clear previous error messages
                document.querySelectorAll('.error').forEach(error => error.classList.add('hidden'));

                const name = document.getElementById('name').value.trim();
                const email = document.getElementById('email').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const age = parseInt(document.getElementById('age').value.trim(), 10);
                const hobbies = Array.from(document.querySelectorAll('input[name="hobbies"]:checked')).map(checkbox => checkbox.value);
                const contactMethod = document.getElementById('contactMethod').value;
                const acceptTerms = document.getElementById('acceptTerms').checked;

                let valid = true;

                // Validate form data
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const phonePattern = /^\(\d{3}\) \d{3}-\d{4}$/;

                if (!name) {
                    document.getElementById('nameError').classList.remove('hidden');
                    valid = false;
                }

                if (!emailPattern.test(email)) {
                    document.getElementById('emailError').classList.remove('hidden');
                    valid = false;
                }

                if (!phonePattern.test(phone)) {
                    document.getElementById('phoneError').classList.remove('hidden');
                    valid = false;
                }

                if (age < 18 || age > 120) {
                    document.getElementById('ageError').classList.remove('hidden');
                    valid = false;
                }

                if (hobbies.length === 0) {
                    document.getElementById('hobbiesError').classList.remove('hidden');
                    valid = false;
                }

                if (!contactMethod) {
                    document.getElementById('contactMethodError').classList.remove('hidden');
                    valid = false;
                }

                if (!acceptTerms) {
                    document.getElementById('acceptTermsError').classList.remove('hidden');
                    valid = false;
                }

                if (!valid) return;

                // Store form data
                const formData = {
                    name,
                    email,
                    phone,
                    age,
                    hobbies,
                    contactMethod,
                    acceptTerms
                };

                // Display form data
                summaryName.textContent = formData.name;
                summaryEmail.textContent = formData.email;
                summaryPhone.textContent = formData.phone;
                summaryAge.textContent = formData.age;
                summaryHobbies.textContent = formData.hobbies.join(', ');
                summaryContactMethod.textContent = formData.contactMethod;

                if (formData.acceptTerms) {
                    termsMessage.textContent = 'Thank you for accepting the terms and conditions.';
                } else {
                    termsMessage.textContent = 'You must accept the terms and conditions.';
                }

                summarySection.classList.remove('hidden');
                confirmationMessage.classList.remove('hidden');
            });

            // Real-time feedback
            document.getElementById('name').addEventListener('input', (event) => {
                if (!event.target.value.trim()) {
                    document.getElementById('nameError').classList.remove('hidden');
                } else {
                    document.getElementById('nameError').classList.add('hidden');
                }
            });

            document.getElementById('email').addEventListener('input', (event) => {
                const email = event.target.value.trim();
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    document.getElementById('emailError').classList.remove('hidden');
                } else {
                    document.getElementById('emailError').classList.add('hidden');
                }
            });

            document.getElementById('phone').addEventListener('input', (event) => {
                const phone = event.target.value.trim();
                const phonePattern = /^\(\d{3}\) \d{3}-\d{4}$/;
                if (!phonePattern.test(phone)) {
                    document.getElementById('phoneError').classList.remove('hidden');
                } else {
                    document.getElementById('phoneError').classList.add('hidden');
                }
            });

            document.getElementById('age').addEventListener('input', (event) => {
                const age = parseInt(event.target.value.trim(), 10);
                if (age < 18 || age > 120) {
                    document.getElementById('ageError').classList.remove('hidden');
                } else {
                    document.getElementById('ageError').classList.add('hidden');
                }
            });

            document.querySelectorAll('input[name="hobbies"]').forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    const hobbies = Array.from(document.querySelectorAll('input[name="hobbies"]:checked'));
                    if (hobbies.length === 0) {
                        document.getElementById('hobbiesError').classList.remove('hidden');
                    } else {
                        document.getElementById('hobbiesError').classList.add('hidden');
                    }
                });
            });

            document.getElementById('contactMethod').addEventListener('change', (event) => {
                if (!event.target.value) {
                    document.getElementById('contactMethodError').classList.remove('hidden');
                } else {
                    document.getElementById('contactMethodError').classList.add('hidden');
                }
            });

            document.getElementById('acceptTerms').addEventListener('change', (event) => {
                if (!event.target.checked) {
                    document.getElementById('acceptTermsError').classList.remove('hidden');
                } else {
                    document.getElementById('acceptTermsError').classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>

<body>
    <h1>Calculator Program</h1>

    <!-- GET and POST -->
    <form action="index.php" method="GET">
        <div>
            <input type="number" placeholder="First Number" name="num1">
        </div>
        <br>

        <div>
            <input type="text" placeholder="Operator" name="op">
        </div>
        <br>

        <div>
            <input type="number" placeholder="Second Number" name="num2">
        </div>
        <br>

        <div>
            <input type="submit" value="Calculate" name="calc">
        </div>
    </form>

    <?php
        $num1 = $op = $num2 = '';

        if (isset($_GET['calc'])) {
            $num1 = $_GET['num1'];
            $op = $_GET['op'];
            $num2 = $_GET['num2'];

            if (empty($num1) || empty($op) || empty($num2)) {
                echo 'All fields are required!';
            } else {
                switch ($op) {
                    case '+':
                        $result = $num1 + $num2;
                        echo $result;
                        break;
                    case '-':
                        $result = $num1 - $num2;
                        echo $result;
                        break;
                    case '*':
                        $result = $num1 * $num2;
                        echo $result;
                        break;
                    case '/':
                        if ($num2 == 0) {
                            echo 'Cannot divide by zero';
                        } else {
                            $result = $num1 / $num2;
                            echo $result;
                        }
                        break;
                    default:
                        echo 'Invalid Operator';
                }
            }
        }
    ?>
</body>

</html>