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
        {firstName: 'Charles', lastName: 'Charlesforth', test: null, testKraj: null}
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
    init = function(element, valueAccessor, allBindings, viewModel, bindingContext) {
        // This will be called when the binding is first applied to an element
        // Set up any initial state, event handlers, etc. here

        self.active_team_checkbox = ko.observable();
        self.rules_team_checkbox = ko.observable();
        console.log(self.active_team_checkbox);
    };
    update =  function(element, valueAccessor, allBindings, viewModel, bindingContext) {
        // This will be called once when the binding is first applied to an element,
        // and again whenever any observables/computeds that are accessed change
        // Update the DOM element based on the supplied values here.
        // self.active_team_checkbox = ko.observable();
        // self.rules_team_checkbox = ko.observable();
    };
    init();

}


    ko.applyBindings(new TeamViewModel());
});