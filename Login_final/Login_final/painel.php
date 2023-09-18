<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIQUE</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <div id="main">
      <nav class="navbar1">
        <img src="./img/ll.png" alt="jujutsu"  class="logo">
        <ul>
            <li class="lista"><a href="#">Home</a></li>
            <li class="lista"><a href="#">Especifiações</a></li>
            <li class="lista"><a href="#">Visão Geral</a></li>
            <li class="lista"><a href="#">Seja um UniquePro</a></li>      
          </ul>
      </nav>
      <div id="ribbon">
        <p>
          Seja bem-vindo, <?php echo $_SESSION['nome'];?>
        </p>
        <br>
      <p>
        Pague seu novo UniquePro em até 12 parcelas ou economize 10% nos pagamentos
        à vista. <a href="#">Saiba mais</a>
      </p>
    </div>
    <main id="main-content">
      <h1 id="title">UniquePro</h1>
      <p id="subtitle">É todo Pro.</p>
      <p id="description">
        O UniquePro Pro é uma enorme evolução. Ele traz uma rapidez absurda a
        tudo o que você faz e vem com novos recursos espetaculares para fotos e
        vídeos. Tudo em dois tamanhos.
      </p>
      <p id="price">A partir de R$ 9.499</p>
      <a href="#" class="btn">Comprar</a>
      <img id="product-image" src="./img/img1.png" alt="UniquePro" />
      <div id="image-picker">
      <ul>
        
    <li id="white">
        <span class="color selected"><img src="" alt=""></span>
        <span class="description">Magenta</span>
    </li>
    <li id="silver">
        <span class="color selected"><img src="" alt=""></span>
        <span class="description">Preto</span>
    </li>
    <li id="black">
        <span class="color selected"><img src="" alt=""></span>
        <span class="description">Azul</span>
    </li>
    <li id="green">
        <span class="color selected"><img src="" alt=""></span>
        <span class="description">Verde</span>
    </li>
    <li id="blue">
        <span class="color selected"><img src="" alt=""></span>
        <span class="description">Azul</span>
    </li>
</ul>

      </div>
    </main>
    
        
    </div>
   
</body>
</html>