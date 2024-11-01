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
document.addEventListener('DOMContentLoaded', function () {
  const searchInputMakeMenu = document.getElementById('makeForm');
  const dropdownItemsMenu = document.querySelectorAll('.dropdown-make');

  searchInputMakeMenu&&searchInputMakeMenu.addEventListener('input', function () {
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

  // Handle selection of make
  dropdownItemsMenu.forEach(function (item) {
      item.addEventListener('click', function () {
          const selected = item.getAttribute('data-value');
          const selectedText = item.textContent.trim();

          document.getElementById('selectedMake').textContent = selectedText;  // Update button text
          searchInputMakeMenu.value = '';  // Clear the search input
          document.getElementById('makeDropdown').classList.remove('show');  // Close the dropdown
      });
  });
});

// ========================= End Make Dropdown Search =========================


// ========================= Start Model Dropdown Search =========================
const searchInputModelMenu = document.getElementById('modelForm');
const dropdownItemsMenuModel = document.querySelectorAll('.dropdown-model');

searchInputModelMenu&&searchInputModelMenu.addEventListener('input', function () {
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

searchInputTypeMenu&&searchInputTypeMenu.addEventListener('input', function () {
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

searchInputSteeringMenu&&searchInputSteeringMenu.addEventListener('input', function () {
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

searchInputMinYear&&searchInputMinYear.addEventListener('input', function () {
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

searchInputMaxYear&&searchInputMaxYear.addEventListener('input', function () {
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

try{
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
}catch(error){}




try{
  
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
}catch(error){}
// ========================= End Expand Country Home Section ======================



// ========================= Start Swiper Js Section ======================



// ===================== Start Similar Cars Swipper =====================
var swiper = new Swiper('.similarCarSwiper', {
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
      slidesPerView: 5, // Show 3 slides per view on desktop
      spaceBetween: 10, // Larger space between slides
      freeMode: false, // Disable free mode on larger screens
    },
  },
  loop: true, // Enable looping
  autoplay: false,
  touchEventsTarget: "container", // Ensure touch events are properly handled
});


// ================== End Similar Car Swipper ==================


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


// ===================== Search Show More Advance

const toggleButton = document.getElementById('toggleButton');
const myForm = document.getElementById('myForm');

toggleButton&&toggleButton.addEventListener('click', function() {
    if (myForm.style.display === 'none' || myForm.style.display === '') {
        myForm.style.display = 'block'; // Show the form
        toggleButton.innerHTML = `View Additional Filters <i class="fas fa-chevron-up"></i>`; // Change button text
       
    } else {
        myForm.style.display = 'none'; // Hide the form
        toggleButton.innerHTML = `View Additional Filters <i class="fas fa-chevron-down"></i>`; // Change button text
    }
});


// ====================== list view and grid view for search page
const listViewButton = document.getElementById('listView');
const gridViewButton = document.getElementById('gridView');
const itemsContainer = document.getElementById('itemsContainer');

listViewButton&&listViewButton.addEventListener('click', () => {
    itemsContainer.classList.remove('grid-view');
    itemsContainer.classList.add('list-view');
    listViewButton.classList.add('active');
    gridViewButton.classList.remove('active');
});

gridViewButton&&gridViewButton.addEventListener('click', () => {
    itemsContainer.classList.remove('list-view');
    itemsContainer.classList.add('grid-view');
    gridViewButton.classList.add('active');
    listViewButton.classList.remove('active');
});



// select removeable

$(document).ready(function() {
  const selectElement = $('#mySelect');
  const closeIcon = $('#closeIcon');

  // Initialize Select2
  selectElement.select2({
      placeholder: "Honda",
      allowClear: true
  });

  // Show/hide the close icon based on the selected value
  selectElement.on('change', function() {
      if (selectElement.val()) {
          closeIcon.show(); // Show the close icon
      } else {
          closeIcon.hide(); // Hide the close icon
      }
  });

  // Close icon functionality
  closeIcon.on('click', function() {
      selectElement.val(null).trigger('change'); // Clear selection and trigger change
      closeIcon.hide(); // Hide the close icon
  });

  // Trigger change on initialization to set the icon visibility correctly
  selectElement.trigger('change');
});


// select2
$(document).ready(function () {
  $(".selection-search").select2();
});


// Intel Js
const itlinput = document.querySelector("#phone");

window.intlTelInput(itlinput);
if (itlinput) {
const iti = window.intlTelInput(itlinput);

$(itlinput).on("blur", function () {
console.log($(this).val());
const instance = window.intlTelInputGlobals.getInstance(itlinput);
const countryData = instance.getSelectedCountryData();
// country data like code and number
console.log(countryData);
// validation checker
const isValid = iti.isValidNumber();
if (isValid) {
console.log("Phone number is valid");
} else {
const error = iti.getValidationError();
console.log("Validation error:", error);
}
});
}


// view all and view less 

const toggleView = document.getElementById('toggleView');
  const toggleViewLess = document.getElementById('toggleViewLess');

  toggleView.addEventListener('click', () => {
    toggleView.style.display = 'none';
    toggleViewLess.style.display = 'block';
  });

  toggleViewLess.addEventListener('click', () => {
    toggleView.style.display = 'block';
    toggleViewLess.style.display = 'none';
  });


 
  // Filter Offcanvas for search page
  function showsidebar() {
    const body = document.body;
    const sidebar = document.querySelector(".sidebarcanvasfilters");
    sidebar.classList.add("activesidebar-filters");
    body.classList.add("no-scroll");
  }
  function hidesidebar() {
    const body = document.body;
    const sidebar = document.querySelector(".sidebarcanvasfilters");
    sidebar.classList.remove("activesidebar-filters");
    body.classList.remove("no-scroll");
  }



  // offcanvas search input make filter search for search page mobile
  document.addEventListener('DOMContentLoaded', function () {
    const makeFilterSearch = document.getElementById('makeFilterSearch');
    const searchList = document.querySelectorAll('#makeFilterList li'); // Target list items directly

    makeFilterSearch&&makeFilterSearch.addEventListener('input', function () {
        const query = makeFilterSearch.value.toLowerCase();

        searchList.forEach(function (item) {
            const text = item.textContent.toLowerCase();
            item.style.display = text.includes(query) ? 'block' : 'none'; // Show/hide based on query
        });
    });

    // Handle selection of make
    searchList.forEach(function (item) {
        item&&item.addEventListener('click', function () {
            const selectedText = item.textContent.trim();
            makeFilterSearch.value = selectedText; // Update search input with selected text
            makeFilterSearch.dispatchEvent(new Event('input')); // Trigger input event to hide non-matching items
        });
    });
});


// offcanvas search input modal filter search for search page mobile
document.addEventListener('DOMContentLoaded', function () {
  const modalFilterSearch = document.getElementById('modalFilterSearch');
  const modalsearchList = document.querySelectorAll('#modalFilterList li'); // Target list items directly

  modalFilterSearch&&modalFilterSearch.addEventListener('input', function () {
      const query = modalFilterSearch.value.toLowerCase();

      modalsearchList.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          item.style.display = text.includes(query) ? 'block' : 'none'; // Show/hide based on query
      });
  });

  // Handle selection of make
  modalsearchList.forEach(function (item) {
      item&&item.addEventListener('click', function () {
          const selectedText = item.textContent.trim();
          modalFilterSearch.value = selectedText; // Update search input with selected text
          modalFilterSearch.dispatchEvent(new Event('input')); // Trigger input event to hide non-matching items
      });
  });
});


// offcanvas search input steering filter search for search page mobile
document.addEventListener('DOMContentLoaded', function () {
  const steeringFilterSearch = document.getElementById('steeringFilterSearch');
  const steeringsearchList = document.querySelectorAll('#steeringFilterList li'); // Target list items directly

  steeringFilterSearch&&steeringFilterSearch.addEventListener('input', function () {
      const query = steeringFilterSearch.value.toLowerCase();

      steeringsearchList.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          item.style.display = text.includes(query) ? 'block' : 'none'; // Show/hide based on query
      });
  });

  // Handle selection of make
  steeringsearchList.forEach(function (item) {
      item&&item.addEventListener('click', function () {
          const selectedText = item.textContent.trim();
          steeringFilterSearch.value = selectedText; // Update search input with selected text
          steeringFilterSearch.dispatchEvent(new Event('input')); // Trigger input event to hide non-matching items
      });
  });
});


// offcanvas search input transmission filter search for search page mobile
document.addEventListener('DOMContentLoaded', function () {
  const transmissionFilterSearch = document.getElementById('transmissionFilterSearch');
  const transmissionsearchList = document.querySelectorAll('#transmissionFilterList li'); // Target list items directly

  transmissionFilterSearch&&transmissionFilterSearch.addEventListener('input', function () {
      const query = transmissionFilterSearch.value.toLowerCase();

      transmissionsearchList.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          item.style.display = text.includes(query) ? 'block' : 'none'; // Show/hide based on query
      });
  });

  // Handle selection of make
  transmissionsearchList.forEach(function (item) {
      item&&item.addEventListener('click', function () {
          const selectedText = item.textContent.trim();
          transmissionFilterSearch.value = selectedText; // Update search input with selected text
          transmissionFilterSearch.dispatchEvent(new Event('input')); // Trigger input event to hide non-matching items
      });
  });
});


// offcanvas search input engine size filter search for search page mobile
document.addEventListener('DOMContentLoaded', function () {
  const enginesizeFilterSearch = document.getElementById('enginesizeFilterSearch');
  const enginesizesearchList = document.querySelectorAll('#enginesizeFilterList li'); // Target list items directly

  enginesizeFilterSearch&&enginesizeFilterSearch.addEventListener('input', function () {
      const query = enginesizeFilterSearch.value.toLowerCase();

      enginesizesearchList.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          item.style.display = text.includes(query) ? 'block' : 'none'; // Show/hide based on query
      });
  });

  // Handle selection of make
  enginesizesearchList.forEach(function (item) {
      item&&item.addEventListener('click', function () {
          const selectedText = item.textContent.trim();
          enginesizeFilterSearch.value = selectedText; // Update search input with selected text
          enginesizeFilterSearch.dispatchEvent(new Event('input')); // Trigger input event to hide non-matching items
      });
  });
});


// offcanvas search input fuel filter search for search page mobile
document.addEventListener('DOMContentLoaded', function () {
  const fuelFilterSearch = document.getElementById('fuelFilterSearch');
  const fuelsearchList = document.querySelectorAll('#fuelFilterList li'); // Target list items directly

  fuelFilterSearch&&fuelFilterSearch.addEventListener('input', function () {
      const query = fuelFilterSearch.value.toLowerCase();

      fuelsearchList.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          item.style.display = text.includes(query) ? 'block' : 'none'; // Show/hide based on query
      });
  });

  // Handle selection of make
  fuelsearchList.forEach(function (item) {
      item&&item.addEventListener('click', function () {
          const selectedText = item.textContent.trim();
          fuelFilterSearch.value = selectedText; // Update search input with selected text
          fuelFilterSearch.dispatchEvent(new Event('input')); // Trigger input event to hide non-matching items
      });
  });
});

