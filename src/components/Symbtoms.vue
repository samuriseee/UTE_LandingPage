<template>
  <div class="container">
    <div class="title">
      <h1>Corona virus <span style="color: #f10c44">symbtoms</span></h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
        voluptas atque pariatur labore, accusantium hic neque rerum ipsum illum.
      </p>
    </div>
    <section>
      <div class="card" v-for="symbtom in symbtoms" :key="symbtom.num">
        <div class="flex">
          <div class="box"><img :src="symbtom.image" /></div>
          <div class="service-number">
            <div class="service-v1-number">{{ symbtom.num }}</div>
            <span class="small-text-v1">/05</span>
          </div>
        </div>
        <h3>{{ symbtom.name }}</h3>
        <p>{{ symbtom.content }}</p>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {
      symbtoms: [
        {
          name: "Coughing & Sneezing",
          image: "https://www.linkpicture.com/q/s1_3.png",
          content:
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae accusamus, aut necessitatibus porro quisquam ab! Exercit ationem sit",
          num: "00",
        },
        {
          name: "STRONG HEADACKE",
          image: "https://www.linkpicture.com/q/s2_4.png",
          content:
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae accusamus, aut necessitatibus porro quisquam ab! Exercit ationem sit",
          num: "01",
        },
        {
          name: "SHORTNESS OF BREATH",
          image: "https://www.linkpicture.com/q/s3_6.png",
          content:
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae accusamus, aut necessitatibus porro quisquam ab! Exercit ationem sit",
          num: "02",
        },
        {
          name: "HIGH FEVER",
          image: "https://www.linkpicture.com/q/s4_1.png",
          content:
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae accusamus, aut necessitatibus porro quisquam ab! Exercit ationem sit",
          num: "03",
        },
        {
          name: "SORE THROAT",
          image: "https://www.linkpicture.com/q/s5_1.png",
          content:
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae accusamus, aut necessitatibus porro quisquam ab! Exercit ationem sit",
          num: "04",
        },
        {
          name: "RUNNING NOSE",
          image: "https://www.linkpicture.com/q/s6_3.png",
          content:
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae accusamus, aut necessitatibus porro quisquam ab! Exercit ationem sit",
          num: "05",
        },
      ],
    };
  },
};
</script>

<style scoped>
.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: #f9f9f9;
  font-weight: 400;
  padding: 10px 0px 1rem 0px;
}
.container .title {
  margin: 3rem 0rem 2rem;
  text-align: center;
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
  width: 55%;
  font-size: 1rem;
  margin: 0 auto;
}
.container section {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  margin-top: 20px;
}
.container section .card {
  width: 350px;
  height: 350px;
  border: 0.5px solid rgb(190, 186, 186);
  box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em,
    rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
  padding: 25px;
  margin: 15px;
  border-bottom: none;
  align-items: center;
  justify-content: center;
  background: #fff;
  transition: 0.2s cubic-bezier(0.55, 0.085, 0.68, 0.53);
  cursor: pointer;
}
.container section .card:hover {
  border-bottom: 4px solid #f10c44;
}
.container section .flex {
  display: flex;
  justify-content: space-between;
  margin-top: 30px;
}
.service-number {
  position: relative;
  opacity: 0.2;
  font-family: Oswald, sans-serif;
  font-weight: 400;
}
.service-number .small-text-v1 {
  display: inline;
  position: relative;
  top: -10px;
  font-size: 24px;
  line-height: 50px;
}
.service-v1-number {
  display: inline;
  font-size: 50px;
  line-height: 64px;
}
.card h3 {
  padding: 20px 0px;
  text-transform: uppercase;
}
section .card .flex .box {
  border: 0.5px solid rgb(190, 186, 186);
  border-bottom: 5px solid #f10c44;
}
section .card .flex .box img {
  width: 80px;
  height: 80px;
}
section p {
  font-size: 1.17rem;
}
</style>
