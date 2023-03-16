<!DOCTYPE html>
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>个人主页</title>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="http://www.bootcss.com/p/buttons/css/buttons.css">
  <link rel="stylesheet" id="patternfly-adjusted-css" href="Css/app.css"
  type="text/css" media="all">
  <link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <script type="text/javascript" src="Scripts/jquery.js"></script>

  <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
  <style>
    #main article { border-bottom: none; }
	body{
		    font: 500 .875em PingFang SC,Lantinghei SC,Microsoft Yahei,Hiragino Sans GB,Microsoft Sans Serif,WenQuanYi Micro Hei,sans;
        background-color: #07040e;
	}
  #canvas {
                position: absolute;
    z-index: 10;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    cursor: none;
        }
        .content{
      position: absolute;
    z-index: 11;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
}
.splash{
  position: relative;
  }
  img#qq {
    width: 128px;
    background-size: cover;
    border-radius: 200px;
    box-shadow: 0px 0px 40px rgba(63, 81, 181, 0.72);
    border: 3px solid #00a0ff;
    opacity: 1;
    margin: 0 auto;
    margin-top: 20px;
	margin-bottom: 20px;
	transition: all 1.0s;  
}
#qq:hover {
    box-shadow: 0 0 10px #fff;
    -webkit-box-shadow: 0 0 19px #fff;
    transform:rotate(360deg);
    -ms-transform:rotate(360deg); 	/* IE 9 */
    -moz-transform:rotate(360deg); 	/* Firefox */
    -webkit-transform:rotate(360deg); /* Safari 和 Chrome */
    -o-transform:rotate(360deg); 	/* Opera */
    filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}
  </style>

  
</head>
<body class="home page page-id-194 page-template page-template-page-homepage page-template-page-homepage-php custom-background" ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
  <header role="banner">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
          </button>
          <a class="navbar-brand" id="logo" title="HY-PHP" href="">
           个人主页
          </a>
        </div>
        <!-- end .navbar-header -->
        <div class="navbar-collapse collapse">
          <ul id="menu-primary" class="nav navbar-nav navbar-right">
         
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
              <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_GET['qq']; ?>&site=qq&menu=yes" class="dropdown-toggle">
               <?php echo $_GET['name']; ?>
              </a>
            </li>            
                
              
       
          </ul>
        </div>
        <!-- end .navbar-collapse -->
      </div>
      <!-- end .container -->
    </nav>
    <!-- end .navbar -->
  </header>
  <!-- end header -->
  <div class="jumbotron">
    <div class="container">
      <div class="splash">
        <div class="content">
          <img src="http://q.qlogo.cn/headimg_dl?dst_uin=<?php echo $_GET['qq']; ?>&spec=640" alt="PatternFly logo" id="qq" class="wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown;">
          <h1 class="wow fadeIn animated" data-wow-delay="750ms" style="visibility: visible; animation-delay: 750ms; animation-name: fadeIn;">
            <?php echo $_GET['msg']; ?>
          </h1>
          <p class="description wow fadeIn animated" data-wow-delay="1250ms" style="visibility: visible; animation-delay: 1250ms; animation-name: fadeIn;">
                    </p>
		  <a href="<?php echo $_GET['url']; ?>" class="button button-glow button-border button-rounded button-primary"><i class="fa fa-cloud"></i><?php echo $_GET['ua']; ?></a><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		  <div style="
    width: 100%;
    bottom: 30px;
    box-sizing: border-box;
    left: 100;
">© 2021 by <?php echo $_GET['name']; ?> </div>
        </div>
      </div>
    </div>
  <canvas id="canvas" width="200%" height="200%"></canvas>
  <!-- <div id="particles-js"></div> -->
  
  </div>

 


<script src="Scripts/hovertreewelcome.js"></script>
<script type="text/javascript">

// particlesJS('particles-js',
//   {
//     "particles": {
//       "number": {
//         "value": 110,
//         "density": {
//           "enable": true,
//           "value_area": 800
//         }
//       },
//       "color": {
//         "value": "#ffffff"
//       },
//       "shape": {
//         "type": "circle",
//         "stroke": {
//           "width": 0,
//           "color": "#000000"
//         },
//         "polygon": {
//           "nb_sides": 5
//         },
//         "image": {
//           "src": "img/github.svg",
//           "width": 100,
//           "height": 100
//         }
//       },
//       "opacity": {
//         "value": 0.5,
//         "random": false,
//         "anim": {
//           "enable": false,
//           "speed": 1,
//           "opacity_min": 0.1,
//           "sync": false
//         }
//       },
//       "size": {
//         "value": 1,
//         "random": true,
//         "anim": {
//           "enable": false,
//           "speed": 20,
//           "size_min": 0.1,
//           "sync": false
//         }
//       },
//       "line_linked": {
//         "enable": true,
//         "distance": 40,
//         "color": "#fff",
//         "opacity": 1,
//         "width": 1
//       },
//       "move": {
//         "enable": true,
//         "speed": 3,
//         "direction": "none",
//         "random": false,
//         "straight": false,
//         "out_mode": "out",
//         "attract": {
//           "enable": false,
//           "rotateX": 600,
//           "rotateY": 1200
//         }
//       }
//     },
//     "interactivity": {
//       "detect_on": "canvas",
//       "events": {
//         "onhover": {
//           "enable": true,
//           "mode": "grab"
//         },
//         "onclick": {
//           "enable": true,
//           "mode": "push"
//         },
//         "resize": true
//       },
//       "modes": {
//         "grab": {
//           "distance": 120,
//           "line_linked": {
//             "opacity": 1
//           }
//         },
//         "bubble": {
//           "distance": 400,
//           "size": 40,
//           "duration": 2,
//           "opacity": 8,
//           "speed": 3
//         },
//         "repulse": {
//           "distance": 300
//         },
//         "push": {
//           "particles_nb": 4
//         },
//         "remove": {
//           "particles_nb": 2
//         }
//       }
//     },
//     "retina_detect": true,
//     "config_demo": {
//       "hide_card": false,
//       "background_color": "#b61924",
//       "background_image": "",
//       "background_position": "50% 50%",
//       "background_repeat": "no-repeat",
//       "background_size": "cover"
//     }
//   }

