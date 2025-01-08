import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';


// export default {
//     content: [
//         './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
//         './storage/framework/views/*.php',
//         './resources/views/**/*.blade.php',
//     ],

//     theme: {
//         extend: {
//             fontFamily: {
//                 sans: ['Figtree', ...defaultTheme.fontFamily.sans],
//             },
//         },
//     },

//     plugins: [forms],
// };

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.{html,js,php}", // Bao gồm tất cả các tệp HTML, JS, PHP trong resources
      "./resources/views/auth/**/*.blade.php", // Bao gồm các tệp blade.php trong thư mục views/auth
    ],
    theme: {
      extend: {
        colors: {
          'custom-primary': '#B2D235', // Màu nền
          'custom-primary-hover': '#A2C32C', // Màu khi hover
        },
      },
    },
    plugins: [],
  }
  