// offcanvas search input body type search for search page mobile
document.addEventListener('DOMContentLoaded', function () {
  const bodytypeFilterSearch = document.getElementById('bodytypeFilterSearch');
  const bodytypesearchList = document.querySelectorAll('#bodytypeFilterList li'); // Target list items directly

  bodytypeFilterSearch&&bodytypeFilterSearch.addEventListener('input', function () {
      const query = bodytypeFilterSearch.value.toLowerCase();

      bodytypesearchList.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          item.style.display = text.includes(query) ? 'block' : 'none'; // Show/hide based on query
      });
  });

  // Handle selection of make
  bodytypesearchList.forEach(function (item) {
      item&&item.addEventListener('click', function () {
          const selectedText = item.textContent.trim();
          bodytypeFilterSearch.value = selectedText; // Update search input with selected text
          bodytypeFilterSearch.dispatchEvent(new Event('input')); // Trigger input event to hide non-matching items
      });
  });
});


// offcanvas search input model code search for search page mobile
document.addEventListener('DOMContentLoaded', function () {
  const modelcodeFilterSearch = document.getElementById('modelcodeFilterSearch');
  const modelcodesearchList = document.querySelectorAll('#modelcodeFilterList li'); // Target list items directly

  modelcodeFilterSearch&&modelcodeFilterSearch.addEventListener('input', function () {
      const query = modelcodeFilterSearch.value.toLowerCase();

      modelcodesearchList.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          item.style.display = text.includes(query) ? 'block' : 'none'; // Show/hide based on query
      });
  });

  // Handle selection of make
  modelcodesearchList.forEach(function (item) {
      item&&item.addEventListener('click', function () {
          const selectedText = item.textContent.trim();
          modelcodeFilterSearch.value = selectedText; // Update search input with selected text
          modelcodeFilterSearch.dispatchEvent(new Event('input')); // Trigger input event to hide non-matching items
      });
  });
});



