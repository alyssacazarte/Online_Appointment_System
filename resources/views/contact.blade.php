<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
    <title>Contact</title>
    <style>
        #confirmationModal {
    display: none;
    text-align: center;
    position: fixed;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
    /* background-color: white; */
    padding: 20px;
    /* border-radius: 5px; */
    /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); */
  }
  
  #confirmationModal .modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    border: 2px solid #F8AF5B;
    width: 100%;
    border-radius: 10px;
  }
  
  #confirmationModal .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  #confirmationModal button  {
    color: #FF7C03;
    border: 1px solid #FF7C03;
    background-color: transparent;
    padding: 4px;
    border-radius: 3px;
    cursor: pointer;
    font-weight: 600;
    margin-top: 10px;
  }
  
  #confirmationModal button a {
    color: #FF7C03;
  }
  
  #confirmationModal button:hover {
    background-color: #FF7C03;
    color: #fff;
  }
  
  #confirmationModal button a:hover {
    color: #fff;
  }
  
  #confirmationModal form,
  #confirmationModal button {
    display: inline-block;
    margin-right: 5px;
  }
    </style>
</head>

<body>
    <!-- ======== Header ======== -->
    <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);" class="header">
        <div class="logo">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="portfolio">Portfolio</a></li>
                <li><a href="advocacy">Experience</a></li>
                <li><a href="about">About</a></li>
                <li><a class="test" href="contact">Contact</a></li>&nbsp;
                <div class="language-selector">
                    <button class="current-language">
                    <img src="{{ asset('images/US.png') }}" alt="USA Flag">
                        English
                    </button>
                    <ul class="language-list">
                        <li>
                            <a  href="/contact/en">
                                <img src="{{ asset('images/US.png') }}" alt="USA Flag">{{__('messages.English')}}
                            </a>
                        </li>
                        <li>
                            <a  href="/contact/es">
                                <img src="{{ asset('images/spain.png') }}">{{__('messages.Espanol')}}
                            </a>
                        </li>
                    
                    </ul>
                </div>
            </ul>
            <div class="bar">
                <i class="open fa-solid fa-bars"></i>
                <i class="close fa-solid fa-xmark"></i>
            </div>
        </nav>
    </div>

    <!-- ======== End for Header ======== -->


    <!-- /* ------------- for the firts section ------------------ */ -->

    <br><br><br><br><br><br><br>
    <div class="main">
        <div class="container">
            <h1>
                Let's tell the story <br> about your business.
            </h1><br>
            <p>My goal?</p><br>
            <p class="smd">To tell your business's story in the best and most <br> marketable way
                possible while achieving your <br> marketing, branding, and advertising objectives. <br>
                <a href="">
                    <img src="{{ asset('images/arrow-down.png') }}" alt="ArrowDown">
                </a>
            </p>
        </div>

    </div><br><br>
    <!-- /* ------------- end for the firts section ------------------ */ -->



    <!-- /* ------------- for the second section ------------------ */ -->



    <!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->
   
    <form action="{{ route('contact.book') }}" method="POST">
        @csrf

        <h2>Select Service</h2>
        <div class="selectOption" >
            <p>Set up consulting Today!</p><br>
            <center>
                <div class="custom-select">
                    <select name="service_id" id="service_id">
                    <option>Select Option:</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->type }}</option>
                        @endforeach
                    </select>
                </div>
                <center>
        </div>
       
    </form>






    <!-- /* ------------- end for the second section ------------------ */ -->


    <br><br><br><br><br><br>

    <!-- ============== for the calendar ============  -->
   
    <h2>Select Time</h2>
    <div class="container1">

        <div class="calendar">
            <div class="month">
                <i class="fas fa-angle-left prev"></i>
                <div class="date">
                    <h1></h1>
                    <p></p>
                </div>
                <i class="fas fa-angle-right next"></i>
            </div>
            <div class="weekdays">
                <div>SUN</div>
                <div>MON</div>
                <div>TUE</div>
                <div>WED</div>
                <div>THU</div>
                <div>FRI</div>
                <div>SAT</div>
            </div>
            <div class="days"></div>
        </div>


        <div class="schedule">
            <div class="time">

            </div>
            <div class="test"></div>
            <div class="shadow">

            </div>

            <div class="standardTime">
                <small>
                    US Eastern standard time
                </small>
            </div>

        </div>
       
    </div>
   




    <br>
    <!-- -------------------- for the details ------------------------------ -->
   
    <h2>Add you details</h2>
  
    <div class="contact" id="contact">
        <div class="contactBox" >
            <div class="left">

                <form action="submit">
                    <br><br>
                    <div class="genInfo">
                        <input type="text" placeholder="Name" class="name" id="submit-name" required>
                        <input type="email" placeholder="Email" class="email" id="submit-email" required>
                    </div>
                    <div class="subject">
                        <input type="text" placeholder="Address" id="submit-address" required>
                        <input type="text" placeholder="Phone Number" id="submit-phone-no" required>
                    </div><br>
                    <div class="remind">
                        <h5>
                            <img src="{{ asset('images/qmark.png') }}" alt="QuestionMark">
                            <small>
                                Please share some details about your project.
                            </small>
                        </h5>

                        <!-- <input type="text"  placeholder="Please share some details about your project."> -->
                    </div>
                    <div class="message">
                        <textarea name="message" rows="5" placeholder="Notes" id="submit-note"></textarea>
                    </div>

                </form>
            </div>

        </div>
    </div>
    
    <div class="booking">
        <div>
            <small>
                By clicking below you agree to these <span>Privacy Policies</span>
            </small>
            <div>
                <button class="btnBook" onclick="openConfirmationModal()"> Book Now </button>
                <div class="inline-notification success">Thanks for contacting us! We will get in touch with you shortly.</div>
                <div class="inline-notification error">Failed! Please fill in all the required fields.</div>
                <div class="inline-notification invalid-email-notification">Invalid email address. Please use a correct Gmail address format.</div>
            </div>
        </div>
    </div>
    <hr class="hr"><br>



    <!-- ======== Footer ======== -->
    <div class="f-footer" id="f-footer">
        <ul>
            <li><a href="./portfolio">Portfolio</a></li>
            <li><a href="./advocacy">Experience</a></li>
            <li><a href="./about">About Me</a></li>
            <li><a href="./contact">Contact</a></li>
        </ul>
        <hr>

    </div>

    <div class="footer">

        <div class="socialIcons">
            <h6 style="font-size: 10px;">FOLLOW ME</h6>
            <a href="https://instagram.com/faviojasso?igshid=YWYwM2I1ZDdmOQ=="><i class="fa-brands fa-instagram"></i></a>
            <!-- <a><i class="fa-brands fa-facebook"></i></a> -->
            <a href="https://github.com/FavioJasso"><i class="fa-brands fa-github"></i></a>
            <a href="https://twitter.com/FavioJasso"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="copy">
            © Copyright. All rights reserved.
        </div>

    </div>

    <div class="topBtn">
        <a href="#"><i class="fa-solid fa-angle-up"></i></a><br><br>
    </div>

    <form action="{{ route('get.schedule') }}" method="POST" id="get-service">
        @csrf
        <input type="hidden" name="schedule_id" value="#">
    </form>

    <form action="{{ route('contact.book') }}" method="POST" id="final-request">
        @csrf
        <input type="hidden" name="service_id" id="service">
        <input type="hidden" name="schedule_id" id="schedule">
        <input type="hidden" name="timeslot_id" id="timeslot">
        <input type="hidden" name="name" id="name">
        <input type="hidden" name="email" id="email">
        <input type="hidden" name="address" id="address">
        <input type="hidden" name="phone_no" id="phone_no">
        <input type="hidden" name="notes" id="notes">
    </form>
    <div id="confirmationModal" class="modal">
    <div class="modal-content">
        <p>Are you sure you want to book this appointment?</p>
        <button id="confirmButton" onclick="confirmBooking()">Yes</button>
        <button id="cancelButton" onclick="cancelBooking()">Cancel</button>
    </div>
