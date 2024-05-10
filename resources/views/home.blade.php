<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | BonsaiDesigns LLC</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <nav>
            <ul class='nav-bar'>
                <li class='logo'><a href='/'>BonsaiDesigns</a></li>
                <input type='checkbox' id='check' />
                <span class="menu">
                    <li><a href="">Home</a></li>
                    <li><a href="#mc-section">Services</a></li>
                    <li><a href="">About</a></li>
                    <!-- <li><a href="">Contact</a></li> -->
                    <li><a href="https://discord.gg/Wuw65dCcVk" id="signbtn"><i class='bx bxl-discord-alt'></i> Discord</a></li>
                    <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                </span>
                <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
            </ul>
        </nav>

        <div class="title">
            <a href="/">BonsaiDesigns</a>
            <p id="sub-title">The <span class="autotype">Best</span> Minecraft's Service Provider For Your Minecraft Journy.</p>

        </div>
    </header>
    <div class="content-area">
        <div class="boxes">
            <div class="box" id="box1"><i class='bx bxs-face'></i>
                <h4>50+ Happy Customers</h4>
            </div>
            <div class="box" id="box2"><i class='bx bxs-shield-plus'></i>
                <h4>5+ Years Of Experience</h4>
            </div>
            <div class="box" id="box3"><i class='bx bx-dock-top'></i>
                <h4>80+ Projects Done</h4>
            </div>
        </div>

        <div class="minecraft" id="mc-section">
            <h2 id="m-title">Minecraft Services</h2>
            <p id="m-subtitle">Bonsai Designs offers you custom plugins for your minecraft servers, Custom core development for any type of server, Server Optimisation & Code Optimisation, Server configrator and server management team for your minecraft server.</p>

            <div class="info-1">
                <h2>Custom Plugins <i class='bx bx-plug'></i></h2>
                <p>Have a great idea for a custom plugin but you don't know how to code? Don't worry we will provide you custom made plugins as you want!</p>
            </div>

            <div class="info-2">
                <h2>Custom Core <i class='bx bx-bolt-circle'></i></h2>
                <p>Want a custom coded core for your Practice PvP or Minigames Server? Don't Worry we will provide you custom a custom coded core as you want!.</p>
            </div>

            <div class="info-3">
                <h2><i class='bx bx-wrench'></i> Server configrator</h2>
                <p>Want a server configrator to configrate your server according to your liking? Don't worry our developers will configrate your server plugins, mods and addons.</p>
            </div>

            <div class="info-4">
                <h2> <i class='bx bx-terminal'></i> Server Management</h2>
                <p>Looking for a Management Team for your minecraft server? Don't Worry our professional management team willing manage your server entirely to your liking and help it grow to a bigger playerbase.</p>
            </div>

            <img src="{{ asset('css/steve.png') }}" id="steve">
        </div>
        <div class="discord">
            <div class="d-container">
                <h2 id="d-title">Discord Services</h2>
                <p id="d-subtitle"><br><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i> <br><br>Bonsai Designs offers you custom made hand coded discord bots for your discord server, a professional management team, advertising team and multiple discord server templates that you can buy for your discord server to make it look way professional.</p>

                <p id="comment"><i>"The bot i got was very good and functional just as i wanted!"</i> - <span>Customer</span></p>

                <img src="{{ asset('css/discord.png') }}" id="discord">
            </div>
        </div>
        <div class="w-container">
            <div class="website">
                <h2 id="w-title">Website Development Services</h2>
                <p id="w-subtitle">Bonsai Designs offers you custom made hand coded websites designs according to your needs, pre-made website templates, customer handling panel, custom panel for any type of service that you or your company provides, website frontend design and website back-end servers and code.
                    <button id="projects">See Our Work <i class='bx bx-chevrons-right'></i></button>
                </p>
                <img src="{{ asset('css/website.png') }}" id="website">
            </div>
        </div>
        <div class="w-center">
            <div class="whychoose">
                <!-- <div class="why-container"> -->
                <h2 id="why-title">Why choose us?</h2>
                <div class="container">
                    <div class="items">
                        <h4><i class='bx bx-money'></i> Budget Friendly</h4>
                        <p>Our products are budget friendly to make sure you can start your server on any budget.</p>
                    </div>
                    <div class="items">
                        <h4><i class='bx bx-equalizer'></i> Premium Quality</h4>
                        <p>Our products has a good quality of code and performance which will give you a great experience.</p>
                    </div>
                    <div class="items">
                        <h4><i class='bx bxs-user-voice'></i> 24/7 Support</h4>
                        <p>Our Support Team is 24/7 online to help you out and proceed your orders.</p>
                    </div>
                </div>
                <div class="container2">
                    <div class="items2">
                        <h4><i class='bx bx-cart'></i> Variety of Services</h4>
                        <p>BonsaiDesigns offers you almost every type of Minecraft service that you could think of.</p>
                    </div>
                    <div class="items2">
                        <h4><i class='bx bx-customize'></i> Customisation</h4>
                        <p>You can customise anything in your product and get it exactly how you wanted it.</p>
                    </div>
                    <div class="items2">
                        <h4><i class='bx bx-wrench'></i> Huge Dev Team</h4>
                        <p>BonsaiDesigns has a huge team of experienced developers which makes the Estimated Time of product arrival short.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="order">
            <div class="title"><h2>How to purchase?</h2></div>
        </div> -->
    </div>
    <footer>
        <div class="up">
            <h1>BonsaiDesigns</h1>
            <div class="footer-links">
                <a href="https://discord.gg/Wuw65dCcVk"><i class='bx bxl-discord-alt' style="color: blue;"></i></a>
                <a href="#"><i class='bx bxl-instagram' style="color: pink;"></i></a>
                <a href="#"><i class='bx bxl-youtube' style="color: red;"></i></a>
                <a href="#"><i class='bx bxl-twitter' style="color: #0066ff"></i></a>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>Copyright © 2024 BonsaiDesigns LLC</p>
    </div>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ asset('js/typeAnimation.js') }}"></script>
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "f266dddf-cd22-4a36-b2a3-7f2a2e49521e";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>
    </script>
</body>

</html>