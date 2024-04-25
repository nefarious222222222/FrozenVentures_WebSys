
document.querySelector('#dashboardb').addEventListener('click', ()=>{
    const dashboard = document.getElementById("dashboard");
    dashboard.style.display = "flex";
  
    const order = document.getElementById("order");
    order.style.display = "none";
  
    const message = document.getElementById("message-inbox");
    message.style.display = "none";
  
    const inventory = document.getElementById("inventory");
    inventory.style.display = "none";
  
    const settings = document.getElementById("settings");
    settings.style.display = "none";
})

  
document.querySelector('#orderb').addEventListener('click', ()=>{
    const dashboard = document.getElementById("dashboard");
    dashboard.style.display = "none";
  
    const order = document.getElementById("order");
    order.style.display = "flex";
  
    const message = document.getElementById("message-inbox");
    message.style.display = "none";
  
    const inventory = document.getElementById("inventory");
    inventory.style.display = "none";
  
    const settings = document.getElementById("settings");
    settings.style.display = "none";
}
);
  

document.querySelector('#inboxb').addEventListener('click', ()=>{
    const dashboard = document.getElementById("dashboard");
    dashboard.style.display = "none";
  
    const order = document.getElementById("order");
    order.style.display = "none";
  
    const message = document.getElementById("message-inbox");
    message.style.display = "flex";
  
    const inventory = document.getElementById("inventory");
    inventory.style.display = "none";
  
    const settings = document.getElementById("settings");
    settings.style.display = "none";
})

document.querySelector('#inventoryb').addEventListener('click', ()=>{
    const dashboard = document.getElementById("dashboard");
  dashboard.style.display = "none";

  const order = document.getElementById("order");
  order.style.display = "none";

  const message = document.getElementById("message-inbox");
  message.style.display = "none";

  const inventory = document.getElementById("inventory");
  inventory.style.display = "flex";

  const settings = document.getElementById("settings");
  settings.style.display = "none";
})

document.querySelector('#settingsb').addEventListener('click', ()=>{
    const dashboard = document.getElementById("dashboard");
    dashboard.style.display = "none";
  
    const order = document.getElementById("order");
    order.style.display = "none";
  
    const message = document.getElementById("message-inbox");
    message.style.display = "none";
  
    const inventory = document.getElementById("inventory");
    inventory.style.display = "none";
  
    const settings = document.getElementById("settings");
    settings.style.display = "flex";
})