// offcanvas search input location search for search page mobile
document.addEventListener('DOMContentLoaded', function () {
  const locationFilterSearch = document.getElementById('locationFilterSearch');
  const locationsearchList = document.querySelectorAll('#locationFilterList li'); // Target list items directly

  locationFilterSearch&&locationFilterSearch.addEventListener('input', function () {
      const query = locationFilterSearch.value.toLowerCase();

      locationsearchList.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          item.style.display = text.includes(query) ? 'block' : 'none'; // Show/hide based on query
      });
  });

  // Handle selection of make
  locationsearchList.forEach(function (item) {
      item&&item.addEventListener('click', function () {
          const selectedText = item.textContent.trim();
          locationFilterSearch.value = selectedText; // Update search input with selected text
          locationFilterSearch.dispatchEvent(new Event('input')); // Trigger input event to hide non-matching items
      });
  });
});


// offcanvas search input colour search for search page mobile
document.addEventListener('DOMContentLoaded', function () {
  const colourFilterSearch = document.getElementById('colourFilterSearch');
  const coloursearchList = document.querySelectorAll('#colourFilterList li'); // Target list items directly

  colourFilterSearch&&colourFilterSearch.addEventListener('input', function () {
      const query = colourFilterSearch.value.toLowerCase();

      coloursearchList.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          item.style.display = text.includes(query) ? 'block' : 'none'; // Show/hide based on query
      });
  });

  // Handle selection of make
  coloursearchList.forEach(function (item) {
      item&&item.addEventListener('click', function () {
          const selectedText = item.textContent.trim();
          colourFilterSearch.value = selectedText; // Update search input with selected text
          colourFilterSearch.dispatchEvent(new Event('input')); // Trigger input event to hide non-matching items
      });
  });
});


