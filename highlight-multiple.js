let orders = document.querySelector("#woocommerce-order-items")
if(orders){
  let fields = orders.querySelectorAll("td.quantity")
  for(let field of fields){
    if (field){
      let view = field.querySelector(".view")
      if(view){
        let num = parseInt(view.textContent.replace("×", "").trim())
        if(num > 1){
          field.style.background = "#ff6767"
        }
      }
    }
  }
}