function checkform() {
  var allGood = true;
  var arrRequiredFields = document.getElementsByClassName("required");
  console.log(arrRequiredFields);

  for (var i = 0; i < arrRequiredFields.length; i++) {
    var currentReqField = arrRequiredFields[i];
    if (currentReqField.value == "") {
      currentReqField.style.backgroundColor = "red";
      allGood = false;
    } else {
      currentReqField.style.backgroundColor = "white";
    }
  }

  return allGood;
}
