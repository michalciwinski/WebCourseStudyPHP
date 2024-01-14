const person = {
    firstName: "John",
    lastName: "Doe",
    age: 50,
    eyeColor: "blue"
};
const cars = ["Saab", "Volvo", "BMW", "Syrena"];

function onLoadFunctionObjects(){
    document.getElementById("obj-el-1").value = person.firstName;
    document.getElementById("obj-el-2").value = person.lastName;
    document.getElementById("obj-el-3").value = person.age;
    document.getElementById("obj-el-4").value = person.eyeColor;

    document.getElementById("arr-el-1").value = cars[0];
    document.getElementById("arr-el-2").value = cars[1];
    document.getElementById("arr-el-3").value = cars[2];
    document.getElementById("arr-el-4").value = cars[3];
}

function changeObjectValue(_value){
    const newValue = document.getElementById('obj-el-new-'+ (_value)).value;
    document.getElementById('obj-el-'+ (_value)).value = newValue;
}
//****************************************************************************************
function changeObjectValue2(){
    const newValue = document.getElementById('new-value').value;
    const newIndex = document.getElementById('new-index').value;
    document.getElementById('arr-el-'+ (newIndex)).value = newValue;
}

function addNewInputs(){
    const elAmount = document.getElementsByClassName("array-div").length;
    const parent = document.getElementById("container-array");

    //nieskonzcone
    parent.innerHTML = '<div class="array-div">' +
            '<label for="arr-el-'+ (elAmount + 1) + '">1:'+ '</label>' +
        '<input class ="form-input" type="text" id="arr-el-'+ (elAmount + 1) + '" name="arr-el-'+ (elAmount + 1) + '" >'+

        '</div>';
    //parent.appendChild(para);
}


