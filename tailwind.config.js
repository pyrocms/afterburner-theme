const { colors } = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            colors: {

                gray: {
                    ...colors.gray,
                    900: '#1a202c',
                },

                blue: {
                    ...colors.blue,
                    900: '#007bff',
                },
                indigo: {
                    ...colors.indigo,
                    900: '#3c366b',
                },
                purple: {
                    ...colors.purple,
                    900: '#6f42c1'
                },
                pink: {
                    ...colors.pink,
                    900: '#e83e8c'
                },
                red: {
                    ...colors.red,
                    900: '#dc3545'
                },
                orange: {
                    ...colors.orange,
                    900: '#fd7e14'
                },
                yellow: {
                    ...colors.yellow,
                    900: '#ffc107'
                },
                green: {
                    ...colors.green,
                    900: '#28a745'
                },
                teal: {
                    ...colors.teal,
                    900: '#20c997'
                },
            },
        },
    },
    plugins:[
        require('tailwindcss-transitions')(),
    ]
};
