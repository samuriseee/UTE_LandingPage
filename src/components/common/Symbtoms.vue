<template>
  <div class="container">
    <div class="title">
      <h1>Corona virus <span style="color: #428bcb">symptoms</span></h1>
      <p>
        COVID-19 affects different people in different ways. Most infected
        people will develop mild to moderate illness and recover without
        hospitalization.
      </p>
    </div>
    <section>
      <div class="card" v-for="symbtom in symbtoms" :key="symbtom.num">
        <div class="flex">
          <div class="imgBox"><img :src="symbtom.image" /></div>
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
          image: "https://www.linkpicture.com/q/cough.svg",
          content:
            "The coronavirus (COVID-19) is a viral illness spread through droplets via coughing, sneezing, and close personal contact",
          num: "00",
        },
        {
          name: "STRONG HEADAChEs",
          image: "https://www.linkpicture.com/q/headache.svg",
          content:
            "The severe headache of COVID-19 only lasts a few days, while in others, it can last up to months. It is presenting mostly as a whole-head, severe-pressure pain",
          num: "01",
        },
        {
          name: "SHORTNESS OF BREATH",
          image: "https://www.linkpicture.com/q/breath.svg",
          content:
            "Shortness of breath can make it hard to breathe.Your chest may feel too tight to inhale or exhale fully. Each shallow breath takes greater effort and leaves you feeling winded",
          num: "02",
        },
        {
          name: "HIGH FEVER",
          image: "https://www.linkpicture.com/q/Fever.svg",
          content:
            "A fever is a high temperature. A high temperature is usually considered to be 38C or higher. Drinking fluids regularly can stop them becoming dehydrated.",
          num: "03",
        },
        {
          name: "SORE THROAT",
          image: "https://www.linkpicture.com/q/sore.svg",
          content:
            "A sore throat is often an early symptom. Because respiratory viruses are inhaled, they enter your nose and throat first. They may replicate there early on, leading to throat soreness and irritation.",
          num: "04",
        },
        {
          name: "NO SENSE OF TASTE",
          image: "https://www.linkpicture.com/q/taste.svg",
          content:
            "Cause the loss of taste and smell. Taste and smell can return or get better within 4 weeks of the virus clearing the body, but it may sometimes take months for them to improve.",
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
  background: #f4f5f7;
  font-weight: 400;
  padding: 10px 0px 1rem 0px;
}
.container .title {
  margin: 3rem 0rem 0.7rem;
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
  background-color: #428bcb;
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
@media (max-width: 1100px) {
  .container section {
    grid-template-columns: 1fr 1fr;
  }
}
@media (max-width: 768px) {
  .container section {
    grid-template-columns: 1fr;
  }
}
@media (max-width: 400px) {
  .container section .card {
    width: 90% !important;
    height: auto !important;
  }
  .container .title p {
    font-size:0.8rem !important;
  }
}
.container section .card {
  width: 350px;
  height: 370px;
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
  color: #428bcb;
  border-bottom: 4px solid #428bcb;
}
.container section .flex {
  display: flex;
  justify-content: space-between;
  margin-top: 15px;
}
.service-number {
  position: relative;
  opacity: 0.2;
  font-family: "Oswald", sans-serif;
  font-weight: 400;
  color: #000 !important;
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
  font-size: 1.6rem;
  padding: 15px 0px;
  text-transform: uppercase;
}
section .card .flex .imgBox {
  border: 0.5px solid rgb(190, 186, 186);
  border-bottom: 5px solid #428bcb;
}
section .card .flex .imgBox img {
  width: 100px;
  height: 100px;
}
section p {
  font-size: 1.17rem;
  color: #000 !important;
}
</style>
