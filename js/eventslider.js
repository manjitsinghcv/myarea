$(document).ready(function(){
var SlideSpeed = 500;
var SlideWidth = 200;

$("#NextButton").on("click", function(event) { 
    if ( $("#h_wrapper").is(':not(:animated)') && $("#NextButton").is(':not(:animated)') ) {
        var newMargin = CurrentMargin() - SlideWidth;
        $("#h_wrapper").animate({ marginLeft: newMargin }, SlideSpeed, function () { SetNavigationDisplay() }); 
    }
});

$("#PreviousButton").on("click", function() { 
    if ( $("#h_wrapper").is(':not(:animated)') && $("#PreviousButton").is(':not(:animated)') ) {
        var newMargin = CurrentMargin() + SlideWidth;
        $("#h_wrapper").animate({ marginLeft: newMargin }, SlideSpeed, function () { SetNavigationDisplay() });
    }
});

function CurrentMargin() {
  // get current margin of slider
  var currentMargin = $("#h_wrapper").css("margin-left");

  // return the current margin to the function as an integer
  return parseInt(currentMargin);
}

function SetNavigationDisplay() {
  // get current margin
  var currentMargin = CurrentMargin();

  // if current margin is at 0, then we are at the beginning, hide previous
  if (currentMargin == 0) {
    $("#PreviousButton").fadeOut();
  }
  else {
    $("#PreviousButton").fadeIn();
  }

  // get wrapper width
  var wrapperWidth = $("#h_wrapper").width();

  // turn current margin into postive number and calculate if we are at last slide, if so, hide next button
  if ((currentMargin * -1) == (wrapperWidth - SlideWidth)) {
    $("#NextButton").fadeOut();
  }
  else {
    $("#NextButton").fadeIn();
  }
}
});