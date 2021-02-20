function vendingMachine(inputs, uang) {
    const products = [
        {
            id: 1,
            nama: 'Coca - cola',
            harga: 4000
        },
        {
            id: 2,
            nama: 'Fanta',
            harga: 3500
        },
        {
            id: 3,
            nama: 'Pepsi',
            harga: 4500
        }
    ];

    let totalHarga = 0;
    const output = inputs.map(input => {
        const product = products.find(product => product.id === input.id)
        const total = product.harga * input.qty;
        input.total = total;
        totalHarga += total;
        return input;
    });

    console.log('total = ' + totalHarga);
    console.log('Dibayar = ' + uang);

    let kembalian = uang - totalHarga;
    
    console.log('kembalian = ' + kembalian);
    if (kembalian >= 20000) {
        console.log(Math.floor(kembalian/20000) + ' Lembar 20.000');
        kembalian %= 20000;
    }
    if (kembalian >= 10000) {
        console.log(Math.floor(kembalian/10000) + ' Lembar 10.000');
        kembalian %= 10000;
    }
    if (kembalian >= 5000) {
        console.log(Math.floor(kembalian/5000) + ' Lembar 5.000');
        kembalian %= 5000;
    }
    if (kembalian >= 2000) {
        console.log(Math.floor(kembalian/2000) + ' Lembar 2.000');
        kembalian %= 2000;
    }
    if (kembalian >= 1000) {
        console.log(Math.floor(kembalian/1000) + ' Lembar 1.000');
        kembalian %= 1000;
    }
    if (kembalian >= 500) {
        console.log(Math.floor(kembalian/500) + ' Uang coin 500');
        kembalian %= 500;
    }
    
}

const input = [
    {
        id: 1,
        qty: 2
    },
    {
        id: 3,
        qty: 1
    }
]
vendingMachine(input, 50000)