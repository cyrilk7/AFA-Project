const lists = document.querySelectorAll('.season')
const sectionItems = document.querySelectorAll('.singleSeason')

// Add active class(Background to the button) ===============>
for(let l = 0; l<lists.length; l++){
    lists[l].addEventListener('click', function(){
        for(let w = 0; w<lists.length; w++){
            lists[w].classList.remove('activeBtn')
        }
        this.classList.add('activeBtn')

        let dataFilter = this.getAttribute('data-filter')
        for(let y = 0; y<sectionItems.length; y++){
            sectionItems[y].classList.add('hide')
            sectionItems[y].classList.remove('live')
            if(sectionItems[y].getAttribute('data-item') == dataFilter){
                sectionItems[y].classList.remove('hide')
                sectionItems[y].classList.add('live')
            }
        }
    })
}



const navBar = document.querySelector('.navBar')
const navBarBtn = document.querySelector('.navBarBtn')


navBarBtn.addEventListener('click', function(){
    navBar.classList.toggle('show');
    if(navBar.classList.contains('show')){
        document.querySelector('.navBarBtn').innerHTML = '<i class="uil uil-times icon"></i>'
        

    }else{
        document.querySelector('.navBarBtn').innerHTML = ' <i class="uil uil-bars icon"></i>'
       
    }
  
    
}) 

const navLinks = document.querySelectorAll('.navLink')
navLinks.forEach(navLink =>{
    navLink.addEventListener('click', function(){
        navBar.classList.remove('show');
        document.querySelector('.navBarBtn').innerHTML = ' <i class="uil uil-bars icon"></i>'
    })

})

// // Add advert =====================================>

// const closeAdvertIconDiv = document.getElementById('closeAdvertIconDiv')
// const advertPage = document.getElementById('advert')

// function showVistorPage(){
//   setTimeout(()=> advertPage.style.opacity = 1,2000)
// }
// showVistorPage()

// closeAdvertIconDiv.onclick = ()=>{
// advertPage.style.display = "none"
// }

// // CountDown timer ==============================================>
// let launchDate = new Date("June 30, 2022 12:00:00").getTime();
// let timer = setInterval(tick, 1000)


// function tick (){
// let now = new Date().getTime();
// let t = launchDate - now;

// if (t > 0){

//   let day = Math.floor(t / (1000 * 60 * 60 * 24));
//   if (day < 10){
//       day = "0" + day; 
//   }
   
// // Algorith to calculate hours....
//     let hrs = Math.floor((t % (1000 * 60 * 60 *24)) / (1000 * 60 * 60));
//     if (hrs < 10){
//         hrs  = "0" + hrs;
//     }
// // Algorith to calculate Minutes ....
//     let mins = Math.floor((t % (1000 * 60 * 60 )) / (1000 * 60));
//     if (mins < 10){
//         mins  = "0" + mins;
//     }

// // Algorithm to calculate Seconds....
//    let secs = Math.floor((t % (1000 * 60)) / (1000));
//    if (secs < 10){
//     secs  = "0" + secs;
// }

// let time = `${day}  Days  ${hrs}  Hrs  |   ${mins} Mins  |  ${secs}  Sec`;

//     document.querySelector('.countdown').innerHTML = time;
// }
// }

// Record Function ==========================================>


// Comments Swiper ==================================================>
let commSwiper = new Swiper(".comments", {
    cssMode: true,
    loop: true,
    autoplay: true,
    spaceBetween: 10,
  
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    
    mousewheel: true,
    keyboard: true,
    mausehold: true,
   drag: true,

   breakpoints: {
       560: {
       slidesPerView: 2,
       
       },
       1000: {
       slidesPerView: 3,
       
       },
   }
  
   
  });

// Sponsors Swiper ==================================================>
let accSwiper = new Swiper(".sponsorsContainer", {
    cssMode: true,
    loop: true,
    autoplay: true,
    spaceBetween: 20,
  
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    
    mousewheel: true,
    keyboard: true,
    mausehold: true,
   drag: true,

   breakpoints: {
       560:{
         slidesPerView: 2,
       },
       769:{
         slidesPerView: 3,
         autoplay: 'false'
       },
   },
   
  });

