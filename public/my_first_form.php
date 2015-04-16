s<?php
  var_dump($_GET);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My First Form</title>
</head>
<body>
    <header>
        <!-- <h1>Super Cool Form!</h1> -->
    </header>
    <section>
        <header>
            <h2>User Login</h2>
        </header>
        <form name="form1" method="GET" action="/my_first_form.php">
            <p>   
                <label for="username"></label>
                <input id="username" name="username" type="text" placeholder="username">
            </p>
            <p>
                <label for="password"></label>
                <input id="password" name="password" type="password" placeholder="password">
            </p>
        </form>
    </section>

    <section>
        <header>
            <h2>Compose an Email</h2>
        </header>
        <form method="GET" action="/my_first_form.php">
            <p>   
                <label for="send_to"></label>
                <input id="send_to" name="send_to" type="email" placeholder="To">
            </p>
            <p>
                <label for="sent_from"></label>
                <input id="sent_from" name="sent_from" type="email" placeholder="From">
            </p>
             <p>
                <label for="subject"></label>
                <input id="subject" name="subject" type="text" placeholder="Subject">
            </p>
             <p>
                <textarea id="email_body" name="email_body" placeholder="Enter text here" rows="10" cols="40"></textarea>
            </p>
            <p>
                <input type="submit" value="Send">
            </p>
            <p>
                <input id="sent_folder" type="checkbox" name="sent_folder" value="yes">
                <label for "sent_folder">Click here if you'd like to save a copy of this message to your sent folder!</label>
            </p>
        </form>
    <section>
        <header>
            <h2>Multiple Choice Test</h2>
        </header>
        <form name="form2" method="GET" action="/my_first_form.php">
            <p>Which place is the coolest?</p>
            <p>
                <label><input type="radio" name="q1" value="madrid">Madrid, Spain</label>
            </p>
            <p>
                <label><input type="radio" name="q1" value="san antonio">San Antonio, Texas</label>
            </p>
            <p>
                <label><input type="radio" name="q1" value="managua">Managua, Nicaragua</label>
            </p>
            <p>Which of these languages do you speak?</p>
            <p>
                <label><input type="checkbox" id="lang1" name="lang[]" value="english">English</label>
            </p>
            <p>
                <label><input type="checkbox" id="lang2" name="lang[]" value="spanish">Spanish</label>
            </p>
            <p>
                <label><input type="checkbox" id="lang3" name="lang[]" value="french">French</label>
            </p>
            <p>
                <label for="spots">Which of these animals have spots?</label>
            </p>
            <p>
                <select id="spots" name="spots[]" multiple>
                    <option value="zebra">Zebra</option>
                    <option value="cow">Cow</option>
                    <option value="dalmatian">Dalmatian</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Submit">
            </p>
        </form>
    </section>
    <section>
        <header>
            <h2>Select Testing</h2>
        </header>
        <form name="form3" method="GET" action="/my_first_form.php">
            <p>
                <label for="good_day">Are you having a good day?</label>
                <select id="good_day" name="good_day">
                    <option value="2">Yes</option>
                    <option value="0">No</option>
                    <option value="1">Meh</option>
                </select>
            </p>
            <input type="submit" value="Submit">
        </form>
    </section>
</body>
</html>