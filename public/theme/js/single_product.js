function lanuchModalRating() {
    $(".modal-rating").modal("show")
}

function hideModal() {
    $(".modal").each(function() {
        $(this).modal("hide")
    })
}
$(function() {

    $(document).on({
        mouseover: function(event) {
            $(this).find('.far').addClass('star-over');
            $(this).prevAll().find('.far').addClass('star-over');
        },
        mouseleave: function(event) {
            $(this).find('.far').removeClass('star-over');
            $(this).prevAll().find('.far').removeClass('star-over');
        }
    }, '.eysan');

    $(document).on('click', '.eysan', function() {
        $(".eysan").each(function() {
            $(this).find("i").removeClass("fas");
            $(this).find("i").addClass("far");
        })
        if (!$(this).find('.gasedun').hasClass('eysan-active')) {
            $(this).siblings().find('.star').addClass('far').removeClass('fas eysan-active');
            $(this).find('.gasedun').addClass('eysan-active fas').removeClass('far star-over');
            $(this).prevAll().find('.gasedun').addClass('fas').removeClass('far star-over');
            $(".eysan input").each(function() {
                $(this).removeClass("checked-rating");
            })
            $(".gasedun").each(function() {
                $(this).removeClass("eysan-active");
            })

            $(this).find("input").addClass("checked-rating");
            $("#selected-rate").val($(".checked-rating").val())
        } else {
            // console.log('has');
        }
    });

});
$("#form-app").submit(function(e) {
    try {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var actionUrl = form.attr('action');
        $.ajax({
            type: "GET",
            url: actionUrl,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                $(".alert-success-app").show();
                setTimeout(() => {
                    $(".modal-booking").modal("hide");
                    // location.reload();
                }, 6000);
            }
        });
    } catch (error) {
        // console.error(error);
    }


});
$("#form-rating").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var actionUrl = form.attr('action');
    $.ajax({
        type: "POST",
        url: actionUrl,
        data: form.serialize(), // serializes the form's elements.
        success: function(data) {
            $(".alert-success-rating").show();
            setTimeout(() => {
                $(".modal-rating").modal("hide");
            }, 7000);
        }
    });

});
// Define the validation function
function validateDateRange() {
    var startDate = $("#checkin").datepicker("getDate");
    var endDate = $("#checkout").datepicker("getDate");
    // console.log(disabledDates)
    if (startDate && endDate) {
        // Check that both check-in and check-out dates are set
        var currentDate = new Date(startDate.getTime());
        while (currentDate <= endDate) {
            // Loop through all dates between check-in and check-out
            var dateString = jQuery.datepicker.formatDate("yy-mm-dd", currentDate);
            if (disabledDates.indexOf(dateString) != -1) {
                // Check if the current date is disabled
                $("#checkout").val(""); // Clear the check-out date if it falls within a disabled date range
                alert("Please select a valid check-out date.");
                break;
            }
            currentDate.setDate(currentDate.getDate() + 1); // Move to the next day
        }
    }
}

