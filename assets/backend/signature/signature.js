var DrawingBox = (function (dom, console) {
	// canvas helper: http://www.html5canvastutorials.com/tutorials/html5-canvas-lines/#comment-1444615186
	var C = function (canvasSelector, context) {
		this.el = dom.querySelector(canvasSelector);
		this.ctx = this.el.getContext(context || '2d');
		this.size(this.el.width, this.el.height);
		return this;
	}, Cproto = {
		pathBegin: function (x, y) {
			this.ctx.beginPath();
			this.ctx.moveTo(x, y);
			return this;
		},
		pathEnd: function () {
			this.ctx.stroke();
			this.ctx.closePath();
			return this;
		},
		pathDraw: function (x, y) {
			this.ctx.lineTo(x, y);
			return this;
		},
		thickness: function (thickness) {
			this.ctx.lineWidth = thickness;
			return this;
		},
		color: function (color) {
			if (!color) return this.ctx.fillStyle;

			this.ctx.fillStyle = color || '#000';
			this.ctx.strokeStyle = this.ctx.fillStyle;
			return this;
		},
		fill: function (x, y, w, h, thicknessOffset) {
			if (typeof thicknessOffset === 'undefined') {
				this.ctx.fillRect(x, y, w, h);
				return this;
			}

			this.ctx.fillRect(x - this.ctx.lineWidth / 2, y - this.ctx.lineWidth / 2, w, h);
			return this;
		},
		clear: function () {
			this.ctx.clearRect(0, 0, this.ctx.width, this.ctx.height);
			return this;
		},
		size: function (w, h) {
			// http://stackoverflow.com/questions/4938346/canvas-width-and-height-in-html5
			if (!w) return { w: this.ctx.width, h: this.ctx.height };

			this.ctx.width = w;
			this.ctx.height = h;

			// clear?

			return this;
		},
		zoom: function (factor) {
			// http://stackoverflow.com/a/4939066/1037948

			// explicitly unzoom
			if (factor === false) factor = 1 / (this.zoomFactor || 1);
				// otherwise return the current zoom
			else if (!factor) return this.zoomFactor || 1;

			this.ctx.width *= factor;
			this.ctx.height *= factor;

			this.zoomFactor = factor;

			return this;
		}
	};
	for (var k in Cproto) if (Cproto.hasOwnProperty(k)) C.prototype[k] = Cproto[k];

	var P = function (canvasSelector) {
		var ME = this
			, canvas = new C(canvasSelector)
			, stateOn = 'draw'
			, fnMove = function (e) {
				if (ME.state == stateOn) {
					var mouseX = e.pageX - this.offsetLeft;
					var mouseY = e.pageY - this.offsetTop;
					// ME.canvas.fill(mouseX - 1, mouseY - 1, ME.thickness, ME.thickness);
					ME.canvas.pathBegin(ME.lastX, ME.lastY);
					ME.canvas.pathDraw(mouseX, mouseY);
					ME.canvas.pathEnd();
					ME.lastX = mouseX;
					ME.lastY = mouseY;

					if (ME.debug) c.log('x:' + mouseX + ',y:' + mouseY);
				}
			}
			, fnStart = function (e) {
				ME.state = stateOn;
				// starting position
				ME.lastX = e.pageX - this.offsetLeft;
				ME.lastY = e.pageY - this.offsetTop;
			}
			, fnStop = function (e) {
				delete ME.state; // ME.state = stateOff;
			}
			;

		ME.canvas = canvas; // save for other methods
		ME.SetThickness(2);
		ME.SetColor("rgba(0,0,0,255)");

		var events = {
			mousemove: fnMove,
			mousedown: fnStart,
			mouseup: fnStop,
            // mouseleave: fnStop,

			touchmove: fnMove,
			touchstart: fnStart,
			touchend: fnStop
		};
		for (var ev in events) {
			if (events.hasOwnProperty(ev)) canvas.el.addEventListener(ev, events[ev]);
		}

		// ME.Clear(); // set bg to white so that saving isn't transparent?
	};

	P.prototype.SetColor = function (val) {
		this.color = val;
		return this.canvas.color(val);
	}
	P.prototype.SetThickness = function (val) {
		this.thickness = val;
		return this.canvas.thickness(val);
	}
	P.prototype.Download = function (saveAs) {
		var data = this.canvas.el.toDataURL('image/png');
		var a = dom.createElement('a');
		a.href = data.replace('image/png', 'image/octet-stream');
		a.download = saveAs || 'your-drawing.png';
		a.click();
	}
	P.prototype.Clear = function () {
		this.canvas.clear();
		return;
		/*
		var ME=this, lastColor = ME.canvas.color();
		ME.canvas.color("rgba(255,255,255,255)");
		ME.canvas.fill(0,0,ME.canvas.ctx.width,ME.canvas.ctx.height);
		ME.canvas.color(lastColor);
		*/
	}

	// expose
	return P;
  })(document, console || { log: function () { } });

  // run it
  window.signatureBox = new DrawingBox('#signaturebox');
  // make sure to expose helper functions via `window` for fiddle
  window.dl = function () { signatureBox.Download(document.getElementById('filename').value); }
  window.clr = function () { signatureBox.Clear(); }
  var colorIndex = 0, colors = ['black', 'blue', 'red', 'green', 'purple'];
  window.cycleColor = function () {
	//if(colorIndex++ >= colors.length) colorIndex = 0;
	signatureBox.SetColor(colors[++colorIndex >= colors.length ? (colorIndex = 0) : colorIndex]);
}

// run it
window.signatureBox1 = new DrawingBox('#signaturebox1');
// make sure to expose helper functions via `window` for fiddle
window.dl = function () { signatureBox1.Download(document.getElementById('filename').value); }
window.clr1 = function () { signatureBox1.Clear(); }
var colorIndex = 0, colors = ['black', 'blue', 'red', 'green', 'purple'];
window.cycleColor = function () {
//if(colorIndex++ >= colors.length) colorIndex = 0;
signatureBox1.SetColor(colors[++colorIndex >= colors.length ? (colorIndex = 0) : colorIndex]);
}
