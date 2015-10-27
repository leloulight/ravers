
(function() {
	(function() {
		var Confetti, PI_2, canvas, colors, confetti, context, drawCircle, i, range, resizeWindow, xpos;

		canvas = document.getElementById("confeti");
		context = canvas.getContext("2d");
		window.w = window.innerWidth;
		window.h = window.innerHeight;

	  resizeWindow = function() {
	   	window.w = canvas.width = window.innerWidth;
	   	return window.h = canvas.height = window.innerHeight;
		};

  	window.addEventListener('resize', resizeWindow, false);

  	window.onload = function() {
    	return setTimeout(resizeWindow, 0);
  	};

  	range = function(a, b) {
    	return (b - a) * Math.random() + a;
  	};

  	colors = [[85, 71, 106], [174, 61, 99], [219, 56, 83], [244, 92, 68], [248, 182, 70]];

  	PI_2 = 2 * Math.PI;

  	drawCircle = function(x, y, r, style) {
    	context.beginPath();
    	context.arc(x, y, r, 0, PI_2, false);
    	context.fillStyle = style;
    	return context.fill();
  	};

  	xpos = 0.5;

	  document.onmousemove = function(e) {
	    return xpos = e.pageX / w;
	  };

	  window.requestAnimationFrame = (function() {
	    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
	      return window.setTimeout(callback, 1000 / 60);
	    };
	  })();

	  Confetti = (function() {

	    function Confetti() {
	      this.style = colors[~~range(0, 5)];
	      this.rgb = "rgba(" + this.style[0] + "," + this.style[1] + "," + this.style[2];
	      this.r = ~~range(2, 6);
	      this.replace();
	    }

	    Confetti.prototype.replace = function() {
	      this.opacity = 0;
	      this.dop = 0.03 * range(1, 5);
	      this.x = range(-2 * this.r, w - 2 * this.r);
	      this.y = range(-2 * this.r, h - 2 * this.r);
	      this.xmax = w - this.r;
	      this.ymax = h - this.r;
	      this.vx = 2 * Math.random() + 10 * xpos - 6;
	      return this.vy = this.r + range(-1, 1);
	    };

	    Confetti.prototype.draw = function() {
	      var _ref;
	      this.x += this.vx;
	      this.y += this.vy;
	      this.opacity += this.dop;
	      if (this.opacity > 1) {
	        this.opacity = 1;
	        this.dop *= -1;
	      }
	      if (this.opacity < 0 || this.y > this.ymax || !((0 < (_ref = this.x) && _ref < this.xmax))) {
	        this.replace();
	      }
	      return drawCircle(~~this.x, ~~this.y, this.r, "" + this.rgb + "," + this.opacity + ")");
	    };

	    return Confetti;

	  })();

	  confetti = (function() {
	    var _results;
	    _results = [];
	    for (i = 1; i <= 300; i++) {
	      _results.push(new Confetti);
	    }
	    return _results;
	  })();

	  window.step = function() {
	    var c, _i, _len, _results;
	    requestAnimationFrame(step);
	    context.clearRect(0, 0, w, h);
	    _results = [];
	    for (_i = 0, _len = confetti.length; _i < _len; _i++) {
	      c = confetti[_i];
	      _results.push(c.draw());
	    }
	    return _results;
	  };

	  step();

	}).call(this);

})();






