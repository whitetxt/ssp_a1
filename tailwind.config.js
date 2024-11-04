/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {},
  },
  plugins: [require("@tailwindcss/typography"), require("daisyui")],
  daisyui: {
      themes: [
          {
              "forestLight": {
                  "primary": "#606c38",
                  "secondary": "#dda15e",
                  "accent": "#bc6c25",
                  "neutral": "#fefae0",
                  "base-100": "#f1f8f2",
              },
              "forestDark": {
                  "primary": "#7a9e7e",
                  "secondary": "#b3efb2",
                  "accent": "#001a23",
                  "neutral": "#e8f1f2",
                  "base-100": "#31493c",
              },
          },
      ],
  },
};
