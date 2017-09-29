/*
 *@author: Dave Tolentin
 */

var vacantSlotInterval;
var load = window.onload = function() {
    document.getElementById('parking-area').style.display = 'block';
	document.getElementById('parking-area-holder-canvas').style.display = 'none';
	document.getElementById('high_school_badge').style.visibility = 'hidden';
	document.getElementById('academic_badge').style.visibility = 'hidden';
	document.getElementById('st_bldg_badge').style.visibility = 'hidden';
	document.getElementById('backgate_badge').style.visibility = 'hidden';
	document.getElementById('canteen_badge').style.visibility = 'hidden';
	
	document.getElementById('parking-area-canvas').style.display = 'block';
	// document.getElementById('delete-icon').style.display = 'none';
	vacantSlotInterval = window.setInterval(function() {
		// getVacantSlots();
	}, 2000);
	
	window.setInterval(function() {
		// Reset at 12AM, so check regularly
		resetAt12AM();
		// console.log("Checking time...");
	}, 2000);
}

var xAxis = [];
var yAxis = [];
var available = "";
var loaded = false;
var hsInterval;
function viewHsArea() {
	clearInterval(vacantSlotInterval);
	hsInterval = window.setInterval(function () {
		loadHSArea('High School Area');
	}, 2000);
	loadHSArea('High School Area');
}

function loadHSArea() {
	document.getElementById('high_school_badge').style.visibility = 'visible';
	document.getElementById('academic_badge').style.visibility = 'visible';
	document.getElementById('st_bldg_badge').style.visibility = 'visible';
	document.getElementById('backgate_badge').style.visibility = 'visible';
	document.getElementById('canteen_badge').style.visibility = 'visible';
	
	document.getElementById('parking-area-canvas').style.display = 'block';
	var area = arguments[0];
	console.log("Area: "+area);
	document.getElementById('dashboard').innerHTML = "High School Area";
    document.getElementById("parking-area").style.display = 'none'
	document.getElementById('parking-area-holder-canvas').style.display = 'block';
	var c = document.getElementById("parking-area-canvas");
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
			available = availableSlots;
            var vacant = "#00ff00 ";
            var occupied = "#c82124";
			var ctx = c.getContext("2d");
            var image = new Image();
            image.onload = function () {
                var currentTopX = 200;
                var currentTopY = 30;
				if (!loaded) {
					ctx.shadowBlur = 25;
					ctx.shadowColor = "#000"; 
					loaded = true;
				} else {
					ctx.shadowBlur = null;
					ctx.shadowColor = null; 
				}
				
                ctx.drawImage(image, 69, 0);
				var ctr = 0;
                for (var i = 1; i <= 5; i++) {
                    var found = false;
                    ctx.fillStyle = occupied;
                    for (var j = 0; j < availableSlots.length; j++) {
                        if (i == availableSlots[j]) {
                            found = true;
                        }
                    }
                    if (found) {
						ctr++;
                        ctx.fillStyle = vacant;
                    }
					
					xAxis.push(currentTopX);
					yAxis.push(currentTopY);
					
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
						ctr++;
                        ctx.fillStyle = vacant;
                    }
					
					xAxis.push(currentBelowX);
					yAxis.push(currentBelowY);
					
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
						ctr++;
                        ctx.fillStyle = vacant;
                    }
					
					xAxis.push(currentMiddleX);
					yAxis.push(currentMiddleY);
					
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
						ctr++;
                        ctx.fillStyle = vacant;
                    }
					
					xAxis.push(currentMiddleX);
					yAxis.push(currentMiddleY);
					
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
						ctr++;
                        ctx.fillStyle = vacant;
                    }
					
					xAxis.push(currentLeftX);
					yAxis.push(currentLeftY);
					
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
						ctr++;
						ctx.fillStyle = vacant;
                    }
					
					xAxis.push(currentBelowLeftX);
					yAxis.push(currentBelowLeftY);
					
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
						ctr++;
                        ctx.fillStyle = vacant;
                    }
					
					xAxis.push(currentRightX);
					yAxis.push(currentRightY);
					
                    ctx.beginPath();
                    ctx.arc(currentRightX, currentRightY, 5, 0, Math.PI * 2, true);
                    currentRightX += 8;
                    currentRightY += 32;
                    ctx.fill();
					if (ctr  == 0) {
						document.getElementById('high_school_badge').classList.remove("badge", "badge-success");
						document.getElementById('high_school_badge').classList.add("badge", "badge-danger");
						document.getElementById('high_school_badge').textContent = "0";
					} else {
						document.getElementById('high_school_badge').classList.remove("badge", "badge-danger");
						document.getElementById('high_school_badge').classList.add("badge", "badge-success");
						document.getElementById('high_school_badge').textContent = ctr +"/61";
						// document.getElementById('high_school_badge_board').textContent = ctr;
					}
                }
            };
            image.src = '/cit_parking_system/images/map/ic_academic_area_2d.png';
        } else {
            alert('An error occurred!');
        }
    };
    xhr.send(formData);
}
var alreadyEchoed = false;
function resetAt12AM() {
	var xhr = new XMLHttpRequest();
	xhr.open('POST', '/cit_parking_system/ajax.php?task=resetAt12AM', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
			var response = JSON.parse(xhr.responseText);
			if (response.success) {
				if (!alreadyEchoed) {
					alert("Resetting of area at 12AM is success!");
					alreadyEchoed = true;
				}
			}
		} else {
			console.log("Error");
		}
	};
	xhr.send();
}

