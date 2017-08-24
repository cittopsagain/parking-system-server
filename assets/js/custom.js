function viewAcademicArea() {
    document.getElementById("parking-area").style.display = 'none';
    var formData = new FormData();
    formData.append('area', 'academic');
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/cit_parking_system/ajax.php', true);
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
                var currentTopX = 75;
                var currentTopY = 75;
                ctx.drawImage(image, 69, 50);
                for (var i = 1; i < academicMaxSlot; i++) {
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
                    currentTopX += 20;
                    currentTopY += 10;
                    ctx.fill();
                }
            };
            image.src = '/cit_parking_system/images/map/academic_area_top_view.png';
        } else {
            alert('An error occurred!');
        }
    };
    xhr.send(formData);
}