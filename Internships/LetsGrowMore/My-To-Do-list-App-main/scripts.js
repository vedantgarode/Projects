let index = 1;
update();
function adder() {
  console.log("Added Succesfully");
  task = document.getElementById('input-text').value;
  if (localStorage.getItem('itemsjson') == null) {
    taskarray = [];
    taskarray.push([task]);
    localStorage.setItem('itemsjson', JSON.stringify(taskarray))
    
  }
  else {
    taskarrayStr = localStorage.getItem('itemsjson');
    taskarray = JSON.parse(taskarrayStr)
    taskarray.push([task])
    localStorage.setItem('itemsjson', JSON.stringify(taskarray))
  }
  update();
  document.getElementById('input-text').value=""
}
function remove(itemidx) {
  taskarrayStr = localStorage.getItem('itemsjson');
  taskarray = JSON.parse(taskarrayStr)
  taskarray.splice(itemidx,1);
  localStorage.setItem('itemsjson', JSON.stringify(taskarray))
  console.log("removed successfully" + itemidx)
  update();
}
function update() {
  taskarrayStr = localStorage.getItem('itemsjson');
  taskarray = JSON.parse(taskarrayStr)
  let table = document.getElementById("table-body");
  let str = "";

  taskarray.forEach((element, index) => {
    str +=
      `<tr>
    <td width="4%">${index + 1}</td>
    <td width="90%">${element[0]}</td>
    <td class="remove-button" onclick="remove(${index })">Remove</td>
    </tr>`
  });
  table.innerHTML = str;
  console.log("Cleared")
}
function clear() {
  localStorage.clear();
  let table = document.getElementById("table-body");
  table.innerHTML="";
  document.getElementById('input-text').value=""
}
add = document.getElementById("adder");
add.addEventListener("click", adder);

clr = document.getElementById("clear");
clr.addEventListener("click", clear)