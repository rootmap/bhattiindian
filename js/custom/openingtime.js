/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var date = new Date();
var weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

var weekday = weekdays[date.getDay()];
console.log(weekday);
if (weekday == "Sunday") {
    var startTime = '8:27 AM';
    var endTime = '3:00 PM';
    var startTime1 = '5:00 PM';
    var endTime1 = '11:40 PM';
} else if (weekday == "Monday") {
    var startTime = '8:00 AM';
    var endTime = '3:00 PM';
    var startTime1 = '5:00 PM';
    var endTime1 = '11:55 PM';
}
else if (weekday == "Tuesday") {
    var startTime = '8:55 AM';
    var endTime = '3:55 PM';
    var startTime1 = '5:55 PM';
    var endTime1 = '11:55 PM';
}
else if (weekday == "Wednesday") {
    var startTime = '8:55 AM';
    var endTime = '1:50 PM';
    var startTime1 = '5:55 PM';
    var endTime1 = '11:55 PM';
}
else if (weekday == "Thursday") {
    var startTime = '8:55 AM';
    var endTime = '3:55 PM';
    var startTime1 = '4:55 PM';
    var endTime1 = '11:00 PM';
}
else if (weekday == "Friday") {
    var startTime = '8:27 AM';
    var endTime = '11:40 AM';
    var startTime1 = '3:27 PM';
    var endTime1 = '11:40 PM';
} else {
    var startTime = '08:00 AM';
    var endTime = '3:00 PM';
    var startTime1 = '4:00 PM';
    var endTime1 = '11:00 PM';
}


//var startTime = '8:30 AM';
//var endTime   = '6:30 PM';

var now = new Date();
var startDate = dateObj(startTime);
var endDate = dateObj(endTime);
var startDate1 = dateObj(startTime1);
var endDate1 = dateObj(endTime1);
//console.log('startTime1 ' + startTime1);
//console.log('endTime1 ' + endTime1);
//console.log('now ' + now);
//console.log('startDate ' + startDate1);
//console.log('endDate ' + endDate1);
if ((now < endDate && now > startDate) || (now < endDate1 && now > startDate1)) {
    var open = 'open';
} else {
    var open = 'close';
    open_intro_modal();
}
//var open = now < endDate1 && now > startDate1 ? 'open' : 'closed';
console.log('Restaurant is ' + open);

function dateObj(d) {
    var parts = d.split(/:|\s/),
            date = new Date();
    if (parts.pop().toLowerCase() == 'pm')
        parts[0] = (+parts[0]) + 12;
    date.setHours(+parts.shift());
    date.setMinutes(+parts.shift());
    return date;
}


