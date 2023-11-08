<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SpawnCode">
    <meta name="generator" content="Hugo 0.108.0">
    <meta name="keywords" content="читы, гмод, читы гмод, читы гаррис мод, урбаничка, hacks, cheats, gmod cheats, garry's mod cheats, garry's mod hacks, gmod hacks, gmod, garry's mod, гаррис мод, gmodhacklib">
    <title>gmodhacklib, библиотека GMOD-читов</title>

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
          <style>
        body {
            background-color: #307eba;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        button {
            border: none;
            padding: 8px 30px;
            background-color: #307eba;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26);
            transition: all 0.3s ease-out;
        }

        button:hover {
            background-color: #307eba;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.26);
        }

        button:before {
            content: '';
            background-color: #2F2F2F;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            transform: translateX(-100%);
            transition: transform 0.3s ease-out;
            z-index: -1;
        }

        button:hover:before {
            transform: translateX(0);
        }

        button:after {
            content: '';
            background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.1));
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.3s ease-out;
            z-index: -2;
        }

        button:hover:after {
            opacity: 1;
        }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">О сайте</h4>
          <p class="text-white">Сайт сделал voltageee. При поддержке: <a href="https://discord.gg/Zxqzh7K8zd" class="text-white"> bocchis</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>gmodhacklib</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Библиотека бесплатных gmod-читов</h1>
        <p class="lead text-muted">Тут вы можете найти бесплатные читы для гмода. Библиотека будет регулярно пополняться. Пока что она содержит только читы, которые использовал Urbanichka.
        Домен и хостинг оплачивается из кармана создателя сайта. Если хотите - можете поддержать проект по кнопке ниже.</p>
        <p>
          <button onclick="window.location.href='https://github.com/voltageeee';">Исходный код сайта</button>
          <button onclick="window.location.href='https://qiwi.com/payment/form/99999?extra[%27accountType%27]=nickname&extra[%27account%27]=SPCODE99';">Поддержать сайт</button>
          <button onclick="window.location.href='https://brokencore.club';">Исходник всех читов</button>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm">
            <iframe width="420" height="225" src="https://www.youtube.com/embed/NZWg-0ZUviA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">CRANIUM: Самый популярный чит на данный момент. Лучший чит для игры.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://cdn.discordapp.com/attachments/1079442966088785961/1079443003069972540/Cranium.dll" class="btn btn-primary my-2">Скачать</a>
                  <a href="https://t.me/urbanichka" class="btn btn-secondary my-2">ИСТОЧНИК</a>
                  <a href="https://cdn.discordapp.com/attachments/1079442966088785961/1079444495164252190/urbanichkacfgcranium.chm" class="btn btn-secondary my-2">CFG</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <iframe width="420" height="225" src="https://www.youtube.com/embed/aF-JjlFC2RM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">ONETAP: Один из лучших бесплатных читов. Ренеймнулся на CRANIUM.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://cdn.discordapp.com/attachments/1079442966088785961/1079443017112486001/Onetap.dll" class="btn btn-primary my-2">Скачать</a>
                  <a href=" https://www.virustotal.com/gui/file/2391c974795a311d820bd6121b7738583e934385da86cf62ebd7e9efcf6476c4" class="btn btn-secondary my-2">Virustotal</a>
                  <a href="https://cdn.discordapp.com/attachments/1079442966088785961/1079444315367014491/urbanichkacfgonetapgm.otc" class="btn btn-secondary my-2">CFG</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <iframe width="420" height="225" src="https://www.youtube.com/embed/AEAUjhNQS9g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">MEMORIAM: Бесплатный чит с красивым меню. Статус: Undetected</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://cdn.discordapp.com/attachments/1079442966088785961/1079443027497594921/Memoriam.dll" class="btn btn-primary my-2">Скачать</a>
                  <a href=" https://www.virustotal.com/gui/file/2ad0af03c173315ba84e0f9da1dc20d402a0d871dc557d893fc1eaa4eb367d94" class="btn btn-secondary my-2">Virustotal</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <iframe width="420" height="225" src="https://www.youtube.com/embed/CXsscJhxLfQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">CFF: Бесплатный, проверенный временим чит. Статус: Undetected.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://cdn.discordapp.com/attachments/1079442966088785961/1079443421296590939/CFF.dll" class="btn btn-primary my-2">Скачать</a>
                  <a href=" https://www.virustotal.com/gui/file/81511377549cee2fc3ed6048414a9de275d6ed6861d7ba162b27b2df7a392543" class="btn btn-secondary my-2">Virustotal</a>
                  <a href="https://cdn.discordapp.com/attachments/1079442966088785961/1079443727464013884/urbanichkacfgcff.cfg" class="btn btn-secondary my-2">CFG</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <iframe width="420" height="225" src="https://www.youtube.com/embed/-1qU2UAcZzU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">NEVERPIVO. Бесплатный чит на гмод с менюшкой неверлуза. Статус: Undetected.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://cdn.discordapp.com/attachments/1079442966088785961/1079443561566699520/Neverpivo.dll" class="btn btn-primary my-2">Скачать</a>
                  <a href="https://www.virustotal.com/gui/file/2391c974795a311d820bd6121b7738583e934385da86cf62ebd7e9efcf6476c4" class="btn btn-secondary my-2">Virustotal</a>
                  <a href="https://cdn.discordapp.com/attachments/1079442966088785961/1079443743888920687/urbanichkacfgneverpivo.np" class="btn btn-secondary my-2">CFG</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
