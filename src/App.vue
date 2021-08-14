<template>
  <body>
    <!-- <transition name="fade">
      <Loader v-if="isLoading"></Loader>
    </transition> -->
    <header>
      <div class="logo">
        Fight<span style="color: #9bd0ff">Covid</span
        ><span style="color: #fb6260">.</span>
      </div>
      <div class="menuToggle" @click="toggleMenu()"></div>
      <ul class="navigation">
        <li><a v-scroll-to="'#home'" class="active">Overview</a></li>
        <li><a v-scroll-to="'#symbtoms'">Symbtoms</a></li>
        <li><a v-scroll-to="'#statis'">Statistics</a></li>
        <li><a v-scroll-to="'#prevention'">Prevention</a></li>
        <li><a v-scroll-to="'#game'">Game</a></li>
        <li><a v-scroll-to="'#blog'">Blogs</a></li>
      </ul>
    </header>
    <!--main Section-->
    <section class="mainSec" id="home">
      <div class="content">
        <div class="textBox">
          <h1>
            <span style="color: #fff">Stay</span> Home<br />Stay<span
              style="color: #fff"
            >
              Safe</span
            >
          </h1>
          <p>
            <span class="blue"> STAY HOME </span>,<span class="blue">
              STAY SAFE
            </span>
            and <span class="blue">STAY MOTIVATED!</span> Keeping team members
            motivated amid unprecedented times such as the COVID-19 crisis is
            indeed a challenge.
          </p>
          <div class="btn">
            <Author />
            <Author1 />
          </div>
        </div>
      </div>
      <video id="videoBG" autoplay muted loop>
        <source src="./img/Video/CovidVid2.mp4" type="video/mp4" />
      </video>
    </section>

    <Symbtoms id="symbtoms" />
    <Statistics id="statis" />
    <Prevention id="prevention" />
    <Games id="game" />
    <Postes id="blog" />
    <Footer />
    <Messenger />
    <CallPlugins />
  </body>
</template>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
import Messenger from "./components/uncommon/MessengerPlugins.vue";
import Prevention from "./components/common/Prevention.vue";
import Symbtoms from "./components/common/Symbtoms.vue";
import Footer from "./components/common/Footer.vue";
import Statistics from "./components/common/Statistics.vue";
import Games from "./components/common/Games.vue";
import Postes from "./components/common/Postes.vue";
import Author from "./components/uncommon/Author.vue";
import Author1 from "./components/uncommon/Author1.vue";
import CallPlugins from "./components/uncommon/CallPlugins.vue";
export default {
  components: {
    Symbtoms,
    Footer,
    Statistics,
    Prevention,
    Postes,
    Games,
    Messenger,
    Author,
    Author1,
    CallPlugins,
  },
  data() {
    return {
      isLoading: true,
    };
  },
  mounted() {
    window.addEventListener("scroll", function () {
      const header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    });

    setTimeout(() => {
      this.isLoading = false;
    }, 2500);
  },
  methods: {
    toggleMenu() {
      const menuToggle = document.querySelector(".menuToggle");
      const navigation = document.querySelector(".navigation");
      menuToggle.classList.toggle("active");
      navigation.classList.toggle("active");
    },
  },
};
</script>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
  font-family: "Oswald", sans-serif;
}
header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 40px 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: 0.5s;
  z-index: 15;
}
@media (max-width: 991px) {
  header,
  header.sticky {
    padding: 10px 20px !important;
  }
  header .navigation {
    display: none !important;
  }
  header .navigation.active {
    width: 100% !important;
    height: 100% !important;
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    flex-direction: column !important;
    background: #fff !important;
  }
  header .navigation.active li {
    margin-left: 0rem;
    padding: 10px;
  }
  header .navigation.active li a {
    font-size: 1.6em;
    color: #000;
    font-weight: 300px;
  }
  .menuToggle {
    position: relative;
    width: 40px;
    height: 40px;
    background: url("./img/menu.png");
    background-size: 30px;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
  }
  .menuToggle.active {
    background: url("./img/close.png");
    background-size: 25px;
    background-repeat: no-repeat;
    background-position: center;
    z-index: 9;
    filter: invert(1);
  }
  header.sticky .menuToggle {
    filter: invert(1);
  }
  header .logo {
    z-index: 99;
  }
}
header .logo {
  font-size: 2.5rem;
  text-transform: uppercase;
  color: #000;
  z-index: 999;
}
header .navigation {
  justify-content: center;
  align-items: center;
  position: relative;
  display: flex;
}
header .navigation li {
  margin-left: 1.5rem;
  list-style: none;
}
header .navigation li a {
  text-decoration: none;
  font-size: 1.2rem;
  text-transform: uppercase;
  color: rgb(255, 255, 255);
  font-weight: 400;
  transition: 0.1s ease-in-out;
  cursor: pointer;
  padding: 10px;
  z-index: 99;
  position: relative;
}
header .navigation li a:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 3px;
  bottom: 0;
  left: 0;
  background-color: #428bcb;
  visibility: hidden;
  transform: scaleX(0);
  transition: all 0.3s ease-in-out;
}
header .navigation li a:hover:before,
header .navigation li a:active {
  visibility: visible;
  transform: scaleX(1);
}
/* header .navigation li a:active,
header .navigation li a:hover {
  color: #fff;
  background: #fb6260;
  z-index: 99;
  border-radius: 40px;
} */
header.sticky {
  background: #fff;
  padding: 10px 100px;
  box-shadow: 0 5px 20px rgb(0, 0, 0, 0.05);
}
header.sticky .navigation li a {
  color: #000;
}
#videoBG {
  position: fixed;
  z-index: -1;
}
@media (min-aspect-ratio: 16/9) {
  #videoBG {
    width: 100%;
    height: auto;
  }
}
@media (max-aspect-ratio: 16/9) {
  #videoBG {
    width: auto;
    height: 100%;
  }
}
@media (max-width: 767px) {
  #videoBG {
    display: none;
  }
  .mainSec {
    background: url("https://www.linkpicture.com/q/italy_3.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
}
.mainSec {
  position: relative;
  width: 100%;
  min-height: 100vh;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.content {
  position: relative;
  width: 100%;
  display: flex;
  padding: 100px;
}
@media (max-width: 600px) {
  .content {
    justify-content: center;
  }
  .content .textBox h1 {
    font-size: 4rem !important;
  }
  .content .textBox .btn button {
    padding: 10px 15px !important;
    margin-right: 1rem !important;
  }
}
@media (max-width: 300px) {
  .content .textBox h1 {
    font-size: 2.5rem !important;
  }
  .content .textBox .btn button {
    padding: 5px 15px !important;
    margin-right: 1rem !important;
    font-size: 1rem !important;
    margin: 10px;
  }
  .content .textBox .btn {
    flex-direction: column;
  }
}
.content .textBox {
  position: relative;
  max-width: 600px;
  /* top:200px; */
  z-index: 3;
}
.content .textBox h1 {
  color: #9bd0ff;
  font-size: 6em;
  line-height: 1.4em;
  text-transform: uppercase;
}
.content .textBox p {
  color: rgb(255, 255, 255);
  font-size: 1.2rem;
}
.content .textBox .btn {
  margin-top: 2rem;
  display: flex;
}
.content .textBox .btn button {
  background: #428bcb;
  color: #fff;
  border-radius: 40px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 20px 20px;
  margin: 10px 10px 10px 0px;
  outline: none;
  border: 1px solid #428bcb;
  box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
  cursor: pointer;
}
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
.blue {
  color: #9bd0ff;
  font-weight: 500;
}
</style>
