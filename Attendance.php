<!DOCTYPE html>
<html lang="en">

<?php
include('head.php');
?>

<body>

    <!-- navbar start -->
    <?php
include('header.php');
?>
    <!-- navbar end -->

    <div class="mt-4 mb-4 text-center">
        <h3 class="student_fac">Attendance</h3>
    </div>
        <h3 class="student_fac">Attendance</h3>

    <!-- Address Div start -->
    <div class="container">
    <div class="row justify-content-center align-items-start">
        <div class="col-sm-6 justify-content-center d-flex align-items-center">

        <div class="calendar mb-5">
            <div class="calendar-header">
                <span class="month-picker" id="month-picker">April</span>
                <div class="year-picker">
                    <span class="year-change" id="prev-year">
                        <pre><</pre>
                    </span>
                    <span id="year">2022</span>
                    <span class="year-change" id="next-year">
                        <pre>></pre>
                    </span>
                </div>
            </div>
            <div class="calendar-body">
                <div class="calendar-week-day">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="calendar-days"></div>
            </div>
           
            <div class="month-list"></div>
        </div>



    </div>


    <div class="col-md-6 ">
        <div class="Calender_data">  
       <p> <button class="calender_btn_yellow">25</button> <span class="mx-5 text_clor">Total classes taken</span></p>
       <p> <button class="calender_btn_green">21</button> <span class="mx-5 text_clor">Present</span></p>
       <p> <button class="calender_btn_red">04</button> <span class="mx-5 text_clor">Absent</span></p>
       <p> <button class="calender_btn_grey">02</button> <span class="mx-5 text_clor">Class not taken</span></p>
       
    </div>
    
      
                <button class="add-course-btn">
                    <p class="text-submit text-white"> Send Approval</p>
                 </button>
      
           
    </div>

</div>

</div>

    
    
    <!-- Address Div end -->

    <!-- Profile Page Start -->
    <!-- 1 st Row Start -->
   

    <!-- 2nd Row Start -->

    <!-- Profile Page End -->





    <!-- footer start -->
    <?php
include('footer.php');
?>
<script>
    let calendar = document.querySelector('.calendar')

const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

isLeapYear = (year) => {
    return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 ===0)
}

getFebDays = (year) => {
    return isLeapYear(year) ? 29 : 28
}

generateCalendar = (month, year) => {

    let calendar_days = calendar.querySelector('.calendar-days')
    let calendar_header_year = calendar.querySelector('#year')

    let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

    calendar_days.innerHTML = ''

    let currDate = new Date()
    if (month > 11 || month < 0) month = currDate.getMonth()
    if (!year) year = currDate.getFullYear()

    let curr_month = `${month_names[month]}`
    month_picker.innerHTML = curr_month
    calendar_header_year.innerHTML = year

    // get first day of month
    
    let first_day = new Date(year, month, 1)

    for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
        let day = document.createElement('div')
        if (i >= first_day.getDay()) {
            day.classList.add('calendar-day-hover')
            day.innerHTML = i - first_day.getDay() + 1
            day.innerHTML += `<span></span>
                            <span></span>
                            <span></span>
                            <span></span>`
            if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                day.classList.add('curr-date')
            }
        }
        calendar_days.appendChild(day)
    }
}

let month_list = calendar.querySelector('.month-list')

month_names.forEach((e, index) => {
    let month = document.createElement('div')
    month.innerHTML = `<div data-month="${index}">${e}</div>`
    month.querySelector('div').onclick = () => {
        month_list.classList.remove('show')
        curr_month.value = index
        generateCalendar(index, curr_year.value)
    }
    month_list.appendChild(month)
})

let month_picker = calendar.querySelector('#month-picker')

month_picker.onclick = () => {
    month_list.classList.add('show')
}

let currDate = new Date()

let curr_month = {value: currDate.getMonth()}
let curr_year = {value: currDate.getFullYear()}

generateCalendar(curr_month.value, curr_year.value)

document.querySelector('#prev-year').onclick = () => {
    --curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}

document.querySelector('#next-year').onclick = () => {
    ++curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}
</script>
</body>

</html>