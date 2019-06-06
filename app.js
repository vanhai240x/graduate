var routerApp = angular.module("routerApp", ['ui.router'])

routerApp.config(function($stateProvider, $urlRouterProvider) {
  $urlRouterProvider.otherwise('/home')

  $stateProvider
  // Home states 
    .state('home', {
      url: '/home',
      templateUrl: 'home/partial-home.html',
      controller: 'HomeCtrl'
    })
    // Calculator states
    .state('calculator', {
      url: '/calculator',
      templateUrl: 'calculator/partial-calculator.html',
      controller: 'CalculatorCtrl'
    })
    // Profile states 
    .state('profile', {
      url: '/profile',
      templateUrl: 'profile/partial-profile.html',
      controller: 'ProfileCtrl'
    })
    // Lottery states 
    .state('lottery', {
      url: '/lottery',
      templateUrl: 'lottery/partial-lottery.html',
      controller: 'LotteryCtrl'
    })


  // About pages and multiple named views
  // .state('about', {
  //     url: '/about',
  //     template: `<div class="jumbotron">
  //                 <div class="container">
  //                 <h1>Hello, world!</h1>
  //                 <p>Contents ...</p>
  //                 <p>
  //                     <a class="btn btn-primary btn-lg">Learn more</a>
  //                 </p>
  //                 </div>
  //             </div>`
  // })
})

// Global controller
routerApp.controller('GlobalCtrl', () => {
  // Add class .active to navbar when click nav-item on header
  $('.nav-1').click(() => {
    $('.nav-link').removeClass('active')
    $('.nav-1').addClass('active')
  })
  $('.nav-2').click(() => {
    $('.nav-link').removeClass('active')
    $('.nav-2').addClass('active')
  })
  $('.nav-3').click(() => {
    $('.nav-link').removeClass('active')
    $('.nav-3').addClass('active')
  })

  // Remove class .active when click on .navbar-brand
  $('.navbar-brand').click(() => {
    $('.nav-link').removeClass('active')
  })
})

// Home Controller
routerApp.controller('HomeCtrl', () => {
  jQuery(document).ready(function() {
    jQuery('.skillbar').each(function() {
      jQuery(this).find('.skillbar-bar').animate({
        width: jQuery(this).attr('data-percent')
      }, 6000);
    });
  });
})

// Calculator controller
routerApp.controller('CalculatorCtrl', () => {
  return false
})

// Lottery controller
routerApp.controller('LotteryCtrl', ['$scope', ($scope) => {
  $scope.selectedNumber = []
  $scope.getNum1 = "0"
  $scope.getNum2 = "0"
  $scope.getNum3 = "0"
  $scope.getNum4 = "0"
  $scope.getNum5 = "0"
  $scope.getNum6 = "0"
  $scope.count = 0
  $scope.getMoney = ""
  $scope.luckyLater = ""

  // Add child to array when selectbox change
  $("#num-1").change(function() {
    $scope.selectedNumber[0] = ($(this).find("option:selected").text())
    $('.warning-1').addClass('d-none')
  });
  $("#num-2").change(function() {
    $scope.selectedNumber[1] = ($(this).find("option:selected").text())
    $('.warning-2').addClass('d-none')
  });
  $("#num-3").change(function() {
    $scope.selectedNumber[2] = ($(this).find("option:selected").text())
    $('.warning-3').addClass('d-none')
  });
  $("#num-4").change(function() {
    $scope.selectedNumber[3] = ($(this).find("option:selected").text())
    $('.warning-4').addClass('d-none')
  });
  $("#num-5").change(function() {
    $scope.selectedNumber[4] = ($(this).find("option:selected").text())
    $('.warning-5').addClass('d-none')
  });
  $("#num-6").change(function() {
    $scope.selectedNumber[5] = ($(this).find("option:selected").text())
    $('.warning-6').addClass('d-none')
  });

  // Function: Create random 6 numbers lucky
  randomSixNum = () => {
    $scope.randomNumber = []

    for (let i = 0; i < 6; i++) {
      let x = Math.floor((Math.random() * 45) + 1)
      $scope.randomNumber.push(x)      
    }
    return $scope.randomNumber
  }

  // Function: Check result and get reward
  checkResult = (a, b) => {
    for (let i = 0; i < a.length; i++) {
      for (let j = 0; j < b.length; j++) {
        if (a[i] == b[j]) {
          count++
        }        
      }      
    }
    switch (count) {
      case 3:
        $scope.getMoney = "30.000"
        break;
      case 4:
        $scope.getMoney = "300.000"
        break; 
      case 5:
        $scope.getMoney = "10.000.000"
        break; 
      case 6:
        $scope.getMoney = "Tối thiểu 12 tỷ và tích lũy"
        break; 
      default:
        $scope.getMoney = "0"
        $scope.luckyLater = "Chúc bạn may mắn lần sau !"
        break;
    }
    return {count}
  }

  // Event when click on button Quay Số
  $scope.dial = () => {
    console.log("Số bạn chọn: " + $scope.selectedNumber)
    if($scope.selectedNumber.length < 6){
      alert("Bạn chưa chọn đủ 6 số !")
    }
    else{
      randomSixNum()
      $('.result').addClass('d-none')   // Hide result section
      // $('.dial').attr('disabled', 'true')      
      $('.loading').removeClass('d-none')   // Show loading icon
      setTimeout(() => {
        $('.loading').addClass('d-none')   // Hide loading icon after 2 seconds exist
        $('.result').fadeIn(3000).removeClass('d-none')   // Show result section        
      }, 2000)
      console.log("Số sau khi quay: " + $scope.randomNumber)
      checkResult($scope.selectedNumber, $scope.randomNumber)   // Check result and get reward
      console.log(checkResult($scope.selectedNumber, $scope.randomNumber))
      // Binding result after random dial to View
      $scope.getNum1 = $scope.randomNumber[0] < 10 ? "0" + $scope.randomNumber[0] : $scope.randomNumber[0]
      $scope.getNum2 = $scope.randomNumber[1] < 10 ? "0" + $scope.randomNumber[1] : $scope.randomNumber[1]
      $scope.getNum3 = $scope.randomNumber[2] < 10 ? "0" + $scope.randomNumber[2] : $scope.randomNumber[2]
      $scope.getNum4 = $scope.randomNumber[3] < 10 ? "0" + $scope.randomNumber[3] : $scope.randomNumber[3]
      $scope.getNum5 = $scope.randomNumber[4] < 10 ? "0" + $scope.randomNumber[4] : $scope.randomNumber[4]
      $scope.getNum6 = $scope.randomNumber[5] < 10 ? "0" + $scope.randomNumber[5] : $scope.randomNumber[5]
    }
  }
}])