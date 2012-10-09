function tileCreater(tile){
	var src;
	var id;
	var topLine = 0;
	var leftLine = 0;
	var $drawTarget =  $('#myArea');
	var j = 0;	
	for(var i=0 ; i<tile.length ; i++){
		j++;
		src = './image/' + tile[i]['src'] + '.gif';
		id = tile[i]['id']; 

		var $element = $drawTarget.append('<div id=' + id  +'></div>').find("#" + id);
		$element.css({
			position: 'absolute',
			width: 80,
			height: 112,
			top: topLine,
			left: leftLine,
			backgroundImage: 'url(' + src + ')'
		});
		leftLine = leftLine + 80;
		if(i==11 || i==22){
			leftLine = 0;
			topLine = topLine +150;  
		}

	}
}

$(document).ready(function(){
	$.getJSON('./php/Main.php', null, tileCreater);
});
