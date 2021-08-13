<template>
  <div class="Wrapper">
    <div class="DoDont" style="border: 5px solid #10ce78">
      <img src="../../img/Avoid/do.png" alt="" class="titleImg" />

      <div class="methods">
        <img src="https://www.linkpicture.com/q/wear-mask.svg" alt="" />
        <div class="avoid-content">
          <h3>Wear a mask if available</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae
            accusamus,
          </p>
        </div>
      </div>
      <div class="methods">
        <img src="https://www.linkpicture.com/q/covermouth.svg" alt="" />
        <div class="avoid-content">
          <h3>COVER NOSE WHEN SNEEZING</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae
            accusamus,
          </p>
        </div>
      </div>
      <div class="methods">
        <img src="https://www.linkpicture.com/q/test_1.svg" alt="" />
        <div class="avoid-content">
          <h3>SEEK MEDICAL CARE REGULARLY</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae
            accusamus,
          </p>
        </div>
      </div>
    </div>
    <div class="DoDont" style="border: 5px solid #e9523f">
      <img src="../../img/Avoid/do-not.png" alt="" class="titleImg" />

      <div class="methods">
        <img src="https://www.linkpicture.com/q/virus.svg" alt="" />
        <div class="avoid-content">
          <h3>DON’T TOUCH YOUR FACE OR NOSE</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae
            accusamus,
          </p>
        </div>
      </div>
      <div class="methods">
        <img src="https://www.linkpicture.com/q/avoidContact.svg" alt="" />
        <div class="avoid-content">
          <h3>AVOID CONTACT SICK PEOPLE</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae
            accusamus,
          </p>
        </div>
      </div>
      <div class="methods">
        <img src="https://www.linkpicture.com/q/socialDis.svg" alt="" />
        <div class="avoid-content">
          <h3>AVOID CROWDED PLACES</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae
            accusamus,
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.Wrapper {
  display: grid;
  grid-template-columns: 570px 570px;
  justify-content: center;
  margin: 0 auto;
  padding: 2rem 0px 4rem 0px;
}
@media (max-width: 1300px) {
  .DoDont {
    width: 90% !important;
  }
}
@media (max-width: 420px) {
  .DoDont {
    width: 80% !important;
  }
  .methods img {
    width: 80% !important;
  }
  .titleImg {
    width: 98% !important;
  }
}
@media (max-width: 1165px) {
  .Wrapper {
    grid-template-columns: 1fr;
  }
}
.DoDont {
  width: 550px;
  margin: 20px auto;
  justify-content: center;
  align-items: center;
  border-radius: 15px;
  padding: 20px;
}
.titleImg {
  display: flex;
  margin: 0 auto;
  padding: 20px;
}
.methods {
  display: flex;
  text-align: left;
  border: 2px dashed #dddd;
  align-items: center;
  padding: 15px;
  margin: 10px;
}
@media (max-width: 450px) {
  .methods {
    flex-direction: column;
  }
}
.methods img {
  width: 150px;
  height: 150px;
  object-fit: cover;
}
.avoid-content {
  display: flex;
  flex-direction: column;
  text-align: left;
  font-weight: 300;
  color: rgb(75, 70, 70);
}
.avoid-content h3 {
  font-size: 1.5rem;
  text-transform: uppercase;
  font-weight: 400;
}
</style>
