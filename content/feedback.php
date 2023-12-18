<?php
$pageTitle="FeedBack";
include '../assets/presets/header/header.php';
include "../dbConnect.php";
?>
<div class="container">
    <div class="content-center">
        <h1>Feedback Form</h1>
        <form action="/submit-feedback" method="post">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
            <label for="visit-date">When did you visit our website?</label>
            <input type="date" id="visit-date" name="visit-date" required>

            <div class="radio-group">
                <p>What do you think of our team project website?</p>
                <label><input type="radio" name="rating" value="1"> 1</label>
                <label><input type="radio" name="rating" value="2"> 2</label>
                <label><input type="radio" name="rating" value="3"> 3</label>
                <label><input type="radio" name="rating" value="4"> 4</label>
                <label><input type="radio" name="rating" value="5"> 5</label>
            </div>

            <div class="checkbox-group">
                <p>What brought you to our website?</p>
                <label><input type="checkbox" name="reason" value="Learning"> Learning</label>
                <label><input type="checkbox" name="reason" value="Curiosity"> Curiosity</label>
                <label><input type="checkbox" name="reason" value="Work"> Work</label>
                <label><input type="checkbox" name="reason" value="Other"> Other</label>
            </div>

            <textarea id="message" name="message" rows="4" placeholder="Your Message"></textarea>
            <input type="submit" value="Submit Feedback">
        </form>
    </div>
</div>
<?php
include '../assets/presets/footer/footer.php';
?>

