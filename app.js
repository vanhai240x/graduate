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

routerApp.controller('HomeCtrl', () => {
    jQuery(document).ready(function(){
        jQuery('.skillbar').each(function(){
            jQuery(this).find('.skillbar-bar').animate({
                width:jQuery(this).attr('data-percent')
            },6000);
        });
    });
})

routerApp.controller('CalculatorCtrl', () => {
    
})