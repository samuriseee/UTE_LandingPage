<template>
  <div>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat"></div>
  </div>
</template>

<script>
export default {
  mounted() {
    var chatbox = document.getElementById("fb-customer-chat");
    chatbox.setAttribute("page_id", "103422255378024");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function () {
      // eslint-disable-next-line
    FB.init({
        xfbml: true,
        version: "v11.0",
      });
    };

    (function (d, s, id) {
      var js,
        fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
      fjs.parentNode.insertBefore(js, fjs);
    })(document, "script", "facebook-jssdk");
  },
};
</script>

<style></style>
