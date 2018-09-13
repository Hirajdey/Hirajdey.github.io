var webinarApp = angular.module("webinarApp",[]);
webinarApp.controller("webinarCtrl", function ($scope, $http) {

    // Initialiation
    $scope.videoName = "../webinar/video/test.mp4"; // Video initial

    // diseases
    var diseases = ["oncology", "neurology", "cardiovascular", "autoimmune", "genomics", "rare", "prenatal", "ent"];

    // Common function
    $scope.sectionVisible = function($sectionName, $presentations, $video, $posters, $presentationsClass, $videoClass, $postersClass){

        $("."+$sectionName).show(); // section view

        $scope.presentations = $presentations;
        $scope.video = $video;
        $scope.posters = $posters;

        $scope.addClassPresentations = function(){
            return $presentationsClass;
        }
        $scope.addClassVideo = function(){
            return $videoClass;
        }
        $scope.addClassPosters = function(){
            return $postersClass;
        }
    }
    // End
    
    // Default hover set
    $scope.addClassPresentations = function(){
        return "active";
    }

    // Show the section  by use Tab
    $scope.showPresentations = function () {
        $scope.sectionVisible('presentations',false, false, false, 'active', 'deactive', 'deactive');
        $scope.test = "Test";
    }

    $scope.showVideo = function () {
        $scope.sectionVisible('video',true, true, false, 'deactive', 'active', 'deactive');
    }
    $scope.showPosters = function () {
        $scope.sectionVisible('posters',true, false, true, 'deactive', 'deactive', 'active');
    }

    /*function active(num) { alert(num);
        style = num.valueOf();
        alert(style);
        return $scope.style = 'active';
    }*/

    $scope.leftLink = function (disease_type) {
        //alert(disease_type);
        //var evens = diseases.filter(active);

        for(i=0; i<diseases.length; i++){
            $( "#"+diseases[i] ).removeClass( "active" );
            if(disease_type == diseases[i]){
                $( "#"+diseases[i] ).addClass( "active" );
            }

        }

        /*if($disease_type == 'oncology'){
            $scope.activeOncology = 'active';
        }else if($disease_type == 'neurology'){
            $scope.activeNeurology = 'active';
            $scope.activeOncology = 'deactive';
        }*/
    }

    // Choose Video
    $scope.chooseVideo = function($video_name){
        $scope.videoName = "../webinar/video/"+$video_name;
    }
})