function dashboard() {
	clearInterval(hsInterval);
	location.reload();
}

function touchInsideCircle(x, y, circleCenterX, circleCenterY, circleRadius) {
	var dx = Math.pow(x - circleCenterX, 2);
	var dy = Math.pow(y - circleCenterY, 2);
	if ((dx + dy) < Math.pow(circleRadius, 2)) {
		return true;
	} else {
		return false;
	}
}

function updateParkingSlot(event) {
	event = event || window.event;
	console.log(event);
	var canvas = document.getElementById('parking-area-canvas');
	var rect = canvas.getBoundingClientRect();
	var x = event.clientX - rect.left, y = event.clientY - rect.top;
	var availableSlots = available;
	// Put animation here if mouseup and mouse down
	for (var j = 0; j < xAxis.length; j++) {
		var nearestIndex = 0, insideCircle = false;
		var found = false;
		if (touchInsideCircle(x, y, xAxis[j], yAxis[j], 5)) {
			insideCircle = true;
			nearestIndex = (j  + 1);
		}
		if (insideCircle) {
			for (var k = 0; k < availableSlots.length; k++) {
				if (availableSlots[k] != "") {
					if (availableSlots[k].trim() == (nearestIndex)) {
						found = true; // vacant
					}
				}
			}
			if (found) {
				// means it is vacant
				// set to occupied and remove it in the array
				var newSlots = [];
				for (var l = 0; l < availableSlots.length; l++) {
					if (availableSlots[l] != "") {
						if (availableSlots[l].trim() != nearestIndex) {
							newSlots.push(availableSlots[l].trim());
						}
					}
				}
				updateSpecificParkingAreaSlot('High School Area', newSlots.toString(), 'occupied', nearestIndex);
			} else {
				// means it is occupied
                // set to vacant and update the array with corresponding index
				var r = confirm("Are you sure you want to vacate this slot?");
				if (r == true) {
					var newSlots = [];
					newSlots.push(nearestIndex.toString()); // Add first the index we want to set to vacant
					for (var l = 0; l < availableSlots.length; l++) {
						if (availableSlots[l] != '') {
							newSlots.push(availableSlots[l].trim());	
						}
					}
					// Update only the Highschool area
					updateSpecificParkingAreaSlot('High School Area', newSlots.toString(), 'vacant', nearestIndex);
				}
			}
			break;
		}
	}
}

