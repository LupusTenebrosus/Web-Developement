var x=0;
var slider = {
	slides:['templates/aboutme/images/sliderbox/1.jpg','templates/aboutme/images/sliderbox/2.jpg','templates/aboutme/images/sliderbox/3.jpg','templates/aboutme/images/sliderbox/4.jpg','templates/aboutme/images/sliderbox/5.jpg','templates/aboutme/images/sliderbox/6.jpg','templates/aboutme/images/sliderbox/7.jpg','templates/aboutme/images/sliderbox/8.jpg','templates/aboutme/images/sliderbox/9.jpg','templates/aboutme/images/sliderbox/10.jpg'],
	frame:0, // текущий кадр для отбражения - индекс картинки из массива
	set: function(image) { // установка нужного фона слайдеру
		document.getElementById("scr").style.backgroundImage = "url("+image+")";

     if (x!=this.frame)  // ох сколько я ебался чтобы кнопочки подсветить..... (чтобы родить эти 6 строчек...)
     {
      /* document.getElementById("id_slider_"+x).style.color = "rgba(43, 56, 86,1)"; 
       document.getElementById("id_slider_"+x).style.border = "solid rgba(43, 56, 86,1) 3px";*/
       document.getElementById("id_slider_"+x).className = "slider_btn";
     }
        /*cument.getElementById("id_slider_"+this.frame).style.color = "rgba(255, 255, 255,1)";
        document.getElementById("id_slider_"+this.frame).style.border = "solid rgba(255, 255, 255,1) 3px";*/
        document.getElementById("id_slider_"+this.frame).className = "slider_btn_active";

     x=this.frame;   //аллилуйя блядь... у меня есть мозги... урааа... 02:56 =)) и все на простом javascripte без jquerry вот нах. Всетаки был косячок. если тупо цвет менять то повлияет на ховер, а добраться до ховера через js это пиздец... поэому тупо смена класса) 3.29 ура!!
        
	},
	init: function() { // запуск слайдера с картинкой с нулевым индексом
		this.set(this.slides[this.frame]);
	},
	left: function() { // крутим на один кадр влево
		this.frame--;
		if(this.frame < 0) this.frame = this.slides.length-1;
		this.set(this.slides[this.frame]);
	},
	right: function() { // крутим на один кадр вправо
		this.frame++;
		if(this.frame == this.slides.length) this.frame = 0;
		this.set(this.slides[this.frame]);		
	},

    one: function(){
    	this.frame=0;   // устанавливаем переменную, чтобы автопрокрутка не прыгала по своему счетчику с 7 на 2 например.
    	this.set(this.slides[0]);
    },
    two: function(){
    	this.frame=1;
    	this.set(this.slides[1]);
    },
    three: function(){
    	this.frame=2;
    	this.set(this.slides[2]);
    },
    four: function(){
    	this.frame=3;
    	this.set(this.slides[3]);
    },
    five: function(){
    	this.frame=4;
    	this.set(this.slides[4]);
    },
    six: function(){
    	this.frame=5;
    	this.set(this.slides[5]);
    },
    seven: function(){
    	this.frame=6;
    	this.set(this.slides[6]);
    },
    eight: function(){
    	this.frame=7;
    	this.set(this.slides[7]);
    },
    nine: function(){
    	this.frame=8;
    	this.set(this.slides[8]);
    },
    ten: function(){
    	this.frame=9;
    	this.set(this.slides[9]);
    }
};
window.onload = function() { // запуск слайдера после загрузки документа
	slider.init();
	setInterval(function() { // ставим 15секундный интервал для перелистывания картинок
		slider.right();
	},15000);
};

