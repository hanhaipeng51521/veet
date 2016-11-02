//鼠标移入选项出现下划线
var menu_item = document.querySelectorAll('.menu-item');
function underline(){
	for(var i =0;i<menu_item.length;i++){
		menu_item[i].onmouseover = function(){
			this.style.borderBottom = '4px solid rgb(216,86,142)';
			this.onmouseout = function(){
				this.style.border = 'none';
			}
		}
	}
   }
  //导航事件
var second = document.querySelectorAll('.second')[0];
var chanpin = document.querySelectorAll('.chanpin')[0];
var third = document.querySelectorAll('.third')[0];
var xueyuan = document.querySelectorAll('.xueyuan')[0];
var five = document.querySelectorAll('.five')[0];
var about = document.querySelectorAll('.about')[0];
	function daohang(){
		second.onmouseover = function(){
			chanpin.style.display = 'block';
			this.style.borderBottom = '4px solid rgb(216,86,142)';
			this.onmouseout = function(){
					chanpin.style.display = 'none';
					this.style.borderBottom = 'none';
			}
			return false;
		}
		third.onmouseover = function(){
			xueyuan.style.display = 'block';
			this.style.borderBottom = '4px solid rgb(216,86,142)';
			this.onmouseout = function(){
					xueyuan.style.display = 'none';
					this.style.borderBottom = 'none';
			}
			return false;
		}
		five.onmouseover = function(){
			about.style.display = 'block';
			this.style.borderBottom = '4px solid rgb(216,86,142)';
			this.onmouseout = function(){
					about.style.display = 'none';
					this.style.borderBottom = 'none';
			}
			return false;
		}
	}