// offcanvas search input colour search for search page mobile
document.addEventListener('DOMContentLoaded', function () {
  const drivetrainFilterSearch = document.getElementById('drivetrainFilterSearch');
  const drivetrainsearchList = document.querySelectorAll('#drivetrainFilterList li'); // Target list items directly

  drivetrainFilterSearch&&drivetrainFilterSearch.addEventListener('input', function () {
      const query = drivetrainFilterSearch.value.toLowerCase();

      drivetrainsearchList.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          item.style.display = text.includes(query) ? 'block' : 'none'; // Show/hide based on query
      });
  });

  // Handle selection of make
  drivetrainsearchList.forEach(function (item) {
      item&&item.addEventListener('click', function () {
          const selectedText = item.textContent.trim();
          drivetrainFilterSearch.value = selectedText; // Update search input with selected text
          drivetrainFilterSearch.dispatchEvent(new Event('input')); // Trigger input event to hide non-matching items
      });
  });
});


// offcanvas search input seats search for search page mobile
document.addEventListener('DOMContentLoaded', function () {
  const seatsFilterSearch = document.getElementById('seatsFilterSearch');
  const seatssearchList = document.querySelectorAll('#seatsFilterList li'); // Target list items directly

  seatsFilterSearch&&seatsFilterSearch.addEventListener('input', function () {
      const query = seatsFilterSearch.value.toLowerCase();

      seatssearchList.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          item.style.display = text.includes(query) ? 'block' : 'none'; // Show/hide based on query
      });
  });

  // Handle selection of make
  seatssearchList.forEach(function (item) {
      item&&item.addEventListener('click', function () {
          const selectedText = item.textContent.trim();
          seatsFilterSearch.value = selectedText; // Update search input with selected text
          seatsFilterSearch.dispatchEvent(new Event('input')); // Trigger input event to hide non-matching items
      });
  });
});



// Filter For Search Items Using Jquery

