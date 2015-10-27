
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


// forked from norahiko's "花火 - fireworks" http://jsdo.it/norahiko/ls6x
// =================================
// Const
// =================================
var PI = Math.PI;
var PI_2 = PI * 2;

// =================================
// Config
// =================================
var defaultConfig = {
    duration: 8000,         // ms
    delay: 0,               // ms
    radius: 5,              // px
    amount: 100,            // particle number
    speed: 4,
    gravity: 0.05,
    friction: 0.96,         
    reduction: 0.98,
    left: 0.5,
    top: 0.3,
    color: "#ff0000"
};

// =================================
// Main
// =================================
window.addEventListener("load", function(){
    Canvas.canvas = document.querySelector("#prueba");
    Canvas.canvas.width = document.documentElement.clientWidth;
    Canvas.canvas.height = document.documentElement.clientHeight;
    Canvas.context = Canvas.canvas.getContext("2d");
    Canvas.context.fillStyle = "#1071FF";

    for(var i = 0; i < 25; i++){
        var firework = new Firework({
            duration: 700,
            left: Math.random() * 0.5 + 0.25,
            top: Math.random() * 0.5 + 0.25,
            amount: 50,
            delay: 250 * i,
            radius: 4,
            reduction: 1,
            friction: 0.95,
            speed: 10,
            color: "hsl(" + Math.random() * 360 + ", 100%, 50%)"
        });
        Canvas.add(firework);
    }
    
    Canvas.start();
}, false);

// =================================
// Firework
// =================================
function Firework(config){
    this.setConfig(config || {});
    this.particleImage = createParticleImage(this.radius, this.color);
    this.diameter = this.radius * 2;
    this.isActive = true;
    this.fadeoutOpacity = 0;
}

Firework.prototype = {
    setConfig: function(config){
        for(var key in defaultConfig){
            if(config[key] === undefined){
                this[key] = defaultConfig[key];
            }else{
                this[key] = config[key];
            }
        }
    },
        
    initParticles: function(){
        this.particles = [];
        var x = this.canvas.width * this.left;
        var y = this.canvas.height * this.top;
        var maxSpeed = (this.speed / 2) * (this.speed / 2);
        
        while(this.particles.length < this.amount){
            var vx = (Math.random() - 0.5) * this.speed;
            var vy = (Math.random() - 0.5) * this.speed;         
            if(vx*vx + vy*vy <= maxSpeed){
                this.particles.push(new Particle(x, y, vx, vy));
            }
        }
    },
    
    update: function(passed){
        if(this.isActive === false ||
           this.started(passed) === false) return;
        
        if(this.ended(passed)){
            this.fadeout();
            return;
        }        
        this.move();
        this.render();
    },
    
    move: function(){
        var particles = this.particles;
        var particle;
        for(var i = 0, len = particles.length; i < len; i++){
            particle = particles[i];
            particle.vx *= this.friction;
            particle.vy = particle.vy * this.friction + this.gravity;
            particle.x += particle.vx;
            particle.y += particle.vy;
        }
    },
    
    render: function(){
        this.context.globalAlpha = 1;
        this.renderParticles();
    },
    
    renderParticles: function(){
        var diameter = this.diameter *= this.reduction;
        var context = this.context;
        var particles = this.particles;
        var particleImage = this.particleImage;
        var p;
        for(var i = 0, len = particles.length; i < len; i++){
            p = particles[i];
            context.drawImage(particleImage, p.x, p.y, diameter, diameter);
        }
    },
    
    started: function(passed){
        return this.delay < passed;
    },
    
    ended: function(passed){
        return this.duration + this.delay < passed;
    },
    
    fadeout: function(){
        this.fadeoutOpacity -= 0.1;
        if(this.fadeoutOpacity <= 0) {
            this.isActive = false;
            return;
        }
        this.move();
        this.context.globalAlpha = this.fadeoutOpacity;
        this.renderParticles();
    }
};



// =================================
// Particle
// =================================
function Particle(x, y, vx, vy){
    this.x = x;
    this.y = y;
    this.vx = vx;
    this.vy = vy;
}

// =================================
// Canvas
// =================================
var Canvas = {
    fireworks: [],
    
    add: function(firework){
        firework.canvas = this.canvas;
        firework.context = this.context;
        firework.initParticles();
        this.fireworks.push(firework);
    },
    
    start: function(){
        this.startTime = Number(new Date());
        this.update();
    },
    
    fill: function(){
        this.context.globalAlpha = 1;
        this.context.fillRect(0, 0, this.canvas.width, this.canvas.height);
    },
    
    // main loop
    update: function(){
        this.fill();
        var passed = new Date() - this.startTime;
        var activeFireworkCount = 0;
        this.fireworks.forEach(function(firework){
            if(firework.isActive){
                firework.update(passed);
                activeFireworkCount++;
            }
        }.bind(this));
        
        if(0 < activeFireworkCount){
            requestAnimationFrame(this.update.bind(this));
        }else{
            requestAnimationFrame(this.fadeout.bind(this, 10));
        }
    },
    
    fadeout: function(count){
        if(count < 0) return;    // animation end
        this.context.globalAlpha = 1;
        this.context.fillStyle = "rgba(0, 0, 0, 0.2)";
        this.fill();
        requestAnimationFrame(this.fadeout.bind(this, count - 1));
    }
};


// =================================
// Utils
// =================================
if (Function.prototype.bind === undefined){
  Function.prototype.bind = function( obj ) {
    var slice = [].slice,
        args = slice.call(arguments, 1), 
        self = this, 
        bound = function () {
          return self.apply( obj || window ,  args.concat( slice.call(arguments) ) );    
        };
    bound.prototype = this.prototype;
    return bound;
  };
}

function createParticleImage(radius, color){
    var size = radius * 2;
    var canvas = document.createElement("canvas");
    canvas.width = canvas.height = size;
    var context = canvas.getContext("2d");
    
    var gradient = context.createRadialGradient(radius, radius, 0, radius, radius, size);
    gradient.addColorStop(0, "white");
    gradient.addColorStop(0.1, "white");
    gradient.addColorStop(0.3, color);
    gradient.addColorStop(1, "rgba(0, 0, 0, 0)");

    context.fillStyle = gradient;
    context.beginPath();
    context.arc(radius, radius, radius, 0, PI_2, true);
    context.fill();
    //return canvas

    var particle = new Image();
    particle.src = canvas.toDataURL();
    return particle;
}

//set window.requestAnimationFrame
(function (w, r) {
    w['r'+r] = w['r'+r] || w['webkitR'+r] || w['mozR'+r] || w['msR'+r] || w['oR'+r] || function(c){ w.setTimeout(c, 1000 / 60); };
})(window, 'equestAnimationFrame');








