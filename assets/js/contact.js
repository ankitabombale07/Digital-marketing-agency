/* =====================================
   CONTACT FORM VALIDATION
===================================== */


document.addEventListener(
    "DOMContentLoaded",
    function(){


        const contactForm =
            document.querySelector(
                "#contactForm"
            );


        if(contactForm){


            contactForm.addEventListener(
                "submit",
                function(e){


                    let name =
                    document.querySelector(
                        "input[name='name']"
                    ).value.trim();


                    let phone =
                    document.querySelector(
                        "input[name='phone']"
                    ).value.trim();


                    let email =
                    document.querySelector(
                        "input[name='email']"
                    ).value.trim();



                    /* Name Validation */

                    if(name.length < 3){


                        e.preventDefault();


                        alert(
                            "Please enter a valid name."
                        );


                        return false;


                    }



                    /* Phone Validation */

                    let phonePattern =
                    /^[0-9]{10}$/;


                    if(
                        !phonePattern.test(phone)
                    ){


                        e.preventDefault();


                        alert(
                            "Please enter a valid 10 digit phone number."
                        );


                        return false;


                    }



                    /* Email Validation */

                    let emailPattern =
                    /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


                    if(
                        !emailPattern.test(email)
                    ){


                        e.preventDefault();


                        alert(
                            "Please enter a valid email address."
                        );


                        return false;


                    }



                    /*
                    Loading Button
                    */


                    let submitButton =
                    contactForm.querySelector(
                        "button[type='submit']"
                    );


                    if(submitButton){


                        submitButton.innerHTML =
                        "Sending...";


                        submitButton.disabled =
                        true;


                    }


                }
            );


        }


    }
);