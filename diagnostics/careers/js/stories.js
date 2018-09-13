angular
    .module("storiesApp",[])
    .directive('storiesdesclaimer',function(){
        return {
            restrict: 'E',
            templateUrl : 'http://localhost/homepage/directives/stories.html'
        }
    });

    