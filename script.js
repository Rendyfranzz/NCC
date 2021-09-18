function search() {
    var input, filter, tr;
    input = document.getElementById("cari");
    filter = input.value.toUpperCase();
    tr = document.getElementsByTagName('tr');
    //console.log(tr);
  
    for (let i = 1, row; row = tr[i]; i++) {
      let a = row.cells[0];
      //console.log(a);
      let txtValue = a.textContent;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    }
  }