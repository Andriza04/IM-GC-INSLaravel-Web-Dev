let items = [
    ['001', 'Mouse logitech M170/M171', 'Rp' + 250000, 'Mouse buat kebutuhan kantor', 'logitech.png'],
    ['002', 'Mouse rog keris', 'Rp' + 600000, 'Mouse buat lebih pro buat gaming', 'rog.png'],
    ['003', 'Keyboard logitech mx mechanical', 'Rp' + 350000, 'Keyboard mechanical buat rumah', 'mx-mechanical.png'],
    ['004', 'Keyboard redragon', 'Rp' + 500000, 'Keyboard buat keperluan gaming', 'redragon.jpg']
]
let card = document.getElementById("wrap")
let list = document.getElementById("listBarang")
let i = 0
let qty = document.getElementById("qty").innerHTML = "(" + i + ")"

// memunculkan item
items.forEach(function(item){
    let cardEl = '<div class="card mx-1" style="width: 18rem;" id="card"><img src=assent/'+ item[4] +' class="card-img-top" height="220px" width="200px" alt="..."><div class="card-body"><h5 class="card-title" id="itemName">'+ item[1] +'</h5><p class="card-text" id="itemDesc">'+ item[3] +'</p><p class="card-text">'+ item[2] +'</p><a href="#" class="btn btn-primary" id="addCart" onclick="add()">Add to card</a></div></div>'
    list.innerHTML += cardEl
})

// function menambah card
function add(){
    i++
    document.getElementById("qty").innerHTML = "(" + i + ")"
}

// FUNCTION MENCARI ITEM
document.getElementById("formItem").addEventListener('submit', function(e){
    e.preventDefault()

   let keyword = document.getElementById("keyword").value.toLowerCase()
   let filter = items.filter(function(item){
    return item[1].toLowerCase().includes(keyword)
   })
    list.innerHTML = ' '

    filter.forEach(function(item){
        let cardEl = '<div class="card mx-1" style="width: 18rem;" id="card"><img src=assent/'+ item[4] +' class="card-img-top" height="220px" width="200px" alt="..."><div class="card-body"><h5 class="card-title" id="itemName">'+ item[1] +'</h5><p class="card-text" id="itemDesc">'+ item[3] +'</p><p class="card-text">'+ item[2] +'</p><a href="#" class="btn btn-primary" id="addCart" onclick="add()">Add to card</a></div></div>'
        list.innerHTML += cardEl
    })

})
