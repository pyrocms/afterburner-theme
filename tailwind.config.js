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
        spacing: {
            px: '1px',
            '0': '0',
            '1': '0.25rem',
            '2': '0.5rem',
            '3': '0.75rem',
            '4': '1rem',
            '5': '1.25rem',
            '6': '1.5rem',
            '8': '2rem',
            '10': '2.5rem',
            '12': '3rem',
            '16': '4rem',
            '20': '5rem',
            '24': '6rem',
            '32': '8rem',
            '40': '10rem',
            '48': '12rem',
            '56': '14rem',
            '64': '16rem',
            '72': '18rem',
            '80': '20rem',
        },
    },
    plugins:[
        require('tailwindcss-transitions')(),
        require('@tailwindcss/custom-forms'),
    ]
};
