<?php
if(isset($_POST['name'])){
    //using mysql way for connecting
    
        $server = "localhost";
        $username = "root";
        $password="";
    
    $con = mysqli_connect($server,$username,$password);
    if (!$con) {
        die("connection to this database is failed due to ".mysqli_connect_error());
    }
    //echo "Successfully connected";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Message = $_POST['Message'];
    $sql = "INSERT INTO `contactsstore`.`contacts` (`name`, `email`, `message`, `date`) VALUES ('$name', '$email', '$Message', current_timestamp());";
    echo $sql;
    if($con->query($sql) == true){
        echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHRONICLE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./images/sm__1_-removebg-preview.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body data-bs-theme="light">

    <header class="nav-bar ">
        <nav class="navbar navbar-expand-lg bs-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./images/sm__1_-removebg-preview.png" alt="Portfolio-logo">
                    <label class="logo">CHRONICLE</label>
                </a>
                <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around "
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto  ">
                        <li class="nav-item btn-grad">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item btn-grad">
                            <a class="nav-link active " aria-current="page" href="#">Project</a>
                        </li>
                        <li class="nav-item btn-grad">
                            <a class="nav-link active me-4" aria-current="page" href="#">Contact Us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="progress-bar">
            <!-- <div class="filled"> -->
        </div>
        </div>
    </header>



    <section class="home ">
        <div class="content">
            <h3>Hi,I'm Name</h3>
            <h3>and I'm a <span class="text logo"> </span></h3>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus eveniet
                deleniti beatae libero quia unde nemo dolorum ullam pariatur atque cupiditate, eligendi dolore. Eum
                ipsa, fugiat beatae omnis quia expedita?</p>
            <div class="button">
                <a href="#" class="btn-grad1 ">DOWNLOAD CV</a>
                <a href="#"><i class="fa-brands fa-github btn-grad1"></i></a>
            </div>

        </div>

        <div class="image">
            <img
                src="./images/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863-removebg-p.png">
        </div>
    </section>

    <section class="project">
        <h1 class="heading">PROJECT</h1>
    </section>

    <div class="skillbar">
        <h1 class="heading">SKILL</h1>
        <div class="icon">
            <img src="./images/html-5.png" alt="">
            <img src="./images/css-3.png" alt="">
            <img src="./images/javascript.png" alt="">
            <img src="./images/bootstrap.png" alt="">
            <img src="./images/jquery-wordmark.png" alt="">
        </div>
    </div>


    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="">Contact Me</h1>
                    <p><i class="fa-regular fa-envelope"></i>abc@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i>1234567890</p>
                    <div class="icons">
                        <a href=""><i class="fa-brands fa-github  btn-grad1"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin  btn-grad1"></i></a>
                    </div>
                </div>
                <div class="contact-right">
                    <h1>Contact Form</h1>
                    <form action="index.php" method="POST">
                        <input type="text" name="name" id="name" placeholder="Name" required>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <textarea name="Message" id="Message" rows="3" placeholder="Message"></textarea>
                        <button class="btn-grad1" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <h2 class="footer logo">
            &copy; copyright|2023|by JOYSTON|GAGAN
            </h1>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.16/typed.umd.js"
        integrity="sha512-+2pW8xXU/rNr7VS+H62aqapfRpqFwnSQh9ap6THjsm41AxgA0MhFRtfrABS+Lx2KHJn82UOrnBKhjZOXpom2LQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
