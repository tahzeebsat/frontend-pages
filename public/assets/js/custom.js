// Dropdown show list while search item for car header

const searchInput = document.getElementById('searchInput');
        const suggestionsContainer = document.getElementById('suggestions');

        const keywords = [
            "Toyota Camry",
            "Honda Accord",
            "Ford Mustang",
            "Chevrolet Malibu",
            "Nissan Altima",
            "Volkswagen Jetta",
            "Hyundai Elantra",
            "Kia Optima"
        ];

        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase();
            suggestionsContainer.innerHTML = ''; // Clear previous suggestions

            if (query) {
                const filteredKeywords = keywords.filter(keyword => keyword.toLowerCase().includes(query));

                if (filteredKeywords.length) {
                    filteredKeywords.forEach(keyword => {
                        const suggestionItem = document.createElement('div');
                        suggestionItem.className = 'dropdown-item';
                        suggestionItem.textContent = keyword;
                        suggestionItem.onclick = function() {
                            searchInput.value = keyword; // Set input value on click
                            suggestionsContainer.innerHTML = ''; // Clear suggestions
                        };
                        suggestionsContainer.appendChild(suggestionItem);
                    });
                    suggestionsContainer.style.display = 'block'; // Show suggestions
                } else {
                    suggestionsContainer.style.display = 'none'; // Hide if no matches
                }
            } else {
                suggestionsContainer.style.display = 'none'; // Hide if input is empty
            }
        });

        // Hide suggestions when clicking outside
        document.addEventListener('click', function(e) {
            if (!searchInput.contains(e.target)) {
                suggestionsContainer.style.display = 'none';
            }
        });


// JavaScript to Select Ship To Flags dropdown options 

document.getElementById('dropdownSearch').addEventListener('input', function() {
    const searchValue = this.value.toLowerCase();
    const dropdownItems = document.querySelectorAll('.dropdown-menu .dropdown-item');

    dropdownItems.forEach(function(item) {
      const itemText = item.textContent.toLowerCase();
      if (itemText.includes(searchValue)) {
        item.style.display = 'block'; // Show matching item
      } else {
        item.style.display = 'none'; // Hide non-matching item
      }
    });
  });

  // Update button with selected flag
  const items = document.querySelectorAll('.ship-to .flag-select');
  items.forEach(item => {
    item.addEventListener('click', function() {
      const flag = this.getAttribute('data-flag');
      const imgSrc = this.getAttribute('data-img');
      const button = document.getElementById('dropdownMenuButton');
      const selectedFlagSpan = document.getElementById('selectedFlag');

      // Update button with only the flag image
      selectedFlagSpan.innerHTML = `<img src="${imgSrc}" alt="${flag}" style="width:24px; height:16px;">`;
debugger
      // Close dropdown after selection
      const dropdown = bootstrap.Dropdown.getInstance(button);
      dropdown.hide();
    });
  });



  // JavaScript to Select Currency dropdown options 
  const searchInputCurrency = document.getElementById('currencySearch');
  const dropdownItems = document.querySelectorAll('.dropdown-currency');

  searchInputCurrency.addEventListener('input', function () {
      const query = searchInputCurrency.value.toLowerCase();

      dropdownItems.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          if (text.includes(query)) {
              item.style.display = 'block';  // Show matching items
          } else {
              item.style.display = 'none';   // Hide non-matching items
          }
      });
  });

  // Handle selection of currency
  dropdownItems.forEach(function (item) {
      item.addEventListener('click', function () {
          const selectedCurrency = item.getAttribute('data-value');
          const selectedText = item.textContent.trim();

          document.getElementById('selectedCurrency').textContent = selectedText;  // Update button text
          searchInputCurrency.value = '';  // Clear the search input
          document.getElementById('currencyDropdown').classList.remove('show');  // Close the dropdown
      });
  });




