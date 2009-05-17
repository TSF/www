/*  carousel.js
 *  (c) 2009 Christophe VG & TheSoftwareFactory <xtof@thesoftwarefactory.be>
 *
 *  Prototype is freely distributable under the terms of the BSD license.
 *  For details, see http://thesoftwarefactory.be/wiki/BSD_License
 */

Object.prototype.setOpacity = function(opacity) {
    this.style.opacity = (opacity / 100);
    this.style.MozOpacity = (opacity / 100);
    this.style.KhtmlOpacity = (opacity / 100);
    this.style.filter = "alpha(opacity=" + opacity + ")";
};

function Carousel(banners, tabs, transitionTime, showTime) {
    this.banners        = banners;
    this.tabs           = tabs;
    this.transitionTime = transitionTime;
    this.showTime       = showTime;

    this.frameRate      = 25;
    this.frames         = (this.transitionTime / 1000) * this.frameRate;
    this.step           = 100 / this.frames;

    this.mustStop = true;
    this.onReady  = function() {
	if( this.mustStop ) { return; } 
	this.from = this.to;
	this.to   = this.from + 1 < this.banners.length ? this.from + 1 : 0;
	setTimeout( function(me){return function(){me.crossfade();}}(this),
		    this.showTime);
    };

    for(var i=0; i<this.tabs.length; i++ ) {
	this.tabs[i].onclick = function(me,idx) {
	    return function() { 
		me.from = me.to;
		me.to = idx; 
		me.crossfade(); 
	    }
	}(this, i);
    }
};
    
Carousel.prototype.swapImage = function(img) {
    var src = img.src;
    var alt = img.alt;
    img.src = alt;
    img.alt = src;
};

Carousel.prototype.showBanners = function() {
    for(var i=0; i<this.banners.length;i++) {  
	this.banners[i].setOpacity(this.opacities[i]);
    }
};

Carousel.prototype.showTabs = function() {
    // when to-opacity reaches/passes 25%, it's time to show the new tab
    var pctCompleted =  
	parseInt(((this.opacities[this.to] / this.step) / this.frames) * 100);
    if( pctCompleted >= 25 && pctCompleted <= 25 + this.step ) {
	this.swapImage(this.tabs[this.to]);
	if(this.tabs[this.from] != undefined ) { 
	    this.swapImage(this.tabs[this.from]) 
	};
    }
};

Carousel.prototype.show = function() {
    this.showBanners();
    this.showTabs();
};

Carousel.prototype.crossfade = function() {
    this.show();
    if(this.from != undefined ) { this.opacities[this.from] -= this.step; }
    this.opacities[this.to] += this.step;
    
    if( this.opacities[this.to] < 100 ) {
	setTimeout( function(me){return function(){me.crossfade();}}(this), 
		    1000 / this.frameRate );
    } else {
	for(var i=0; i<this.opacities.length;i++ ) {
	    this.opacities[i] = 0;	    
	}
	this.opacities[this.to] = 100;
	this.show();
	this.onReady();
    }
};
 
Carousel.prototype.start = function() {
    this.opacities = new Array(this.banners.length); 
    for(var i=0; i<this.banners.length; i++) { this.opacities[i] = 0; }
    this.from = this.banners.length;
    this.to   = 0;

    this.proceed();
};

Carousel.prototype.pause = function() {
    if( !this.mustStop ) {
	this.mustStop = true;
    }
};

Carousel.prototype.proceed = function() {
    if( this.mustStop ) {
	this.mustStop = false;
	this.crossfade();
    }
};
