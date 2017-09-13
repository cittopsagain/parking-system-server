var load = window.onload = function() {
    document.getElementById('parking-area').style.display = 'block';
	document.getElementById('parking-area-holder-canvas').style.display = 'none';
	getVacantSlots();
	document.getElementById('parking-area-canvas').style.display = 'block';
	viewHsArea('Highschool Area');
}
function viewHsArea() {
	document.getElementById('parking-area-canvas').style.display = 'block';
	var area = arguments[0];
	document.getElementById('dashboard').innerHTML = "High School Area";
    document.getElementById("parking-area").style.display = 'none'
	document.getElementById('parking-area-holder-canvas').style.display = 'block';
    var formData = new FormData();
    formData.append('area', area);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/cit_parking_system/ajax.php?task=parking', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log(xhr.responseText);
            var academicMaxSlot = 10;
            var response = JSON.parse(xhr.responseText);
            var availableSlots = response[0].available_slots.split(",");
            var vacant = "#00ff00 ";
            var occupied = "#c82124";
            var c = document.getElementById("parking-area-canvas");
            var ctx = c.getContext("2d");
            var image = new Image();
            image.onload = function () {
                var currentTopX = 200;
                var currentTopY = 30;
				ctx.shadowBlur = 20;
				ctx.shadowColor = "#000";
                ctx.drawImage(image, 69, 0);
				
                for (var i = 1; i <= 5; i++) {
                    var found = false;
                    ctx.fillStyle = occupied;
                    for (var j = 0; j < availableSlots.length; j++) {
                        if (i == availableSlots[j]) {
                            found = true;
                        }
                    }
                    if (found) {
                        ctx.fillStyle = vacant;
                    }
                    ctx.beginPath();
                    ctx.arc(currentTopX, currentTopY, 5, 0, Math.PI * 2, true);
                    currentTopX += 40;
                    currentTopY += 7;
                    ctx.fill();
                }
				
				var currentBelowX = 200;
                var currentBelowY = 155;
				for (var i = 6; i <= 11; i++) {
                    var found = false;
                    ctx.fillStyle = occupied;
                    for (var j = 0; j < availableSlots.length; j++) {
                        if (i == availableSlots[j]) {
                            found = true;
                        }
                    }
                    if (found) {
                        ctx.fillStyle = vacant;
                    }
                    ctx.beginPath();
                    ctx.arc(currentBelowX, currentBelowY, 5, 0, Math.PI * 2, true);
                    currentBelowX += 40;
                    currentBelowY -= 11;
                    ctx.fill();
                }
				
				var currentMiddleX = 450;
                var currentMiddleY = 110;
				for (var i = 12; i <= 15; i++) {
                    var found = false;
                    ctx.fillStyle = occupied;
                    for (var j = 0; j < availableSlots.length; j++) {
                        if (i == availableSlots[j]) {
                            found = true;
                        }
                    }
                    if (found) {
                        ctx.fillStyle = vacant;
                    }
                    ctx.beginPath();
                    ctx.arc(currentMiddleX, currentMiddleY, 5, 0, Math.PI * 2, true);
                    currentMiddleX += 10;
                    currentMiddleY += 35;
                    ctx.fill();
                }
				
				currentMiddleX -= 15;
                currentMiddleY += 3;
				for (var i = 16; i <= 24; i++) {
                    var found = false;
                    ctx.fillStyle = occupied;
                    for (var j = 0; j < availableSlots.length; j++) {
                        if (i == availableSlots[j]) {
                            found = true;
                        }
                    }
                    if (found) {
                        ctx.fillStyle = vacant;
                    }
                    ctx.beginPath();
                    ctx.arc(currentMiddleX, currentMiddleY, 5, 0, Math.PI * 2, true);
                    currentMiddleX += 8;
                    currentMiddleY += 28;
                    ctx.fill();
                }
				
				var currentLeftX = 300;
                var currentLeftY = 564;
				for (var i = 25; i <= 38; i++) {
                    var found = false;
                    ctx.fillStyle = occupied;
                    for (var j = 0; j < availableSlots.length; j++) {
                        if (i == availableSlots[j]) {
                            found = true;
                        }
                    }
                    if (found) {
                        ctx.fillStyle = vacant;
                    }
                    ctx.beginPath();
                    ctx.arc(currentLeftX, currentLeftY, 5, 0, Math.PI * 2, true);
                    currentLeftX += 18;
                    currentLeftY -= 5;
                    ctx.fill();
                }
				
				var currentBelowLeftX = 326;
                var currentBelowLeftY = 658;
				for (var i = 39; i <= 52; i++) {
                    var found = false;
                    ctx.fillStyle = occupied;
                    for (var j = 0; j < availableSlots.length; j++) {
                        if (i == availableSlots[j]) {
                            found = true;
                        }
                    }
                    if (found) {
                        ctx.fillStyle = vacant;
                    }
                    ctx.beginPath();
                    ctx.arc(currentBelowLeftX, currentBelowLeftY, 5, 0, Math.PI * 2, true);
                    currentBelowLeftX += 18;
                    currentBelowLeftY -= 5.4;
                    ctx.fill();
                }
				
				var currentRightX = 580;
                var currentRightY = 300;
				for (var i = 53; i <= 61; i++) {
                    var found = false;
                    ctx.fillStyle = occupied;
                    for (var j = 0; j < availableSlots.length; j++) {
                        if (i == availableSlots[j]) {
                            found = true;
                        }
                    }
                    if (found) {
                        ctx.fillStyle = vacant;
                    }
                    ctx.beginPath();
                    ctx.arc(currentRightX, currentRightY, 5, 0, Math.PI * 2, true);
                    currentRightX += 8;
                    currentRightY += 32;
                    ctx.fill();
                }
            };
            image.src = '/cit_parking_system/images/map/ic_academic_area_2d.png';
        } else {
            alert('An error occurred!');
        }
    };
    xhr.send(formData);
}

