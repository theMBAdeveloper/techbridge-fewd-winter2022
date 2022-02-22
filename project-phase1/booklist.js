const ascending = document.getElementById('ascending')
const descending = document.getElementById('descending')
const myInput = document.getElementById('myInput')

const authorRadio = document.getElementById('authorRadio')
const titleRadio = document.getElementById('titleRadio')

const priceRadio = document.getElementById('priceRadio')

function myFunction() {

if(!authorRadio.checked && !titleRadio.checked && !priceRadio.checked) return
    console.log(authorRadio.checked,titleRadio.checked,priceRadio.checked,ascending.checked,descending.checked);

  // Declare variables
  let input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
      if(authorRadio.checked){

          td = tr[i].getElementsByTagName("td")[0];
      }
      else if(titleRadio.checked){
        td = tr[i].getElementsByTagName("td")[1];

      }
      else{
        td = tr[i].getElementsByTagName("td")[2];

      }
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }

}



function sort(order){
    
    const table = document.querySelector('#myTable')
    console.log(order);
      //sort function, to sort through the visual list of books
  const books = [...document.querySelectorAll('.book')]
  table.innerHTML = `<tr class="header">
  <th style="width:60%;">Author's Name</th>
  <th style="width:40%;">Book Title</th>
  <th style="width:40%;">Price</th>
</tr>`
books.sort((a,b)=>{
    let td1,td2
    if(authorRadio.checked){

        td1 = a.querySelectorAll('td')[0]
        td2 = b.querySelectorAll('td')[0]
    }
    else if (titleRadio.checked) {
        td1 = a.querySelectorAll('td')[1]
        td2 = b.querySelectorAll('td')[1]
    }
    else {
        td1 = a.querySelectorAll('td')[2]
        td2 = b.querySelectorAll('td')[2]
    }
    
    if(priceRadio.checked){
        if(order === 'asc'){
            return +td1.textContent.substring(1) - +td2.textContent.substring(1)
        }
        return  +td2.textContent.substring(1) - +td1.textContent.substring(1)
    }
    else{
        if(order==='desc'){

            return  td2.textContent.localeCompare(td1.textContent) 
        }
        return  td1.textContent.localeCompare(td2.textContent) 
        

    }

})

books.forEach(item=>{
    table.append(item)
})
}

myInput.addEventListener('keydown',myFunction)
ascending.addEventListener('change',()=>{
    sort('asc')
})

descending.addEventListener('change',()=>{
    sort('desc')
})