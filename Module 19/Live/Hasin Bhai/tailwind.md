1.bun install 
2.Tailwind install
    ->  bun install -D tailwindcss postcss autoprefixer

    -> bunx tailwindcss init -p
 

3.tailwind.config.js er vitore paste 
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],

4.app.css
  @tailwind base;
@tailwind components;
@tailwind utilities;