function pattern() {
    let array = [];
    let x = 1;
    //segitiga atas
    for (let i = 0; i < 4; i++) {
        for (let j = 0; j <= i; j++) {

            if (typeof array[j] === 'undefined') {
                array.push([x]);
            } else {
                array[j].push(x);
            }
            x++;
        }
    }
    //segitiga bawah
    for (let i = 0; i < 4; i++) {
        for (let j = 1; j <= i; j++) {
            if (typeof array[i] === 'undefined') {
                array.push([x]);
            } else {
                array[i].push(x);
            }
            x++;
        }

    }
    //tampilkan
    for (let i = 0; i < array.length; i++) {
        let str = '';
        for (let j = 0; j < array.length; j++) {
            str += array[i][j] + '\t';
        }
        console.log(str);

    }
}

pattern()