var videos = document.getElementsByClassName("link")
console.log(videos);
console.log(videos[0]);
var i;
var arrlinks = [];
var currentvideo = document.getElementsByClassName("videoreal");
var index = 0;

//console.log(currentvideo)
//arrlinks.push(currentvideo);
for(i=0;i<videos.length;i++){
    arrlinks.push(videos[i].getAttribute("id"))
    console.log(videos[i].getAttribute("id"))
}

console.log(arrlinks)

var video = document.querySelector("#countainer #Video video ");

function setplay(index){
    for(i=0;i<currentvideo.length;i++){

        currentvideo[i].setAttribute("src",arrlinks[index])
        console.log(currentvideo[i])
        video.removeAttribute("poster");
        video.load();
        video.play();
    }
}

setplay(0)
function next(){

    index++;
    if(check(index) == false){
        alert("stooooooooop")
        index--;
    }else{
        setplay(index);
    }

    console.log(index)


}
function prev(){
    index--;
    if(index<0){
        alert("stooooooooop")
        index++;
    }else{
        setplay(index);
    }

    console.log(index)
}

function check(index){
    if(index <0 ){
        alert("stop")
        return; false;
    }else if(index>3){
        alert("stop")
        return false;
    }

}
var fi;
function ngala(n){
    console.log(n)

    //console.log(cee.length)
    //SetVideo(cee)
    fi = arrlinks.findIndex((ele)=>ele == n)
    console.log(fi)
    index = fi;
    console.log(index)
    setplay(index)
}
/*
 var cee = event.srcElement.id;
    console.log(cee)
function SetVideo(link){
    for(i=0;i<currentvideo.length;i++){

        currentvideo[i].setAttribute("src",link)
        console.log(currentvideo[i])
        video.removeAttribute("poster");
        video.load();
        video.play();
    }

}
*/
/*
video.removeAttribute("poster");
video.load();
video.play();
*/
