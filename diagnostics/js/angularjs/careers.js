var careerapp = angular.module('careerApp', []);

careerapp.controller("careerCtrl", function ($scope, $http) {
   /*$scope.careers = [
       {name: 'Bioinformatics Trainee', type: 'bioinformatics' },
       {name: 'Bioinformatics Analyst', type: 'bioinformatics'},
       {name: 'Bioinformatics Senior Analyst', type: 'it'},
       {name: 'Bioinformatics Scientist', type: 'bioinformatics'},
       {name: 'Biostatistician', type: 'marketing'}
   ]*/
    var mainInfo = $http.get('json/careers.json').success(function(response) {
        $scope.careers = response.careers;
    });
})

careerapp.filter('bioInformatics', function () {
   return function (input) {
       var result = [];
       angular.forEach(input, function (careerType) {
           if(careerType.type === 'bioinformatics' && careerType.url!=""){
                result.push(careerType);
           }
       })
       return result;
   }
});

careerapp.filter('it', function () {
    return function (input) {
        var result = [];
        angular.forEach(input, function (careerType) {
            if(careerType.type === 'it' && careerType.url!=""){
                result.push(careerType);
            }
        })
        return result;
    }
});

careerapp.filter('LabOperations', function () {
    return function (input) {
        var result = [];
        angular.forEach(input, function (careerType) {
            if(careerType.type === 'laboperations' && careerType.url!=""){
                result.push(careerType);
            }
        })
        return result;
    }
});

careerapp.filter('Administaration', function () {
    return function (input) {
        var result = [];
        angular.forEach(input, function (careerType) {
            if(careerType.type === 'administration' && careerType.url!=""){
                result.push(careerType);
            }
        })
        return result;
    }
});

careerapp.filter('MarketingAndSale', function () {
    return function (input) {
        var result = [];
        angular.forEach(input, function (careerType) {
            if(careerType.type === 'marketingandsale' && careerType.url!=""){
                result.push(careerType);
            }
        })
        return result;
    }
});
careerapp.filter('FinanceAndHr', function () {
    return function (input) {
        var result = [];
        angular.forEach(input, function (careerType) {
            if(careerType.type === 'financeandhr' && careerType.url!=""){
                result.push(careerType);
            }
        })
        return result;
    }
});