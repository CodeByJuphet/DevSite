	$('#popup_title').bind('keyup keypress blur', function() 
	{  

		var myStr = $(this).val()
	     // myStr=myStr.toLowerCase();
	     // myStr=myStr.replace(/(\s+$)/,"");
	     // myStr=myStr.replace(/(^\s+|[^a-zA-Z0-9 ]+|\s+$)/g,"");
	     // myStr=myStr.replace(/\s+/g, "-");

	 	 //	$('#popup_title_2').val(myStr);
	 	$('#popup_title_2').text(myStr);

	});

	$('#popup_description').bind('keyup keypress blur', function() 
	{  
		var myStr = $(this).val()

	 $('#popup_description_2').text(myStr);
	});

	$('#popup_video_embed').bind('keyup keypress blur', function() 
	{  
		var myStr = $(this).val()

	 $('#popup_video_embed_2').html(myStr);
	});

	$('#popup_submitval').bind('keyup keypress blur', function() 
	{  
		var myStr = $(this).val()

	 $('#popup_submitval_2').val(myStr);
	});

	// Youtube Here

	window.search = function (url)
	{
		if (url.indexOf("?") === -1 || url.indexOf("v=") === -1)
		return;
		
		var query_string = url.substr(url.indexOf("?")+1),
			arr = [];
		
		parse_str(query_string, arr);
		
		var xhr = new XMLHttpRequest();
		
		xhr.onload = function(oEvent)
		{
			if (xhr.status == 200 && xhr.responseText)
			{
				var obj = JSON.parse(xhr.responseText);
				
				var content = [];
				
				content.push(
	                '<img src="//img.youtube.com/vi/' + arr['v'] + '/mqdefault.jpg" class="img-responsive center-block" style="border:3px #000 solid; border-radius:5px;"/>'
				);
				
				document.getElementById('data').innerHTML = content.join('<br /><br />');
			}
		}
		
		xhr.open("GET", "https://gdata.youtube.com/feeds/api/videos/" + arr['v'] + "?v=2&alt=json", false)
		xhr.send(null);
	}


	window.parse_str = function (str, array)
	{
		var strArr = String(str).replace(/^&/, '').replace(/&$/, '').split('&'),
			sal    = strArr.length,
			fixStr = function (str)
			{
				return decodeURIComponent(str.replace(/\+/g, '%20'));
			},
			i, j, ct, p, lastObj, obj, lastIter, undef, chr, tmp, key, value, postLeftBracketPos, keys, keysLen;

		
		if (!array)
		array = this.window;


		for (i = 0; i < sal; i++)
		{
			tmp   = strArr[i].split('=');
			key   = fixStr(tmp[0]);
			value = (tmp.length < 2) ? '' : fixStr(tmp[1]);

			while (key.charAt(0) === ' ')
			key = key.slice(1);
			
			if (key.indexOf('\x00') > -1)
			key = key.slice(0, key.indexOf('\x00'));
			
			if (key && key.charAt(0) !== '[')
			{
				keys = [];
				postLeftBracketPos = 0;
			
				for (j = 0; j < key.length; j++)
				{
					if (key.charAt(j) === '[' && !postLeftBracketPos)
					{
						postLeftBracketPos = j + 1;
					}
					else if (key.charAt(j) === ']')
					{
						if (postLeftBracketPos)
						{
							if (!keys.length)
							keys.push(key.slice(0, postLeftBracketPos - 1));
							
							keys.push(key.substr(postLeftBracketPos, j - postLeftBracketPos));
							postLeftBracketPos = 0;
		
							if (key.charAt(j + 1) !== '[')
							break;
						}
					}
				}
				
				if (!keys.length)
				keys = [key];
				
				for (j = 0; j < keys[0].length; j++)
				{
					chr = keys[0].charAt(j);
					
					if (chr === ' ' || chr === '.' || chr === '[')
					keys[0] = keys[0].substr(0, j) + '_' + keys[0].substr(j + 1);
		
					if (chr === '[')
					break;
				}

				obj = array;
				
				for (j = 0, keysLen = keys.length; j < keysLen; j++)
				{
					key = keys[j].replace(/^['"]/, '').replace(/['"]$/, '');
					lastIter = j !== keys.length - 1;
					lastObj = obj;
					
					if ((key !== '' && key !== ' ') || j === 0)
					{
						if (obj[key] === undef)
						obj[key] = {};
						
						obj = obj[key];
					}
					else
					{
						ct = -1;
						
						for (p in obj)
						{
							if (obj.hasOwnProperty(p))
							{
								if (+p > ct && p.match(/^\d+$/g))
								ct = +p;
							}
						}
						
						key = ct + 1;
					}
				}
				
				lastObj[key] = value;
			}
		}
	}