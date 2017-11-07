$( document ).ready(function() {
console.log('test.js folder public');

   var deleteBtn = $('#deleteProfileBtn');

    deleteBtn.one('click', function(e) {
            // one times blocked to delete DATA PROFILES
        //    100% work 
        alert( ' UWAGA ! ' +
            'spowoduje to usunięcie wszystkich twoich danych');
        e.preventDefault();
    });


});