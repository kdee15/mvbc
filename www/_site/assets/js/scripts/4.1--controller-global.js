
// JAVASCRIPT LAYER [4.1. CONTROLLER: GLOBAL]  ========================================================================

// ====== INDEX  ======================================================================================================
// ==
// == A. REGISTER THE MODULE
// == B. CONTROLLER
// ==
// ====== INDEX  ======================================================================================================

// A. REGISTER THE MODULE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

var globalController = angular.module('globalController', []);

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// B. CONTROLLER ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

globalController.controller(
        'ctrlGlobal', [
            
            '$scope',
            '$state',
            '$http',
            '$location',
            '$rootScope',
            
            function ($scope, $state, $http, $location, $rootScope) {


                // B.1. HELPER VARIABLES ------------------------------------------------------------------------------

                $scope.snippets = 'assets/includes/snippets/';
                $scope.sections = 'assets/includes/sections/';
                $scope.icons = 'assets/includes/icons/';

                // B.1. END -------------------------------------------------------------------------------------------

                // B.2. MOBILE LISTENER -------------------------------------------------------------------------------

                var screen = $( window ).width();
                console.log('I am a device, and my width is: ' + screen);

                // B.2. END -------------------------------------------------------------------------------------------
                
                // B.3. END -------------------------------------------------------------------------------------------
                

                $scope.upDown = function() {

                    $scope.divOn = !$scope.divOn;
                    $rootScope.viewing = false;

                }
                
                
	
                /* Random Image Generator START */
                var totalImages = 6;

                var RandomNum = Math.floor( Math.random() * totalImages);

                $(document).ready(function(){

                    $('body').attr("style","background-image:url('../assets/images/background/bg-main"+RandomNum+".jpg')");
                    $('.article').attr("style","background-image:url('../../../../../assets/images/background/bg-main"+RandomNum+".jpg')");

                }); 

                /* Random Image Generator END */
                
	
                //A.1.1 Show/Hide element

                $(".reveal").click(function(e) {
                    var target = $(this).attr('href');
                    if ($(target).css('display') === 'none') {
                      $(target).fadeIn(130);
                    }
                    else {
                      $(target).fadeOut(130);
                    }
                    e.preventDefault();
                  });

                //A.1.1 End
                
                // B.3. END -------------------------------------------------------------------------------------------
                
                // B.4. DATA ------------------------------------------------------------------------------------------
                
                // B.3.2. TONPLAYGO

                 $http.get('data/tpg.txt').success(function (data)
                 {
                     $scope.tpgs = data;
                 });

                // B.4. END -------------------------------------------------------------------------------------------
                
            }
        ]
        );

// B. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// END OF FILE ========================================================================================================