function dashboard() {
	window.location.href;
}

function getVacantSlots() {
	document.getElementById('parking-area-canvas').style.display = 'none';
	var formData = new FormData();
    formData.append('area', '');
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/cit_parking_system/ajax.php?task=parking', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
			var response = JSON.parse(xhr.responseText);
			// response[0] = High school area
			var highSchoolArea = response[0]['available_slots'].split(",");
			console.log(response[0]['available_slots'].split(","));
			if (highSchoolArea[0] == "") {
				document.getElementById('high_school_badge').classList.remove("badge", "badge-success");
				document.getElementById('high_school_badge').classList.add("badge", "badge-danger");
				document.getElementById('high_school_badge').textContent = "0";
			} else {
				document.getElementById('high_school_badge').textContent = highSchoolArea.length+"/61";
				document.getElementById('high_school_badge_board').textContent = highSchoolArea.length;
			}
        } else {
            alert('An error occurred!');
        }
    };
    xhr.send(formData);
}

function getParkingHistory() {
	document.getElementById('parking-area-canvas').style.display = 'none';
	document.getElementById('dashboard').innerHTML = "Parking History";
	document.getElementById('parking-area').style.display = 'block';
	document.getElementById('parking-area-holder-canvas').style.visibility = 'none';
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/cit_parking_system/ajax.php?task=history', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
			var response = JSON.parse(xhr.responseText);
			var table = "<div class='pull-right search'><input class='form-control' id='history' onkeyup='search(this, history_tbl, history_tbl_tr);' type='text' placeholder='Search...'><br/></div>";
			table += "<table id='history_tbl' class='table table-striped table-bordered table-hover table-checkable order-column'>";
			table += "<thead>";
				table += "<tr id='history_tbl_tr'>";
					table += "<th>Area</th>";
					table += "<th>Slot Number</th>";
					table += "<th>Date Time Park</th>";
				table += "</tr>";
			table += "</thead>";
			table += "<tbody>";
            for (var i = 0; i < response.length; i++) {
                table += "<tr class='odd gradeX'>";
					table += "<td>"+response[i]['area']+"</td>";
					table += "<td>"+response[i]['slot_no']+"</td>";
					table += "<td>"+response[i]['date_time_park']+"</td>";
				table += "</tr>";
            }
			table += "</tbody>";
			table += "</table>";
			document.getElementById('parking-area').innerHTML = table;			
        } else {
            console.log("Error in getting records!");
        }
    };
    xhr.send();
}

function getViolations() {
	document.getElementById('parking-area-canvas').style.display = 'none';
	document.getElementById('dashboard').innerHTML = "Violations";
	document.getElementById('parking-area').style.display = 'block';
	var xhr = new XMLHttpRequest();
    xhr.open('POST', '/cit_parking_system/ajax.php?task=violation', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
			var response = JSON.parse(xhr.responseText);
			var table = "<div class='pull-right search'><input class='form-control' id='history' onkeyup='search(this, violation_tbl, violation_tbl_tr);' type='text' placeholder='Search...'><br/></div>";
			table += "<table id='violation_tbl' class='table table-striped table-bordered table-hover table-checkable order-column' id='sample_1'>";
			table += "<thead>";
				table += "<tr id='violation_tbl_tr'>";
					table += "<th width='200'>Area</th>";
					table += "<th>Plate Number</th>";
					table += "<th>Violation</th>";
					table += "<th>Date Time Violation</th>";
				table += "</tr>";
			table += "</thead>";
			table += "<tbody>";
            for (var i = 0; i < response.length; i++) {
                table += "<tr class='odd gradeX'>";
					table += "<td>"+response[i]['area']+"</td>";
					table += "<td>"+response[i]['plate_number']+"</td>";
					table += "<td>"+response[i]['violation_type']+"</td>";
					table += "<td>"+response[i]['violation_date']+"</td>";
				table += "</tr>";
            }
			table += "</tbody>";
			table += "</table>";
			document.getElementById('parking-area').innerHTML = table;			
        } else {
            console.log("Error in getting records!");
        }
    };
    xhr.send();
}

function search() {
	var table = document.getElementById(arguments[1].id);
	var filter, found, tr, td, i, j;
	var tr = table.getElementsByTagName("tr");
	filter = arguments[0].value.toUpperCase();
	for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                found = true;
            }
        }
        if (found) {
			tr[i].style.display = "";
            found = false;
        } else {
			if (tr[i].id !=  arguments[2].id) {
				tr[i].style.display = "none";
			}
        }
    }
}