function showPrice (str)
{
    if(str.length==0)
    {
        document.getElementById("price").innerHTML="";
        return;
    }
    if (window.XMLHttpRequest)// code for IE7+, Firefox, Chrome, Opera, Safari
        var obj=new XMLHttpRequest();
    else // code for IE6, IE5
        var obj=new ActiveXObject("Microsoft.XMLHTTP");
    if(obj)
    {
        obj.onreadystatechange = function()
        {
            if(obj.readyState==4 && obj.status == 200)
                document.getElementById("price").innerHTML=obj.responseText;
        }
    }
    obj.open("GET","http://localhost/asyawebsite/index.php/price_calc.php?p="+str,true);
    obj.send(null);
}


function getXMLHTTP()
{
    var xmlhttp=null;
    try
    {
        xmlhttp=new XMLHttpRequest();
    }
    catch(e)
    {
        try
        {
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch(e)
        {
            try
            {
                xmlhttp=new ActiveXObject("msxml2.XMLHTTP");
            }
            catch(e1)
            {
                xmlhttp=false;
            }
        }
    }
    return xmlhttp;
}
function getCat(cat) {
    var strurl="http://localhost/asyawebsite/index.php/price_calc.php?p="+cat;
//alert(strurl);
    var req=getXMLHTTP();
    if(req==null)
    {
        alert("browser error");
    }
    if(req)
    {
        req.onreadystatechange=function() {
            if(req.readyState ==4 || req.readyState=="complete")
            {
                document.getElementById("ajaxresult").innerHTML=req.responseText;
            }
        }
        req.open("GET",strurl,true);
        req.send(null);
    }
}