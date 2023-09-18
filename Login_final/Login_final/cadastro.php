<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>
<body>
<body>
    <div class="box">
        <div class="container">
            <h2>Crie sua conta</h2>
            <form nome="login" action="" method="POST">
                <div class=inputBox>
                    <label><b>Nome:</b></label>
                    <input type="text" name="nome" />
                    <i></i>
                </div>
                <div class=inputBox>
                    <label><b>Email:</b></label>
                    <input type="text" name="email" />
                    <i></i>
                </div>
                <div class="inputBox">
                    <label><b>Senha:</b></label>
                    <input type="password" name="senha" />
                    <i></i>
                </div>
                <br>
                <br>
                <button class="botao" type="submit" name="entrar">Cadastrar</button>
                <br>
                <br>
                <div class="links">
                    <br>
            <a href="index.php">Fazer Login</a>
</div>
                
                 </div>
                </form>
        <style>
            <style>
            @import url('https://fonts.googleapis.com/css2?family= Raleway: wght @200 & display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: #23242a;
            }

            .box {
                position: relative;
                width: 380px;
                height: 600px;
                background: #1c1c1c;
                border-radius: 8px;
                overflow: hidden;
            }

            .botao {
                background-color: #45f3ff;
                border-radius: 8px;
                width: 320px;
                height: 35px;
            }
            label{
                color:#45f3ff;
            }

            .box::before {
                content: '';
                position: absolute;
                top: -50px;
                left: -50px;
                width: 380px;
                height: 420px;
                background: linear-gradient(0deg, transparent, #45f3ff, #45f3ff);
                transform-origin: bottom right;
                animation: animate 6s linear infinite;
            }

            .box::after {
                content: '';
                position: absolute;
                top: -50px;
                left: -50px;
                width: 380px;
                height: 420px;
                background: linear-gradient(0deg, transparent, #45f3ff, #45f3ff);
                transform-origin: bottom right;
                animation: animate 6s linear infinite;
                animation-delay: -3s;
            }

            @keyframes animate {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }

            }

            .container {
                position: relative;
                inset: 5px;
                border-radius: 8px;
                background: #28292d;
                z-index: 10;
                padding: 40px 30px;
                display: flex;
                flex-direction: column;
            }

            .container h2 {
                color: #45f3ff;
                font-weight: 500;
                text-align: center;
                letter-spacing: 0.1em;
            }

            .inputBox {
                position: relative;
                width: 320px;
                margin-top: 35px;
            }

            .inputBox input {
                position: relative;
                width: 100%;
                padding: 20px 10px 10px;
                background: transparent;
                border: none;
                outline: none;
                color: #23242a;
                font-size: 1em;
                letter-spacing: 0.05em;
                z-index: 10;
            }

            .inputBox span {
                position: absolute;
                left: 0;
                padding: 20px 10px 10px;
                font-size: 1em;
                color: #8f8f8f;
                pointer-events: none;
                letter-spacing: 0.05em;
                transition: 0.5s;
            }

            .inputBox input:valid~span,
            .inputBox input:focus~span {
                color: #45f3ff;
                transform: translateX(0px) translateY(-34px);
                font-size: 0.75em;
            }

            .inputBox i {
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 2px;
                background: #45f3ff;
                border-radius: 4px;
                transition: 0.5s;
                pointer-events: none;
                z-index: 9;
            }

            .inputBox input:valid~i,
            .inputBox input:valid~i {
                height: 44px;
            }

            .links {
                text-align: center;
            }

            .links a {
                margin: 10px 0;
                font-size: 1.25em;
                color: #8f8f8f;
                text-decoration: none;
            }

            .links a:hover .links a:nth-child(2) {
                color: #45f3ff;
            }

            input[type="submit"] {
                border: none;
                outline: none;
                background: #45f3ff;
                padding: 11px 25px;
                width: 100px;
                margin-top: 10px;
                border-radius: 4px;
                font-weight: 600;
                cursor: pointer;
            }

            input[type="submit"]:active {
                opacity: 0.8;
            }
        </style>
        <script>
document.getElementById("loginButton").addEventListener("click", function() {
    // Redireciona para index.html
    window.location.href = "index.php";
});
</script>
</body>
</html>