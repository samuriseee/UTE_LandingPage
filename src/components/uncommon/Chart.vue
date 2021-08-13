<template>
  <div>
    <div class="chart">
      <canvas id="Mychart" height="450" width="1000"></canvas>
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
      type: "line",
      data: {
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
        datasets: [
          {
            label: "Cases",
            backgroundColor: "#b1995d",
            borderColor: "#b1995d",
            fill: false,
            borderWidth: 2.5,
            data: [8, 9, 6, 7, 6, 4, 2, 3, 5, 10],
          },
          {
            label: "Recovered",
            backgroundColor: "#0655b2",
            borderColor: "#0655b2",
            borderWidth: 2.5,
            fill: false,
            data: [1, 2, 3, 4, 6, 7, 1, 5, 1, 10],
          },
          {
            label: "Death",
            backgroundColor: "rgb(255, 99, 132, 0.5)",
            borderColor: "rgb(255, 99, 132)",
            borderWidth: 2.5,
            fill: false,
            data: [10, 7, 9, 5, 8, 3, 4, 2, 1, 1],
          },
        ],
      },

      options: {
        responsive: true,
      },
    });
  },
};
</script>

<style scoped>
.chart {
  max-width: 1000px;
  max-height: 500px;
  margin: 0 auto;
}
</style>
