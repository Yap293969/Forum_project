<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="CSS/event_history&calendar.css">

    <style>
        /* Add any additional styles here */
        #calendar {
            margin-top: 20px; /* Adjust as needed */
        }

        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            cursor: pointer;
        }

        td:hover {
            background-color: #f5f5f5;
        }
    </style>

    <script>
        $(document).ready(function() {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            // Simple Calendar Table
            buildCalendarTable(y, m);

            $('#external-events div.external-event').each(function() {
                var eventObject = {
                    title: $.trim($(this).text())
                };
                $(this).data('eventObject', eventObject);
                $(this).draggable({
                    zIndex: 999,
                    revert: true,
                    revertDuration: 0
                });
            });

            var calendar =  $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title', // Display title in the center
                    right: 'agendaDay,agendaWeek,month'
                },
                editable: true,
                firstDay: 1,
                selectable: true,
                defaultView: 'month',
                axisFormat: 'h:mm',
                columnFormat: {
                    month: 'ddd',
                    week: 'ddd d',
                    day: 'dddd M/d',
                    agendaDay: 'dddd d'
                },
                titleFormat: {
                    month: 'MMMM yyyy',
                    week: "MMMM yyyy",
                    day: 'MMMM yyyy'
                },
                allDaySlot: false,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt('Event Title:');
                    if (title) {
                        calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                            true
                        );
                    }
                    calendar.fullCalendar('unselect');
                },
                droppable: true,
                drop: function(date, allDay) {
                    var originalEventObject = $(this).data('eventObject');
                    var copiedEventObject = $.extend({}, originalEventObject);
                    copiedEventObject.start = date;
                    copiedEventObject.allDay = allDay;
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                    if ($('#drop-remove').is(':checked')) {
                        $(this).remove();
                    }
                },
                events: [
                    {
                        title: 'All Day Event',
                        start: new Date(y, m, 1)
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: new Date(y, m, d-3, 16, 0),
                        allDay: false,
                        className: 'info'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: new Date(y, m, d+4, 16, 0),
                        allDay: false,
                        className: 'info'
                    },
                    {
                        title: 'Meeting',
                        start: new Date(y, m, d, 10, 30),
                        allDay: false,
                        className: 'important'
                    },
                    {
                        title: 'Lunch',
                        start: new Date(y, m, d, 12, 0),
                        end: new Date(y, m, d, 14, 0),
                        allDay: false,
                        className: 'important'
                    },
                    {
                        title: 'Birthday Party',
                        start: new Date(y, m, d+1, 19, 0),
                        end: new Date(y, m, d+1, 22, 30),
                        allDay: false,
                    },
                    {
                        title: 'Click for Google',
                        start: new Date(y, m, 28),
                        end: new Date(y, m, 29),
                        url: 'https://ccp.cloudaccess.net/aff.php?aff=5188',
                        className: 'success'
                    }
                ],
                viewRender: function(view) {
                    // Update the title with the selected month and year
                    $('.fc-center h2').text(view.title);
                }
            });
        });

        function buildCalendarTable(year, month) {
            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);
            const calendarBody = document.getElementById("calendar-body");
            calendarBody.innerHTML = ""; // Clear previous content
            let dateCounter = 1;

            for (let i = 0; i < 6; i++) {
                const row = document.createElement("tr");

                for (let j = 0; j < 7; j++) {
                    const cell = document.createElement("td");

                    if ((i === 0 && j < firstDay.getDay()) || dateCounter > lastDay.getDate()) {
                        cell.textContent = "";
                    } else {
                        cell.textContent = dateCounter;
                        cell.addEventListener("click", function () {
                            alert(`Clicked on ${year}-${month + 1}-${dateCounter}`);
                        });
                        dateCounter++;
                    }

                    row.appendChild(cell);
                }

                calendarBody.appendChild(row);
            }
        }
    </script>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div id='wrap'>
        <!-- Simple Calendar Table -->
        <table>
            <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>
            </thead>
            <tbody id="calendar-body">
                <!-- Calendar days will be inserted here dynamically -->
            </tbody>
        </table>

        <!-- FullCalendar -->
        <div id='calendar'></div>

        <div style='clear:both'></div>
    </div>

    <nav aria-label="Page navigation example" role="navigation">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

    <?php include 'footer.php'; ?>
</body>
</html>