// JS Language Select

  document.querySelectorAll('.dropdown-item.lang').forEach(item => {
    item.addEventListener('click', function() {
        const language = this.getAttribute('data-lang');
        debugger
        document.getElementById('selectedLanguage').textContent = language; // Update the button text
    });
});


// ========================= Start Hero Form Searches ======================

// ========================= Start Make Dropdown Search =========================
const searchInputMakeMenu = document.getElementById('makeForm');
const dropdownItemsMenu = document.querySelectorAll('.dropdown-make');

searchInputMakeMenu.addEventListener('input', function () {
    const query = searchInputMakeMenu.value.toLowerCase();

    dropdownItemsMenu.forEach(function (item) {
        const text = item.textContent.toLowerCase();
        if (text.includes(query)) {
            item.style.display = 'block';  // Show matching items
        } else {
            item.style.display = 'none';   // Hide non-matching items
        }
    });
});

// Handle selection of currency
dropdownItemsMenu.forEach(function (item) {
    item.addEventListener('click', function () {
        const selected = item.getAttribute('data-value');
        const selectedText = item.textContent.trim();

        document.getElementById('selectedMake').textContent = selectedText;  // Update button text
        searchInputMakeMenu.value = '';  // Clear the search input
        document.getElementById('makeDropdown').classList.remove('show');  // Close the dropdown
    });
});

// ========================= End Make Dropdown Search =========================


// ========================= Start Model Dropdown Search =========================
const searchInputModelMenu = document.getElementById('modelForm');
const dropdownItemsMenuModel = document.querySelectorAll('.dropdown-model');

searchInputModelMenu.addEventListener('input', function () {
    const query = searchInputModelMenu.value.toLowerCase();

    dropdownItemsMenuModel.forEach(function (item) {
        const text = item.textContent.toLowerCase();
        if (text.includes(query)) {
            item.style.display = 'block';  // Show matching items
        } else {
            item.style.display = 'none';   // Hide non-matching items
        }
    });
});

// Handle selection of currency
dropdownItemsMenuModel.forEach(function (item) {
    item.addEventListener('click', function () {
        const selected = item.getAttribute('data-value');
        const selectedText = item.textContent.trim();

        document.getElementById('selectedModel').textContent = selectedText;  // Update button text
        searchInputModelMenu.value = '';  // Clear the search input
        document.getElementById('modelDropdown').classList.remove('show');  // Close the dropdown
    });
});

// ========================= End Model Dropdown Search =========================


// ========================= Start Type Dropdown Search =========================
const searchInputTypeMenu = document.getElementById('typeForm');
const dropdownItemsMenuType = document.querySelectorAll('.dropdown-type');

searchInputTypeMenu.addEventListener('input', function () {
    const query = searchInputTypeMenu.value.toLowerCase();

    dropdownItemsMenuType.forEach(function (item) {
        const text = item.textContent.toLowerCase();
        if (text.includes(query)) {
            item.style.display = 'block';  // Show matching items
        } else {
            item.style.display = 'none';   // Hide non-matching items
        }
    });
});

// Handle selection of currency
dropdownItemsMenuType.forEach(function (item) {
    item.addEventListener('click', function () {
        const selected = item.getAttribute('data-value');
        const selectedText = item.textContent.trim();

        document.getElementById('selectedType').textContent = selectedText;  // Update button text
        searchInputTypeMenu.value = '';  // Clear the search input
        document.getElementById('typeDropdown').classList.remove('show');  // Close the dropdown
    });
});

// ========================= End Type Dropdown Search =========================


// ========================= Start Steering Dropdown Search =========================
const searchInputSteeringMenu = document.getElementById('steeringForm');
const dropdownItemsMenuSteering = document.querySelectorAll('.dropdown-steering');

searchInputSteeringMenu.addEventListener('input', function () {
    const query = searchInputSteeringMenu.value.toLowerCase();

    dropdownItemsMenuSteering.forEach(function (item) {
        const text = item.textContent.toLowerCase();
        if (text.includes(query)) {
            item.style.display = 'block';  // Show matching items
        } else {
            item.style.display = 'none';   // Hide non-matching items
        }
    });
});

