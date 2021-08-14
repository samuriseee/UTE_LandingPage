<template>
  <div class="Wrapper">
    <div class="DoDont" style="border: 5px solid #10ce78">
      <img src="../../img/Avoid/do.png" alt="" class="titleImg" />

      <div class="methods">
        <img src="https://www.linkpicture.com/q/wear-mask.svg" alt="" />
        <div class="avoid-content">
          <h3>Wear a mask if available</h3>
          <p>
            You should wear a mask, even if you do not feel sick. This is
            because several studies have found that people with COVID-19 who
            never develop symptoms
          </p>
        </div>
      </div>
      <div class="methods">
        <img src="https://www.linkpicture.com/q/covermouth.svg" alt="" />
        <div class="avoid-content">
          <h3>COVER NOSE WHEN SNEEZING</h3>
          <p>
            Cover your mouth and nose with a tissue when you cough or sneeze, If
            you don’t have a tissue, cough or sneeze into your elbow, not your
            hands
          </p>
        </div>
      </div>
      <div class="methods">
        <img src="https://www.linkpicture.com/q/test_1.svg" alt="" />
        <div class="avoid-content">
          <h3>SEEK MEDICAL CARE REGULARLY</h3>
          <p>
            Regular health check-ups can identify any early signs of health
            issues. Finding problems early means that your chances for effective
            treatment are increased.
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
            Respiratory infections can be caused by many different bacteria and
            viruses, including the virus that causes COVID-19
          </p>
        </div>
      </div>
      <div class="methods">
        <img src="https://www.linkpicture.com/q/avoidContact.svg" alt="" />
        <div class="avoid-content">
          <h3>AVOID CONTACT SICK PEOPLE</h3>
          <p>
            Inside your home: Avoid close contact with people who are sick. If
            possible, maintain 2m between the person who is sick and other
            household members
          </p>
        </div>
      </div>
      <div class="methods">
        <img src="https://www.linkpicture.com/q/socialDis.svg" alt="" />
        <div class="avoid-content">
          <h3>AVOID CROWDED PLACES</h3>
          <p>
            COVID-19 can spread in poorly ventilated and/or crowded indoor
            settings. ... You can protect yourself by avoiding or limiting time
            spent in crowded places
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
