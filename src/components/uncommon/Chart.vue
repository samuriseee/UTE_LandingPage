<template>
  <div>
    <div class="chart">
      <canvas id="Mychart" height="450" width="1200"></canvas>
    </div>
  </div>
</template>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0-beta/dist/chart.min.js"></script>

<script>
import Chart, { plugins } from "chart.js";
export default {
  mounted() {
    /* eslint-disable */
    const ctx = document.getElementById("Mychart").getContext("2d");
    // eslint-disable-next-line no-use-before-define
    const Mychart = new Chart(ctx, {
      responsive: true,
      type: "line",
      data: {
        labels: [
          "1/2021",
          "2/2021",
          "3/2021",
          "4/2021",
          "5/2021",
          "6/2021",
          "7/2021",
          "8/2021",
        ],
        datasets: [
          {
            label: "Cases",
            backgroundColor: "#b1995d",
            borderColor: "#b1995d",
            fill: false,
            lineTension: 0,
            pointHoverRadius: 8,
            pointHitRadius: 20,
            pointBorderWidth: 2,
            pointStyle: "rectRounded",
            borderWidth: 2.5,
            data: [1474, 1850, 2448, 2617, 2942, 7572, 17576, 154306],
          },
          {
            label: "Recovered",
            backgroundColor: "#0655b2",
            borderColor: "#0655b2",
            pointHoverRadius: 8,
            pointHitRadius: 20,
            pointBorderWidth: 2,
            pointStyle: "rectRounded",
            borderWidth: 2.5,
            lineTension: 0,
            fill: false,
            data: [1325, 1460, 1876, 2359, 2548, 3043, 7247, 54332],
          },
          {
            label: "Death",
            backgroundColor: "#6d2c30",
            borderColor: "#6d2c30",
            borderWidth: 2.5,
            pointHoverRadius: 8,
            pointHitRadius: 20,
            pointBorderWidth: 2,
            pointStyle: "rectRounded",
            lineTension: 0,
            fill: false,
            data: [35, 35, 35, 35, 35, 48, 81, 1498],
          },
        ],
      },

      options: {
        scales: {
          xAxes: [
            {
              ticks: {
                fontSize: 15,
                fontFamily: "'Oswald', 'sans-serif'",
              },
            },
          ],
          yAxes: [
            {
              ticks: {
                fontSize: 15,
                fontFamily: "'Oswald', 'sans-serif'",
              },
            },
          ],
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontFamily: "'Oswald', 'sans-serif'",
            fontSize: 16,
          },
        },
        title: {
          fontStyle: "bold",
          display: true,
          text: "Viet Nam 2021 Total Statistics Chart",
          fontFamily: "'Oswald', 'sans-serif'",
          fontSize: 30,
        },
        animation: {
          easing: "easeInOutCubic",
          duration: 2700,
        },
        elements: {
          point: {
            radius: 4.5,
          },
        },
      },
    });
  },
};
</script>

<style scoped>
.chart {
  max-width: 1200px;
  max-height: 500px;
  margin: 0 auto;
}
@media (max-width: 700px) {
  .chart {
    display: none;
  }
}
</style>