</div>


    <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script>
    function openConfirmationModal() {
    const serviceId = selectedItems['service_id'];
    const scheduleId = selectedItems['schedule_id'];
    const timeslotId = selectedItems['timeslot_id'];
    const name = document.querySelector('#submit-name').value;
    const email = document.querySelector('#submit-email').value;
    const address = document.querySelector('#submit-address').value;
    const phoneNo = document.querySelector('#submit-phone-no').value;
    const notes = document.querySelector('#submit-note').value;

    // Validate required fields before proceeding
    if (!serviceId || !scheduleId || !timeslotId || !name || !email || !address || !phoneNo || !notes) {
        const errorNotification = document.querySelector('.inline-notification.error');
        errorNotification.style.display = 'block';
        setTimeout(() => {
            fadeOutAndRemove(errorNotification);
            // resetFormFields();
        }, 5000);
        return; // Don't proceed with form submission
    }
    // Email validation using regular expression
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!email.match(emailRegex)) {
        const invalidEmailNotification = document.querySelector('.invalid-email-notification');
        invalidEmailNotification.style.display = 'block';
        setTimeout(() => {
            fadeOutAndRemove(invalidEmailNotification);
        }, 5000);
        return; // Don't proceed with form submission
    }

    // Set form values and submit
    document.querySelector('#service').value = serviceId;
    document.querySelector('#schedule').value = scheduleId;
    document.querySelector('#timeslot').value = timeslotId;
    document.querySelector('#name').value = name;
    document.querySelector('#email').value = email;
    document.querySelector('#address').value = address;
    document.querySelector('#phone_no').value = phoneNo;
    document.querySelector('#notes').value = notes;

     // Show the confirmation modal
     const modal = document.getElementById('confirmationModal');
     modal.style.display = 'block';
}
function confirmBooking() {
    // Submit the form when the user confirms
    document.getElementById('final-request').submit();
    // Show the success notification after the form is submitted
    const successNotifications = document.querySelectorAll('.success');
    successNotifications.forEach((notification) => {
        notification.style.display = 'block';
    });
}

