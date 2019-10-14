$(function() {
    //雪花效果
      var d="<div class='snow iconfont'>&#xe69d;<div>"
        setInterval(function(){
        var f=$(document).width();
        var e=Math.random()*f-100;
        var o=0.3+Math.random();
        var fon=10+Math.random()*30;
        var l = e - 100 + 200 * Math.random();
        var k=2000 + 5000 * Math.random();
        $(d).clone().appendTo(".snowbg").css({
                left:e+"px",
                opacity:o,
                "font-size":fon,
                "color":getRandomColor(),

        }).animate({
              top:"100%",
                left:l+"px",
                opacity:1,

            },k,"linear",function(){$(this).remove()})
        },200)

    function getRandomColor() {
         var c = '#';
         var cArray = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'];
         for(var i = 0; i < 6;i++)
         {
         var cIndex = Math.round(Math.random()*15);
         c += cArray[cIndex];
         }
         return c;
         }
})
