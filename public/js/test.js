$( document ).ready(function() {
console.log('blocked delete data profile //.js folder public');
// RENAME this file !!!!
   var deleteBtn = $('#deleteProfileBtn');

    deleteBtn.one('click', function(e) {
            // one times blocked to delete DATA PROFILES
        //    100% work
        alert( ' UWAGA ! ' +
            'spowoduje to usunięcie wszystkich twoich danych');
        e.preventDefault();
    });


});