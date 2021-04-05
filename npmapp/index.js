const _ = require('lodash');

const numbers = [19, 98, 6, 17, 07, 02];

_.each(numbers, function(number, i){
    console.log(number);
});