function updateSpecificParkingAreaSlot() {
	var formData = new FormData();
    formData.append('area', arguments[0]);
    formData.append('slot', arguments[1]);
    formData.append('status', arguments[2]);
    formData.append('index', arguments[3]);
	var xhr = new XMLHttpRequest();
	xhr.open('POST', '/cit_parking_system/ajax.php?task=updateSpecificParkingAreaSlot', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
			var response = JSON.parse(xhr.responseText);
			if (response.success) {
				viewHsArea('High School Area');
			}
		} else {
			console.log("Error");
		}
	};
	xhr.send(formData);
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
			var highSchoolArea = response[0]['available_slots'].toString().split(",");
			if (highSchoolArea[0] == "") {
				document.getElementById('high_school_badge').classList.remove("badge", "badge-success");
				document.getElementById('high_school_badge').classList.add("badge", "badge-danger");
				document.getElementById('high_school_badge').textContent = "0";
			} else {
				document.getElementById('high_school_badge').textContent = highSchoolArea.length +"/61";
				document.getElementById('high_school_badge_board').textContent = highSchoolArea.length + "/61";
			}
        } else {
            alert('An error occurred!');
        }
    };
    xhr.send(formData);
}

function getParkingHistory() {
	clearInterval(vacantSlotInterval);
	clearInterval(hsInterval);
	document.getElementById('parking-area-canvas').style.display = 'none';
	document.getElementById('dashboard').innerHTML = "Parking History";
	document.getElementById('parking-area').style.display = 'block';
	document.getElementById('parking-area-holder-canvas').style.visibility = 'none';
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/cit_parking_system/ajax.php?task=history', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
			var response = JSON.parse(xhr.responseText); 
			parkingHistoryHTMLTable(response);
        } else {
            console.log("Error in getting records!");
        }
    };
    xhr.send();
}

function parkingHistoryHTMLTable() {
	// var table = "<div class='pull-right' style='display: none;' id='delete-icon'><div class='caption'><i class='icon-social-dribbble font-green hide'></i></div><div class='actions'><a class='btn btn-circle btn-icon-only btn-default' onclick='deleteSelectedParkingHistory();' href='javascript:;'><i class='icon-trash'></i></a></div><br/></div>";
	var table = "<input type='button' id='print' onclick='printHistory();' class='btn purple btn-sm btn-outline sbold uppercase' value='Print' style='float:right;' />";
	table += "<div class='pull-right' style='display: none;' id='delete-icon'><a href='javascript:;' id='toogle' class='btn btn-outline btn-circle dark btn-sm black' onclick='deleteSelectedParkingHistory();'><i class='fa fa-trash-o'></i> Delete </a><br/><br/></div>";
	table += "<div class='pull-left search' id='search-icon'><input class='form-control' id='history' onkeyup='search(this, history_tbl, history_tbl_tr);' type='text' placeholder='Search...'>";
	table += "&nbsp;<a href='javascript:void(0);' id='advanced_search_parking_history' onclick='advancedSearchParkingHistory();'>Advanced Search...</a>";
	table += "<div id='advanced_search_holder' style='display: none;' class='form-group'><br/><label control-label'>Date From:</label><input class='form-control' type='date' id='date_from' /><label control-label'>Date To:</label><input class='form-control' type='date' id='date_to' /><br/><input type='button' onclick='searchParkingHistory();' class='btn blue' value='Filter now' /></div><br/><br/></div>";
	table += "<table id='history_tbl' class='table table-striped table-bordered table-hover table-checkable order-column'>";
	table += "<thead>";
		table += "<tr id='history_tbl_tr'>";
			table += "<th><label class='mt-checkbox mt-checkbox-single mt-checkbox-outline'><input name='btSelectAll' id='selectAll' onclick='toogleAllCheckbox(this);' type='checkbox'><span></span></label></th>";
			table += "<th>Area</th>";
			table += "<th>Slot Number</th>";
			table += "<th>Date Time Park</th>";
		table += "</tr>";
	table += "</thead>";
	table += "<tbody>";
	for (var i = 0; i < arguments[0].length; i++) {
		table += "<tr class='odd gradeX'>";
			table += "<td><label class='mt-checkbox mt-checkbox-single mt-checkbox-outline'><input data-index='0' name='checkbox' value='"+arguments[0][i]['id']+"' onclick='hideUnhideDeleteIcon(this);' type='checkbox'><span></span></label></td>";
			table += "<td>"+arguments[0][i]['area']+"</td>";
			table += "<td>"+arguments[0][i]['slot_no']+"</td>";
			table += "<td>"+arguments[0][i]['date_time_park']+"</td>";
		table += "</tr>";
	}
	table += "</tbody>";
	table += "</table>";
	document.getElementById('parking-area').innerHTML = table;	
}