// Handle selection of currency
dropdownItemsMenuSteering.forEach(function (item) {
    item.addEventListener('click', function () {
        const selected = item.getAttribute('data-value');
        const selectedText = item.textContent.trim();

        document.getElementById('selectedSteering').textContent = selectedText;  // Update button text
        searchInputSteeringMenu.value = '';  // Clear the search input
        document.getElementById('steeringDropdown').classList.remove('show');  // Close the dropdown
    });
});

// ========================= End Steering Dropdown Search =========================

// ========================= Start Steering Dropdown Search =========================
const searchInputMinYear = document.getElementById('minyearForm');
const dropdownItemsMinYear = document.querySelectorAll('.dropdown-minyear');

searchInputMinYear.addEventListener('input', function () {
    const query = searchInputMinYear.value.toLowerCase();

    dropdownItemsMinYear.forEach(function (item) {
        const text = item.textContent.toLowerCase();
        if (text.includes(query)) {
            item.style.display = 'block';  // Show matching items
        } else {
            item.style.display = 'none';   // Hide non-matching items
        }
    });
});

// Handle selection of currency
dropdownItemsMinYear.forEach(function (item) {
    item.addEventListener('click', function () {
        const selected = item.getAttribute('data-value');
        const selectedText = item.textContent.trim();

        document.getElementById('selectedMinYear').textContent = selectedText;  // Update button text
        searchInputMinYear.value = '';  // Clear the search input
        document.getElementById('minyearDropdown').classList.remove('show');  // Close the dropdown
    });
});

// ========================= End Steering Dropdown Search =========================


// ========================= Start Steering Dropdown Search =========================
const searchInputMaxYear = document.getElementById('maxyearForm');
const dropdownItemsMaxYear = document.querySelectorAll('.dropdown-maxyear');

searchInputMaxYear.addEventListener('input', function () {
    const query = searchInputMaxYear.value.toLowerCase();

    dropdownItemsMaxYear.forEach(function (item) {
        const text = item.textContent.toLowerCase();
        if (text.includes(query)) {
            item.style.display = 'block';  // Show matching items
        } else {
            item.style.display = 'none';   // Hide non-matching items
        }
    });
});

// Handle selection of currency
dropdownItemsMaxYear.forEach(function (item) {
    item.addEventListener('click', function () {
        const selected = item.getAttribute('data-value');
        const selectedText = item.textContent.trim();

        document.getElementById('selectedMaxYear').textContent = selectedText;  // Update button text
        searchInputMaxYear.value = '';  // Clear the search input
        document.getElementById('maxyearDropdown').classList.remove('show');  // Close the dropdown
    });
});

// ========================= End Steering Dropdown Search =========================
// ========================= End Hero Form Searches ======================




// ========================= Start Expand Country Home Section ======================

 document.addEventListener("DOMContentLoaded", function () {
    // Wait until the DOM is fully loaded before attaching the click handler
    const buyMoreBtn = document.getElementById('buyMoreBtn');
    const toggleFlags = document.getElementById('toggleFlags');
    const addIcon = document.getElementById('addIcon');
    const removeIcon = document.getElementById('removeIcon');
    const btnText = document.getElementById('btnText');

    // Debugging: Log the elements to see if they are found
    console.log("buyMoreBtn:", buyMoreBtn);
    console.log("toggleFlags:", toggleFlags);
    console.log("addIcon:", addIcon);
    console.log("removeIcon:", removeIcon);
    console.log("btnText:", btnText);

    // Check if any of the elements are not found
    if (!buyMoreBtn || !toggleFlags || !addIcon || !removeIcon || !btnText) {
        console.error("One or more elements are not found!");
        return;  // Exit early if any element is missing
    }

    // Attach the onclick handler
    buyMoreBtn.onclick = function () {
        // Check if the flags are visible or not
        if (toggleFlags.style.display === "none" || toggleFlags.style.display === "") {
            // Show flags and switch to "Show Less Countries"
            toggleFlags.style.display = "block";  // Show the flags
            removeIcon.style.display = "inline";  // Show the remove icon
            addIcon.style.display = "none";       // Hide the add icon
            btnText.innerHTML = '<span style="color: #2b9fe8;">Show Less Countries <img src="' + removeIcon.getAttribute('src') + '" alt="Remove Icon" class="img-fluid" loading="lazy">';
        } else {
            // Hide flags and switch back to "Show More Countries"
            toggleFlags.style.display = "none";   // Hide the flags
            addIcon.style.display = "inline";     // Show the add icon
            removeIcon.style.display = "none";    // Hide the remove icon
            btnText.innerHTML = 'Show More Countries <img src="' + addIcon.getAttribute('src') + '" alt="Add Circle Icon" class="img-fluid" loading="lazy">';
        }
       
    };
});





