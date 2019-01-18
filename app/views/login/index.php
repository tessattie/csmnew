<?php include_once 'C:/wamp/www/caisses/app/views/headerLogin.php'; ?>
	<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="/caisses/public/home" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit"><a href="/caisses/public/home"></a>Sign in</button>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

