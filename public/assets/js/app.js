function windowScroll() {
  var t = document.getElementById('navbar');
  50 <= document.body.scrollTop || 50 <= document.documentElement.scrollTop
    ? t.classList.add('nav-sticky')
    : t.classList.remove('nav-sticky');
}
window.addEventListener('scroll', function (t) {
  t.preventDefault(), windowScroll();
});
var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  ),
  tooltipList = tooltipTriggerList.map(function (t) {
    return new bootstrap.Tooltip(t);
  });
