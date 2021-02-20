function bilanganPrima(start, end) {
    let bilanganPirma = [2];
    let result = [];
    for (let i = 2; i < end; i++) {
        const buffer = bilanganPirma;
        let isPrima = true;
        for (let x = 0; x < buffer.length; x++) {
            if (i % buffer[x] === 0) {
                isPrima = false;
            break;
            }
                
        }
        if (isPrima) {
            bilanganPirma.push(i);
            if (i > start) {
            result.push(i);
            } 
            else if (start <= 2) {
                result = bilanganPirma;
            }
        }
    }

    console.log(result);
}
bilanganPrima(2, 50)