document.getElementById("apply-filters").addEventListener("click", function() {
    var selectedDay = document.querySelector("input[name='date']").value;
    var selectedTimes = Array.from(document.querySelectorAll("input[name='timeOfDay']:checked")).map(checkbox => checkbox.value);
    var selectedDuration = Array.from(document.querySelectorAll("input[name='duration']:checked")).map(checkbox => checkbox.value);
    var selectedPrice = document.getElementById("priceRange").value;

    document.querySelectorAll('.tour').forEach(function(tour) {
        var tourDate = tour.getAttribute('data-date'); // Example date attribute
        var tourTime = tour.getAttribute('data-time'); // Example time attribute
        var tourDuration = tour.getAttribute('data-duree');
        var tourPrice = tour.getAttribute('data-price');

        var showTour = true; // Set visibility based on filter logic

        // Add your logic to filter the walks based on selected filters
        // Example logic for filtering based on date, time, etc.
        
        if (showTour) {
            tour.style.display = 'block';
        } else {
            tour.style.display = 'none';
        }
    });
});

