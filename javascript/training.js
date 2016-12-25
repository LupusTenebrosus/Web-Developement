



var elem = document.getElementById("demo");
elem.innerHTML="helloworld";       //втыкает то что в кавычках (helloorld" между тэгами где id="demo"
elem.style.color = "6600ff";         //стиль меняет
elem.style.width = "100px";


var elem1 = document.getElementsByClassName("demo1");
elem1[1].innerHTML="hi;"   //accessing the seond element


var elem2 = document.getElementsByTagName("p");  // переделать все з на hi huy
for (var x = 0;x<elem2.length;x++)
{
	elem2[x].innerHTML="hi huy";
}





var el_img = document.getElementById("myimg");
el_img.src="images/gallery/2.jpg";


var p = document.createElement("p");    //создаем параграф
var node = document.createTextNode("some new shit");  //добавляем текст в парграф
p.appendChild(node);  // к параграфу применяем заготовленный в переменной текст
var div = document.getElementById("demo");  //выбираем див с айди демо
div.appendChild(p);                    //применяем к нему заготовленный в переменной р  параграф.



var parent = document.getElementById("demo"); //назначем родителя
var child = document.getElementById("p1");   //назначаем дочерний элемент
parent.removeChild(child);  // через назначенные переменные удаляем дочерний элемент
child.parentNode.removeChild(child); //альтернативный вариант

parent.replaceChild(новый элемент, старый элемент) //для замены элементов назначаем папу, новую дочку и старую дочку




gallery = slides:['images/gallery/1.jpg','images/gallery/2.jpg','images/gallery/3.jpg','images/gallery/4.jpg','images/gallery/5.jpg','images/gallery/6.jpg','images/gallery/7.jpg','images/gallery/8.jpg','images/gallery/9.jpg','images/gallery/10.jpg'];

//////////////////////////////////////////////////////////////////////

<?php $jsString= 'testing'; ?>   // как в джаваскрипте прописать пхп
<html>
  <body>
    <script type="text/javascript">      
      var jsStringFromPhp=<?php echo json_encode($jsString); ?>;
      alert(jsStringFromPhp);
    </script>
  </body>
</html>     //конец
/////////////////////////////////////////////////////////////////////

print_r($array_with_filenames);  вывести массив на экран
