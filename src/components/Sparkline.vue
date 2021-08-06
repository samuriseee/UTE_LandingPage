<template>
  <div class="container">
    <hooper :vertical="true">
      <slide>
        <v-card
          class="mx-auto text-center justify-center align-center"
          light
          max-width="1090"
        >
          <h1
            style="
              text-align: left;
              margin-left: 40px;
              font-weight: 500;
              padding: ;
            "
          >
            2020 - Cases by month
          </h1>
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
              :gradient="gradients[1]"
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

<script>
import { Hooper, Slide } from "hooper";
import "hooper/dist/hooper.css";
const gradients = [
  ["#f10c44"],
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
.hooper {
  height: 35vh;
}
</style>
