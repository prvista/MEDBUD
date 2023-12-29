// HEADERNAV
document.addEventListener("DOMContentLoaded", function () {

    var header = document.getElementById("header");
  

    var sticky = header.offsetTop;
  

    function stickyHeader() {
        var burgerBtn = document.querySelector(".burger__btn");
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
            burgerBtn.classList.add("sticky");

            burgerBtn.querySelectorAll("span").forEach(function (span) {
                span.style.backgroundColor = "#808080"; 
            });
        } else {
            header.classList.remove("sticky");
            burgerBtn.classList.remove("sticky");
 
            burgerBtn.querySelectorAll("span").forEach(function (span) {
                span.style.backgroundColor = ""; 
            });
        }
    }
  

    window.addEventListener("scroll", function () {
        stickyHeader();
    });
  });


//   header__btn
const burgerBtn = document.querySelector(".burger__btn");
const headerNav = document.querySelector(".header__nav");

burgerBtn.addEventListener("click" , () =>{
    headerNav.classList.toggle("open");
    burgerBtn.classList.toggle("open");
})



// FLOAT
document.addEventListener('DOMContentLoaded', function () {
    const showSectionLinks = document.querySelectorAll('.show-section');
    const additionalSectionContainers = document.querySelectorAll('.additional-section-container');

    showSectionLinks.forEach((link, index) => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            additionalSectionContainers[index].style.display = 'block';
            additionalSectionContainers[index].querySelector('.additional-section').style.animationPlayState = 'running';
        });

        const closeBtns = additionalSectionContainers[index].querySelectorAll('.close-btn');
        closeBtns.forEach((closeBtn) => {
            closeBtn.addEventListener('click', function () {
                additionalSectionContainers[index].style.display = 'none';
                additionalSectionContainers[index].querySelector('.additional-section').style.animationPlayState = 'paused';
            });
        });
    });

    const specializationSelect = document.getElementById('specializationSelect');
    const doctorNameInput = document.getElementById('doctorNameInput');

    specializationSelect.addEventListener('change', function () {
        doctorNameInput.value = specializationSelect.value.split(' - ')[0];
    });

    const selectedDoctor = localStorage.getItem('selectedDoctor');
    const selectedSpecialization = localStorage.getItem('selectedSpecialization');

    doctorNameInput.value = selectedDoctor;

    for (let i = 0; i < specializationSelect.options.length; i++) {
        if (specializationSelect.options[i].text === selectedSpecialization) {
            specializationSelect.options[i].selected = true;
            break;
        }
    }
});

// SEARCH
function searchDoctors() {
    const searchInput = document.getElementById('searchInput');
    const filter = searchInput.value.toUpperCase();
    const doctorsList = document.querySelectorAll('.doctors__list__container');
    let foundDoctors = false; 

    doctorsList.forEach(doctor => {
        const doctorName = doctor.querySelector('h4').innerText.toUpperCase();
        const doctorSpecialization = doctor.querySelector('h6').innerText.toUpperCase();

        if (doctorName.includes(filter) || doctorSpecialization.includes(filter)) {
            doctor.parentElement.style.display = '';
            foundDoctors = true; 
        } else {
            doctor.parentElement.style.display = 'none';
        }
    });


    const noDoctorsMessage = document.getElementById('noDoctorsMessage');
    if (!foundDoctors) {
        noDoctorsMessage.style.display = 'block';
    } else {
        noDoctorsMessage.style.display = 'none';
    }
}

document.getElementById('searchInput').addEventListener('input', searchDoctors);

// REDIRECT
function setAndRedirect(doctorName, doctorSpecialization) {

    localStorage.setItem('selectedDoctor', doctorName);
    localStorage.setItem('selectedSpecialization', doctorSpecialization);

    window.location.href = 'appointment.php';
}

const makeAppointmentLinks = document.querySelectorAll('.make-appointment');
makeAppointmentLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const doctorName = link.getAttribute('data-doctor-name');
        const doctorSpecialization = link.getAttribute('data-doctor-specialization');
        setAndRedirect(doctorName, doctorSpecialization);
    });
});







// DATE TODAY
document.addEventListener('DOMContentLoaded', function() {
    updateDate(); 
  
    setInterval(checkDate, 60000);
  });
  
  function checkDate() {
    var currentDate = new Date().toLocaleDateString();
    var dateDiv = document.getElementById('todayDate');
  
    if (dateDiv.textContent !== currentDate) {
      updateDate();
    }
  }
  
  function updateDate() {
    var dateDiv = document.getElementById('todayDate');
    var currentDate = new Date().toLocaleDateString();
    dateDiv.textContent = currentDate;
  }
  







// HEADERNAV
document.addEventListener("DOMContentLoaded", function () {
    var header = document.getElementById("header");
  

    var sticky = header.offsetTop;
  

    function stickyHeader() {
        var burgerBtn = document.querySelector(".burger__btn");
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
            burgerBtn.classList.add("sticky");

            burgerBtn.querySelectorAll("span").forEach(function (span) {
                span.style.backgroundColor = "#808080"; 
            });
        } else {
            header.classList.remove("sticky");
            burgerBtn.classList.remove("sticky");

            burgerBtn.querySelectorAll("span").forEach(function (span) {
                span.style.backgroundColor = ""; 
            });
        }
    }
  
    window.addEventListener("scroll", function () {
        stickyHeader();
    });
  });
  
  
  








