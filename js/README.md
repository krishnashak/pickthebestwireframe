# JavaScript (Final Wireframe)

## Structure

- **`main.js`** – Entry point. Runs on `DOMContentLoaded` and initializes AOS + feature modules. Keep this the last script loaded.
- **Feature modules** – One file per feature, each exposing an `init*` function called from `main.js`:
  - `scroll-parallax.js` – Hero/video scroll fade and parallax.
  - `accordion.js` – FAQ accordion and image swap.

## Conventions

1. **No inline JS** – All script logic lives under `js/` and is loaded via `<script src="js/...">`.
2. **Load order** – Vendor (e.g. AOS) first, then feature modules, then `main.js`.
3. **Scripts in HTML** – Place all `<script>` tags at the end of `<body>` so the DOM is ready.
4. **Safe init** – Feature inits guard with `if (!element) return` so missing DOM doesn’t throw.
5. **One entry** – Only `main.js` uses `DOMContentLoaded`; it calls the init functions.

## Adding a new feature

1. Add `js/your-feature.js` and define `function initYourFeature() { ... }`.
2. In `main.js`, call `if (typeof initYourFeature === 'function') initYourFeature();`.
3. In `index.php`, add `<script src="js/your-feature.js"></script>` before `main.js`.
