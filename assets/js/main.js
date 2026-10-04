/* =====================================
   DIGITAL MARKETING WEBSITE JS
===================================== */


/* =====================================
   AOS Animation Initialize
===================================== */

document.addEventListener("DOMContentLoaded", function () {


    if (typeof AOS !== "undefined") {

        AOS.init({

            duration: 1000,

            once: true

        });

    }


});



/* =====================================
   Sticky Header
===================================== */

window.addEventListener("scroll", function(){


    let header = document.querySelector("#header");


    if(header){


        if(window.scrollY > 50){


            header.classList.add("shadow");


        }

        else{


            header.classList.remove("shadow");


        }


    }



});



/* =====================================
   Smooth Scrolling
===================================== */


document.querySelectorAll('a[href^="#"]').forEach(anchor => {


    anchor.addEventListener("click", function(e){


        let target = document.querySelector(
            this.getAttribute("href")
        );


        if(target){


            e.preventDefault();


            target.scrollIntoView({

                behavior:"smooth"

            });


        }


    });


});



/* =====================================
   Close Mobile Menu After Click
===================================== */


let navLinks = document.querySelectorAll(".navbar-nav .nav-link");


let navbarCollapse = document.querySelector(".navbar-collapse");


navLinks.forEach(function(link){


    link.addEventListener("click", function(){


        if(navbarCollapse.classList.contains("show")){


            let bsCollapse = new bootstrap.Collapse(
                navbarCollapse
            );


            bsCollapse.hide();


        }


    });


});



/* =====================================
   Counter Animation
===================================== */


const counters = document.querySelectorAll(".counter");


counters.forEach(counter => {


    counter.innerText = "0";


    const updateCounter = () => {


        const target = +counter.getAttribute(
            "data-target"
        );


        const current = +counter.innerText;


        const increment = target / 100;



        if(current < target){


            counter.innerText =
                Math.ceil(current + increment);


            setTimeout(updateCounter,20);


        }

        else{


            counter.innerText = target;


        }


    };


    updateCounter();


});



/* =====================================
   Back To Top Button
===================================== */


let backToTop = document.querySelector(
    ".back-to-top"
);



window.addEventListener("scroll", function(){


    if(backToTop){


        if(window.scrollY > 300){


            backToTop.style.display="flex";


        }

        else{


            backToTop.style.display="none";


        }


    }


});



if(backToTop){


    backToTop.addEventListener(
        "click",
        function(){


            window.scrollTo({

                top:0,

                behavior:"smooth"

            });


        }
    );


}



/* =====================================
   Service Active Link
===================================== */


let sections = document.querySelectorAll(
    "section[id]"
);


window.addEventListener("scroll",()=>{


    let scrollPosition =
        window.scrollY + 150;


    sections.forEach(section=>{


        if(
            scrollPosition >= section.offsetTop &&
            scrollPosition <=
            section.offsetTop + section.offsetHeight
        ){


            let id = section.getAttribute("id");


            let link = document.querySelector(
                '.nav-link[href="#'+id+'"]'
            );


            document
            .querySelectorAll(".nav-link")
            .forEach(nav=>{

                nav.classList.remove("active");

            });



            if(link){

                link.classList.add("active");

            }


        }


    });


});



/* =====================================
   Image Lazy Loading
===================================== */


document.querySelectorAll("img").forEach(
    img=>{


        img.setAttribute(
            "loading",
            "lazy"
        );


    }
);