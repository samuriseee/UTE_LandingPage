<template>
  <div>
    <nav>
      <div class="logo"><img src="../img/logo.png" alt="" /></div>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Profile</a></li>
        <li><a href="">Resume</a></li>
        <li><a href="">Skills</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </nav>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
nav {
  display: flex;
  justify-content: space-between;
  padding: 8px 20px;
  background: transparent;
}
nav .logo img {
  width: 60px;
}
nav ul {
  display: flex;
  justify-content: center;
  align-items: center;
}
nav ul li {
  list-style: none;
  margin-left: 1.5rem;
}
nav ul li a {
  text-decoration: none;
  font-size: 1.2rem;
  text-transform: uppercase;
  color: rgb(184, 174, 174);
  font-weight: 400;
}
</style>
