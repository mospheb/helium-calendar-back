<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script>

function logout(){
    window.location.href = "https://helium-front.herokuapp.com/?page=index";
}

function valueselect(sel) {
    var value = sel.options[sel.selectedIndex].value;
    var month = $("#selMonth").val();

    var months = [ "January", "February", "March", "April", "May", "June", 
        "July", "August", "September", "October", "November", "December" ];

    var selectedMonth = months.indexOf(month);
    //alert(selectedMonth);

    var myDate = new Date();
    myDate.setFullYear(2021);
    myDate.setMonth(selectedMonth);
    myDate.setDate(value);

    if(myDate.getDay() == 6 || myDate.getDay() == 0){
        alert(value+' is weekend. Select another day');
        $("#selTracker").val('false');
    } 
    else {
        $("#selTracker").val('true');
    }
    
}


function displayTime(arr, month, day) {
    
    var newArr = JSON.parse(arr);
   
    $("#full-content").css('display', 'block');
    $("#newMonth").val(month);
    $("#newDay").val(day);

    var data = newArr.data;

    data.forEach(function (item) {
        $("#time-content").append('<div class="form-check"><input class="form-check-input" type="radio" name="selTime" value="'+item.int_time+'"/> <label>'+item.int_time+'</label></div>');
    });

    $("#full-content").css('display', 'block');

}

function calendarScript(month, email){

  var url = "https://helium-backend.herokuapp.com/api/interview/read_candidate_two.php?month="+month+"&email="+email;

  $.get(url, function(res, status){
    
    var data = res.data;

    $("#loader").css("display", "none");
    $("#main").css("display", "block");
    
    data.forEach(function (item) {
        var time = item.int_time;
        var day = item.int_day;
        //var id = time+'-'+day;

        if(time == '10:00am-11:00am'){    
            $("#a"+item.int_day).css("background-color", "#56BAED");
            $("#a"+item.int_day).css("color", "#fff");
            $("#a"+item.int_day).append('<p style="font-size:14px; color:white;">Awaiting interview</p>');
        }
        else if(time == '11:00am-12:00pm'){
            $("#b"+item.int_day).css("background-color", "#56BAED");
            $("#b"+item.int_day).css("color", "#fff");
            $("#b"+item.int_day).append('<p style="font-size:14px; color:white;">Awaiting interview</p>');
        }
        else if(time == '12:00pm-1:00pm'){
            $("#c"+item.int_day).css("background-color", "#56BAED");
            $("#c"+item.int_day).css("color", "#fff");
            $("#c"+item.int_day).append('<p style="font-size:14px; color:white;">Awaiting interview</p>');
        }
        else if(time == '1:00pm-2:00pm'){
            $("#d"+item.int_day).css("background-color", "#56BAED");
            $("#d"+item.int_day).css("color", "#fff");
            $("#d"+item.int_day).append('<p style="font-size:14px; color:white;">Awaiting interview</p>');
        }
        else if(time == '2:00pm-3:00pm'){
            $("#e"+item.int_day).css("background-color", "#56BAED");
            $("#e"+item.int_day).css("color", "#fff");
            $("#e"+item.int_day).append('<p style="font-size:14px; color:white;">Awaiting interview</p>');
        }
        else if(time == '3:00pm-4:00pm'){
            $("#f"+item.int_day).css("background-color", "#56BAED");
            $("#f"+item.int_day).css("color", "#fff");
            $("#f"+item.int_day).append('<p style="font-size:14px; color:white;">Awaiting interview</p>');
        }
        else if(time == '4:00pm-5:00pm'){
            $("#g"+item.int_day).css("background-color", "#56BAED");
            $("#g"+item.int_day).css("color", "#fff");
            $("#g"+item.int_day).append('<p style="font-size:14px; color:white;">Awaiting interview</p>');
        }
        else if(time == '5:00pm-6:00pm'){
            $("#h"+item.int_day).css("background-color", "#56BAED");
            $("#h"+item.int_day).css("color", "#fff");
            $("#h"+item.int_day).append('<p style="font-size:14px; color:white;">Awaiting interview</p>');
        }
        
    });

  });
}

</script>