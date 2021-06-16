<?php 

function db_connect() ///Connection to Database with $conn
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Contact";

    // Create connection    
    $conn = new mysqli($servername, $username, $password, $dbname);

    return $conn;
}

function head_()
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio website complete</title>
    </head>
    <body>
    <header class="l-header">
    <nav class="nav bd-grid">

        <div class="nav_bar" id="nav_bar">
            <ul class="nav__list">
                <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                <li class="nav__item"><a href="#work" class="nav__link">Projects</a></li>
                <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
    </header>
    <?php
}

function home()
{
    ?>
    <section class="home bd-grid" id="home">
    <div class="home__data">
        <h1 class="home__title">Hi,<br>I'm <span class="home__title-color">Jay</span><br>1e jaar <br>Applicate Ontwikkelaar</h1>

        <a href="#contact" class="button">Contact</a>
    </div>

    <div class="home__img">    
        <img src="assets/img/me.jpg" alt="">
    </div>
    </section>
    <?php
}

function about()
{
    ?>
    <section class="about section " id="about">
    <h2 class="section-title">About</h2>

    <div class="about__container bd-grid">
        <div class="about__img">
            <img src="assets/img/me2.jpg" alt="">
        </div>
        
        <div>
            <h2 class="about__subtitle">I'm Jay</h2>
            <p class="about__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate cum expedita quo culpa tempora, assumenda, quis fugiat ut voluptates soluta, aut earum nemo recusandae cumque perferendis! Recusandae alias accusamus atque.</p>           
        </div>                                   
    </div>
    </section>
    <?php
}

function skills()
{
    ?>
    <section class="skills section" id="skills">
    <h2 class="section-title">Skills</h2>

    <div class="skills__container bd-grid">          
        <div>
            <h2 class="skills__subtitle">Profesional Skills</h2>
            <p class="skills__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit optio id vero amet, alias architecto consectetur error eum eaque sit.</p>
            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxl-html5 skills__icon'></i>
                    <span class="skills__name">HTML5</span>
                </div>
            </div>
            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxl-css3 skills__icon'></i>
                    <span class="skills__name">CSS3</span>
                </div>
            </div>
            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxl-javascript skills__icon' ></i>
                    <span class="skills__name">JAVASCRIPT</span>
                </div>
            </div>
            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxs-paint skills__icon'></i>
                    <span class="skills__name">PHP</span>
                </div>
            </div>
        </div>
        
        <div>              
            <img src="assets/img/work3.jpg" alt="" class="skills__img">
        </div>
    </div>
    </section>
    <?php
}

function projects()
{
    ?>
    <section class="work section" id="work">
    <h2 class="section-title">Projects</h2>

    <div class="work__container bd-grid">
        <div class="work__img">
            <img src="assets/img/pic1.jpg" alt="">
        </div>
        <div class="work__img">
            <img src="assets/img/pic2.jpg" alt="">
        </div>
        <div class="work__img">
            <img src="assets/img/pic3.jpg" alt="">
        </div>
        <div class="work__img">
            <img src="assets/img/pic4.jpg" alt="">
        </div>
        <div class="work__img">
            <img src="assets/img/pic5.jpg" alt="">
        </div>
        <div class="work__img">
            <img src="assets/img/pro6.jpg" alt="">
        </div>
    </div>
    </section>
    <?php
}

function contact()
{
    ?>
    <section class="contact section" id="contact">
    <h2 class="section-title">Contact</h2>

    <div class="contact__container bd-grid">
    <?php
        $return = storeMessage();
    ?>
        <form action="index.php" method="POST" name="contact_form" class="contact__form">
        <?php 
        if(is_array($return))
        {

            ?>
            <ul class="errorList">
                <?php
                foreach($return as $value)
                {
                    ?><li><?php echo $value; ?></li><?php
                }
                ?>
                </ul>
                <?php
        }
        ?>
            <input type="text" placeholder="Name" name="Name" id="Name" class="contact__input" required>
            <input type="mail" placeholder="Email" name="Email" id="Email" class="contact__input" required>
            <textarea placeholder="Type Message Here" name="message" id="message" cols="0" rows="10" class="contact__input" required></textarea>
            <button type="submit" class="contact__button button">Send</button>
        </form>
    </div>
    </section>
    </main>
    <?php
}

function storeMessage()
{
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        $Name          = trim($_POST['Name']);
        $email         = trim($_POST['Email']);
        $message        = trim($_POST['message']);

        $errorMessage = [];

        if($Name == "")
        {
            $errorMessage[] = "Please enter your first name and last name";
        }

        if($email == "")
        {
            $errorMessage[] = "Please enter your email address";
        }

        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errorMessage[] = "This email address is not valid, please enter a valid email address";
        }

        if($message == "")
        {
            $errorMessage[] = "Please leave a valid message";
        }

        elseif(strlen($message) > 160)
        {
            $errorMessage[] = "The message provided is too long, max 160 characters!";
        }

        if(count($errorMessage) > 0)
        {
            return $errorMessage;
        }
        else
        {
            // connect to db
            $conn = db_connect();
           

            // the SQL query tpo be sent to the database
            $ratingformSQL = "
            INSERT INTO `contact`
            (
                `Date`,
                `Name`,
                `Email`,
                `message`
            ) 
            VALUES 
            (
                NOW(),
                '" . $Name . "',
                '" . $email . "',
                '" . $message . "'
            )
            ";
            // var_dump($ratingformSQL);
            // die(" dump");
            // execute insert SQL or return a die with some errors
            $result = $conn->query($ratingformSQL) or die($conn->error . "<br >" . $ratingformSQL);
            
        }
        if($result)
        {
           // die(" Hi, i'm on line " . __LINE__);
           // everything went fine, return a succes message that data was inserted
            return array("Thanks for filling in the contact form,", "I'll be emailing you back soon");
        }
        else
        {

            die(" Hi, i'm in File "  . __FILE__ . "  and on line " . __LINE__);
        }

        return false;
    }

    return "Please fill in contact form";
}

function footer_()
{
    ?>
    <footer class="footer">
    <p class="footer__title">Jay</p>
    <div class="footer__social">
        <a href="https://www.linkedin.com/in/jay-lee-lourens-a959a0141/" target="_blank" class="footer_icon"><i class='bx bxl-linkedin'></i></a>
    </div>
    <p>&#169; 2020 copyright all right reserved</p>
    </footer>
    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
    </body>
    </html>
    <?php
}

?>