function sendAppointment() {
    $("#form-app").submit();
}
jQuery(document).ready(function() {

    setTimeout(() => {
        $(".fh5co-loader").fadeOut();
    }, 1000);
    $(function() {
        var startDate, endDate;
        datesToBeDisabled = ["2023/04/22"];

        var datepicker = {
            container: $("#datepicker"),
            dateFormat: "mm/dd/yy",
            dates: datesToBeDisabled,
            status: null,

            inputs: {
                checkin: $("#checkin"),
                checkout: $("#checkout"),
                dates: $("#dates"),
            },
        };

        datepicker.container.datepicker({
            numberOfMonths: 1,
            dateFormat: datepicker.dateFormat,
            minDate: 0,
            maxDate: null,

            beforeShowDay: function(date) {
                var dateStr = jQuery.datepicker.formatDate("yy-mm-dd", date);
                var dateString = jQuery.datepicker.formatDate("yy-mm-dd", date);

                // console.log(disabledDates)

                var highlight = false,
                    currentTime = date.getTime(),
                    selectedTime = datepicker.dates,
                    checkin_date = selectedTime[0] ? new Date(selectedTime[0]) : null,
                    checkout_date = selectedTime[1] ? new Date(selectedTime[1]) : null,
                    checkin_timestamp,
                    checkout_timestamp,
                    classes = "ui-datepicker-highlight";

                date.setHours(0);
                date.setMinutes(0);
                date.setSeconds(0);
                date.setMilliseconds(0);

                currentTime = date.getTime();

                // CHECKIN/CHECKOUT CLASSES
                if (checkin_date) {
                    checkin_date.setHours(0);
                    checkin_date.setMinutes(0);
                    checkin_date.setSeconds(0);
                    checkin_date.setMilliseconds(0);
                    checkin_timestamp = checkin_date.getTime();

                    startDate = checkin_timestamp;
                }

                if (checkout_date) {
                    checkout_date.setHours(0);
                    checkout_date.setMinutes(0);
                    checkout_date.setSeconds(0);
                    checkout_date.setMilliseconds(0);
                    checkout_timestamp = checkout_date.getTime();

                    endDate = checkout_timestamp;
                }

                if (checkin_timestamp && currentTime == checkin_timestamp) {
                    classes = "ui-datepicker-highlight ui-checkin";
                } else if (checkout_timestamp && currentTime == checkout_timestamp) {
                    classes = "ui-datepicker-highlight ui-checkout";
                }
                if (disabledDates.indexOf(dateString) !== -1) {
                    return [disabledDates.indexOf(dateString) == -1];
                }

                // Highlight date range
                if (
                    (selectedTime[0] && selectedTime[0] == currentTime) ||
                    (selectedTime[1] &&
                        currentTime >= selectedTime[0] &&
                        currentTime <= selectedTime[1])
                )
                    highlight = true;
                return [true, highlight ? classes : "disabled"];
            },
            onSelect: function(dateText) {
                validateDateRange();
                document.querySelector(".ui-datepicker-next").innerHTML =
                    '<i class="fa icon-chevron-right" aria-hidden="true"></i>';
                document.querySelector(".ui-datepicker-prev").innerHTML =
                    '<i class="fa icon-chevron-left" aria-hidden="true"></i>';

                // console.log($(".ui-datepicker-prev"))

                if (!datepicker.dates[0] || datepicker.dates[1] !== null) {
                    // CHOOSE FIRST DATE

                    // fill dates array with first chosen date
                    datepicker.dates[0] = $.datepicker
                        .parseDate(datepicker.dateFormat, dateText)
                        .getTime();
                    datepicker.dates[1] = null;

                    // clear all inputs
                    datepicker.inputs.checkin.val("");
                    datepicker.inputs.checkout.val("");
                    datepicker.inputs.dates.val("");

                    // set current datepicker state
                    datepicker.status = "checkin-selected";

                    // create mouseover for table cell
                    $("#datepicker").delegate(
                        ".ui-datepicker td",
                        "mouseover",
                        function() {
                            document.querySelector(".ui-datepicker-next")
                                .innerHTML =
                                '<i class="fa icon-chevron-right" aria-hidden="true"></i>';
                            document.querySelector(".ui-datepicker-prev")
                                .innerHTML =
                                '<i class="fa icon-chevron-left" aria-hidden="true"></i>';

                            if ($(this).data("year") == undefined) return;

                            // datepicker state is not in date range select, depart date wasn't chosen, or return date already chosen then exit
                            if (datepicker.status != "checkin-selected") return;

                            // get date from hovered cell
                            var hoverDate =
                                $(this).data("year") +
                                "-" +
                                ($(this).data("month") + 1) +
                                "-" +
                                $("a", this).html();

                            // parse hovered date into milliseconds
                            hoverDate = $.datepicker
                                .parseDate("yy-mm-dd", hoverDate)
                                .getTime();

                            $("#datepicker td").each(function() {
                                // compare each table cell if it's date is in date range between selected date and hovered
                                if ($(this).data("year") == undefined)
                                    return;

                                var year = $(this).data("year"),
                                    month = $(this).data("month"),
                                    day = $("a", this).html();

                                var cellDate =
                                    $(this).data("year") +
                                    "-" +
                                    ($(this).data("month") + 1) +
                                    "-" +
                                    $("a", this).html();
                                var originalDate =
                                    $(this).data("year") +
                                    "-" +
                                    ($(this).data("month") + 1) +
                                    "-" +
                                    $("a", this).html();

                                // convert cell date into milliseconds for further comparison
                                cellDate = $.datepicker
                                    .parseDate("yy-mm-dd", cellDate)
                                    .getTime();

                                if (
                                    (cellDate >= datepicker.dates[0] &&
                                        cellDate <=
                                        hoverDate) ||
                                    (cellDate <= datepicker.dates[0] &&
                                        cellDate >=
                                        hoverDate)
                                ) {
                                    $(this).addClass("ui-datepicker-hover");
                                } else {
                                    $(this).removeClass(
                                        "ui-datepicker-hover");
                                }
                            });
                        }
                    );
                } else {
                    // CHOOSE SECOND DATE

                    // push second date into dates array
                    datepicker.dates[1] = $.datepicker
                        .parseDate(datepicker.dateFormat, dateText)
                        .getTime();

                    // sort array dates
                    datepicker.dates.sort();
                    var checkInDate = $.datepicker.parseDate("@", datepicker.dates[0]);
                    var checkOutDate = $.datepicker.parseDate("@", datepicker.dates[1]);
                    var startDate = $("#checkin").datepicker("getDate");
                    var endDate = $("#checkout").datepicker("getDate");


                    datepicker.status = "checkout-selected";

                    checkInDate1 = new Date(
                        $.datepicker.formatDate(datepicker.dateFormat, checkInDate)
                    );
                    checkOutDate1 = new Date(
                        $.datepicker.formatDate(datepicker.dateFormat, checkOutDate)
                    );
                    if (getDatesInRange(checkInDate1, checkOutDate1)) {
                        return;
                    }
                    datepicker.inputs.checkin.val(
                        $.datepicker.formatDate(datepicker.dateFormat, checkInDate)
                    );
                    datepicker.inputs.checkout
                        .val($.datepicker.formatDate(datepicker.dateFormat,
                            checkOutDate))
                        .change();
                    datepicker.inputs.dates.val(
                        datepicker.inputs.checkin.val() +
                        " - " +
                        datepicker.inputs.checkout.val()
                    );
                    var price = $("#product-price").val();
                    var days = localStorage.getItem("days");
                    let USDollar = new Intl.NumberFormat('en-US', {
                        style: 'currency',
                        currency: 'USD',
                    });
                    $("#nm-days").text(days)
                    $("#prc-days").text(USDollar.format((price * days)+30));
                    $("#prc-total b").text(USDollar.format((price * days)+30));
                    $("#apr-total b").text(USDollar.format((price * days)+30));
                    $("#price-form").val(USDollar.format((price * days)+30));
                }
            },
        });
    });
})


