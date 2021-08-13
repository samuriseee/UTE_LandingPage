<template>
  <div class="container">
    <div class="title">
      <h1><span style="color: #428bcb">Avoid</span> Getting Infected</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
        voluptas atque pariatur labore, accusantium hic neque rerum ipsum illum.
      </p>
    </div>
    <hooper :autoPlay="true" :playSpeed="1300" :transition="400">
      <slide>
        <div
          class="slideBox"
          style="
            background: url(https://www.linkpicture.com/q/56_14.jpg)
              rgba(2, 2, 2, 0.3);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
          "
        >
          <h1>Heal Declaration</h1>
        </div>
      </slide>
      <slide>
        <div
          class="slideBox"
          style="
            background: url(https://www.linkpicture.com/q/How-to-work-effectively-and-practice-social-distancing-during-coronavirus_1.jpg)
              rgba(2, 2, 2, 0.3);
            background-size: cover;
            background-position: center;
          "
        >
          <h1>Social Distance</h1>
        </div>
      </slide>
      <slide>
        <div
          class="slideBox"
          style="
            background: url(https://www.linkpicture.com/q/italy_1.jpg)
              rgba(2, 2, 2, 0.3);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
          "
        >
          <h1>Wearing Mask</h1>
        </div>
      </slide>
      <slide>
        <div
          class="slideBox"
          style="
            background: url(https://www.linkpicture.com/q/washhand_1.jpg)
              rgba(2, 2, 2, 0.3);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
          "
        >
          <h1>Wash Hand</h1>
        </div>
      </slide>
      <slide>
        <div
          class="slideBox"
          style="
            background: url(https://www.linkpicture.com/q/shutterstock_1679261281-3_1.jpg)
              rgba(2, 2, 2, 0.3);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
          "
        >
          <h1>No Gather Around</h1>
        </div>
      </slide>
      <hooper-pagination slot="hooper-addons"></hooper-pagination>
    </hooper>
    <Avoid />
  </div>
</template>

<script>
import Avoid from "./Avoid.vue";
import { Hooper, Slide, Pagination as HooperPagination } from "hooper";
import "hooper/dist/hooper.css";
export default {
  components: {
    Hooper,
    Slide,
    HooperPagination,
    Avoid,
  },
};
</script>

<style scoped>
.container {
  background: #f4f5f7;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin: 0 auto;
  padding: 10px 0px 0rem 0px;
}
.container .title {
  margin: 0rem 0rem 2rem;
  text-align: center;
  color: #000;
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
img {
  width: 100%;
  object-fit: cover;
  opacity: 0.6;
}
.hooper {
  height: 50vh;
}
.slideBox {
  width: 100%;
  height: 50vh;
  background-position: center;
  background-repeat: no-repeat;
  background-blend-mode: multiply;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}
.slideBox h1 {
  font-size: 5rem;
  color: #fff;
}
@media (max-width: 768px) {
  .slideBox h1 {
    font-size: 4rem;
    text-align: center;
  }
}
@media (max-width: 480px) {
  .slideBox h1 {
    font-size: 3rem;
    text-align: center;
  }
}
</style>