// );


        ; (function (window) {

            var ctx,
                hue,
                logo,
                form,
                buffer,
                target = {},
                tendrils = [],
                settings = {};

            settings.debug = true;
            settings.friction = 0.5;
            settings.trails = 20;
            settings.size = 50;
            settings.dampening = 0.25;
            settings.tension = 0.98;

            Math.TWO_PI = Math.PI * 2;

            // ========================================================================================
            // Oscillator 何问起
            // ----------------------------------------------------------------------------------------

            function Oscillator(options) {
                this.init(options || {});
            }

            Oscillator.prototype = (function () {

                var value = 0;

                return {

                    init: function (options) {
                        this.phase = options.phase || 0;
                        this.offset = options.offset || 0;
                        this.frequency = options.frequency || 0.001;
                        this.amplitude = options.amplitude || 1;
                    },

                    update: function () {
                        this.phase += this.frequency;
                        value = this.offset + Math.sin(this.phase) * this.amplitude;
                        return value;
                    },

                    value: function () {
                        return value;
                    }
                };

            })();

            // ========================================================================================
            // Tendril hovertree.com
            // ----------------------------------------------------------------------------------------

            function Tendril(options) {
                this.init(options || {});
            }

            Tendril.prototype = (function () {

                function Node() {
                    this.x = 0;
                    this.y = 0;
                    this.vy = 0;
                    this.vx = 0;
                }

                return {

                    init: function (options) {

                        this.spring = options.spring + (Math.random() * 0.1) - 0.05;
                        this.friction = settings.friction + (Math.random() * 0.01) - 0.005;
                        this.nodes = [];

                        for (var i = 0, node; i < settings.size; i++) {

                            node = new Node();
                            node.x = target.x;
                            node.y = target.y;

                            this.nodes.push(node);
                        }
                    },

                    update: function () {

                        var spring = this.spring,
                            node = this.nodes[0];

                        node.vx += (target.x - node.x) * spring;
                        node.vy += (target.y - node.y) * spring;

                        for (var prev, i = 0, n = this.nodes.length; i < n; i++) {

                            node = this.nodes[i];

                            if (i > 0) {

                                prev = this.nodes[i - 1];

                                node.vx += (prev.x - node.x) * spring;
                                node.vy += (prev.y - node.y) * spring;
                                node.vx += prev.vx * settings.dampening;
                                node.vy += prev.vy * settings.dampening;
                            }

                            node.vx *= this.friction;
                            node.vy *= this.friction;
                            node.x += node.vx;
                            node.y += node.vy;

                            spring *= settings.tension;
                        }
                    },

                    draw: function () {

                        var x = this.nodes[0].x,
                            y = this.nodes[0].y,
                            a, b;

                        ctx.beginPath();
                        ctx.moveTo(x, y);

                        for (var i = 1, n = this.nodes.length - 2; i < n; i++) {

                            a = this.nodes[i];
                            b = this.nodes[i + 1];
                            x = (a.x + b.x) * 0.5;
                            y = (a.y + b.y) * 0.5;

                            ctx.quadraticCurveTo(a.x, a.y, x, y);
                        }

                        a = this.nodes[i];
                        b = this.nodes[i + 1];

                        ctx.quadraticCurveTo(a.x, a.y, b.x, b.y);
                        ctx.stroke();
                        ctx.closePath();
                    }
                };

            })();

            // ----------------------------------------------------------------------------------------

            function init(event) {

                document.removeEventListener('mousemove', init);
                document.removeEventListener('touchstart', init);

                document.addEventListener('mousemove', mousemove);
                document.addEventListener('touchmove', mousemove);
                document.addEventListener('touchstart', touchstart);

                mousemove(event);
                reset();
                loop();
            }

            function reset() {

                tendrils = [];

                for (var i = 0; i < settings.trails; i++) {

                    tendrils.push(new Tendril({
                        spring: 0.45 + 0.025 * (i / settings.trails)
                    }));
                }
            }

            function loop() {

                if (!ctx.running) return;

                ctx.globalCompositeOperation = 'source-over';
                ctx.fillStyle = 'rgba(8,5,16,0.4)';
                ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height);
                ctx.globalCompositeOperation = 'lighter';
                ctx.strokeStyle = 'hsla(' + Math.round(hue.update()) + ',90%,50%,0.25)';
                ctx.lineWidth = 1;

                if (ctx.frame % 60 == 0) {
                    console.log(hue.update(), Math.round(hue.update()), hue.phase, hue.offset, hue.frequency, hue.amplitude);
                }

                for (var i = 0, tendril; i < settings.trails; i++) {
                    tendril = tendrils[i];
                    tendril.update();
                    tendril.draw();
                }

                ctx.frame++;
                ctx.stats.update();
                requestAnimFrame(loop);
            }

            function resize() {
                ctx.canvas.width = window.innerWidth;
                ctx.canvas.height = window.innerHeight;
            }

            function start() {
                if (!ctx.running) {
                    ctx.running = true;
                    loop();
                }
            }

            function stop() {
                ctx.running = false;
            }

            function mousemove(event) {
                if (event.touches) {
                    target.x = event.touches[0].pageX;
                    target.y = event.touches[0].pageY;
                } else {
                    target.x = event.clientX
                    target.y = event.clientY;
                }
                event.preventDefault();
            }

            function touchstart(event) {
                if (event.touches.length == 1) {
                    target.x = event.touches[0].pageX;
                    target.y = event.touches[0].pageY;
                }
            }

            function keyup(event) {

                switch (event.keyCode) {
                    case 32:
                        save();
                        break;
                    default:
                        // console.log(event.keyCode); hovertree.com
                }
            }

            function letters(id) {

                var el = document.getElementById(id),
                    letters = el.innerHTML.replace('&amp;', '&').split(''),
                    heading = '';

                for (var i = 0, n = letters.length, letter; i < n; i++) {
                    letter = letters[i].replace('&', '&amp');
                    heading += letter.trim() ? '<span class="letter-' + i + '">' + letter + '</span>' : '&nbsp;';
                }

                el.innerHTML = heading;
                setTimeout(function () {
                    el.className = 'transition-in';
                }, (Math.random() * 500) + 500);
            }

            function save() {

                if (!buffer) {

                    buffer = document.createElement('canvas');
                    buffer.width = screen.availWidth;
                    buffer.height = screen.availHeight;
                    buffer.ctx = buffer.getContext('2d');

                    form = document.createElement('form');
                    form.method = 'post';
                    form.input = document.createElement('input');
                    form.input.type = 'hidden';
                    form.input.name = 'data';
                    form.appendChild(form.input);

                    document.body.appendChild(form);
                }

                buffer.ctx.fillStyle = 'rgba(8,5,16)';
                buffer.ctx.fillRect(0, 0, buffer.width, buffer.height);

                buffer.ctx.drawImage(canvas,
                    Math.round(buffer.width / 2 - canvas.width / 2),
                    Math.round(buffer.height / 2 - canvas.height / 2)
                );

                buffer.ctx.drawImage(logo,
                    Math.round(buffer.width / 2 - logo.width / 4),
                    Math.round(buffer.height / 2 - logo.height / 4),
                    logo.width / 2,
                    logo.height / 2
                );

                window.open(buffer.toDataURL(), 'wallpaper', 'top=0,left=0,width=' + buffer.width + ',height=' + buffer.height);

                // form.input.value = buffer.toDataURL().substr(22);
                // form.submit(); hovertree.com
            }

            window.requestAnimFrame = (function () {
                return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function (fn) { window.setTimeout(fn, 1000 / 60) };
            })();

            window.onload = function () {

                ctx = document.getElementById('canvas').getContext('2d');
                ctx.stats = new Stats();
                ctx.running = true;
                ctx.frame = 1;

               

                hue = new Oscillator({
                    phase: Math.random() * Math.TWO_PI,
                    amplitude: 85,
                    frequency: 0.0015,
                    offset: 285
                });

             

                document.addEventListener('mousemove', init);
                document.addEventListener('touchstart', init);
                document.body.addEventListener('orientationchange', resize);
                window.addEventListener('resize', resize);
                window.addEventListener('keyup', keyup);
                window.addEventListener('focus', start);
                window.addEventListener('blur', stop);

                resize();

                if (window.DEBUG) {

                    var gui = new dat.GUI();

                    // gui.add(settings, 'debug');
                    settings.gui.add(settings, 'trails', 1, 30).onChange(reset);
                    settings.gui.add(settings, 'size', 25, 75).onFinishChange(reset);
                    settings.gui.add(settings, 'friction', 0.45, 0.55).onFinishChange(reset);
                    settings.gui.add(settings, 'dampening', 0.01, 0.4).onFinishChange(reset);
                    settings.gui.add(settings, 'tension', 0.95, 0.999).onFinishChange(reset);

                    document.body.appendChild(ctx.stats.domElement);
                }
            };

        })(window);

    </script>

<audio autoplay="autoplay" loop>
	<source src="http://boscdn.djduoduo.com/dj/580/sujicha.aac" type="audio/mpeg">
</audio>
 
</body>
</html>