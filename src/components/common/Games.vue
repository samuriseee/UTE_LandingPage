<template>
  <div class="container">
    <div class="title">
      <h1>Mini <span style="color: #428bcb">Game</span></h1>
      <p>Let see if you can defeat it on your first try</p>
    </div>
    <div class="container-game">
      <div class="directions">
        <h3>
          Click on the virus within one second to earn point <br />
          15 points to win <br />( The
          <span style="color: #0655b2">BIGGER</span> your width, The
          <span style="color: #f10c44">HARDER</span> the game =)) )
        </h3>
      </div>
      <button type="button" class="start">Start</button>
      <div class="message"></div>
      <div class="results123"></div>
      <div class="gameArea"></div>
    </div>
  </div>
</template>
<script>
export default {
  mounted() {
    const button = document.querySelector(".start");
    const message = document.querySelector(".message");
    const gameArea = document.querySelector(".gameArea");
    const results = document.querySelector(".results123");
    const directions = document.querySelector(".directions");
    // eslint-disable-next-line
    let inPlay = false;
    let playArea = {};
    let count = 0;

    function showMessage(notification) {
      message.innerHTML = `<h3>${notification}</h3>`;
    }

    function showBox() {
      playArea.timer = setTimeout(myBox, random(4000));
    }

    function myBox() {
      //create a shape element
      let element = document.createElement("div");
      element.classList.add("box");
      element.style.top = random(setTopMargin()) + "px";
      element.style.left = random(setLeftMargin()) + "px";

      element.start = new Date().getTime();
      element.addEventListener("click", hit);
      gameArea.appendChild(element);
    }

    // Pick a random hex color

    //Adjust top margin so circle is not on the edge
    function setTopMargin() {
      let maxHeight = gameArea.clientHeight;
      if (maxHeight <= 100) {
        maxHeight = maxHeight + 200;
      } else {
        maxHeight = maxHeight - 200;
      }
      return maxHeight;
    }

    //Adjust left margin so circle is not on the edge
    function setLeftMargin() {
      let maxWidth = gameArea.clientWidth;
      if (maxWidth <= 100) {
        maxWidth = maxWidth + 200;
      } else {
        maxWidth = maxWidth - 200;
      }

      return maxWidth;
    }

    function hit(e) {
      let start = e.target.start;
      let end = new Date().getTime();
      let duration = (end - start) / 1000;
      let maxDuration = 1;

      clearTimeout(playArea.timer);
      showMessage("It's take you " + duration + " to kill virus");
      if (duration > maxDuration) {
        gameArea.children[0].remove();
        results.innerHTML = `Tooo Slow! <span id="loser">You lost!</span> Your score is ${count}.<br> Click start to try again!`;
        resetGame();
      } else {
        gameArea.children[0].remove();
        playArea.timer = setTimeout(myBox, random(4000));
        count++;
        if (count === 15) {
          results.innerHTML = `Your sroce is ${renderCount(
            count
          )} Points! <span id="winner">YOU DID IT!!!</span> <br> Click start to play again.`;
          resetGame();
        } else {
          results.innerHTML = `Point: ${renderCount(count)} / 15`;
        }
      }
    }

    function renderCount(count) {
      return count;
    }

    function random(number) {
      let tempVal = Math.floor(Math.random() * number);
      return tempVal;
    }

    function resetGame() {
      clearTimeout(playArea.timer);
      inPlay = false;
      button.style.display = "block";
    }

    showMessage("Click START to begin!");

    button.addEventListener("click", function () {
      //start game play
      inPlay = true;
      //hide the button
      button.style.display = "none";
      directions.style.display = "none";
      results.innerHTML = "";
      count = 0;
      //notify user of start
      showMessage("STARTING...");

      showBox();
    });
  },
};
</script>

<style>
.container .title {
  margin: 0rem 0rem 2rem;
  text-align: center;
  color: #fff;
}
.container .title h1 {
  font-size: 2rem;
  text-transform: uppercase;
  padding: 10px;
  margin: 20px;
  display: inline-block;
  position: relative;
  padding-left: 16px;
}
.container .title h1:before {
  background-color: #428bcb;
  content: "";
  display: block;
  margin-top: -1px;
  position: absolute;
  top: 50%;
  left: 0;
  width: 10px;
  height: 5px;
}
.container .title p {
  width: 70%;
  font-size: 1rem;
  margin: 0 auto;
}
.box {
  position: relative;
  border-radius: 50%;
  background-image: url("../../img/virus1.png");
  background-repeat: no-repeat;
  background-size: contain;
  width: 80px;
  height: 80px;
  animation-name: box_a;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  margin-bottom: 20rem;
}

.box:hover {
  background-color: rgba(255, 0, 0, 0.472);
}

@keyframes box_a {
  0% {
    transform: scaleZ(1.2);
    -webkit-transform: scale(1.2);
  }
  25% {
    transform: scaleZ(1);
    -webkit-transform: scale(1);
  }
  50% {
    transform: scaleZ(1.2);
    -webkit-transform: scale(1.2);
  }
  75% {
    transform: scaleZ(1);
    -webkit-transform: scale(1);
  }
  100% {
    transform: scaleZ(1.2);
    -webkit-transform: scale(1.2);
  }
}
.container {
  background-image: linear-gradient(to right, #3e4049, #1d1e25);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin: 0 auto;
  padding: 10px 0px 4rem 0px;
}

.container-game {
  background: #f9f9f9;
  margin: 0 auto;
  text-align: center;
  font-size: 1em;
  font-family: "Oswald Regular", sans-serif;
  line-height: 1.5;
  width: 70%;
  height: 500px;
  border-radius: 20px;
  padding: 20px;
  cursor: url("../../img/kimtiem.png"), pointer;
}

.start {
  font-size: 1.5em;
  margin: 3rem auto;
  background: #f9f9f9;
  border: none;
  text-transform: uppercase;
  box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;
  letter-spacing: 1px;
  color: #000;
  padding: 10px 35px;
  border-radius: 40px;
  cursor: pointer;
}
#winner {
  text-transform: uppercase;
  color: #0655b2;
}

#loser {
  text-transform: uppercase;
  color: #f10c44;
}
h3 {
  font-size: 2em;
}
@media (max-width: 1100px) {
  h3 {
    font-size: 1.6em;
  }
  .results123 {
    font-size: 1em;
    font-weight: bold;
  }
  .message {
    font-size: 1rem;
  }
}
@media (max-width: 800px) {
  h3 {
    font-size: 1.3em;
  }
  .results123 {
    font-size: 0.8em;
    font-weight: bold;
  }
  .message {
    font-size: 1rem;
  }
}
@media (max-width: 786px) {
  .box {
    width: 70px;
    height: 70px;
  }
}
@media (max-width: 640px) {
  .box {
    width: 50px;
    height: 50px;
  }
  .container-game {
    width: 98%;
    height: 80vh;
  }
}
@media (max-width: 400px) {
  .container-game {
    width: 98%;
    height: 80vh;
  }
}
.results123 {
  font-size: 1.3em;
  font-weight: bold;
}
.message {
  font-size: 1.2rem;
}
</style>
