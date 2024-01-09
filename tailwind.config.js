/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                mona75: [
                    '"Mona Sans",Arial',
                    {
                        fontVariationSettings: '"wdth" 75',
                    },
                ],
                mona100: [
                    '"Mona Sans",Arial',
                    {
                        fontVariationSettings: '"wdth" 100',
                    },
                ],
                mona125: [
                    '"Mona Sans",Arial',
                    {
                        fontVariationSettings: '"wdth" 125',
                    },
                ],
            },
        },
    },
    plugins: [],
};
