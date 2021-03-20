
float s = 12;
float columns, rows, x, y, w, h;

void setup() {
  size(851, 315);
  noLoop();
  noStroke();
  surface.setResizable(true);
  
  columns = ceil(width / s);
  rows = ceil(height / s);
}

void draw() {
  background(#ffffff);
  
  for(float i = 0; i < rows; i++) {
    for(float j = 0; j < columns; j++) {
      fill(color(random(127), random(127) + 128, random(191), 127));
      x = j * s;
      y = i * s;
      w = s + random(3);
      h = s + random(3);
      rect(x, y, w, h);
    }
  }
}

void mouseClicked() {
  redraw();
}

void keyPressed() {
  if (key == 32) {
    redraw();
  }
  
  if (key == ENTER) {
    save(year()+"-"+month()+"-"+day()+"-"+hour()+"-"+minute()+"-"+second()+".png");
  }
}