document.getElementById('showMoreCountries').addEventListener('click', function() {
    // Get the button and the container that shows the countries
    const button = document.getElementById('showMoreCountries');
    const countryList = document.querySelector('.toggle-2');

    // Toggle the visibility of the countries
    if (countryList.style.display === 'none' || countryList.style.display === '') {
        countryList.style.display = 'block';  // Show the list
        button.innerText = 'Hide Countries';  // Change button text to 'Hide'
    } else {
        countryList.style.display = 'none';  // Hide the list
        button.innerText = 'Show More Countries';  // Reset button text to 'Show More'
    }

    // After showing, remove the button
    button.style.display = 'none';
});
// ========================= End Expand Country Home Section ======================



// ========================= Start Swiper Js Section ======================

// ===================== Start Compare Price Cars Swipper =====================
var swiper = new Swiper('.compareSwiper', {
    slidesPerView: 2, // Default for mobile
    spaceBetween: 15, // Space between slides for mobile
    freeMode: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      // For mobile (below 640px)
      640: {
        slidesPerView: 2, // Single slide per view on mobile
        spaceBetween: 5, // Small space between slides
        freeMode: true, // Enable free mode for mobile
      },
      // For tablets (above 640px, up to 1024px)
      1024: {
        slidesPerView: 3, // Show 3 slides per view on desktop
        spaceBetween: 30, // Larger space between slides
        freeMode: false, // Disable free mode on larger screens
      },
    },
    loop: true, // Enable looping
    autoplay: false,
    touchEventsTarget: "container", // Ensure touch events are properly handled
  });


// ================== End Compare Price Cars Swipper ==================
  
// ================== Start Customer Review Swipper ==================
var swiper = new Swiper('.customerReviewSwiper', {
    slidesPerView: 2, // Default for mobile
    spaceBetween: 1, // Space between slides for mobile
    freeMode: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      // For mobile (below 640px)
      640: {
        slidesPerView: 2, // Single slide per view on mobile
        spaceBetween: 5, // Small space between slides
        freeMode: true, // Enable free mode for mobile
      },
      // For tablets (above 640px, up to 1024px)
      1024: {
        slidesPerView: 3, // Show 3 slides per view on desktop
        spaceBetween: 5, // Larger space between slides
        freeMode: false, // Disable free mode on larger screens
      },
    },
    loop: true, // Enable looping
    autoplay: false,
    touchEventsTarget: "container", // Ensure touch events are properly handled
  });


var swiper = new Swiper('.customerReviewSwiperMobile', {
    slidesPerView: 2, // Default for mobile
    spaceBetween: 1, // Space between slides for mobile
    freeMode: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    loop: true, // Enable looping
    autoplay: false,
    touchEventsTarget: "container", // Ensure touch events are properly handled
  });


// ================== End Customer Review Swipper ==================

// ================== Start Sell By Type Swipper ==================
var swiper = new Swiper('.sellByTypeSwiperMobile', {
  slidesPerView: 3, // Default for mobile
  spaceBetween: 1, // Space between slides for mobile
  freeMode: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  loop: true, // Enable looping
  autoplay: false,
  touchEventsTarget: "container", // Ensure touch events are properly handled
});
// ================== End Sell By Type Swipper ==================