function searchParkingHistory() {
	var formData = new FormData();
	var area = document.getElementById('history').value;
	var date_from = document.getElementById('date_from').value;
	var date_to = document.getElementById('date_to').value;
	formData.append('area', area);
	formData.append('date_from', date_from);
	formData.append('date_to', date_to);
	var xhr = new XMLHttpRequest();
    xhr.open('POST', '/cit_parking_system/ajax.php?task=searchParkingHistory', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
			var response = JSON.parse(xhr.responseText); 
			parkingHistoryHTMLTable(response);
        } else {
            console.log("Error in getting records!");
        }
    };
    xhr.send(formData);
}

function advancedSearchParkingHistory() {
	var link_advanced_search = document.getElementById('advanced_search_parking_history');
	if (link_advanced_search.innerHTML == 'Advanced Search...') {
		link_advanced_search.innerHTML = 'Close Advanced Search...';
		document.getElementById('advanced_search_holder').style.display = 'block';
	} else {
		link_advanced_search.innerHTML = 'Advanced Search...';
		document.getElementById('advanced_search_holder').style.display = 'none';
	}
}

function printHistory() {
	var area = document.getElementById('history').value;
	var date_from = document.getElementById('date_from').value;
	var date_to = document.getElementById('date_to').value;
	
	window.open("?task=printHistory&area="+area+"&date_from="+date_from+"&date_to="+date_to, '_blank');
}

function printViolation() {
	var area = document.getElementById('history').value;
	var date_from = document.getElementById('date_from').value;
	var date_to = document.getElementById('date_to').value;
	
	window.open("?task=printViolation&area="+area+"&date_from="+date_from+"&date_to="+date_to, '_blank');
}

