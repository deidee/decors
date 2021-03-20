
int[] Id = {1,1,1,0,0,0,1,0,1,0,0,0,0,1,0,1,0,0,1,1,1,0,1,0,0,1,0,1,0,1,0,0,1,0,1,0,1,0,0,1,0,1,1,1,1,0,1,1,1};

void setup() {
  size(1024, 1024);
  smooth();
  noLoop();
}

void draw() {
  background(#eeeeee);
  
  int c = 0;
  int d = 48;
  int x = 0;
  int y = 0;
  
  for (int i = 0; i < 7; i++) {
    for (int j = 0; j < 7; j++) {
      
      if(Id[c] == 1) {
        x = j * d;
        y = x * d;
        fill(color(random(127), random(127) + 128, random(191), 127));
        stroke(color(0, 0, 0, 223));
        strokeWeight(8);
        circle(x, y, d);
      }

      c++;
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
