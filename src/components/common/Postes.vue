<template>
  <div class="container">
    <div class="title">
      <h1>Blog <span style="color: #428bcb">Postes</span></h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
        voluptas atque pariatur labore, accusantium hic neque rerum ipsum illum.
      </p>
    </div>
    <div class="blogs">
      <div class="blog">
        <img src="../../img/Blogs/1.jpeg" alt="" />
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h3>
        <p>
          Lorem ipsum dolor sit amet, consect etur adipis icing elit. Quasi quae
          accus.
        </p>
        <div><a href="">Read more</a></div>
      </div>
      <div class="blog">
        <img src="../../img/Blogs/2.jpeg" alt="" />
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h3>
        <p>
          Lorem ipsum dolor sit amet, consect etur adipis icing elit. Quasi quae
          accus.
        </p>
        <div><a href="">Read more</a></div>
      </div>
      <div class="blog third">
        <img src="../../img/Blogs/3.jpeg" alt="" />
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h3>
        <p>
          Lorem ipsum dolor sit amet, consect etur adipis icing elit. Quasi quae
          accus.
        </p>
        <div><a href="">Read more</a></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: #f4f5f7;
  font-weight: 400;
  padding: 10px 0px 3rem 0px;
}
.container .title {
  margin: 3rem 0rem 2rem;
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
.blogs {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  margin: 0 auto;
}
.blogs .blog {
  width: 350px;
  padding: 15px;
  margin: 15px;
  border: 0.5px solid #9d9d9e;
  cursor: pointer;
  transition: 0.5s cubic-bezier(0.075, 0.82, 0.165, 1);
}
.blogs .blog:hover {
  box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px,
    rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
  color: #428bcb;
}
@media (max-width: 1180px) {
  .blogs {
    grid-template-columns: 1fr 1fr;
  }
}
@media (max-width: 780px) {
  .blogs {
    grid-template-columns: 1fr;
  }
}
@media (max-width: 400px) {
  .blogs .blog {
    width: 90%;
  }
}
.blogs .blog img {
  width: 100%;
  height: 200px;
}
.blogs .blog h3 {
  font-size: 1.5rem;
  padding: 5px 0px;
  font-weight: 400;
}
.blogs .blog p {
  font-size: 1.2rem;
  padding: 5px 0px;
  font-weight: 300;
  color: #000 !important;
}
.blogs .blog div {
  padding: 10px 0;
}
.blogs .blog div a {
  font-size: 1.1rem;
  font-weight: 400;
  cursor: pointer;
  position: relative;
  text-decoration: none;
  color: #000;
}
.blogs .blog div a:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #428bcb;
  visibility: hidden;
  transform: scaleX(0);
  transition: all 0.3s ease-in-out;
}
.blogs .blog a:hover:before {
  visibility: visible;
  transform: scaleX(1);
}
</style>
