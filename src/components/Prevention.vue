<template>
  <div class="container">
    <div class="title">
      <h1>Prevent<span style="color: #f10c44">ion</span></h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
        voluptas atque pariatur labore, accusantium hic neque rerum ipsum illum.
      </p>
    </div>
    <hooper style="hei">
      <slide>
        <div class="slideBox">
          <h1>Heal Declaration</h1>
        </div>
      </slide>
      <slide>
        <div class="slideBox">
          <h1>Social Distance</h1>
        </div>
      </slide>
      <slide>
        <div class="slideBox">
          <h1>Wearing Mask</h1>
        </div>
      </slide>
      <slide>
        <div class="slideBox">
          <h1>Wash Hand</h1>
        </div>
      </slide>
      <slide>
        <div class="slideBox">
          <h1>No Gather Around</h1>
        </div>
      </slide>
      <hooper-pagination slot="hooper-addons"></hooper-pagination>
    </hooper>
  </div>
</template>

<script>
import { Hooper, Slide, Pagination as HooperPagination } from "hooper";
import "hooper/dist/hooper.css";
export default {
  components: {
    Hooper,
    Slide,
    HooperPagination,
  },
};
</script>

<style scoped>
.container {
  background: #f9f9f9;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin: 0 auto;
  padding: 10px 0px 5rem 0px;
}
.container .title {
  margin: 3rem 0rem 2rem;
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
  background: url("https://www.linkpicture.com/q/italy_1.jpg")
    rgba(2, 2, 2, 0.3);
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
</style>
