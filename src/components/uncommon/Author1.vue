<template>
  <div class="text-center ma-2">
    <v-btn dark @click="snackbar = true"> Second Author </v-btn>
    <v-snackbar v-model="snackbar">
      <h3>Huynh Trong Khoa</h3>
      <div class="info">
        <p><span>Student ID:</span>2050531200216</p>
        <p><span>Class:</span>20T2</p>
        <p><span>Gmail:</span>htk11235@gmail.com</p>
        <p><span>Phone Number:</span>123123123</p>
        <ul class="social-network social-circle">
          <li>
            <a href="" class="icoFacebook"><i class="fab fa-facebook-f"></i></a>
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
      </div>
      <template v-slot:action="{ attrs }">
        <v-btn color="pink" text v-bind="attrs" @click="snackbar = false">
          Close
        </v-btn>
      </template>
    </v-snackbar>
  </div>
</template>
<script>
export default {
  data: () => ({
    snackbar: false,
  }),
};
</script>
<style scoped>
h3 {
  position: relative;
  padding: 10px 0px;
}
.info span {
  padding: 5px 10px 5px 0px;
  color: #428bcb;
}
.info p {
  padding: 5px 0px;
}
ul {
  width: 80%;
  padding: 5px 15px;
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
  background-image: linear-gradient(to right, #f9ed32, #ee2a7b, #002aff);
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
/* @media (max-width: 1065px) {
  
  .content .author ul {
    margin: 0 auto;
    justify-content: center;
  }
}
@media (max-width: 515px) {
  .content {
    flex-direction: column;
  }
} */
</style>