function cancelBooking() {
    // Close the confirmation modal if the user cancels
    const modal = document.getElementById('confirmationModal');
    modal.style.display = 'none';
}//for the inline notification
const successNotifications = document.querySelectorAll('.success');
const errorNotifications = document.querySelectorAll('.error');
const invalidEmailNotifications = document.querySelectorAll('.invalid-email-notification');

function enableBookNowButton() {
    const bookNowButton = document.querySelector('.btnBook');
    bookNowButton.disabled = false;
}
function disableBookNowButton() {
    const bookNowButton = document.querySelector('.btnBook');
    bookNowButton.disabled = true;
}

document.querySelectorAll('.btnBook').forEach((button, index) => {
    button.addEventListener('click', () => {
        const successNotification = successNotifications[index];
        const errorNotification = errorNotifications[index];
        const invalidEmailNotification = invalidEmailNotifications[index];

        // Hide all notifications initially
        successNotification.style.display = 'none';
        errorNotification.style.display = 'none';
        invalidEmailNotification.style.display = 'none';

        // Set a timer to fade out the notification after a certain period
        const fadeOutDelay = 5000;
        disableBookNowButton();

        if (fieldsAreEmpty()) {
            errorNotification.style.display = 'block';
            setTimeout(() => {
                fadeOutAndRemove(errorNotification);
                enableBookNowButton();
                // resetFormFields();
            }, fadeOutDelay);
        } else if (!selectedEmailIsValid()) {
            invalidEmailNotification.style.display = 'block';
            setTimeout(() => {
                fadeOutAndRemove(invalidEmailNotification);
                enableBookNowButton();
                // resetFormFields();
            }, fadeOutDelay);
        }
       
    });
});
function selectedEmailIsValid() {
    const email = document.querySelector('#submit-email').value;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return email.match(emailRegex);
}
function resetFormFields() {
    document.querySelector('#service').value = '';
    document.querySelector('#schedule').value = '';
    document.querySelector('#timeslot').value = '';
    document.querySelector('#submit-name').value = '';
    document.querySelector('#submit-email').value = '';
    document.querySelector('#submit-address').value = '';
    document.querySelector('#submit-phone-no').value = '';
    document.querySelector('#submit-note').value = '';
}

// function selectedItemsAreValid() {
//     const requiredInputs = [
//         document.querySelector('#service'),
//         document.querySelector('#schedule'),
//         document.querySelector('#timeslot'),
//         document.querySelector('#submit-name'),
//         document.querySelector('#submit-email'),
//         document.querySelector('#submit-address'),
//         document.querySelector('#submit-phone-no'),
//         document.querySelector('#submit-note'),


//     ];

//     for (const input of requiredInputs) {
//         if (!input.value) {
//             return false;
//         }
//     }
//     return true;
// }
function fieldsAreEmpty() {
    const serviceId = selectedItems['service_id'];
    const scheduleId = selectedItems['schedule_id'];
    const timeslotId = selectedItems['timeslot_id'];
    const name = document.querySelector('#submit-name').value;
    const email = document.querySelector('#submit-email').value;
    const address = document.querySelector('#submit-address').value;
    const phoneNo = document.querySelector('#submit-phone-no').value;
    const notes = document.querySelector('#submit-note').value;

    return !serviceId|| !scheduleId|| !timeslotId|| !name || !email || !address || !phoneNo || !notes;
}

function fadeOutAndRemove(element) {
    element.style.transition = 'opacity 0.5s';
    element.style.opacity = '0';
    setTimeout(() => {
        element.remove();
    }, 500); // Remove element after fade-out animation
}
</script>
</body>
</html>
