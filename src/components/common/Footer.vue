<template>
  <footer>
    <marquee>
      <span>Vuejs</span>
      <span>Wash Hand</span>
      <span>Fight Covid</span>
      <span>NPM</span>
      <span>Run</span>
      <span>Dev</span>
      <span>Safe</span>
      <span>Wear Mask</span>
      <span>Avoid</span>
      <span>Stay Home</span>
      <span>Keep Calm</span>
      <span>Chill</span>
      <span>Why not</span>
      <span>Netflix</span>
      <span>Suspense</span>
      <span>Together</span>
      <span>Fight</span>
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
    <div class="content">
      <div class="link-boxes">
        <ul class="boxfooter">
          <li class="link_name">Navigation</li>
          <li><a v-scroll-to="'#home'">Symbtoms</a></li>
          <li><a v-scroll-to="'#home'">Statistics</a></li>
          <li><a v-scroll-to="'#home'">Prevention</a></li>
          <li><a v-scroll-to="'#home'">Overview</a></li>
        </ul>
        <ul class="boxfooter">
          <li class="link_name">Services</li>
          <li><a href="#">App design</a></li>
          <li><a href="#">Web design</a></li>
          <li><a href="#">Logo design</a></li>
          <li><a href="#">Banner design</a></li>
        </ul>
        <ul class="boxfooter">
          <li class="link_name">Account</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">My account</a></li>
          <li><a href="#">Prefrences</a></li>
          <li><a href="#">Purchase</a></li>
        </ul>
        <ul class="boxfooter">
          <li class="link_name">Skills</li>
          <li><a href="#">HTML & CSS</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">Photography</a></li>
          <li><a href="#">Photoshop</a></li>
        </ul>
        <ul class="boxfooter input-box">
          <li class="link_name">You need help?</li>
          <li><input type="text" placeholder="Enter your email" /></li>
          <li><input type="button" value="Needed" /></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text"
          >Copyright © 2021 <a href="#">Vuejs</a>All rights</span
        >
        <span class="policy_terms">
          <a href="#">NPM run serve</a>
          <a href="#">Samuriseee</a>
        </span>
      </div>
    </div>
  </footer>
</template>

<style scoped>
footer {
  position: relative;
  padding: 3rem 0 0;
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
  color: #428bcb;
  font-weight: 500;
}
footer .content {
  max-width: 1250px;
  margin: auto;
  padding: 30px 40px 40px 40px;
}
footer .content .link-boxes {
  width: 100%;
  display: flex;
  justify-content: space-between;
}
footer .content .link-boxes .boxfooter {
  width: calc(100% / 5 - 10px);
}
.content .link-boxes .boxfooter .link_name {
  color: #fff;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 10px;
  position: relative;
}
.link-boxes .boxfooter .link_name::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  height: 2px;
  width: 35px;
  background: #fff;
}
.content .link-boxes .boxfooter li {
  margin: 6px 0;
  list-style: none;
}
.content .link-boxes .boxfooter li a {
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  text-decoration: none;
  opacity: 0.8;
  transition: all 0.4s ease;
  cursor: pointer;
}
.content .link-boxes .boxfooter li a:hover {
  opacity: 1;
  text-decoration: underline;
}
.content .link-boxes .input-box {
  margin-right: 55px;
}
.link-boxes .input-box input {
  height: 40px;
  width: calc(100% + 55px);
  outline: none;
  border: 2px solid #afafb6;
  background-image: linear-gradient(to right, #3e4049, #1d1e25);
  border-radius: 4px;
  padding: 0 15px;
  font-size: 15px;
  color: #fff;
  margin-top: 5px;
}
.link-boxes .input-box input::placeholder {
  color: #afafb6;
  font-size: 16px;
}
.link-boxes .input-box input[type="button"] {
  background: #fff;
  color: #428bcb;
  border: none;
  font-size: 18px;
  font-weight: 500;
  margin: 4px 0;
  opacity: 0.8;
  cursor: pointer;
  text-transform: uppercase;
  transition: all 0.4s ease;
}
.input-box input[type="button"]:hover {
  opacity: 1;
}
footer .bottom-details {
  width: 100%;
  background-image: linear-gradient(to right, #1d1e25, #3e4049);
}
footer .bottom-details .bottom_text {
  max-width: 1250px;
  margin: auto;
  padding: 20px 40px;
  display: flex;
  justify-content: space-between;
}
.bottom-details .bottom_text span,
.bottom-details .bottom_text a {
  font-size: 14px;
  font-weight: 300;
  color: #fff;
  opacity: 0.8;
  text-decoration: none;
}
.bottom-details .bottom_text a:hover {
  opacity: 1;
  text-decoration: underline;
}
.bottom-details .bottom_text a {
  margin-right: 10px;
}
@media (max-width: 900px) {
  footer .content .link-boxes {
    flex-wrap: wrap;
  }
  footer .content .link-boxes .input-box {
    width: 40%;
    margin-top: 10px;
  }
}
@media (max-width: 700px) {
  footer {
    position: relative;
  }
  .content .top .logo-details {
    font-size: 26px;
  }
  .content .top .media-icons a {
    height: 35px;
    width: 35px;
    font-size: 14px;
    line-height: 35px;
  }
  footer .content .link-boxes .boxfooter {
    width: calc(100% / 3 - 10px);
  }
  footer .content .link-boxes .input-box {
    width: 60%;
  }
  .bottom-details .bottom_text span,
  .bottom-details .bottom_text a {
    font-size: 12px;
  }
}
@media (max-width: 520px) {
  footer::before {
    top: 145px;
  }
  footer .content .top {
    flex-direction: column;
  }
  .content .top .media-icons {
    margin-top: 16px;
  }
  footer .content .link-boxes .box {
    width: calc(100% / 2 - 10px);
  }
  footer .content .link-boxes .input-box {
    width: 100%;
  }
}
</style>
