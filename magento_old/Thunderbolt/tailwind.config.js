/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    './**/*.phtml',
    './**/*.xml',
    '../../../../code/ScooterDynamics/**/*.phtml',
    '../../../../code/ScooterDynamics/**/*.xml'
  ],
  theme: {
    extend: {
      screens: {
        xs: '480px'
      }
    }
  }
};
