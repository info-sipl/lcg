"use strict";

/**
 * addEvent on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
};

/**
 * navbar toggler icon toggle
 */

const navbarToggler = document.querySelector("[data-bs-toggle]");

const toggleBtn = function () {
  navbarToggler.classList.toggle("active");
};

addEventOnElem(navbarToggler, "click", toggleBtn);

/**
 * header active
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 100) {
    header.classList.add("active"); 
    backTopBtn.classList.add("active"); 
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});

/**
 * counter
 */

const counters = document.querySelectorAll("[data-counter]");
const speed = 200;

counters.forEach((counter) => {
  const animate = () => {
    const value = +counter.getAttribute("target");
    const data = +counter.innerText;

    const time = value / speed;
    if (data < value) {
      counter.innerText = Math.ceil(data + time);
      setTimeout(animate, 1);
    } else {
      counter.innerText = value;
    }
  };

  animate();
});

/**
 * visit counter active
 */

var visitor = document.querySelector("[data-visitor]");
var visitCount = localStorage.getItem("page_view", 156859);

/** Check if page_view entry is present */
if (visitCount) {
  visitCount = Number(visitCount) + 1;
  localStorage.setItem("page_view", visitCount);
} else {
  visitCount = 156859;
  localStorage.setItem("page_view", 156859);
}
visitor.innerHTML = visitCount;


/**
 * current date & time
 */

function updateDateTime() {

  /** Get the current date and time */
  const currentDate = new Date();

  /** Custom options to change the format */
  const options = {
    weekday: 'long',    // full day name (e.g., Monday)
    year: 'numeric',    // 4-digit year (e.g., 2023)
    month: 'long',      // full month name (e.g., August)
    day: 'numeric',     // day of the month (e.g., 3)
    hour: 'numeric',    // 2-digit hour (e.g., 12)
    minute: 'numeric',  // 2-digit minute (e.g., 30)
    second: 'numeric',  // 2-digit second (e.g., 45)
    timeZoneName: 'short' // abbreviated time zone name (e.g., GMT, EST)
  };
  
  // Format the date and time as you desire
  const formattedDateTime = currentDate.toLocaleString("en-US", options); // Adjust formatting as needed
  
  // Update the content of the element in the footer
  const dateTimeElement = document.getElementById("currentDateTime");
  dateTimeElement.textContent = formattedDateTime;
}

updateDateTime();
setInterval(updateDateTime, 1000);
