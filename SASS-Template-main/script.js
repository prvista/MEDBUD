// DOCTORS NAME COPY    
const appointmentLinks = document.querySelectorAll('.make-appointment');

function handleAppointmentClick(event) {
    event.preventDefault();

    const doctorName = this.getAttribute('data-doctor-name');
    window.location.href = `appointment.php?doctor=${encodeURIComponent(doctorName)}`;
}

appointmentLinks.forEach(link => {
    link.addEventListener('click', handleAppointmentClick);
});






const burgerBtn = document.querySelector(".burger__btn");
const headerNav = document.querySelector(".header__nav");

burgerBtn.addEventListener("click" , () =>{
    headerNav.classList.toggle("open");
    burgerBtn.classList.toggle("open");
})




// Wait for the DOM content to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
  // Get the header element
  var header = document.getElementById("header");

  // Get the offset position of the header
  var sticky = header.offsetTop;

  // Function to add or remove the "sticky" class based on scroll position
  function stickyHeader() {
      var burgerBtn = document.querySelector(".burger__btn");
      if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
          burgerBtn.classList.add("sticky");
          // Target the spans within burger__btn and change their color
          burgerBtn.querySelectorAll("span").forEach(function (span) {
              span.style.backgroundColor = "#808080"; // Change this to the desired color
          });
      } else {
          header.classList.remove("sticky");
          burgerBtn.classList.remove("sticky");
          // Reset the color of spans within burger__btn
          burgerBtn.querySelectorAll("span").forEach(function (span) {
              span.style.backgroundColor = ""; // Reset to the original color or leave it empty
          });
      }
  }

  // Add a scroll event listener to call the stickyHeader function
  window.addEventListener("scroll", function () {
      stickyHeader();
  });
});




