function myFunction() 
{
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("buscar");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabla");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) 
  {
      td = tr[i].getElementsByTagName("td")[1];
   
      if (td) 
      {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) 
        {
          tr[i].style.display = '';
        }else  
          {
          tr[i].style.display = "none";
          }
      }

  }
}

function buscar()
{
  
}

  function abrir()
  {
    alert(hola);
    $('.contenido').toggleClass('abrir');
  }

