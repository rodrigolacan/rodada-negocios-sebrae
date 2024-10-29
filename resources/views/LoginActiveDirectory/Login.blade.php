<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6d680bcada.js" crossorigin="anonymous"></script>
    <title>Sign In & Sing Up Form</title>
    @vite('resources/css/login.css')
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action={{route('welcome')}} class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                       <i class="fas fa-user"></i>
                       <input type="text" placeholder="Username" id="username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="password">
                     </div>
                     <input type="submit" value="Login" class="btn solid">
                     <p class="social-text">Or Sign in with social plataforms</p>
                     <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                     </div>
                </form>
                
                <form action="" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                       <i class="fas fa-user"></i>
                       <input type="text" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email">
                     </div>
                     <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                     </div>
                     <input type="submit" value="Sign up" class="btn solid">
                     <p class="social-text">Or Sign up with social plataforms</p>
                     <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                     </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Vero asperiores commodi beatae dolores earum, delectus!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="img/log.svg" class="image" alt="">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Vero asperiores commodi beatae dolores earum, delectus!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="img/register.svg" class="image" alt="">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>