function getDatesInRange(startDate, endDate) {
    const date = new Date(startDate.getTime());

    const dates = [];

    while (date <= endDate) {
        day = date.getDate();
        day = day.toString();

        month = parseInt(date.getMonth()) + 1;
        month = month.toString();
        if (month.length == 1) {
            month = "0" + month
        }
        if (day.length == 1) {
            day = "0" + day
        }
        dates.push(date.getFullYear() + "-" + month + "-" + day);
        date.setDate(date.getDate() + 1);
    }

    //let difference = dates.filter((x) => disabledDates.includes(x));
    var difference = dates.filter(x => disabledDates.indexOf(x) == 1);


    // console.log(difference, difference.length)
    // console.log(disabledDates, difference.length)
    // console.log(dates, difference.length)
    localStorage.setItem("days", dates.length)
    if (difference.length !== 0) {
        setTimeout(() => {
            $(".ui-datepicker-highlight").each(function() {
                $(this).removeClass("ui-datepicker-highlight");
            });
            $(".ui-checkin").each(function() {
                $(this).removeClass("ui-checkin");
            });
            $(".ui-checkout").each(function() {
                $(this).removeClass("ui-checkout");
            });
        }, 100);
    }


}
$(".lanuchModalLogin").click(function() {
    $(".modal-login").modal("show")
})
$(".lanuchModalBooking").click(function() {
    $(".modal-booking").modal("show")
})
setTimeout(() => {
    $(".ui-datepicker-next").html('<i class="fa icon-chevron-right" aria-hidden="true"></i>')
    $(".ui-datepicker-prev").html('<i class="fa icon-chevron-left" aria-hidden="true"></i>')

}, 1500);
setTimeout(() => {
    $(".ui-corner-all").each(function() {
        $(this).click(function() {
            $(".ui-datepicker-next").html(
                '<i class="fa icon-chevron-right" aria-hidden="true"></i>')
            $(".ui-datepicker-prev").html(
                '<i class="fa icon-chevron-left" aria-hidden="true"></i>')
        })
    })
}, 3000);