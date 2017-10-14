window.onload = function ()
{
  var lst = document.getElementById("ft_list");                 // Create a <li> node
  var cookies = decodeURIComponent(getCookie("list"));

  var tab = JSON.parse(cookies);
  if (cookies)
  {
    for (var i = 0; tab[i]; ++i)
      add(tab[i]);
  }
};

function setCookie(sName, sValue)
{
  console.log(sValue);
  var today = new Date(), expires = new Date();
  expires.setTime(today.getTime() + (365*24*60*60*1000));
  document.cookie = sName + "=" + encodeURIComponent(sValue) + ";expires=" + expires.toGMTString();
}

function getCookie(sName)
{
  var oRegex = new RegExp("(?:; )?" + sName + "=([^;]*);?");
  if (oRegex.test(document.cookie))
    return decodeURIComponent(RegExp["$1"]);
  else
    return NULL;
}

// function getCookie(name) {
//   var nameEQ = name + "=";
//   var ca = document.cookie.split(';');
//   for(var i=0;i < ca.length;i++)
//   {
//     var c = ca[i];
//     while (c.charAt(0)==' ') c = c.substring(1,c.length);
//     if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
//   }
//   return null;
// }

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

  var childs = lst.children;
  var cookies = [];
  for (var i = 0; childs[i]; ++i)
    cookies.unshift(childs[i].innerHTML);
 setCookie("list", JSON.stringify(cookies));
}

function remove()
{
  if (confirm("Remove this task ?"))
  {
    var id = this.getAttribute('id');
    var lst = document.getElementById('ft_list');
    var div = document.getElementById(id);
    lst.removeChild(div);

    var childs = lst.children;
    var cookies = [];
    for (var i = 0; childs[i]; ++i)
      cookies.unshift(childs[i].innerHTML);
   setCookie("list", JSON.stringify(cookies));
  }
}
