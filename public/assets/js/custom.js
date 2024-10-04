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

  document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', function() {
        const language = this.getAttribute('data-lang');
        document.getElementById('selectedLanguage').textContent = language; // Update the button text
    });
});