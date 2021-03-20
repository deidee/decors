
int[] Id = {1,1,1,0,0,0,1,0,1,0,0,0,0,1,0,1,0,0,1,1,1,0,1,0,0,1,0,1,0,1,0,0,1,0,1,0,1,0,0,1,0,1,1,1,1,0,1,1,1};
int f = 0;
int c = 0;
int s = 72;
int d = 72;
float d2 = 48;
int x = 0;
int y = 0;
float r, g, b, a;

void setup() {
  size(1024, 1024);
  smooth();
  //noLoop();
  
}

void draw() {
  background(#eeeeee);
  translate(260, 260);
  c = 0;
  
  if(f < 120) {
    f++;
      for (int i = 0; i < 7; i++) {
    for (int j = 0; j < 7; j++) {
      
      if(Id[c] == 1) {
        x = j * d;
        y = i * d;
        d2 = 72 + random(3) * 24;
        r = random(127);
        g = random(127) + 128;
        b = random(191);
        fill(color(r, g, b, 127));
        stroke(color(0, 0, 0, 233));
        strokeWeight(4);
        circle(x, y, d);
        stroke(color(0, 0, 0, 223));
        strokeWeight(8);
        circle(x, y, d2);
      }

      c++;
    }
  }
      saveFrame("frames/######.png");
} else {
    noLoop();
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
