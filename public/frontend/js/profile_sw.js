// control profile page switcher
var notiPath = "http://renthouse.co/noti-page";
var profilePath = "http://renthouse.co/changePassword";
var likedRoomPath = "http://renthouse.co/liked-rooms";
$(document).ready(function(){
    $("#acc-show").click(showProfile)
    $("#noti-show").click(showNotification)
    $("#liked-show").click(showLikedRooms)
})
function showProfile(){
    for(var i of $(".account-nav li")){
        if( $(i).attr("id") != "acc-show"){
            $(i).removeClass("is-actived")
        }
    }
    $("#acc-show").addClass("is-actived");
    $("#mainFrame").attr("src",profilePath)

}
function showNotification(){
    $("#noti-show").addClass("is-actived");
    for(var i of $(".account-nav li")){
        if( $(i).attr("id") != "noti-show"){
            $(i).removeClass("is-actived")
        }
    }
    $("#mainFrame").attr("src",notiPath)

}
function showLikedRooms(){
    $("#liked-show").addClass("is-actived");
    for(var i of $(".account-nav li")){
        if( $(i).attr("id") != "liked-show"){
            $(i).removeClass("is-actived")
        }
    }
    $("#mainFrame").attr("src",likedRoomPath)

}
