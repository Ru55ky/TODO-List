"use strict"

let hoverMessage = document.querySelector('.hover');
let taskName = document.querySelector('.taskName');

let parent = document.querySelector('.parent');
let parentInput = document.querySelector('.parent-input');
let checkInput = document.querySelector('.check-input');
let mainInput = document.querySelector('.inp-js');
let nameInput = document.querySelector('.name-input');
let nameBtn = document.querySelector('.name-button');
let inputNav = document.querySelector('.input-nav');
let popup = document.querySelector('.popup');
let popupName = document.querySelector('.popup-name');
let inputPopup = document.querySelector('.input-popup');
let btnPopup = document.querySelector('.btn-success');

//приветствие с помощью Popup
btnPopup.addEventListener('click', function(){
  popup.classList.add('popup-hover');
  inputNav.value = inputPopup.value;
  inputPopup.value = '';
  popupName.classList.add('inp-animation');
})
//обработчик на форму
 checkInput.addEventListener('click', function (evt) { 
    evt.preventDefault();
    //клонирование задачи
    let inputClon = mainInput.cloneNode(true);
    inputClon.style.marginTop = '3%';
    inputClon.style.cursor = 'pointer';
    //вставляем клон под родителя
    mainInput.parentNode.insertBefore(inputClon, inputClon.nextSibling);
    //выводим сообщение о пустой задаче
    if(mainInput.value === ''){
      inputClon.parentNode.removeChild(inputClon);
      taskName.classList.remove('taskName');
    }else{
      taskName.classList.add('taskName');
    }//удаляем клон
    inputClon.addEventListener('click', function () { 
      inputClon.parentNode.removeChild(inputClon);
    });
    
    mainInput.value = '';
 })

 if(!mainInput.hasChildNodes.length === 0){
   hoverMessage.classList.remove('hover')
 }else if(mainInput.hasChildNodes){
  console.log('есть клоны');
}

 window.onload = function(){
    mainInput.classList.add('inp-animation');
    checkInput.classList.add('inp-animation');
 }