document.addEventListener("DOMContentLoaded",function(){
    const images=document.querySelectorAll(".images img");
    const modal =document.querySelector(".modal");
    const closebtn=document.querySelector(".close")
    
    images.forEach((image,index) =>{
      image.addEventListener("click",function(){
     
      modal.classList.add("show")

        
      });
    });
    
    closebtn.addEventListener("click",function (){
      modal.classList.remove("show")
  });
  });