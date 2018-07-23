<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registeration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>

<body>
    <section id="contact">
        <div class="container">
        <?php
        if(!empty($_GET['message'])){
            echo '<div class="center"><h3>'.$_GET['message'].'</h3></div>';
        }
        ?>
            <h2 class="center">Register</h2>
            <div class="row">
                <form>
                    <div class="row">
                        <h3 class="">Team Name</h3>
                        <input type="text" placeholder="Team Name" name="team" required>
                    </div>
                    <h3 class="">Members</h3>
                    <div class="row">
                        <div class="row">
                            <div class="three col">
                                <input type="text" placeholder="Name" name="name1" required>
                            </div>
                            <div class="three col">
                                <input type="text" placeholder="Roll No" name="roll1" required>
                            </div>
                            <div class="three col">
                                <input type="email" placeholder="email" name="email1" required>
                            </div>
                            <div class="three col">
                                <input type="number" placeholder="phone number" name="mob1" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="three col">
                                <input type="text" placeholder="Name" name="name2" required>
                            </div>
                            <div class="three col">
                                <input type="text" placeholder="Roll No" name="roll2" required>
                            </div>
                            <div class="three col">
                                <input type="email" placeholder="email" name="email2" required>
                            </div>
                            <div class="three col">
                                <input type="number" placeholder="phone number" name="mob2" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="three col">
                                <input type="text" placeholder="Name" name="name3" required>
                            </div>
                            <div class="three col">
                                <input type="text" placeholder="Roll No" name="roll3" required>
                            </div>
                            <div class="three col">
                                <input type="email" placeholder="email" name="email3" required>
                            </div>
                            <div class="three col">
                                <input type="number" placeholder="phone number" name="mob3" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="three col">
                                <input type="text" placeholder="Name (optional)" name="name4">
                            </div>
                            <div class="three col">
                                <input type="text" placeholder="Roll No" name="roll4">
                            </div>
                            <div class="three col">
                                <input type="email" placeholder="email" name="email4">
                            </div>
                            <div class="three col">
                                <input type="number" placeholder="phone number" name="mob4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="three col">
                                <input type="text" placeholder="Name (optional)" name="name5">
                            </div>
                            <div class="three col">
                                <input type="text" placeholder="Roll No" name="roll5">
                            </div>
                            <div class="three col">
                                <input type="email" placeholder="email" name="email5">
                            </div>
                            <div class="three col">
                                <input type="number" placeholder="phone number" name="mob5">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="">Project Title</h3>
                        <input type="text" placeholder="Project Title" name="title">
                    </div>
                    <div class="row">
                        <h3 class="">Description</h3>
                        <input type="text" placeholder="Project Description" name="description">
                    </div>
                    <div class="row">
                        <h3>Abstract Drive Link</h3>
                        <input type="text" placeholder="Drive Link" name="file">
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
</body>

</html>