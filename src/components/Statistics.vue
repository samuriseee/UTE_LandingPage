<template>
  <div class="container">
    <div class="title">
      <h1>Recent <span style="color: #f10c44">Statistics</span></h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
        voluptas atque pariatur labore, accusantium hic neque rerum ipsum illum.
      </p>
    </div>
    <Sparkline />
    <section>
      <div class="static" style="border-bottom: 4px solid #b1995d">
        <img src="https://www.linkpicture.com/q/i1_1.png" alt="" />
        <div id="counter">
          <h1 class="counter-value" data-count="1650345" style="color: #b1995d">
            0
          </h1>
        </div>
        <h3>Total cases</h3>
      </div>
      <div class="static" style="border-bottom: 4px solid #6d2c30">
        <img src="https://www.linkpicture.com/q/i2.png" alt="" />
        <div id="counter">
          <h1 class="counter-value" data-count="103277" style="color: #6d2c30">
            0
          </h1>
        </div>
        <h3>Total deaths</h3>
      </div>
      <div class="static" style="border-bottom: 4px solid #0655b2">
        <img src="https://www.linkpicture.com/q/i3.png" alt="" />
        <div id="counter">
          <h1 class="counter-value" data-count="388555" style="color: #0655b2">
            0
          </h1>
        </div>
        <h3>Total recovered</h3>
      </div>
      <div class="static">
        <img src="https://www.linkpicture.com/q/i4.png" alt="" />
        <div id="counter">
          <h1 class="counter-value" data-count="1869" style="color: #f10c44">
            0
          </h1>
        </div>
        <h3>Critical Cases</h3>
      </div>
    </section>
  </div>
</template>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
import Sparkline from "./Sparkline.vue";
export default {
  components: {
    Sparkline,
  },
  data() {
    return {};
  },
  mounted() {
    var a = 0;
    $(window).scroll(function () {
      var oTop = $("#counter").offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $(".counter-value").each(function () {
          var $this = $(this),
            countTo = $this.attr("data-count");
          $({
            countNum: $this.text(),
          }).animate(
            {
              countNum: countTo,
            },

            {
              duration: 5000,
              easing: "swing",
              step: function () {
                $this.text(Math.floor(this.countNum));
              },
              complete: function () {
                $this.text(this.countNum);
                //alert('finished');
              },
            }
          );
        });
        a = 1;
      }
    });
  },
};
</script>

<style scoped>
.container {
  background-image: linear-gradient(to right, #3e4049, #1d1e25);
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin: 0 auto;
  padding: 0px 0px 2rem 0px;
}
.container .title {
  margin: 3rem 0rem 2rem;
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
  background-color: #f10c44;
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
.container section {
  display: grid;
  grid-template-columns: 280px 280px 280px 280px;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
}
@media (max-width: 991px) {
  .container section {
    grid-template-columns: 280px 280px;
  }
}
@media (max-width: 500px) {
  .container section {
    grid-template-columns: 280px;
  }
}
.container section .static {
  width: 250px;
  height: 220px;
  padding: 15px;
  margin: 17px;
  border: 1px solid black;
  border-bottom: 4px solid #f10c44;
  background: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em,
    rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
  transition: 0.2s cubic-bezier(0.55, 0.085, 0.68, 0.53);
  cursor: pointer;
  border-radius: 5px;
}
.container section .static:hover {
  transform: translate(0, -10px);
}
.container section .static img {
  object-fit: cover;
  padding: 5px;
}
.container section .static h1 {
  font-size: 3rem;
  font-weight: 500;
}
</style>
