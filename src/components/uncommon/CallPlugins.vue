<template>
  <div class="phone-call">
    <img
      src="https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-whatsapp-circle-512.png"
      width="50"
      alt="Call Now"
      title="Call Now"
    />
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.phone-call {
  width: 50px;
  height: 50px;
  left: 20px;
  bottom: 30px;
  background: #10b418;
  position: fixed;
  text-align: center;
  color: #ffffff;
  cursor: pointer;
  border-radius: 50%;
  z-index: 99;
  display: inline-block;
  line-height: 65px;
}

.phone-call:before {
  position: absolute;
  content: " ";
  z-index: -1;
  top: -15px;
  left: -15px;
  background-color: #10b418;
  width: 80px;
  height: 80px;
  border-radius: 100%;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
  opacity: 0.6;
  -webkit-animation: pulse 1s ease-out;
  animation: pulse 1.8s ease-out;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale(0);
    opacity: 0;
  }
  25% {
    -webkit-transform: scale(0.3);
    opacity: 1;
  }
  50% {
    -webkit-transform: scale(0.6);
    opacity: 0.6;
  }
  75% {
    -webkit-transform: scale(0.9);
    opacity: 0.3;
  }
  100% {
    -webkit-transform: scale(1);
    opacity: 0;
  }
}

@keyframes pulse {
  0% {
    transform: scale(0);
    opacity: 0;
  }
  25% {
    transform: scale(0.3);
    opacity: 1;
  }
  50% {
    transform: scale(0.6);
    opacity: 0.6;
  }
  75% {
    transform: scale(0.9);
    opacity: 0.3;
  }
  100% {
    transform: scale(1);
    opacity: 0;
  }
}
</style>
