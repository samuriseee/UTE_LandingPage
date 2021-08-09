<template>
  <footer>
    <marquee>
      <span>Vuejs</span>
      <span>Digital product design</span>
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
    <div class="content">
      <div class="author">
        <h3>Nguyen Tuan Kiet</h3>
        <div class="info">
          <p><span>Student ID:</span>2050531200205</p>
          <p><span>Class:</span>20T2</p>
          <p><span>Gmail:</span>gonhungho123@gmail.com</p>
          <p><span>Phone Number:</span>0798842001</p>
          <h4>
            <ul class="social-network social-circle">
              <p class="None">Contact Us:</p>
              <li>
                <a href="" class="icoFacebook"
                  ><i class="fab fa-facebook-f"></i
                ></a>
              </li>
              <li>
                <a href="" class="icoTwitter"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="" class="icoTwitch"><i class="fab fa-twitch"></i></a>
              </li>
              <li>
                <a href="" class="icoIg"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </h4>
        </div>
      </div>

      <div class="author">
        <h3>Huynh Trong Khoa</h3>
        <div class="info">
          <p><span>Student ID:</span>2050531200216</p>
          <p><span>Class:</span>20T2</p>
          <p><span>Gmail:</span>htk11235@gmail.com</p>
          <p><span>Phone Number:</span>0964952761</p>
          <h4>
            <ul class="social-network social-circle">
              <p class="None">Contact Us:</p>
              <li>
                <a href="" class="icoFacebook"
                  ><i class="fab fa-facebook-f"></i
                ></a>
              </li>
              <li>
                <a href="" class="icoTwitter"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="" class="icoTwitch"><i class="fab fa-twitch"></i></a>
              </li>
              <li>
                <a href="" class="icoIg"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </h4>
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped>
footer {
  position: relative;
  padding: 4rem 0 1rem;
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
  font-weight: 500;
}
.bottom-text {
  font-size: 0.75rem;
  font-weight: 650;
  opacity: 0.8;
  font-family: "Basis Grotesque Pro", sans-serif;
}
.content {
  width: 80%;
  margin: 0 auto;
  color: #fff;
  align-items: flex-start;
  justify-content: space-evenly;
  display: flex;
}
.content .author {
  width: 100%;
}
.content .author h3 {
  font-weight: 200;
  padding: 20px;
  text-align: center;
}
.content p {
  font-size: 1rem;
  font-weight: 400;
}
.content span {
  color: #f10c44;
  padding: 0 20px;
  font-size: 1.15rem;
}
.content .author .info {
  padding: 10px;
}
.content .author ul {
  width: 80%;
  padding: 5px;
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
}
ul.social-network li {
  display: inline;
  margin: 0 5px;
}
.social-network a.icoFacebook:hover {
  background-color: #3b5998;
}
.social-network a.icoTwitter:hover {
  background-color: #33ccff;
}
.social-network a.icoTwitch:hover {
  background-color: #6441a4;
}
.social-network a.icoIg:hover {
  background-image: linear-gradient(to right, #f9ed32, #ee2a7b);
}
.social-network a.icoFacebook:hover i,
.social-network a.icoTwitter:hover i,
.social-network a.icoIg:hover i,
.social-network a.icoTwitch:hover i {
  color: #fff;
}
a.socialIcon:hover,
.socialHoverClass {
  color: #44bcdd;
}
.social-circle li a {
  display: inline-block;
  position: relative;
  margin: 0 auto 0 auto;
  border-radius: 50%;
  text-align: center;
  width: 50px;
  height: 50px;
  font-size: 20px;
}
.social-circle li i {
  margin: 0;
  line-height: 50px;
  text-align: center;
}
.social-circle li a:hover i,
.triggeredHover {
  transform: rotate(360deg);
  transition: all 0.2s;
}
.social-circle i {
  color: #fff;
  transition: all 0.8s;
  transition: all 0.8s;
}
@media (max-width: 1065px) {
  .None {
    display: none;
  }
  .content .author ul {
    margin: 0 auto;
    justify-content: center;
  }
}
@media (max-width: 515px) {
  .content {
    flex-direction: column;
  }
}
</style>
