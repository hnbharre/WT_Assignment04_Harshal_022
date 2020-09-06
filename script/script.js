// let base_url = "http://localhost/WT_Assignments/WT_Asgn04/Controller.php";
let base_url = "Controller.php";
// let base_url = "http://edutechclsx.000webhostapp.com/api/test/";


$("document").ready(function(){
     
    getMenuNameList();
    document.querySelector("#menu3").addEventListener("change",getMenuById);
});




function getMenuNameList() {         
    let url = base_url + "?req=name_list";
    $.get(url,function(data,success) {

           for (const key in data) {     
               let opt = document.createElement("option");
               opt.textContent = key + ") " + data[key].name;
             
               opt.value = data[key].id; 
               document.querySelector('#menu3').appendChild(opt);
            
               
           }
        
    });
}

function getMenuById(e) {   
    let index = e.target.value;
    let url = base_url + "?req=menu_data&id="+index;
    $.get(url,function(data,success){
           console.log(data);
           let dat = data;
        
            document.querySelector("#idee").textContent = dat.id;
            document.querySelector("#shortName").textContent = dat.short_name;
            document.querySelector("#Name").textContent = dat.name;
            document.querySelector("#description").textContent = dat.description;
            
            if(dat.price_small!=null){
               document.querySelector("#priceSmall").textContent = dat.price_small;
            }
            else{
               document.querySelector("#priceSmall").textContent = "Not Available";
            }
    
            if(dat.price_large!=null){
               document.querySelector("#priceLarge").textContent = dat.price_large; 
            }
            else{
               document.querySelector("#priceLarge").textContent = "Not Available";
            }
            
       
    });

}