$(document).ready(function () {
  function updateButtonText() {
      // Update button text for make filter
      if ($('.selectedItemsList li[data-type="make"]').length > 0) {
          $('.make-filter-selected').html('Selected <i class="fa fa-chevron-down"></i>');
      } else {
          $('.make-filter-selected').html('Select <i class="fa fa-chevron-down"></i>');
      }

      // Update button text for modal filter
      if ($('.selectedItemsList li[data-type="modal"]').length > 0) {
          $('.model-filter-selected').html('Selected <i class="fa fa-chevron-down"></i>');
      } else {
          $('.model-filter-selected').html('Select <i class="fa fa-chevron-down"></i>');
      }

       // Update button text for modal code filter
       if ($('.selectedItemsList li[data-type="mc"]').length > 0) {
        $('.mc-filter-selected').html('Selected <i class="fa fa-chevron-down"></i>');
    } else {
        $('.mc-filter-selected').html('Select <i class="fa fa-chevron-down"></i>');
    }

       // Update button text for steering code filter
       if ($('.selectedItemsList li[data-type="steering"]').length > 0) {
        $('.steering-filter-selected').html('Selected <i class="fa fa-chevron-down"></i>');
    } else {
        $('.steering-filter-selected').html('Select <i class="fa fa-chevron-down"></i>');
    }
       // Update button text for transmission code filter
       if ($('.selectedItemsList li[data-type="transmission"]').length > 0) {
        $('.transmission-filter-selected').html('Selected <i class="fa fa-chevron-down"></i>');
    } else {
        $('.transmission-filter-selected').html('Select <i class="fa fa-chevron-down"></i>');
    }
       // Update button text for eng size code filter
       if ($('.selectedItemsList li[data-type="engsize"]').length > 0) {
        $('.engsize-filter-selected').html('Selected <i class="fa fa-chevron-down"></i>');
    } else {
        $('.engsize-filter-selected').html('Select <i class="fa fa-chevron-down"></i>');
    }
       // Update button text for fuel code filter
       if ($('.selectedItemsList li[data-type="fuel"]').length > 0) {
        $('.fuel-filter-selected').html('Selected <i class="fa fa-chevron-down"></i>');
    } else {
        $('.fuel-filter-selected').html('Select <i class="fa fa-chevron-down"></i>');
    }

    // Update button text for bodytype code filter
    if ($('.selectedItemsList li[data-type="bodytype"]').length > 0) {
      $('.bodytype-filter-selected').html('Selected <i class="fa fa-chevron-down"></i>');
  } else {
      $('.bodytype-filter-selected').html('Select <i class="fa fa-chevron-down"></i>');
  }
  // Update button text for Seats code filter
    if ($('.selectedItemsList li[data-type="seats"]').length > 0) {
      $('.seats-filter-selected').html('Selected <i class="fa fa-chevron-down"></i>');
      } else {
      $('.seats-filter-selected').html('Select <i class="fa fa-chevron-down"></i>');
    }

    // Update button text for Location code filter
    if ($('.selectedItemsList li[data-type="location"]').length > 0) {
      $('.location-filter-selected').html('Selected <i class="fa fa-chevron-down"></i>');
      } else {
      $('.location-filter-selected').html('Select <i class="fa fa-chevron-down"></i>');
    }
     // Update button text for Color code filter
     if ($('.selectedItemsList li[data-type="colour"]').length > 0) {
      $('.colour-filter-selected').html('Selected <i class="fa fa-chevron-down"></i>');
      } else {
      $('.colour-filter-selected').html('Select <i class="fa fa-chevron-down"></i>');
    }

    // Update button text for Drivetrain code filter
    if ($('.selectedItemsList li[data-type="drivetrain"]').length > 0) {
      $('.drivetrain-filter-selected').html('Selected <i class="fa fa-chevron-down"></i>');
      } else {
      $('.drivetrain-filter-selected').html('Select <i class="fa fa-chevron-down"></i>');
    }
  }


  // Handle click on filter list items (main filter)
  $('.makeFilterList li').on('click', function () {
      var make = $(this).data('make');
      var value = $(this).data('value');

      // Clear previous selection from the main filter
      $('.selectedItemsList li[data-type="make"]').remove();

      // Append selected item to the selected items list
      $('.selectedItemsList').append(
          '<li data-value="' + value + '" data-type="make">' + make + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
      );

      // Update button text after selection
      updateButtonText();
  });

  

  // Handle click on filter list items (modal filter)
  $('.modalFilterList li').on('click', function () {
      var make = $(this).data('make');
      var value = $(this).data('value');

      // Clear previous selection from the modal filter
      $('.selectedItemsList li[data-type="modal"]').remove();

      // Append selected item to the selected items list
      $('.selectedItemsList').append(
          '<li data-value="' + value + '" data-type="modal">' + make + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
      );

      // Update button text after selection
      updateButtonText();
  });

  // Handle click on filter list items (modalcode filter)
  $('.modelcodeFilterList li').on('click', function () {
    var make = $(this).data('make');
    var value = $(this).data('value');

    // Clear previous selection from the modal filter
    $('.selectedItemsList li[data-type="mc"]').remove();

    // Append selected item to the selected items list
    $('.selectedItemsList').append(
        '<li data-value="' + value + '" data-type="mc">' + make + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
    );

    // Update button text after selection
    updateButtonText();
});

 // Handle click on filter list items (steering filter)
 $('.steeringFilterList li').on('click', function () {
  var make = $(this).data('make');
  var value = $(this).data('value');

  // Clear previous selection from the steering filter
  $('.selectedItemsList li[data-type="steering"]').remove();

  // Append selected item to the selected items list
  $('.selectedItemsList').append(
      '<li data-value="' + value + '" data-type="steering">' + make + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
  );

  // Update button text after selection
  updateButtonText();
});


 // Handle click on filter list items (transmission filter)
 $('.transmissionFilterList li').on('click', function () {
  var make = $(this).data('make');
  var value = $(this).data('value');

  // Clear previous selection from the transmission filter
  $('.selectedItemsList li[data-type="transmission"]').remove();

  // Append selected item to the selected items list
  $('.selectedItemsList').append(
      '<li data-value="' + value + '" data-type="transmission">' + make + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
  );

  // Update button text after selection
  updateButtonText();
});

 // Handle click on filter list items (engine size filter)
 $('.enginesizeFilterList li').on('click', function () {
  var make = $(this).data('make');
  var value = $(this).data('value');

  // Clear previous selection from the engine size filter
  $('.selectedItemsList li[data-type="engsize"]').remove();

  // Append selected item to the selected items list
  $('.selectedItemsList').append(
      '<li data-value="' + value + '" data-type="engsize">' + make + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
  );

  // Update button text after selection
  updateButtonText();
});

 // Handle click on filter list items (Fuel filter)
 $('.fuelFilterList li').on('click', function () {
  var make = $(this).data('make');
  var value = $(this).data('value');

  // Clear previous selection from the engine size filter
  $('.selectedItemsList li[data-type="fuel"]').remove();

  // Append selected item to the selected items list
  $('.selectedItemsList').append(
      '<li data-value="' + value + '" data-type="fuel">' + make + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
  );

  // Update button text after selection
  updateButtonText();
});

 // Handle click on filter list items (Body Type filter)
 $('.bodytypeFilterList li').on('click', function () {
  var make = $(this).data('make');
  var value = $(this).data('value');

  // Clear previous selection from the engine size filter
  $('.selectedItemsList li[data-type="bodytype"]').remove();

  // Append selected item to the selected items list
  $('.selectedItemsList').append(
      '<li data-value="' + value + '" data-type="bodytype">' + make + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
  );

  // Update button text after selection
  updateButtonText();
});

 // Handle click on filter list items (Seats filter)
 $('.seatsFilterList li').on('click', function () {
  var make = $(this).data('make');
  var value = $(this).data('value');

  // Clear previous selection from the Seats filter
  $('.selectedItemsList li[data-type="seats"]').remove();

  // Append selected item to the selected items list
  $('.selectedItemsList').append(
      '<li data-value="' + value + '" data-type="seats">' + make + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
  );

  // Update button text after selection
  updateButtonText();
});


 // Handle click on filter list items (Location filter)
 $('.locationFilterList li').on('click', function () {
  var make = $(this).data('make');
  var value = $(this).data('value');

  // Clear previous selection from the Seats filter
  $('.selectedItemsList li[data-type="location"]').remove();

  // Append selected item to the selected items list
  $('.selectedItemsList').append(
      '<li data-value="' + value + '" data-type="location">' + make + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
  );

  // Update button text after selection
  updateButtonText();
});


 // Handle click on filter list items (Colour filter)
 $('.colourFilterList li').on('click', function () {
  var make = $(this).data('make');
  var value = $(this).data('value');

  // Clear previous selection from the Seats filter
  $('.selectedItemsList li[data-type="colour"]').remove();

  // Append selected item to the selected items list
  $('.selectedItemsList').append(
      '<li data-value="' + value + '" data-type="colour">' + make + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
  );

  // Update button text after selection
  updateButtonText();
});

// Handle click on filter list items (Drivetrain filter)
$('.drivetrainFilterList li').on('click', function () {
  var make = $(this).data('make');
  var value = $(this).data('value');

  // Clear previous selection from the Seats filter
  $('.selectedItemsList li[data-type="drivetrain"]').remove();

  // Append selected item to the selected items list
  $('.selectedItemsList').append(
      '<li data-value="' + value + '" data-type="drivetrain">' + make + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
  );

  // Update button text after selection
  updateButtonText();
});


// Checkbox change event handler
$('.form-check-input').change(function () {
  const checkboxValue = $(this).val();
  
  if ($(this).is(':checked')) {
      // Append selected item to the selected items list
      $('.selectedItemsList').append(
          '<li data-value="' + checkboxValue + '">' + checkboxValue + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
      );
  } else {
      // Remove the item from the selected items list if unchecked
      $('.selectedItemsList li[data-value="' + checkboxValue + '"]').remove();
  }

  // Update button text after selection
  updateButtonText();
});

$('.selectedItemsList').on('click', '.remove-item', function () {
  const valueToRemove = $(this).parent().data('value');
  
  // Uncheck the corresponding checkbox
  $('.form-check-input[value="' + valueToRemove + '"]').prop('checked', false);
  
  // Remove the item from the selected items list
  $(this).parent().remove();
  
  // Update button text after removal
  updateButtonText();
});


 // =================== Start Min Year and Max Year Filter Select ===========

 $('.selectMinYear').change(function () {
  const minYearValue = $(this).val();
  const maxYearOptions = $('.selectMaxYear option');
  let highestValue = null;

  maxYearOptions.each(function () {
      if ($(this).val() > minYearValue) {
          if (!highestValue || $(this).val() > highestValue) {
              highestValue = $(this).val();
          }
      }
  });

  if (highestValue) {
      $('.selectMaxYear').val(highestValue);
  } else {
      $('.selectMaxYear').prop('selectedIndex', 0);
  }

  updateYearRange();
});

$('.selectMaxYear').change(function () {
  updateYearRange();
});

function updateYearRange() {
  $('.selectedItemsList li[data-type="yearRange"]').remove();
  const minYearValue = $('.selectMinYear').val();
  const maxYearValue = $('.selectMaxYear').val();

  if (minYearValue !== "Min Year" && maxYearValue !== "Max Year") {
      $('.selectedItemsList').append(
          '<li data-value="' + minYearValue + ' to ' + maxYearValue + '" data-type="yearRange">' + minYearValue + ' to ' + maxYearValue + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
      );
  }

  updateButtonText();
}


// =================== Start Min Price and Max Price Filter Select ===========

$('.selectMinPrice').change(function () {
  const minPriceValue = $(this).val();
  const maxPriceOptions = $('.selectMaxPrice option');
  let highestValue = null;

  maxPriceOptions.each(function () {
      if ($(this).val() > minPriceValue) {
          if (!highestValue || $(this).val() > highestValue) {
              highestValue = $(this).val();
          }
      }
  });

  if (highestValue) {
      $('.selectMaxPrice').val(highestValue);
  } else {
      $('.selectMaxPrice').prop('selectedIndex', 0);
  }

  updatePriceRange();
});

$('.selectMaxPrice').change(function () {
  updatePriceRange();
});

function updatePriceRange() {
  $('.selectedItemsList li[data-type="priceRange"]').remove();
  const minPriceValue = $('.selectMinPrice').val();
  const maxPriceValue = $('.selectMaxPrice').val();

  if (minPriceValue !== "Min Price" && maxPriceValue !== "Max Price") {
      $('.selectedItemsList').append(
          '<li data-value="' + minPriceValue + ' to ' + maxPriceValue + '" data-type="priceRange">' + minPriceValue + ' to ' + maxPriceValue + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
      );
  }

  updateButtonText();
}

// =================== Start Min Capacity and Max Capacity Filter Select ===========

$('.selectMinCapacity').change(function () {
  const minCapacityValue = $(this).val();
  const maxCapacityOptions = $('.selectMaxCapacity option');
  let highestValue = null;

  maxCapacityOptions.each(function () {
      if ($(this).val() > minCapacityValue) {
          if (!highestValue || $(this).val() > highestValue) {
              highestValue = $(this).val();
          }
      }
  });

  if (highestValue) {
      $('.selectMaxCapacity').val(highestValue);
  } else {
      $('.selectMaxCapacity').prop('selectedIndex', 0);
  }

  updateCapacityRange();
});

$('.selectMaxCapacity').change(function () {
  updateCapacityRange();
});

function updateCapacityRange() {
  $('.selectedItemsList li[data-type="capacityRange"]').remove();
  const minCapacityValue = $('.selectMinCapacity').val();
  const maxCapacityValue = $('.selectMaxCapacity').val();

  if (minCapacityValue !== "Min Capacity" && maxCapacityValue !== "Max Capacity") {
      $('.selectedItemsList').append(
          '<li data-value="' + minCapacityValue + ' to ' + maxCapacityValue + '" data-type="capacityRange">' + minCapacityValue + ' to ' + maxCapacityValue + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
      );
  }

  updateButtonText();
}

// =================== Start Min Mileage and Max Mileage Filter Select ===========

$('.selectMinMileage').change(function () {
  const minMileageValue = $(this).val();
  const maxMileageOptions = $('.selectMaxMileage option');
  let highestValue = null;

  maxMileageOptions.each(function () {
      if ($(this).val() > minMileageValue) {
          if (!highestValue || $(this).val() > highestValue) {
              highestValue = $(this).val();
          }
      }
  });

  if (highestValue) {
      $('.selectMaxMileage').val(highestValue);
  } else {
      $('.selectMaxMileage').prop('selectedIndex', 0);
  }

  updateMileageRange();
});

$('.selectMaxMileage').change(function () {
  updateMileageRange();
});

function updateMileageRange() {
  $('.selectedItemsList li[data-type="mileageRange"]').remove();
  const minMileageValue = $('.selectMinMileage').val();
  const maxMileageValue = $('.selectMaxMileage').val();

  if (minMileageValue !== "Min Mileage" && maxMileageValue !== "Max Mileage") {
      $('.selectedItemsList').append(
          '<li data-value="' + minMileageValue + ' to ' + maxMileageValue + '" data-type="mileageRange">' + minMileageValue + ' to ' + maxMileageValue + ' <span class="remove-item" style="cursor: pointer;color: #154f74;font-size:16px;font-weight:bold;">&times;</span></li>'
      );
  }

  updateButtonText();
}

// Handle removal of selected items
$('.selectedItemsList').on('click', '.remove-item', function () {
  const valueToRemove = $(this).parent().data('value');
  $(this).parent().remove();

  // Reset select boxes to defaults based on type
  if ($(this).parent().data('type') === "yearRange") {
      $('.selectMinYear').prop('selectedIndex', 0);
      $('.selectMaxYear').prop('selectedIndex', 0);
  } else if ($(this).parent().data('type') === "priceRange") {
      $('.selectMinPrice').prop('selectedIndex', 0);
      $('.selectMaxPrice').prop('selectedIndex', 0);
  } else if ($(this).parent().data('type') === "capacityRange") {
      $('.selectMinCapacity').prop('selectedIndex', 0);
      $('.selectMaxCapacity').prop('selectedIndex', 0);
  } else if ($(this).parent().data('type') === "mileageRange") {
      $('.selectMinMileage').prop('selectedIndex', 0);
      $('.selectMaxMileage').prop('selectedIndex', 0);
  }

  updateButtonText();
});



  // Handle removal of selected items
  $('.selectedItemsList').on('click', '.remove-item', function () {
      $(this).parent().remove();
      // Update button text after removal
      updateButtonText();
  });

  // Initial state check on page load
  updateButtonText();
});