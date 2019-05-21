
@extends ('adminlayouts.master')

@section('title', 'Team View')

@section('content')
<head>
    <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <link href="{{ asset('css/css2/team.css') }}" rel="stylesheet">

</head>

<div class="container-fluid">
        <br><br>




        <p>&ensp;&ensp;&ensp;Unallocate&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Group 1&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Group 2&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Group3&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Group4</p>

        <div class="dropcontainer">
            <div class="droptarget">

                <p draggable="true" id="dragtarget9">Student1</p>
                <p draggable="true" id="dragtarget10">Student2</p>
                <p draggable="true" id="dragtarget11">Student3</p>
                <p draggable="true" id="dragtarget12">Student4</p>
                <p draggable="true" id="dragtarget13">Student5</p>
                <p draggable="true" id="dragtarget18">Student10</p>
                <p draggable="true" id="dragtarget19">Student11</p>
                <p draggable="true" id="dragtarget24">Student16</p>
                <p draggable="true" id="dragtarget25">Student17</p>
                <p draggable="true" id="dragtarget26">Student18</p>
                <p draggable="true" id="dragtarget27">Student19</p>

            </div>



            <div class="droptarget">
                <p draggable="true" id="dragtarget">Gary</p>
                <p draggable="true" id="dragtarget2">Huss</p>
                <p draggable="true" id="dragtarget3">Chris</p>
                <div>
                    <p draggable="true" id="dragtarget4">Benan</p>
                </div>
            </div>

            <div class="droptarget">
                <p draggable="true" id="dragtarget20">Student12</p>
                <p draggable="true" id="dragtarget21">Student13</p>
                <p draggable="true" id="dragtarget22">Student14</p>
                <p draggable="true" id="dragtarget23">Student15</p>

            </div>



            <div class="droptarget">
                <p draggable="true" id="dragtarget5">Jack</p>
                <p draggable="true" id="dragtarget6">Derryn</p>
                <p draggable="true" id="dragtarget7">JustinB</p>
                <p draggable="true" id="dragtarget8">Ken</p>
            </div>
            <div class="droptarget">

                <p draggable="true" id="dragtarget14">Student6</p>
                <p draggable="true" id="dragtarget15">Student7</p>
                <p draggable="true" id="dragtarget16">Student8</p>
                <p draggable="true" id="dragtarget17">Student9</p>

            </div>


        </div>


        <br><br><br><br>
        <div class="container" style="position: absolute; left:70%">

            <p id="demo"></p>

            <p>Click the button to Up load CSV file.</p>
            <input type="file" id="myFile">

            <br>
            <p>Click the button to delete the team.</p>
            <button class="delete">
                <br> Delete
            </button>
            <br>
            <br>
            <p>Click the button to shuffle the team.</p>
            <button class="shffule">
                Shuffle
            </button>
        </div>










        <script>
            function allowDrop(ev) {
                ev.preventDefault();
            }

            function drag(ev) {
                ev.dataTransfer.setData("text", ev.target.id);
            }

            function drop(ev) {
                ev.preventDefault();
                var data = ev.dataTransfer.getData("text");
                ev.target.appendChild(document.getElementById(data));
            }
        </script>
<script>
        /* Events fired on the drag target */

        document.addEventListener("dragstart", function(event) {
            // The dataTransfer.setData() method sets the data type and the value of the dragged data
            event.dataTransfer.setData("Text", event.target.id);

            // Output some text when starting to drag the p element
            document.getElementById("demo").innerHTML = "Allocating group member";

            // Change the opacity of the draggable element
            event.target.style.opacity = "0.4";
        });

        // While dragging the p element, change the color of the output text
        document.addEventListener("drag", function(event) {
            document.getElementById("demo").style.color = "red";
        });

        // Output some text when finished dragging the p element and reset the opacity
        document.addEventListener("dragend", function(event) {
            document.getElementById("demo").innerHTML = "Team member has allocated";
            event.target.style.opacity = "1";
        });

        /* Events fired on the drop target */

        // When the draggable p element enters the droptarget, change the DIVS's border style
        document.addEventListener("dragenter", function(event) {
            if (event.target.className == "droptarget") {
                event.target.style.border = "3px dotted red";
            }
        });

        // By default, data/elements cannot be dropped in other elements. To allow a drop, we must prevent the default handling of the element
        document.addEventListener("dragover", function(event) {
            event.preventDefault();
        });

        // When the draggable p element leaves the droptarget, reset the DIVS's border style
        document.addEventListener("dragleave", function(event) {
            if (event.target.className == "droptarget") {
                event.target.style.border = "";
            }
        });

        /* On drop - Prevent the browser default handling of the data (default is open as link on drop)
           Reset the color of the output text and DIV's border color
           Get the dragged data with the dataTransfer.getData() method
           The dragged data is the id of the dragged element ("drag1")
           Append the dragged element into the drop element
        */
        document.addEventListener("drop", function(event) {
            event.preventDefault();
            if (event.target.className == "droptarget") {
                document.getElementById("demo").style.color = "";
                event.target.style.border = "";
                var data = event.dataTransfer.getData("Text");
                event.target.appendChild(document.getElementById(data));
            }
        });
    </script>
    <script>
        $(function() {

            $('button').click(function() {
                $("div.dropcontainer").children('div.droptarget').randomize("p");
            });

        });

        (function($) {

            $.fn.randomize = function(childElem) {
                return this.each(function() {
                    var $this = $(this);
                    var elems = $this.children(elems);

                    elems.sort(function() {
                        return (Math.round(Math.random()) - 0.5);
                    });

                    $this.remove(childElem);

                    for (var i = 0; i < elems.length; i++) $this.append(elems[i]);
                });
            }
        })(jQuery);
    </script>
@endsection
