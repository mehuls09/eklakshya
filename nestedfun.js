function showProduct(name,brand,cost){
    return function(discount){
        console.log('Name:',name,'Brand:',brand,'Cost:',cost,'Discount:',discount);
    }
}
print=showProduct('TV','Sony',90000);
print(20000);