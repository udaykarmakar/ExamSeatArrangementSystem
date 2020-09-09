var Sub = 1;
var Dt = 1;
var Dept = 1;
var SubCount=1;
function addRow()
{
    var tbl = document.getElementById('table');
    if(document.getElementById('one').selected==true)
    {
        document.getElementById('Arrangement').value = document.getElementById('Arrangement').value + " 1 ";
        var row1 = tbl.insertRow(tbl.childElementCount);
        /*Date*/
        var cell1 = row1.insertCell(row1.childElementCount);
        date="date"+Dt;  Dt++;
        cell1.setAttribute("name",date);
        var inputDt = document.createElement("input");
        inputDt.setAttribute("type","date");
        inputDt.className="form-control";
        inputDt.setAttribute("name",date);
        cell1.appendChild(inputDt);
        /*Dept*/
        var department = "BBA"+Dept;  Dept++;
        var cell5 = row1.insertCell(row1.childElementCount);
        cell5.setAttribute("name",department);
        loadDoc(cell5);
        /*sub1*/
        var subject = "Sub"+Sub;  Sub++;
        var cell4 = row1.insertCell(row1.childElementCount);
        cell4.setAttribute("name",subject);
        loadDoc(cell4);

    }
    if(document.getElementById('two').selected==true)
    {
        document.getElementById('Arrangement').value = document.getElementById('Arrangement').value + " 2 ";
        var row2 = tbl.insertRow(tbl.childElementCount);
        /*Date*/
        var cell1 = row2.insertCell(row1.childElementCount);
        cell1.setAttribute("rowspan","2");
        date="date"+Dt;  Dt++;
        cell1.setAttribute("name",date);
        var inputDt = document.createElement("input");
        inputDt.setAttribute("type","date");
        inputDt.className="form-control";
        inputDt.setAttribute("name",date);
        cell1.appendChild(inputDt);
        /*Dept*/
        var department = "Dept"+Dept;  Dept++;
        var cell5 = row2.insertCell(row1.childElementCount);
        cell5.setAttribute("name",department);
        loadDoc(cell5);
        /*sub1*/
        var subject = "Sub"+Sub;  Sub++;
        var cell4 = row2.insertCell(row1.childElementCount);
        cell4.setAttribute("name",subject);
        loadDoc(cell4);

    }
    else
    {
        document.getElementById('Arrangement').value = document.getElementById('Arrangement').value + " 3 ";

        /*first row*/
        var row2 = tbl.insertRow(tbl.childElementCount);

        /*Date*/
        var cell1 = row2.insertCell(row2.childElementCount);
        cell1.setAttribute("rowspan","2");
        date="date"+Dt;  Dt++;
        cell1.setAttribute("name",date);

        var inputDt = document.createElement("input");
        inputDt.setAttribute("type","date");
        inputDt.setAttribute("name",date);
        inputDt.className = "form-control";
        cell1.appendChild(inputDt);
        /*sub1*/
        var department = "Dept"+Dept;  Dept++;
        var cell5 = row2.insertCell(row2.childElementCount);
        cell5.setAttribute("name",department);
        loadDoc(cell5);
        /*sub1*/
        var subject = "Sub"+Sub;  Sub++;
        var cell4 = row2.insertCell(row2.childElementCount);
        cell4.setAttribute("name",subject);
        loadDoc(cell4);



        /*Second tr*/
        var  row3 = tbl.insertRow(tbl.childElementCount);

        /*sub1*/
        var subject01 = "Sub"+Sub;  Sub++;
        var cell3 = row3.insertCell(row3.childElementCount);
        cell3.setAttribute("name",subject01);
        loadDoc(cell3);

    }
}

function loadDoc(element)
      {
        var xhttp = new XMLHttpRequest();
        if(!xhttp)
        {
           xmlhhtp = new ActiveXObject('Microsoft.HTTPXML');
        }

        xhttp.onreadystatechange = function()
        {
          if(this.readyState == 4 && this.status ==200)
          {
            element.innerHTML=this.responseText;

          }
        };
        var year = document.getElementById("year").value;
        xhttp.open("GET","SubjectData.php?subject="+SubCount+"&Year="+year,true);
        xhttp.send();
        SubCount++;
      }