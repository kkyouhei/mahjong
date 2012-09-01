var DHTMLSprite = function(){
	var width = params.width;
	var height = params.height;
	var imageWidth = params.imageWidth;
	var $element = params.$drawTarget.append('</div>').find(':last');
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

$(document).ready(function(){
	// PHPから受け取った配列.lengthに変更する
	var width = 34;
	var height = 34;
	for(var i = 0 ; i < 34 ; i++){
		var params = {
			images: '',
			width: ,
			height: ,
			$drawTarget: $()
		};

		var pai[i] = DHTMLSprite(params);
		pai[i].draw(width, height);
		width = width + 34;
		height = height + 34;
	}
});