(function(win) {

    Math.Radian = Math.PI * 2;

	var hibana = [],
		hibanaRenderBuff = [],
		canvas = document.getElementById("hanabi"),
		count = 0,

		b = document.body,
		d = document.documentElement;

	var colors = ['#ffffaa','#AA0066','#008000','#ffd700','#0000ff'];
	var cols = colors.length;

	canvas.width = 1200;
	canvas.height = 600;

	win.requestAnimationFrame = (function() {
		return window.requestAnimationFrame     ||
			window.webkitRequestAnimationFrame  ||
			window.mozRequestAnimationFrame     ||
			window.oRequestAnimationFrame       ||
			window.msRequestAnimationFrame      ||
			function(callback, element) {
				window.setTimeout(callback, 1000 / 60);
			};
	})();

	var hanabi = {
		'quantity' : 400,
		'size' : 3,
		'circle' : 0.97,
		'gravity' : 0.1,
		'speed' : 3,
		'top' : canvas.height / 3,
		'left' : canvas.width / 3,
		'z' : 0,
		'opacity': 1,
		'persistence': 3,
		'color' : ['#ffffaa','#AA0066','#ffffaa']
	};
	
	var rising = {
		'rise': false,
		'x': 0,
		'y': 0,
		'gravity' : 0.98,
		'st': 12,
		'size': 1,
		'opacity': 0.8,
		'color': "#CCC"
	};

	var cvs = {
		'elm': canvas,
		'w': canvas.width,
		'h': canvas.height,
		'ctx': canvas.getContext('2d'),
		'left': canvas.getBoundingClientRect ? canvas.getBoundingClientRect().left : 0,
		'top': canvas.getBoundingClientRect ? canvas.getBoundingClientRect().top : 0,
		'pos_x' : 0,
		'pos_y' : 0
	};

	function makeHibanaList() {

		var i, angle1, angle2,
			xyst, zst,
			x = hanabi.left + Math.floor(Math.random()* 100) - 50,
			y = hanabi.top + Math.floor(Math.random()* 100) - 50,
			col1 = colors[Math.floor(Math.random()* cols)],
			col2 = colors[Math.floor(Math.random()* cols)],
			l = hanabi.quantity;

		hanabi.color[0] = col1;
		hanabi.color[1] = col2;
		hanabi.speed = Math.floor(Math.random()*3) + 1;
		
		// Reset Rising
		rising.x = x;
		rising.y = cvs.h;
		rising.rise = false;
		rising.st = 12;

		for( i=0; i< l; i++ ) {
			angle1 = Math.random() * Math.Radian;
			angle2 = Math.random() * Math.Radian;
			xyst = Math.random() * (hanabi.speed*0.8);
			zst = hanabi.speed - xyst;

			hibana.push({
				x: x,
				y: y,
				size: hanabi.size,
				xst: Math.cos(angle1) * xyst,
				yst: Math.sin(angle1) * xyst,
				zst: Math.cos(angle2) * zst,
				op: hanabi.opacity
			});
		}
		//        console.dir(hibana);
	}

	function hibanaMotion( h ) {
		var new_x = h.x + h.xst,
			new_y = h.y + h.yst,
			new_size = h.size * hanabi.circle,
			new_op = h.op;

		if(new_size < 0.5 ) {
			new_x = h.x + h.xst;
			new_y = h.y + h.yst + hanabi.gravity;
			new_size = h.size * hanabi.circle;
			new_op = h.op * hanabi.circle;
			if( Math.floor(Math.random()*40) === 0 ) {
				return false;
			}
		}
		if(new_size < 0.1 ) {
			return false;
		}

		return ( {
			x: new_x,
			y: new_y,
			size: new_size,
			xst: h.xst,
			yst: h.yst,
			zst: h.zst,
			op: new_op
		});
	}


	function hanabiMaker() {
		var i, h, x, y, size,
			color = hanabi.color[0],
			col1 = hanabi.color[1],
			col2 = hanabi.color[2],
			l = hibana.length < 100 ? 100 : hibana.length;

		if (!hibana.length) {
			return false;
		}
		
		if( hibanaRenderBuff.length && rising.rise === false) {
			return true;
		}

		if( hibanaRenderBuff.length >  hanabi.persistence * l ) {
			hibanaRenderBuff.splice(0,l);
		}

		l = hibana.length;
		for (i = 0; i < l; i++) {
			h = hibana[i];
			if( h ) {
				if( h.size < 0.3 ) { color = col2; }
				else if( h.size < 1 ) { color = col1; }
				
				size = Math.round( h.size *100 ) /100;
				x =  Math.round( h.x ) ;
				y =  Math.round( h.y ) ;
				h.op = Math.round( h.op *10 ) /10;

				hibanaRenderBuff.push({
					x: x,
					y: y,
					color: color,
					size: size,
					op: h.op
				});

				// update
				hibana[i] = hibanaMotion( h );
				if( hibana[i] === false ) {
					hibana.splice(i,1);
				}
			}
		}
		return hibanaRenderBuff.length;
	}
	
	

	function render2() {
		var i, h,
			x,y,st,
			l = hibanaRenderBuff.length;

		if (!hibanaRenderBuff.length) {
			return true;
		}

		if( count % hanabi.persistence === 0 ) {
			cvs.ctx.fillStyle = 'rgba(0, 0, 0, 0.1)';
			cvs.ctx.fillRect(0, 0, cvs.w, cvs.h);
		}
		
		if( rising.rise === false ) {
			x = rising.x;
			y = rising.y - rising.st;
			st = rising.st * rising.gravity;
			rising.st = st < 2 ? 2 : st;
			
			if( y < hanabi.top ) {
				y = hanabi.top;
				rising.rise = true;
			}

			cvs.ctx.strokeStyle = rising.color;
			cvs.ctx.globalAlpha = rising.opacity;
			cvs.ctx.lineWidth = rising.size;
			cvs.ctx.beginPath();
			cvs.ctx.moveTo(x, rising.y);
			cvs.ctx.lineTo(x, y);
			cvs.ctx.stroke();
			rising.y = y;
			count++;
			return true;
		}

		for (i = 0; i < l; i++) {
			h = hibanaRenderBuff[i];
			if( h ) {
				cvs.ctx.fillStyle = h.color;
				cvs.ctx.globalAlpha = h.op;
				cvs.ctx.beginPath();
				cvs.ctx.arc(h.x, h.y, h.size, 0, Math.Radian, true);
				cvs.ctx.fill();
			}
		}
		count++;
		return hibanaRenderBuff.length;
	}

	function animationLoop() {
		if( !hanabiMaker() ) {
			if( rising.rise ) {
				setTimeout( makeHibanaList, 0 );
			}
		}
		if ( render2() ) {
			requestAnimationFrame(animationLoop);
		}
	}

	makeHibanaList();
	animationLoop();

})(this);