// ================== Start Selling Car Swipper ==================
var swiper = new Swiper('.sellingCarSwiper', {
    slidesPerView: 3, // Default for mobile
    spaceBetween: 10, // Space between slides for mobile
    freeMode: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      // For mobile (below 640px)
      640: {
        slidesPerView: 3, // Single slide per view on mobile
        spaceBetween: 5, // Small space between slides
        freeMode: true, // Enable free mode for mobile
      },
      // For tablets (above 640px, up to 1024px)
      1024: {
        slidesPerView: 4, // Show 3 slides per view on desktop
        spaceBetween: 15, // Larger space between slides
        freeMode: false, // Disable free mode on larger screens
      },
    },
    loop: true, // Enable looping
    autoplay: false,
    touchEventsTarget: "container", // Ensure touch events are properly handled
  });
// ================== End Selling Car Swipper ==================



// ================== Start Recomended Car Swipper ==================
var swiper = new Swiper('.recomendedCarSwiper', {
  slidesPerView: 3, // Default for mobile
  spaceBetween: 10, // Space between slides for mobile
  freeMode: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    // For mobile (below 640px)
    640: {
      slidesPerView: 3, // Single slide per view on mobile
      spaceBetween: 5, // Small space between slides
      freeMode: true, // Enable free mode for mobile
    },
    // For tablets (above 640px, up to 1024px)
    1024: {
      slidesPerView: 4, // Show 3 slides per view on desktop
      spaceBetween: 15, // Larger space between slides
      freeMode: false, // Disable free mode on larger screens
    },
  },
  loop: true, // Enable looping
  autoplay: false,
  touchEventsTarget: "container", // Ensure touch events are properly handled
});
// ================== End Start Recomended Swipper ==================


// ================== Start Early Budget Swipper ==================
var swiper = new Swiper('.earlyBudget1Swiper', {
  slidesPerView: 3, // Default for mobile
  spaceBetween: 10, // Space between slides for mobile
  freeMode: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    // For mobile (below 640px)
    640: {
      slidesPerView: 3, // Single slide per view on mobile
      spaceBetween: 5, // Small space between slides
      freeMode: true, // Enable free mode for mobile
    },
    // For tablets (above 640px, up to 1024px)
    1024: {
      slidesPerView: 4, // Show 3 slides per view on desktop
      spaceBetween: 15, // Larger space between slides
      freeMode: false, // Disable free mode on larger screens
    },
  },
  loop: true, // Enable looping
  autoplay: false,
  touchEventsTarget: "container", // Ensure touch events are properly handled
});


var swiper = new Swiper('.earlyBudget2Swiper', {
  slidesPerView: 3, // Default for mobile
  spaceBetween: 10, // Space between slides for mobile
  freeMode: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    // For mobile (below 640px)
    640: {
      slidesPerView: 3, // Single slide per view on mobile
      spaceBetween: 5, // Small space between slides
      freeMode: true, // Enable free mode for mobile
    },
    // For tablets (above 640px, up to 1024px)
    1024: {
      slidesPerView: 4, // Show 3 slides per view on desktop
      spaceBetween: 15, // Larger space between slides
      freeMode: false, // Disable free mode on larger screens
    },
  },
  loop: true, // Enable looping
  autoplay: false,
  touchEventsTarget: "container", // Ensure touch events are properly handled
});


var swiper = new Swiper('.earlyBudget3Swiper', {
  slidesPerView: 3, // Default for mobile
  spaceBetween: 10, // Space between slides for mobile
  freeMode: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    // For mobile (below 640px)
    640: {
      slidesPerView: 3, // Single slide per view on mobile
      spaceBetween: 5, // Small space between slides
      freeMode: true, // Enable free mode for mobile
    },
    // For tablets (above 640px, up to 1024px)
    1024: {
      slidesPerView: 4, // Show 3 slides per view on desktop
      spaceBetween: 15, // Larger space between slides
      freeMode: false, // Disable free mode on larger screens
    },
  },
  loop: true, // Enable looping
  autoplay: false,
  touchEventsTarget: "container", // Ensure touch events are properly handled
});
// ================== End Early Budgeted Swipper ==================



