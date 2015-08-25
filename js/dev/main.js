//jQuery replacements
function ready(fn) {
  if(document.readyState !='loading') {
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

function toggleClass(el, className) {
  if(el.classList) {
    el.classList.toggle(className);
  } else {
    var classes = el.className.split(' ');
    var existingIndex = classes.indexOf(className);

    if(existingIndex >= 0) {
      classes.splice(existingIndex, 1);
    } else {
      classes.push(className);
    }

    el.className = classes.join(' ');
  }
}


//code
ready(function() {
  prettyPrint();

  var form = document.querySelector('.nav-search form');

  document.querySelector('.nav-search a').addEventListener('click', function(e) {
    toggleClass(form, 'active');

    e.preventDefault();
  });
});

