var tile = function(src, id, width, height, $drawtarget){
	var $element = $drawtarget.append('<div id=' + id  +'></div>');
	$element.css({
		position: 'absolute',
		width: width,
		height: height//,
//		backgroundimage: 'url(' + src + ')'
	});
//	var elemstyle = $element[0].style;

	var that = {
		draw: function(x, y, src, id, $drawtarget){
			$drawtarget.css({
				position: 'absolute',
				width: x,
				height: y,
				backgroundImage: 'url(' + src + ')',
			left : 100 + 'px',
			top : 100 + 'px'
			});
			//elemStyle.left = x + 'px';
			//elemStyle.top = y + 'px';
		},

		show: function(){
//			elemStyle.display = 'block';
		},

		hide: function(){
//			elemStyle.display = 'none';
		},

		destroy: function(){
//			$element.remove();
		}
	}; 
	return that;
};

function tileCreater(tile){
	var src;
	var id;
	var topLine = 100;
	var leftLine = 100;
	var $drawTarget =  $('#myArea');
	
	for(var i=0 ; i<tile.length ; i++){
		src = './image/' + tile[i]['src'] + '.gif';
		id = tile[i]['id']; 

		var $element = $drawTarget.append('<div id=' + id  +'></div>').find("#" + id);
		$element.css({
			width: 80,
			height: 120,
			top: topLine,
			left: leftLine,
			backgroundImage: 'url(' + src + ')'
		});
		topLine = topLine + 100;
		leftLine = topLine + 100;
	}
}

$(document).ready(function(){
	$.getJSON('./php/Main.php', null, tileCreater);
});
