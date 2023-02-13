<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Speak App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="loading">
        <div id="spinner"></div>
    </div>
    <div id="particles-js"></div>
    <div id="box">
        <div class="box1 onlywide animated bounceOutLeft" style="animation-delay:1.7s;"></div>
        <div class="box2 onlywide animated bounceOutLeft" style="animation-delay:1.8s;"></div>
        <div class="box2 onlywide animated bounceOutLeft" style="animation-delay:1.9s;"></div>
        <div class="box2 animated bounceOutRight" style="animation-delay:1.9s;"></div>
        <div class="box2 onlywide animated bounceOutRight" style="animation-delay:1.8s;"></div>
        <div class="box2 onlywide animated bounceOutRight" style="animation-delay:1.7s;"></div>
    </div>
    <a id="about" onclick="showabout()" class="animated fadeIn" style="animation-delay:2.2s;">About us</a>
    <a id="work" onclick="showwork()" class="animated fadeIn" style="animation-delay:2.2s;">Download</a>
    <a id="contact" onclick="showcontact()" class="animated fadeIn" style="animation-delay:2.2s;">Contacts</a>
    <div id="middle" class="animated slideInDown" style="animation-delay:2.0s;">
        <h1>Speak App</h1>
        <h2>Communication Made Easy</h2>
        <div id="menu">
            <a onclick="showabout()">About us</a>
            <a onclick="showwork()">Download</a>
            <a onclick="showcontact()">Contacts</a>
        </div>
        <table>
                <tr>
                    <td class="animated zoomIn" style="animation-delay:2.2s;"><a class="social"><i class="fab fa-facebook"></i></a></td>
                    <td class="animated zoomIn" style="animation-delay:2.4s;"><a class="social"><i class="fab fa-twitter"></i></a></td>
                    <td class="animated zoomIn" style="animation-delay:2.6s;"><a class="social"><i class="fab fa-instagram"></i></a></td>
                    <td class="animated zoomIn" style="animation-delay:2.8s;"><a class="social"><i class="fab fa-dribbble"></i></a></td>
                </tr>
        </table>
    </div>
    <div id="work_container" class="container">
        <div onclick="closework()"><i class="fas fa-angle-right"></i></div>
        <h1>Speak App</h1>
        <section>
            <h2>Communication Made Easy.</h2>
            <p>
                Where every voice is heard. Imagine a world where communication knows no boundaries, where words flow freely between all people regardless of their abilities. That's the world that the Speak App team is creating. With Speak App, they are breaking down the walls of silence and bridging the gap between the deaf and hearing communities.

Speak App is more than just a communication platform, it's a revolution. It's an app that empowers individuals with hearing difficulties to express themselves and connect with the world around them like never before. It's an app that makes communication accessible, easy and enjoyable for everyone. Whether you're deaf, hard of hearing, or simply looking to communicate with someone who is, Speak App is the solution you've been waiting for.

So join the Speak App revolution, and discover a world where every voice is heard. Download Speak App today and experience the power of communication like never before.
            </p>
            <div id="used">
                <div><i class="fas fa-circle"></i>&nbsp;ASL</div>
                <div><i class="fas fa-circle"></i>&nbsp;FSL</div>
                <div><i class="fas fa-circle"></i>&nbsp;SIGN LANGUAGE</div>
            </div>
            <a href="Full v1.apk" download>
            <button class="btn_one">Download</button>
            </a>
            <a href="Full v1.apk" download>
            <button class="btn_two">Download (mirror #1)</button>
            </a>
        </section>
    </div>
    <div id="about_container" class="container">
            <div onclick="closeabout()"><i class="fas fa-angle-left"></i></div>
            <h1>TECH GENTS</h1>
            <section>
                <h2>About us</h2>
                <p>
                    The Speak App team is a talented and motivated group of individuals who have come together with a common goal - to improve communication between deaf and hearing individuals. Led by the capable John Hendrix Marcaida, the team consists of Ace Solomon, Francine Vicencio, and John Vidal, each bringing their unique skills and experiences to the project. Their passion for creating a solution to reduce communication barriers is evident in their hard work and dedication to the Speak App project.                </p>
                <p>
            </section>
            <section>
                <h2>Tech Gents</h2>
                <p>
                    Leader : John Hendrix Marcaida. |

                    Members : Ace Solomon
                    Francine Vicencio
                    John Vidal
                </p>
            </section>
        </div>
          <div id="contact_container" class="container">
            <div onclick="closecontact()"><i class="fas fa-angle-down"></i></div>
            <h1>Developers.</h1>
            <section>
                <h2>Devs (Contact us)</h2>
                <p>
                    <form action="send_form_email.php" method="post">
                        <input type="text" placeholder="name" name="name" required>
                        <input type="email" placeholder="email" name="email" required><br>
                        <textarea placeholder="your message" name="message" required rows="5"></textarea><br>
                        <button class="btn_one">send</button>
                    </form> 
                </p>
            </section>
        </div>
        <div id="footer">
            Made by Tech Gents <br> <a href="https://github.io">Tech Gents</a>
        </div>
    <script src="index.js" type="text/javascript"></script>
    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>
</html>