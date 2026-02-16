/**
 * Home page entry: init AOS and feature modules when DOM is ready.
 */
document.addEventListener('DOMContentLoaded', () => {
  if (typeof AOS !== 'undefined') {
    AOS.init({ duration: 1000, once: true });
  }
  if (typeof initScrollParallax === 'function') initScrollParallax();
  if (typeof initAccordion === 'function') initAccordion();
});
