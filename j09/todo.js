// function setCookie(cname, cvalue, exdays)
// {
//     var date = new Date();
//     date.setTime(date.getTime() + (exdays * 24 * 60 * 60 * 1000));
//     var expires = "expires="+date.toUTCString();
//     var test = cname + "=" + cvalue + ";" + expires + ";path=/";
//     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
// }

function setCookie(sName, sValue)
{
  var today = new Date(), expires = new Date();
  expires.setTime(today.getTime() + (365*24*60*60*1000));
  document.cookie = sName + "=" + encodeURIComponent(sValue) + ";expires=" + expires.toGMTString();
}


window.onload = function ()
{

  // console.log("euh");
  var lst = document.getElementById("ft_list");                 // Create a <li> node
  var cookies = decodeURIComponent(getCookie("list"));
  if (cookies)
  {
    console.log("enter");
    cookies.split('*');
    console.log(cookies);
    // for (var i = 0; cookies[i]; ++i)
    // {
    //   if (cookies[i] == '\n')
    //     ;
    // }
  //  lst.innerHTML = cookies;
//    var nodes = document.createTextNode(lst);         // Create a text node
//    root.appendChild(nodes)
//    document.body.innerHTML = lst;
    // console.log(document.body.innerHTML);
  }
  else {
   console.log("non");
  }
};

function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  // console.log(ca.length);
  for(var i=0;i < ca.length;i++)
  {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}


function newTodo()
{
  var newTodo = prompt("New todo :", "")
  if (newTodo !== "")
    add(newTodo);
}
function add(newTodo)
{
  var div = document.createElement("div");
  var lst = document.getElementById('ft_list');
  div.innerHTML = newTodo;

  var len = lst.childNodes.length;
  div.setAttribute('id', len);
  div.addEventListener('click', remove);
  lst.insertBefore(div, lst.firstChild);
  var save = lst.textContent + "*";
  console.log("save = " + save);
  setCookie("list", save);
  //  var test = readCookie("list");
//    console.log(test);
}

function remove()
{
  if (confirm("Remove this task ?"))
  {
    var id = this.getAttribute('id');
    var lst = document.getElementById('ft_list');
    var div = document.getElementById(id);
    lst.removeChild(div);
    var save = lst.textContent;
    setCookie("list", save);
  }
}
