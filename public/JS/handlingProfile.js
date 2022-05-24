function showHideProfile() {
  let x = document.getElementById('board');
  let y = document.getElementById('settings1');
  let z1 = document.getElementById('settings');
  let z2 = document.getElementById('profile');
  x.style.display = 'block';
  y.style.display = 'none';

  if (x.style.display === 'block') {
    x.style.display = 'block';
    y.style.display = 'none';
    z2.style.backgroundColor = rgb(233, 235, 255);
    z2.style.borderRadius = '2em';
    z1.style.backgroundColor = 'white';
    z1.style.borderRadius = '0';
  }
}
function showHideSettings() {
  let x = document.getElementById('board');
  let y = document.getElementById('settings1');
  let z1 = document.getElementById('settings');
  let z2 = document.getElementById('profile');
  y.style.display = 'block';
  x.style.display = 'none';

  if (y.style.display === 'block') {
    z1.style.backgroundColor = rgb(233, 235, 255);
    z1.style.borderRadius = '2em';
    z2.style.backgroundColor = 'white';
    z2.style.borderRadius = '0';
  }
}
function rgb(r, g, b) {
  return `rgb(${r}, ${g}, ${b})`;
}
function hoverProfile() {
  let z1 = document.getElementById('profile');
  let x = document.getElementById('board');
  if (x.style.display === 'block') {
    change = true;
  } else {
    z1.style.backgroundColor = rgb(233, 235, 255);
    z1.style.borderRadius = '2em';
    change = true;
  }
}
let change = true;
function leaveProfile() {
  let x = document.getElementById('board');
  let z1 = document.getElementById('profile');

  if (change === true) {
    change = false;
    if (x.style.display === 'none') {
      z1.style.backgroundColor = 'white';
      z1.style.borderRadius = '0';
    }
  } else {
    z1.style.backgroundColor = 'white';
    z1.style.borderRadius = '0';
  }
}
function hoverSettings() {
  let z2 = document.getElementById('settings');
  let y = document.getElementById('settings1');
  if (y.style.display === 'block') {
  } else {
    z2.style.backgroundColor = rgb(233, 235, 255);
    z2.style.borderRadius = '2em';
  }
}
function leaveSettings() {
  let z2 = document.getElementById('settings');
  let y = document.getElementById('settings1');
  if (y.style.display === 'block') {
  } else {
    z2.style.backgroundColor = 'white';
    z2.style.borderRadius = '0';
  }
}
