/* Listeners */
document.addEventListener('click', function(event) {
  processActions('data-click', event.target);
});

document.addEventListener('submit', function(event) {
  processActions('data-submit', event.target);
});

document.addEventListener('keypress', function(event) {
  if (event.key == 13 | event.keyCode == 13) {
    processActions('data-enter', event.target);
  }
});

document.addEventListener('mousedown', function(event) {
  processActions('data-mouse-down', event.target);
});

document.addEventListener('change', function(event) {
  processActions('data-change', event.target);
});

document.addEventListener('focus', function(event) {
  processActions('data-focus', event.target);
});

document.addEventListener('blur', function(event) {
  processActions('data-blur', event.target);
});

function processActions(eventAttribute, target) {
  if (target && target.getAttribute) {
    if (target.hasAttribute(eventAttribute) != true) {
      if (target.parentNode && target.parentNode.classList && target.parentNode.classList.contains('parentItem')) {
        target = target.parentNode;
      } else if (target.parentNode && target.parentNode.parentNode && target.parentNode.parentNode.classList && target.parentNode.parentNode.classList.contains('parentItem')) {
        target = target.parentNode.parentNode;
      } else if (target.parentNode && target.parentNode.parentNode && target.parentNode.parentNode.parentNode && target.parentNode.parentNode.parentNode.classList && target.parentNode.parentNode.parentNode.classList.contains('parentItem')) {
        target = target.parentNode.parentNode.parentNode;
      } else if (target.parentNode && target.parentNode.parentNode && target.parentNode.parentNode.parentNode && target.parentNode.parentNode.parentNode.parentNode && target.parentNode.parentNode.parentNode.parentNode.classList && target.parentNode.parentNode.parentNode.parentNode.classList.contains('parentItem')) {
        target = target.parentNode.parentNode.parentNode.parentNode;
      }
    }
    var calledFunction = target.getAttribute(eventAttribute);
    if (calledFunction == 'addEmailField') {
      addEmailField();
    }
  }
}


/* Entry */
function addEmailField(target) {
  if (document.getElementById('message-header')) {
    var header = document.getElementById('message-header');
    var types = document.querySelector('#message-header ul.types');
    var emails = document.querySelector('#message-header ul.emails');
    var newType = document.createElement('li');
    var newEmail = document.createElement('li');
    
    // Create new type
    newType.innerHTML = ('<select>' +
                        '<option value="to" selected>to</option>' +
                        '<option value="cc">cc</option>' +
                        '<option value="bcc">bcc</option>' +
                        '<option value="reply-to">reply to</option>' +
                        '</select>:');
    types.appendChild(newType);
    
    // Create new email
    newEmail.innerHTML = '<input type="email" placeholder="example@example.com" />';
    emails.appendChild(newEmail);
  }
}
