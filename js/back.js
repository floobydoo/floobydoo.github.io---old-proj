var bgColorArray = ['images/drive.gif','images/fresh.gif','images/mondaymorning.jpg','images/sundaymorning.jpg','images/utopia.jpg'],
    selectBG = bgColorArray[Math.floor(Math.random() * bgColorArray.length)];

document.getElementById("randback").src= selectBG;
