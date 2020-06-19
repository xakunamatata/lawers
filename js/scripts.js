$(".navigation-burger").click(function () {
  $(".burger-item").toggleClass("burger-item-open");
  $(this).toggleClass("navigation-burger-open");
  $(".navigation-top-menu").toggleClass("navigation-top-menu-open");
});

$(".services-item-private").click(function () {
  $(".services-menu").hide();
  $(".services-menu-private").show();
});
$(".services-item-business").click(function () {
  $(".services-menu").hide();
  $(".services-menu-business").show();
});
$(".section-services .menu-icon-close").click(function () {
  $(".services-menu").hide();
});

$(".first-circle").circleProgress({
  value: 0.87,
  fill: {
    gradient: ["#961039", "#961039"],
  },
  emptyFill: "rgba(255,255,255, 1)",
  startAngle: -Math.PI / 2,
});
$(".second-circle").circleProgress({
  value: 1,
  fill: {
    gradient: ["#961039", "#961039"],
  },
  emptyFill: "rgba(255,255,255, 1)",
  startAngle: -Math.PI / 2,
});
$(".third-circle").circleProgress({
  value: 0.33,
  fill: {
    gradient: ["#961039", "#961039"],
  },
  emptyFill: "rgba(255,255,255, 1)",
  startAngle: -Math.PI / 2,
});
$(".forth-circle").circleProgress({
  value: 0.61,
  fill: {
    gradient: ["#961039", "#961039"],
  },
  emptyFill: "rgba(255,255,255, 1)",
  startAngle: -Math.PI / 2,
});

$(".section-link").click(function () {
  $(".section-menu").toggleClass("menu-show");
});
