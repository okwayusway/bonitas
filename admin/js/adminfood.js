let currentSelected = {
  id:0,
  foodName:"",
  description:"",
  price:0,
  category:0,
  thumbnail:"",
  thumbnailFullUrl:""
};

document.querySelector("table").onload = getMenuList();
document.getElementById("menuCategory").onload = getMenuCategory();
document.getElementById("foodform").onsubmit = async (e) => {
 e.preventDefault();
 addMenu();
}

function getMenuCategory(){
  console.log("Test");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function(ev){
        if (xmlhttp.status != 200) { // analyze HTTP status of the response
            alert(`Error ${xmlhttp.status}: ${xmlhttp.statusText}`); // e.g. 404: Not Found
          } else { 
            let optionList = JSON.parse(xmlhttp.responseText);
            let categories = [...optionList];
            let select = document.getElementById("menuCategory");
            let updateSelect = document.getElementById("updateMenuCategory");
            categories.forEach(item => {
              let opt = document.createElement("option");
              let upOpt = document.createElement("option");
              opt.value = Number.parseInt(item.id);
              opt.innerHTML = item.category;
              upOpt.value = Number.parseInt(item.id);
              upOpt.innerHTML = item.category;
              select.appendChild(opt);
              updateSelect.appendChild(upOpt);
            });
   
          }
    }
      xmlhttp.open("GET", "../admin/php/getmenucategory.php", true);
      xmlhttp.send(null);
}

function getMenuList(){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onload = function(ev){
      if (xmlhttp.status != 200) { // analyze HTTP status of the response
          alert(`Error ${xmlhttp.status}: ${xmlhttp.statusText}`); // e.g. 404: Not Found
        } else { 
          let menulist = JSON.parse(xmlhttp.response);
          let menus = [...menulist];
          let tblbody = document.getElementById("menutblbody");

          menus.forEach(element => {
            let tr = document.createElement("tr")
            tr.dataset.id = element["id"];
            for(const [key, value] of Object.entries(element)){
              let td = document.createElement("td");
              td.classList.add("text-center");
              if(key == "id" || key=="categoryId"){
                continue;
              }
              
              if(key == "thumbnailurl"){
                let img = document.createElement("img")
                img.classList.add("menu-img");
                img.alt = value;
                img.src = `../Images/${value}`;
                td.appendChild(img);
                tr.appendChild(td);
              }
              else if(key == "issuggested" || key == "isfeatured"){
                let input = document.createElement("input");
                input.type ="checkbox";
                input.checked = (value == 1 || value == "1");
                input.onclick = (event) =>{
                  let status = input.checked ? "adding" : "removing";
                  let suggestedOrFeatured = (key == "issuggested") ? "Suggested Foods" : "Featured Foods";
                  showToastr("info", `${element["name"]} ${status} to ${suggestedOrFeatured}`);
                  toggleFoodStatus(element["id"], input.checked ? 1: 0, (key == "issuggested") ? "suggested":"featured");
                }
                td.appendChild(input);
                tr.appendChild(td);
              }
              else{
                td.innerHTML = value;
                tr.appendChild(td);
              }
            }

            appendActionButtons(tr);

            tr.onclick = function(){
              currentSelected.foodName = element["name"];
              currentSelected.id = element["id"];
              currentSelected.description = element["description"];
              currentSelected.price = element["price"];
              currentSelected.thumbnail = element["thumbnailurl"];
              currentSelected.thumbnailFullUrl = "../Image/"+element["thumbnailurl"];
              currentSelected.category = element["categoryId"];
              setUpdateValue();
            }

            tblbody.appendChild(tr);
          });
          
        }
  }
    xmlhttp.open("GET", "../admin/php/getfoods.php", true);
    xmlhttp.send(null);
}

function addMenu(){
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onload = function(ev){
    if (xmlhttp.status != 200) { // analyze HTTP status of the response
        alert(`Error ${xmlhttp.status}: ${xmlhttp.statusText}`); // e.g. 404: Not Found
      } 
   else{ 
        showToastr("success","Successfully new menu");
      }
  }
  xmlhttp.open("POST", "../admin/php/addfood.php", true);
  let form = document.getElementById("foodform");
  let formData = new FormData(form);
  xmlhttp.send(formData);
}

function appendActionButtons(tr){
 let td = document.createElement("td")

 td.innerHTML = `
 <i class="fas fa-edit" style="color: green; margin-right: 2px;" alt="tooltip" title="Edit" data-toggle="modal" data-target="#updateFoodModal"></i>
 <i class="fas fa-trash-alt" style="color: red;" alt="tooltip" title="Delete" data-toggle="modal" data-target="#deleteModal"></i>`;
 tr.appendChild(td);
}

function showToastr(type,message){
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  //type = info,success, warning, error
  toastr[type](message);
}

function toggleFoodStatus(id, newVal,type){
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onload = function(ev){
    if (xmlhttp.status != 200) { // analyze HTTP status of the response
        showToastr("error",`Error ${xmlhttp.status}: ${xmlhttp.statusText}`)
      } 
   else{ 
        setTimeout(()=>{
          toastr.remove();
          showToastr("success","Successfully changed");
        }, 1000); 
      }
  }
  xmlhttp.open("POST", "../admin/php/updatefood.php", true);
  let formData = new FormData();
  formData.append(type, true);
  formData.append("id", id);
  formData.append("newVal", newVal);
  xmlhttp.send(formData);
}

function deleteFoodOnMenuList(){
  showToastr("info", `Deleting ${currentSelected.foodName} on the menu list`);
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onload = function(ev){
    if (xmlhttp.status != 200) { // analyze HTTP status of the response
        showToastr("error",`Error ${xmlhttp.status}: ${xmlhttp.statusText}`)
      } 
   else{ 
        setTimeout(()=>{
          toastr.remove();
          //remove the row after successfully deleted
          let tblbody = document.getElementById("menutblbody");
          let tr = document.querySelector(`tr[data-id = '${currentSelected.id}']`);
          tblbody.removeChild(tr);
          showToastr("success",`${currentSelected.foodName} Successfully Deleted `);
        }, 1200); 
      }
  }
  xmlhttp.open("POST", "../admin/php/updatefood.php", true);
  let formData = new FormData();
  formData.append("id", currentSelected.id);
  formData.append("action", "delete");
  xmlhttp.send(formData);
}

function updateFoodOnMenuList(){
  showToastr("info", `Updating ${currentSelected.foodName} on the menu list`);
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onload = function(ev){
    if (xmlhttp.status != 200) { // analyze HTTP status of the response
        showToastr("error",`Error ${xmlhttp.status}: ${xmlhttp.statusText}`)
      } 
   else{ 
        setTimeout(()=>{
          showToastr("success",`${currentSelected.foodName} Successfully Updated `);
          setTimeout(()=>{
            location.reload();
          },500)
        }, 1200);

      }
  }
  xmlhttp.open("POST", "../admin/php/updatefood.php", true);
  let form = document.getElementById("updateFoodForm");
  let formUpdateImage =document.getElementById("updateThumbnail");

  let formData = new FormData(form);
  formData.append("id", currentSelected.id);
  formData.append("update", true);
  formData.append("hasNewImage", formUpdateImage.value != "");
  xmlhttp.send(formData);
}

function setUpdateValue(){
  document.querySelector("#updateMenuName").value = currentSelected.foodName;
  document.querySelector("#updateDescriptions").value = currentSelected.description;
  document.querySelector("#updatePrice").value = currentSelected.price;
  document.querySelector("#updateMenuCategory").value = currentSelected.category;
}