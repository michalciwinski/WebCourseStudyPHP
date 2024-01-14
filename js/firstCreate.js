function firstCreate(){
    var currentCar = cars[currentIndex];
    var carInfoDiv = document.getElementById('garage-content');

    var amountOfCars = cars.length;
    var tranAmountText;
    if (currentCar.tranAmount > 0) {
        tranAmountText = currentCar.tranAmount;
    } else {
        tranAmountText = "";
    }
    var tranType;
    if(currentCar.tranType == "1"){
        tranType = "Auto";
    }
    else {
        tranType = "Man";
    }

    carInfoDiv.innerHTML = '<div class = "main-content">' +
        '<div id = "first-tile">' +
            '<div id = "first-left">' +
                '<div id = "title">' + currentCar.name +

                '</div>' +
                '<div id = "main-text">' + currentCar.text +

                '</div>' +
            '</div>' +
            '<div id = "first-right">'+
                '<img src="../img/firstcar.png" alt="" id="car-picture">'+
            '</div>' +
        '</div>' +
        '<div id = "second-tiles">'+
            '<div class = "tile" id="tile-1">'+
                '<div class = "sc-left-div" id="speed-pict-div">'+
                    '<img src="../img/speed.png" alt="" id="speed-picture" class = "sc-left-pict">'+
                '</div>'+
                '<div class = "sc-middle-div">'+
                    '<p class = "header-middle">Top Speed'+
                    '</p>'+
                    '<p class = "main-text-middle" id="kph">'+ currentCar.topSpeed +
                    '</p>'+
                '</div>'+
                '<div class = "sc-right-div" id="kph-div">'+
                    '<p class = "right-unit">KPH'+
                    '</p>'+
                '</div>'+
            '</div>'+
            '<div class = "tile" id="tile-2">'+
                '<div class = "sc-left-div" id="speed-pict-div">'+
                    '<img src="../img/engine.png" alt="" id="speed-picture" class = "sc-left-pict">'+
                '</div>'+
                '<div class = "sc-middle-div" id="top-speed-div">'+
                    '<p class = "header-middle">Engine'+
                    '</p>'+
                    '<p class = "main-text-middle" id="km">'+ currentCar.engPower +
                    '</p>'+
                '</div>'+
                '<div class = "sc-right-div" id="kph-div">'+
                    '<p class = "right-unit">KM'+
                    '</p>'+
                '</div>'+
            '</div>'+
            '<div class = "tile" id="tile-3">'+
                '<div class = "sc-left-div" id="speed-pict-div">'+
                    '<img src="../img/transmision.png" alt="" id="speed-picture" class = "sc-left-pict">'+
                '</div>'+
                '<div class = "sc-middle-div" id="top-speed-div">'+
                    '<p class = "header-middle">Transmission'+
                    '</p>'+
                    '<p class = "main-text-middle" id="transtype">'+ tranType +
                    '</p>'+
                '</div>'+
                '<div class = "sc-right-div" id="kph-div">'+
                    '<p class = "right-unit" id="tranAmount">'+ tranAmountText +
                    '</p>'+
                '</div>'+
            '</div>'+
        '</div>' +

        '<div class = "third-tiles">'+
            '<div id = "dots-change-div" >'+

            '</div>' +
            '<div id = "arrows-change-div" >'+
                '<button class = "arrow-change" onClick="showPreviousCar()">'+
                    '<img src="../img/arleft.png" alt="" id="arleft" class = "arrow-picture">'+
                '</button>'+
                '<button class = "arrow-change" onClick="showNextCar()">'+
                    '<img src="../img/arright.png" alt="" id="arright" class = "arrow-picture">'+
                '</button>'+
            '</div>' +
        '</div>' +

        '</div>';
    document.getElementById('car-picture').src='../img/' + currentCar.pictureLink;

    let dotsChangeDiv = document.getElementById('dots-change-div');
    let dotButtons = [];

    for (let i = 0; i < cars.length; i++) {
        const dotButton = document.createElement('button');
        dotButton.className = 'dot-button';
        dotButton.id = 'dot-button-' + (i + 1);

        dotButton.addEventListener('click', function(e) {
            let parts = this.id.split('-');
            let numer = parts[parts.length - 1];
            showCarById(numer-1);

            //remove active state from all buttons
            document.querySelectorAll('.dot-button').forEach(function(btn) {
                btn.classList.remove('active');
            });
            //add active state to actual clicked button
            this.classList.add('active');

        });

        dotButtons.push(dotButton);
        dotsChangeDiv.appendChild(dotButton);

    }
    document.getElementById('dot-button-1').classList.add('active');




}
