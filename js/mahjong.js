var Tile = function(params){
	var width = params.width;
	var height = params.height;
	var imageWidth = params.imageWidth;
	var $element = params.$drawTarget.append('<div id="test"></div>');
	$element.css({
		position: 'absolute',
		width: width,
		height: height,
		backgroundImage: 'url(' + params.images + ')'
	});
	var elemStyle = $element[0].style;

	var that = {
		draw: function(x, y){
			elemStyle.left = x + 'px';
			elemStyle.top = y + 'px';
		},

		show: function(){
			elemStyle.display = 'block';
		},

		hide: function(){
			elemStyle.display = 'none';
		},

		destroy: function(){
			$element.remove();
		}
	}; 
	return that;
};

function tileCreater(tile){
	var width = 0;
	var pai = {};
	for(var i=0 ; i<tile.length ; i++){
		var params = {
			images: './image/' + tile[i] + '.gif',
			width: width,
			height: 113,
			$drawTarget: $('#myArea')
		};
		pai[i] = Tile(params);
		pai[i].draw(34, 34);
		width = width + 34;
	}
}

$(document).ready(function(){
	$.getJSON('./php/Alpinist.php', null, tileCreater);
});
