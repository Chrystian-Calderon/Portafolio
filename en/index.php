<?php
$message = isset($_GET['message']) ? $_GET['message'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChrysRalf</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <?php
        if (!empty($message)) {
            echo '
            <div class="message">
                '. $message .'
            </div>';
        }
        ?>
        <header>
            <div class="title">
                <div class="img">
                    <img src="./img/user.jpg" alt="logo">
                </div>
                <div class="title-name">
                    <h1 class="h4">ChrysRalf</h1>
                </div>
            </div>
            <nav>
                <div class="nav-hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="nav">
                    <ul>
                        <li><a href="#about-me" class="option paragraph">About me</a></li>
                        <li><a href="#proyects" class="option paragraph">Proyects</a></li>
                        <li><a href="#contact" class="option paragraph">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="principle" id="principle">
                <div class="hanging-icons">
                    <div class="icon">
                        <div></div>
                        <img src="./img/html.webp" alt="logo html">
                    </div>
                    <div class="icon">
                        <div></div>
                        <img src="./img/css.png" alt="logo css">
                    </div>
                    <div class="icon">
                        <div></div>
                        <img src="./img/js.webp" alt="logo js">
                    </div>
                    <div class="icon">
                        <div></div>
                        <img src="./img/java.png" alt="logo java">
                    </div>
                    <div class="icon">
                        <div></div>
                        <img src="./img/angular.webp" alt="logo angular">
                    </div>
                </div>
                <div class="info">
                    <h2 class="h5">Hi,<br>I’am Chrystian Calderon</h2>
                    <span class="h6">Developer Back-end</span>
                    <button class="h5">CV</button>
                </div>
            </div>
            <div class="about-me" id="about-me">
                <h3 class="h5">About me</h3>
                <div class="description">
                    <div class="img">
                        <img src="./img/user.jpg" alt="Chrystian">
                    </div>
                    <p class="paragraph">
                        My full name is Chrystian Ralf Calderon Quisbert, passionate about technology and always looking for knowledge to strengthen my technical skills. I specialize as a back-end programmer and I am constantly learning in the front-end field. I take responsibility for each project I undertake, but I also enjoy collaborating in multidisciplinary teams. My focus on continuous improvement drives me to hone my programming skills and explore new languages, thus complementing my knowledge base with each challenge.
                    </p>
                </div>
                <div class="skills">
                    <h3 class="h5">Technical skills</h3>
                    <div class="fronted">
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                    </div>
                    <div class="backend">
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                    </div>
                    <div class="database">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            <div class="proyects" id="proyects">
                <h3 class="h5">Proyects</h3>
                <div class="cards">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/user.jpg" alt="img prueba">
                        </div>
                        <div class="card-description">
                            <h4 class="h6">Title</h4>
                            <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio molestiae magnam necessitatibus porro minima doloribus, accusamus commodi obcaecati veniam officiis corporis temporibus labore laborum iusto sunt quasi excepturi incidunt aperiam.
                            Earum, corporis. Error voluptatem et, distinctio illo magni suscipit natus expedita obcaecati, id, ipsam pariatur in repudiandae aperiam tenetur blanditiis nihil impedit laboriosam repellat corrupti? Eius odit aspernatur tenetur sint.</p>
                        </div>
                        <div class="card-tech">
                            <h4 class="h6">Technologies</h4>
                            <img src="" alt="">
                        </div>
                        <div class="card-buttons">
                            <button>View</button>
                            <button>GitHub</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/user.jpg" alt="img prueba">
                        </div>
                        <div class="card-description">
                            <h4 class="h6">Title</h4>
                            <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio molestiae magnam necessitatibus porro minima doloribus, accusamus commodi obcaecati veniam officiis corporis temporibus labore laborum iusto sunt quasi excepturi incidunt aperiam.
                            Earum, corporis. Error voluptatem et, distinctio illo magni suscipit natus expedita obcaecati, id, ipsam pariatur in repudiandae aperiam tenetur blanditiis nihil impedit laboriosam repellat corrupti? Eius odit aspernatur tenetur sint.</p>
                        </div>
                        <div class="card-tech">
                            <h4 class="h6">Technologies</h4>
                            <img src="" alt="">
                        </div>
                        <div class="card-buttons">
                            <button>View</button>
                            <button>GitHub</button>
                        </div>
                    </div>
                </div>
                <div class="button">
                    <button class="h6">See more</button>
                </div>
            </div>
            <div class="contact" id="contact">
                <h3 class="h5">Contact</h3>
                <form action="contact.php" method="POST">
                    <div class="inputs">
                        <label for="name" class="h6">Name:</label>
                        <input type="text" name="name" id="name" class="h6" required>
                    </div>
                    <div class="inputs">
                        <label for="email" class="h6">Email:</label>
                        <input type="text" name="email" id="email" class="h6" required>
                    </div>
                    <div class="inputs">
                        <label for="affair" class="h6">Affair:</label>
                        <input type="text" name="affair" id="affair" class="h6" required>
                    </div>
                    <div class="inputs">
                        <label for="message" class="h6">Message</label>
                        <textarea name="message" name="message" id="message" cols="30" rows="10" class="h6" required></textarea>
                    </div>
                    <div class="inputs">
                        <input type="submit" value="Enviar" class="h6">
                    </div>
                </form>
            </div>
        </main>
    </div>
    <script src="./script.js"></script>
</body>
</html>