<template>
  <footer>
    <marquee>
      <span>Vuejs</span>
      <span>Digital product design </span>
      <span>Distributed teams</span>
      <span>S-group</span>
      <span>UX design</span>
      <span>Frontend</span>
      <span>Remote work</span>
      <span>Developer</span>
      <span>Creativity</span>
      <span>Strategy</span>
      <span>Design</span>
      <span>Why</span>
      <span>Why not</span>
      <span>Failure</span>
      <span>Suspense</span>
      <span>Destroy</span>
      <span>Execution</span>
      <span>Dangerous</span>
      <span>Growth</span>
      <span>Sabotage</span>
      <span>Sashimi</span>
      <span>Profit</span>
      <span>Impact</span>
      <span>Status</span>
      <span>Code</span>
      <span>magic</span>
      <span>Think</span>
      <span>Do</span>
      <span>Experimentation</span>
      <!-- <span v-for="item in marqueeItems" :key="item"></span> -->
    </marquee>
  </footer>
</template>

<style scoped>
footer {
  position: relative;
  padding: 8rem 0 1rem;
  font-size: 1rem;
  background-image: linear-gradient(to right, #3e4049, #1d1e25);
}
footer marquee {
  position: absolute;
  top: 1.25rem;
  left: 0;
  width: 100%;
  font-size: 1.25rem;
  line-height: 1;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: #e9e9ea;
}
footer marquee span {
  margin: 0 0.75rem;
}
footer marquee span:nth-child(even) {
  color: #f10c44;
  font-weight: 900;
}
footer .logo {
  display: inline-flex;
  font-family: "Imperator", sans-serif;
  text-transform: uppercase;
  font-size: 2.3rem;
  max-width: 18.375rem;
  margin-bottom: 1.5rem;
}
footer .logo ul {
  display: flex;
  margin: 2rem 0 2.5rem -2rem;
  list-style: none;
  justify-content: center;
}
footer .logo ul a {
  display: inline-block;
  padding: 1rem;
  font-size: 1rem;
  color: #fff;
  font-weight: 750;
  text-decoration: none;
  font-family: "Basis Grotesque Pro", sans-serif;
}
footer .logo ul a::after {
  content: "";
  display: block;
  margin: 0 auto;
  width: 0;
  height: 2px;
  background: #fff;
  transition: width 0.2s;
}
.bottom-text {
  font-size: 0.75rem;
  font-weight: 650;
  opacity: 0.8;
  font-family: "Basis Grotesque Pro", sans-serif;
}
</style>
