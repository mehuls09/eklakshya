function showTotal(...marks){
    return function(){
        console.log('Sum: ',marks.reduce((sum, element) => sum + element))
        return marks.reduce((sum, element) => sum + element);
    }()/3;
}
var avg=showTotal(10,20,30);
console.log('Average: ',avg);