// -----------------
const rightbtn = document.querySelector('.fa-chevron-right');
const leftbtn = document.querySelector('.fa-chevron-left');
let index =0;
const homepage_left_img = document.querySelectorAll('.homepage_left img')



rightbtn.addEventListener("click",function(){
  index = index+1;
  
  if(index>homepage_left_img.length-1){
    index=0;
  }
  document.querySelector(".homepage_left").style.right = index*100+"%";
})

leftbtn.addEventListener("click",function(){
  index=index-1;
  if(index<0){
    index=homepage_left_img.length-1
  }
  document.querySelector(".homepage_left").style.right = index*100+"%"
})


// -----------------
