function setCookie(sName, sValue)
{
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
    return null;
}

$(window).ready(function ()
{
  var cookies = getCookie("list");
  $("#ft_list").prepend(cookies);

  $(".todo").click(function()
  {
    if (confirm("Remove this task ?"))
    {
      $(this).remove();
      var cookies = $("#ft_list").html();
      setCookie("list", cookies);
    }
  })

  $("#addNew").click(function()
  {
    var newTodo = prompt("New todo :", "")
    if (newTodo !== "")
    {
      $("#ft_list").prepend("<div class='todo'>" + newTodo + "<div>");

      var cookies = $("#ft_list").html();
      setCookie("list", cookies);
       window.location.reload(true);
    }
  })
 })
