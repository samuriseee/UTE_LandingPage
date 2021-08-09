<template>
  <aside class="further-reading">
    <div class="further-reading__eyes">
      <div class="further-reading__eyes__eye">
        <div class="further-reading__eyes__iris"></div>
      </div>
      <div class="further-reading__eyes__eye">
        <div class="further-reading__eyes__iris"></div>
      </div>
    </div>
  </aside>
</template>

<script>
export default {};
</script>

<style scoped>
.further-reading {
  position: relative;
  margin: 0 auto;
  padding-top: 2.5rem;
  border-top: 2px solid #000;
}
.further-reading__heading {
  margin-bottom: -2rem;
  text-align: center;
}
.further-reading__eyes {
  display: flex;
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -50%);
}
.further-reading__eyes__eye {
  position: relative;
  display: inline-block;
  height: 3.875rem;
  width: 2.75rem;
  background: #fff;
  border: 2px solid #000;
  border-radius: 50%;
}
.further-reading__eyes__eye:last-of-type {
  margin-left: -0.5rem;
  transform: translateY(-1px);
}
.further-reading__eyes__eye:last-of-type .further-reading__eyes__iris {
  bottom: calc(0.325rem - 1px);
}
.further-reading__eyes__iris {
  position: absolute;
  bottom: 0.325rem;
  left: calc(50% - 0.5rem);
  width: 1rem;
  height: 1.5rem;
  background: #000;
  border-radius: 50%;
  animation: furtherReading 3s infinite;
  animation-timing-function: linear;
}
@keyframes furtherReading {
  0% {
    transform: translate(-25%, 0);
  }
  47.5% {
    transform: translate(0, 1px);
  }
  95% {
    transform: translate(25%, 0);
  }
  100% {
    transform: translate(-25%, 0);
  }
}
</style>
