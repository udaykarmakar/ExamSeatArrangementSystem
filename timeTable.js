var Sub = 1;
var Dt = 1;
var postfix = 1;
var SubCount=classRoomPostfix=1;
function addRow()
{
    var tbl = document.getElementById('table');
    if(document.getElementById('one').selected==true)
    {
        var term = document.getElementById("termId");
        term = term.options[term.selectedIndex].value;
        switch(term){
            case 'One':
            term = 1;
            break;
            case 'two':
            term=2
            break;
            default:
            term=3;
        }
        document.getElementById('Arrangement').value = document.getElementById('Arrangement').value + " 1 ";
        var row1 = tbl.insertRow(tbl.childElementCount);
        /*Date*/
        var cell6 = row1.insertCell(row1.childElementCount);//Date
        var cell1 = row1.insertCell(row1.childElementCount);//Date
        var cell2 = row1.insertCell(row1.childElementCount);//Time Start
        var cell3 = row1.insertCell(row1.childElementCount);//Time End
        var cell5 = row1.insertCell(row1.childElementCount);//Class Room Code
        var cell4 = row1.insertCell(row1.childElementCount);//Subject Cell



        termVal="termVal"+postfix;
        cell6.setAttribute("name",termVal+'[termVal]');
        var inputDt = document.createElement("input");
        inputDt.setAttribute("type","text");
        inputDt.setAttribute("readonly","readonly");
        inputDt.setAttribute("value",term);
        inputDt.setAttribute("style",'width: 45px;');
        inputDt.className="form-control";
        inputDt.setAttribute("name",termVal+'[termVal]');
        cell6.appendChild(inputDt);

        date="date"+postfix;
        cell1.setAttribute("name",termVal+'['+date+']');
        var inputDt = document.createElement("input");
        inputDt.setAttribute("type","date");
        inputDt.className="form-control";
        inputDt.setAttribute("name",termVal+'['+date+']');
        cell1.appendChild(inputDt);

        timeStart="timeStart"+postfix;
        cell2.setAttribute("name",termVal+'['+timeStart+']');
        var inputDt = document.createElement("input");
        inputDt.setAttribute("type","time");
        inputDt.className="form-control";
        inputDt.setAttribute("name",termVal+'['+timeStart+']');
        cell2.appendChild(inputDt);

        timeEnd="timeEnd"+postfix;
        cell3.setAttribute("name",termVal+'['+timeEnd+']');
        var inputDt = document.createElement("input");
        inputDt.setAttribute("type","time");
        inputDt.className="form-control";
        inputDt.setAttribute("name",termVal+'['+timeEnd+']');
        cell3.appendChild(inputDt);

        classRoomId="classRoomId"+postfix;
        cell5.setAttribute("name",termVal+'['+classRoomId+']');
        /*var inputDt = document.createElement("input");
        inputDt.setAttribute("type","time");
        inputDt.className="form-control";
        inputDt.setAttribute("name",termVal+'['+classRoomId+']');
        cell5.appendChild(inputDt);*/
        loadClassRoomId(cell5);

        /*sub1*/
        var subject = "Sub"+postfix; ;
        cell4.setAttribute("name",termVal+'['+subject+']');
        loadDoc(cell4,term);
        postfix++;
    }
    else
    {
        document.getElementById('Arrangement').value = document.getElementById('Arrangement').value + " 2 ";

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

function loadDoc(element,term)
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
        // var year = document.getElementById("year").value;
        var program = document.getElementById("programId").value;
        var level = document.getElementById("levelId").value;
        // xhttp.open("GET","SubjectData.php?subject="+SubCount+"&Year="+year,true);
        xhttp.open("GET","SubjectData.php?subject="+postfix+"&program="+program+"&level="+level+"&term="+term,true);
        xhttp.send();
      }
function loadClassRoomId(element)
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
        // xhttp.open("GET","SubjectData.php?subject="+SubCount+"&Year="+year,true);
        xhttp.open("GET","getRoomIds.php?classRoomPostfix="+postfix,true);
        xhttp.send();
        SubCount++;
      }