export function keyBy(arr, key) {
    let temp = {};

    for (let el of arr) {
        temp[el[key]] = el;
    }

    return temp;
}

export function ksort(arr, key, asc = true) {
    return arr.sort((a, b) => {
        return asc ? a[key] > b[key] : a[key] < b[key];
    })
}