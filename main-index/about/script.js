$(document).ready(function () {
  $(".social-icons").hide();
  $(".card").hover(
    function () {
      $(this).find(".social-icons").fadeIn();
    },
    function () {
      $(this).find(".social-icons").fadeOut();
    }
  );
});
