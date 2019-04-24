import {promices, promice_chain} from './promices.js';

var pr = promices();

pr.then((data) => {
    //let [ foo, bar, baz ] = data;
    let result = [];
    for(let i in data){
        result.push(JSON.parse(data[i]));
    }
    console.log (result);
}, (err) => {
    console.log(`Error: ${err}`);
});

promice_chain();
