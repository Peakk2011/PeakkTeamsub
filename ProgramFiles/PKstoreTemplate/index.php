<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peakk Website Template</title>
    <link rel="stylesheet" href="./Slider Interface/Sidebar.css">
    <link rel="stylesheet" href="Custom.css">
    <link rel="stylesheet" href="Font.css">
    <link rel="stylesheet" href="Navbar.css">
    <link rel="stylesheet" href="./ThemeSwicher/Themes.css">
    <link rel="stylesheet" id="switcher-id" href="">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    
    <div class="pattern" id="pattern"></div>

    
    <div class="sidebar">
        <div class="sidebarcon" id="Sidebar">
          <div class="sidebartext">
            <span style="cursor:pointer" onclick="CloseNav()">&#9776;</span>
            <img src="./Image/PeakkSolid.png" alt="">
            <h1>Template</h1>
          </div>
          <div class="sidebarlink">
            <div class="iconslink">
                <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                <li><a href="#">Developer Tools</a></li>
            </div>
            <div class="iconslink">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <li><a href="#">Login & Register</a></li>
            </div>
            <div class="iconslink">
                <ion-icon name="crop-outline"></ion-icon>
                <li><a href="#">Open phone view</a></li>
            </div>
            <div class="iconslink">
                <ion-icon name="language-outline"></ion-icon>
                <li><a href="#">Language</a></li>
            </div>
            <div class="iconslink">
                <ion-icon name="color-fill-outline"></ion-icon>
                <li><a href="#">Themes</a></li>
            </div>
            <div class="iconslink">
                <ion-icon name="help-outline"></ion-icon>
                <li><a href="#">Help</a></li>
            </div>
            <div class="iconslink">
                <ion-icon name="paper-plane-outline"></ion-icon>
                <li><a href="#">Feedback</a></li>
            </div>
          </div>
        </div>
        <div class="dragholder"></div>
      </div>

      <div class="BgSidebar"></div>

      <nav id="Navbar">
        <div class="navbar">
            <div class="navbartext">
                <img src="./Image/PeakkSolid.png" alt="">
                <h1 id="TextNavbar">Template</h1>
            </div>
            <!-- theme selecter -->
            <div class="ThemeSelc" id="ThemeSelc">
                <div class="theme-switches">
                    <div data-theme="light" class="switch" id="switch-1">
                    </div>
                    <div data-theme="sky" class="switch" id="switch-2"></div>
                    <div data-theme="purple" class="switch" id="switch-3"></div>
                    <div data-theme="dark" class="switch" id="switch-4"></div>
                    <!-- option -->
                    <div data-theme="Natural" class="switch" id="switch-5"></div>
                    <div data-theme="RedCream" class="switch" id="switch-6"></div>
                    <div data-theme="onset" class="switch" id="switch-7"></div>
                    <div data-theme="solid" class="switch" id="switch-8"></div>
                </div>
            </div>
            <div class="navbarlink">
                <li><a href="javascript:void(0)" id="Text">Themes</a></li>
                <li><a href="#" id="TextColor">Create Account</a></li>
                <span style="cursor:pointer" onclick="SidebarToggle()" id="hamToside">&#9776;</span>
                <li><a href="javascript:void(0)" id="ExitTonavbar">Leave This</a></li>
            </div>
        </div>
    </nav>

    <div class="NavMore" id="NavTools">

        <div class="Navtools">
            <div class="NavtoolsCon">
                <div class="flexnavbartools" id="FlexLinksTools">
                    <div id="tools1">
                        <ion-icon name="bag-handle"></ion-icon>
                        <h2>FOR PEAKK TEMPLATE</h2>
                        <hr>
                        <li><a href="#">Go to mobile site</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Themes</a></li>
                    </div>
                    <div id="tools2">
                        <ion-icon name="help-sharp"></ion-icon>
                        <h2>PEAKK STORE HELP</h2>
                        <hr>
                        <li><a href="#">How to?</a></li>
                        <li><a href="#">Another Web tools</a></li>
                        <li><a href="#">Visit Peakk site</a></li>
                    </div>
                    <div id="tools3">
                        <div class="QuickTools">
                            <div class="QuicktoolsContent">
                                <div class="QuicktoolsText">
                                    <h1>Social media links</h1>
                                    <ion-icon name="logo-facebook"></ion-icon>
                                    <ion-icon name="logo-instagram"></ion-icon>
                                    <ion-icon name="logo-tiktok"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="bgblur"></div>

   
    <!-- Function -->

      <script src="./Slider Interface/interface.js"></script> 
      <script src="./eel.js"></script>
      <script src="Control.js"></script>
      <script src="./ThemeSwicher/script.js"></script>
</body>
</html>