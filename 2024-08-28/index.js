let arr = ["red", 'green', 'blue'];
arr[0] = 'white';
let arr2 = ['yello', 'pink'];
for(let i=0; i<arr.length; i++) {
    console.log(arr[i]);
}

console.log(arr.concat(arr2));

arr.map(e => {
    console.log(e);
})

let join = arr.join("#");
console.log(join);

console.log(arr.slice(0, 2));
console.log(arr.splice(0, 1));





let str = "Alice,Bob,Charlie,David,Eve";
let names = str.split(",");
console.log(names);
names.sort();
console.log(names);

let str2 = names.join(",");
console.log(str2);

names.push("Frank");
names.sort();
let new_arr = [];
names.map(e => {
    (e.length > 3) ? new_arr.push(e): null;
})

console.log(new_arr);

