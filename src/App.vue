<template>
  <body>
    <header>
      <div class="logo"><img src="./img/logo.png" alt="" /></div>
      <ul>
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
    <Footer />
  </body>
</template>

<script>
import Prevention from "./components/Prevention.vue";
import Symbtoms from "./components/Symbtoms.vue";
import Footer from "./components/Footer.vue";
import Statistics from "./components/Statistics.vue";

export default {
  components: {
    Symbtoms,
    Footer,
    Statistics,
    Prevention,
  },
};
</script>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Oswald Regular", sans-serif;
}
.circle {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #ffb6af;
  clip-path: circle(26.4% at 10% 23%);
  z-index: 1;
}
header {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 30px 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 15;
}
header .logo img {
  width: 60px;
}
header ul {
  justify-content: center;
  align-items: center;
  position: relative;
  display: flex;
}
header ul li {
  margin-left: 1.5rem;
  list-style: none;
}
header ul li a {
  text-decoration: none;
  font-size: 1.2rem;
  text-transform: uppercase;
  color: #fff;
  font-weight: 400;
  transition: 0.1s ease-in-out;
  cursor: pointer;
  padding: 10px;
  z-index: 99;
}
header ul li a:active,
header ul li a:hover {
  color: #fff;
  background: #f10c44;
  z-index: 99;
  border-radius: 40px;
}
.mainSec {
  position: relative;
  width: 100%;
  min-height: 100vh;
  padding: 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: url("https://www.linkpicture.com/q/italy_1.jpg");
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
.content .textBox {
  position: relative;
  max-width: 600px;
  /* top:200px; */
  z-index: 3;
}
.content .textBox h1 {
  color: rgb(255, 255, 255);
  font-size: 6em;
  line-height: 1.4em;
  text-transform: uppercase;
}
.content .textBox p {
  color: rgb(255, 245, 245);
  font-size: 1.2rem;
}
.content .textBox .btn {
  margin-top: 3rem;
}
.content .textBox .btn button {
  display: inline-block;
  margin-right: 2rem;
  background: #008dc9;
  color: #fff;
  border-radius: 40px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 15px 35px;
  outline: none;
  border: 1px solid #008dc9;
  box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
  cursor: pointer;
}
</style>
