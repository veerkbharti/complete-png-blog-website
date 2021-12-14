$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
    //Load more posts------
    if($(this).scrollTop()+$(this).height()>$(document).height()-100){
      showPosts();
    }
  });
  // scroll body to 0px on click
  $('#back-to-top').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 400);
    return false;
  });
  var page_no=1;
  var cat_id=$("#mainpost").data("id");
  var slug_url=$("#mainpost").data("slugurl");
  function showPosts(){
    $.post("includes/loadmore.php",{page:page_no,id:cat_id,url:slug_url},(response)=>{
      $("#loadmore").append(response);
      page_no++;
    });
  }
});
var downloadButton = document.getElementById("at-downloadx");
var counter = 15;
var newElement = document.createElement("span");
newElement.innerHTML = "Please Wait 15 sec";
var id;
downloadButton.parentNode.replaceChild(newElement, downloadButton);
function startDownload() {
  // downloadButton.style.display='none';
    id = setInterval(function () {
        counter--;
        if (counter < 0) {
            newElement.parentNode.replaceChild(downloadButton, newElement);
            clearInterval(id);
        } else {
            newElement.innerHTML = "Please Wait" + " " + counter.toString() + " " + " sec... ";
        }
    }, 1000);
};
var clickbtn = document.getElementById("btn-at");
clickbtn.onclick = startDownload;