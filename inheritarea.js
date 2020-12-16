function Shape(width,length){
    this.width=width;
    this.length=length;
    this.area=function(){
        console.log('Area of Rectangle:',(this.width*this.length));
        console.log('Perimeter of Rectangle:',(2*(length+width)));
    }
}
function Triangle(width,length){
     Shape.call(width,length);
      this.Area=function(){
         console.log('Area of Triangle: ',(width*length)/2);
         console.log('Perimeter of Triangle:',(length+length+width));
     }
}  
var rec=new Shape(10,20);
rec.area();
var tri=new Triangle(10,20);
tri.Area();  