function power( x,  p){
    var ans = 1;
    for(let i = 0; i < p; i++){
        ans *= parseInt(x);
    }
   document.getElementById('output').textContent = ans;
}
function NOD(x,y){
    let max = 0;
    var ans = 0;
    if (parseInt(x) > parseInt(y)) max = x;
    else max = y;
    for(let i = parseInt(max) ;i >= 1; i--){
        if((parseInt(x) %  i == 0 ) && (parseInt(y) % i == 0))
        {
            ans = i;
            break;
        }
    }
    document.getElementById('NOD').textContent = ans; 
}
function MinV(value){
    let array = (""+value).split("").map(Number)
    let min = 100;
    for(let i = 0; i < array.length; i++)
      if (array[i] < min) min = array[i];

     document.getElementById('answer').textContent = min;
}
function pluraz(value1){
    const words = ["запись","записи","записей"];
    let end = parseInt(value1)%10;
    if(parseInt(value1) > 4 && parseInt(value1) <= 20){
        document.getElementById('answers').textContent = "В результате выполнения запроса было найдено "+ value1 + " " +words[2];
        return;
    }
    switch (parseInt(end)){
    case 1:
        document.getElementById('answers').textContent = "В результате выполнения запроса было найдено "+ value1 + " " +words[0];
        break;
    case 2:
    case 3:
    case 4:
        document.getElementById('answers').textContent = "В результате выполнения запроса было найдено "+ value1 + " " + words[1];
        break;
    }
    if(parseInt(end) > 4 || parseInt(end) == 0)document.getElementById('answers').textContent = "В результате выполнения запроса было найдено "+ value1 + " " +words[2];
}
function fibon(count){
    let x = y = 1;
    let res = 0;
	if(count == 1 || count == 2)res=1;
    else
	  for (let i = 0; i < parseInt(count) - 2; i++) {
		res = x + y;
        x = y;
		y =  res;
	  }
    document.getElementById('answerers').textContent =res;
}