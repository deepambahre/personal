

var app = angular.module('ngpatternApp', []);
app.controller('ngpatternCtrl', function ($scope) {
$scope.sendForm = function () {
$scope.msg = "Form Validated";
};
});
// app.directive("matchPassword", function () {
//     return {
//         require: "ngModel",
//         scope: {
//             otherModelValue: "=matchPassword"
//         },
//         link: function(scope, element, attributes, ngModel) {

//             ngModel.$validators.matchPassword = function(modelValue) {
//                 return modelValue == scope.otherModelValue;
//             };

//             scope.$watch("otherModelValue", function() {
//                 ngModel.$validate();
//             });
//         }
//     };
// });



app.directive("myDirective", function () {

    return {
        restrict: 'AE',
        require: '?ngModel',
        templateUrl: 'my-directive.html',
        link: function (scope, elm, attrs, ctrl) {
        scope.form = {submitted: false, data: {}};
        
        scope.submitForm = function(formname){
          console.log(scope[formname].myEmail)
          console.log(scope.formname)
          console.log(scope[formname].$valid)
          scope.form.submitted = true;
        }
        } // end link
    } // end return
});

app.directive("myDirective2", function () {

    return {
        restrict: 'AE',
        require: '?ngModel',
        templateUrl: 'my-directive2.html',
        link: function (scope, elm, attrs, ctrl) {
        scope.form = {submitted: false, data: {}};
        
        scope.submitForm = function(formname){
          console.log(scope[formname].myEmail)
          console.log(scope.formname)
          console.log(scope[formname].$valid)
          scope.form.submitted = true;
        }
        } // end link
    } // end return
});

$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});



app.directive("passwordVerify", function() {
   return {
      require: "ngModel",
      scope: {
        passwordVerify: '='
      },
      link: function(scope, element, attrs, ctrl) {
        scope.$watch(function() {
            var combined;

            if (scope.passwordVerify || ctrl.$viewValue) {
               combined = scope.passwordVerify + '_' + ctrl.$viewValue; 
            }                    
            return combined;
        }, function(value) {
            if (value) {
                ctrl.$parsers.unshift(function(viewValue) {
                    var origin = scope.passwordVerify;
                    if (origin !== viewValue) {
                        ctrl.$setValidity("passwordVerify", false);
                        return undefined;
                    } else {
                        ctrl.$setValidity("passwordVerify", true);
                        return viewValue;
                    }
                });
            }
        });
     }
   };
});