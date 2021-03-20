Node[] node = new Node[12];

void setup() {
  size(1024, 1024);
  smooth();
  noLoop();
  
  for (int i = 0; i < node.length; i++) {
    node[i] = new Node();
  }
}

void draw() {
  background(#eeeeee);
  
  for (int i = 0; i < node.length; i++) {
    node[i].display();
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

class Node
{
  float x, y, d;
  
  Node() {
    d = 24 + 24 * random(16);
    x = -d + random(width + d);
    y = -d + random(height + d);
  }
  
  void display() {
    d = 24 * 2 + 24 * random(12);
    x = -d + random(width + d);
    y = -d + random(height + d);
    
    fill(color(random(127), random(127) + 128, random(191), 127));
    stroke(color(0, 0, 0, 223));
    strokeWeight(8);
    circle(x, y, d);
  }
}
