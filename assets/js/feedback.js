document.addEventListener('DOMContentLoaded', function () {
  // Get form element
  var feedbackForm = document.querySelector('form');

  feedbackForm.addEventListener('submit', function (event) {
      // Validate name
      var nameInput = document.getElementById('name');
      if (!nameInput.value.trim()) {
          alert('Please enter your name.');
          event.preventDefault();
          return;
      }

      // Validate email
      var emailInput = document.getElementById('email');
      if (!emailInput.value.trim()) {
          alert('Please enter your email.');
          event.preventDefault();
          return;
      } else {
          // Email format validation using a simple regular expression
          var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(emailInput.value)) {
              alert('Please enter a valid email address.');
              event.preventDefault();
              return;
          }
      }

      // Validate visit date
      var visitDateInput = document.getElementById('visit-date');
      if (!visitDateInput.value.trim()) {
          alert('Please select the date of your visit.');
          event.preventDefault();
          return;
      }

      // Validate rating
      var ratingInputs = document.querySelectorAll('input[name="rating"]');
      var ratingChecked = false;
      ratingInputs.forEach(function (input) {
          if (input.checked) {
              ratingChecked = true;
          }
      });
      if (!ratingChecked) {
          alert('Please provide a rating.');
          event.preventDefault();
          return;
      }

      // Validate reason (at least one checkbox checked)
      var reasonInputs = document.querySelectorAll('input[name="reason"]');
      var reasonChecked = false;
      reasonInputs.forEach(function (input) {
          if (input.checked) {
              reasonChecked = true;
          }
      });
      if (!reasonChecked) {
          alert('Please select at least one reason.');
          event.preventDefault();
          return;
      }

      // Validate message
      var messageInput = document.getElementById('message');
      if (!messageInput.value.trim()) {
          alert('Please enter your message.');
          event.preventDefault();
          return;
      }
  });
});
