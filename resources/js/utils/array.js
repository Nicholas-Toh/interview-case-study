export function keyBy(arr, key) {
    let temp = {};

    for (let el of arr) {
        temp[el[key]] = el;
    }

    return temp;
}
