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

// Select2 Script

$(document).ready(function() {
    $("#single").select2({
        placeholder: "USD",
        allowClear: true,
        minimumResultsForSearch: 0, // Show search box
        templateResult: function (data) {
            return $('<span>' + data.text + '</span>'); // Display options
        },
        templateSelection: function (data) {
            return $('<span>' + data.text + '</span>'); // Display selected option
        }
    });
});



