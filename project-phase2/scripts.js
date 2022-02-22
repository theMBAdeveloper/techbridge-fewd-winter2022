//scripts for problems
function resetFindInGrid() {
    //set tbNumberToFind to blank
    let tbNumberToFind = document.getElementById("tbNumberToFind");
    tbNumberToFind.value = '';

    //unhighlight spans
    let spans = document.getElementsByTagName('span');
    console.log("spans: ", spans);
    for (let index = 0; index < spans.length; index++) {
        spans[index].classList.remove('spanHighlighted');
    }
}

function resetFindInList() {
     //set tbTextToFind to blank
    let tbTextToFind = document.getElementById("tbTextToFind");
    tbTextToFind.value = '';

    //unhighlight spans
    let spans = document.getElementsByTagName('span');
    console.log("spans: ", spans);
    for (let index = 0; index < spans.length; index++) {
        spans[index].classList.remove('spanHighlighted');
    }
}



function reloadPage() {
    window.location.reload();
    return false;
}


function findInGrid() {
 //find in grid
 let findInGridField = document.getElementById("tbNumberToFind");

 let index = null;

 if(findInGridField.value.trim().length==0){
     alert('Please Enter Number To Find')
     return;
 }

 let spans = document.getElementsByTagName('span');

 for (let i=0; i<spans.length; i++){
     if(spans[i].innerText == findInGridField.value.trim()){
         index = i;
         break;
     }
 }

 if(index==null){
     alert('Invalid number Entered')
     return;
 }

 resetFindInGrid();
 spans[index].classList.add('spanHighlighted')

}

function findInList() {
   //find In List
   let findInListField = document.getElementById("tbTextToFind");

    let index = null;

    if(findInListField.value.trim().length==0){
        alert('Please Enter Text To Find')
        return;
    }

    let spans = document.getElementsByTagName('span');

    for (let i=0; i<spans.length; i++){
        if(spans[i].innerText == findInListField.value.trim()){
            index = i;
            break;
        }
    }

    if(index==null){
        alert('Invalid Text Entered')
        return;
    }

    resetFindInList();
    spans[index].classList.add('spanHighlighted')
}

function sortIt() {
    let sort_method = {
        state : "desc"
    }

    let toSort = document.getElementById('row0').children;
    let toSortArr = Array.prototype.slice.call(toSort, 0)

    toSortArr.sort(function (a, b){
        let aOrder = +a.innerText;
        let bOrder = +b.innerText;

        if(sort_method.state=='desc'){
            return(aOrder > bOrder) ? 1 : -1;
        }
        else{
            return(aOrder < bOrder) ? 1 : -1;
        }
    })

    console.log(toSortArr)

    document.getElementById('row0').innerHTML='';

    toSortArr.forEach(elem=>{
        document.getElementById('row0').appendChild(elem)
    })
}
