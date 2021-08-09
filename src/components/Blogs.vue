<template>
  <div class="container">
    <div class="title">
      <h1>
        Superhero does while <span style="color: #f10c44">QUARANTINE</span>
      </h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
        voluptas atque pariatur labore, accusantium hic neque rerum ipsum illum.
      </p>
    </div>
    <FurtherReading />
    <hooper :settings="hooperSettings">
      <slide>
        <div class="images">
          <img src="https://www.linkpicture.com/q/blog6.jpg" alt="" />
        </div>
      </slide>
      <slide>
        <div class="images">
          <img src="https://www.linkpicture.com/q/blog5.jpg" alt="" />
        </div>
      </slide>
      <slide>
        <div class="images">
          <img src="https://www.linkpicture.com/q/blog7.jpg" alt="" />
        </div>
      </slide>
      <slide>
        <div class="images">
          <img src="https://www.linkpicture.com/q/blogs.jpg" alt="" />
        </div>
      </slide>
      <slide>
        <div class="images">
          <img src="https://www.linkpicture.com/q/blogs0.jpg" alt="" />
        </div>
      </slide>
      <slide>
        <div class="images">
          <img src="https://www.linkpicture.com/q/blogs1.jpg" alt="" />
        </div>
      </slide>
      <slide>
        <div class="images">
          <img src="https://www.linkpicture.com/q/blogs2.jpg" alt="" />
        </div>
      </slide>
      <slide>
        <div class="images">
          <img src="https://www.linkpicture.com/q/blog4.jpg" alt="" />
        </div>
      </slide>
      <slide>
        <div class="images">
          <img src="https://www.linkpicture.com/q/blog3.jpg" alt="" />
        </div>
      </slide>
    </hooper>
  </div>
</template>

<script>
import FurtherReading from "./FurtherReading.vue";
import { Hooper, Slide } from "hooper";
import "hooper/dist/hooper.css";
export default {
  components: {
    Hooper,
    Slide,
    FurtherReading,
  },
  data() {
    return {
      hooperSettings: {
        infiniteScroll: true,
        centerMode: true,
        autoPlay: true,
        playSpeed: 3500,

        breakpoints: {
          2400: {
            itemsToShow: 5,
          },
          1800: {
            itemsToShow: 3,
          },
          1200: {
            itemsToShow: 2.5,
          },
          1000: {
            itemsToShow: 2,
          },
          780: {
            itemsToShow: 1.5,
          },
          500: {
            itemsToShow: 1,
          },
          400: {
            itemsToShow: 1,
          },
          300: {
            itemsToShow: 1,
          },
        },
      },
    };
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
  padding: 10px 0px 0rem 0px;
}
.container .title {
  margin: 0rem 0rem 3rem;
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
.images {
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 20px;
}
.images img {
  width: 95%;
  object-fit: cover;
}
.hooper {
  height: 55vh;
}
@media (max-width: 1570px) {
  .hooper {
    height: 52vh;
  }
}
@media (max-width: 1475px) {
  .hooper {
    height: 49vh;
  }
}
@media (max-width: 1420px) {
  .hooper {
    height: 47vh;
  }
}
@media (max-width: 1350px) {
  .hooper {
    height: 48vh;
  }
}
@media (max-width: 1180px) {
  .hooper {
    height: 47vh;
  }
}
@media (max-width: 1000px) {
  .hooper {
    height: 54vh;
  }
}
@media (max-width: 950px) {
  .hooper {
    height: 55vh;
  }
}
@media (max-width: 920px) {
  .hooper {
    height: 50vh;
  }
}
@media (max-width: 850px) {
  .hooper {
    height: 46vh;
  }
}
@media (max-width: 783px) {
  .hooper {
    height: 42vh;
  }
}
@media (max-width: 780px) {
  .hooper {
    height: 62vh;
  }
}
@media (max-width: 710px) {
  .hooper {
    height: 58vh;
  }
}
@media (max-width: 657px) {
  .hooper {
    height: 52vh;
  }
}
@media (max-width: 608px) {
  .hooper {
    height: 48vh;
  }
}
@media (max-width: 547px) {
  .hooper {
    height: 44vh;
  }
}
@media (max-width: 498px) {
  .hooper {
    height: 40vh;
  }
}
@media (max-width: 430px) {
  .hooper {
    height: 33vh;
  }
}
@media (max-width: 365px) {
  .hooper {
    height: 28vh;
  }
}
</style>