function getViolations() {
	var formData = new FormData();
    // formData.append('sort_by', arguments[0]);
	
	clearInterval(vacantSlotInterval);
	clearInterval(hsInterval);
	document.getElementById('parking-area-canvas').style.display = 'none';
	document.getElementById('dashboard').innerHTML = "Violations";
	document.getElementById('parking-area').style.display = 'block';
	
	var xhr = new XMLHttpRequest();
    xhr.open('POST', '/cit_parking_system/ajax.php?task=violation', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
			var response = JSON.parse(xhr.responseText);
			// var table = "<div class='pull-right' style='display: none;' id='delete-icon'><div class='caption'><i class='icon-social-dribbble font-green hide'></i></div><div class='actions'><a class='btn btn-circle btn-icon-only btn-default' onclick='deleteSelectedParkingHistory();' href='javascript:;'><i class='icon-trash'></i></a></div><br/></div>";
			var table = "<div class='pull-right' style='display: none;' id='delete-icon'><a href='javascript:;' id='toogle' class='btn btn-outline btn-circle green btn-sm purple' onclick='editSelectedViolation();'><i class='fa fa-edit'></i> Edit </a>&nbsp;<a href='javascript:;' class='btn btn-outline btn-circle dark btn-sm black' onclick='deleteSelectedViolation();' id='toogle-delete'><i class='fa fa-trash-o'></i> Delete </a><br/><br/></div>";
			table += "<a href='javascript:;' data-target='#stack2' data-toggle='modal' class='btn dark btn-sm btn-outline sbold uppercase'><i class='fa fa-plus'></i> Add Violation </a>&nbsp;<input type='button' id='print' onclick='printHistory();' class='btn purple btn-sm btn-outline sbold uppercase' value='Print' /><br/><br/><div class='pull-right' id='search-icon'><input class='form-control' id='history' onkeyup='search(this, violation_tbl, violation_tbl_tr);' type='text' placeholder='Search...'><br/></div>";
			table += "<table id='violation_tbl' class='table table-striped table-bordered table-hover table-checkable order-column' id='sample_1'>";
			table += "<thead>";
				table += "<tr id='violation_tbl_tr'>";
					table += "<th><label class='mt-checkbox mt-checkbox-single mt-checkbox-outline'><input name='btSelectAll' id='selectAll' onclick='toogleAllCheckbox(this);' type='checkbox'><span></span></label></th>";
					table += "<th onclick='sortTable(1)' width='200'>Area</th>";
					table += "<th>Plate Number</th>";
					table += "<th>Car Model</th>";
					table += "<th>Car Color</th>";
					table += "<th onclick='sortTable(1)'>Violation</th>";
					table += "<th>Date Time Violation</th>";
				table += "</tr>";
			table += "</thead>";
			table += "<tbody>";
            for (var i = 0; i < response.length; i++) {
                table += "<tr class='odd gradeX'>";
					table += "<td><input type='hidden' id='key_"+i+"' value='"+response[i]['id']+"'/><label class='mt-checkbox mt-checkbox-single mt-checkbox-outline'><input data-index='0' name='checkbox' value='"+response[i]['id']+"' onclick='hideUnhideDeleteIcon(this);' type='checkbox'><span></span></label></td>";
					table += "<td>"+response[i]['area']+"</td>";
					table += "<td>"+response[i]['plate_number']+"</td>";
					table += "<td>"+response[i]['car_model']+"</td>";
					table += "<td>"+response[i]['car_color']+"</td>";
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
	if (typeof(arguments[0]) != 'undefined') {
		if (arguments[0] == 1) {
			document.getElementById('sort_by_area').checked = true;
		}
	}
}

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("violation_tbl");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

function toogleAllCheckbox(obj) {
	var checkbox = obj;
	var checkboxes = document.getElementsByName('checkbox');
	if (checkbox.checked) {
		for (var i = 0 ; i < checkboxes.length; i++) {
			checkboxes[i].checked = obj.checked;
		}
		hideUnhideDeleteIcon(checkbox);
	} else {
		for (var i = 0 ; i < checkboxes.length; i++) {
			checkboxes[i].checked = false;
		}
		hideUnhideDeleteIcon(checkbox);
	}
}

function hideUnhideDeleteIcon(obj) {
	if (obj.checked) {
		document.getElementById('search-icon').style.display = 'none';
		document.getElementById('print').style.visibility = 'hidden';
		document.getElementById('delete-icon').style.display = 'block';
	} else {
		var ids = getAllCheckboxIds();
		if (ids.length > 0) {
			document.getElementById('delete-icon').style.display = 'block';
		} else {
			document.getElementById('selectAll').checked = false;
			document.getElementById('delete-icon').style.display = 'none';
			document.getElementById('search-icon').style.display = 'block';
			document.getElementById('print').style.visibility = 'visible';
		}
	}
}

function attachAttrParkingHistory() {
	document.getElementById('toogle').setAttribute('data-target', '#static2');
	document.getElementById('toogle').setAttribute('data-toggle', 'modal');
}

function attachAttrViolation() {
	document.getElementById('toogle').setAttribute('data-target', '#stack1');
	document.getElementById('toogle').setAttribute('data-toggle', 'modal');
}

function attachAttrViolationDelete() {
	document.getElementById('toogle-delete').setAttribute('data-target', '#static2');
	document.getElementById('toogle-delete').setAttribute('data-toggle', 'modal');
}

function changeTextModalBody() {
	document.getElementById('header-title').innerHTML = 'Confirmation';
	document.getElementById('modal-title').innerHTML = 'Are you sure you want to delete the selected record(s)?';
}

function changeTextModalHeader() {
	document.getElementById('header-title').innerHTML = 'Alert';
	document.getElementById('cancel').style.visibility = 'hidden';
	document.getElementById('task').value = '';
	if (arguments[0] == 'edit') {
		document.getElementById('modal-title').innerHTML = 'No selected record(s) to be edited!';
	} else {
		document.getElementById('modal-title').innerHTML = 'No selected record(s) to be deleted!';
	}
}

function deleteSelectedParkingHistory() {
	var ids = getAllCheckboxIds();
	attachAttrParkingHistory();
	if (ids.length == 0) {
		changeTextModalHeader();
		return;
	}
	changeTextModalBody();
	document.getElementById('cancel').style.visibility = 'visible';
	document.getElementById('task').value = 'deleteParkingHistory';
}

function deleteSelected() {
	var task = document.getElementById('task').value;
	if (task == '') {
		return;
	}
	var formData = new FormData();
	var ids = getAllCheckboxIds();
    formData.append('ids', ids);
	var xhr = new XMLHttpRequest();
    xhr.open('POST', '/cit_parking_system/ajax.php?task='+task, true);
    xhr.onload = function () {
		if (xhr.status === 200) {
			var response = JSON.parse(xhr.responseText);
			console.log(response);
			if (response.success) {
				if (task == 'deleteParkingHistory') {
					getParkingHistory();
				} else {
					getViolations();
				}
			} else {
				console.log("Error response");
			}
		} else {
            console.log("Error in deleting records!");
        }
	};
	xhr.send(formData);
}

function addViolation() {
	var area = document.getElementById("a_area").value;
	var pnumber = document.getElementById("a_pnumber").value;
	var violation = document.getElementById("a_violation").value;
	var car_model = document.getElementById("a_car_model").value;
	var car_color = document.getElementById("a_car_color").value;
	
	var formData = new FormData();
	formData.append('area', area);
	formData.append('pnumber', pnumber);
	formData.append('violation', violation);
	formData.append('car_model', car_model);
	formData.append('car_color', car_color);
	var xhr = new XMLHttpRequest();
    xhr.open('POST', '/cit_parking_system/ajax.php?task=addViolation', true);
    xhr.onload = function () {
		if (xhr.status === 200) {
			var response = JSON.parse(xhr.responseText);
			if (response.success) {
				getViolations();
				// Reset the values
				document.getElementById("a_pnumber").value = "";
				document.getElementById("a_violation").value = "";
				document.getElementById("a_car_model").value = "";
				document.getElementById("a_car_color").value = "";
				document.getElementById("a_area").selectedIndex = 0;
			}
		}
	};
	xhr.send(formData);
}

function getAllCheckboxIds() {
	var checkboxes = document.querySelectorAll('input[name=checkbox]:checked');
	var ids = [];
	for (var i = 0; i < checkboxes.length; i++) {
		ids.push(checkboxes[i].value);
	}
	return ids;
}

function deleteSelectedViolation() {
	var ids = getAllCheckboxIds();
	attachAttrViolationDelete();
	if (ids.length == 0) {
		changeTextModalHeader();
		return;
	}
	
	changeTextModalBody();
	document.getElementById('cancel').style.visibility = 'visible';
	document.getElementById('task').value = 'deleteViolation';
}

function editSelectedViolation() {
	attachAttrViolation();
	var ids = getAllCheckboxIds();
	if (ids.length == 0) {
		changeTextModalHeader('edit');
		return;
	}
	// Get only the last index
	// Only one record that can be edited
	var args = ids.length > 0 ? ids[ids.length - 1] : ids;
	
	// Now search now the table with the corresponding id
	var table = document.getElementById('violation_tbl'), td, index;
	var tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
		var key = document.getElementById('key_'+i).value;
		if (key == args) {
			index = i;
			break;
		}
	}
	
	// Get now the data
	var rows = table.getElementsByTagName("tr");
	// Skip the header of the table
	var tr = rows[index + 1];
	// Get now the data
	var td = tr.getElementsByTagName("td");
	var data = [];
	for (var i = 1; i < td.length; i++) {
		data.push(td[i].innerHTML);
	}
	
	document.getElementById("id").value = args;
	document.getElementById("area").value = data[0];
	document.getElementById("pnumber").value = data[1];
	document.getElementById("car_model").value = data[2];
	document.getElementById("car_color").value = data[3];
	document.getElementById("violation").value = data[4];
}

function editSelected() {
	var area = document.getElementById("area").value;
	var pnumber = document.getElementById("pnumber").value;
	var violation = document.getElementById("violation").value;
	var car_model = document.getElementById("car_model").value;
	var car_color = document.getElementById("car_color").value;
	var id = document.getElementById("id").value;
	
	var formData = new FormData();
	formData.append('id', id);
	formData.append('area', area);
	formData.append('pnumber', pnumber);
	formData.append('violation', violation);
	formData.append('car_model', car_model);
	formData.append('car_color', car_color);
	var xhr = new XMLHttpRequest();
    xhr.open('POST', '/cit_parking_system/ajax.php?task=editViolation', true);
    xhr.onload = function () {
		if (xhr.status === 200) {
			var response = JSON.parse(xhr.responseText);
			if (response.success) {
				getViolations();
			}
		}
	};
	xhr.send(formData);
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