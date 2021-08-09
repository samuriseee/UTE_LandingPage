<template>
  <body>
    <header>
      <div class="logo">
        Fight<span style="color: #428bcb">Covid</span
        ><span style="color: #fb6260">.</span>
      </div>
      <div class="menuToggle" @click="toggleMenu()"></div>
      <ul class="navigation">
        <li><a href="">Home</a></li>
        <li><a href="">Profile</a></li>
        <li><a href="">Resume</a></li>
        <li><a href="">Skills</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </header>
    <!--main Section-->
    <section class="mainSec">
      <div class="content">
        <div class="textBox">
          <h1>Quarantine <br />Devotees</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab ea
            esse natus deleniti. Sunt, nisi perferendis. Eaque, aut labore
            aliquam laboriosam vero fugiat dolores cumque esse sequi vel quos.
          </p>
          <div class="btn">
            <button style="color: #008dc9; background: #fff">
              Lorem ipsum
            </button>
            <button>Lorem ipsum</button>
          </div>
        </div>
      </div>
    </section>

    <Symbtoms />
    <Statistics />
    <Prevention />
    <Games />
    <Blogs />
    <Footer />
    <Messenger />
  </body>
</template>

<script>
import Messenger from "./components/MessengerPlugins.vue";
import Prevention from "./components/Prevention.vue";
import Symbtoms from "./components/Symbtoms.vue";
import Footer from "./components/Footer.vue";
import Statistics from "./components/Statistics.vue";
import Games from "./components/Games.vue";
import Blogs from "./components/Blogs.vue";
export default {
  components: {
    Symbtoms,
    Footer,
    Statistics,
    Prevention,
    Games,
    Blogs,
    Messenger,
  },
  mounted() {
    window.addEventListener("scroll", function () {
      const header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    });
    // eslint-disable-next-line
    // function toggleMenu() {
    //   const menuToggle = document.querySelector('.menuToggle');
    //   menuToggle.classList.toggle('active');
    // }
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
  font-size: 2rem;
  text-transform: uppercase;
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
  color: rgb(7, 7, 7);
  font-weight: 400;
  transition: 0.1s ease-in-out;
  cursor: pointer;
  padding: 10px;
  z-index: 99;
}
header .navigation li a:active,
header .navigation li a:hover {
  color: #fff;
  background: #fb6260;
  z-index: 99;
  border-radius: 40px;
}
header.sticky {
  background: #fff;
  padding: 10px 100px;
  box-shadow: 0 5px 20px rgb(0, 0, 0, 0.05);
}
header.sticky .navigation li a {
  color: #000;
}
header.sticky .navigation li a:hover {
  color: #fff;
}
.mainSec {
  position: relative;
  width: 100%;
  min-height: 100vh;
  padding: 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: url("https://www.linkpicture.com/q/Pngtreecartoon_hand_drawn_simple_virus_1274587.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.content {
  position: relative;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
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
.content .textBox {
  position: relative;
  max-width: 600px;
  /* top:200px; */
  z-index: 3;
}
.content .textBox h1 {
  color: #428bcb;
  font-size: 6em;
  line-height: 1.4em;
  text-transform: uppercase;
}
.content .textBox p {
  color: rgb(0, 0, 0);
  font-size: 1.2rem;
}
.content .textBox .btn {
  margin-top: 3rem;
  display: flex;
}
.content .textBox .btn button {
  display: inline-block;
  margin-right: 2rem;
  background: #428bcb;
  color: #fff;
  border-radius: 40px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 15px 35px;
  outline: none;
  border: 1px solid #428bcb;
  box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
  cursor: pointer;
}
</style>
