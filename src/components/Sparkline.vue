<template>
  <div class="container">
    <hooper :centerMode="true" :vertical="true">
      <slide>
        <v-card
          class="mx-auto text-center justify-center align-center"
          light
          max-width="1090"
        >
          <h1>2020 - Cases by month</h1>
          <v-card-text>
            <v-sparkline
              :labels="labels"
              :value="value"
              :gradient="gradient"
              :smooth="radius || false"
              :padding="padding"
              :line-width="width"
              :stroke-linecap="lineCap"
              :gradient-direction="gradientDirection"
              :type="type"
              :auto-line-width="autoLineWidth"
              auto-draw
            >
            </v-sparkline>
          </v-card-text>
        </v-card>
      </slide>

      <slide>
        <v-card
          class="mx-auto text-center justify-center align-center"
          color="green"
          light
          max-width="1090"
        >
          <h1>2021 - Cases by month (8/2021)</h1>
          <v-card-text>
            <v-sparkline
              :labels="labels1"
              :value="value1"
              :gradient="gradients[3]"
              :smooth="radius || false"
              :padding="padding"
              :line-width="width"
              :stroke-linecap="lineCap"
              :gradient-direction="gradientDirection"
              :type="type"
              :auto-line-width="autoLineWidth"
              auto-draw
            >
            </v-sparkline>
          </v-card-text>
        </v-card>
      </slide>
    </hooper>
  </div>
</template>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
import { Hooper, Slide } from "hooper";
import "hooper/dist/hooper.css";
const gradients = [
  ["#428BCB"],
  ["#42b3f4"],
  ["red", "orange", "yellow"],
  ["purple", "violet"],
  ["#00c6ff", "#F0F", "#FF0"],
  ["#f72047", "#ffd200", "#1feaea"],
];

export default {
  components: {
    Hooper,
    Slide,
  },
  data: () => ({
    width: 2,
    radius: 10,
    padding: 10,
    lineCap: "round",
    gradient: gradients[0],
    gradientDirection: "top",
    gradients,
    type: "trend",
    autoLineWidth: true,
    value: [0, 2, 5, 9, 5, 10, 3, 8, 15, 13, 10, 5],
    labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
    value1: [10, 12, 35, 29, 15, 14, 30, 8],
    labels1: ["1", "2", "3", "4", "5", "6", "7", "8"],
  }),
};
</script>

<style scoped>
.container {
  overflow-x: hidden;
}
.v-card {
  position: relative;
  margin: 0 auto;
  height: 500px;
  transition: 0, 1s cubic-bezier(0.075, 0.82, 0.165, 1);
}
.v-card h1 {
  text-align: left;
  margin: 10px 0px 0px 50px;
  font-weight: 100;
}
.hooper-slide .is-active .is-current {
  overflow: hidden;
}
.hooper {
  width: 100%;
  height: 35vh;
  transition: 0.5s ease-in-out;
  margin: 0 auto;
}
@media (max-width: 1000px) {
  .hooper {
    height: 34vh;
  }
}
@media (max-width: 950px) {
  .hooper {
    height: 30vh;
  }
}
@media (max-width: 825px) {
  .hooper {
    height: 28vh;
  }
}
@media (max-width: 760px) {
  .hooper {
    height: 26vh;
  }
}
@media (max-width: 678px) {
  .hooper {
    height: 24vh;
  }
}
@media (max-width: 620px) {
  .hooper {
    height: 22vh;
  }
}
@media (max-width: 575px) {
  .hooper {
    height: 20vh;
  }
}
@media (max-width: 500px) {
  .hooper {
    height: 18vh;
  }
}
@media (max-width: 450px) {
  .hooper {
    height: 17vh;
  }
}
@media (max-width: 450px) {
  .hooper {
    height: 16vh;
  }
}
</style>
