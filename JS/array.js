const array1 = [{ num: 1, num: 2, num: 3, num: 4, num: 5, num: 6, num: 7, num: 8 }, { num: 1, num: 2, num: 3, num: 4, num: 5, num: 6, num: 7, num: 8 }];

const object1 = {};

// console.log(array1);

// Returns the item located at the specified index.
// console.log(array1.at(0));

// Returns the elements of an array that meet the condition specified in a callback function.
// console.log(array1.filter((num) => num % 2 != 0));

// Changes all array elements from start to end index to a static value and returns the modified array
// console.log(array1.fill(1, 2, 5));

// Returns the value of the first element in the array where predicate is true, and undefined otherwise.
// console.log(array1.find((num) => num % 2 == 0));

// Returns a new array with all sub-array elements concatenated into it recursively up to the specified depth.
// console.log(array1.flat(9));

// Calls a defined callback function on each element of an array, and returns an array that contains the results.
// console.log(array1.map((arr) => arr + '🤦🏿‍♂️'))

// Calls the specified callback function for all the elements in an array. The return value of the callback function is the accumulated result, and is provided as an argument in the next call to the callback function.
// console.log(array1.reduce((total, num) => total + num, 0));

let days = 'Monday';

switch (days) {
    case 'Sunday':
        console.log('First Day of the week');
        break;
    case 'Monday':
        console.log('Second Day of the week');
        break;
    case 'Tuesday':
        console.log('Third Day of the week');
        break;
    case 'Wednesday':
        console.log('Fourth Day of the week');
        break;
    case 'Thursday':
        console.log('Fifth Day of the week');
        break;
    case 'Friday':
        console.log('Sixth Day of the week');
        break;
    case 'Saturday':
        console.log('Last Day of the week');
        break;
    default:
        break;
}