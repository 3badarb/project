function showHideLogIn() {
  document.getElementById('logIn-1').classList.toggle('active');
  document.getElementById('signup-1').classList.remove('activeS');
}
function showHideSignUp() {
  document.getElementById('signup-1').classList.toggle('activeS');
  document.getElementById('logIn-1').classList.remove('active');
}
function showCandidate() {
  let x = document.getElementById('form-signup-candidate');
  let y = document.getElementById('form-signup-employer');

  let z1 = document.getElementById('Candidate');
  let z2 = document.getElementById('Employer');

  if (y.style.display === 'flex') {
    x.style.display = 'flex';
    y.style.display = 'none';
    z1.style.backgroundColor = rgb(52, 165, 52);
    z1.style.color = 'white';
    z2.style.backgroundColor = rgb(225, 230, 235);
    z2.style.color = rgb(52, 165, 52);
  }
}
function showEmployer() {
  let x = document.getElementById('form-signup-candidate');
  let y = document.getElementById('form-signup-employer');
  let z1 = document.getElementById('Candidate');
  let z2 = document.getElementById('Employer');
  y.style.display = 'flex';
  x.style.display = 'none';
  if (y.style.display === 'flex') {
    z2.style.backgroundColor = rgb(52, 165, 52);
    z2.style.color = 'white';
    z1.style.backgroundColor = rgb(225, 230, 235);
    z1.style.color = rgb(52, 165, 52);
  }
}
function rgb(r, g, b) {
  return `rgb(${r}, ${g}, ${b})`;
}
function hoverCandidate() {
  let z1 = document.getElementById('Candidate');
  let x = document.getElementById('form-signup-candidate');
  if (x.style.display === 'flex') {
    change = true;
  } else {
    z1.style.backgroundColor = rgb(52, 165, 52);
    z1.style.color = 'white';
    change = true;
  }
}
let change = true;
function leaveCandidate() {
  let z1 = document.getElementById('Candidate');
  let x = document.getElementById('form-signup-candidate');
  if (change) {
    change = false;
    if (x.style.display === 'none') {
      z1.style.backgroundColor = rgb(225, 230, 235);
      z1.style.color = rgb(52, 165, 52);
    }
  } else {
    z1.style.backgroundColor = rgb(225, 230, 235);
    z1.style.color = rgb(52, 165, 52);
  }
}
function hoverEmployer() {
  let z2 = document.getElementById('Employer');
  let y = document.getElementById('form-signup-employer');
  if (y.style.display === 'flex') {
  } else {
    z2.style.backgroundColor = rgb(52, 165, 52);
    z2.style.color = 'white';
  }
}
function leaveEmployer() {
  let z2 = document.getElementById('Employer');
  let y = document.getElementById('form-signup-employer');
  if (y.style.display === 'flex') {
  } else {
    z2.style.backgroundColor = rgb(225, 230, 235);
    z2.style.color = rgb(52, 165, 52);
  }
}
