console.log('plik dla reacta i knouckaut.js');


document.addEventListener('DOMContentLoaded', function () {


function TeamViewModel() {// this is vievmodel

    const self = this;


    // var currentDate = (new Date()).toISOString().split('T')[0];
    // self.founded_team = ko.observable(currentDate);
    self.active_team_checkbox = ko.observable();
    self.rules_team_checkbox = ko.observable();

    self.people =  [
        { firstName: 'Bert', lastName: 'Bertington', test: 'test - data', testKraj: 'test - kraj' },
        { firstName: 'Charles', lastName: 'Charlesforth', test: null, testKraj: null },
        { firstName: 'Denise', lastName: 'Dentiste', test: null, testKraj: null }
    ];

    var counter = 0;
    self.isDisabled = ko.observable(false);

    self.block = function() {
        counter++;
         if (counter %2 === 0 ){
             self.isDisabled(false);
         }else {
             self.isDisabled(true);
         }
    };
//    bellow code make to test k.o. next time to delete
    coords =  {
        latitude:  51.5001524,
        longitude: -0.1262362
    };
}

// document.addEventListener('DOMContentLoaded', function () {
    ko.applyBindings(new TeamViewModel());
// });


})