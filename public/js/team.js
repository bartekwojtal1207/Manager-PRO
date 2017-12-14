console.log('plik dla reacta i knouckaut.js');


document.addEventListener('DOMContentLoaded', function () {


function TeamViewModel() {// this is vievmodel

    const self = this;
    var currentDate = (new Date()).toISOString().split('T')[0],
        counter = 0;

    self.founded_team = ko.observable(currentDate);
    self.active_team_checkbox = ko.observable();
    self.rules_team_checkbox = ko.observable();

    self.people = [
        {firstName: 'Bert', lastName: 'Bertington', test: 'test - data', testKraj: 'test - kraj'},
        {firstName: 'Charles', lastName: 'Charlesforth', test: null, testKraj: null},
        {firstName: 'Denise', lastName: 'Dentiste', test: null, testKraj: null},
        {firstName: 'Bert', lastName: 'Bertington', test: 'test - data', testKraj: 'test - kraj'},
        {firstName: 'Charles', lastName: 'Charlesforth', test: null, testKraj: null},
        {firstName: 'Denise', lastName: 'Dentiste', test: null, testKraj: null}
    ];

    self.isDisabled = ko.observable(false);

    self.block = function () {
        counter++;
        // raczej niepotrzebne do usuniecia tutaj i w team/index.blade.php
        if (counter % 2 === 0) {
            self.isDisabled(false);
        } else {
            self.isDisabled(true);
        }
    };

}


    ko.applyBindings(new TeamViewModel());
});