// ================== Start Popular Car Swipper ==================


var swiper = new Swiper('.popularBrandSwiper', {
  slidesPerView: 1, // Default for mobile
  spaceBetween: 30, // Space between slides for mobile
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    // For mobile (below 640px)
    640: {
      slidesPerView: 1, // Single slide per view on mobile
      spaceBetween: 30, // Small space between slides
      freeMode: true, // Enable free mode for mobile
    },
    // For tablets (above 640px, up to 1024px)
    1024: {
      slidesPerView:1, // Show 3 slides per view on desktop
      spaceBetween: 0, // Larger space between slides
      freeMode: false, // Disable free mode on larger screens
    },
  },
  loop: true, // Enable looping
  autoplay: false,
  touchEventsTarget: "container", // Ensure touch events are properly handled
});


// ================= Mobile View Slider ====================


var swiper = new Swiper('.popularBrandSwiperMobile', {
  slidesPerView: 1, // Default for mobile
  spaceBetween: 10, // Space between slides for mobile
  autoplay: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  loop: true, // Enable looping
  autoplay: false,
  touchEventsTarget: "container", // Ensure touch events are properly handled
});




// ================== End Popular Car Swipper ==================

// ========================= End Swiper Js Section ======================



//================== Find My Car Model Js ============

// Multiselect Form JS

var currentStep = 1;
var updateProgressBar;

function displayStep(stepNumber) {
  if (stepNumber >= 1 && stepNumber <= 3) {
    $(".step-" + currentStep).hide();
    $(".step-" + stepNumber).show();
    currentStep = stepNumber;
    updateProgressBar();
  }
}

$(document).ready(function() {
  // Hide steps other than the first one
  $('#multi-step-form').find('.step').slice(1).hide();

  $(".next-step").click(function() {
    if (currentStep < 3) {
      $(".step-" + currentStep).hide();
      currentStep++;
      $(".step-" + currentStep).show();
      updateProgressBar();
    }
  });

  $(".prev-step").click(function() {
    if (currentStep > 1) {
      $(".step-" + currentStep).hide();
      currentStep--;
      $(".step-" + currentStep).show();
      updateProgressBar();
    }
  });

  updateProgressBar = function() {
    var progressPercentage = ((currentStep - 1) / 2) * 100;
    $(".progress-bar").css("width", progressPercentage + "%");
  };
});




// Multiselect Form Select Budeget JS

document.querySelectorAll('.budget-buttons button').forEach(button => {
  button.addEventListener('click', function() {
    // Check if the button is pressed or not
    if (this.getAttribute('aria-pressed') === 'true') {
      // Apply the pink background when active (checked)
      this.classList.add('btn-checked-change');
    } else {
      // Remove the pink background when inactive (unchecked)
      this.classList.remove('btn-checked-change');
    }
  });
});


// Multiselect Form Select Cars JS

// document.querySelectorAll('.country').forEach(function(countryDiv) {
//   countryDiv.addEventListener('click', function() {
//       // Remove the class from all country divs first
//       document.querySelectorAll('.country').forEach(function(div) {
//           div.classList.remove('selected-country');
//       });
      
//       // Add the class to the clicked div
//       this.classList.add('selected-country');
//   });
// });

// document.querySelectorAll('.select-car-find').forEach(function(countryDiv) {
//   countryDiv.addEventListener('click', function() {
//       // Remove the class from all country divs first
//       document.querySelectorAll('.select-car-find').forEach(function(div) {
//           div.classList.remove('selected-car');
//       });
      
//       // Add the class to the clicked div
//       this.classList.add('selected-car');
//   });
// });




