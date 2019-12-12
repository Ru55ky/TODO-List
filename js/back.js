
var xhr = new XMLHttpRequest();

xhr.open('GET', '../index.html', true);

xhr.send();
xhr.onreadystatechange = function(){
    if(xhr.readyState != 4)return;

if(xhr.status != 200){
    alert(xhr.status + ': ' + xhr.statusText); // пример вывода: 404: Not found
}else{
    alert(xhr.responseText); //текст ответа
}
}
