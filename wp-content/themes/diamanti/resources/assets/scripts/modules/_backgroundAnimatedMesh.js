const FPS = 120;
const TRIANGLE_COUNT = 40;

class BackgroundAnimatedMesh {

  constructor(canvas) {
    if (!canvas) return;

    this.canvas = canvas;
    this.ctx = this.canvas.getContext('2d');
    this.ctx.globalCompositeOperation = "destination-atop";

    const $sectionWrapper = $(this.canvas).parents('section');
    const sectionSpan = $(this.canvas).data('section-span') || 1;

    let $section = null;
    for (let i = 0; i < sectionSpan; i++) {
      $section = $sectionWrapper.next('section');
    }

    canvas.width = window.innerWidth;
    canvas.height = Math.round($section.offset().top);

    this.triangles = [];
    let prevX = 0, prevY = 0;

    for (let i = 0; i < TRIANGLE_COUNT; i++) {
      this.triangles.push({
        x: Math.floor(Math.random() * 10) + 150 + prevX,
        y: Math.floor(Math.random() * 10) + 150 + prevY,
        vx: Math.floor(Math.random() * 50) - 40,
        vy: Math.floor(Math.random() * 50) - 40,
      });
      prevX = prevX > this.canvas.width ? 0 : this.triangles[i].x;
      prevY = prevY > this.canvas.height ? 0 : this.triangles[i].y;
    }

    this.tick();
  }

  distance(point1, point2) {
    let xs = point2.x - point1.x;
    xs = xs * xs;

    let ys = point2.y - point1.y;
    ys = ys * ys;

    return Math.sqrt(xs + ys);
  }

  update() {
    for (var i = 0, x = this.triangles.length; i < x; i++) {
      var s = this.triangles[i];

      s.x += s.vx / FPS;
      s.y += s.vy / FPS;

      if (s.x < 0 || s.x > this.canvas.width) s.vx = -s.vx;
      if (s.y < 0 || s.y > this.canvas.height) s.vy = -s.vy;
    }
  }

  draw() {
    this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);

    this.ctx.beginPath();
    for (var i = 0; i < this.triangles.length; i++) {
      var triangleI = this.triangles[i];
      this.ctx.moveTo(triangleI.x, triangleI.y);
      for (var j = 0; j < this.triangles.length; j++) {
        var triangleII = this.triangles[j];
        if (this.distance(triangleI, triangleII) < 280) {
          this.ctx.lineTo(triangleII.x, triangleII.y);
        }
      }
    }
    this.ctx.lineWidth = 0.3;
    this.ctx.strokeStyle = 'rgba(255, 255, 255, 0.81)';
    this.ctx.stroke();
  }

  tick(triangles) {
    this.draw();
    this.update();
    requestAnimationFrame(() => this.tick(triangles));
  }
}

export default (...args) => setTimeout(() => new BackgroundAnimatedMesh(...args), 50);
