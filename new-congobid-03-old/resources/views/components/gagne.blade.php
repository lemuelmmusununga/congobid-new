<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
  font-family: "Roboto";
  margin: 0;
  padding: 0;
}

@keyframes confetti-slow {
    0% {
      transform: translate3d(0, 0, 0) rotateX(0) rotateY(0);
    }
    100% {
      transform: translate3d(25px, 105vh, 0) rotateX(360deg) rotateY(180deg);
    }
  }
  @keyframes confetti-medium {
    0% {
      transform: translate3d(0, 0, 0) rotateX(0) rotateY(0);
    }
    100% {
      transform: translate3d(100px, 105vh, 0) rotateX(100deg) rotateY(360deg);
    }
  }
  @keyframes confetti-fast {
    0% {
      transform: translate3d(0, 0, 0) rotateX(0) rotateY(0);
    }
    100% {
      transform: translate3d(-50px, 105vh, 0) rotateX(10deg) rotateY(250deg);
    }
  }
  .block-overplay{
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      background: rgba(0, 0, 0, .5);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 11;
  }
  .container{
      width: 80%;
      height: 550px;
      background: #fff;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      top: 0px;
      position: absolute;
      margin-right: auto;
      margin-left: auto;
      margin-top: 40px;
      z-index: 1111;
  }

  .confetti-container {
    perspective: 700px;
    position: absolute;
    overflow: hidden;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }

  .confetti {
    position: absolute;
    z-index: 1;
    top: -10px;
    border-radius: 0%;
  }
  .confetti--animation-slow {
    animation: confetti-slow 2.25s linear 1 forwards;
  }
  .confetti--animation-medium {
    animation: confetti-medium 1.75s linear 1 forwards;
  }
  .confetti--animation-fast {
    animation: confetti-fast 1.25s linear 1 forwards;
  }

  /* Checkmark */
  .checkmark-circle {
    width: 100px;
    height: 100px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    vertical-align: top;
    margin-left: auto;
    margin-right: auto;
  }

  .checkmark-circle .background {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    background: var(--primaryColor);

  }

  .checkmark-circle .checkmark {
    border-radius: 5px;
  }

  .checkmark-circle .checkmark.draw:after {
    -webkit-animation-delay: 100ms;
    -moz-animation-delay: 100ms;
    animation-delay: 100ms;
    -webkit-animation-duration: 3s;
    -moz-animation-duration: 3s;
    animation-duration: 3s;
    -webkit-animation-timing-function: ease;
    -moz-animation-timing-function: ease;
    animation-timing-function: ease;
    -webkit-animation-name: checkmark;
    -moz-animation-name: checkmark;
    animation-name: checkmark;
    -webkit-transform: scaleX(-1) rotate(135deg);
    -moz-transform: scaleX(-1) rotate(135deg);
    -ms-transform: scaleX(-1) rotate(135deg);
    -o-transform: scaleX(-1) rotate(135deg);
    transform: scaleX(-1) rotate(135deg);
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  .checkmark-circle .checkmark:after {
    opacity: 1;
    height: 75px;
    width: 37.5px;
    -webkit-transform-origin: left top;
    -moz-transform-origin: left top;
    -ms-transform-origin: left top;
    -o-transform-origin: left top;
    transform-origin: left top;
    border-right: 15px solid white;
    border-top: 15px solid white;
    border-radius: 2.5px !important;
    content: "";
    left: 25px;
    top: 75px;
    position: absolute;
  }

  @-webkit-keyframes checkmark {
    0% {
      height: 0;
      width: 0;
      opacity: 1;
    }
    20% {
      height: 0;
      width: 37.5px;
      opacity: 1;
    }
    40% {
      height: 75px;
      width: 37.5px;
      opacity: 1;
    }
    100% {
      height: 75px;
      width: 37.5px;
      opacity: 1;
    }
  }
  @-moz-keyframes checkmark {
    0% {
      height: 0;
      width: 0;
      opacity: 1;
    }
    20% {
      height: 0;
      width: 37.5px;
      opacity: 1;
    }
    40% {
      height: 75px;
      width: 37.5px;
      opacity: 1;
    }
    100% {
      height: 75px;
      width: 37.5px;
      opacity: 1;
    }
  }
  @keyframes checkmark {
    0% {
      height: 0;
      width: 0;
      opacity: 1;
    }
    20% {
      height: 0;
      width: 37.5px;
      opacity: 1;
    }
    40% {
      height: 75px;
      width: 37.5px;
      opacity: 1;
    }
    100% {
      height: 75px;
      width: 37.5px;
      opacity: 1;
    }
  }
  .submit-btn {
    height: 45px;
    width: 200px;
    font-size: 15px;
    background-color:  var(--primaryColor);
    border: 1px solid var(--primaryColor);
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: all 2s ease-out;
    transition: all 0.2s ease-out;
  }


.submit-btn:hover {
  background-color: #2ca893;
  transition: all 0.2s ease-out;
}
</style>
<body>
    <div class="block-overplay">
        <div class="js-container container" style="top:0px !important;">
            <div style="text-align:center; position: relative;z-index: 200;display: flex;align-items:center;justify-content: center;flex-direction: column;">
                <h1 style="    font-size: calc(2.375rem + 1.5vw);
                font-weight: bold;">Felicitation!</h1>
                @if (Auth::user()->id == $this->gagnant?->user?->id )
                    <p>{{$this->gagnant?->user->username }} vous etes le gagnant du <strong class="fs-4 fw-bold " style="color: #fd7e14"> {{ $this->gagnant?->enchere->article->titre }}  </strong> </p>
                    <div class="mb-4">
                        <span class="fs-4 fw-bold text-muted">
                            Rendez - vous dans l'un de nos bureaux le plus proche de chez vous , muni de votre carte d'identité et du code du gagnant qui est le <br>
                            <span style="color: #fd7e14">{{ $this->gagnant?->enchere->article->code_produit }}</span>
                        </span>
                    </div>
                @else
                    <p>{{$this->gagnant?->user->username }} est le gagnant de cette enchere</p>
                @endif

                <a href="/" class="submit-btn py-2 rounded-3" type="submit" >Retour a la page d'accueil </a>
            </div>

        </div>
    </div>



  <script>
    const Confettiful = function(el) {
  this.el = el;
  this.containerEl = null;

  this.confettiFrequency = 3;
  this.confettiColors = ['#EF2964', '#00C09D', '#2D87B0', '#48485E','#EFFF1D'];
  this.confettiAnimations = ['slow', 'medium', 'fast'];

  this._setupElements();
  this._renderConfetti();
};

Confettiful.prototype._setupElements = function() {
  const containerEl = document.createElement('div');
  const elPosition = this.el.style.position;

  if (elPosition !== 'relative' || elPosition !== 'absolute') {
    this.el.style.position = 'relative';
  }

  containerEl.classList.add('confetti-container');

  this.el.appendChild(containerEl);

  this.containerEl = containerEl;
};

Confettiful.prototype._renderConfetti = function() {
  this.confettiInterval = setInterval(() => {
    const confettiEl = document.createElement('div');
    const confettiSize = (Math.floor(Math.random() * 3) + 7) + 'px';
    const confettiBackground = this.confettiColors[Math.floor(Math.random() * this.confettiColors.length)];
    const confettiLeft = (Math.floor(Math.random() * this.el.offsetWidth)) + 'px';
    const confettiAnimation = this.confettiAnimations[Math.floor(Math.random() * this.confettiAnimations.length)];

    confettiEl.classList.add('confetti', 'confetti--animation-' + confettiAnimation);
    confettiEl.style.left = confettiLeft;
    confettiEl.style.width = confettiSize;
    confettiEl.style.height = confettiSize;
    confettiEl.style.backgroundColor = confettiBackground;

    confettiEl.removeTimeout = setTimeout(function() {
      confettiEl.parentNode.removeChild(confettiEl);
    }, 3000);

    this.containerEl.appendChild(confettiEl);
  }, 25);
};

    window.confettiful = new Confettiful(document.querySelector('.js-container'));



  </script>
</body>
</html>
