        // -----------------
        const rightbtn = document.querySelector('.fa-chevron-right');
        const leftbtn = document.querySelector('.fa-chevron-left');
        let index =0;
        const homepage_left_img = document.querySelectorAll('.homepage_left img')
        console.log(homepage_left_img.length)


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


        // input
        document.addEventListener("DOMContentLoaded", function () {
    const inputField = document.querySelector(".input_container.icon input[type='text']");
    const inputDanhMuc = document.querySelector(".input_danhmuc");

    inputField.addEventListener("focus", function () {
        inputDanhMuc.classList.add("show");
    });

    inputDanhMuc.addEventListener("mouseenter", function () {
        inputDanhMuc.classList.add("show");
    });

    inputField.addEventListener("blur", function () {
        inputDanhMuc.classList.remove("show");
    });

    inputDanhMuc.addEventListener("mouseleave", function () {
        inputDanhMuc.classList.remove("show");
    });
});

var imageContainer = document.getElementById("imageContainer");

// Trích xuất đường dẫn hình ảnh từ URL tham số
var imageURL = decodeURIComponent(new URLSearchParams(window.location.search).get("image"));

// Hiển thị hình ảnh trong phần tử
var imageElement = document.createElement("img");
imageElement.src = imageURL;
imageContainer.appendChild(imageElement);