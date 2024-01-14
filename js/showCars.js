function showCarById(numer) {
    currentIndex = numer;
    var currentCar = cars[currentIndex];
    updateCarInfo(currentCar.name, currentCar.text, currentCar.topSpeed, currentCar.engPower, currentCar.tranType , currentCar.tranAmount , currentCar.pictureLink  );
}

function showPreviousCar() {
    currentIndex = (currentIndex - 1 + cars.length) % cars.length;
    var currentCar = cars[currentIndex];
    updateCarInfo(currentCar.name, currentCar.text, currentCar.topSpeed, currentCar.engPower, currentCar.tranType , currentCar.tranAmount , currentCar.pictureLink  );

    //remove active state from all buttons
    document.querySelectorAll('.dot-button').forEach(function(btn) {
        btn.classList.remove('active');
    });
    //add active state to actual clicked button
    const dotsChangeDiv = document.getElementById('dot-button-'+ (currentIndex + 1));
    dotsChangeDiv.classList.add('active');
}

function showNextCar() {
    currentIndex = (currentIndex + 1) % cars.length;
    var currentCar = cars[currentIndex];
    updateCarInfo(currentCar.name, currentCar.text, currentCar.topSpeed, currentCar.engPower, currentCar.tranType , currentCar.tranAmount , currentCar.pictureLink  );

    //remove active state from all buttons
    document.querySelectorAll('.dot-button').forEach(function(btn) {
        btn.classList.remove('active');
    });
    //add active state to actual clicked button
    const dotsChangeDiv = document.getElementById('dot-button-'+ (currentIndex + 1));
    dotsChangeDiv.classList.add('active');
}



function updateCarInfo(title, text, topSpeed, power, transType, transAmount, link){
    document.getElementById('title').innerText  = title;
    document.getElementById('main-text').innerText  = text;
    document.getElementById('kph').innerText  = topSpeed;
    document.getElementById('km').innerText  = power;
    if(transType > 0 ){
        document.getElementById('transtype').innerText  = "Auto";
    }
    else{
        document.getElementById('transtype').innerText  = "Man";
    }
    if(transAmount>0){
        document.getElementById('tranAmount').innerText  = transAmount;
    }
    else{
        document.getElementById('tranAmount').innerText  = "";
    }
    document.getElementById('car-picture').src='../img/' + link;
}